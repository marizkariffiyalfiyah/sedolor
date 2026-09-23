@extends('layouts.app')

@section('title', 'Daftar Akun')

@section('content')

<!-- Background disesuaikan dengan tema halaman Login -->
<div class="min-h-screen bg-gradient-to-b from-slate-200/70 via-slate-100 to-slate-200/80 flex items-center justify-center px-4 py-10">

    <div class="w-full max-w-lg">

        <!-- Logo & Heading -->
        <div class="text-center mb-7">

            <!-- Kotak logo seragam dengan halaman Login -->
            <div class="mx-auto w-16 h-16 rounded-2xl bg-blue-50 border-2 border-blue-200 shadow-sm flex items-center justify-center p-2.5 overflow-hidden">
                <img src="{{ asset('assets/logosedolor.png') }}" alt="Logo SEDOLOR" class="w-full h-full object-contain">
            </div>

            <h1 class="mt-5 text-3xl font-bold text-slate-900">
                Buat Akun Pemohon
            </h1>

            <p class="mt-2 text-sm text-slate-600">
                Daftarkan akun untuk mengajukan registrasi produk secara online.
            </p>

        </div>


        <!-- Register Card -->
        <div class="bg-white border-2 border-slate-300 rounded-2xl shadow-2xl p-7 sm:p-8">

            <!-- Global Error Notification -->
            @if ($errors->any())
                <div class="mb-6 rounded-xl border border-red-200 bg-red-50 px-4 py-3" role="alert">
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 text-red-600 text-lg">
                            ⚠️
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-red-800">
                                Periksa kembali data Anda
                            </p>
                            <ul class="mt-1 space-y-1 text-sm text-red-700 list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif


            <!-- Form (Diberi space-y-5 agar antar field ada jarak) -->
            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf

                <!-- Nama Lengkap -->
                <div>
                    <label for="name" class="block mb-2 text-sm font-semibold text-slate-700">
                        Nama Lengkap
                    </label>
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none" aria-hidden="true">
                            👤
                        </span>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            required
                            autocomplete="name"
                            placeholder="Masukkan nama lengkap"
                            class="w-full pl-11 pr-4 py-3.5 rounded-xl border border-slate-300 bg-white text-slate-900 placeholder-slate-400 outline-none transition focus:border-blue-600 focus:ring-4 focus:ring-blue-100"
                        >
                    </div>
                    @error('name')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>


                <!-- Email -->
                <div>
                    <label for="email" class="block mb-2 text-sm font-semibold text-slate-700">
                        Email
                    </label>
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none" aria-hidden="true">
                            ✉
                        </span>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autocomplete="email"
                            placeholder="contoh@email.com"
                            class="w-full pl-11 pr-4 py-3.5 rounded-xl border border-slate-300 bg-white text-slate-900 placeholder-slate-400 outline-none transition focus:border-blue-600 focus:ring-4 focus:ring-blue-100"
                        >
                    </div>
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>


                <!-- No Telepon -->
                <div>
                    <label for="phone" class="block mb-2 text-sm font-semibold text-slate-700">
                        No. Telepon
                    </label>
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none" aria-hidden="true">
                            ☎
                        </span>
                        <input
                            type="tel"
                            id="phone"
                            name="phone"
                            value="{{ old('phone') }}"
                            required
                            autocomplete="tel"
                            placeholder="Contoh: 081234567890"
                            class="w-full pl-11 pr-4 py-3.5 rounded-xl border border-slate-300 bg-white text-slate-900 placeholder-slate-400 outline-none transition focus:border-blue-600 focus:ring-4 focus:ring-blue-100"
                        >
                    </div>
                    @error('phone')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>


                <!-- Password -->
                <div>
                    <label for="password" class="block mb-2 text-sm font-semibold text-slate-700">
                        Kata Sandi
                    </label>
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none" aria-hidden="true">
                            🔒
                        </span>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            required
                            autocomplete="new-password"
                            placeholder="Buat kata sandi"
                            class="w-full pl-11 pr-4 py-3.5 rounded-xl border border-slate-300 bg-white text-slate-900 placeholder-slate-400 outline-none transition focus:border-blue-600 focus:ring-4 focus:ring-blue-100"
                        >
                    </div>
                    <p class="mt-1.5 text-xs text-slate-500">
                        Gunakan minimal 8 karakter dengan kombinasi huruf dan angka.
                    </p>
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>


                <!-- Konfirmasi Password -->
                <div>
                    <label for="password_confirmation" class="block mb-2 text-sm font-semibold text-slate-700">
                        Konfirmasi Kata Sandi
                    </label>
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none" aria-hidden="true">
                            🔒
                        </span>
                        <input
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            required
                            autocomplete="new-password"
                            placeholder="Masukkan kembali kata sandi"
                            class="w-full pl-11 pr-4 py-3.5 rounded-xl border border-slate-300 bg-white text-slate-900 placeholder-slate-400 outline-none transition focus:border-blue-600 focus:ring-4 focus:ring-blue-100"
                        >
                    </div>
                </div>


                <!-- Submit Button -->
                <button
                    type="submit"
                    class="w-full flex items-center justify-center py-3.5 px-5 rounded-xl bg-blue-700 text-white font-semibold shadow-md transition hover:bg-blue-800 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-blue-200 mt-2"
                >
                    Daftar Akun
                </button>

            </form>


            <!-- Divider -->
            <div class="relative my-7">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-slate-300"></div>
                </div>
                <div class="relative flex justify-center">
                    <span class="bg-white px-4 text-xs font-bold text-slate-400">
                        SUDAH MEMILIKI AKUN?
                    </span>
                </div>
            </div>


            <!-- Link Login -->
            <a
                href="{{ route('login') }}"
                class="w-full flex items-center justify-center py-3.5 px-5 rounded-xl border-2 border-slate-300 text-slate-700 font-semibold transition hover:bg-slate-50 hover:border-slate-400 focus:outline-none focus:ring-4 focus:ring-slate-100"
            >
                Masuk ke Akun
            </a>

        </div>


        <!-- Accessibility Banner -->
        <div class="mt-6 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/80 border border-slate-300 text-xs text-slate-600 shadow-xs">
                <span class="text-base" aria-hidden="true">♿</span>
                <span>Portal mendukung fitur aksesibilitas</span>
            </div>
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

@endsection