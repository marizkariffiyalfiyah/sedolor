<?php

use App\Http\Controllers\AccessibilityController;
use App\Http\Controllers\Admin\VerifikasiController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\Pendaftaran\ProductRegistrationController;
use Illuminate\Support\Facades\Route;

// ======================================================================
// BERANDA & INFORMASI PRODUK (PUBLIK)
// ======================================================================

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/informasi-produk', [HomeController::class, 'informasiProduk'])
    ->name('informasi-produk');


// ======================================================================
// AKSESIBILITAS
// ======================================================================

Route::post('/aksesibilitas', [AccessibilityController::class, 'update'])
    ->name('aksesibilitas.update');


// ======================================================================
// AUTH
// ======================================================================

Route::middleware('guest')->group(function () {

    // ------------------------------------------------------------------
    // DAFTAR AKUN
    // ------------------------------------------------------------------

    Route::get('/daftar', [AuthController::class, 'showRegister'])
        ->name('register');

    Route::post('/daftar', [AuthController::class, 'register']);


    // ------------------------------------------------------------------
    // LOGIN
    // ------------------------------------------------------------------

    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login']);


    // ------------------------------------------------------------------
    // LUPA KATA SANDI
    // ------------------------------------------------------------------

    Route::get('/lupa-kata-sandi', [AuthController::class, 'showForgotPassword'])
        ->name('password.request');

    Route::post('/lupa-kata-sandi', [AuthController::class, 'sendResetLink'])
        ->name('password.email');

    // ------------------------------------------------------------------
    // RESET KATA SANDI
    // ------------------------------------------------------------------

    Route::get('/reset-password/{token}', [AuthController::class, 'showResetPassword'])
        ->name('password.reset');

    Route::post('/reset-password', [AuthController::class, 'resetPassword'])
        ->name('password.update');
});


// ======================================================================
// LOGOUT
// ======================================================================

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');


// ======================================================================
// AREA PEMOHON
// HARUS LOGIN
// ======================================================================

Route::middleware(['auth'])->group(function () {

    // ------------------------------------------------------------------
    // DASHBOARD
    // ------------------------------------------------------------------

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');


    // ------------------------------------------------------------------
    // PENDAFTARAN PRODUK
    // ------------------------------------------------------------------

    Route::prefix('pendaftaran')
        ->name('pendaftaran.')
        ->group(function () {

            Route::get('/mulai', [
                ProductRegistrationController::class,
                'mulai'
            ])->name('mulai');

            Route::get('/{product}/usaha', [
                ProductRegistrationController::class,
                'formUsaha'
            ])->name('usaha');

            Route::post('/{product}/usaha', [
                ProductRegistrationController::class,
                'simpanUsaha'
            ]);

            Route::get('/{product}/produk', [
                ProductRegistrationController::class,
                'formProduk'
            ])->name('produk');

            Route::post('/{product}/produk', [
                ProductRegistrationController::class,
                'simpanProduk'
            ]);

            Route::get('/{product}/dokumen', [
                ProductRegistrationController::class,
                'formDokumen'
            ])->name('dokumen');

            Route::post('/{product}/dokumen', [
                ProductRegistrationController::class,
                'simpanDokumen'
            ]);

            Route::delete('/{product}/dokumen/{document}', [
                ProductRegistrationController::class,
                'hapusDokumen'
            ])->name('dokumen.hapus');

            Route::get('/{product}/periksa', [
                ProductRegistrationController::class,
                'periksa'
            ])->name('periksa');

            Route::post('/{product}/kirim', [
                ProductRegistrationController::class,
                'kirim'
            ])->name('kirim');
        });


    // ------------------------------------------------------------------
    // MONITORING
    // ------------------------------------------------------------------

    Route::get('/monitoring', [
        MonitoringController::class,
        'index'
    ])->name('monitoring.index');

    Route::get('/monitoring/{product}', [
        MonitoringController::class,
        'show'
    ])->name('monitoring.show');
});


// ======================================================================
// AREA VERIFIKATOR BPOM
// HARUS LOGIN & MEMILIKI ROLE VERIFIKATOR
// ======================================================================

Route::middleware(['auth', 'verifikator'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/verifikasi', [
            VerifikasiController::class,
            'index'
        ])->name('verifikasi.index');

        Route::get('/verifikasi/{product}', [
            VerifikasiController::class,
            'show'
        ])->name('verifikasi.show');

        Route::post('/verifikasi/{product}', [
            VerifikasiController::class,
            'update'
        ])->name('verifikasi.update');
    });


// ======================================================================
// DEMO MONITORING
// KHUSUS UNTUK MELIHAT TAMPILAN TANPA DATABASE
// ======================================================================

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

    return view('monitoring.index', compact('products'));
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
                'keterangan' => 'Berkas pendaftaran awal berhasil diterima oleh sistem.',
                'created_at' => now()->subDays(2)
            ],

            (object) [
                'status' => 'sedang_diproses',
                'keterangan' => 'Berkas sedang dalam tahap peninjauan oleh tim verifikator.',
                'created_at' => now()
            ]
        ]
    ];

    $documents = [];

    return view(
        'monitoring.show',
        compact('product', 'documents')
    );
});


// ======================================================================
// DEMO DASHBOARD
// KHUSUS UNTUK DESAIN DASHBOARD TANPA LOGIN
// ======================================================================

Route::get('/dashboard-demo', function () {

    $products = collect();

    return view('dashboard', compact('products'));
});