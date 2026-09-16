@extends('layouts.app')

@section('title', 'Masuk')

@section('content')

<style>
    /* =========================================================
       SEDOLOR BPOM - LOGIN
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
    }


    /* =========================================================
       ACCESSIBILITY - KEYBOARD FOCUS
    ========================================================= */

    *:focus-visible {
        outline: 4px solid #f59e0b !important;
        outline-offset: 3px !important;
    }


    /* =========================================================
       ACCESSIBILITY - LARGE TEXT

       IMPORTANT:
       Kita membesarkan class text Tailwind secara langsung,
       bukan hanya font-size body.
    ========================================================= */

    .accessibility-large-text .text-xs {
        font-size: 0.875rem !important;
        line-height: 1.4 !important;
    }

    .accessibility-large-text .text-sm {
        font-size: 1.05rem !important;
        line-height: 1.6 !important;
    }

    .accessibility-large-text .text-base {
        font-size: 1.15rem !important;
        line-height: 1.7 !important;
    }

    .accessibility-large-text .text-lg {
        font-size: 1.3rem !important;
        line-height: 1.7 !important;
    }

    .accessibility-large-text .text-xl {
        font-size: 1.45rem !important;
        line-height: 1.7 !important;
    }

    .accessibility-large-text .text-2xl {
        font-size: 1.7rem !important;
        line-height: 1.3 !important;
    }

    .accessibility-large-text .text-3xl {
        font-size: 2.25rem !important;
        line-height: 1.25 !important;
    }

    .accessibility-large-text .text-4xl {
        font-size: 2.75rem !important;
        line-height: 1.2 !important;
    }

    .accessibility-large-text input,
    .accessibility-large-text button,
    .accessibility-large-text a {
        font-size: 1.05rem !important;
    }


    /* =========================================================
       ACCESSIBILITY - EXTRA LARGE TEXT
    ========================================================= */

    .accessibility-extra-large-text .text-xs {
        font-size: 1rem !important;
        line-height: 1.5 !important;
    }

    .accessibility-extra-large-text .text-sm {
        font-size: 1.2rem !important;
        line-height: 1.7 !important;
    }

    .accessibility-extra-large-text .text-base {
        font-size: 1.3rem !important;
        line-height: 1.8 !important;
    }

    .accessibility-extra-large-text .text-lg {
        font-size: 1.45rem !important;
        line-height: 1.8 !important;
    }

    .accessibility-extra-large-text .text-xl {
        font-size: 1.6rem !important;
        line-height: 1.8 !important;
    }

    .accessibility-extra-large-text .text-2xl {
        font-size: 1.9rem !important;
        line-height: 1.35 !important;
    }

    .accessibility-extra-large-text .text-3xl {
        font-size: 2.5rem !important;
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
       ACCESSIBILITY - HIGH CONTRAST
    ========================================================= */

    .high-contrast .login-page {
        background: #ffffff !important;
    }

    .high-contrast .login-card,
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
       MOBILE ADJUSTMENT
    ========================================================= */

    @media (max-width: 640px) {

        .login-heading {
            font-size: 2rem !important;
        }

    }

</style>


<!-- =========================================================
     PAGE
========================================================= -->

<div
    id="loginPage"
    class="login-page min-h-screen bg-gradient-to-br from-slate-50 via-white to-blue-50 px-5 py-6 sm:px-8 lg:px-12 lg:py-8"
>


    <!-- =====================================================
         DECORATIVE BACKGROUND
    ====================================================== -->

    <div
        class="pointer-events-none fixed -right-32 -top-32 h-96 w-96 rounded-full bg-blue-200/30 blur-3xl"
        aria-hidden="true"
    ></div>

    <div
        class="pointer-events-none fixed -bottom-40 -left-40 h-[28rem] w-[28rem] rounded-full bg-sky-200/20 blur-3xl"
        aria-hidden="true"
    ></div>



    <!-- =====================================================
         MAIN WEBSITE CONTAINER
    ====================================================== -->

    <div class="relative mx-auto w-full max-w-7xl">


            <!-- =================================================
                 ACCESSIBILITY CONTROLS
            ================================================== -->

            <div
                class="flex flex-wrap items-center gap-2"
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



                <!-- High Contrast -->

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

        </header>



        <!-- =====================================================
             CONTENT
        ====================================================== -->

        <main>


            <!-- =================================================
                 WELCOME SECTION
            ================================================== -->

            <section
                class="mx-auto mb-9 max-w-3xl text-center"
                aria-labelledby="page-title"
            >


                <h1
                    id="page-title"
                    class="login-heading text-4xl font-extrabold tracking-tight text-[#172b4d] lg:text-5xl"
                >
                    Selamat Datang
                </h1>


                <p class="mx-auto mt-4 max-w-2xl text-base leading-7 text-[#526581] lg:text-lg">
                    Masuk ke akun Anda untuk melanjutkan
                    pendaftaran produk secara online.
                </p>

            </section>



            <!-- =================================================
                 LOGIN CARD
            ================================================== -->

            <section
                class="login-card mx-auto w-full max-w-xl rounded-3xl border border-slate-200 bg-white p-6 shadow-[0_24px_70px_rgba(30,64,175,0.12)] sm:p-8 lg:p-9"
                aria-labelledby="login-form-title"
            >

                <h2
                    id="login-form-title"
                    class="sr-only"
                >
                    Formulir Masuk ke Akun
                </h2>



                <!-- =================================================
                     ERROR MESSAGE
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
                                    Gagal masuk
                                </p>

                                <p class="mt-1 text-sm leading-6 text-red-800">
                                    Periksa kembali email dan kata sandi Anda.
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
                     SECURITY INFORMATION
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
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                            />

                        </svg>

                    </div>


                    <div>

                        <p class="text-sm font-bold text-blue-900">
                            Akses akun dengan aman
                        </p>

                        <p class="mt-1 text-sm leading-6 text-blue-800">
                            Gunakan akun yang telah terdaftar untuk mengakses
                            layanan SEDOLOR.
                        </p>

                    </div>

                </div>



                <!-- =================================================
                     LOGIN FORM
                ================================================== -->

                <form
                    method="POST"
                    action="{{ route('login') }}"
                    class="space-y-6"
                >

                    @csrf



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

                            <!-- Email Icon -->

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
                                autofocus
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
                            Gunakan email yang terdaftar pada akun Anda.
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

                            <!-- Lock Icon -->

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
                                autocomplete="current-password"
                                placeholder="Masukkan kata sandi Anda"
                                aria-describedby="@error('password') password-error @enderror"
                                @error('password')
                                    aria-invalid="true"
                                @enderror
                                class="w-full rounded-2xl border-2 border-slate-300 bg-white py-4 pl-14 pr-16 text-base font-medium text-slate-900 placeholder-slate-400 shadow-sm transition hover:border-slate-400 focus:border-blue-700 focus:ring-4 focus:ring-blue-100"
                            >


                            <!-- Show / Hide Password -->

                            <button
                                type="button"
                                id="togglePassword"
                                class="absolute right-2 top-1/2 flex min-h-[46px] min-w-[46px] -translate-y-1/2 items-center justify-center rounded-xl text-slate-600 transition hover:bg-blue-50 hover:text-blue-700"
                                aria-label="Tampilkan kata sandi"
                                aria-pressed="false"
                                title="Tampilkan kata sandi"
                            >

                                <!-- Eye Open -->

                                <svg
                                    id="eyeOpen"
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
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                                    />

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                                    />

                                </svg>


                                <!-- Eye Closed -->

                                <svg
                                    id="eyeClosed"
                                    class="hidden h-5 w-5"
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
                         REMEMBER ME + FORGOT PASSWORD
                    ============================================== -->

                    <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">

                        <!-- Remember Me -->

                        <label
                            for="remember"
                            class="inline-flex min-h-[46px] cursor-pointer select-none items-center gap-3"
                        >

                            <input
                                type="checkbox"
                                name="remember"
                                id="remember"
                                class="h-6 w-6 cursor-pointer rounded-md border-2 border-slate-400 text-blue-700 focus:ring-4 focus:ring-blue-200"
                            >

                            <span class="text-base font-semibold text-slate-700">
                                Ingat saya di perangkat ini
                            </span>

                        </label>


                        <!-- Forgot Password -->

                        <a
                            href="{{ route('password.request') }}"
                            class="inline-flex min-h-[46px] items-center justify-center rounded-xl px-2 py-2 text-base font-bold text-blue-700 transition hover:bg-blue-50 hover:text-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-200"
                        >
                            Lupa Kata Sandi?
                        </a>

                    </div>



                    <!-- =================================================
                         LOGIN BUTTON
                    ================================================== -->

                    <button
                        type="submit"
                        class="primary-button flex min-h-[56px] w-full items-center justify-center gap-3 rounded-2xl bg-[#155eef] px-5 py-4 text-base font-extrabold text-white shadow-lg shadow-blue-200 transition hover:bg-[#1048c7] hover:shadow-xl active:scale-[0.99]"
                    >

                        <span>
                            Masuk ke Akun
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
                     REGISTER
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
                        Belum memiliki akun?
                    </p>


                    <a
                        href="{{ route('register') }}"
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
                                d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2m6-6a4 4 0 100-8 4 4 0 000 8zm10 0v-6m3 3h-6"
                            />

                        </svg>

                        Daftar Akun Pemohon

                    </a>

                </div>



                <!-- =================================================
                     BACK TO HOME
                ================================================== -->

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

                        <svg
                            class="h-6 w-6"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                        >

                            <circle
                                cx="12"
                                cy="12"
                                r="9"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 8v8m-4-4h8"
                            />

                        </svg>

                    </div>


                    <div>

                        <h2
                            id="accessibility-title"
                            class="text-base font-bold text-[#172b4d]"
                        >
                            Fitur Aksesibilitas
                        </h2>

                        <p class="text-sm text-slate-500">
                            Pilih pengaturan sesuai kebutuhan Anda.
                        </p>

                    </div>

                </div>



                <div class="grid gap-3 sm:grid-cols-3">

                    <!-- Keyboard -->

                    <div class="rounded-xl bg-slate-50 p-4 text-center">

                        <div
                            class="mb-2 text-xl"
                            aria-hidden="true"
                        >
                            ⌨️
                        </div>

                        <p class="text-xs font-semibold leading-5 text-slate-600">
                            Navigasi dengan keyboard
                        </p>

                    </div>


                    <!-- Vision -->

                    <div class="rounded-xl bg-slate-50 p-4 text-center">

                        <div
                            class="mb-2 text-xl"
                            aria-hidden="true"
                        >
                            👁️
                        </div>

                        <p class="text-xs font-semibold leading-5 text-slate-600">
                            Teks dan kontras mudah dibaca
                        </p>

                    </div>


                    <!-- Screen reader -->

                    <div class="rounded-xl bg-slate-50 p-4 text-center">

                        <div
                            class="mb-2 text-xl"
                            aria-hidden="true"
                        >
                            🔊
                        </div>

                        <p class="text-xs font-semibold leading-5 text-slate-600">
                            Mendukung pembaca layar
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

    const passwordInput =
        document.getElementById('password');

    const togglePassword =
        document.getElementById('togglePassword');

    const eyeOpen =
        document.getElementById('eyeOpen');

    const eyeClosed =
        document.getElementById('eyeClosed');


    if (
        passwordInput &&
        togglePassword &&
        eyeOpen &&
        eyeClosed
    ) {

        togglePassword.addEventListener('click', function () {

            const isHidden =
                passwordInput.type === 'password';


            if (isHidden) {

                passwordInput.type = 'text';

                togglePassword.setAttribute(
                    'aria-label',
                    'Sembunyikan kata sandi'
                );

                togglePassword.setAttribute(
                    'title',
                    'Sembunyikan kata sandi'
                );

                togglePassword.setAttribute(
                    'aria-pressed',
                    'true'
                );

                eyeOpen.classList.add('hidden');

                eyeClosed.classList.remove('hidden');

            } else {

                passwordInput.type = 'password';

                togglePassword.setAttribute(
                    'aria-label',
                    'Tampilkan kata sandi'
                );

                togglePassword.setAttribute(
                    'title',
                    'Tampilkan kata sandi'
                );

                togglePassword.setAttribute(
                    'aria-pressed',
                    'false'
                );

                eyeOpen.classList.remove('hidden');

                eyeClosed.classList.add('hidden');

            }

        });

    }



    /* ========================================================
       FONT SIZE ACCESSIBILITY

       0 = normal
       1 = large
       2 = extra large
    ======================================================== */

    const fontSizeButton =
        document.getElementById('fontSizeButton');

    let fontSizeLevel = 0;


    if (fontSizeButton) {

        fontSizeButton.addEventListener('click', function () {

            fontSizeLevel++;


            if (fontSizeLevel > 2) {
                fontSizeLevel = 0;
            }


            /*
             * Hapus ukuran sebelumnya
             */

            document.body.classList.remove(
                'accessibility-large-text',
                'accessibility-extra-large-text'
            );


            /*
             * NORMAL
             */

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


            /*
             * LARGE
             */

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
                    'Kembalikan ukuran teks atau perbesar lagi'
                );

                fontSizeButton.setAttribute(
                    'aria-pressed',
                    'true'
                );

            }


            /*
             * EXTRA LARGE
             */

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
                    'Kembalikan ukuran teks'
                );

                fontSizeButton.setAttribute(
                    'aria-pressed',
                    'true'
                );

            }

        });

    }



    /* ========================================================
       HIGH CONTRAST
    ======================================================== */

    const contrastButton =
        document.getElementById('contrastButton');


    if (contrastButton) {

        contrastButton.addEventListener('click', function () {

            const active =
                document.body.classList.toggle(
                    'high-contrast'
                );


            contrastButton.setAttribute(
                'aria-pressed',
                active ? 'true' : 'false'
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

        });

    }

});

</script>

@endsection