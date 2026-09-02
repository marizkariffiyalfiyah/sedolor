@extends('layouts.app')
@section('title', 'Periksa Pengajuan')

@section('content')
<h3>{{ $product->nama_produk }} — {{ $product->nomor_pengajuan }}</h3>
<p>Pelaku Usaha: {{ $product->businessActor->nama_usaha ?? '-' }}</p>
<p>Komposisi: {{ $product->komposisi }}</p>

<h5>Dokumen</h5>
<ul>
    @foreach ($product->documents as $doc)
        <li><a href="{{ Storage::url($doc->path_file) }}" target="_blank">{{ $doc->nama_file }}</a> ({{ $doc->jenis_dokumen }})</li>
    @endforeach
</ul>

<form method="POST" action="{{ route('admin.verifikasi.update', $product) }}" class="mt-4">
    @csrf
    <div class="mb-3">
        <label class="form-label">Catatan (wajib jika revisi/tolak)</label>
        <textarea name="catatan" class="form-control"></textarea>
    </div>
    <div class="d-flex gap-2">
        <button name="aksi" value="proses" class="btn btn-secondary">Tandai Diproses</button>
        <button name="aksi" value="revisi" class="btn btn-warning">Minta Revisi</button>
        <button name="aksi" value="setujui" class="btn btn-success">Setujui</button>
        <button name="aksi" value="tolak" class="btn btn-danger">Tolak</button>
    </div>
</form>
@endsection
