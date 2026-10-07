{{-- =========================================================
     HEADER CONTAINER (FULL CLEAR TRANSPARENT)
     ========================================================= --}}
<header class="absolute top-0 left-0 right-0 z-50 w-full bg-transparent text-white">

    {{-- 1. TOPBAR ATAS (Tanpa Background Hitam / Completely Clear) --}}
    <div class="border-b text-xs py-2 bg-transparent">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            
            {{-- Kiri: Switcher Bahasa & No. Telepon --}}
            <div class="flex items-center gap-4 sm:gap-6">
                <div x-data="{
                        isEnglish: false,
                        init() {
                            this.isEnglish = document.cookie.includes('googtrans=/id/en') || new URLSearchParams(window.location.search).get('lang') === 'en';
                        },
                        switchLanguage(lang) {
                            this.isEnglish = (lang === 'en');
                            document.cookie = 'googtrans=/id/' + lang + '; path=/;';
                            document.cookie = 'googtrans=/id/' + lang + '; domain=' + window.location.hostname + '; path=/;';
                            
                            const select = document.querySelector('.goog-te-combo');
                            if (select) {
                                select.value = lang;
                                select.dispatchEvent(new Event('change'));
                            } else {
                                window.location.reload();
                            }
                        }
                     }" 
                     class="flex items-center gap-2 notranslate" translate="no">
                    
                    {{-- Indikator Bendera --}}
                    <div class="flex items-center gap-1 font-bold text-white [text-shadow:_0_1px_4px_rgba(0,0,0,0.8)]">
                        <template x-if="!isEnglish">
                            <span class="flex items-center gap-1.5">
                                <svg class="h-3.5 w-4 rounded-xs overflow-hidden border border-white/60 shadow" viewBox="0 0 36 24" fill="none">
                                    <rect width="36" height="12" fill="#E11D48"/>
                                    <rect y="12" width="36" height="12" fill="#FFFFFF"/>
                                </svg>
                                <span class="text-xs font-bold">ID</span>
                            </span>
                        </template>
                        <template x-if="isEnglish">
                            <span class="flex items-center gap-1.5">
                                <svg class="h-3.5 w-4 rounded-xs overflow-hidden border border-white/60 shadow" viewBox="0 0 36 24" fill="none">
                                    <path d="M0 0h36v24H0z" fill="#012169"/>
                                    <path d="M0 0l36 24M36 0L0 24" stroke="#fff" stroke-width="4"/>
                                    <path d="M0 0l36 24M36 0L0 24" stroke="#C8102E" stroke-width="2"/>
                                    <path d="M18 0v24M0 12h36" stroke="#fff" stroke-width="6"/>
                                    <path d="M18 0v24M0 12h36" stroke="#C8102E" stroke-width="3.5"/>
                                </svg>
                                <span class="text-xs font-bold">EN</span>
                            </span>
                        </template>
                    </div>

                    {{-- Tombol Toggle Saklar --}}
                    <button type="button" 
                            @click="switchLanguage(isEnglish ? 'id' : 'en')" 
                            class="relative inline-flex h-4 w-8 shrink-0 cursor-pointer rounded-full border border-white/60 transition-colors duration-200 ease-in-out focus:outline-none"
                            :class="isEnglish ? 'bg-blue-600' : 'bg-slate-800/90'"
                            aria-label="Ganti Bahasa">
                        <span class="pointer-events-none inline-block h-3 w-3 transform rounded-full bg-white shadow transition duration-200 ease-in-out"
                              :class="isEnglish ? 'translate-x-4' : 'translate-x-0'"></span>
                    </button>
                    
                    <span class="text-xs font-bold text-white uppercase tracking-wider" x-text="isEnglish ? 'English' : 'INDONESIA'"></span>
                </div>

                {{-- No. Telepon --}}
                <div class="hidden sm:flex items-center gap-1.5 text-white font-bold transition">
                    <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <span class="text-xs tracking-wide">+62-(711)-712222</span>
                </div>
            </div>

            {{-- Kanan: Sosial Media --}}
            <div class="flex items-center gap-4 text-white [text-shadow:_0_1px_4px_rgba(0,0,0,0.8)]">
                <a href="https://x.com/bpompalembang?s=11" class="hover:scale-110 transition" aria-label="Twitter"><svg class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg></a>
                <a href="https://www.instagram.com/bpom.palembang?stkn=eGVncXg2bzhkazhp" class="hover:scale-110 transition" aria-label="Instagram"><svg class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
                <a href="https://youtube.com/@bbpom_palembang?si=GKh_2qa339womLm3" class="hover:scale-110 transition" aria-label="YouTube"><svg class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg></a>
                <a href="https://www.facebook.com/share/1By5XkpSkU/" class="hover:scale-110 transition" aria-label="Facebook"><svg class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a>
            </div>
        </div>
    </div>

    {{-- 2. NAVBAR UTAMA --}}
    <nav aria-label="Navigasi utama">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-20 items-center justify-between gap-4 py-3">

                {{-- BRANDING LOGO --}}
                <a href="{{ route('home') }}" class="flex items-center gap-3.5 group notranslate" translate="no">
                    <div class="flex h-11 w-auto shrink-0 items-center justify-center transition-transform group-hover:scale-105">
                        <img src="{{ asset('assets/bpom.png') }}" 
                             alt="" 
                             role="presentation"
                             class="h-11 w-auto object-contain filter " >
                    </div>

                    <div class="h-7 w-[1px] bg-white/50"></div>

                    <div class="flex items-center gap-2.5">
                        <div class="flex h-20 w-auto shrink-0 items-center justify-center transition-transform group-hover:scale-105">
                            <img src="{{ asset('assets/logosedolor.png') }}?v=2" alt="" role="presentation" class="h-12 w-auto object-contain filter">
                        </div>
                        <div class="min-w-0">
                            <h1 class="text-base font-black tracking-wide leading-none text-white ">
                                SEDOLOR
                            </h1>
                            <p class="text-[10px] text-white tracking-tight leading-tight mt-0.5 ">
                            Sistem Pendaftaran Online Layanan Informasi, <br>
                            Laboratorium &amp; Registrasi
                            </p>
                        </div>
                    </div>
                </a>

                {{-- DESKTOP NAVIGATION MENU WITH ALPINE.JS ACTIVE STATE --}}
                <div x-data="{ activeNav: 'beranda' }" class="hidden md:flex items-center gap-7 text-base text-white">
                    <a href="#beranda" 
                    @click="activeNav = 'beranda'"
                    :class="activeNav === 'beranda' ? 'border-b-2 border-white text-white' : 'text-white/90 hover:text-white hover:border-b-2 hover:border-white/70'"
                    class="py-1 transition-all duration-150">
                        Beranda
                    </a>
                    <a href="#tentang-kami" 
                    @click="activeNav = 'tentang-kami'"
                    :class="activeNav === 'tentang-kami' ? 'border-b-2 border-white text-white' : 'text-white/90 hover:text-white hover:border-b-2 hover:border-white/70'"
                    class="py-1 transition-all duration-150">
                        Tentang Kami
                    </a>
                    <a href="#layanan" 
                    @click="activeNav = 'layanan'"
                    :class="activeNav === 'layanan' ? 'border-b-2 border-white text-white' : 'text-white/90 hover:text-white hover:border-b-2 hover:border-white/70'"
                    class="py-1 transition-all duration-150">
                        Layanan
                    </a>
                    <a href="#informasi" 
                    @click="activeNav = 'informasi'"
                    :class="activeNav === 'informasi' ? 'border-b-2 border-white text-white' : 'text-white/90 hover:text-white hover:border-b-2 hover:border-white/70'"
                    class="py-1 transition-all duration-150">
                        Informasi
                    </a>
                    <a href="#pengaduan" 
                    @click="activeNav = 'pengaduan'"
                    :class="activeNav === 'pengaduan' ? 'border-b-2 border-white text-white' : 'text-white/90 hover:text-white hover:border-b-2 hover:border-white/70'"
                    class="py-1 transition-all duration-150">
                        Pengaduan
                    </a>
                </div>

                {{-- TOMBOL AKSI LOGIN & DAFTAR --}}
                <div class="hidden md:flex items-center gap-3">
                    <a href="{{ route('login') }}" class="rounded-xl border border-white/80 bg-skyblue/20 backdrop-blur-md px-5 py-2 text-xs font-black text-white transition hover:bg-white/30 hover:border-white focus:outline-none [text-shadow:_0_1px_4px_rgba(0,0,0,0.8)] shadow-lg">
                        Masuk
                    </a>
                    <a href="{{ route('register') }}" class="rounded-xl bg-blue-600 px-5 py-2 text-xs font-black text-white shadow-xl transition hover:bg-blue-500 focus:outline-none">
                        Daftar Akun
                    </a>
                </div>

                {{-- MOBILE MENU BUTTON --}}
                <button type="button" 
                        onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" 
                        class="inline-flex items-center justify-center rounded-lg p-2 text-white hover:bg-white/20 md:hidden focus:outline-none [text-shadow:_0_2px_4px_rgba(0,0,0,0.9)]">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
            </div>

            {{-- MOBILE NAVIGATION DROPDOWN --}}
            <div id="mobile-menu" class="hidden border-t border-white/20 py-4 md:hidden bg-slate-900/95 backdrop-blur-md rounded-b-xl px-2">
                <div class="flex flex-col gap-2">
                    <a href="#beranda" class="px-3 py-2 rounded-lg text-sm font-semibold {{ request()->routeIs('home') ? 'bg-white/20 text-white font-bold' : 'text-slate-200 hover:bg-white/10 hover:text-white' }}">Beranda</a>
                    <a href="#tentang-kami" class="px-3 py-2 rounded-lg text-sm font-semibold text-slate-200 hover:bg-white/10 hover:text-white">Tentang Kami</a>
                    <a href="#layanan" class="px-3 py-2 rounded-lg text-sm font-semibold text-slate-200 hover:bg-white/10 hover:text-white">Layanan</a>
                    <a href="#informasi" class="px-3 py-2 rounded-lg text-sm font-semibold text-slate-200 hover:bg-white/10 hover:text-white">Informasi</a>
                    <a href="#pengaduan" class="px-3 py-2 rounded-lg text-sm font-semibold text-slate-200 hover:bg-white/10 hover:text-white">Pengaduan</a>
                    <div class="mt-2 flex flex-col gap-2 pt-3 border-t border-white/10">
                        <a href="{{ route('login') }}" class="rounded-lg border border-white/40 px-4 py-2 text-center text-xs font-bold text-white">Masuk</a>
                        <a href="{{ route('register') }}" class="rounded-lg bg-blue-600 px-4 py-2 text-center text-xs font-bold text-white">Daftar Akun</a>
                    </div>
                </div>
            </div>
        </nav>

    {{-- CONTAINER SCRIPT GOOGLE TRANSLATE (TERSEMBUNYI) --}}
    <div id="google_translate_element" class="hidden"></div>
</header>

{{-- SCRIPT PENERJEMAH --}}
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'id',
            includedLanguages: 'id,en',
            autoDisplay: false
        }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

{{-- STYLESHEET TAMBAHAN UNTUK HILANGKAN BANNER TRANSLATE GOOGLE --}}
<style>
    iframe.goog-te-banner-frame, 
    .goog-te-banner-frame,
    .VIpgJd-yD34zb-O1260d,
    #goog-gt-tt,
    .goog-te-balloon-frame { 
        display: none !important; 
        visibility: hidden !important; 
        height: 0 !important;
    }
    
    body { 
        top: 0px !important; 
        position: static !important; 
    }
    
    .goog-te-gadget { 
        display: none !important; 
    }
</style>