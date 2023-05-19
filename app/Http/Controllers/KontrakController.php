<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontrakController extends Controller
{
    public function showDaftarPekerja()
    {
        return view('daftarpekerja');
    }

    public function showDetailPekerja()
    {
        return view('detailpekerja');
    }

}
