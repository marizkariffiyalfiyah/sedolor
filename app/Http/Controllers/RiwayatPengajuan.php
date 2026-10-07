<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiwayatPengajuan extends Controller
{
    public function index()
    {
        // Contoh data antrean aktif pengguna
        $antreanAktif = (object) [
            'nomor_antrean' => 'A-012',
            'layanan' => 'Konsultasi Registrasi Pangan Olahan',
            'loket' => 'Loket 2 - Pelayanan Publik BPOM',
            'estimasi_waktu' => '10:30 WIB (± 15 Menit)',
            'antrean_sekarang' => 'A-009',
            'status' => 'Menunggu Panggilan'
        ];

        // Ubah dari 'informasi-produk' menjadi 'admin.dashboard'
        return view('admin.dashboard-admin', compact('antreanAktif'));
    }
}