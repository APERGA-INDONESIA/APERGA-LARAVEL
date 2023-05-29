<?php

namespace App\Http\Controllers;

use App\Models\OrderTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Prt;
use Illuminate\Support\Facades\Redirect;

class MencariPekerjaController extends Controller
{
    public function showMulaiKontrak($id)
    {
        $prt = Prt::find($id);
        if (!$prt) {
            return response()->view('prt-not-found', [], 404);
        }
        return view('mulaikontrak', compact('prt'));
    }

    public function simpanTransaksi(Request $request)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'prt_id' => 'required|exists:prts,id',
            'jam_kerja' => 'required',
            'durasi_kerja' => 'required',
            'catatan_khusus' => 'nullable|max:60',
        ]);

        // Mendapatkan ID pengguna yang sedang login
        $userId = Auth::id();

        // Simpan data transaksi ke dalam tabel order transactions
        $orderTransaction = OrderTransaction::create([
            'user_id' => $userId,
            'prt_id' => $validatedData['prt_id'],
            'tanggal_transaksi' => now(),
            'jam_kerja' => $validatedData['jam_kerja'],
            'durasi_kerja' => $validatedData['durasi_kerja'],
            'catatan_khusus' => $validatedData['catatan_khusus'],
            'status_transaksi' => 'Ongoing',
        ]);

        // Mendapatkan ID baru dari transaksi yang disimpan
        $transactionId = $orderTransaction->id;

        // Mengarahkan pengguna ke halaman pembayaran dengan menggunakan ID transaksi
        return redirect()->route('pembayaran', ['id' => $transactionId]);
    }

}


