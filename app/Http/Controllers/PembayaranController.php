<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderTransaction;
use App\Models\Prt;

class PembayaranController extends Controller
{
    public function showPesanan($id)
    {
        // Mengambil data transaksi pesanan berdasarkan ID
        $orderTransaction = OrderTransaction::find($id);

        if (!$orderTransaction) {
            // Handle jika transaksi tidak ditemukan
            abort(404);
        }

        // Mengambil ID prt dari transaksi pesanan
        $id_prt = $orderTransaction->prt_id;

        // Menghapus karakter non-digit dari ID prt
        $id_prt_number = preg_replace('/[^0-9]/', '', $id_prt);

        // Membangun path gambar berdasarkan ID prt yang sudah diubah
        $imagePath = 'images/prt/prt' . $id_prt_number . '.jpg';

        // Memeriksa apakah gambar tersedia di path yang diberikan
        if (file_exists(public_path($imagePath))) {
            $imageUrl = asset($imagePath);
        } else {
            $imageUrl = asset('images/bigprofile.png');
        }

        // Mengambil gaji dari tabel prts berdasarkan ID prt
        $prt = Prt::find($id_prt);
        $gaji = $prt ? $prt->gaji : 0;

        // Konversi tipe data gaji menjadi float
        $gaji = floatval($gaji);

        // Menghitung biaya layanan (contoh penghitungan sederhana)
        $biayaLayanan = $gaji * 0.05; // Misalnya, biaya layanan adalah 5% dari gaji

        // Konversi tipe data biaya layanan menjadi float
        $biayaLayanan = floatval($biayaLayanan);

        // Mengirim data ke halaman pembayaran.blade.php
        return view('pembayaran', [
            'imageUrl' => $imageUrl,
            'orderTransaction' => $orderTransaction,
            'gaji' => $gaji,
            'biayaLayanan' => $biayaLayanan,
        ]);
    }

        public function showBank($id)
        {
            return view('pembayaranbank', ['id' => $id]);
        }

        public function showEwallet($id)
        {
            return view('pembayaranewallet', ['id' => $id]);
        }

        public function showSaldo($id)
        {
            return view('pembayaransaldo', ['id' => $id]);
        }

        public function showQRIS($id)
        {
            // Mendapatkan data order transaction berdasarkan ID
            $orderTransaction = OrderTransaction::findOrFail($id);

            // Mendapatkan data prt berdasarkan id_prt dari order transaction
            $prt = Prt::findOrFail($orderTransaction->prt_id);

            // Menghitung total bayar
            $gaji = $prt->gaji;
            $totalBayar = $gaji + ($gaji * 0.05);

            return view('pembayaranqris', compact('orderTransaction', 'totalBayar'));
        }

        public function processPaymentQRIS($id)
        {
            // Mengupdate status transaksi menjadi "Pembayaran Selesai" pada tabel order transactions
            $orderTransaction = OrderTransaction::find($id);
            if (!$orderTransaction) {
                // Handle jika transaksi tidak ditemukan
                abort(404);
            }

            $prt = Prt::find($orderTransaction->prt_id);
            if (!$prt) {
                // Handle jika data prt tidak ditemukan
                abort(404);
            }

            // Menambah nilai pada kolom jam_kerja, durasi_kerja, dan catatan_khusus pada tabel prts
            $prt->jamkerja += $orderTransaction->jam_kerja;
            $prt->durasi += $orderTransaction->durasi_kerja;
            $prt->catatan .= $orderTransaction->catatan_khusus;
            $prt->user_id = $orderTransaction->user_id;
            $prt->save();

            // Mengupdate status transaksi menjadi "Pembayaran Selesai" pada tabel order transactions
            $orderTransaction->status_transaksi = "Pembayaran Selesai";
            $orderTransaction->tipe_pembayaran = "QRIS";
            $orderTransaction->save();

            // Redirect atau tampilkan halaman berhasil pembayaran
            return redirect()->route('pembayaran.sukses', ['id' => $orderTransaction->id]);
        }

        public function verifikasiPembayaran($id)
        {
            // Lakukan verifikasi pembayaran
            // ...

            // Tampilkan halaman pembayaran terverifikasi
            return view('pembayaran-terverifikasi', ['id' => $id]);
        }


    public function bayar(Request $request, $id)
    {
        // Mengupdate status transaksi menjadi "Mulai Pembayaran"
        $orderTransaction = OrderTransaction::find($id);
        if ($orderTransaction) {
            $orderTransaction->status_transaksi = "Mulai Pembayaran";
            $orderTransaction->save();
        }

        // Lakukan pengalihan ke halaman pembayaran yang sesuai berdasarkan metode pembayaran yang dipilih
        $metodePembayaran = $request->input('metode_pembayaran');


        switch ($metodePembayaran) {
            case 'pembayaransaldo.process':
                return redirect()->route('pembayaransaldo', ['id' => $id]);
            case 'pembayaranbank.process':
                return redirect()->route('pembayaranbank', ['id' => $id]);
            case 'pembayaranewallet.process':
                return redirect()->route('pembayaranewallet', ['id' => $id]);
            case 'pembayaranqris.process':
                return redirect()->route('pembayaranqris', ['id' => $id]);
            default:
                return redirect()->back();
        }



    }

    public function bayarSaldo($id)
    {
        // Mengupdate status transaksi menjadi "Mulai Pembayaran"
        $orderTransaction = OrderTransaction::find($id);
        if ($orderTransaction) {
            $orderTransaction->status_transaksi = "Mulai Pembayaran";
            $orderTransaction->save();
        }

        // Lakukan pengalihan ke halaman pembayaransaldo
        return redirect()->route('pembayaransaldo', ['id' => $id]);
    }


}
