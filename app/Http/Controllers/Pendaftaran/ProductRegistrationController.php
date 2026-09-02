<?php

namespace App\Http\Controllers\Pendaftaran;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductRegistrationController extends Controller
{
    public function mulai(Request $request)
    {
        $product = $request->user()->products()->create(['status' => 'draft']);

        return redirect()->route('pendaftaran.usaha', $product);
    }

    private function authorizeProduct(Product $product, Request $request): void
    {
        abort_unless($product->user_id === $request->user()->id, 403);
    }

    // Step 1: Data Pelaku Usaha
    public function formUsaha(Request $request, Product $product)
    {
        $this->authorizeProduct($product, $request);
        $businessActor = $request->user()->businessActor;

        return view('pendaftaran.usaha', compact('product', 'businessActor'));
    }

    public function simpanUsaha(Request $request, Product $product)
    {
        $this->authorizeProduct($product, $request);

        $data = $request->validate([
            'nama_usaha' => ['required', 'string', 'max:255'],
            'jenis_usaha' => ['required', 'in:perorangan,badan_usaha'],
            'nomor_induk_berusaha' => ['nullable', 'string', 'max:100'],
            'npwp' => ['nullable', 'string', 'max:50'],
            'alamat' => ['required', 'string'],
            'provinsi' => ['required', 'string', 'max:100'],
            'kota' => ['required', 'string', 'max:100'],
            'no_telepon' => ['required', 'string', 'max:20'],
            'email_usaha' => ['nullable', 'email', 'max:255'],
        ]);

        $businessActor = $request->user()->businessActor()->updateOrCreate(
            ['user_id' => $request->user()->id],
            $data
        );

        $product->update(['business_actor_id' => $businessActor->id]);

        return redirect()->route('pendaftaran.produk', $product);
    }

    // Step 2: Data Produk
    public function formProduk(Request $request, Product $product)
    {
        $this->authorizeProduct($product, $request);

        return view('pendaftaran.produk', compact('product'));
    }

    public function simpanProduk(Request $request, Product $product)
    {
        $this->authorizeProduct($product, $request);

        $data = $request->validate([
            'nama_produk' => ['required', 'string', 'max:255'],
            'kategori_produk' => ['required', 'in:obat,kosmetik,pangan_olahan,obat_tradisional,suplemen'],
            'jenis_pengajuan' => ['required', 'in:baru,perpanjangan,variasi'],
            'komposisi' => ['required', 'string'],
            'kemasan' => ['required', 'string', 'max:255'],
            'netto' => ['required', 'string', 'max:100'],
            'negara_asal' => ['required', 'string', 'max:100'],
        ]);

        $product->update($data);

        return redirect()->route('pendaftaran.dokumen', $product);
    }

    // Step 3: Upload Dokumen
    public function formDokumen(Request $request, Product $product)
    {
        $this->authorizeProduct($product, $request);
        $product->load('documents');

        return view('pendaftaran.dokumen', compact('product'));
    }

    public function simpanDokumen(Request $request, Product $product)
    {
        $this->authorizeProduct($product, $request);

        $data = $request->validate([
            'jenis_dokumen' => ['required', 'in:izin_usaha,sertifikat_halal,hasil_uji_lab,label_kemasan,surat_pernyataan,lainnya'],
            'file' => ['required', 'file', 'mimes:pdf,jpg,jpeg,png', 'max:5120'],
        ]);

        $path = $data['file']->store('dokumen/' . $product->id, 'public');

        ProductDocument::updateOrCreate(
            ['product_id' => $product->id, 'jenis_dokumen' => $data['jenis_dokumen']],
            ['nama_file' => $data['file']->getClientOriginalName(), 'path_file' => $path]
        );

        return back()->with('status', 'Dokumen berhasil diunggah.');
    }

    public function hapusDokumen(Request $request, Product $product, ProductDocument $document)
    {
        $this->authorizeProduct($product, $request);
        Storage::disk('public')->delete($document->path_file);
        $document->delete();

        return back()->with('status', 'Dokumen dihapus.');
    }

    // Step 4: Periksa Data
    public function periksa(Request $request, Product $product)
    {
        $this->authorizeProduct($product, $request);
        $product->load(['documents', 'businessActor']);

        return view('pendaftaran.periksa', compact('product'));
    }

    // Kirim Pendaftaran
    public function kirim(Request $request, Product $product)
    {
        $this->authorizeProduct($product, $request);

        if (!$product->isSiapKirim()) {
            return back()->withErrors(['data' => 'Data belum lengkap. Silakan lengkapi data produk dan dokumen wajib.']);
        }

        $isPengirimanUlang = $product->status === 'perlu_revisi';

        $product->update([
            'status' => 'diajukan',
            'nomor_pengajuan' => $product->nomor_pengajuan ?? 'REG-' . now()->format('Ymd') . '-' . Str::upper(Str::random(6)),
            'tanggal_pengajuan' => now(),
            'catatan_revisi' => null,
        ]);

        $product->statusHistories()->create([
            'status' => 'diajukan',
            'keterangan' => $isPengirimanUlang ? 'Data/dokumen revisi dikirim ulang oleh pemohon.' : 'Pendaftaran dikirim oleh pemohon.',
            'changed_by' => $request->user()->id,
        ]);

        return redirect()->route('monitoring.show', $product)
            ->with('status', 'Pendaftaran berhasil dikirim dengan nomor pengajuan ' . $product->nomor_pengajuan);
    }
}
