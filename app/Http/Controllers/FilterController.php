<?php

namespace App\Http\Controllers;
use App\models\Prt;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function filterPRT(Request $request)
    {
        // Logika pencarian PRT berdasarkan kriteria tertentu
        // Contoh: Menerima parameter dari form pencarian

        $nama = $request->input('nama');
        $lokasi = request('lokasi', ''); // Memberikan nilai default berupa string kosong jika tidak ada parameter 'lokasi' dalam permintaan

        // Logika untuk melakukan pencarian berdasarkan kriteria

        // Mengambil data PRT yang sesuai dengan kriteria pencarian


        $prts = Prt::where('nama', 'like', '%' . $nama . '%')
            ->where('lokasi', 'like', '%' . $lokasi . '%')
            ->paginate(36);



        return view('pencarian', compact('prts'));
    }
}
