<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class EditProfilController extends Controller
{
    public function update(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id);

        // Menghandle gambar profil
        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $fileName = $file->getClientOriginalName();
            $fileSave = $request->name . '-' . $fileName;
            $path = 'Images/Profile Image/';

            if (File::exists($path . $user->profile_image)) {
                File::delete($path . $user->profile_image);
            }

            $file->move($path, $fileSave);
            $user->profile_image = $fileSave;
        }

        // Menghandle gambar header
        if ($request->hasFile('header_image')) {
            $file = $request->file('header_image');
            $fileName = $file->getClientOriginalName();
            $fileSave = $request->name . '-' . $fileName;
            $path = 'Images/Header Image/';

            if (File::exists($path . $user->header_image)) {
                File::delete($path . $user->header_image);
            }

            $file->move($path, $fileSave);
            $user->header_image = $fileSave;
        }

        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->save();

        return redirect()->back();
    }

    public function showEditForm()
    {
        $user = Auth::user();
        return view('editprofile', compact('user'));
    }

}
