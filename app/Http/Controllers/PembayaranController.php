<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PembayaranController extends Controller
{
    public function showPesanan()
    {
        return view('pembayaran');
    }

    public function showQRIS()
    {
        return view('pembayaranqris');
    }

    public function verifikasiPembayaran()
    {
        return view('pembayaran-terverifikasi');
    }


}
