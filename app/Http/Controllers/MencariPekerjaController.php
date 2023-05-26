<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MencariPekerjaController extends Controller
{
    public function showPesanan()
    {
        return view('pembayaran');
    }

    public function showQRIS()
    {
        return view('pembayaranqris');
    }

}
