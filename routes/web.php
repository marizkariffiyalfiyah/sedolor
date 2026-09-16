<?php

use App\Http\Controllers\AccessibilityController;
use App\Http\Controllers\Admin\VerifikasiController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\Pendaftaran\ProductRegistrationController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
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
| DASHBOARD PUBLIK
|--------------------------------------------------------------------------
|
| Dashboard dapat diakses tanpa login.
| Digunakan untuk:
| - Informasi
| - Aksesibilitas
| - Informasi layanan
|
*/

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');


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
| Daftar dan login hanya dapat diakses oleh pengguna yang belum login.
|
*/

Route::middleware('guest')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | DAFTAR
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
});


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
| VERIFIKASI EMAIL
|--------------------------------------------------------------------------
|
| Pengguna yang sudah login tetapi belum melakukan verifikasi
| akan diarahkan ke halaman verifikasi email.
|
*/


// Halaman pemberitahuan verifikasi
Route::get('/verifikasi-email', function () {

    return view('auth.verify-email');

})
    ->middleware('auth')
    ->name('verification.notice');


// Link verifikasi dari email
Route::get('/verifikasi-email/{id}/{hash}', function (
    EmailVerificationRequest $request
) {

    $request->fulfill();

    return redirect()
        ->route('dashboard')
        ->with(
            'status',
            'Email berhasil diverifikasi.'
        );

})
    ->middleware([
        'auth',
        'signed',
        'throttle:6,1'
    ])
    ->name('verification.verify');


// Kirim ulang email verifikasi
Route::post('/verifikasi-email/kirim', function (
    Request $request
) {

    if ($request->user()->hasVerifiedEmail()) {

        return redirect()
            ->route('dashboard');
    }

    $request->user()
        ->sendEmailVerificationNotification();

    return back()
        ->with(
            'status',
            'Link verifikasi baru telah dikirim ke email Anda.'
        );

})
    ->middleware([
        'auth',
        'throttle:6,1'
    ])
    ->name('verification.send');


/*
|--------------------------------------------------------------------------
| AREA PEMOHON
|--------------------------------------------------------------------------
|
| Semua fitur yang membutuhkan akun:
| - Pendaftaran produk
| - Monitoring
|
| Pengguna wajib:
| 1. Login
| 2. Email terverifikasi
|
*/

Route::middleware(['auth', 'verified'])->group(function () {


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
| - pengguna login
| - email terverifikasi
| - memiliki role verifikator
|
*/

Route::middleware([
    'auth',
    'verified',
    'verifikator'
])
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