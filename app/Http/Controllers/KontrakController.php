<?php

namespace App\Http\Controllers;

use App\Models\Prt;
use App\Models\User;
use App\Models\OrderTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class KontrakController extends Controller
{
    public function showDaftarPekerja()
    {
        $userId = auth()->id();
        $pekerja = Prt::where('user_id', $userId)
            ->whereBetween('id', [16, 269])
            ->paginate(20);

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
        $pekerja->update(['user_id' => 0]);

        // Lanjutkan dengan tindakan lain yang diperlukan setelah membatalkan kontrak

        return redirect()->back()->with('success', 'Kontrak berhasil dibatalkan.');
    }

    public function updatePekerja(Request $request)
    {
        // Mendapatkan pekerja id dari permintaan POST
        $pekerjaId = $request->input('pekerjaId');

        // Melakukan pembaruan pada database
        try {
            Prt::where('id', $pekerjaId)->update(['user_id' => 0]);
            return response()->noContent();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal membatalkan kontrak.'], 500);
        }
    }
}
