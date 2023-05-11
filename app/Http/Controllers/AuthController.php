<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
        // menampilkan  formulir login
    }

    public function login(Request $request)
    {
        // logic untuk melakukan login
    }
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
