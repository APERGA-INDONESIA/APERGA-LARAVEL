<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
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
}
