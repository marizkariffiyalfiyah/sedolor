@extends('layouts.app')

@section('title', 'Masuk')

@section('content')

<div class="min-h-screen bg-gradient-to-b from-slate-200/70 via-slate-100 to-slate-200/80 flex items-center justify-center px-4 py-10">

    <div class="w-full max-w-md">

        {{-- ==========================================================
             LOGO & HEADING
        =========================================================== --}}

        <div class="text-center mb-7">

            <div class="mx-auto w-16 h-16 rounded-2xl bg-blue-50 border-2 border-blue-200 shadow-sm flex items-center justify-center p-2.5 overflow-hidden">

                <img
                    src="{{ asset('storage/assets/logosedolor.png') }}"
                    alt="Logo Sedulur"
                    class="w-full h-full object-contain"
                >

            </div>

            <h1 class="mt-5 text-3xl font-bold text-slate-900">
                Selamat Datang
            </h1>

            <p class="mt-2 text-sm text-slate-600">
                Masuk ke akun Anda untuk melanjutkan pendaftaran produk.
            </p>

        </div>


        {{-- ==========================================================
             LOGIN CARD
        =========================================================== --}}

        <div class="bg-white border-2 border-slate-300 rounded-2xl shadow-2xl p-7 sm:p-8">


            {{-- ======================================================
                 STATUS
            ======================================================= --}}

            @if (session('status'))

                <div
                    class="mb-6 rounded-xl border border-green-300 bg-green-50 px-4 py-3"
                    role="alert"
                >

                    <p class="text-sm font-semibold text-green-800">
                        {{ session('status') }}
                    </p>

                </div>

            @endif


            {{-- ======================================================
                 ERROR
            ======================================================= --}}

            @if ($errors->any())

                <div
                    class="mb-6 rounded-xl border border-red-300 bg-red-50 px-4 py-3"
                    role="alert"
                    aria-live="assertive"
                >

                    <div class="flex items-start gap-3">

                        <div class="flex-shrink-0 text-red-700">
                            <svg
                                class="w-5 h-5"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </div>

                        <div>

                            <p class="text-sm font-bold text-red-900">
                                Gagal masuk
                            </p>

                            <ul class="mt-1 space-y-1 text-sm text-red-800 list-disc list-inside">

                                @foreach ($errors->all() as $error)

                                    <li>
                                        {{ $error }}
                                    </li>

                                @endforeach

                            </ul>

                        </div>

                    </div>

                </div>

            @endif


            {{-- ======================================================
                 FORM LOGIN
            ======================================================= --}}

            <form
                method="POST"
                action="{{ route('login') }}"
                class="space-y-5"
            >

                @csrf


                {{-- EMAIL --}}

                <div>

                    <label
                        for="email"
                        class="block mb-2 text-sm font-bold text-slate-800"
                    >
                        Email
                        <span class="text-red-600">*</span>
                    </label>

                    <div class="relative">

                        <span
                            class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-500 pointer-events-none"
                        >

                            <svg
                                class="w-5 h-5"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                            >

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                />

                            </svg>

                        </span>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            autocomplete="email"
                            placeholder="nama@email.com"
                            class="w-full pl-11 pr-4 py-3.5 rounded-xl border-2 border-slate-300 bg-slate-50 text-slate-900 font-medium placeholder-slate-400 outline-none transition focus:bg-white focus:border-blue-700 focus:ring-4 focus:ring-blue-100"
                        >

                    </div>

                    @error('email')

                        <p class="mt-2 text-sm font-semibold text-red-700">
                            {{ $message }}
                        </p>

                    @enderror

                </div>


                {{-- PASSWORD --}}

                <div>

                    <label
                        for="password"
                        class="block mb-2 text-sm font-bold text-slate-800"
                    >
                        Kata Sandi
                        <span class="text-red-600">*</span>
                    </label>

                    <div class="relative">

                        <span
                            class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-500 pointer-events-none"
                        >

                            <svg
                                class="w-5 h-5"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                            >

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                                />

                            </svg>

                        </span>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            required
                            autocomplete="current-password"
                            placeholder="••••••••"
                            class="w-full pl-11 pr-4 py-3.5 rounded-xl border-2 border-slate-300 bg-slate-50 text-slate-900 font-medium placeholder-slate-400 outline-none transition focus:bg-white focus:border-blue-700 focus:ring-4 focus:ring-blue-100"
                        >

                    </div>

                    @error('password')

                        <p class="mt-2 text-sm font-semibold text-red-700">
                            {{ $message }}
                        </p>

                    @enderror

                </div>


                {{-- REMEMBER ME --}}

                <div class="flex items-center">

                    <label class="inline-flex items-center gap-3 cursor-pointer select-none">

                        <input
                            type="checkbox"
                            name="remember"
                            id="remember"
                            value="1"
                            class="w-5 h-5 rounded border-2 border-slate-400 text-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-1 cursor-pointer"
                        >

                        <span class="text-sm font-semibold text-slate-700">
                            Ingat saya di perangkat ini
                        </span>

                    </label>

                </div>


                {{-- BUTTON LOGIN --}}

                <button
                    type="submit"
                    class="w-full py-3.5 px-5 rounded-xl bg-blue-700 text-white font-bold text-base shadow-md transition hover:bg-blue-800 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-blue-300"
                >
                    Masuk ke Akun
                </button>

            </form>


            {{-- ======================================================
                 REGISTER
            ======================================================= --}}

            <div class="relative my-7">

                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t-2 border-slate-300"></div>
                </div>

                <div class="relative flex justify-center">

                    <span class="bg-white px-4 text-xs font-bold text-slate-500 tracking-wider">
                        BELUM MEMILIKI AKUN?
                    </span>

                </div>

            </div>


            <a
                href="{{ route('register') }}"
                class="w-full flex items-center justify-center py-3.5 px-5 rounded-xl border-2 border-slate-300 bg-slate-100 text-slate-800 font-bold transition hover:bg-slate-200 hover:border-slate-400 focus:outline-none focus:ring-4 focus:ring-slate-300"
            >
                Daftar Akun Pemohon
            </a>

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
                >
                    <path d="M12 2a10 10 0 1010 10A10 10 0 0012 2zm0 18a8 8 0 118-8 8 8 0 01-8 8zm1-13h-2v6h6v-2h-4z"/>
                </svg>

                <span>
                    Portal mendukung fitur aksesibilitas penuh
                </span>

            </div>

        </div>


        {{-- ==========================================================
             BACK TO HOME
        =========================================================== --}}

        <div class="mt-5 text-center">

            <a
                href="{{ route('home') }}"
                class="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg text-sm font-semibold text-slate-700 bg-white/80 border border-slate-300 hover:text-blue-700 hover:bg-white hover:border-slate-400 shadow-sm transition"
            >
                <span>←</span>
                <span>Kembali ke Beranda</span>
            </a>

        </div>

    </div>

</div>

@endsection