@extends('layouts.app')
@section('title', 'Detail Status Pengajuan')

@section('content')
<h3>Detail Pengajuan: {{ $product->nama_produk }}</h3>
<p>No. Pengajuan: <strong>{{ $product->nomor_pengajuan }}</strong></p>
<p>Status saat ini: <span class="badge bg-info text-dark">{{ $product->statusLabel() }}</span></p>

@if ($product->status === 'disetujui')
    <div class="alert alert-success">
        Selamat! Produk terdaftar dengan Nomor Registrasi: <strong>{{ $product->nomor_registrasi }}</strong>
    </div>
@endif

@if ($product->status === 'perlu_revisi')
    <div class="alert alert-warning">
        <p><strong>Catatan Revisi:</strong> {{ $product->catatan_revisi }}</p>
        <a href="{{ route('pendaftaran.produk', $product) }}" class="btn btn-warning">Perbaiki Data / Dokumen</a>
    </div>
@endif

<h5 class="mt-4">Riwayat Status</h5>
<ul class="list-group">
    @foreach ($product->statusHistories as $h)
        <li class="list-group-item">
            <strong>{{ ucfirst(str_replace('_',' ',$h->status)) }}</strong> — {{ $h->keterangan }}
            <br><small class="text-muted">{{ $h->created_at->translatedFormat('d F Y H:i') }}</small>
        </li>
    @endforeach
</ul>
@endsection
