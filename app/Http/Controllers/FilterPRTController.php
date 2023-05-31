<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PRT;

class FilterPRTController extends Controller
{
    public function search(Request $request)
    {
        // Ambil parameter pencarian dari $request
        $params = json_decode($request->input('params'), true);

        // Ambil nilai dari parameter 'umur', 'rating', dan 'gaji'
        $umur = $params['umur'] ?? null;
        $rating = $params['rating'] ?? null;
        $gaji = $params['gaji'] ?? null;

        // Ambil ID PRT dengan user_id = 0
        $query = PRT::where('user_id', 0);
        $prtIds = $query->pluck('id')->toArray();

        // Lakukan logika pencarian berdasarkan parameter yang diterima
        $query = PRT::whereIn('id', $prtIds);

        // Urutkan data PRT berdasarkan opsi yang dipilih
        if ($umur) {
            if ($umur === 'PRT dengan kategori usia tertua') {
                $query->orderBy('umur', 'desc');
            } elseif ($umur === 'PRT dengan kategori usia termuda') {
                $query->orderBy('umur', 'asc');
            }
        }

        if ($rating) {
            if ($rating === 'PRT dengan perolehan rating tertinggi') {
                $query->orderBy('rating', 'desc');
            } elseif ($rating === 'PRT dengan perolehan rating terendah') {
                $query->orderBy('rating', 'asc');
            }
        }

        if ($gaji) {
            if ($gaji === 'PRT dengan upah gaji tertinggi') {
                $query->orderBy('gaji', 'desc');
            } elseif ($gaji === 'PRT dengan upah gaji terendah') {
                $query->orderBy('gaji', 'asc');
            }
        }

        // Eksekusi query dengan menggunakan paginate(6)
        $prts = $query->paginate(36);

        // Kembalikan data PRT dalam bentuk JSON
        return response()->json($prts);
    }
}



