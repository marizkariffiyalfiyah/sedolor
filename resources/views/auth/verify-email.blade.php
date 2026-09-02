@extends('layouts.app')
@section('title', 'Verifikasi Email')

@section('content')
<div class="alert alert-info">
    Terima kasih telah mendaftar. Kami telah mengirim tautan verifikasi ke email Anda.
    Jika belum menerima, <form method="POST" action="{{ route('verification.send') }}" class="d-inline">@csrf<button class="btn btn-link p-0">klik di sini untuk kirim ulang</button></form>.
</div>
@endsection
