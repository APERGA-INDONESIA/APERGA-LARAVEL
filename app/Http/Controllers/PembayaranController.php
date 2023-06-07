<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderTransaction;
use App\Models\Prt;
use App\Models\User;
use App\Models\InfoPayment;

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
        // Mendapatkan data order transaction berdasarkan ID
        $orderTransaction = OrderTransaction::findOrFail($id);

        // Mendapatkan data prt berdasarkan id_prt dari order transaction
        $prt = Prt::findOrFail($orderTransaction->prt_id);

        // Menghitung total bayar
        $gaji = $prt->gaji;
        $totalBayar = $gaji + ($gaji * 0.05);

        // Mendapatkan data info pembayaran dengan kanal_pembayaran = 'bank'
        $infoPayments = InfoPayment::where('kanal_pembayaran', 'bank')->get();

        // Mendapatkan data info pembayaran berdasarkan ID terpilih
        $selectedBank = InfoPayment::find($id);

        return view('pembayaranbank', compact('orderTransaction', 'infoPayments', 'selectedBank', 'totalBayar'));
    }


    public function showEwallet($id)
    {
        // Mendapatkan data order transaction berdasarkan ID
        $orderTransaction = OrderTransaction::findOrFail($id);

        // Mendapatkan data prt berdasarkan id_prt dari order transaction
        $prt = Prt::findOrFail($orderTransaction->prt_id);

        // Menghitung total bayar
        $gaji = $prt->gaji;
        $totalBayar = $gaji + ($gaji * 0.05);

        // Mendapatkan data info pembayaran dengan kanal_pembayaran = 'ewallet'
        $infoPayments = InfoPayment::where('kanal_pembayaran', 'ewallet')->get();

        // Mendapatkan data info pembayaran terpilih
        $selectedDompet = InfoPayment::find($id);

        return view('pembayaranewallet', compact('orderTransaction', 'infoPayments', 'selectedDompet', 'totalBayar'));
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

        public function processPaymentDompet($id)
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

            // Mengupdate status transaksi menjadi "Pembayaran Selesai" dan tipe pembayaran menjadi "Bank" pada tabel order transactions
            $orderTransaction->status_transaksi = "Pembayaran Selesai";
            $orderTransaction->tipe_pembayaran = "Dompet Digital";
            $orderTransaction->save();

            // Menghitung total harga
            $gaji = $prt->gaji;
            $biayaLayanan = $orderTransaction->biaya_layanan;
            $totalHarga = $gaji + $biayaLayanan;

            // Update nilai total_harga pada tabel order transactions
            $orderTransaction->total_harga = $totalHarga;
            $orderTransaction->save();

            // Menghitung nilai poin
            $poin = ($totalHarga * 0.05) * 10;

            // Simpan nilai poin pada sesi
            session(['poin' => $poin]);

            // Mengupdate nilai poin pada tabel users
            $user = User::find($orderTransaction->user_id);
            if ($user) {
                $user->poin += $poin;
                $user->save();
            }

            // Redirect atau tampilkan halaman berhasil pembayaran
            return redirect()->route('pembayaran.sukses', ['id' => $orderTransaction->id]);
        }

        public function processPaymentBank($id)
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

            // Mengupdate status transaksi menjadi "Pembayaran Selesai" dan tipe pembayaran menjadi "Bank" pada tabel order transactions
            $orderTransaction->status_transaksi = "Pembayaran Selesai";
            $orderTransaction->tipe_pembayaran = "Bank";
            $orderTransaction->save();

            // Menghitung total harga
            $gaji = $prt->gaji;
            $biayaLayanan = $orderTransaction->biaya_layanan;
            $totalHarga = $gaji + $biayaLayanan;

            // Update nilai total_harga pada tabel order transactions
            $orderTransaction->total_harga = $totalHarga;
            $orderTransaction->save();

            // Menghitung nilai poin
            $poin = ($totalHarga * 0.05) * 10;

            // Simpan nilai poin pada sesi
            session(['poin' => $poin]);

            // Mengupdate nilai poin pada tabel users
            $user = User::find($orderTransaction->user_id);
            if ($user) {
                $user->poin += $poin;
                $user->save();
            }

            // Redirect atau tampilkan halaman berhasil pembayaran
            return redirect()->route('pembayaran.sukses', ['id' => $orderTransaction->id]);
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

            // Mengupdate status transaksi menjadi "Pembayaran Selesai" dan tipe pembayaran menjadi "QRIS" pada tabel order transactions
            $orderTransaction->status_transaksi = "Pembayaran Selesai";
            $orderTransaction->tipe_pembayaran = "QRIS";
            $orderTransaction->save();

            // Menghitung total harga
            $gaji = $prt->gaji;
            $biayaLayanan = $orderTransaction->biaya_layanan;
            $totalHarga = $gaji + $biayaLayanan;

            // Update nilai total_harga pada tabel order transactions
            $orderTransaction->total_harga = $totalHarga;
            $orderTransaction->save();

            // Menghitung nilai poin
            $poin = ($totalHarga * 0.05) * 10;

            // Simpan nilai poin pada sesi
            session(['poin' => $poin]);

            // Mengupdate nilai poin pada tabel users
            $user = User::find($orderTransaction->user_id);
            if ($user) {
                $user->poin += $poin;
                $user->save();
            }

            // Redirect atau tampilkan halaman berhasil pembayaran
            return redirect()->route('pembayaran.sukses', ['id' => $orderTransaction->id]);
        }

        public function verifikasiPembayaran($id)
        {
            // Mendapatkan data order transaction berdasarkan ID
            $orderTransaction = OrderTransaction::findOrFail($id);

            return view('pembayaran-terverifikasi', compact('orderTransaction'));
        }

        public function bayar(Request $request, $id)
        {
            $orderTransaction = OrderTransaction::findOrFail($id);
            $statusTransaksi = 'Mulai Pembayaran';
            $totalHarga = intval($request->input('total_harga'));

            // Mengupdate nilai kolom status_transaksi dan total_harga
            $orderTransaction->status_transaksi = $statusTransaksi;
            $orderTransaction->total_harga = $totalHarga;

            // Menyimpan perubahan ke dalam database
            $orderTransaction->save();

            // Redirect ke halaman sukses pembayaran
            return redirect()->route('pembayaran.sukses', ['id' => $id]);
        }



        public function bayarSaldo($id)
        {
            // Mengupdate status transaksi menjadi "Mulai Pembayaran"
            $orderTransaction = OrderTransaction::find($id);
            if ($orderTransaction) {
                $orderTransaction->status_transaksi = "Mulai Pembayaran";
                $orderTransaction->save();
            }

            // Mengupdate nilai total_harga pada tabel order_transactions
            $gaji = $orderTransaction->gaji; // Mengambil nilai gaji dari model OrderTransaction
            $biayaLayanan = $orderTransaction->biaya_layanan; // Mengambil nilai biaya layanan dari model OrderTransaction

            $totalHarga = $gaji + $biayaLayanan;
            $totalHargaInt = intval($totalHarga);

            $orderTransaction->total_harga = $totalHargaInt;
            $orderTransaction->save();

            // Lakukan pengalihan ke halaman pembayaransaldo
            return redirect()->route('pembayaransaldo', ['id' => $id]);
        }

        public function batal(Request $request, $id)
        {
            $orderTransaction = OrderTransaction::find($id);

            if (!$orderTransaction) {
                return redirect()->back()->with('error', 'Transaksi tidak ditemukan.');
            }

            $orderTransaction->status_transaksi = 'Transaksi Dibatalkan';
            $orderTransaction->save();

            return redirect()->route('dashboard')->with('success', 'Transaksi berhasil dibatalkan.');
        }



}
