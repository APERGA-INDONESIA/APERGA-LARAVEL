
<?php

// menentukan rute atau URL yang akan digunakan.

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KontrakController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\BantuanController;
use App\Http\Controllers\MencariPekerjaController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

//get untuk mengeksekusi method showLoginForm pada AuthController sehingga mendapatkan data atau menampilkan halaman
//post untuk mengirimkan data ke server untuk diproses, misalnya ketika pengguna mengisi formulir.

Route::get('/register', [PendaftaranController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [PendaftaranController::class, 'register'])->name('register.post');


Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('cariPRT', [FilterController::class, 'filterPRT'])->name('cariPRT');
Route::get('/bantuan', [BantuanController::class, 'index'])->name('bantuan');
Route::get('/daftarpekerja', [KontrakController::class, 'showDaftarPekerja'])->name('daftarpekerja');
Route::get('/detailpekerja', [KontrakController::class, 'showDetailPekerja'])->name('detailpekerja');
Route::get('/pembayaran', [MencariPekerjaController::class, 'showPesanan'])->name('pembayaran');
