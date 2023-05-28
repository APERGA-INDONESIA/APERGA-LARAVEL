<?php

namespace App\Http\Controllers;

use App\models\Prt;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function filterPRT(Request $request)
    {
        $keyword = $request->input('keyword', '');

        // Logika untuk melakukan pencarian berdasarkan kriteria

        $prts = Prt::where('nama', 'like', '%' . $keyword . '%')
            ->orWhere('lokasi', 'like', '%' . $keyword . '%')
            ->paginate(36);

        $request->session()->put('keyword', $keyword); // Simpan keyword di session

        return view('pencarian', compact('prts'));
    }

    public function filterPRTPost(Request $request)
    {
        $keyword = $request->input('keyword', '');

        $prts = Prt::where('nama', 'like', '%' . $keyword . '%')
            ->orWhere('lokasi', 'like', '%' . $keyword . '%')
            ->paginate(36);

        $request->session()->put('keyword', $keyword); // Simpan keyword di session

        return view('pencarian', compact('prts'));
    }
}
