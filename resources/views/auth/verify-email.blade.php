@extends('layouts.app')

@section('title', 'Verifikasi Email')

@section('content')

<div class="min-h-screen bg-gradient-to-b from-slate-200/70 via-slate-100 to-slate-200/80 flex items-center justify-center px-4 py-10">

    <div class="w-full max-w-lg">

        {{-- ==========================================================
             LOGO & HEADING
        =========================================================== --}}

        <div class="text-center mb-7">

            <div class="mx-auto w-20 h-20 rounded-2xl bg-blue-50 border-2 border-blue-200 shadow-sm flex items-center justify-center p-3 overflow-hidden">

                <img
                    src="{{ asset('storage/assets/logosedolor.png') }}"
                    alt="Logo Sedulur"
                    class="w-full h-full object-contain"
                >

            </div>

            <h1 class="mt-5 text-3xl font-bold text-slate-900">
                Verifikasi Email
            </h1>

            <p class="mt-2 text-sm text-slate-600">
                Satu langkah lagi untuk mengaktifkan akun Anda.
            </p>

        </div>


        {{-- ==========================================================
             CARD
        =========================================================== --}}

        <div class="bg-white border-2 border-slate-300 rounded-2xl shadow-2xl p-7 sm:p-8">

            {{-- Icon email --}}

            <div class="flex justify-center mb-6">

                <div class="w-16 h-16 rounded-full bg-blue-50 border border-blue-200 flex items-center justify-center">

                    <svg
                        class="w-8 h-8 text-blue-700"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                        viewBox="0 0 24 24"
                    >

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                        />

                    </svg>

                </div>

            </div>


            {{-- Pesan utama --}}

            <div class="text-center">

                <h2 class="text-xl font-bold text-slate-900">
                    Terima kasih telah mendaftar!
                </h2>

                <p class="mt-3 text-sm leading-6 text-slate-600">
                    Kami telah mengirimkan tautan verifikasi ke alamat email Anda.
                    Silakan buka email tersebut dan klik tautan verifikasi untuk
                    mengaktifkan akun Anda.
                </p>

            </div>


            {{-- Email user --}}

            @if (auth()->check())

                <div class="mt-6 rounded-xl border border-blue-200 bg-blue-50 px-4 py-3 text-center">

                    <p class="text-xs font-semibold text-blue-700 uppercase tracking-wide">
                        Email terdaftar
                    </p>

                    <p class="mt-1 text-sm font-bold text-slate-800 break-all">
                        {{ auth()->user()->email }}
                    </p>

                </div>

            @endif


            {{-- Status berhasil kirim ulang --}}

            @if (session('status'))

                <div
                    class="mt-5 rounded-xl border border-green-300 bg-green-50 px-4 py-3"
                    role="alert"
                >

                    <div class="flex items-start gap-3">

                        <svg
                            class="w-5 h-5 mt-0.5 text-green-700 flex-shrink-0"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M5 13l4 4L19 7"
                            />

                        </svg>

                        <p class="text-sm font-semibold text-green-800">
                            {{ session('status') }}
                        </p>

                    </div>

                </div>

            @endif


            {{-- ======================================================
                 KIRIM ULANG
            ======================================================= --}}

            <div class="mt-7">

                <p class="text-center text-sm text-slate-600 mb-3">
                    Belum menerima email?
                </p>

                <form
                    method="POST"
                    action="{{ route('verification.send') }}"
                >

                    @csrf

                    <button
                        type="submit"
                        class="w-full py-3.5 px-5 rounded-xl bg-blue-700 text-white font-bold text-base shadow-md transition hover:bg-blue-800 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-blue-300"
                    >
                        Kirim Ulang Tautan Verifikasi
                    </button>

                </form>

            </div>


            {{-- ======================================================
                 PEMISAH
            ======================================================= --}}

            <div class="relative my-7">

                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t-2 border-slate-200"></div>
                </div>

                <div class="relative flex justify-center">

                    <span class="bg-white px-4 text-xs font-bold text-slate-500 tracking-wider">
                        SUDAH VERIFIKASI?
                    </span>

                </div>

            </div>


            {{-- ======================================================
                 LOGIN
            ======================================================= --}}

            <a
                href="{{ route('login') }}"
                class="w-full flex items-center justify-center py-3.5 px-5 rounded-xl border-2 border-slate-300 bg-slate-100 text-slate-800 font-bold transition hover:bg-slate-200 hover:border-slate-400 focus:outline-none focus:ring-4 focus:ring-slate-300"
            >
                Masuk ke Akun
            </a>


            {{-- ======================================================
                 LOGOUT
            ======================================================= --}}

            <form
                method="POST"
                action="{{ route('logout') }}"
                class="mt-3"
            >

                @csrf

                <button
                    type="submit"
                    class="w-full py-2.5 text-sm font-semibold text-slate-500 hover:text-red-600 transition"
                >
                    Keluar dari akun
                </button>

            </form>

        </div>


        {{-- ==========================================================
             ACCESSIBILITY
        =========================================================== --}}

        <div class="mt-6 text-center">

            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-slate-300 shadow-sm text-xs font-semibold text-slate-700">

                <svg
                    class="w-4 h-4 text-blue-700"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                >
                    <path d="M12 2a10 10 0 1010 10A10 10 0 0012 2zm0 18a8 8 0 118-8 8 8 0 01-8 8zm1-13h-2v6h6v-2h-4z"/>
                </svg>

                <span>
                    Portal mendukung fitur aksesibilitas penuh
                </span>

            </div>

        </div>


        {{-- ==========================================================
             KEMBALI KE BERANDA
        =========================================================== --}}

        <div class="mt-5 text-center">

            <a
                href="{{ route('home') }}"
                class="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg text-sm font-semibold text-slate-700 bg-white/80 border border-slate-300 hover:text-blue-700 hover:bg-white hover:border-slate-400 shadow-sm transition"
            >

                <span>←</span>

                <span>
                    Kembali ke Beranda
                </span>

            </a>

        </div>

    </div>

</div>

@endsection