@extends(auth()->user()->role === 'admin' ? 'layouts.admin' : 'layouts.logged-in')

@section('title', 'SEDOLOR')

@section('content')
<main id="main-content" class="min-h-screen bg-gradient-to-br from-slate-50 via-slate-100/50 to-blue-50/30 py-10 sm:py-14">
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">

        {{-- Header Breadcrumb / Judul --}}
        <div class="mb-8">
            <div class="flex items-center gap-3">
                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-600/10 text-blue-600 shadow-inner">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
                <div>
                    <h1 class="text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">Profil Pengguna</h1>
                    <p class="mt-0.5 text-sm text-slate-500">
                        Kelola informasi identitas akun dan keamanan kata sandi Anda di Layanan Digital BPOM (SEDOLOR).
                    </p>
                </div>
            </div>
        </div>

        {{-- Alert Notification --}}
        @if (session('success'))
            <div class="mb-6 flex items-center gap-3 rounded-2xl border border-emerald-200 bg-emerald-50/80 p-4 text-sm text-emerald-800 shadow-sm backdrop-blur-sm">
                <svg class="h-5 w-5 shrink-0 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="font-medium">{{ session('success') }}</span>
            </div>
        @endif

        {{-- Summary Card --}}
        <div class="relative mb-8 overflow-hidden rounded-3xl border border-slate-200/80 bg-white p-6 shadow-sm transition-all hover:shadow-md sm:p-8">
            <div class="absolute -right-10 -top-10 h-40 w-40 rounded-full bg-blue-50/55 blur-2xl"></div>
            
            <div class="relative flex flex-col items-center gap-6 text-center sm:flex-row sm:text-left">
                <div class="relative">
                    <div class="flex h-24 w-24 shrink-0 items-center justify-center rounded-3xl bg-gradient-to-br from-blue-600 to-blue-700 text-3xl font-extrabold text-white shadow-lg shadow-blue-500/25">
                        {{ strtoupper(substr($user->name ?? 'U', 0, 1)) }}
                    </div>
                    <span class="absolute bottom-0 right-0 block h-5 w-5 rounded-full border-2 border-white bg-emerald-500 shadow-sm" title="Aktif"></span>
                </div>
                
                <div class="flex-1">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                        <div>
                            <h2 class="text-xl font-bold text-slate-900 sm:text-2xl">
                                {{ $user->name ?? 'Pengguna SEDOLOR' }}
                            </h2>
                            <p class="text-sm font-medium text-slate-500">
                                {{ $user->email ?? 'email@domain.com' }}
                            </p>
                        </div>
                    </div>
                    <div class="mt-4 inline-flex items-center gap-2 rounded-xl border border-blue-100 bg-blue-50/80 px-3 py-1.5 text-xs font-semibold text-blue-700 shadow-sm">
                        <svg class="h-4 w-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        Akun Terverifikasi BPOM
                    </div>
                </div>
            </div>
        </div>

        <div class="space-y-8">

            {{-- Form Edit Profil --}}
            <div class="rounded-3xl border border-slate-200/80 bg-white p-6 shadow-sm transition-all sm:p-8">
                <div class="mb-6 border-b border-slate-100 pb-4">
                    <h3 class="text-lg font-bold text-slate-900">Informasi Pribadi</h3>
                    <p class="text-sm text-slate-500">Perbarui data nama lengkap dan alamat email aktif Anda.</p>
                </div>

                <form action="{{ route('profile.update') }}" method="POST" class="space-y-5">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="name" class="block text-sm font-semibold text-slate-700">Nama Lengkap</label>
                        <div class="relative mt-2">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <input
                                type="text"
                                name="name"
                                id="name"
                                value="{{ old('name', $user->name ?? '') }}"
                                required
                                class="block w-full rounded-2xl border border-slate-300 bg-slate-50/50 py-3 pl-11 pr-4 text-sm text-slate-900 transition focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-4 focus:ring-blue-100"
                            >
                        </div>
                        @error('name')
                            <p class="mt-1.5 text-xs font-medium text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-semibold text-slate-700">Alamat Email</label>
                        <div class="relative mt-2">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <input
                                type="email"
                                name="email"
                                id="email"
                                value="{{ old('email', $user->email ?? '') }}"
                                required
                                class="block w-full rounded-2xl border border-slate-300 bg-slate-50/50 py-3 pl-11 pr-4 text-sm text-slate-900 transition focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-4 focus:ring-blue-100"
                            >
                        </div>
                        @error('email')
                            <p class="mt-1.5 text-xs font-medium text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex justify-end pt-3">
                        <button
                            type="submit"
                            class="inline-flex items-center gap-2 rounded-2xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-blue-600/20 transition-all hover:bg-blue-700 hover:shadow-blue-600/30 focus:outline-none focus:ring-4 focus:ring-blue-100 active:scale-[0.98]"
                        >
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>

            {{-- Form Ubah Password --}}
            <div class="rounded-3xl border border-slate-200/80 bg-white p-6 shadow-sm transition-all sm:p-8" x-data="{ showPass: false }">
                <div class="mb-6 border-b border-slate-100 pb-4">
                    <h3 class="text-lg font-bold text-slate-900">Ubah Kata Sandi</h3>
                    <p class="text-sm text-slate-500">Pastikan kata sandi Anda kombinasi minimal 8 karakter dengan angka atau simbol.</p>
                </div>

                <form action="{{ route('profile.password.update') }}" method="POST" class="space-y-5">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="current_password" class="block text-sm font-semibold text-slate-700">Kata Sandi Saat Ini</label>
                        <div class="relative mt-2">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <input
                                :type="showPass ? 'text' : 'password'"
                                name="current_password"
                                id="current_password"
                                required
                                class="block w-full rounded-2xl border border-slate-300 bg-slate-50/50 py-3 pl-11 pr-12 text-sm text-slate-900 transition focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-4 focus:ring-blue-100"
                            >
                        </div>
                        @error('current_password')
                            <p class="mt-1.5 text-xs font-medium text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-semibold text-slate-700">Kata Sandi Baru</label>
                        <div class="relative mt-2">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                                </svg>
                            </div>
                            <input
                                :type="showPass ? 'text' : 'password'"
                                name="password"
                                id="password"
                                required
                                class="block w-full rounded-2xl border border-slate-300 bg-slate-50/50 py-3 pl-11 pr-12 text-sm text-slate-900 transition focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-4 focus:ring-blue-100"
                            >
                        </div>
                        @error('password')
                            <p class="mt-1.5 text-xs font-medium text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-semibold text-slate-700">Konfirmasi Kata Sandi Baru</label>
                        <div class="relative mt-2">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <input
                                :type="showPass ? 'text' : 'password'"
                                name="password_confirmation"
                                id="password_confirmation"
                                required
                                class="block w-full rounded-2xl border border-slate-300 bg-slate-50/50 py-3 pl-11 pr-12 text-sm text-slate-900 transition focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-4 focus:ring-blue-100"
                            >
                        </div>
                    </div>

                    {{-- Toggle Show/Hide Password Checkbox --}}
                    <div class="flex items-center gap-2 pt-1">
                        <input type="checkbox" id="show-pass-checkbox" @click="showPass = !showPass" class="h-4 w-4 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                        <label for="show-pass-checkbox" class="cursor-pointer text-xs font-medium text-slate-600 select-none">Tampilkan kata sandi</label>
                    </div>

                    <div class="flex justify-end pt-3">
                        <button
                            type="submit"
                            class="inline-flex items-center gap-2 rounded-2xl bg-slate-900 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-slate-900/20 transition-all hover:bg-slate-800 hover:shadow-slate-900/30 focus:outline-none focus:ring-4 focus:ring-slate-200 active:scale-[0.98]"
                        >
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                            </svg>
                            Perbarui Kata Sandi
                        </button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</main>
@endsection