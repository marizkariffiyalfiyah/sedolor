@extends('layouts.app')
@section('title', 'Dashboard Pemohon')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Dashboard Pemohon</h3>
    <a href="{{ route('pendaftaran.mulai') }}" class="btn btn-primary">+ Daftarkan Produk Baru</a>
</div>

<table class="table table-bordered">
    <thead>
        <tr><th>Nama Produk</th><th>No. Pengajuan</th><th>Status</th><th>Aksi</th></tr>
    </thead>
    <tbody>
        @forelse ($products as $p)
            <tr>
                <td>{{ $p->nama_produk ?? '(belum diisi)' }}</td>
                <td>{{ $p->nomor_pengajuan ?? '-' }}</td>
                <td><span class="badge bg-secondary">{{ $p->statusLabel() }}</span></td>
                <td>
                    @if ($p->status === 'draft')
                        <a href="{{ route('pendaftaran.usaha', $p) }}" class="btn btn-sm btn-outline-primary">Lanjutkan Pengisian</a>
                    @else
                        <a href="{{ route('monitoring.show', $p) }}" class="btn btn-sm btn-outline-secondary">Lihat Status</a>
                    @endif
                </td>
            </tr>
        @empty
            <tr><td colspan="4" class="text-center">Belum ada produk yang didaftarkan.</td></tr>
        @endforelse
    </tbody>
</table>
@endsection
