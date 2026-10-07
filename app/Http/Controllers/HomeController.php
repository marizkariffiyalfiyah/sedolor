<?php

namespace App\Http\Controllers;

use App\Models\InformasiProduk;
use App\Models\Product;
use App\Models\WebsiteVisit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman Beranda SEDOLOR.
     */
    public function index(Request $request)
    {
        // Catat setiap kunjungan ke halaman Beranda
        WebsiteVisit::create([
            'user_agent' => $request->userAgent(),
        ]);

        // Hitung seluruh pengajuan yang tersimpan
        $totalPengajuan = InformasiProduk::count();

        // Hitung seluruh akses website yang tercatat
        $jumlahAkses = WebsiteVisit::count();

        return view('home', compact(
            'totalPengajuan',
            'jumlahAkses'
        ));
    }

    /**
     * Menampilkan halaman Informasi Produk.
     */
    public function informasiProduk()
    {
        return view('informasi-produk');
    }

    /**
     * Menampilkan dashboard admin/petugas BPOM.
     */
    public function adminDashboard()
    {
        return view('admin.dashboard');
    }
}