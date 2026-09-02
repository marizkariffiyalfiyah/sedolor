@extends('layouts.app')
@section('title', 'Periksa Data')

@section('content')
<div class="progress mb-4"><div class="progress-bar" style="width:100%">Langkah 4 dari 4</div></div>
<h3>Periksa Data Sebelum Dikirim</h3>

@if (!$product->isSiapKirim())
    <div class="alert alert-danger">
        Data belum lengkap:
        <ul class="mb-0">
            @unless ($product->isDataProdukLengkap())
                <li>Data produk belum lengkap. <a href="{{ route('pendaftaran.produk', $product) }}">Lengkapi di sini</a>.</li>
            @endunless
            @unless ($product->isDokumenLengkap())
                <li>Dokumen wajib belum lengkap. <a href="{{ route('pendaftaran.dokumen', $product) }}">Unggah di sini</a>.</li>
            @endunless
        </ul>
    </div>
@endif

<div class="card mb-3"><div class="card-body">
    <h5>Data Pelaku Usaha</h5>
    <p>{{ $product->businessActor->nama_usaha ?? '-' }} — {{ $product->businessActor->alamat ?? '-' }}</p>
</div></div>

<div class="card mb-3"><div class="card-body">
    <h5>Data Produk</h5>
    <p><strong>{{ $product->nama_produk }}</strong> ({{ $product->kategori_produk }})</p>
    <p>Komposisi: {{ $product->komposisi }}</p>
    <p>Kemasan: {{ $product->kemasan }} — Netto: {{ $product->netto }}</p>
</div></div>

<div class="card mb-4"><div class="card-body">
    <h5>Dokumen</h5>
    <ul>
        @foreach ($product->documents as $doc)
            <li>{{ ucwords(str_replace('_',' ',$doc->jenis_dokumen)) }}: {{ $doc->nama_file }}</li>
        @endforeach
    </ul>
</div></div>

<form method="POST" action="{{ route('pendaftaran.kirim', $product) }}">
    @csrf
    <div class="d-flex justify-content-between">
        <a href="{{ route('pendaftaran.dokumen', $product) }}" class="btn btn-outline-secondary">Kembali</a>
        <button class="btn btn-success" @disabled(!$product->isSiapKirim())>Kirim Pendaftaran</button>
    </div>
</form>
@endsection
