<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VerifikasiController extends Controller
{
    public function index()
    {
        $products = Product::whereIn('status', ['diajukan', 'diproses'])
            ->with('businessActor')
            ->latest('tanggal_pengajuan')
            ->get();

        return view('admin.verifikasi.index', compact('products'));
    }

    public function show(Product $product)
    {
        $product->load(['documents', 'businessActor', 'statusHistories.changedBy']);

        return view('admin.verifikasi.show', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'aksi' => ['required', 'in:proses,revisi,setujui,tolak'],
            'catatan' => ['nullable', 'string'],
        ]);

        match ($data['aksi']) {
            'proses' => $product->update(['status' => 'diproses']),
            'revisi' => $product->update(['status' => 'perlu_revisi', 'catatan_revisi' => $data['catatan']]),
            'setujui' => $product->update([
                'status' => 'disetujui',
                'nomor_registrasi' => 'BPOM-' . now()->format('Y') . '-' . Str::upper(Str::random(8)),
                'tanggal_disetujui' => now(),
            ]),
            'tolak' => $product->update(['status' => 'ditolak', 'catatan_revisi' => $data['catatan']]),
        };

        $product->statusHistories()->create([
            'status' => $product->status,
            'keterangan' => $data['catatan'] ?? 'Status diperbarui oleh verifikator.',
            'changed_by' => $request->user()->id,
        ]);

        return redirect()->route('admin.verifikasi.index')->with('status', 'Status produk berhasil diperbarui.');
    }
}
