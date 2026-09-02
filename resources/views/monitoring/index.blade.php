@extends('layouts.app')
@section('title', 'Monitoring Status')

@section('content')
<h3>Monitoring Status Pengajuan</h3>
<table class="table table-bordered">
    <thead><tr><th>No. Pengajuan</th><th>Produk</th><th>Status</th><th>Aksi</th></tr></thead>
    <tbody>
        @forelse ($products as $p)
            <tr>
                <td>{{ $p->nomor_pengajuan }}</td>
                <td>{{ $p->nama_produk }}</td>
                <td><span class="badge bg-info text-dark">{{ $p->statusLabel() }}</span></td>
                <td><a href="{{ route('monitoring.show', $p) }}" class="btn btn-sm btn-outline-primary">Detail</a></td>
            </tr>
        @empty
            <tr><td colspan="4" class="text-center">Belum ada pengajuan.</td></tr>
        @endforelse
    </tbody>
</table>
@endsection
