<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BantuanController extends Controller
{
    public function showBantuan()
    {
        return view('bantuan');
    }
}
