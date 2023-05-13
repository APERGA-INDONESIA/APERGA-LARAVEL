<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontrakController extends Controller
{
    public function index()
    {
        return view('daftarpekerja');
    }
}
