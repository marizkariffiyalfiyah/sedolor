@extends('layouts.app')

@section('title', 'Daftar Akun')

@section('content')

<style>

    /* =========================================================
       SEDOLOR BPOM - REGISTER
       Desktop First + Responsive + Accessibility
    ========================================================= */

    :root {
        --primary: #155eef;
        --primary-dark: #1048c7;
        --primary-soft: #eff6ff;

        --text-main: #172b4d;
        --text-secondary: #526581;

        --border: #cbd5e1;

        --danger: #b42318;
        --success: #067647;
    }


    /* =========================================================
       KEYBOARD FOCUS
    ========================================================= */

    *:focus-visible {
        outline: 4px solid #f59e0b !important;
        outline-offset: 3px !important;
    }


    /* =========================================================
       LARGE TEXT
    ========================================================= */

    .accessibility-large-text .text-xs {
        font-size: 0.95rem !important;
        line-height: 1.5 !important;
    }

    .accessibility-large-text .text-sm {
        font-size: 1.08rem !important;
        line-height: 1.65 !important;
    }

    .accessibility-large-text .text-base {
        font-size: 1.18rem !important;
        line-height: 1.7 !important;
    }

    .accessibility-large-text .text-lg {
        font-size: 1.35rem !important;
        line-height: 1.7 !important;
    }

    .accessibility-large-text .text-xl {
        font-size: 1.5rem !important;
    }

    .accessibility-large-text .text-2xl {
        font-size: 1.8rem !important;
    }

    .accessibility-large-text .text-3xl {
        font-size: 2.3rem !important;
        line-height: 1.25 !important;
    }

    .accessibility-large-text .text-4xl {
        font-size: 2.8rem !important;
        line-height: 1.2 !important;
    }

    .accessibility-large-text input,
    .accessibility-large-text button,
    .accessibility-large-text a {
        font-size: 1.08rem !important;
    }


    /* =========================================================
       EXTRA LARGE TEXT
    ========================================================= */

    .accessibility-extra-large-text .text-xs {
        font-size: 1.05rem !important;
        line-height: 1.6 !important;
    }

    .accessibility-extra-large-text .text-sm {
        font-size: 1.2rem !important;
        line-height: 1.75 !important;
    }

    .accessibility-extra-large-text .text-base {
        font-size: 1.3rem !important;
        line-height: 1.8 !important;
    }

    .accessibility-extra-large-text .text-lg {
        font-size: 1.5rem !important;
        line-height: 1.8 !important;
    }

    .accessibility-extra-large-text .text-xl {
        font-size: 1.65rem !important;
    }

    .accessibility-extra-large-text .text-2xl {
        font-size: 2rem !important;
    }

    .accessibility-extra-large-text .text-3xl {
        font-size: 2.6rem !important;
        line-height: 1.25 !important;
    }

    .accessibility-extra-large-text .text-4xl {
        font-size: 3rem !important;
        line-height: 1.2 !important;
    }

    .accessibility-extra-large-text input,
    .accessibility-extra-large-text button,
    .accessibility-extra-large-text a {
        font-size: 1.2rem !important;
    }


    /* =========================================================
       HIGH CONTRAST
    ========================================================= */

    .high-contrast .register-page {
        background: #ffffff !important;
    }

    .high-contrast .register-card,
    .high-contrast .accessibility-card {
        background: #ffffff !important;
        border: 3px solid #000000 !important;
        box-shadow: none !important;
    }

    .high-contrast input {
        background: #ffffff !important;
        color: #000000 !important;
        border: 3px solid #000000 !important;
    }

    .high-contrast input::placeholder {
        color: #333333 !important;
    }

    .high-contrast .primary-button {
        background: #003b8f !important;
        border: 2px solid #000000 !important;
    }

    .high-contrast .secondary-button {
        color: #000000 !important;
        border: 3px solid #000000 !important;
    }


    /* =========================================================
       REDUCE MOTION
    ========================================================= */

    @media (prefers-reduced-motion: reduce) {

        *,
        *::before,
        *::after {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.01ms !important;
            scroll-behavior: auto !important;
        }

    }


    /* =========================================================
       MOBILE
    ========================================================= */

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
    class="register-page min-h-screen bg-gradient-to-br from-slate-50 via-white to-blue-50 px-5 py-6 sm:px-8 lg:px-12 lg:py-8"
