<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SEDOLOR</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/logosedolor.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- AlpineJS untuk toggle menu mobile & aksesibilitas -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


    <style>
        [x-cloak] {
            display: none !important;
        }

        /* =========================================================
           HIGH CONTRAST
           ========================================================= */
        body.accessibility-high-contrast {
            background-color: #000 !important;
            color: #fff !important;
        }

        body.accessibility-high-contrast main,
        body.accessibility-high-contrast section,
        body.accessibility-high-contrast article,
        body.accessibility-high-contrast nav,
        body.accessibility-high-contrast footer,
        body.accessibility-high-contrast header {
            background-color: #000 !important;
            color: #fff !important;
            border-color: #fff !important;
        }

        body.accessibility-high-contrast p,
        body.accessibility-high-contrast h1,
        body.accessibility-high-contrast h2,
        body.accessibility-high-contrast h3,
        body.accessibility-high-contrast h4,
        body.accessibility-high-contrast span,
        body.accessibility-high-contrast label {
            color: #fff !important;
        }

        body.accessibility-high-contrast a {
            color: #ffff00 !important;
            text-decoration: underline !important;
        }

        body.accessibility-high-contrast button {
            color: #fff !important;
            border-color: #fff !important;
        }

        body.accessibility-high-contrast input,
        body.accessibility-high-contrast textarea,
        body.accessibility-high-contrast select {
            background-color: #000 !important;
            color: #fff !important;
            border-color: #fff !important;
        }

        body.accessibility-high-contrast .bg-white,
        body.accessibility-high-contrast .bg-slate-50,
        body.accessibility-high-contrast .bg-slate-100 {
            background-color: #000 !important;
        }

        body.accessibility-high-contrast .text-slate-900,
        body.accessibility-high-contrast .text-slate-800,
        body.accessibility-high-contrast .text-slate-700,
        body.accessibility-high-contrast .text-slate-600,
        body.accessibility-high-contrast .text-slate-500 {
            color: #fff !important;
        }

        body.accessibility-high-contrast button:focus-visible,
        body.accessibility-high-contrast a:focus-visible {
            outline: 3px solid #ffff00 !important;
            outline-offset: 3px;
        }

        /* =========================================================
           REDUCE MOTION
           ========================================================= */
        body.accessibility-reduce-motion *,
        body.accessibility-reduce-motion *::before,
        body.accessibility-reduce-motion *::after {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.01ms !important;
            scroll-behavior: auto !important;
        }

        /* =========================================================
           UNDERLINE LINKS
           ========================================================= */
        body.accessibility-underline-links a {
            text-decoration: underline !important;
        }
    </style>
</head>

<body
    class="bg-slate-50 text-slate-800 flex min-h-screen flex-col"
    x-data="{ mobileMenuOpen: false, accessibilityPanelOpen: false, mobileAccessibilityOpen: false }"
