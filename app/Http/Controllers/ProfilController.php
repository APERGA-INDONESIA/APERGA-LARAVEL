<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilController extends Controller
{
    public function showProfil()
    {
        // Mendapatkan data pengguna yang sedang login
        $user = auth()->user();

        // Mengirim data pengguna ke tampilan 'profile'
        return view('profile', compact('user'));
    }
}
