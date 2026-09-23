@extends('layouts.app')

@section('title', 'Reset Kata Sandi')

@section('content')
<div class="min-h-screen flex items-center justify-center px-4 py-10 bg-gray-50">

    <div class="w-full max-w-md">

        {{-- Card --}}
        <div class="bg-white rounded-3xl shadow-lg border border-gray-100 p-8 sm:p-9">

            {{-- Header --}}
            <div class="text-center mb-8">

                {{-- Icon Kunci --}}
                <div class="mx-auto mb-5 flex items-center justify-center
                            w-20 h-20 rounded-2xl bg-blue-50 border border-blue-100
                            shadow-sm">

                    <div class="relative flex items-center justify-center
                                w-12 h-12 rounded-xl bg-blue-600 shadow-sm">

                        {{-- Lock --}}
                        <svg
                            class="w-7 h-7 text-white"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M16 10V7a4 4 0 00-8 0v3m-2 0h12a1 1 0 011 1v8a1 1 0 01-1 1H6a1 1 0 01-1-1v-8a1 1 0 011-1zm5 4h.01"
                            />
                        </svg>

                    </div>
                </div>

                <h1 class="text-2xl sm:text-3xl font-bold text-gray-800">
                    Reset Kata Sandi
                </h1>

                <p class="mt-3 text-sm leading-6 text-gray-500 max-w-sm mx-auto">
                    Buat kata sandi baru untuk mengamankan kembali akun Anda.
                </p>

            </div>


            {{-- Error --}}
            @if ($errors->any())
                <div class="mb-6 rounded-xl border border-red-200 bg-red-50 px-4 py-3">

                    <div class="flex gap-3">

                        <svg
                            class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                            />
                        </svg>

                        <div>

                            <p class="text-sm font-medium text-red-700">
                                Periksa kembali data Anda.
                            </p>

                            <ul class="mt-1 text-sm text-red-600 space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>

                        </div>

                    </div>

                </div>
            @endif


            {{-- Form --}}
            <form
                method="POST"
                action="{{ route('password.update') }}"
                class="space-y-5"
            >

                @csrf

                {{-- Token Reset --}}
                <input
                    type="hidden"
                    name="token"
                    value="{{ $token }}"
                >


                {{-- Email --}}
                <div>

                    <label
                        for="email"
                        class="block text-sm font-semibold text-gray-700 mb-2"
                    >
                        Email
                    </label>

                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email', $email) }}"
                        required
                        autofocus
                        autocomplete="email"
                        placeholder="Masukkan email Anda"
                        class="w-full px-4 py-3 rounded-xl
                               border border-gray-200
                               bg-gray-50
                               text-gray-700
                               placeholder-gray-400
                               focus:outline-none
                               focus:ring-2 focus:ring-blue-100
                               focus:border-blue-500
                               transition duration-200"
                    >

                </div>


                {{-- Password Baru --}}
                <div>

                    <label
                        for="password"
                        class="block text-sm font-semibold text-gray-700 mb-2"
                    >
                        Kata Sandi Baru
                    </label>

                    <div class="relative">

                        <input
                            id="password"
                            type="password"
                            name="password"
                            required
                            autocomplete="new-password"
                            placeholder="Masukkan kata sandi baru"
                            class="w-full px-4 py-3 pr-12 rounded-xl
                                   border border-gray-200
                                   bg-gray-50
                                   text-gray-700
                                   placeholder-gray-400
                                   focus:outline-none
                                   focus:ring-2 focus:ring-blue-100
                                   focus:border-blue-500
                                   transition duration-200"
                        >

                        {{-- Toggle Password --}}
                        <button
                            type="button"
                            onclick="togglePassword('password', 'eye-password', 'eye-off-password')"
                            class="absolute right-3 top-1/2 -translate-y-1/2
                                   p-1.5 text-gray-400
                                   hover:text-blue-600
                                   transition duration-200"
                            aria-label="Tampilkan kata sandi"
                        >

                            {{-- Eye --}}
                            <svg
                                id="eye-password"
                                class="w-5 h-5"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                                />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                                />
                            </svg>

                            {{-- Eye Off --}}
                            <svg
                                id="eye-off-password"
                                class="w-5 h-5 hidden"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.956 9.956 0 012.151-3.587M6.228 6.228A9.956 9.956 0 0112 5c4.477 0 8.268 2.943 9.542 7a9.956 9.956 0 01-3.043 4.472M6.228 6.228L3 3m3.228 3.228l10.544 10.544M6.228 6.228L3 3m13.272 13.272L21 21"
                                />
                            </svg>

                        </button>

                    </div>

                    <p class="mt-2 text-xs text-gray-500">
                        Minimal 8 karakter.
                    </p>

                </div>


                {{-- Konfirmasi Password --}}
                <div>

                    <label
                        for="password_confirmation"
                        class="block text-sm font-semibold text-gray-700 mb-2"
                    >
                        Konfirmasi Kata Sandi
                    </label>

                    <div class="relative">

                        <input
                            id="password_confirmation"
                            type="password"
                            name="password_confirmation"
                            required
                            autocomplete="new-password"
                            placeholder="Ulangi kata sandi baru"
                            class="w-full px-4 py-3 pr-12 rounded-xl
                                   border border-gray-200
                                   bg-gray-50
                                   text-gray-700
                                   placeholder-gray-400
                                   focus:outline-none
                                   focus:ring-2 focus:ring-blue-100
                                   focus:border-blue-500
                                   transition duration-200"
                        >

                        {{-- Toggle Password --}}
                        <button
                            type="button"
                            onclick="togglePassword('password_confirmation', 'eye-confirm', 'eye-off-confirm')"
                            class="absolute right-3 top-1/2 -translate-y-1/2
                                   p-1.5 text-gray-400
                                   hover:text-blue-600
                                   transition duration-200"
                            aria-label="Tampilkan konfirmasi kata sandi"
                        >

                            {{-- Eye --}}
                            <svg
                                id="eye-confirm"
                                class="w-5 h-5"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                                />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                                />
                            </svg>

                            {{-- Eye Off --}}
                            <svg
                                id="eye-off-confirm"
                                class="w-5 h-5 hidden"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.956 9.956 0 012.151-3.587M6.228 6.228A9.956 9.956 0 0112 5c4.477 0 8.268 2.943 9.542 7a9.956 9.956 0 01-3.043 4.472M6.228 6.228L3 3m3.228 3.228l10.544 10.544M6.228 6.228L3 3m13.272 13.272L21 21"
                                />
                            </svg>

                        </button>

                    </div>

                </div>


                {{-- Tombol Reset --}}
                <button
                    type="submit"
                    class="w-full flex items-center justify-center gap-2
                           px-4 py-3.5
                           rounded-xl
                           bg-blue-600
                           text-white
                           font-semibold
                           hover:bg-blue-700
                           focus:outline-none
                           focus:ring-2
                           focus:ring-blue-200
                           transition duration-200
                           shadow-sm
                           hover:shadow-md"
                >

                    <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M15 7a2 2 0 10-4 0v1m4 0a2 2 0 014 4v1a4 4 0 01-4 4H9a4 4 0 01-4-4v-1a2 2 0 014-4m6 0H9"
                        />
                    </svg>

                    Ubah Kata Sandi

                </button>

            </form>


            {{-- Back to Login --}}
            <div class="mt-7 text-center">

                <a
                    href="{{ route('login') }}"
                    class="inline-flex items-center gap-2
                           text-sm font-medium
                           text-gray-500
                           hover:text-blue-600
                           transition duration-200"
                >

                    <svg
                        class="w-4 h-4"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18"
                        />
                    </svg>

                    Kembali ke halaman masuk

                </a>

            </div>

        </div>


        {{-- Footer --}}
        <p class="text-center text-xs text-gray-400 mt-6">
            Pastikan kata sandi baru Anda mudah diingat dan tetap aman.
        </p>

    </div>

</div>


{{-- Toggle Password Script --}}
<script>
    function togglePassword(inputId, eyeId, eyeOffId) {
        const input = document.getElementById(inputId);
        const eye = document.getElementById(eyeId);
        const eyeOff = document.getElementById(eyeOffId);

        if (input.type === 'password') {
            input.type = 'text';

            eye.classList.add('hidden');
            eyeOff.classList.remove('hidden');
        } else {
            input.type = 'password';

            eye.classList.remove('hidden');
            eyeOff.classList.add('hidden');
        }
    }
</script>

@endsection