>
<header class="sticky top-0 z-40 bg-white shadow-sm border-b border-slate-200">

    {{-- 1. TOPBAR ATAS (Switch Bahasa, No. Telepon, Aksesibilitas, & Sosial Media) --}}
    <div class="border-b border-slate-200 bg-slate-50 text-xs">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-9 items-center justify-between gap-4">
                
                {{-- Kiri: Toggle Switch Bahasa & Telepon Kontak --}}
                <div class="flex items-center gap-4 sm:gap-6">
                    
                    {{-- SWITCH TOGGLE BAHASA --}}
                    <div x-data="{ 
                            isEnglish: new URLSearchParams(window.location.search).get('lang') === 'en',
                            toggleLang() {
                                this.isEnglish = !this.isEnglish;
                                const url = new URL(window.location.href);
                                url.searchParams.set('lang', this.isEnglish ? 'en' : 'id');
                                window.location.href = url.toString();
                            }
                         }" 
                         class="flex items-center gap-2.5">
                        
                        <div class="flex items-center gap-1.5 font-bold text-slate-900">
                            {{-- Bendera Indonesia --}}
                            <template x-if="!isEnglish">
                                <div class="flex items-center gap-1.5">
                                    <svg class="h-3.5 w-5 rounded-sm overflow-hidden border border-slate-300 shrink-0" viewBox="0 0 36 24" fill="none" aria-hidden="true">
                                        <rect width="36" height="12" fill="#E11D48"/>
                                        <rect y="12" width="36" height="12" fill="#FFFFFF"/>
                                    </svg>
                                    <span>Indonesia</span>
                                </div>
                            </template>
                            
                            {{-- Bendera Inggris (UK) --}}
                            <template x-if="isEnglish">
                                <div class="flex items-center gap-1.5">
                                    <svg class="h-3.5 w-5 rounded-sm overflow-hidden border border-slate-300 shrink-0" viewBox="0 0 36 24" fill="none" aria-hidden="true">
                                        <path d="M0 0h36v24H0z" fill="#012169"/>
                                        <path d="M0 0l36 24M36 0L0 24" stroke="#fff" stroke-width="4"/>
                                        <path d="M0 0l36 24M36 0L0 24" stroke="#C8102E" stroke-width="2"/>
                                        <path d="M18 0v24M0 12h36" stroke="#fff" stroke-width="6"/>
                                        <path d="M18 0v24M0 12h36" stroke="#C8102E" stroke-width="3.5"/>
                                    </svg>
                                    <span>English</span>
                                </div>
                            </template>
                        </div>

                        <button type="button" 
                                @click="toggleLang()" 
                                class="relative inline-flex h-5 w-9 shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-1"
                                :class="isEnglish ? 'bg-blue-600' : 'bg-slate-300'"
                                role="switch" 
                                :aria-checked="isEnglish"
                                aria-label="Ganti bahasa">
                            <span class="pointer-events-none inline-block h-4 w-4 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                  :class="isEnglish ? 'translate-x-4' : 'translate-x-0'"></span>
                        </button>
                    </div>

                    {{-- No Telepon --}}
                    <div class="hidden sm:flex items-center gap-1.5 text-slate-900 hover:text-blue-700 transition">
                        <svg class="h-3.5 w-3.5 text-slate-900" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <span>+62 821-331-331-79</span>
                    </div>
                </div>

                {{-- Kanan: Aksesibilitas Toggle Desktop & Ikon Sosial Media --}}
                <div class="flex items-center gap-4 text-slate-900">
                    <button type="button" 
                            @click="accessibilityPanelOpen = !accessibilityPanelOpen" 
                            class="hidden md:inline-flex items-center gap-1.5 text-slate-700 hover:text-blue-700 font-medium transition">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                        <span>Aksesibilitas</span>
                    </button>

                    <div class="h-3.5 w-px bg-slate-300 hidden md:block"></div>

                    <div class="flex items-center gap-3.5">
                        <a href="#" class="hover:text-blue-600 transition" aria-label="Twitter / X">
                            <svg class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </a>
                        <a href="#" class="hover:text-pink-600 transition" aria-label="Instagram">
                            <svg class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <a href="#" class="hover:text-red-600 transition" aria-label="YouTube">
                            <svg class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                        <a href="#" class="hover:text-blue-800 transition" aria-label="Facebook">
                            <svg class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- 2. NAVBAR UTAMA --}}
    <nav class="bg-white" aria-label="Navigasi utama">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex min-h-[76px] items-center justify-between gap-4">

                {{-- LOGO SEDOLOR --}}
                <a href="{{ route('home') }}" class="flex min-w-0 items-center gap-3 group focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 rounded-lg p-1" aria-label="SEDOLOR - Beranda">
                    <div class="flex h-11 w-11 shrink-0 items-center justify-center transition-transform group-hover:scale-105">
                        <img src="{{ asset('assets/logosedolor.png') }}?v=2" alt="Logo SEDOLOR" class="h-full w-full object-contain">
                    </div>
                    <div class="min-w-0">
                        <h1 class="text-base font-bold leading-tight text-slate-900 sm:text-lg tracking-tight">
                            SEDOLOR
                        </h1>
                        <p class="max-w-[280px] text-[11px] leading-4 text-slate-600 hidden sm:block">
                            Sistem Pendaftaran Online Layanan Informasi, Laboratorium &amp; Registrasi
                        </p>
                    </div>
                </a>

                {{-- MENU DESKTOP --}}
                <div class="hidden md:flex items-center gap-2">
                    <!-- Beranda -->
                    <a href="{{ route('admin.dashboard-admin') }}"
                       class="rounded-xl px-4 py-2 text-sm font-medium transition {{ request()->routeIs('admin.dashboard-admin') ? 'bg-blue-50 text-blue-700 font-semibold' : 'text-slate-600 hover:bg-blue-50 hover:text-blue-700' }}">
                        Beranda
                    </a>

                    <!-- Profil -->
                    <a href="{{ route('profile') }}"
                       class="rounded-xl px-4 py-2 text-sm font-medium transition {{ request()->routeIs('profile') ? 'bg-blue-50 text-blue-700 font-semibold' : 'text-slate-600 hover:bg-blue-50 hover:text-blue-700' }}">
                        Profil
                    </a>

                    <!-- Logout -->
                    <form action="{{ route('logout') }}" method="POST" class="m-0">
                        @csrf
                        <button type="submit"
                                class="inline-flex items-center gap-2 rounded-xl px-4 py-2 text-sm font-bold text-red-600 transition hover:bg-red-50 hover:text-red-700 focus:outline-none focus:ring-4 focus:ring-red-100">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10 17l5-5-5-5" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H3" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 5v14" />
                            </svg>
                            <span>Keluar</span>
                        </button>
                    </form>
                </div>

                {{-- TOMBOL MOBILE MENU --}}
                <div class="flex items-center md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen"
                            type="button"
                            class="inline-flex items-center justify-center rounded-xl p-2 text-slate-600 hover:bg-slate-100 hover:text-slate-900 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            aria-controls="mobile-menu"
                            :aria-expanded="mobileMenuOpen">
                        <span class="sr-only">Buka menu utama</span>
                        <!-- Hamburger Icon -->
                        <svg x-show="!mobileMenuOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!-- Close Icon -->
                        <svg x-show="mobileMenuOpen" x-cloak class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        {{-- MOBILE NAVIGATION MENU --}}
        <div x-show="mobileMenuOpen"
             x-cloak
             x-transition
             class="border-t border-slate-200 bg-white md:hidden"
             id="mobile-menu">
            <div class="space-y-2 px-6 py-4">

                <!-- Aksesibilitas Mobile -->
                <button type="button"
                        @click="mobileAccessibilityOpen = !mobileAccessibilityOpen"
                        class="flex w-full items-center justify-between rounded-xl px-4 py-3 text-left text-base font-medium text-slate-600 transition hover:bg-blue-50 hover:text-blue-700">
                    <span>Aksesibilitas</span>
                    <svg class="h-5 w-5 transition-transform"
                         :class="mobileAccessibilityOpen ? 'rotate-180' : ''"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Options Aksesibilitas Mobile -->
                <div x-show="mobileAccessibilityOpen"
                     x-cloak
                     x-transition
                     class="rounded-xl border border-slate-200 bg-slate-50 p-3">
                    <div class="grid grid-cols-2 gap-2">
                        <button type="button" data-accessibility-action="increase-text" class="rounded-lg border border-slate-200 bg-white px-3 py-2 text-xs font-semibold text-slate-700">A+ Perbesar</button>
                        <button type="button" data-accessibility-action="decrease-text" class="rounded-lg border border-slate-200 bg-white px-3 py-2 text-xs font-semibold text-slate-700">A− Perkecil</button>
                        <button type="button" data-accessibility-action="high-contrast" class="rounded-lg border border-slate-200 bg-white px-3 py-2 text-xs font-semibold text-slate-700">Kontras</button>
                        <button type="button" data-accessibility-action="grayscale" class="rounded-lg border border-slate-200 bg-white px-3 py-2 text-xs font-semibold text-slate-700">Grayscale</button>
                        <button type="button" data-accessibility-action="reduce-motion" class="rounded-lg border border-slate-200 bg-white px-3 py-2 text-xs font-semibold text-slate-700">Kurangi Animasi</button>
                        <button type="button" data-accessibility-action="underline-links" class="rounded-lg border border-slate-200 bg-white px-3 py-2 text-xs font-semibold text-slate-700 underline">Garis Bawah</button>
                    </div>
                </div>

                <!-- Link Beranda Mobile -->
                <a href="{{ route('dashboard') }}"
                   class="block rounded-xl px-4 py-3 text-base font-medium transition {{ request()->routeIs('dashboard') ? 'bg-blue-50 text-blue-700 font-semibold' : 'text-slate-600 hover:bg-blue-50 hover:text-blue-700' }}">
                    Beranda
                </a>

                <!-- Link Profil Mobile -->
                <a href="{{ route('profile') }}"
                   class="block rounded-xl px-4 py-3 text-base font-medium transition {{ request()->routeIs('profile') ? 'bg-blue-50 text-blue-700 font-semibold' : 'text-slate-600 hover:bg-blue-50 hover:text-blue-700' }}">
                    Profil
                </a>

                <!-- Logout Mobile -->
                <form action="{{ route('logout') }}" method="POST" class="pt-2">
                    @csrf
                    <button type="submit"
                            class="flex w-full items-center justify-center gap-2 rounded-xl bg-red-50 px-4 py-3 text-base font-bold text-red-600 transition hover:bg-red-100 hover:text-red-700 focus:outline-none focus:ring-4 focus:ring-red-100">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 17l5-5-5-5" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H3" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 5v14" />
                        </svg>
                        <span>Keluar</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    {{-- 3. ACCESSIBILITY PANEL (DESKTOP) --}}
    <div id="accessibility-panel"
         x-show="accessibilityPanelOpen"
         x-cloak
         x-transition
         class="border-b border-slate-200 bg-white shadow-md">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="mb-5 flex items-start justify-between gap-4">
                <div>
                    <h2 class="text-lg font-bold text-slate-800">Pengaturan Aksesibilitas</h2>
                    <p class="mt-1 text-sm text-slate-500">Sesuaikan tampilan website sesuai kebutuhan Anda.</p>
                </div>
                <button type="button"
                        @click="accessibilityPanelOpen = false"
                        class="rounded-lg p-2 text-slate-400 transition hover:bg-slate-100 hover:text-slate-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        aria-label="Tutup pengaturan aksesibilitas">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Accessibility Options Grid -->
            <div class="grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-6">
                <!-- Perbesar -->
                <button type="button" data-accessibility-action="increase-text" class="group rounded-xl border border-slate-200 bg-white p-4 text-center transition hover:border-blue-400 hover:bg-blue-50 hover:shadow-sm">
                    <div class="mx-auto flex h-11 w-11 items-center justify-center rounded-lg bg-blue-100 text-lg font-bold text-blue-700 group-hover:bg-blue-200">A+</div>
                    <p class="mt-3 text-sm font-semibold text-slate-700">Perbesar Teks</p>
                    <p class="mt-1 text-xs text-slate-500">Memperbesar tulisan</p>
                </button>

                <!-- Perkecil -->
                <button type="button" data-accessibility-action="decrease-text" class="group rounded-xl border border-slate-200 bg-white p-4 text-center transition hover:border-blue-400 hover:bg-blue-50 hover:shadow-sm">
                    <div class="mx-auto flex h-11 w-11 items-center justify-center rounded-lg bg-blue-100 text-lg font-bold text-blue-700 group-hover:bg-blue-200">A−</div>
                    <p class="mt-3 text-sm font-semibold text-slate-700">Perkecil Teks</p>
                    <p class="mt-1 text-xs text-slate-500">Mengecilkan tulisan</p>
                </button>

                <!-- Kontras -->
                <button type="button" data-accessibility-action="high-contrast" aria-pressed="false" class="group rounded-xl border border-slate-200 bg-white p-4 text-center transition hover:border-blue-400 hover:bg-blue-50 hover:shadow-sm">
                    <div class="mx-auto flex h-11 w-11 items-center justify-center rounded-lg bg-slate-900 text-xl font-bold text-white">◐</div>
                    <p class="mt-3 text-sm font-semibold text-slate-700">Kontras Tinggi</p>
                    <p class="mt-1 text-xs text-slate-500">Meningkatkan kontras</p>
                </button>

                <!-- Grayscale -->
                <button type="button" data-accessibility-action="grayscale" aria-pressed="false" class="group rounded-xl border border-slate-200 bg-white p-4 text-center transition hover:border-blue-400 hover:bg-blue-50 hover:shadow-sm">
                    <div class="mx-auto flex h-11 w-11 items-center justify-center rounded-lg bg-slate-200 text-xl text-slate-700">◑</div>
                    <p class="mt-3 text-sm font-semibold text-slate-700">Grayscale</p>
                    <p class="mt-1 text-xs text-slate-500">Tampilan hitam putih</p>
                </button>

                <!-- Reduce Motion -->
                <button type="button" data-accessibility-action="reduce-motion" aria-pressed="false" class="group rounded-xl border border-slate-200 bg-white p-4 text-center transition hover:border-blue-400 hover:bg-blue-50 hover:shadow-sm">
                    <div class="mx-auto flex h-11 w-11 items-center justify-center rounded-lg bg-slate-100 text-xl text-slate-700">⏸</div>
                    <p class="mt-3 text-sm font-semibold text-slate-700">Kurangi Animasi</p>
                    <p class="mt-1 text-xs text-slate-500">Menonaktifkan efek</p>
                </button>

                <!-- Underline Links -->
                <button type="button" data-accessibility-action="underline-links" aria-pressed="false" class="group rounded-xl border border-slate-200 bg-white p-4 text-center transition hover:border-blue-400 hover:bg-blue-50 hover:shadow-sm">
                    <div class="mx-auto flex h-11 w-11 items-center justify-center rounded-lg bg-slate-100 text-xl font-bold text-slate-700 underline">U</div>
                    <p class="mt-3 text-sm font-semibold text-slate-700">Garis Bawah</p>
                    <p class="mt-1 text-xs text-slate-500">Garis bawah link</p>
                </button>
            </div>
        </div>
    </div>
</header>

<main class="flex-1">
    @yield('content')
</main>

</body>
</html>

    {{-- Footer --}}
    @include('layouts.footer')
    
    {{-- Aksesibilitas --}}
    @include('layouts.aksesibilitas')