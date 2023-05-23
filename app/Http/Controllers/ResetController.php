<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResetController extends Controller
{
    public function showReset()
    {
        return view('reset');
        // Menampilkan formulir pendaftaran
    }

    public function showInputNewPassword()
    {
        return view('inputnewpasssword');
        // Menampilkan formulir pendaftaran
    }
}
