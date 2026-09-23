<?php

use App\Http\Controllers\AccessibilityController;
use App\Http\Controllers\Admin\VerifikasiController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\Pendaftaran\ProductRegistrationController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| BERANDA & INFORMASI PUBLIK
|--------------------------------------------------------------------------
*/

// Beranda
Route::get('/', [HomeController::class, 'index'])
    ->name('home');

// Informasi produk
Route::get('/informasi-produk', [HomeController::class, 'informasiProduk'])
    ->name('informasi-produk');


/*
|--------------------------------------------------------------------------
| AKSESIBILITAS
|--------------------------------------------------------------------------
|
| Pengaturan aksesibilitas dapat digunakan dari halaman publik.
|
*/

Route::post('/aksesibilitas', [AccessibilityController::class, 'update'])
    ->name('aksesibilitas.update');


/*
|--------------------------------------------------------------------------
| AUTHENTICATION
|--------------------------------------------------------------------------
|
| Daftar, login, dan lupa kata sandi hanya dapat diakses
| oleh pengguna yang belum login.
|
*/

Route::middleware('guest')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | DAFTAR AKUN
    |--------------------------------------------------------------------------
    */

    Route::get('/daftar', [AuthController::class, 'showRegister'])
        ->name('register');

    Route::post('/daftar', [AuthController::class, 'register'])
        ->name('register.process');


    /*
    |--------------------------------------------------------------------------
    | LOGIN
    |--------------------------------------------------------------------------
    */

    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.process');


    /*
    |--------------------------------------------------------------------------
    | LUPA KATA SANDI
    |--------------------------------------------------------------------------
    */

    Route::get('/lupa-kata-sandi', [AuthController::class, 'showForgotPassword'])
        ->name('password.request');

    Route::post('/lupa-kata-sandi', [AuthController::class, 'sendResetLink'])
        ->name('password.email');
});


/*
|--------------------------------------------------------------------------
| RESET KATA SANDI
|--------------------------------------------------------------------------
|
| Route reset password TIDAK menggunakan middleware guest.
| Dengan begitu, link reset dari email tetap dapat dibuka
| meskipun user masih memiliki session login.
|
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
| AREA PEMOHON
|--------------------------------------------------------------------------
|
| Semua fitur yang membutuhkan akun:
| - Dashboard
| - Pendaftaran produk
| - Monitoring
|
| Pengguna hanya wajib login.
| Tidak menggunakan verifikasi email.
|
*/

Route::middleware(['auth'])->group(function () {

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');


    /*
    |--------------------------------------------------------------------------
    | PENDAFTARAN PRODUK
    |--------------------------------------------------------------------------
    */

    Route::prefix('pendaftaran')
        ->name('pendaftaran.')
        ->group(function () {

            // Mulai pendaftaran
            Route::get('/mulai', [
                ProductRegistrationController::class,
                'mulai'
            ])->name('mulai');


            // Form usaha
            Route::get('/{product}/usaha', [
                ProductRegistrationController::class,
                'formUsaha'
            ])->name('usaha');


            // Simpan usaha
            Route::post('/{product}/usaha', [
                ProductRegistrationController::class,
                'simpanUsaha'
            ])->name('usaha.simpan');


            // Form produk
            Route::get('/{product}/produk', [
                ProductRegistrationController::class,
                'formProduk'
            ])->name('produk');


            // Simpan produk
            Route::post('/{product}/produk', [
                ProductRegistrationController::class,
                'simpanProduk'
            ])->name('produk.simpan');


            // Form dokumen
            Route::get('/{product}/dokumen', [
                ProductRegistrationController::class,
                'formDokumen'
            ])->name('dokumen');


            // Simpan dokumen
            Route::post('/{product}/dokumen', [
                ProductRegistrationController::class,
                'simpanDokumen'
            ])->name('dokumen.simpan');


            // Hapus dokumen
            Route::delete('/{product}/dokumen/{document}', [
                ProductRegistrationController::class,
                'hapusDokumen'
            ])->name('dokumen.hapus');


            // Periksa pendaftaran
            Route::get('/{product}/periksa', [
                ProductRegistrationController::class,
                'periksa'
            ])->name('periksa');


            // Kirim pendaftaran
            Route::post('/{product}/kirim', [
                ProductRegistrationController::class,
                'kirim'
            ])->name('kirim');
        });


    /*
    |--------------------------------------------------------------------------
    | MONITORING
    |--------------------------------------------------------------------------
    */

    Route::get('/monitoring', [
        MonitoringController::class,
        'index'
    ])->name('monitoring.index');


    Route::get('/monitoring/{product}', [
        MonitoringController::class,
        'show'
    ])->name('monitoring.show');
});


