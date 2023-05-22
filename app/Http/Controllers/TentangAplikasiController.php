<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangAplikasiController extends Controller
{
    public function showTentangAplikasi()
    {
        return view('tentangaplikasi');
    }

}
