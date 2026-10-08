<?php

use App\Http\Controllers\AccessibilityController;
use App\Http\Controllers\Admin\VerifikasiController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\Pendaftaran\ProductRegistrationController;
use App\Http\Controllers\InformasiProdukController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| BERANDA & INFORMASI PUBLIK
|--------------------------------------------------------------------------
|
| Halaman yang dapat diakses tanpa login.
|
*/

// Beranda
Route::get('/', [HomeController::class, 'index'])
    ->name('home');

// Informasi Produk
Route::get('/informasi-produk', [HomeController::class, 'informasiProduk'])
    ->name('informasi-produk');

// Simpan informasi produk
Route::post('/informasi-produk', [InformasiProdukController::class, 'store'])
    ->name('informasi-produk.store');

/*
|--------------------------------------------------------------------------
| AKSESIBILITAS
|--------------------------------------------------------------------------
*/

Route::post('/aksesibilitas', [AccessibilityController::class, 'update'])
    ->name('aksesibilitas.update');


/*
|--------------------------------------------------------------------------
| AUTHENTICATION
|--------------------------------------------------------------------------
|
| Route berikut hanya dapat diakses oleh pengguna yang BELUM login.
|
*/

Route::middleware('guest')->group(function () {

    // REGISTER
    Route::get('/daftar', [AuthController::class, 'showRegister'])
        ->name('register');

    Route::post('/daftar', [AuthController::class, 'register'])
        ->name('register.process');


    // LOGIN
    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.process');


    // LUPA PASSWORD
    Route::get('/lupa-kata-sandi', [AuthController::class, 'showForgotPassword'])
        ->name('password.request');

    Route::post('/lupa-kata-sandi', [AuthController::class, 'sendResetLink'])
        ->name('password.email');


    // MONITORING
    Route::get('/monitoring', [MonitoringController::class, 'index'])
        ->name('monitoring.index');

    Route::get('/monitoring/{product}', [MonitoringController::class, 'show'])
        ->name('monitoring.show');
});
/*
|--------------------------------------------------------------------------
| RESET PASSWORD
|--------------------------------------------------------------------------
*/

Route::get('/reset-password/{token}', [AuthController::class, 'showResetPassword'])
    ->name('password.reset');

Route::post('/reset-password', [AuthController::class, 'resetPassword'])
    ->name('password.update');


/*
|--------------------------------------------------------------------------
| LOGOUT
|--------------------------------------------------------------------------
*/

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');


/*
|--------------------------------------------------------------------------
| AREA USER / PEMOHON
|--------------------------------------------------------------------------
|
| Semua route di bawah membutuhkan login.
| User biasa dapat mengakses dashboard, profil,
| pendaftaran produk, dan monitoring.
|
*/
Route::middleware(['auth'])->group(function () {

    // Dashboard user
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    // Riwayat seluruh pengajuan user

    Route::get('/riwayat-pengajuan', [InformasiProdukController::class, 'riwayat'])
        ->name('riwayat-pengajuan');

    // Monitoring pengajuan
    Route::get('/monitoring', [MonitoringController::class, 'index'])
        ->name('monitoring.index');

    // Detail satu pengajuan
    Route::get('/monitoring/{product}', [MonitoringController::class, 'show'])
        ->name('monitoring.show');

    // Profil
    Route::get('/profil', [ProfileController::class, 'index'])
        ->name('profile');

    Route::put('/profil', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::put('/profil/password', [ProfileController::class, 'updatePassword'])
        ->name('profile.password.update');

    // Pendaftaran
    Route::prefix('pendaftaran')->name('pendaftaran.')->group(function () {

        Route::get('/mulai', [ProductRegistrationController::class, 'mulai'])
            ->name('mulai');

        Route::get('/{product}/usaha', [ProductRegistrationController::class, 'formUsaha'])
            ->name('usaha');

        Route::post('/{product}/usaha', [ProductRegistrationController::class, 'simpanUsaha'])
            ->name('usaha.simpan');

        Route::get('/{product}/produk', [ProductRegistrationController::class, 'formProduk'])
            ->name('produk');

        Route::post('/{product}/produk', [ProductRegistrationController::class, 'simpanProduk'])
            ->name('produk.simpan');

        Route::get('/{product}/dokumen', [ProductRegistrationController::class, 'formDokumen'])
            ->name('dokumen');

        Route::post('/{product}/dokumen', [ProductRegistrationController::class, 'simpanDokumen'])
            ->name('dokumen.simpan');

        Route::delete('/{product}/dokumen/{document}', [ProductRegistrationController::class, 'hapusDokumen'])
            ->name('dokumen.hapus');

        Route::get('/{product}/periksa', [ProductRegistrationController::class, 'periksa'])
            ->name('periksa');

        Route::post('/{product}/kirim', [ProductRegistrationController::class, 'kirim'])
            ->name('kirim');
    });

});

/*
|--------------------------------------------------------------------------
| AREA ADMIN / VERIFIKATOR BPOM
|--------------------------------------------------------------------------
|
| Hanya user dengan role "admin" yang dapat mengakses
| halaman dashboard admin.
|
*/
Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard-admin', [VerifikasiController::class, 'index'])
            ->name('dashboard-admin');

        Route::get('/pengajuan/{product}', [VerifikasiController::class, 'show'])
            ->name('pengajuan.show');

        Route::put('/pengajuan/{product}', [VerifikasiController::class, 'update'])
            ->name('pengajuan.update');

        // Route Export Excel
        Route::get('/antrean/export', [InformasiProdukController::class, 'exportExcel'])
            ->name('antrean.export');

        // PERBAIKAN: Ubah '/admin/antrean/...' menjadi '/antrean/...'
        Route::patch('/antrean/{id}/update-status', [InformasiProdukController::class, 'updateStatus'])
            ->name('dashboard-admin.update-status'); 
    });

    
/*
|--------------------------------------------------------------------------
| FORCE LOGOUT
|--------------------------------------------------------------------------
|
| Digunakan untuk testing.
|
*/

Route::get('/force-logout', function (Illuminate\Http\Request $request) {

    auth()->logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect()->route('home');

})->name('force-logout');

Route::get('/force-admin', function () {
    $user = \App\Models\User::where('email', 'emailkamu@gmail.com')->first();

    if (!$user) {
        return 'Email tidak ditemukan di database!';
    }

    // Ubah role jadi admin
    $user->update(['role' => 'admin']); // Sesuaikan jika nama kolomnya is_admin

    // Otomatis login-kan user
    \Illuminate\Support\Facades\Auth::login($user);

    return redirect('/admin'); // Sesuaikan dengan URL admin kamu
});