>

    <!-- Decorative background -->

    <div
        class="pointer-events-none fixed -right-32 -top-32 h-96 w-96 rounded-full bg-blue-200/30 blur-3xl"
        aria-hidden="true"
    ></div>

    <div
        class="pointer-events-none fixed -bottom-40 -left-40 h-[28rem] w-[28rem] rounded-full bg-sky-200/20 blur-3xl"
        aria-hidden="true"
    ></div>


    <!-- =====================================================
         MAIN CONTAINER
    ====================================================== -->

    <div class="relative mx-auto w-full max-w-7xl">

        <!-- =================================================
             ACCESSIBILITY CONTROLS
        ================================================== -->

        <div
            class="mb-8 flex flex-wrap items-center justify-end gap-2"
            aria-label="Pengaturan aksesibilitas"
        >

            <!-- Font Size -->

            <button
                type="button"
                id="fontSizeButton"
                class="inline-flex min-h-[48px] items-center gap-2 rounded-xl border-2 border-blue-200 bg-white px-4 py-2 text-sm font-bold text-[#12326b] shadow-sm transition hover:border-blue-500 hover:bg-blue-50"
                aria-label="Perbesar ukuran teks"
                aria-pressed="false"
                title="Perbesar ukuran teks"
            >

                <span
                    class="text-lg font-black"
                    aria-hidden="true"
                >
                    T
                </span>

                <span>
                    Ukuran Teks
                </span>

            </button>


            <!-- Contrast -->

            <button
                type="button"
                id="contrastButton"
                class="inline-flex min-h-[48px] items-center gap-2 rounded-xl border-2 border-blue-200 bg-white px-4 py-2 text-sm font-bold text-[#12326b] shadow-sm transition hover:border-blue-500 hover:bg-blue-50"
                aria-label="Aktifkan kontras tinggi"
                aria-pressed="false"
                title="Aktifkan kontras tinggi"
            >

                <span
                    class="text-xl"
                    aria-hidden="true"
                >
                    ◐
                </span>

                <span>
                    Kontras Tinggi
                </span>

            </button>

        </div>


        <!-- =====================================================
             MAIN
        ====================================================== -->

        <main>

            <!-- =================================================
                 INTRO
            ================================================== -->

            <section
                class="mx-auto mb-9 max-w-3xl text-center"
                aria-labelledby="page-title"
            >

                <h1
                    id="page-title"
                    class="register-heading text-4xl font-extrabold tracking-tight text-[#172b4d] lg:text-5xl"
                >
                    Buat Akun Pemohon
                </h1>

                <p class="mx-auto mt-4 max-w-2xl text-base leading-7 text-[#526581] lg:text-lg">
                    Daftarkan akun untuk mengajukan registrasi produk
                    BPOM secara online dengan mudah dan aman.
                </p>

            </section>


            <!-- =================================================
                 REGISTER CARD
            ================================================== -->

            <section
                class="register-card mx-auto w-full max-w-xl rounded-3xl border border-slate-200 bg-white p-6 shadow-[0_24px_70px_rgba(30,64,175,0.12)] sm:p-8 lg:p-9"
                aria-labelledby="register-form-title"
            >

                <h2
                    id="register-form-title"
                    class="sr-only"
                >
                    Formulir Pendaftaran Akun
                </h2>


                <!-- =================================================
                     ERROR
                ================================================== -->

                @if ($errors->any())

                    <div
                        class="mb-7 rounded-2xl border-2 border-red-300 bg-red-50 p-5"
                        role="alert"
                        aria-live="assertive"
                        tabindex="-1"
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

                                        <li>
                                            {{ $error }}
                                        </li>

                                    @endforeach

                                </ul>

                            </div>

                        </div>

                    </div>

                @endif


                <!-- =================================================
                     INFO
                ================================================== -->

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
                                d="M13 16h-1v-4h-1m1-4h.01M12 20a8 8 0 100-16 8 8 0 000 16z"
                            />

                        </svg>

                    </div>


                    <div>

                        <p class="text-sm font-bold text-blue-900">
                            Lengkapi data dengan benar
                        </p>

                        <p class="mt-1 text-sm leading-6 text-blue-800">
                            Data yang Anda masukkan akan digunakan untuk
                            proses pendaftaran akun.
                        </p>

                    </div>

                </div>


                <!-- =================================================
                     FORM
                ================================================== -->

                <form
                    method="POST"
                    action="{{ route('register') }}"
                    id="registerForm"
                    class="space-y-6"
                >

                    @csrf


                    <!-- =============================================
                         NAMA
                    ============================================== -->

                    <div>

                        <label
                            for="name"
                            class="mb-2 block text-base font-bold text-[#172b4d]"
                        >

                            Nama Lengkap

                            <span
                                class="text-red-600"
                                aria-hidden="true"
                            >
                                *
                            </span>

                            <span class="sr-only">
                                wajib diisi
                            </span>

                        </label>


                        <div class="relative">

                            <div
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
                                        d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2m6-6a4 4 0 100-8 4 4 0 000 8zm10-2v-6m3 3h-6"
                                    />

                                </svg>

                            </div>


                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                autofocus
                                autocomplete="name"
                                placeholder="Masukkan nama lengkap"
                                aria-describedby="name-help @error('name') name-error @enderror"
                                @error('name')
                                    aria-invalid="true"
                                @enderror
                                class="w-full rounded-2xl border-2 border-slate-300 bg-white py-4 pl-14 pr-4 text-base font-medium text-slate-900 placeholder-slate-400 shadow-sm transition hover:border-slate-400 focus:border-blue-700 focus:ring-4 focus:ring-blue-100"
                            >

                        </div>


                        <p
                            id="name-help"
                            class="mt-2 text-sm leading-6 text-slate-500"
                        >
                            Masukkan nama lengkap sesuai identitas Anda.
                        </p>


                        @error('name')

                            <p
                                id="name-error"
                                class="mt-2 flex items-start gap-2 text-sm font-bold text-red-700"
                                role="alert"
                            >

                                <span aria-hidden="true">
                                    ⚠
                                </span>

                                <span>
                                    {{ $message }}
                                </span>

                            </p>

                        @enderror

                    </div>


                    <!-- =============================================
                         EMAIL
                    ============================================== -->

                    <div>

                        <label
                            for="email"
                            class="mb-2 block text-base font-bold text-[#172b4d]"
                        >

                            Email

                            <span
                                class="text-red-600"
                                aria-hidden="true"
                            >
                                *
                            </span>

                            <span class="sr-only">
                                wajib diisi
                            </span>

                        </label>


                        <div class="relative">

                            <div
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
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                    />

                                </svg>

                            </div>


                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autocomplete="email"
                                inputmode="email"
                                spellcheck="false"
                                placeholder="nama@email.com"
                                aria-describedby="email-help @error('email') email-error @enderror"
                                @error('email')
                                    aria-invalid="true"
                                @enderror
                                class="w-full rounded-2xl border-2 border-slate-300 bg-white py-4 pl-14 pr-4 text-base font-medium text-slate-900 placeholder-slate-400 shadow-sm transition hover:border-slate-400 focus:border-blue-700 focus:ring-4 focus:ring-blue-100"
                            >

                        </div>


                        <p
                            id="email-help"
                            class="mt-2 text-sm leading-6 text-slate-500"
                        >
                            Gunakan email yang aktif dan dapat Anda akses.
                        </p>


                        @error('email')

                            <p
                                id="email-error"
                                class="mt-2 flex items-start gap-2 text-sm font-bold text-red-700"
                                role="alert"
                            >

                                <span aria-hidden="true">
                                    ⚠
                                </span>

                                <span>
                                    {{ $message }}
                                </span>

                            </p>

                        @enderror

                    </div>


                    <!-- =============================================
                         PHONE
                    ============================================== -->

                    <div>

                        <label
                            for="phone"
                            class="mb-2 block text-base font-bold text-[#172b4d]"
                        >

                            No. Telepon

                            <span
                                class="text-red-600"
                                aria-hidden="true"
                            >
                                *
                            </span>

                            <span class="sr-only">
                                wajib diisi
                            </span>

                        </label>


                        <div class="relative">

                            <div
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
                                        d="M2 5a2 2 0 012-2h2.28a2 2 0 011.94 1.515L8.8 7.6a2 2 0 01-.5 1.84l-1.27 1.27a16 16 0 006.26 6.26l1.27-1.27a2 2 0 011.84-.5l3.085.58A2 2 0 0121 17.72V20a2 2 0 01-2 2h-1C9.716 22 2 14.284 2 5V5z"
                                    />

                                </svg>

                            </div>


                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                value="{{ old('phone') }}"
                                required
                                autocomplete="tel"
                                inputmode="tel"
                                placeholder="081234567890"
                                aria-describedby="phone-help @error('phone') phone-error @enderror"
                                @error('phone')
                                    aria-invalid="true"
                                @enderror
                                class="w-full rounded-2xl border-2 border-slate-300 bg-white py-4 pl-14 pr-4 text-base font-medium text-slate-900 placeholder-slate-400 shadow-sm transition hover:border-slate-400 focus:border-blue-700 focus:ring-4 focus:ring-blue-100"
                            >

                        </div>


                        <p
                            id="phone-help"
                            class="mt-2 text-sm leading-6 text-slate-500"
                        >
                            Contoh: 081234567890.
                        </p>


                        @error('phone')

                            <p
                                id="phone-error"
                                class="mt-2 flex items-start gap-2 text-sm font-bold text-red-700"
                                role="alert"
                            >

                                <span aria-hidden="true">
                                    ⚠
                                </span>

                                <span>
                                    {{ $message }}
                                </span>

                            </p>

                        @enderror

                    </div>


                    <!-- =============================================
                         PASSWORD
                    ============================================== -->

                    <div>

                        <label
                            for="password"
                            class="mb-2 block text-base font-bold text-[#172b4d]"
                        >

                            Kata Sandi

                            <span
                                class="text-red-600"
                                aria-hidden="true"
                            >
                                *
                            </span>

                            <span class="sr-only">
                                wajib diisi
                            </span>

                        </label>


                        <div class="relative">

                            <div
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
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                                    />

                                </svg>

                            </div>


                            <input
                                type="password"
                                id="password"
                                name="password"
                                required
                                autocomplete="new-password"
                                placeholder="Buat kata sandi"
                                aria-describedby="password-help password-strength @error('password') password-error @enderror"
                                @error('password')
                                    aria-invalid="true"
                                @enderror
                                class="w-full rounded-2xl border-2 border-slate-300 bg-white py-4 pl-14 pr-16 text-base font-medium text-slate-900 placeholder-slate-400 shadow-sm transition hover:border-slate-400 focus:border-blue-700 focus:ring-4 focus:ring-blue-100"
                            >


                            <button
                                type="button"
                                class="toggle-password absolute right-2 top-1/2 flex min-h-[46px] min-w-[46px] -translate-y-1/2 items-center justify-center rounded-xl text-slate-600 transition hover:bg-blue-50 hover:text-blue-700"
                                data-target="password"
                                aria-label="Tampilkan kata sandi"
                                aria-pressed="false"
                                title="Tampilkan kata sandi"
                            >

                                <svg
                                    class="eye-open h-5 w-5"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    aria-hidden="true"
                                >

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                                    />

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                                    />

                                </svg>


                                <svg
                                    class="eye-closed hidden h-5 w-5"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    aria-hidden="true"
                                >

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M3 3l18 18M10.584 10.587a2 2 0 002.829 2.828M9.88 5.09A9.77 9.77 0 0112 5c4.478 0 8.268 2.943 9.542 7a10.04 10.04 0 01-4.132 5.411M6.228 6.228C4.531 7.484 3.27 9.176 2.458 12c1.274 4.057 5.064 7 9.542 7 1.61 0 3.13-.377 4.47-1.045"
                                    />

                                </svg>

                            </button>

                        </div>


                        <p
                            id="password-help"
                            class="mt-2 text-sm leading-6 text-slate-500"
                        >
                            Gunakan kata sandi yang aman dan mudah Anda ingat.
                        </p>


                        <!-- Password strength -->

                        <div
                            id="password-strength"
                            class="mt-3 hidden"
                            aria-live="polite"
                        >

                            <div class="mb-2 flex items-center justify-between">

                                <span class="text-xs font-bold text-slate-600">
                                    Kekuatan kata sandi
                                </span>

                                <span
                                    id="strengthText"
                                    class="text-xs font-bold"
                                ></span>

                            </div>


                            <div
                                class="h-2 overflow-hidden rounded-full bg-slate-200"
                                aria-hidden="true"
                            >

                                <div
                                    id="strengthBar"
                                    class="h-full w-0 rounded-full transition-all duration-300"
                                ></div>

                            </div>

                        </div>


                        @error('password')

                            <p
                                id="password-error"
                                class="mt-2 flex items-start gap-2 text-sm font-bold text-red-700"
                                role="alert"
                            >

                                <span aria-hidden="true">
                                    ⚠
                                </span>

                                <span>
                                    {{ $message }}
                                </span>

                            </p>

                        @enderror

                    </div>


                    <!-- =============================================
                         CONFIRM PASSWORD
                    ============================================== -->

                    <div>

                        <label
                            for="password_confirmation"
                            class="mb-2 block text-base font-bold text-[#172b4d]"
                        >

                            Konfirmasi Kata Sandi

                            <span
                                class="text-red-600"
                                aria-hidden="true"
                            >
                                *
                            </span>

                            <span class="sr-only">
                                wajib diisi
                            </span>

                        </label>


                        <div class="relative">

                            <div
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
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                                    />

                                </svg>

                            </div>


                            <input
                                type="password"
                                id="password_confirmation"
                                name="password_confirmation"
                                required
                                autocomplete="new-password"
                                placeholder="Masukkan kembali kata sandi"
                                aria-describedby="confirm-help password-match"
                                class="w-full rounded-2xl border-2 border-slate-300 bg-white py-4 pl-14 pr-16 text-base font-medium text-slate-900 placeholder-slate-400 shadow-sm transition hover:border-slate-400 focus:border-blue-700 focus:ring-4 focus:ring-blue-100"
                            >


                            <button
                                type="button"
                                class="toggle-password absolute right-2 top-1/2 flex min-h-[46px] min-w-[46px] -translate-y-1/2 items-center justify-center rounded-xl text-slate-600 transition hover:bg-blue-50 hover:text-blue-700"
                                data-target="password_confirmation"
                                aria-label="Tampilkan kata sandi"
                                aria-pressed="false"
                                title="Tampilkan kata sandi"
                            >

                                <svg
                                    class="eye-open h-5 w-5"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    aria-hidden="true"
                                >

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                                    />

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                                    />

                                </svg>


                                <svg
                                    class="eye-closed hidden h-5 w-5"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    aria-hidden="true"
                                >

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M3 3l18 18M10.584 10.587a2 2 0 002.829 2.828M9.88 5.09A9.77 9.77 0 0112 5c4.478 0 8.268 2.943 9.542 7a10.04 10.04 0 01-4.132 5.411M6.228 6.228C4.531 7.484 3.27 7 9.542 7 1.61 0 3.13-.377 4.47-1.045"
                                    />

                                </svg>

                            </button>

                        </div>


                        <p
                            id="confirm-help"
                            class="mt-2 text-sm leading-6 text-slate-500"
                        >
                            Masukkan kata sandi yang sama seperti sebelumnya.
                        </p>


                        <p
                            id="password-match"
                            class="mt-2 hidden text-sm font-bold"
                            aria-live="polite"
                        ></p>

                    </div>


                    <!-- =============================================
                         SUBMIT
                    ============================================== -->

                    <button
                        type="submit"
                        id="registerButton"
                        class="primary-button flex min-h-[56px] w-full items-center justify-center gap-3 rounded-2xl bg-[#155eef] px-5 py-4 text-base font-extrabold text-white shadow-lg shadow-blue-200 transition hover:bg-[#1048c7] hover:shadow-xl active:scale-[0.99]"
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


                <!-- =================================================
                     LOGIN
                ================================================== -->

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
                        class="secondary-button flex min-h-[56px] w-full items-center justify-center gap-2 rounded-2xl border-2 border-blue-600 bg-white px-5 py-4 text-base font-extrabold text-blue-700 transition hover:bg-blue-50"
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
                                d="M15 19l-7-7 7-7"
                            />

                        </svg>

                        Masuk ke Akun

                    </a>

                </div>


                <!-- Back -->

                <div class="mt-7 text-center">

                    <a
                        href="/"
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


            <!-- =================================================
                 ACCESSIBILITY INFORMATION
            ================================================== -->

            <section
                class="accessibility-card mx-auto mt-8 max-w-xl rounded-2xl border border-slate-200 bg-white/80 p-5 shadow-sm backdrop-blur-sm"
                aria-labelledby="accessibility-title"
            >

                <div class="mb-5 flex items-center gap-3">

                    <div
                        class="flex h-11 w-11 flex-shrink-0 items-center justify-center rounded-xl bg-blue-100 text-blue-700"
                        aria-hidden="true"
                    >

                        <span class="text-xl font-bold">
                            ♿
                        </span>

                    </div>


                    <div>

                        <h2
                            id="accessibility-title"
                            class="text-base font-bold text-[#172b4d]"
                        >
                            Fitur Aksesibilitas
                        </h2>

                        <p class="text-sm text-slate-500">
                            Website dirancang agar lebih mudah digunakan.
                        </p>

                    </div>

                </div>


                <div class="grid gap-3 sm:grid-cols-3">

                    <!-- Keyboard -->

                    <div
                        class="rounded-xl bg-slate-50 p-4 text-center"
                    >

                        <div
                            class="mb-2 flex justify-center text-blue-700"
                            aria-hidden="true"
                        >

                            <svg
                                class="h-7 w-7"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                viewBox="0 0 24 24"
                            >

                                <rect
                                    x="3"
                                    y="5"
                                    width="18"
                                    height="14"
                                    rx="2"
                                />

                                <path
                                    stroke-linecap="round"
                                    d="M7 9h.01M10 9h.01M13 9h.01M16 9h.01M7 13h10M9 16h6"
                                />

                            </svg>

                        </div>


                        <p class="text-xs font-bold leading-5 text-slate-700">
                            Navigasi Keyboard
                        </p>

                        <p class="mt-1 text-xs leading-5 text-slate-500">
                            Gunakan Tab untuk berpindah.
                        </p>

                    </div>


                    <!-- Visual -->

                    <div
                        class="rounded-xl bg-slate-50 p-4 text-center"
                    >

                        <div
                            class="mb-2 flex justify-center text-blue-700"
                            aria-hidden="true"
                        >

                            <svg
                                class="h-7 w-7"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                viewBox="0 0 24 24"
                            >

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                                />

                                <circle
                                    cx="12"
                                    cy="12"
                                    r="3"
                                />

                            </svg>

                        </div>


                        <p class="text-xs font-bold leading-5 text-slate-700">
                            Tampilan Aksesibel
                        </p>

                        <p class="mt-1 text-xs leading-5 text-slate-500">
                            Atur ukuran teks dan kontras.
                        </p>

                    </div>


                    <!-- Screen Reader -->

                    <div
                        class="rounded-xl bg-slate-50 p-4 text-center"
                    >

                        <div
                            class="mb-2 flex justify-center text-blue-700"
                            aria-hidden="true"
                        >

                            <svg
                                class="h-7 w-7"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                viewBox="0 0 24 24"
                            >

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M3 10v4M7 8v8M11 5v14M15 8v8M19 10v4"
                                />

                            </svg>

                        </div>


                        <p class="text-xs font-bold leading-5 text-slate-700">
                            Pembaca Layar
                        </p>

                        <p class="mt-1 text-xs leading-5 text-slate-500">
                            Struktur halaman mendukung screen reader.
                        </p>

                    </div>

                </div>

            </section>

        </main>


        <!-- =====================================================
             FOOTER
        ====================================================== -->

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


