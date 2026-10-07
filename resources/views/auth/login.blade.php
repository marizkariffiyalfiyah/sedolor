@extends('layouts.app')

@section('title', 'Login - SEDOLOR BPOM')

@section('content')

<style>
    /* =========================================================
       SEDOLOR BPOM - LOGIN CUSTOM CSS
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
        .login-heading {
            font-size: 2rem !important;
        }
    }
</style>

<!-- Accessibility Skip Link -->
<a 
    href="#main-content" 
    class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[100] focus:rounded-lg focus:bg-blue-700 focus:px-4 focus:py-3 focus:text-white focus:shadow-lg"
>
    Lewati ke konten utama
</a>

<!-- Main Section Container with Background Image & Overlay -->
<section
    id="beranda" 
    class="relative min-h-screen w-full flex flex-col justify-center items-center overflow-hidden bg-cover bg-center bg-no-repeat pt-28 pb-16 px-4 sm:px-6 lg:px-8"
    style="background-image: linear-gradient(
        180deg,
        rgba(5, 23, 46, 0.40) 0%,
        rgba(10, 45, 87, 0.80) 50%,
        rgba(5, 23, 46, 0.92) 100%
    ), url({{ asset('assets/bpom.jpg') }});"
>
    <!-- Decorative Glowing Background Orbs -->
    <div 
        class="pointer-events-none fixed -right-32 -top-32 h-96 w-96 rounded-full bg-blue-500/20 blur-3xl" 
        aria-hidden="true"
    ></div>
    <div 
        class="pointer-events-none fixed -bottom-40 -left-40 h-[28rem] w-[28rem] rounded-full bg-sky-400/15 blur-3xl" 
        aria-hidden="true"
    ></div>

    <!-- Main Content Wrapper -->
    <main id="main-content" class="relative z-10 w-full max-w-xl mx-auto">
        
        <!-- HEADER / WELCOME SECTION -->
        <header class="mb-8 text-center">
            <div class="mx-auto mb-4 flex h-20 w-20 items-center justify-center overflow-hidden rounded-2xl border-2 border-white/20 bg-white/90 p-3 shadow-lg backdrop-blur-md">
                <img
                    src="{{ asset('assets/logosedolor.png') }}"
                    alt="Logo Sedolor BPOM"
                    class="h-full w-full object-contain"
                >
            </div>

            <h1 id="page-title" class="login-heading text-3xl font-extrabold tracking-tight text-white sm:text-4xl lg:text-5xl drop-shadow-md">
                Selamat Datang
            </h1>

            <p class="mt-3 text-base text-slate-200 sm:text-lg max-w-md mx-auto leading-relaxed">
                Masuk ke akun Anda untuk melanjutkan pendaftaran produk secara online.
            </p>
        </header>

        <!-- LOGIN CARD -->
        <section 
            class="login-card w-full rounded-3xl border border-white/20 bg-white/95 backdrop-blur-xl p-6 shadow-2xl sm:p-8 lg:p-9"
            aria-labelledby="login-form-title"
        >
            <h2 id="login-form-title" class="sr-only">
                Formulir Masuk ke Akun
            </h2>

            <!-- ALERT ERROR -->
            @if ($errors->any())
                <div 
                    class="mb-6 rounded-2xl border border-red-200 bg-red-50/90 p-4"
                    role="alert"
                    aria-live="assertive"
                    tabindex="-1"
                >
                    <div class="flex items-start gap-3">
                        <div class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-xl bg-red-100 text-red-700" aria-hidden="true">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v4m0 4h.01M10.29 3.86l-8.18 14a2 2 0 001.73 3h16.32a2 2 0 001.73-3l-8.18-14a2 2 0 00-3.46 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-extrabold text-red-900">Gagal Masuk</p>
                            <p class="mt-0.5 text-xs leading-5 text-red-800">Periksa kembali email dan kata sandi Anda.</p>
                            <ul class="mt-2 list-disc space-y-1 pl-4 text-xs font-medium text-red-800">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

            <!-- ALERT STATUS SESSION -->
            @if (session('status'))
                <div class="mb-6 rounded-2xl border border-green-200 bg-green-50 p-4" role="alert">
                    <p class="text-sm font-semibold text-green-800">
                        {{ session('status') }}
                    </p>
                </div>
            @endif

            <!-- SECURITY NOTICE -->
            <div class="mb-6 flex items-center gap-3 rounded-2xl border border-blue-100 bg-blue-50/80 p-3.5" role="note">
                <div class="flex h-9 w-9 flex-shrink-0 items-center justify-center rounded-xl bg-blue-100 text-blue-700" aria-hidden="true">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2h12a2 2 0 002-2v-6a2 2 0 00-2-2h-2V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <div>
                    <p class="text-xs font-bold text-blue-900">Akses Akun Aman</p>
                    <p class="text-xs text-blue-800">Gunakan akun terdaftar untuk mengakses layanan SEDOLOR.</p>
                </div>
            </div>

            <!-- LOGIN FORM -->
            <form method="POST" action="{{ route('login.process') }}" class="space-y-5">
                @csrf

                <!-- FIELD EMAIL -->
                <div>
                    <label for="email" class="mb-1.5 block text-sm font-bold text-[#172b4d]">
                        Email <span class="text-red-600" aria-hidden="true">*</span>
                        <span class="sr-only">wajib diisi</span>
                    </label>
                    <div class="relative">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex w-12 items-center justify-center text-blue-700" aria-hidden="true">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
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
                            @error('email') aria-invalid="true" @enderror
                            class="w-full rounded-2xl border border-slate-300 bg-white py-3.5 pl-12 pr-4 text-sm font-medium text-slate-900 placeholder-slate-400 shadow-sm transition hover:border-slate-400 focus:border-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-100"
                        >
                    </div>
                    <p id="email-help" class="mt-1.5 text-xs text-slate-500">
                        Gunakan email yang terdaftar pada akun Anda.
                    </p>
                    @error('email')
                        <p id="email-error" class="mt-1.5 flex items-center gap-1.5 text-xs font-bold text-red-700" role="alert">
                            <span aria-hidden="true">⚠</span>
                            <span>{{ $message }}</span>
                        </p>
                    @enderror
                </div>

                <!-- FIELD PASSWORD -->
                <div>
                    <label for="password" class="mb-1.5 block text-sm font-bold text-[#172b4d]">
                        Kata Sandi <span class="text-red-600" aria-hidden="true">*</span>
                        <span class="sr-only">wajib diisi</span>
                    </label>
                    <div class="relative">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex w-12 items-center justify-center text-blue-700" aria-hidden="true">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2h12a2 2 0 002-2v-6a2 2 0 00-2-2h-2V7a4 4 0 00-8 0v4H6" />
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
                            @error('password') aria-invalid="true" @enderror
                            class="w-full rounded-2xl border border-slate-300 bg-white py-3.5 pl-12 pr-12 text-sm font-medium text-slate-900 placeholder-slate-400 shadow-sm transition hover:border-slate-400 focus:border-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-100"
                        >
                        <!-- Show/Hide Password Toggle -->
                        <button
                            type="button"
                            id="togglePassword"
                            class="absolute right-2 top-1/2 flex h-9 w-9 -translate-y-1/2 items-center justify-center rounded-xl text-slate-500 transition hover:bg-slate-100 hover:text-blue-700 focus:outline-none"
                            aria-label="Tampilkan kata sandi"
                            aria-pressed="false"
                            title="Tampilkan kata sandi"
                        >
                            <svg id="eyeOpen" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <svg id="eyeClosed" class="hidden h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3l18 18M10.584 10.587a2 2 0 002.829 2.828M9.88 5.09A9.77 9.77 0 0112 5c4.478 0 8.268 2.943 9.542 7a10.04 10.04 0 01-4.132 5.411M6.228 6.228C4.531 7.484 3.27 9.176 2.458 12c1.274 4.057 5.064 7 9.542 7 1.61 0 3.13-.377 4.47-1.045" />
                            </svg>
                        </button>
                    </div>
                    @error('password')
                        <p id="password-error" class="mt-1.5 flex items-center gap-1.5 text-xs font-bold text-red-700" role="alert">
                            <span aria-hidden="true">⚠</span>
                            <span>{{ $message }}</span>
                        </p>
                    @enderror
                </div>

                <!-- REMEMBER ME & FORGOT PASSWORD -->
                <div class="flex flex-col gap-2.5 sm:flex-row sm:items-center sm:justify-between pt-1">
                    <label for="remember" class="inline-flex cursor-pointer select-none items-center gap-2.5">
                        <input
                            type="checkbox"
                            name="remember"
                            id="remember"
                            value="1"
                            class="h-5 w-5 cursor-pointer rounded-md border-2 border-slate-300 text-blue-600 focus:ring-2 focus:ring-blue-200"
                        >
                        <span class="text-sm font-semibold text-slate-700">Ingat saya di perangkat ini</span>
                    </label>

                    <a
                        href="{{ route('password.request') }}"
                        class="text-sm font-bold text-blue-700 transition hover:text-blue-900 hover:underline focus:outline-none"
                    >
                        Lupa Kata Sandi?
                    </a>
                </div>

                <!-- SUBMIT BUTTON -->
                <button
                    type="submit"
                    class="primary-button flex min-h-[50px] w-full items-center justify-center gap-2 rounded-2xl bg-[#155eef] px-5 py-3.5 text-base font-extrabold text-white shadow-lg shadow-blue-500/20 transition hover:bg-[#1048c7] hover:shadow-xl active:scale-[0.99] focus:outline-none focus:ring-4 focus:ring-blue-200"
                >
                    <span>Masuk ke Akun</span>
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6l6 6-6 6" />
                    </svg>
                </button>
            </form>

            <!-- DIVIDER -->
            <div class="my-6 flex items-center gap-4">
                <div class="h-px flex-1 bg-slate-200"></div>
                <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider">atau</span>
                <div class="h-px flex-1 bg-slate-200"></div>
            </div>

            <!-- REGISTER OPTION -->
            <div class="text-center">
                <p class="mb-3 text-xs font-medium text-slate-600">
                    Belum memiliki akun?
                </p>
                <a
                    href="{{ route('register') }}"
                    class="secondary-button flex min-h-[50px] w-full items-center justify-center gap-2 rounded-2xl border-2 border-blue-600 bg-white px-5 py-3 text-sm font-extrabold text-blue-700 transition hover:bg-blue-50 focus:outline-none focus:ring-4 focus:ring-blue-100"
                >
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2m6-6a4 4 0 100-8 4 4 0 000 8zm10 0v-6m3 3h-6" />
                    </svg>
                    Daftar Akun Pemohon
                </a>
            </div>
        </section>
    </main>
</section>

<!-- =========================================================
     JAVASCRIPT TOGGLE PASSWORD
========================================================= -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const passwordInput = document.getElementById('password');
    const togglePassword = document.getElementById('togglePassword');
    const eyeOpen = document.getElementById('eyeOpen');
    const eyeClosed = document.getElementById('eyeClosed');

    if (passwordInput && togglePassword && eyeOpen && eyeClosed) {
        togglePassword.addEventListener('click', function () {
            const isHidden = passwordInput.type === 'password';

            passwordInput.type = isHidden ? 'text' : 'password';
            
            togglePassword.setAttribute('aria-label', isHidden ? 'Sembunyikan kata sandi' : 'Tampilkan kata sandi');
            togglePassword.setAttribute('title', isHidden ? 'Sembunyikan kata sandi' : 'Tampilkan kata sandi');
            togglePassword.setAttribute('aria-pressed', isHidden ? 'true' : 'false');

            eyeOpen.classList.toggle('hidden', isHidden);
            eyeClosed.classList.toggle('hidden', !isHidden);
        });
    }
});
</script>

@endsection