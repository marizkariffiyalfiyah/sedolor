<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InformasiProduk;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class InformasiProdukController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap'       => 'required|string|max:255',
            'prioritas'          => 'required|string',
            'jenis_layanan'      => 'required|string',
            'tanggal_permintaan' => 'required|date',
        ]);

        try {
            $tanggal = Carbon::parse($validated['tanggal_permintaan']);
            $totalHariIni = InformasiProduk::whereDate('tanggal_permintaan', $tanggal)->count();
            $urutan = $totalHariIni + 1;
            $nomorAntrean = 'A-' . str_pad($urutan, 3, '0', STR_PAD_LEFT);

            $jamBuka = Carbon::parse($tanggal->format('Y-m-d') . ' 08:00:00');
            $menitTambahan = ($urutan - 1) * 15; 
            $estimasiJam = $jamBuka->addMinutes($menitTambahan)->format('H:i') . ' WIB';

            $pendaftaran = InformasiProduk::create([
                'nama_lengkap'       => $validated['nama_lengkap'],
                'prioritas'          => $validated['prioritas'],
                'jenis_layanan'      => $validated['jenis_layanan'],
                'tanggal_permintaan' => $tanggal->toDateString(),
                'nomor_antrean'      => $nomorAntrean,
                'estimasi_jam'       => $estimasiJam,
            ]);

            return response()->json([
                'status'        => 'success',
                'message'       => 'Pendaftaran berhasil disimpan.',
                'nomor_antrean' => $nomorAntrean,
                'jam_pelayanan' => $estimasiJam,
                'nama'          => $pendaftaran->nama_lengkap,
                'layanan'       => $pendaftaran->jenis_layanan,
                'prioritas'     => $pendaftaran->prioritas,
                'tanggal'       => Carbon::parse($pendaftaran->tanggal_permintaan)->translatedFormat('d F Y'),
            ]);

        } catch (\Exception $e) {
            Log::error('Gagal Simpan Pendaftaran SEDOLOR: ' . $e->getMessage());

            return response()->json([
                'status'  => 'error',
                'message' => 'Terjadi kesalahan sistem saat menyimpan data: ' . $e->getMessage()
            ], 500);
        }
    }
}