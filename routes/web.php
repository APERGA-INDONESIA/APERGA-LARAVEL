<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KontrakController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\BantuanController;
use App\Http\Controllers\MencariPekerjaController;
use App\Http\Controllers\TentangAplikasiController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\EditProfilController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\DetailPekerjaController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\FilterPRTController;




Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); // Menampilkan halaman login

Route::post('/login', [LoginController::class, 'login'])->name('login.post'); // Menangani permintaan login melalui metode POST

Route::get('/register', [PendaftaranController::class, 'showRegistrationForm'])->name('register'); // Menampilkan halaman pendaftaran

Route::post('/register', [PendaftaranController::class, 'register'])->name('register.post'); // Menangani permintaan pendaftaran melalui metode POST

Route::middleware(['auth'])->group(function () {



    Route::get('/daftarpekerja', [KontrakController::class, 'showDaftarPekerja'])->name('daftarpekerja');
    Route::get('/detailpekerja/{id}', [KontrakController::class, 'showDetailPekerja'])->name('detailpekerja');
    Route::post('/update-pekerja', [KontrakController::class, 'updatePekerja'])->name('update.pekerja');

    Route::get('/pembayaran/{id}', [PembayaranController::class, 'showPesanan'])->name('pembayaran');
    Route::get('/pembayaran/qris/{id}', [PembayaranController::class, 'showQRIS'])->name('pembayaranqris');
    Route::get('/pembayaran/bank/{id}', [PembayaranController::class, 'showBank'])->name('pembayaranbank');
    Route::get('/pembayaran/ewallet/{id}', [PembayaranController::class, 'showEwallet'])->name('pembayaranewallet');
    Route::get('/pembayaran/saldo/{id}', [PembayaranController::class, 'showSaldo'])->name('pembayaransaldo');
    Route::post('/pembayaran/{id}', [PembayaranController::class, 'bayar'])->name('pembayaran.process');
    Route::post('/pembayaran/ewallet/{id}', [PembayaranController::class, 'bayar'])->name('pembayaranewallet.process');
    Route::post('/pembayaran/bank/{id}', [PembayaranController::class, 'bayar'])->name('pembayaranbank.process');
    Route::post('/pembayaran/qris/{id}', [PembayaranController::class, 'bayar'])->name('pembayaranqris.process');
    Route::post('/pembayaran/saldo/{id}', [PembayaranController::class, 'bayarSaldo'])->name('pembayaransaldo.process');
    Route::post('/pembayaran/sukses/{id}', [PembayaranController::class, 'verifikasiPembayaran'])->name('pembayaran.sukses');
    Route::get('/pembayaran/sukses/{id}', [PembayaranController::class, 'verifikasiPembayaran'])->name('pembayaran.sukses.get');
    Route::post('/pembayaran/sukses/submit/qris/{id}', [PembayaranController::class, 'processPaymentQRIS'])->name('pembayaran.sukses.submit.qris');
    Route::post('/pembayaran/sukses/submit/bank/{id}', [PembayaranController::class, 'processPaymentBank'])->name('pembayaran.sukses.submit.bank');
    Route::post('/pembayaran/sukses/submit/dompet/{id}', [PembayaranController::class, 'processPaymentDompet'])->name('pembayaran.sukses.submit.dompet');
    Route::post('/pembayaran/sukses/submit/saldo/{id}', [PembayaranController::class, 'processPaymentSaldo'])->name('pembayaran.sukses.submit.saldo');

    Route::post('/pembayaran/batal/{id}', [PembayaranController::class, 'batal'])->name('pembayaran.batal');
    Route::get('/pembayaran/sukses', [PembayaranController::class, 'verifikasiPembayaran'])->name('pembayaran-terverifikasi');
    Route::get('/bantuan', [BantuanController::class, 'showBantuan'])->name('bantuan'); // Menampilkan halaman bantuan

    Route::get('/profil', [ProfilController::class, 'showProfil'])->name('profil');
    Route::get('/profil/edit', [EditProfilController::class, 'showEditForm'])->name('profil.edit');
    Route::post('/profil/edit', [EditProfilController::class, 'update'])->name('profil.update');

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard'); // Menampilkan halaman dashboard setelah login
    Route::get('/redeem', [TransaksiController::class, 'showRedeem'])->name('redeem');
    Route::post('/redeem', [TransaksiController::class, 'redeemSubmit'])->name('redeem.submit');
    Route::get('/topup', [TransaksiController::class, 'showTopup'])->name('topup');
    Route::get('/detail-pekerja/{id}', [DetailPekerjaController::class, 'showDetailPekerja']);
    Route::get('/mulai-kontrak/{id}', [MencariPekerjaController::class, 'showMulaiKontrak'])->name('mulaikontrak');
    Route::post('/simpantransaksi', [MencariPekerjaController::class, 'simpanTransaksi'])->name('simpantransaksi');
});

Auth::routes(); // Menambahkan rute otorisasi bawaan Laravel

Route::get('/reset', [ResetController::class, 'showReset'])->name('reset.show'); // Menampilkan halaman reset password
Route::post('/reset-password', [ResetController::class, 'resetPassword'])->name('reset.password'); // Menangani permintaan reset password melalui metode POST
Route::get('/input-new-password/{token}', [ResetController::class, 'showInputNewPassword'])->name('input.newpassword'); // Menampilkan halaman input password baru
Route::post('/update-password', [ResetController::class, 'updatePassword'])->name('update.password'); // Menangani permintaan update password melalui metode POST
Route::get('/tentangaplikasi', [TentangAplikasiController::class, 'showTentangAplikasi'])->name('tentangaplikasi'); // Menampilkan halaman tentang aplikasi

Route::fallback(function () {
return redirect('/dashboard'); // Mengarahkan ke halaman dashboard jika rute tidak ditemukan
});

Route::get('/', [LandingController::class, 'showLanding'])->name('homepage');


Route::redirect('/', '/homepage');
// Mengarahkan ke halaman login jika mengakses akar situs

Route::get('/pembayaransaldo', function () {
    return view('pembayaransaldo');
})->name('pembayaran.index');




    Route::get('pencarian', [FilterController::class, 'filterPRT'])->name('pencarian'); // Menghandle permintaan pencarian PRT
    Route::post('/pencarian', [FilterController::class, 'filterPRTPost'])->name('pencarian.post');
    Route::post('/pencarian', [FilterPRTController::class, 'search'])->name('pencarian.search');



//get untuk mengeksekusi method showLoginForm pada AuthController sehingga mendapatkan data atau menampilkan halaman
//post untuk mengirimkan data ke server untuk diproses, misalnya ketika pengguna mengisi formulir.
