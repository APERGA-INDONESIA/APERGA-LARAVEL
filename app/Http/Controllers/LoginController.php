<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

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
