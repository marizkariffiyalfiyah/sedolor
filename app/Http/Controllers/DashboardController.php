<?php 

namespace App\Http\Controllers;

use App\Models\InformasiProduk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // 1. CEK ROLE ADMIN
        // Jika yang login adalah admin, alihkan ke dashboard khusus admin
        if (auth()->check() && auth()->user()->role === 'admin') {
            return redirect()->route('admin.dashboard-admin');
        }

        // 2. LOGIKA USER BIASA
        // Mengambil riwayat pengajuan milik user yang sedang login
        $riwayatPengajuan = InformasiProduk::where('user_id', auth()->id())
            ->latest()
            ->get();

        // Mengambil pengajuan paling baru milik user
        $antreanAktif = $riwayatPengajuan->first();

        // Kirim kedua data sekaligus ke view 'dashboard'
        return view('dashboard', compact('riwayatPengajuan', 'antreanAktif'));
    }
}