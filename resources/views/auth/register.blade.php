@extends('layouts.app')

@section('title', 'Daftar Akun')

@section('content')

<style>
    /* =========================================================
       SEDOLOR BPOM - REGISTER
       Desktop First + Responsive
    ========================================================= */

    :root {
        --primary: #155eef;
        --primary-dark: #1048c7;
        --primary-soft: #eff6ff;
        --text-main: #172b4d;
        --text-secondary: #526581;
        --border: #cbd5e1;
        --danger: #b42318;
    }

    @media (max-width: 640px) {
        .register-heading {
            font-size: 2rem !important;
        }
    }
</style>

<!-- =========================================================
     PAGE
========================================================= -->

<div
    id="registerPage"
    class="min-h-screen bg-gradient-to-br from-slate-50 via-white to-blue-50 px-5 py-6 sm:px-8 lg:px-12 lg:py-8"
>

    <!-- Decorative Background -->

    <div
        class="pointer-events-none fixed -right-32 -top-32 h-96 w-96 rounded-full bg-blue-200/30 blur-3xl"
        aria-hidden="true"
    ></div>

    <div
        class="pointer-events-none fixed -bottom-40 -left-40 h-[28rem] w-[28rem] rounded-full bg-sky-200/20 blur-3xl"
        aria-hidden="true"
    ></div>

    <!-- Main Container -->

    <div class="relative mx-auto w-full max-w-7xl">

        <main>

            <!-- =================================================
                 WELCOME SECTION
            ================================================== -->

            <section
                class="mx-auto mb-9 max-w-3xl text-center"
                aria-labelledby="page-title"
            >

                {{-- LOGO SEDOLOR --}}
                <div
                    class="mx-auto mb-5 flex h-20 w-20 items-center justify-center overflow-hidden rounded-2xl border-2 border-blue-200 bg-white p-3 shadow-md"
                >
                    <img
                        src="{{ asset('assets/logosedolor.png') }}"
                        alt="Logo SEDOLOR"
                        class="block h-full w-full object-contain"
                    >
                </div>

                <h1
                    id="page-title"
                    class="register-heading text-4xl font-extrabold tracking-tight text-[#172b4d] lg:text-5xl"
                >
                    Buat Akun Pemohon
                </h1>

                <p class="mx-auto mt-4 max-w-2xl text-base leading-7 text-[#526581] lg:text-lg">
                    Daftarkan akun untuk mengajukan registrasi produk secara online.
                </p>

            </section>

            <!-- =================================================
                 REGISTER CARD
            ================================================== -->

            <section
                class="mx-auto w-full max-w-xl rounded-3xl border border-slate-200 bg-white p-6 shadow-[0_24px_70px_rgba(30,64,175,0.12)] sm:p-8 lg:p-9"
                aria-labelledby="register-form-title"
            >

                <h2 id="register-form-title" class="sr-only">
                    Formulir Pendaftaran Akun Pemohon
                </h2>

                <!-- GLOBAL ERROR MESSAGE -->

                @if ($errors->any())

                    <div
                        class="mb-7 rounded-2xl border-2 border-red-300 bg-red-50 p-5"
                        role="alert"
                        aria-live="assertive"
                    >

                        <div class="flex items-start gap-4">

                            <div
                                class="flex h-11 w-11 flex-shrink-0 items-center justify-center rounded-xl bg-red-100 text-red-700"
                                aria-hidden="true"
                            >
                                <svg
                                    class="h-6 w-6"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M12 9v4m0 4h.01M10.29 3.86l-8.18 14a2 2 0 001.73 3h16.32a2 2 0 001.73-3l-8.18-14a2 2 0 00-3.46 0z"
                                    />
                                </svg>
                            </div>

                            <div>

                                <p class="text-base font-extrabold text-red-900">
                                    Periksa kembali data Anda
                                </p>

                                <ul class="mt-2 list-disc space-y-1 pl-5 text-sm font-medium text-red-800">

                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach

                                </ul>

                            </div>

                        </div>

                    </div>

                @endif

                <!-- SECURITY INFORMATION -->

                <div
                    class="mb-7 flex items-start gap-3 rounded-2xl border border-blue-200 bg-blue-50 p-4"
                    role="note"
                >

                    <div
                        class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-xl bg-blue-100 text-blue-700"
                        aria-hidden="true"
                    >
                        <svg
                            class="h-5 w-5"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2h12a2 2 0 002-2v-6a2 2 0 00-2-2h-2V7a4 4 0 00-8 0v4h8z"
                            />
                        </svg>
                    </div>

                    <div>
                        <p class="text-sm font-bold text-blue-900">
                            Buat akun dengan aman
                        </p>

                        <p class="mt-1 text-sm leading-6 text-blue-800">
                            Isi data dengan benar untuk membuat akun pemohon SEDOLOR.
                        </p>
                    </div>

                </div>

                <!-- =================================================
                     REGISTER FORM
                ================================================== -->

                <form
                    method="POST"
                    action="{{ route('register.process') }}"
                    class="space-y-5"
                >

                    @csrf

                    <!-- NAMA LENGKAP -->

                    <div>

                        <label
                            for="name"
                            class="mb-2 block text-base font-bold text-[#172b4d]"
                        >
                            Nama Lengkap
                            <span class="text-red-600" aria-hidden="true">*</span>
                            <span class="sr-only">wajib diisi</span>
                        </label>

                        <div class="relative">

                            <span
                                class="pointer-events-none absolute inset-y-0 left-0 flex w-14 items-center justify-center text-blue-700"
                                aria-hidden="true"
                            >
                                <svg
                                    class="h-5 w-5"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2m6-6a4 4 0 100-8 4 4 0 000 8zm10 0v-6m3 3h-6"
                                    />
                                </svg>
                            </span>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                autofocus
                                autocomplete="name"
                                placeholder="Masukkan nama lengkap"
                                class="w-full rounded-2xl border-2 border-slate-300 bg-white py-4 pl-14 pr-4 text-base font-medium text-slate-900 placeholder-slate-400 shadow-sm transition hover:border-slate-400 focus:border-blue-700 focus:ring-4 focus:ring-blue-100"
                            >

                        </div>

                        @error('name')
                            <p class="mt-2 flex items-start gap-2 text-sm font-bold text-red-700" role="alert">
                                <span aria-hidden="true">⚠</span>
                                <span>{{ $message }}</span>
                            </p>
                        @enderror

                    </div>

                    <!-- EMAIL -->

                    <div>

                        <label
                            for="email"
                            class="mb-2 block text-base font-bold text-[#172b4d]"
                        >
                            Email
                            <span class="text-red-600" aria-hidden="true">*</span>
                            <span class="sr-only">wajib diisi</span>
                        </label>

                        <div class="relative">

                            <span
                                class="pointer-events-none absolute inset-y-0 left-0 flex w-14 items-center justify-center text-blue-700"
                                aria-hidden="true"
                            >
                                <svg
                                    class="h-5 w-5"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2 2 2 0 002 2z"
                                    />
                                </svg>
                            </span>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autocomplete="email"
                                placeholder="contoh@email.com"
                                class="w-full rounded-2xl border-2 border-slate-300 bg-white py-4 pl-14 pr-4 text-base font-medium text-slate-900 placeholder-slate-400 shadow-sm transition hover:border-slate-400 focus:border-blue-700 focus:ring-4 focus:ring-blue-100"
                            >

                        </div>

                        @error('email')
                            <p class="mt-2 flex items-start gap-2 text-sm font-bold text-red-700" role="alert">
                                <span aria-hidden="true">⚠</span>
                                <span>{{ $message }}</span>
                            </p>
                        @enderror

                    </div>

                    <!-- NO TELEPON -->

                    <div>

                        <label
                            for="phone"
                            class="mb-2 block text-base font-bold text-[#172b4d]"
                        >
                            No. Telepon
                            <span class="text-red-600" aria-hidden="true">*</span>
                            <span class="sr-only">wajib diisi</span>
                        </label>

                        <div class="relative">

                            <span
                                class="pointer-events-none absolute inset-y-0 left-0 flex w-14 items-center justify-center text-blue-700"
                                aria-hidden="true"
                            >
                                <svg
                                    class="h-5 w-5"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6A19.79 19.79 0 012.12 4.18 2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"
                                    />
                                </svg>
                            </span>

                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                value="{{ old('phone') }}"
                                required
                                autocomplete="tel"
                                placeholder="Contoh: 081234567890"
                                class="w-full rounded-2xl border-2 border-slate-300 bg-white py-4 pl-14 pr-4 text-base font-medium text-slate-900 placeholder-slate-400 shadow-sm transition hover:border-slate-400 focus:border-blue-700 focus:ring-4 focus:ring-blue-100"
                            >

                        </div>

                        @error('phone')
                            <p class="mt-2 flex items-start gap-2 text-sm font-bold text-red-700" role="alert">
                                <span aria-hidden="true">⚠</span>
                                <span>{{ $message }}</span>
                            </p>
                        @enderror

                    </div>

                    <!-- PASSWORD -->

                    <div>

                        <label
                            for="password"
                            class="mb-2 block text-base font-bold text-[#172b4d]"
                        >
                            Kata Sandi
                            <span class="text-red-600" aria-hidden="true">*</span>
                            <span class="sr-only">wajib diisi</span>
                        </label>

                        <div class="relative">

                            <span
                                class="pointer-events-none absolute inset-y-0 left-0 flex w-14 items-center justify-center text-blue-700"
                                aria-hidden="true"
                            >
                                <svg
                                    class="h-5 w-5"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2h12a2 2 0 002-2v-6a2 2 0 00-2-2h-2V7a4 4 0 00-8 0v4"
                                    />
                                </svg>
                            </span>

                            <input
                                type="password"
                                id="password"
                                name="password"
                                required
                                autocomplete="new-password"
                                placeholder="Buat kata sandi"
                                class="w-full rounded-2xl border-2 border-slate-300 bg-white py-4 pl-14 pr-4 text-base font-medium text-slate-900 placeholder-slate-400 shadow-sm transition hover:border-slate-400 focus:border-blue-700 focus:ring-4 focus:ring-blue-100"
                            >

                        </div>

                        <p class="mt-1.5 text-xs leading-5 text-slate-500">
                            Gunakan minimal 8 karakter dengan kombinasi huruf dan angka.
                        </p>

                        @error('password')
                            <p class="mt-2 flex items-start gap-2 text-sm font-bold text-red-700" role="alert">
                                <span aria-hidden="true">⚠</span>
                                <span>{{ $message }}</span>
                            </p>
                        @enderror

                    </div>

                    <!-- KONFIRMASI PASSWORD -->

                    <div>

                        <label
                            for="password_confirmation"
                            class="mb-2 block text-base font-bold text-[#172b4d]"
                        >
                            Konfirmasi Kata Sandi
                            <span class="text-red-600" aria-hidden="true">*</span>
                            <span class="sr-only">wajib diisi</span>
                        </label>

                        <div class="relative">

                            <span
                                class="pointer-events-none absolute inset-y-0 left-0 flex w-14 items-center justify-center text-blue-700"
                                aria-hidden="true"
                            >
                                <svg
                                    class="h-5 w-5"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2h12a2 2 0 002-2v-6a2 2 0 00-2-2h-2V7a4 4 0 00-8 0v4"
                                    />
                                </svg>
                            </span>

                            <input
                                type="password"
                                id="password_confirmation"
                                name="password_confirmation"
                                required
                                autocomplete="new-password"
                                placeholder="Masukkan kembali kata sandi"
                                class="w-full rounded-2xl border-2 border-slate-300 bg-white py-4 pl-14 pr-4 text-base font-medium text-slate-900 placeholder-slate-400 shadow-sm transition hover:border-slate-400 focus:border-blue-700 focus:ring-4 focus:ring-blue-100"
                            >

                        </div>

                        @error('password_confirmation')
                            <p class="mt-2 flex items-start gap-2 text-sm font-bold text-red-700" role="alert">
                                <span aria-hidden="true">⚠</span>
                                <span>{{ $message }}</span>
                            </p>
                        @enderror

                    </div>

                    <!-- SUBMIT BUTTON -->

                    <button
                        type="submit"
                        class="flex min-h-[56px] w-full items-center justify-center gap-3 rounded-2xl bg-[#155eef] px-5 py-4 text-base font-extrabold text-white shadow-lg shadow-blue-200 transition hover:bg-[#1048c7] hover:shadow-xl active:scale-[0.99]"
                    >

                        <span>
                            Daftar Akun
                        </span>

                        <svg
                            class="h-5 w-5"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2.5"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M5 12h14m-6-6l6 6-6 6"
                            />
                        </svg>

                    </button>

                </form>

                <!-- LOGIN LINK -->

                <div class="my-8 flex items-center gap-4">

                    <div class="h-px flex-1 bg-slate-200"></div>

                    <span class="text-sm font-semibold text-slate-400">
                        atau
                    </span>

                    <div class="h-px flex-1 bg-slate-200"></div>

                </div>

                <div class="text-center">

                    <p class="mb-3 text-sm font-medium text-slate-600">
                        Sudah memiliki akun?
                    </p>

                    <a
                        href="{{ route('login') }}"
                        class="flex min-h-[56px] w-full items-center justify-center gap-2 rounded-2xl border-2 border-blue-600 bg-white px-5 py-4 text-base font-extrabold text-blue-700 transition hover:bg-blue-50"
                    >

                        <svg
                            class="h-5 w-5"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M11 19l-7-7 7-7m-7 7h17"
                            />
                        </svg>

                        Masuk ke Akun

                    </a>

                </div>

                <!-- BACK TO HOME -->

                <div class="mt-7 text-center">

                    <a
                        href="{{ route('home') }}"
                        class="inline-flex min-h-[46px] items-center gap-2 rounded-xl px-5 py-2 text-sm font-bold text-slate-600 transition hover:bg-slate-50 hover:text-blue-700"
                    >

                        <svg
                            class="h-4 w-4"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M19 12H5m7 7l-7-7 7-7"
                            />
                        </svg>

                        Kembali ke Beranda

                    </a>

                </div>

            </section>

        </main>

        <!-- FOOTER -->

        <footer class="mt-10 border-t border-slate-200 py-6 text-center">

            <p class="text-sm font-semibold text-slate-600">
                SEDOLOR BPOM
                <span class="mx-1 text-blue-300">•</span>
                Badan Pengawas Obat dan Makanan
            </p>

            <p class="mt-1 text-xs text-slate-500">
                Layanan Digital BPOM Palembang
            </p>

        </footer>

    </div>

</div>

@endsection