@extends('layouts.app')
@section('title', 'Verifikasi BPOM')

@section('content')
<h3>Daftar Pengajuan Menunggu Verifikasi</h3>
<table class="table table-bordered">
    <thead><tr><th>No. Pengajuan</th><th>Nama Usaha</th><th>Status</th><th>Aksi</th></tr></thead>
    <tbody>
        @forelse ($products as $p)
            <tr>
                <td>{{ $p->nomor_pengajuan }}</td>
                <td>{{ $p->businessActor->nama_usaha ?? '-' }}</td>
                <td>{{ $p->statusLabel() }}</td>
                <td><a href="{{ route('admin.verifikasi.show', $p) }}" class="btn btn-sm btn-primary">Periksa</a></td>
            </tr>
        @empty
            <tr><td colspan="4" class="text-center">Tidak ada pengajuan.</td></tr>
        @endforelse
    </tbody>
</table>
@endsection
