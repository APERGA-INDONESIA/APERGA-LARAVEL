<?php

namespace App\Http\Controllers;

use App\models\Prt;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function filterPRT(Request $request)
    {
        $nama = $request->input('nama');
        $lokasi = $request->input('lokasi', '');

        // Logika untuk melakukan pencarian berdasarkan kriteria

        $prts = Prt::where('nama', 'like', '%' . $nama . '%')
            ->where('lokasi', 'like', '%' . $lokasi . '%')
            ->paginate(36);

        return view('pencarian', compact('prts'));
    }

    public function filterPRTPost(Request $request)
    {
        $keyword = $request->input('keyword');

        $prts = Prt::where('nama', 'like', '%' . $keyword . '%')
            ->orWhere('lokasi', 'like', '%' . $keyword . '%')
            ->paginate(36);

        return view('pencarian', compact('prts'));
    }

}
