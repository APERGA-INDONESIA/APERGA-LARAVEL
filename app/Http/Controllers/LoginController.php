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


    public function update(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id);

        $file = $request->file('profile_image');

        $fileName = $file->getClientOriginalName();
        $fileSave = $request->name . '-' . $fileName;

        $path = 'Images/Profile Image/';

        if ($request->has('profile_image')) {
            if (File::exists($path . $user->profile_image)) {
                File::delete($path . $user->profile_image);
                $file->move($path, $fileSave);
            } else {
                $file->move($path, $fileSave);
            }
        }

        $user->update(
            [
                'name' => $request->name,
                'gaji' => $request->gaji,
                'phone' => $request->phone,
                'profile_image' => $fileSave,
            ]
        );

        return redirect()->back();
    }
}
