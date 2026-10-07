<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InformasiProduk;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class InformasiProdukController extends Controller
{
    /**
     * Menampilkan riwayat pengajuan milik user yang sedang login.
     */
    public function riwayat()
    {
        $user = auth()->user();

        $query = InformasiProduk::query();

        // 1. Filter berdasarkan ID user yang sedang login
        if (Schema::hasColumn('informasi_produks', 'user_id')) {
            $query->where('user_id', $user->id);
        } else {
            // Fallback jika belum ada kolom user_id
            $query->where('nama_lengkap', $user->name);
        }

        // 2. Ambil semua data riwayat dari yang terbaru dengan pagination
        $informasi_produks = $query->latest()->paginate(10);

        return view('riwayat-pengajuan', compact('informasi_produks'));
    }

    /**
     * Menampilkan dashboard antrean dan riwayat pengajuan dengan Filter & Search.
     */
    public function index(Request $request)
    {
        // 1. Ambil Antrean Aktif Hari Ini
        $antreanAktif = InformasiProduk::whereDate('tanggal_permintaan', Carbon::today())
            ->latest('id')
            ->first();

        // 2. Query Riwayat Antrean
        $query = InformasiProduk::query();

        // Filter pencarian
        if ($request->filled('search')) {
            $query->where(function($q) use ($request) {
                $q->where('nama_lengkap', 'like', '%' . $request->search . '%')
                  ->orWhere('nomor_antrean', 'like', '%' . $request->search . '%');
            });
        }

        // Ambil data dengan pagination & pertahankan parameter query URL
        $riwayatAntrean = $query->orderBy('tanggal_permintaan', 'desc')
            ->orderBy('id', 'desc')
            ->paginate(10)
            ->withQueryString();

        return view('admin.antrean', compact('antreanAktif', 'riwayatAntrean'));
    }

    /**
     * Memperbarui status antrean dari admin.
     */
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:Menunggu Konfirmasi,Terkonfirmasi,Selesai',
        ]);

        $antrean = InformasiProduk::findOrFail($id);
        $antrean->update([
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Status berhasil diperbarui!');
    }

    /**
     * Export data antrean terfilter ke format CSV / Excel.
     */
    public function exportExcel(Request $request)
    {
        $query = InformasiProduk::query();

        if ($request->filled('prioritas')) {
            $query->where('prioritas', $request->prioritas);
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('tanggal')) {
            $query->whereDate('tanggal_permintaan', $request->tanggal);
        }

        if ($request->filled('search')) {
            $query->where(function($q) use ($request) {
                $q->where('nama_lengkap', 'like', '%' . $request->search . '%')
                  ->orWhere('nomor_antrean', 'like', '%' . $request->search . '%');
            });
        }

        $data = $query->orderBy('tanggal_permintaan', 'desc')->get();

        $fileName = 'Riwayat_Antrean_' . date('Y-m-d_H-i-s') . '.csv';

        $headers = [
            "Content-type"        => "text/csv; charset=UTF-8",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        ];

        $callback = function() use ($data) {
            $file = fopen('php://output', 'w');
            fputs($file, "\xEF\xBB\xBF"); // BOM UTF-8 untuk Excel

            fputcsv($file, ['No Antrean', 'Nama Lengkap', 'Jenis Layanan', 'Tanggal Permintaan', 'Prioritas', 'Estimasi Jam', 'Status']);

            foreach ($data as $row) {
                fputcsv($file, [
                    $row->nomor_antrean,
                    $row->nama_lengkap,
                    $row->jenis_layanan,
                    $row->tanggal_permintaan,
                    $row->prioritas,
                    $row->estimasi_jam,
                    $row->status ?? 'Menunggu Konfirmasi'
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    /**
     * Menyimpan data pendaftaran antrean baru.
     */
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
            
            $totalHariIni = InformasiProduk::whereDate('tanggal_permintaan', $tanggal->toDateString())->count();
            $urutan = $totalHariIni + 1;
            
            $nomorAntrean = 'A-' . str_pad($urutan, 3, '0', STR_PAD_LEFT);

            $jamBuka = Carbon::parse($tanggal->format('Y-m-d') . ' 08:00:00');
            $menitTambahan = ($urutan - 1) * 15; // <-- SUDAH DIPERBAIKI DI SINI
            $estimasiJam = $jamBuka->addMinutes($menitTambahan)->format('H:i') . ' WIB';

            // Menyimpan pendaftaran dengan user_id yang sedang login
            $pendaftaran = InformasiProduk::create([
                'user_id'            => auth()->id(),
                'nama_lengkap'       => $validated['nama_lengkap'],
                'prioritas'          => $validated['prioritas'],
                'jenis_layanan'      => $validated['jenis_layanan'],
                'tanggal_permintaan' => $tanggal->toDateString(),
                'nomor_antrean'      => $nomorAntrean,
                'estimasi_jam'       => $estimasiJam,
                'status'             => 'Menunggu Konfirmasi',
            ]);

            return response()->json([
                'status'        => 'success',
                'message'       => 'Pendaftaran berhasil disimpan!',
                'nomor_antrean' => $nomorAntrean,
                'jam_pelayanan' => $estimasiJam,
            ]);

        } catch (\Exception $e) {
            Log::error('Error Simpan Antrean: ' . $e->getMessage());

            return response()->json([
                'status'  => 'error',
                'message' => 'Gagal menyimpan: ' . $e->getMessage()
            ], 500);
        }
    }
}