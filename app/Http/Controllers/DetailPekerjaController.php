<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailPekerjaController extends Controller
{
    public function showDetailPekerja()
    {
        return view('detail-pekerja');
    }

}
