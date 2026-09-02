@extends('layouts.app')
@section('title', 'Upload Dokumen')

@section('content')
<div class="progress mb-4"><div class="progress-bar" style="width:75%">Langkah 3 dari 4</div></div>
<h3>Upload Dokumen</h3>
<p class="text-muted">Dokumen wajib: Izin Usaha, Hasil Uji Laboratorium, Label Kemasan.</p>

<form method="POST" action="{{ route('pendaftaran.dokumen', $product) }}" enctype="multipart/form-data" class="row g-3 mb-4">
    @csrf
    <div class="col-md-5">
        <select name="jenis_dokumen" class="form-select" required>
            <option value="izin_usaha">Izin Usaha *</option>
            <option value="hasil_uji_lab">Hasil Uji Laboratorium *</option>
            <option value="label_kemasan">Label Kemasan *</option>
            <option value="sertifikat_halal">Sertifikat Halal</option>
            <option value="surat_pernyataan">Surat Pernyataan</option>
            <option value="lainnya">Lainnya</option>
        </select>
    </div>
    <div class="col-md-5">
        <input type="file" name="file" class="form-control" accept=".pdf,.jpg,.jpeg,.png" required>
    </div>
    <div class="col-md-2">
        <button class="btn btn-primary w-100">Unggah</button>
    </div>
</form>

<table class="table table-bordered">
    <thead><tr><th>Jenis Dokumen</th><th>Nama File</th><th>Aksi</th></tr></thead>
    <tbody>
        @forelse ($product->documents as $doc)
            <tr>
                <td>{{ ucwords(str_replace('_',' ',$doc->jenis_dokumen)) }}</td>
                <td>{{ $doc->nama_file }}</td>
                <td>
                    <form method="POST" action="{{ route('pendaftaran.dokumen.hapus', [$product, $doc]) }}" onsubmit="return confirm('Hapus dokumen ini?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-outline-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="3" class="text-center">Belum ada dokumen diunggah.</td></tr>
        @endforelse
    </tbody>
</table>

<div class="d-flex justify-content-between">
    <a href="{{ route('pendaftaran.produk', $product) }}" class="btn btn-outline-secondary">Kembali</a>
    <a href="{{ route('pendaftaran.periksa', $product) }}" class="btn btn-primary">Lanjut ke Periksa Data</a>
</div>
@endsection
