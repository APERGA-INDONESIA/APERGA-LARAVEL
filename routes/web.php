<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KontrakController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\BantuanController;
use App\Http\Controllers\MencariPekerjaController;
use App\Http\Controllers\TentangAplikasiController;
use App\Http\Controllers\ResetController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

Route::get('/register', [PendaftaranController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [PendaftaranController::class, 'register'])->name('register.post');

Route::middleware(['auth'])->group(function () {
    Route::get('cariPRT', [FilterController::class, 'filterPRT'])->name('cariPRT');
    Route::get('/daftarpekerja', [KontrakController::class, 'showDaftarPekerja'])->name('daftarpekerja');
    Route::get('/detailpekerja', [KontrakController::class, 'showDetailPekerja'])->name('detailpekerja');
    Route::get('/pembayaran', [MencariPekerjaController::class, 'showPesanan'])->name('pembayaran');
    Route::get('/bantuan', [BantuanController::class, 'showBantuan'])->name('bantuan');
    Route::get('/tentangaplikasi', [TentangAplikasiController::class, 'showTentangAplikasi'])->name('tentangaplikasi');
});

Auth::routes();
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/reset', [ResetController::class, 'showReset'])->name('reset.show');
Route::post('/reset-password', [ResetController::class, 'resetPassword'])->name('reset.password');
Route::get('/input-new-password/{token}', [ResetController::class, 'showInputNewPassword'])->name('input.newpassword');
Route::post('/update-password', [ResetController::class, 'updatePassword'])->name('update.password');

//get untuk mengeksekusi method showLoginForm pada AuthController sehingga mendapatkan data atau menampilkan halaman
//post untuk mengirimkan data ke server untuk diproses, misalnya ketika pengguna mengisi formulir.
