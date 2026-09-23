@extends('layouts.app')

@section('title', 'Verifikasi Email')

@section('content')

<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Background bergradasi halus disesuaikan persis dengan halaman Login -->
<div class="min-h-screen bg-gradient-to-b from-slate-200/70 via-slate-100 to-slate-200/80 flex items-center justify-center px-4 py-10">

    <div class="w-full max-w-md">

        <!-- Logo & Heading -->
        <div class="text-center mb-7">

            <!-- Kotak logo dengan aksen biru muda yang elegan -->
            <div class="mx-auto w-16 h-16 rounded-2xl bg-blue-50 border-2 border-blue-200 shadow-sm flex items-center justify-center p-2.5 overflow-hidden">
                <img src="{{ asset('assets/logosedolor.png') }}" alt="Logo SEDOLOR" class="w-full h-full object-contain">
            </div>

            <h1 class="mt-5 text-3xl font-bold text-slate-900">
                Verifikasi Email
            </h1>

            <p class="mt-2 text-sm text-slate-600">
                Langkah terakhir sebelum mengakses portal pendaftaran.
            </p>

        </div>

        <!-- Verification Card -->
        <div class="bg-white border-2 border-slate-300 rounded-2xl shadow-2xl p-7 sm:p-8 text-center">

            <!-- Notification Link Sent -->
            @if (session('status') == 'verification-link-sent')
                <div class="mb-6 rounded-xl border border-emerald-300 bg-emerald-50 px-4 py-3 text-left" role="alert">
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 text-emerald-600 text-lg">
                            <svg class="w-5 h-5 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-emerald-900">
                                Tautan Berhasil Dikirim!
                            </p>
                            <p class="text-xs text-emerald-800 mt-0.5">
                                Tautan verifikasi baru telah dikirimkan ke alamat email Anda.
                            </p>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Icon Email -->
            <div class="my-4">
                <div class="mx-auto w-20 h-20 rounded-full bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700 shadow-inner">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
            </div>

            <h2 class="text-xl font-bold text-slate-900 mb-2">
                Terima kasih telah mendaftar!
            </h2>

            <p class="text-sm text-slate-600 leading-relaxed mb-6">
                Kami telah mengirimkan link verifikasi ke email Anda. Silakan periksa kotak masuk atau folder <span class="font-bold text-slate-700">Spam</span> untuk menyelesaikan pendaftaran.
            </p>

            <!-- Kirim Ulang Email Form -->
            <div class="p-4 bg-slate-50 border border-slate-200 rounded-xl mb-6">
                <p class="text-xs font-semibold text-slate-600 mb-3">
                    Belum menerima email verifikasi?
                </p>

                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button
                        type="submit"
                        class="w-full py-3 px-4 rounded-xl bg-blue-700 text-white font-bold text-sm shadow-md transition hover:bg-blue-800 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-blue-300"
                    >
                        Kirim Ulang Email Verifikasi
                    </button>
                </form>
            </div>

            <!-- Divider -->
            <div class="relative my-6">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-slate-300"></div>
                </div>
                <div class="relative flex justify-center">
                    <span class="bg-white px-3 text-xs font-bold text-slate-400">
                        ATAU
                    </span>
                </div>
            </div>

            <!-- Logout Form -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button
                    type="submit"
                    class="w-full py-3 px-4 rounded-xl border-2 border-red-200 bg-red-50 text-red-700 font-bold text-sm transition hover:bg-red-100 hover:border-red-300 focus:outline-none focus:ring-4 focus:ring-red-200"
                >
                    Keluar / Ganti Akun
                </button>
            </form>

        </div>

        <!-- Back Button -->
        <div class="mt-5 text-center">
            <a
                href="/"
                class="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg text-sm font-semibold text-slate-700 bg-white/80 border border-slate-300 hover:text-blue-700 hover:bg-white hover:border-slate-400 shadow-xs transition"
            >
                <span>←</span>
                <span>Kembali ke Beranda</span>
            </a>
        </div>

    </div>

</div>

<!-- Pop-up Notifikasi SweetAlert jika link dikirim ulang -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        @if(session('status') == 'verification-link-sent')
            Swal.fire({
                icon: 'success',
                title: 'Tautan Terkirim!',
                text: 'Silakan periksa folder masuk atau spam di email Anda.',
                confirmColor: '#1d4ed8'
            });
        @endif
    });
</script>

@endsection