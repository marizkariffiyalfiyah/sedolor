<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\InformasiProduk;
use Illuminate\Http\Request;

class VerifikasiController extends Controller
{
    /**
     * Dashboard admin
     */
   public function index()
{
    // Data antrean / informasi pemohon
    $antreanAktif = InformasiProduk::orderBy('tanggal_permintaan', 'desc')
        ->orderBy('nomor_antrean', 'asc')
        ->first();

    $riwayatAntrean = InformasiProduk::orderBy('tanggal_permintaan', 'desc')
        ->orderBy('nomor_antrean', 'asc')
        ->paginate(10);

    return view('admin.dashboard-admin', compact(
        'antreanAktif',
        'riwayatAntrean'
    ));
}
    /**
     * Detail pengajuan
     */
    public function show(Product $product)
    {
        $product->load([
            'user',
            'documents',
            'businessActor',
            'statusHistories.changedBy',
        ]);

        return view('admin.verifikasi-detail', compact('product'));
    }

    /**
     * Update status pengajuan
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'status' => [
                'required',
                'in:diajukan,diproses,perlu_revisi,disetujui,ditolak'
            ],
            'catatan_revisi' => [
                'nullable',
                'string'
            ],
        ]);

        $product->update([
            'status' => $data['status'],
            'catatan_revisi' => $data['catatan_revisi'] ?? null,
            'tanggal_disetujui' =>
                $data['status'] === 'disetujui'
                    ? now()
                    : $product->tanggal_disetujui,
        ]);

        /*
        |--------------------------------------------------------------------------
        | Simpan riwayat perubahan status
        |--------------------------------------------------------------------------
        */

        $product->statusHistories()->create([
            'status' => $data['status'],
            'keterangan' => $this->statusKeterangan($data['status']),
            'changed_by' => auth()->id(),
        ]);

        return redirect()
            ->route('admin.dashboard-admin')
            ->with('success', 'Status pengajuan berhasil diperbarui.');
    }
public function updateStatus(Request $request, $id)
{
    $request->validate([
        'status' => 'required|in:Menunggu Konfirmasi,Sedang Berjalan,Selesai,Ditolak',
    ]);

    $informasi_produks = InformasiProduk::findOrFail($id);
    $informasi_produks->update([
        'status' => $request->status
    ]);

    return redirect()->back()->with('success', 'Status informasi produk berhasil diperbarui!');
}
}