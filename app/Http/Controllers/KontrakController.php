<?php

namespace App\Http\Controllers;

use App\Models\Prt;
use Illuminate\Http\Request;

class KontrakController extends Controller
{
    public function showDaftarPekerja()
    {
        $userId = auth()->id();
        $pekerja = Prt::where('user_id', $userId)
            ->whereBetween('id', [16, 269])
            ->paginate(10);

        return view('daftarpekerja', compact('pekerja'));
    }

    public function showDetailPekerja($id)
    {
        $pekerja = Prt::findOrFail($id);

        return view('detailpekerja', compact('pekerja'));
    }


    public function batalkanKontrak($id)
    {
        $pekerja = Prt::findOrFail($id);
        $pekerja->user_id = 0; // Mengubah user_id menjadi nol
        $pekerja->save();

        // Lanjutkan dengan tindakan lain yang diperlukan setelah membatalkan kontrak

        return redirect()->back()->with('success', 'Kontrak berhasil dibatalkan.');
    }







}
