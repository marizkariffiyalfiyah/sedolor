@extends('layouts.app')

@section('title', 'Verifikasi Email')

@section('content')
<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow-lg rounded-4">
                <div class="card-header bg-primary text-white text-center py-3 rounded-top-4">
                    <h5 class="fw-bold mb-0">
                        <i class="bi bi-envelope-check-fill me-2"></i> Verifikasi Email Diperlukan
                    </h5>
                </div>
                <div class="card-body p-4 text-center">

                    {{-- Pesan Notifikasi Sukses --}}
                    @if (session('status') == 'verification-link-sent')
                        <div class="alert alert-success alert-dismissible fade show text-start mb-4" role="alert">
                            <i class="bi bi-check-circle-fill me-2"></i> Tautan verifikasi baru telah berhasil dikirim ke email Anda!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="my-3">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary-subtle text-primary rounded-circle p-3 mb-3" style="width: 80px; height: 80px;">
                            <i class="bi bi-envelope-exclamation-fill fs-1"></i>
                        </div>
                    </div>

                    <h5 class="fw-bold text-dark mb-2">Terima Kasih telah Mendaftar!</h5>
                    <p class="text-muted small mb-4">
                        Kami telah mengirimkan tautan verifikasi ke email Anda. Silakan periksa kotak masuk atau folder spam untuk melanjutkan.
                    </p>

                    <div class="p-3 bg-light rounded-3 text-center mb-3">
                        <span class="text-secondary small d-block mb-2">Belum menerima email verifikasi?</span>
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary btn-sm px-4 rounded-pill">
                                <i class="bi bi-send-fill me-1"></i> Kirim Ulang Email
                            </button>
                        </form>
                    </div>

                    <div class="pt-2 border-top">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger btn-sm rounded-pill px-4">
                                <i class="bi bi-box-arrow-left me-1"></i> Keluar / Switch Akun
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        @if(session('status') == 'verification-link-sent')
            Swal.fire({
                icon: 'success',
                title: 'Tautan Terkirim!',
                text: 'Silakan periksa email Anda untuk melakukan verifikasi akun.',
                confirmColor: '#0d6efd'
            });
        @endif
    });
</script>
@endsection