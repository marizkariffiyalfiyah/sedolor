@extends('layouts.app')
@section('title', 'Data Produk')

@section('content')
<div class="progress mb-4"><div class="progress-bar" style="width:50%">Langkah 2 dari 4</div></div>
<h3>Data Produk</h3>

<form method="POST" action="{{ route('pendaftaran.produk', $product) }}">
    @csrf
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control" value="{{ old('nama_produk', $product->nama_produk) }}" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Kategori Produk</label>
            <select name="kategori_produk" class="form-select" required>
                @foreach (['obat'=>'Obat','kosmetik'=>'Kosmetik','pangan_olahan'=>'Pangan Olahan','obat_tradisional'=>'Obat Tradisional','suplemen'=>'Suplemen Kesehatan'] as $val=>$label)
                    <option value="{{ $val }}" @selected(old('kategori_produk', $product->kategori_produk) === $val)>{{ $label }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-label">Jenis Pengajuan</label>
            <select name="jenis_pengajuan" class="form-select" required>
                @foreach (['baru'=>'Pendaftaran Baru','perpanjangan'=>'Perpanjangan','variasi'=>'Variasi'] as $val=>$label)
                    <option value="{{ $val }}" @selected(old('jenis_pengajuan', $product->jenis_pengajuan) === $val)>{{ $label }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-label">Negara Asal</label>
            <input type="text" name="negara_asal" class="form-control" value="{{ old('negara_asal', $product->negara_asal) }}" required>
        </div>
        <div class="col-12">
            <label class="form-label">Komposisi</label>
            <textarea name="komposisi" class="form-control" required>{{ old('komposisi', $product->komposisi) }}</textarea>
        </div>
        <div class="col-md-6">
            <label class="form-label">Kemasan</label>
            <input type="text" name="kemasan" class="form-control" value="{{ old('kemasan', $product->kemasan) }}" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Netto / Isi Bersih</label>
            <input type="text" name="netto" class="form-control" value="{{ old('netto', $product->netto) }}" required>
        </div>
    </div>
    <div class="mt-4 d-flex justify-content-between">
        <a href="{{ route('pendaftaran.usaha', $product) }}" class="btn btn-outline-secondary">Kembali</a>
        <button class="btn btn-primary">Lanjut ke Upload Dokumen</button>
    </div>
</form>
@endsection
