<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TransaksiPoint;

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
                    'total_redeem_point' => $redeemPoints,
                    'tanggal_redeem' => date('Y-m-d'),
                    'status' => 'success',
                ]);

                return response()->json(['message' => 'Redeem Point Berhasil'], 200);
            } else {
                TransaksiPoint::create([
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

}