<!-- =========================================================
     JAVASCRIPT
========================================================= -->

<script>

document.addEventListener('DOMContentLoaded', function () {

    /* ========================================================
       SHOW / HIDE PASSWORD
    ======================================================== */

    const passwordButtons =
        document.querySelectorAll('.toggle-password');


    passwordButtons.forEach(function (button) {

        button.addEventListener('click', function () {

            const targetId =
                button.getAttribute('data-target');

            const input =
                document.getElementById(targetId);

            const eyeOpen =
                button.querySelector('.eye-open');

            const eyeClosed =
                button.querySelector('.eye-closed');


            if (!input) {
                return;
            }


            const isHidden =
                input.type === 'password';


            if (isHidden) {

                input.type = 'text';

                button.setAttribute(
                    'aria-label',
                    'Sembunyikan kata sandi'
                );

                button.setAttribute(
                    'title',
                    'Sembunyikan kata sandi'
                );

                button.setAttribute(
                    'aria-pressed',
                    'true'
                );

                eyeOpen.classList.add('hidden');

                eyeClosed.classList.remove('hidden');

            } else {

                input.type = 'password';

                button.setAttribute(
                    'aria-label',
                    'Tampilkan kata sandi'
                );

                button.setAttribute(
                    'title',
                    'Tampilkan kata sandi'
                );

                button.setAttribute(
                    'aria-pressed',
                    'false'
                );

                eyeOpen.classList.remove('hidden');

                eyeClosed.classList.add('hidden');

            }

        });

    });


    /* ========================================================
       PASSWORD STRENGTH
    ======================================================== */

    const password =
        document.getElementById('password');

    const strengthContainer =
        document.getElementById('password-strength');

    const strengthBar =
        document.getElementById('strengthBar');

    const strengthText =
        document.getElementById('strengthText');


    if (password) {

        password.addEventListener('input', function () {

            const value =
                password.value;


            if (value.length === 0) {

                strengthContainer.classList.add('hidden');

                return;

            }


            strengthContainer.classList.remove('hidden');


            let score = 0;


            if (value.length >= 8) {
                score++;
            }

            if (/[A-Z]/.test(value)) {
                score++;
            }

            if (/[a-z]/.test(value)) {
                score++;
            }

            if (/[0-9]/.test(value)) {
                score++;
            }

            if (/[^A-Za-z0-9]/.test(value)) {
                score++;
            }


            if (score <= 2) {

                strengthBar.style.width = '35%';

                strengthText.textContent =
                    'Lemah';

                strengthText.className =
                    'text-xs font-bold text-red-600';

            } else if (score <= 4) {

                strengthBar.style.width = '70%';

                strengthText.textContent =
                    'Sedang';

                strengthText.className =
                    'text-xs font-bold text-amber-600';

            } else {

                strengthBar.style.width = '100%';

                strengthText.textContent =
                    'Kuat';

                strengthText.className =
                    'text-xs font-bold text-green-700';

            }

        });

    }


    /* ========================================================
       PASSWORD CONFIRMATION
    ======================================================== */

    const confirmation =
        document.getElementById('password_confirmation');

    const matchMessage =
        document.getElementById('password-match');


    function checkPasswordMatch() {

        if (
            !confirmation ||
            !matchMessage ||
            !password
        ) {
            return;
        }


        if (confirmation.value.length === 0) {

            matchMessage.classList.add('hidden');

            return;

        }


        matchMessage.classList.remove('hidden');


        if (
            password.value ===
            confirmation.value
        ) {

            matchMessage.textContent =
                '✓ Kata sandi cocok.';

            matchMessage.className =
                'mt-2 text-sm font-bold text-green-700';

            confirmation.setAttribute(
                'aria-invalid',
                'false'
            );

        } else {

            matchMessage.textContent =
                '⚠ Kata sandi belum cocok.';

            matchMessage.className =
                'mt-2 text-sm font-bold text-red-700';

            confirmation.setAttribute(
                'aria-invalid',
                'true'
            );

        }

    }


    if (confirmation) {

        confirmation.addEventListener(
            'input',
            checkPasswordMatch
        );

    }


    if (password) {

        password.addEventListener(
            'input',
            checkPasswordMatch
        );

    }


    /* ========================================================
       FONT SIZE ACCESSIBILITY

       0 = Normal
       1 = Large
       2 = Extra Large
    ======================================================== */

    const fontSizeButton =
        document.getElementById('fontSizeButton');


    let fontSizeLevel = 0;


    if (fontSizeButton) {

        fontSizeButton.addEventListener(
            'click',
            function () {

                fontSizeLevel++;


                if (fontSizeLevel > 2) {

                    fontSizeLevel = 0;

                }


                document.body.classList.remove(
                    'accessibility-large-text',
                    'accessibility-extra-large-text'
                );


                /* NORMAL */

                if (fontSizeLevel === 0) {

                    fontSizeButton.setAttribute(
                        'aria-label',
                        'Perbesar ukuran teks'
                    );

                    fontSizeButton.setAttribute(
                        'title',
                        'Perbesar ukuran teks'
                    );

                    fontSizeButton.setAttribute(
                        'aria-pressed',
                        'false'
                    );

                }


                /* LARGE */

                if (fontSizeLevel === 1) {

                    document.body.classList.add(
                        'accessibility-large-text'
                    );

                    fontSizeButton.setAttribute(
                        'aria-label',
                        'Ukuran teks diperbesar'
                    );

                    fontSizeButton.setAttribute(
                        'title',
                        'Ukuran teks diperbesar'
                    );

                    fontSizeButton.setAttribute(
                        'aria-pressed',
                        'true'
                    );

                }


                /* EXTRA LARGE */

                if (fontSizeLevel === 2) {

                    document.body.classList.add(
                        'accessibility-extra-large-text'
                    );

                    fontSizeButton.setAttribute(
                        'aria-label',
                        'Ukuran teks sangat besar'
                    );

                    fontSizeButton.setAttribute(
                        'title',
                        'Ukuran teks sangat besar'
                    );

                    fontSizeButton.setAttribute(
                        'aria-pressed',
                        'true'
                    );

                }

            }
        );

    }


    /* ========================================================
       HIGH CONTRAST
    ======================================================== */

    const contrastButton =
        document.getElementById('contrastButton');


    if (contrastButton) {

        contrastButton.addEventListener(
            'click',
            function () {

                const active =
                    document.body.classList.toggle(
                        'high-contrast'
                    );


                contrastButton.setAttribute(
                    'aria-pressed',
                    active
                        ? 'true'
                        : 'false'
                );


                contrastButton.setAttribute(
                    'aria-label',
                    active
                        ? 'Matikan kontras tinggi'
                        : 'Aktifkan kontras tinggi'
                );


                contrastButton.setAttribute(
                    'title',
                    active
                        ? 'Matikan kontras tinggi'
                        : 'Aktifkan kontras tinggi'
                );

            }
        );

    }

});

</script>

@endsection