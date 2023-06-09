<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Models\OrderTransaction;


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

        // Update data profil jika ada perubahan
        if (!empty($request->name)) {
            $user->name = $request->name;
        }
        if (!empty($request->alamat)) {
            $user->alamat = $request->alamat;
        }
        if (!empty($request->profesi)) {
            $user->profesi = $request->profesi;
        }
        if (!empty($request->tanggallahir)) {
            $user->tanggallahir = $request->tanggallahir;
        }

        $user->save();

        // Update data keamanan akun jika ada perubahan
        if (!empty($request->email)) {
            $user->email = $request->email;
        }
        if (!empty($request->phone)) {
            $user->phone = $request->phone;
        }
        if (!empty($request->new_password)) {
            $user->password = bcrypt($request->new_password);
        }

        $user->save();

        return redirect()->back()->withSuccess('Profil berhasil diperbarui.');
    }

    public function showEditForm()
    {
        $user = Auth::user();
        $orderTransactions = OrderTransaction::where('user_id', $user->id)->get();
        return view('editprofile', compact('user', 'orderTransactions'));
    }
}
