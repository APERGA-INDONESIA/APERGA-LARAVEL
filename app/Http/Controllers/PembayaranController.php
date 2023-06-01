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

        // Membangun path gambar berdasarkan ID prt
        $imagePath = 'images/prt/prt' . $id_prt . '.png';

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

    public function showQRIS()
    {
        return view('pembayaranqris');
    }

    public function verifikasiPembayaran()
    {
        return view('pembayaran-terverifikasi');
    }

    public function bayar(Request $request, $id)
    {
        // Mengupdate status transaksi menjadi "Mulai Pembayaran"
        $orderTransaction = OrderTransaction::find($id);
        if ($orderTransaction) {
            $orderTransaction->status = "Mulai Pembayaran";
            $orderTransaction->save();
        }

        // Menambahkan nilai baru pada kolom status transaksi dengan nilai "Menunggu Pembayaran"
        $orderTransaction->status = "Menunggu Pembayaran";
        $orderTransaction->save();

        // Lakukan pengalihan ke halaman pembayaran yang sesuai berdasarkan metode pembayaran yang dipilih
        $metodePembayaran = $request->input('metode_pembayaran');

        switch ($metodePembayaran) {
            case "TRANSFER BANK":
                return redirect()->route('pembayaran.bank', ['id' => $id]);
            case "DOMPET DIGITAL":
                return redirect()->route('pembayaran.ewallet', ['id' => $id]);
            case "PEMBAYARAN LAIN":
                return redirect()->route('pembayaran.other', ['id' => $id]);
            default:
                return redirect()->back();
        }
    }
}
