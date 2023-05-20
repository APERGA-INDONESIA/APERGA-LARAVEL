<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
        // Menampilkan formulir pendaftaran
    }

    public function register(Request $request)
    {
        // Logika untuk memproses data pendaftaran
    }
}
