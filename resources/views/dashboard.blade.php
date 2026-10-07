@extends('layouts.logged-in')

@section('title', __('SEDOLOR'))
<link rel="icon" type="image/png" href="{{ asset('assets/logosedolor.png') }}">

@section('content')
{{-- Tambahkan flex & min-h agar konten mendorong footer ke bawah secara pas --}}
<div id="main-content" class="w-full bg-[#EEF4FA] min-h-[calc(100vh-80px)] flex flex-col justify-between">

    {{-- HERO SECTION --}}
    <section
        class="relative overflow-hidden bg-cover bg-center bg-no-repeat py-12 md:py-20 flex-1 flex items-center"
        style="background-image: linear-gradient(
            105deg,
            rgba(5, 23, 46, 0.85) 0%,
            rgba(10, 45, 87, 0.75) 50%,
            rgba(21, 94, 239, 0.5) 80%,
            rgba(21, 94, 239, 0.3) 100%
        ), url('{{ asset('assets/bpom.jpg') }}');">

        <div
            class="absolute inset-0 bg-gradient-to-b from-black/20 via-transparent to-[#051c37]/50 pointer-events-none"
            aria-hidden="true">
        </div>

        <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 text-center flex flex-col items-center justify-center w-full">

            <h1 class="m-0 mb-4 text-3xl sm:text-5xl md:text-[52px] leading-tight tracking-tight font-black text-white drop-shadow-md">
                {{ __('Selamat Datang Kembali') }},
                <br />
                <span class="text-blue-300">
                    {{ auth()->user()->name ?? 'Pengguna SEDOLOR' }}
                </span>!
            </h1>

            <p class="text-sm sm:text-base text-slate-200 leading-relaxed max-w-2xl mb-8">
                {{ __('Ajukan sertifikasi, jadwalkan konsultasi, dan pantau status permohonan Anda secara online melalui sistem terpadu SEDOLOR.') }}
            </p>

            <div class="flex flex-wrap items-center justify-center gap-4">
                <a
                    href="{{ route('informasi-produk') }}"
                    class="inline-flex items-center gap-2 rounded-xl bg-white px-6 py-3.5 text-sm font-bold text-blue-900 hover:bg-blue-50 transition duration-200 shadow-lg hover:-translate-y-0.5"
                >
                    <svg class="h-5 w-5 text-blue-700" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                    </svg>
                    {{ __('Buat Pengajuan Baru') }}
                </a>

                <a
                    href="{{ route('riwayat-pengajuan') }}"
                    class="inline-flex items-center gap-2 rounded-xl bg-white/10 border border-white/20 px-6 py-3.5 text-sm font-bold text-white hover:bg-white/20 transition duration-200 backdrop-blur-md"
                >
                    <svg class="h-5 w-5 text-white/80" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    {{ __('Lihat Riwayat') }}
                </a>
            </div>

        </div>
    </section>

</div>
@endsection