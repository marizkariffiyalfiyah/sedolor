@extends('layouts.app')
@section('title', 'Data Pelaku Usaha')

@section('content')
<div class="progress mb-4"><div class="progress-bar" style="width:25%">Langkah 1 dari 4</div></div>
<h3>Data Pelaku Usaha</h3>

<form method="POST" action="{{ route('pendaftaran.usaha', $product) }}">
    @csrf
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Nama Usaha</label>
            <input type="text" name="nama_usaha" class="form-control" value="{{ old('nama_usaha', $businessActor->nama_usaha ?? '') }}" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Jenis Usaha</label>
            <select name="jenis_usaha" class="form-select" required>
                <option value="perorangan" @selected(old('jenis_usaha', $businessActor->jenis_usaha ?? '') === 'perorangan')>Perorangan</option>
                <option value="badan_usaha" @selected(old('jenis_usaha', $businessActor->jenis_usaha ?? '') === 'badan_usaha')>Badan Usaha</option>
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-label">Nomor Induk Berusaha (NIB)</label>
            <input type="text" name="nomor_induk_berusaha" class="form-control" value="{{ old('nomor_induk_berusaha', $businessActor->nomor_induk_berusaha ?? '') }}">
        </div>
        <div class="col-md-6">
            <label class="form-label">NPWP</label>
            <input type="text" name="npwp" class="form-control" value="{{ old('npwp', $businessActor->npwp ?? '') }}">
        </div>
        <div class="col-12">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" required>{{ old('alamat', $businessActor->alamat ?? '') }}</textarea>
        </div>
        <div class="col-md-6">
            <label class="form-label">Provinsi</label>
            <input type="text" name="provinsi" class="form-control" value="{{ old('provinsi', $businessActor->provinsi ?? '') }}" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Kota</label>
            <input type="text" name="kota" class="form-control" value="{{ old('kota', $businessActor->kota ?? '') }}" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">No. Telepon</label>
            <input type="text" name="no_telepon" class="form-control" value="{{ old('no_telepon', $businessActor->no_telepon ?? '') }}" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Email Usaha</label>
            <input type="email" name="email_usaha" class="form-control" value="{{ old('email_usaha', $businessActor->email_usaha ?? '') }}">
        </div>
    </div>
    <button class="btn btn-primary mt-4">Lanjut ke Data Produk</button>
</form>
@endsection