/*
|--------------------------------------------------------------------------
| AREA VERIFIKATOR BPOM
|--------------------------------------------------------------------------
|
| Hanya dapat diakses oleh:
| - pengguna yang sudah login
| - memiliki role verifikator
|
| Tidak menggunakan middleware verified karena
| verifikasi email sudah dihapus.
|
*/

Route::middleware(['auth', 'verifikator'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Daftar pengajuan yang perlu diverifikasi
        Route::get('/verifikasi', [
            VerifikasiController::class,
            'index'
        ])->name('verifikasi.index');


        // Detail pengajuan
        Route::get('/verifikasi/{product}', [
            VerifikasiController::class,
            'show'
        ])->name('verifikasi.show');


        // Proses verifikasi
        Route::post('/verifikasi/{product}', [
            VerifikasiController::class,
            'update'
        ])->name('verifikasi.update');
});


/*
|--------------------------------------------------------------------------
| DEMO MONITORING
|--------------------------------------------------------------------------
|
| Khusus untuk melihat tampilan monitoring tanpa database.
|
*/

Route::get('/demo-monitoring-index', function () {

    $product1 = (object) [
        'id' => 1,
        'nomor_pengajuan' => 'REQ-2026-0001',
        'nama_produk' => 'Keripik Singkong Balado',
        'brand' => 'Maicih Rasa Nusantara',
        'status' => 'sedang_diproses'
    ];

    $product2 = (object) [
        'id' => 2,
        'nomor_pengajuan' => 'REQ-2026-0002',
        'nama_produk' => 'Kopi Susu Gula Aren',
        'brand' => 'Kopi Sedulur Jowo',
        'status' => 'perlu_revisi'
    ];

    $products = [$product1, $product2];

    return view(
        'monitoring.index',
        compact('products')
    );
});


Route::get('/demo-monitoring-show', function () {

    $product = (object) [
        'id' => 1,
        'nama_produk' => 'Keripik Singkong Balado',
        'nomor_pengajuan' => 'REQ-2026-0001',
        'status' => 'sedang_diproses',

        'statusLabel' => function () {
            return 'Sedang Diproses';
        },

        'statusHistories' => [

            (object) [
                'status' => 'pendaftaran_diajukan',
                'keterangan' =>
                    'Berkas pendaftaran awal berhasil diterima oleh sistem.',
                'created_at' => now()->subDays(2)
            ],

            (object) [
                'status' => 'sedang_diproses',
                'keterangan' =>
                    'Berkas sedang dalam tahap peninjauan oleh tim verifikator.',
                'created_at' => now()
            ]
        ]
    ];

    $documents = [];

    return view(
        'monitoring.show',
        compact(
            'product',
            'documents'
        )
    );
});


/*
|--------------------------------------------------------------------------
| DEMO DASHBOARD
|--------------------------------------------------------------------------
|
| Khusus desain tanpa login.
|
*/

Route::get('/dashboard-demo', function () {

    $products = collect();

    return view(
        'dashboard',
        compact('products')
    );
});


/*
|--------------------------------------------------------------------------
| FORCE LOGOUT - SEMENTARA UNTUK TESTING
|--------------------------------------------------------------------------
|
| Digunakan untuk membersihkan session login yang masih tersimpan.
| HAPUS ROUTE INI SETELAH TESTING SELESAI.
|
*/

Route::get('/force-logout', function (Illuminate\Http\Request $request) {

    auth()->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('login');
});