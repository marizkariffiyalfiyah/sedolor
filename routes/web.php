<?php

use App\Http\Controllers\AccessibilityController;
use App\Http\Controllers\Admin\VerifikasiController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\Pendaftaran\ProductRegistrationController;
use Illuminate\Support\Facades\Route;

// Beranda & Informasi Produk (Publik)
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/informasi-produk', [HomeController::class, 'informasiProduk'])->name('informasi-produk');

// Aksesibilitas
Route::post('/aksesibilitas', [AccessibilityController::class, 'update'])->name('aksesibilitas.update');

// Auth
Route::middleware('guest')->group(function () {
    Route::get('/daftar', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/daftar', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

// Verifikasi Email
Route::get('/verifikasi-email', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/verifikasi-email/{id}/{hash}', function (Illuminate\Foundation\Auth\EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect()->route('dashboard')->with('status', 'Email berhasil diverifikasi.');
})->middleware(['auth', 'signed'])->name('verification.verify');

// Area Pemohon (harus login & email terverifikasi)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('pendaftaran')->name('pendaftaran.')->group(function () {
        Route::get('/mulai', [ProductRegistrationController::class, 'mulai'])->name('mulai');
        Route::get('/{product}/usaha', [ProductRegistrationController::class, 'formUsaha'])->name('usaha');
        Route::post('/{product}/usaha', [ProductRegistrationController::class, 'simpanUsaha']);
        Route::get('/{product}/produk', [ProductRegistrationController::class, 'formProduk'])->name('produk');
        Route::post('/{product}/produk', [ProductRegistrationController::class, 'simpanProduk']);
        Route::get('/{product}/dokumen', [ProductRegistrationController::class, 'formDokumen'])->name('dokumen');
        Route::post('/{product}/dokumen', [ProductRegistrationController::class, 'simpanDokumen']);
        Route::delete('/{product}/dokumen/{document}', [ProductRegistrationController::class, 'hapusDokumen'])->name('dokumen.hapus');
        Route::get('/{product}/periksa', [ProductRegistrationController::class, 'periksa'])->name('periksa');
        Route::post('/{product}/kirim', [ProductRegistrationController::class, 'kirim'])->name('kirim');
    });

    Route::get('/monitoring', [MonitoringController::class, 'index'])->name('monitoring.index');
    Route::get('/monitoring/{product}', [MonitoringController::class, 'show'])->name('monitoring.show');
});

// Area Verifikator BPOM
Route::middleware(['auth', 'verified', 'verifikator'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/verifikasi', [VerifikasiController::class, 'index'])->name('verifikasi.index');
    Route::get('/verifikasi/{product}', [VerifikasiController::class, 'show'])->name('verifikasi.show');
    Route::post('/verifikasi/{product}', [VerifikasiController::class, 'update'])->name('verifikasi.update');
});
