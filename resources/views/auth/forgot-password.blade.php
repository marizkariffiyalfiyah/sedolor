@extends('layouts.app')

@section('title', 'Lupa Kata Sandi')

@section('content')

<style>
    /* =========================================================
       ACCESSIBILITY
    ========================================================== */

    .forgot-password-page *:focus-visible {
        outline: 3px solid #f59e0b;
        outline-offset: 3px;
    }

    .accessibility-large-text .forgot-password-page {
        font-size: 1.125rem;
    }

    .accessibility-extra-large-text .forgot-password-page {
        font-size: 1.25rem;
    }

    .accessibility-high-contrast .forgot-password-page {
        filter: contrast(1.2);
    }

    @media (prefers-reduced-motion: reduce) {
        .forgot-password-page * {
            animation: none !important;
            transition: none !important;
        }
    }
</style>


<div class="forgot-password-page min-h-screen bg-slate-50">

    <main class="flex min-h-[calc(100vh-80px)] items-center justify-center px-5 py-12">

        <div class="w-full max-w-lg">

            {{-- =====================================================
                 HEADING
            ====================================================== --}}
            <div class="mb-8 text-center">

                <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">
                    Lupa Kata Sandi?
                </h1>

                <p class="mx-auto mt-3 max-w-md text-base leading-relaxed text-slate-600">
                    Jangan khawatir. Masukkan email yang terdaftar pada akun Anda
                    dan kami akan mengirimkan tautan untuk mengatur ulang kata sandi.
                </p>

            </div>


            {{-- =====================================================
                 CARD
            ====================================================== --}}
            <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-xl shadow-slate-200/50 sm:p-8">

                {{-- Success Message --}}
                @if (session('status'))
                    <div
                        class="mb-6 rounded-2xl border border-green-200 bg-green-50 p-4 text-green-800"
                        role="status"
                        aria-live="polite"
                    >
                        <div class="flex gap-3">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="mt-0.5 h-5 w-5 flex-shrink-0"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                                aria-hidden="true"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M5 13l4 4L19 7"
                                />
                            </svg>

                            <p class="text-sm font-semibold leading-relaxed">
                                {{ session('status') }}
                            </p>

                        </div>
                    </div>
                @endif


                {{-- Error Message --}}
                @if ($errors->any())
                    <div
                        class="mb-6 rounded-2xl border border-red-200 bg-red-50 p-4 text-red-800"
                        role="alert"
                        aria-live="assertive"
                    >
                        <div class="flex gap-3">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="mt-0.5 h-5 w-5 flex-shrink-0"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                                aria-hidden="true"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 9v2m0 4h.01M5.07 19h13.86a2 2 0 001.73-3L13.73 4a2 2 0 00-3.46 0L3.34 16a2 2 0 001.73 3z"
                                />
                            </svg>

                            <div class="space-y-1">
                                @foreach ($errors->all() as $error)
                                    <p class="text-sm font-semibold leading-relaxed">
                                        {{ $error }}
                                    </p>
                                @endforeach
                            </div>

                        </div>
                    </div>
                @endif


                {{-- =================================================
                     FORM
                ================================================== --}}
                <form
                    method="POST"
                    action="{{ route('password.email') }}"
                    class="space-y-6"
                >
                    @csrf

                    {{-- Email --}}
                    <div>

                        <label
                            for="email"
                            class="mb-2 block text-base font-bold text-slate-800"
                        >
                            Alamat Email
                        </label>

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
                            placeholder="Masukkan email Anda"
                            aria-describedby="email-help"
                            class="min-h-[54px] w-full rounded-2xl border border-slate-300 bg-white px-4 text-base text-slate-900 shadow-sm transition placeholder:text-slate-400 hover:border-slate-400 focus:border-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-100 @error('email') border-red-500 focus:border-red-500 focus:ring-red-100 @enderror"
                        >

                        <p
                            id="email-help"
                            class="mt-2 text-sm leading-relaxed text-slate-500"
                        >
                            Gunakan email yang Anda gunakan saat mendaftarkan akun.
                        </p>

                        @error('email')
                            <p
                                class="mt-2 text-sm font-semibold text-red-600"
                                role="alert"
                            >
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    {{-- Submit Button --}}
                    <button
                        type="submit"
                        class="flex min-h-[54px] w-full items-center justify-center gap-2 rounded-2xl bg-blue-700 px-5 py-3 text-base font-extrabold text-white shadow-lg shadow-blue-700/20 transition hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-200 active:scale-[0.99]"
                    >

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3 8l9 6 9-6"
                            />
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                            />
                        </svg>

                        Kirim Tautan Reset

                    </button>

                </form>


                {{-- =================================================
                     BACK TO LOGIN
                ================================================== --}}
                <div class="mt-7 border-t border-slate-100 pt-6 text-center">

                    <a
                        href="{{ route('login') }}"
                        class="inline-flex min-h-[44px] items-center justify-center gap-2 rounded-xl px-4 py-2 text-base font-bold text-blue-700 transition hover:bg-blue-50 hover:text-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-100"
                    >

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18"
                            />
                        </svg>

                        Kembali ke Halaman Login

                    </a>

                </div>

            </div>


            {{-- Accessibility Info --}}
            <div class="mt-6 text-center">

                <p class="text-sm leading-relaxed text-slate-500">
                    Halaman ini mendukung fitur aksesibilitas untuk membantu
                    kenyamanan pengguna dalam mengakses layanan.
                </p>

            </div>

        </div>

    </main>

</div>


{{-- =========================================================
     ACCESSIBILITY SCRIPT
========================================================= --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {

        const fontSizeButton = document.getElementById('fontSizeButton');
        const contrastButton = document.getElementById('contrastButton');

        if (fontSizeButton) {
            fontSizeButton.addEventListener('click', function () {

                const body = document.body;

                const isLarge = body.classList.toggle(
                    'accessibility-large-text'
                );

                if (isLarge) {
                    body.classList.remove(
                        'accessibility-extra-large-text'
                    );
                }

                fontSizeButton.setAttribute(
                    'aria-pressed',
                    isLarge ? 'true' : 'false'
                );

            });
        }


        if (contrastButton) {
            contrastButton.addEventListener('click', function () {

                const body = document.body;

                const isHighContrast = body.classList.toggle(
                    'accessibility-high-contrast'
                );

                contrastButton.setAttribute(
                    'aria-pressed',
                    isHighContrast ? 'true' : 'false'
                );

            });
        }

    });
</script>

@endsection