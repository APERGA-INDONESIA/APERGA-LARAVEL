<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TransaksiPoint;
use App\Models\TransaksiSaldo;
use App\Models\InfoPayment;
use Carbon\Carbon;

class TransaksiController extends Controller
{
    public function redeemSubmit(Request $request)
    {
        // Pengecekan apakah permintaan adalah POST
        if ($request->isMethod('post')) {
            $redeemPoints = $request->redeemPoints;
            $user = User::find(auth()->id());

            if (empty($redeemPoints) || !is_numeric($redeemPoints)) {
                return response()->json(['message' => 'Nilai redeemPoints tidak valid'], 400);
            }

            $redeemPoints = intval($redeemPoints);

            if ($user->poin >= $redeemPoints) {
                $saldo = $redeemPoints / 1000;

                $user->saldo += floatval($saldo); // Mengkonversi ke float sebelum penambahan
                $user->poin -= $redeemPoints;
                $user->save();

                TransaksiPoint::create([
                    'user_id' => $user->id,
                    'total_redeem_point' => $redeemPoints,
                    'tanggal_redeem' => date('Y-m-d'),
                    'status' => 'success',
                ]);

                return response()->json(['message' => 'Redeem Point Berhasil'], 200);
            } else {
                TransaksiPoint::create([
                    'user_id' => $user->id,
                    'total_redeem_point' => $redeemPoints,
                    'tanggal_redeem' => date('Y-m-d'),
                    'status' => 'failed',
                ]);

                return response()->json(['message' => 'Point yang dimiliki tidak cukup untuk redeem'], 400);
            }
        }

        // Jika permintaan adalah GET, maka render halaman redeem
        return view('redeem');
    }

    public function showRedeem()
    {
        return view('redeem');
    }

    public function showTopup(Request $request)
    {
        // Mendapatkan ID user yang sedang login
        $userId = $request->user()->id;

        // Membuat ID untuk tabel transaksi_saldos
        $transaksiSaldoId = TransaksiSaldo::max('id') + 1;

        // Menyimpan ID user dan ID transaksi_saldo ke dalam session
        $request->session()->put('userId', $userId);
        $request->session()->put('transaksiSaldoId', $transaksiSaldoId);

        // Mendapatkan data dari tabel info_payments
        $infoPaymentsData = InfoPayment::all();

        // Mengambil token CSRF
        $csrfToken = $request->session()->token();

        return view('topup', compact('infoPaymentsData', 'csrfToken'));
    }


    public function topup(Request $request)
    {
        // Validasi input
        $request->validate([
            'kanal_pembayaran' => 'required',
            'total_saldo' => 'required|numeric',
        ]);

        try {
            // Mendapatkan data metode pembayaran dari database berdasarkan kanal_pembayaran
            $paymentMethod = InfoPayment::where('kanal_pembayaran', $request->kanal_pembayaran)->first();



            // Menghitung total saldo yang akan ditambahkan
            $totalSaldo = intval($request->total_saldo);

            // Mendapatkan ID user dari session
            $userId = $request->session()->get('userId');

            // Mendapatkan data user berdasarkan ID
            $user = User::find($userId);

            // Menambahkan saldo ke akun user
            $user->saldo += floatval($totalSaldo);
            $user->save();

            // Membuat transaksi saldo baru
            // Membuat transaksi saldo baru
            $transaksiSaldo = new TransaksiSaldo;

            // Mendapatkan ID baru dari tabel 'transaksi_saldos'
            $newId = $transaksiSaldo->max('id') + 1;

            // Mengubah nilai kolom 'id' dengan ID baru
            $transaksiSaldo->id = $newId;
            $transaksiSaldo->kanal_pembayaran = $request->kanal_pembayaran;
            $transaksiSaldo->total_saldo = $totalSaldo;
            $transaksiSaldo->tanggal_transaksi = date('Y-m-d');
            $transaksiSaldo->status = 'sukses';
            $transaksiSaldo->created_at = now();
            $transaksiSaldo->updated_at = now();
            $transaksiSaldo->save();


            return response()->json(['status' => 'success', 'alert' => 'Top Up Saldo Berhasil.']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Terjadi kesalahan saat melakukan top up saldo: ' . $e->getMessage()]);
        }
    }




}


