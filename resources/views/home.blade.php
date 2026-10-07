@extends('layouts.app')

@section('title', 'Beranda')

@section('content')


        <a
        href="#main-content"
        class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[100] focus:rounded-lg focus:bg-blue-700 focus:px-4 focus:py-3 focus:text-white focus:shadow-lg">
        Lewati ke konten utama
        </a>

<main id="main-content" class="w-full overflow-hidden bg-[#EEF4FA]">

{{-- =========================================================
     HERO SECTION
========================================================== --}}
<section
    id="beranda" class="relative min-h-screen w-full flex flex-col justify-center overflow-hidden bg-cover bg-center bg-no-repeat pt-32 pb-16"
    style="background-image: linear-gradient(
        180deg,
        rgba(5, 23, 46, 0.25) 0%,   /* Lebih terang di bagian atas header */
        rgba(10, 45, 87, 0.75) 40%,
        rgba(5, 23, 46, 0.88) 100%
    ), url({{ asset('assets/bpom.jpg') }});"
>
    {{-- Decorative Overlay (Diubah agar atas tidak hitam/gelap) --}}
    <div
        class="absolute inset-0 bg-gradient-to-b from-white/10 via-transparent to-[#051c37]/60 pointer-events-none"
        aria-hidden="true"
    ></div>

    <div
        class="absolute w-[350px] h-[350px] md:w-[600px] md:h-[600px] -right-[100px] -top-[100px] md:-right-[180px] md:-top-[180px] rounded-full bg-blue-500/10 blur-3xl pointer-events-none"
        aria-hidden="true"
    ></div>

    <div
        class="absolute w-[250px] h-[250px] md:w-[450px] md:h-[450px] -right-[50px] -top-[50px] md:-right-[120px] md:-top-[120px] rounded-full border border-white/10 shadow-[0_0_0_50px_rgba(255,255,255,0.02)] pointer-events-none"
        aria-hidden="true"
    ></div>

    <div class="relative z-10 max-w-[1160px] mx-auto px-4 md:px-5">

        {{-- =================================================
             HERO TITLE - CENTER
        ================================================== --}}
        <div class="mx-auto max-w-[850px] text-center">

            <h1 class="m-0 mb-5 text-4xl sm:text-5xl md:text-[58px] leading-[1.08] tracking-tight font-black text-white drop-shadow-md">
                Layanan BPOM Palembang
                <br />
                <span class=" text-white bg-clip-text text-transparent">
                    SEDOLOR
                </span>
            </h1>

            <p class="mx-auto max-w-[760px] m-0 text-base md:text-lg leading-relaxed text-[#E2EDFF]/95 font-normal drop-shadow-sm">
                Balai Besar POM di Palembang terus berkomitmen meningkatkan
                pelayanan publik dengan memberikan kemudahan bagi masyarakat
                dalam memperoleh informasi, mengajukan layanan, dan memantau
                proses secara online.
            </p>

            {{-- CTA --}}
            <div class="flex flex-wrap items-center justify-center gap-3 mt-8">

                <a
                    href="{{ route('login') }}"
                    class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-white/10 hover:bg-white/20 border border-white/20 text-white font-semibold text-sm backdrop-blur-md hover:scale-[1.02] active:scale-[0.98] transition-all duration-200"
                >
                    <span>Masuk Akun</span>

                    <svg
                        class="w-4 h-4 stroke-current fill-none stroke-2"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                        ></path>
                    </svg>
                </a>

                <a
                    href="{{ route('register') }}"
                    class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-gradient-to-r from-[#155EEF] to-[#004EEB] text-white font-bold text-sm shadow-lg shadow-blue-600/30 hover:shadow-blue-600/50 hover:scale-[1.02] active:scale-[0.98] transition-all duration-200"
                >
                    <span>Daftar Akun Baru</span>
                </a>

            </div>
        </div>
    </div>
</section>

{{-- =================================================
             TENTANG KAMI
        ================================================== --}}
<section id="tentang-kami" class="relative z-10 w-full bg-white pt-20 pb-16 md:pt-28 md:pb-24">
    <div class="mx-auto max-w-[1160px] px-4 md:px-6">
        <div class="grid grid-cols-1 items-center gap-10 md:grid-cols-12 md:gap-12">
            
            {{-- Kolom Kiri: Teks & Tombol --}}
            <div class="md:col-span-7">
                <h2 class="m-0 text-3xl font-extrabold text-slate-800 md:text-4xl tracking-tight">
                    Tentang Kami
                </h2>

                <p class="mt-4 text-base leading-relaxed text-slate-600 md:text-lg">
                    Balai Besar POM di Palembang berkomitmen untuk melindungi masyarakat Sumatera Selatan melalui pengawasan Obat dan Makanan yang teruji, terpadu, dan terpercaya. Kami senantiasa meningkatkan mutu pelayanan publik melalui berbagai inovasi layanan digital untuk mendukung kemudahan berusaha serta keamanan konsumsi masyarakat.
                </p>

                <div class="mt-3">
                    <a
                        href="https://palembang.pom.go.id/"
                        class="inline-flex items-center justify-center rounded-md border-2  border-[#ffffff] bg-[#155EEF] px-6 py-2.5 text-sm font-semibold text-white shadow-md transition-all duration-200 hover:bg-[#122b52] hover:border-[#122b52] active:scale-95"
                    >
                        Selengkapnya
                    </a>
                </div>
            </div>

            {{-- Kolom Kanan: Gambar Gedung --}}
            <div class="md:col-span-5">
                <div class="overflow-hidden rounded-xl shadow-lg border border-slate-100">
                    <img
                        src="{{ asset('assets/bpom.jpg') }}"
                        alt="Gedung Balai Besar POM di Palembang"
                        class="h-[320px] w-full object-cover transition-transform duration-300 hover:scale-105"
                    />
                </div>
            </div>

        </div>
    </div>
</section>

<section>

{{-- =================================================
            LAYANAN CEPAT - KOTAK BIRU #155EEF
================================================== --}}
<section id="layanan" class="relative py-16 md:py-20 px-4">

    {{-- Main Container / Kotak Biru --}}
    <div class="relative max-w-[850px] mx-auto bg-gradient-to-br from-[#155EEF] via-blue-600 to-[#0F47B8] rounded-3xl p-6 sm:p-8 md:p-10 shadow-2xl shadow-blue-950/20 overflow-hidden text-center text-white">

        {{-- Decorative Glow & Pattern Accent --}}
        <div 
            class="absolute -right-10 -top-10 w-48 h-48 rounded-full bg-white/10 blur-2xl pointer-events-none" 
            aria-hidden="true"
        ></div>
        <div 
            class="absolute -left-10 -bottom-10 w-44 h-44 rounded-full bg-sky-400/20 blur-2xl pointer-events-none" 
            aria-hidden="true"
        ></div>

        <div class="relative z-10 max-w-xl mx-auto">

            {{-- Header Title --}}
            <h2 class="m-0 text-white text-2xl sm:text-3xl font-black tracking-tight leading-tight">
                Pendaftaran Layanan BPOM
            </h2>

            {{-- Description --}}
            <p class="mt-2.5 mb-8 text-sm sm:text-base text-blue-100/90 leading-relaxed font-normal">
                Silakan masuk atau buat akun terlebih dahulu untuk mengakses seluruh fasilitas pendaftaran produk, izin edar, dan permohonan informasi resmi.
            </p>

            {{-- Action Button Card --}}
            <a
                href="{{ route('login') }}"
                class="group relative flex items-center justify-between gap-4 p-5 sm:p-6 rounded-2xl bg-white hover:bg-blue-50 text-slate-800 shadow-xl shadow-black/10 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 text-left cursor-pointer overflow-hidden"
            >
                {{-- Left Icon --}}
                <div class="w-12 h-12 sm:w-14 sm:h-14 shrink-0 flex items-center justify-center rounded-xl bg-blue-100/80 text-[#155EEF] group-hover:bg-[#155EEF] group-hover:text-white transition-colors duration-300 shadow-sm">
                    <svg
                        class="w-6 h-6 sm:w-7 sm:h-7 stroke-current fill-none stroke-[2]"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                    >
                        <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                        <polyline points="10 17 15 12 10 7"></polyline>
                        <line x1="15" y1="12" x2="3" y2="12"></line>
                    </svg>
                </div>

                {{-- Card Text --}}
                <div class="grow">
                    <strong class="block text-base sm:text-lg font-extrabold text-slate-900 group-hover:text-[#155EEF] transition-colors leading-snug">
                        Masuk / Daftar Akun Layanan
                    </strong>

                    <span class="text-slate-500 text-xs sm:text-sm font-medium block mt-1">
                        Registrasi produk, izin edar, dan permohonan informasi resmi
                    </span>
                </div>

                {{-- Right Arrow --}}
                <div class="w-9 h-9 sm:w-10 sm:h-10 shrink-0 rounded-full bg-blue-50 group-hover:bg-[#155EEF] flex items-center justify-center text-[#155EEF] group-hover:text-white group-hover:translate-x-1 transition-all duration-300">
                    <svg
                        class="w-5 h-5 stroke-current fill-none stroke-[2.5]"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                    >
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </div>
            </a>

        </div>
    </div>

</section>

{{-- =========================================================
            INFORMASI LAYANAN
    ========================================================== --}}
<section
    id="informasi"
    class="relative pt-8 md:pt-12 pb-[82px] bg-gradient-to-b from-[#E7F1FA] to-[#DCEAF7]"
>

    <div class="max-w-[1160px] mx-auto px-[14px] md:px-5">

        <div class="max-w-[700px] mb-[34px]">

            <h2 class="m-0 mb-[10px] text-[#102A43] text-[31px] font-black leading-tight">
                Informasi Layanan
            </h2>

            <p class="m-0 text-[#5B6B7D] text-[15px] leading-relaxed">
                Ketahui terlebih dahulu jenis layanan publik sesuai dengan kebutuhan informasi atau perizinan Anda.
            </p>

        </div>


        {{-- Alpine wrapper untuk modal --}}
        <div x-data="{ activeModal: null }">

            {{-- =================================================
                SERVICE CARDS
            ================================================== --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

                {{-- =================================================
                    SERVICE CARD 1 - PERMINTAAN INFORMASI
                ================================================== --}}
                <div
                    class="relative flex flex-col min-h-[285px] p-[25px] overflow-hidden bg-white/80 border border-[#ADC3D9]/85 rounded-[18px] shadow-sm backdrop-blur-sm hover:-translate-y-2 hover:bg-white hover:shadow-xl transition-all duration-200 group"
                >

                    {{-- Top Accent --}}
                    <div
                        class="absolute top-0 left-0 w-full h-[4px] bg-[#155EEF] scale-x-25 origin-left group-hover:scale-x-100 transition-transform duration-200"
                    ></div>


                    {{-- Icon --}}
                    <div
                        class="w-[57px] h-[57px] flex items-center justify-center mb-[18px] rounded-[14px] bg-[#E8F0FF] text-[#155EEF] group-hover:-translate-y-1 group-hover:scale-105 transition-transform duration-200"
                    >

                        <svg
                            class="w-[27px] h-[27px] stroke-current fill-none stroke-2"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                        >
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                        </svg>

                    </div>


                    {{-- Title --}}
                    <h3 class="m-0 mb-[8px] text-[#102A43] text-[19px] font-black">
                        Permintaan Informasi
                    </h3>


                    {{-- Description --}}
                    <p class="m-0 text-[#5B6B7D] text-sm leading-relaxed">
                        Informasi mengenai obat, kosmetik, obat tradisional, serta pangan olahan.
                    </p>


                    {{-- Button --}}
                    <button
                        type="button"
                        @click="activeModal = 1"
                        class="inline-flex items-center justify-center gap-[7px] min-h-[46px] mt-auto pt-[18px] text-[#155EEF] text-sm font-black no-underline group-hover:gap-[11px] transition-all duration-200 cursor-pointer text-left"
                    >

                        Selengkapnya

                        <svg
                            class="w-[17px] h-[17px] stroke-current fill-none stroke-2 group-hover:translate-x-1 transition-transform duration-200"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                        >
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>

                    </button>

                </div>


                {{-- =================================================
                    SERVICE CARD 2 - REGISTRASI PRODUK
                ================================================== --}}
                <div
                    class="relative flex flex-col min-h-[285px] p-[25px] overflow-hidden bg-white/80 border border-[#ADC3D9]/85 rounded-[18px] shadow-sm backdrop-blur-sm hover:-translate-y-2 hover:bg-white hover:shadow-xl transition-all duration-200 group"
                >

                    {{-- Top Accent --}}
                    <div
                        class="absolute top-0 left-0 w-full h-[4px] bg-[#087F5B] scale-x-25 origin-left group-hover:scale-x-100 transition-transform duration-200"
                    ></div>


                    {{-- Icon --}}
                    <div
                        class="w-[57px] h-[57px] flex items-center justify-center mb-[18px] rounded-[14px] bg-[#E7F7F1] text-[#087F5B] group-hover:-translate-y-1 group-hover:scale-105 transition-transform duration-200"
                    >

                        <svg
                            class="w-[27px] h-[27px] stroke-current fill-none stroke-2"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                        >
                            <path d="M9 12l2 2 4-4"></path>
                            <path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z"></path>
                        </svg>

                    </div>


                    {{-- Title --}}
                    <h3 class="m-0 mb-[8px] text-[#102A43] text-[19px] font-black">
                        Registrasi Produk
                    </h3>


                    {{-- Description --}}
                    <p class="m-0 text-[#5B6B7D] text-sm leading-relaxed">
                        Layanan pengajuan dan informasi terkait proses registrasi produk sesuai dengan ketentuan BPOM.
                    </p>


                    {{-- Button --}}
                    <button
                        type="button"
                        @click="activeModal = 2"
                        class="inline-flex items-center justify-center gap-[7px] min-h-[46px] mt-auto pt-[18px] text-[#155EEF] text-sm font-black no-underline group-hover:gap-[11px] transition-all duration-200 cursor-pointer text-left"
                    >

                        Selengkapnya

                        <svg
                            class="w-[17px] h-[17px] stroke-current fill-none stroke-2 group-hover:translate-x-1 transition-transform duration-200"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                        >
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>

                    </button>

                </div>


                {{-- =================================================
                    SERVICE CARD 3 - PENGADUAN & KONSULTASI
                ================================================== --}}
                <div
                    class="relative flex flex-col min-h-[285px] p-[25px] overflow-hidden bg-white/80 border border-[#ADC3D9]/85 rounded-[18px] shadow-sm backdrop-blur-sm hover:-translate-y-2 hover:bg-white hover:shadow-xl transition-all duration-200 group"
                >

                    {{-- Top Accent --}}
                    <div
                        class="absolute top-0 left-0 w-full h-[4px] bg-[#A85B00] scale-x-25 origin-left group-hover:scale-x-100 transition-transform duration-200"
                    ></div>


                    {{-- Icon --}}
                    <div
                        class="w-[57px] h-[57px] flex items-center justify-center mb-[18px] rounded-[14px] bg-[#FFF3DF] text-[#A85B00] group-hover:-translate-y-1 group-hover:scale-105 transition-transform duration-200"
                    >

                        <svg
                            class="w-[27px] h-[27px] stroke-current fill-none stroke-2"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                        >
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>

                    </div>


                    {{-- Title --}}
                    <h3 class="m-0 mb-[8px] text-[#102A43] text-[19px] font-black">
                        Pengaduan &amp; Konsultasi
                    </h3>


                    {{-- Description --}}
                    <p class="m-0 text-[#5B6B7D] text-sm leading-relaxed">
                        Sampaikan keluhan, konsultasi, atau verifikasi keabsahan produk kepada tim terkait.
                    </p>


                    {{-- Button --}}
                    <button
                        type="button"
                        @click="activeModal = 3"
                        class="inline-flex items-center justify-center gap-[7px] min-h-[46px] mt-auto pt-[18px] text-[#155EEF] text-sm font-black no-underline group-hover:gap-[11px] transition-all duration-200 cursor-pointer text-left"
                    >

                        Selengkapnya

                        <svg
                            class="w-[17px] h-[17px] stroke-current fill-none stroke-2 group-hover:translate-x-1 transition-transform duration-200"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                        >
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>

                    </button>

                </div>

            </div>


            {{-- =================================================
                MODALS
            ================================================== --}}
            <div
                x-show="activeModal !== null"
                x-cloak
                class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
            >

                {{-- =================================================
                    MODAL 1 - PERMINTAAN INFORMASI
                ================================================== --}}
                <div
                    x-show="activeModal === 1"
                    @click.outside="activeModal = null"
                    class="relative w-full max-w-xl max-h-[90vh] overflow-y-auto bg-white rounded-[24px] p-6 md:p-8 shadow-2xl border border-slate-100"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                >

                    <div class="flex items-center justify-between pb-4 mb-4 border-b border-slate-100">

                        <div class="flex items-center gap-3 min-w-0">

                            <div class="w-10 h-10 shrink-0 flex items-center justify-center rounded-xl bg-[#E8F0FF] text-[#155EEF]">

                                <svg
                                    class="w-5 h-5 stroke-current fill-none stroke-2"
                                    viewBox="0 0 24 24"
                                    aria-hidden="true"
                                >
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                </svg>

                            </div>

                            <h3 class="text-xl font-black text-[#102A43]">
                                Permintaan Informasi
                            </h3>

                        </div>


                        <button
                            type="button"
                            @click="activeModal = null"
                            class="text-slate-400 hover:text-slate-600 p-1 rounded-lg hover:bg-slate-100 transition shrink-0"
                            aria-label="Tutup"
                        >

                            <svg
                                class="w-6 h-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"
                                ></path>
                            </svg>

                        </button>

                    </div>


                    <div class="text-slate-600 text-sm leading-relaxed space-y-3">

                        <p>
                            Layanan informasi bagi masyarakat yang membutuhkan informasi terkait obat, kosmetik, obat tradisional, dan pangan olahan.
                        </p>

                        <ul class="list-disc pl-5 space-y-1 text-slate-700">

                            <li>
                                Informasi terkait keamanan dan ketentuan produk.
                            </li>

                            <li>
                                Informasi mengenai regulasi dan persyaratan produk.
                            </li>

                            <li>
                                Informasi mengenai layanan dan prosedur BPOM.
                            </li>

                        </ul>

                    </div>


                    <div class="mt-6 flex justify-end">

                        <button
                            type="button"
                            @click="activeModal = null"
                            class="px-5 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-sm font-bold transition"
                        >
                            Tutup
                        </button>

                    </div>

                </div>


                {{-- MODAL 2 - REGISTRASI PRODUK --}}
<div
    x-show="activeModal === 2"
    @click.outside="activeModal = null"
    class="relative w-full max-w-xl max-h-[90vh] overflow-y-auto bg-white rounded-[24px] p-6 md:p-8 shadow-2xl border border-slate-100"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0 scale-95"
    x-transition:enter-end="opacity-100 scale-100"
>
    <div class="flex items-center justify-between pb-4 mb-4 border-b border-slate-100">

        <div class="flex items-center gap-3 min-w-0">

            <div class="w-10 h-10 shrink-0 flex items-center justify-center rounded-xl bg-[#E7F7F1] text-[#087F5B]">
                <svg
                    class="w-5 h-5 stroke-current fill-none stroke-2"
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                >
                    <path d="M9 12l2 2 4-4"></path>
                    <path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z"></path>
                </svg>
            </div>

            <h3 class="text-xl font-black text-[#102A43]">
                Registrasi Produk
            </h3>

        </div>

        <button
            type="button"
            @click="activeModal = null"
            class="text-slate-400 hover:text-slate-600 p-1 rounded-lg hover:bg-slate-100 transition shrink-0"
            aria-label="Tutup"
        >
            <svg
                class="w-6 h-6"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M6 18L18 6M6 6l12 12"
                ></path>
            </svg>
        </button>

    </div>

    <div class="text-slate-600 text-sm leading-relaxed space-y-3">

        <p>
            Layanan registrasi produk bagi pelaku usaha yang ingin memperoleh informasi dan mengajukan pendaftaran produk sesuai dengan ketentuan yang berlaku.
        </p>

        <ul class="list-disc pl-5 space-y-1 text-slate-700">
            <li>Informasi persyaratan dan tata cara registrasi produk.</li>
            <li>Informasi mengenai dokumen yang diperlukan dalam proses registrasi.</li>
            <li>Informasi mengenai proses dan tahapan registrasi produk.</li>
            <li>Informasi terkait Nomor Izin Edar (NIE) sesuai ketentuan BPOM.</li>
        </ul>

    </div>

    <div class="mt-6 flex justify-end">

        <button
            type="button"
            @click="activeModal = null"
            class="px-5 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-sm font-bold transition"
        >
            Tutup
        </button>

    </div>
</div>

                {{-- =================================================
                    MODAL 3 - PENGADUAN & KONSULTASI
                ================================================== --}}
                <div
                    x-show="activeModal === 3"
                    @click.outside="activeModal = null"
                    class="relative w-full max-w-xl max-h-[90vh] overflow-y-auto bg-white rounded-[24px] p-6 md:p-8 shadow-2xl border border-slate-100"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                >

                    <div class="flex items-center justify-between pb-4 mb-4 border-b border-slate-100">

                        <div class="flex items-center gap-3 min-w-0">

                            <div class="w-10 h-10 shrink-0 flex items-center justify-center rounded-xl bg-[#FFF3DF] text-[#A85B00]">

                                <svg
                                    class="w-5 h-5 stroke-current fill-none stroke-2"
                                    viewBox="0 0 24 24"
                                    aria-hidden="true"
                                >
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                </svg>

                            </div>

                            <h3 class="text-xl font-black text-[#102A43]">
                                Pengaduan &amp; Konsultasi
                            </h3>

                        </div>


                        <button
                            type="button"
                            @click="activeModal = null"
                            class="text-slate-400 hover:text-slate-600 p-1 rounded-lg hover:bg-slate-100 transition shrink-0"
                            aria-label="Tutup"
                        >

                            <svg
                                class="w-6 h-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"
                                ></path>
                            </svg>

                        </button>

                    </div>


                    <div class="text-slate-600 text-sm leading-relaxed space-y-3">

                        <p>
                            Fasilitas bagi masyarakat untuk menyampaikan keluhan, mendapatkan konsultasi, serta melakukan verifikasi terkait produk obat dan makanan.
                        </p>

                        <ul class="list-disc pl-5 space-y-1 text-slate-700">

                            <li>
                                Konsultasi mengenai regulasi dan informasi produk.
                            </li>

                            <li>
                                Pemeriksaan status keaslian NIE atau nomor registrasi.
                            </li>

                            <li>
                                Pelaporan efek samping obat atau reaksi alergi produk kosmetik.
                            </li>

                        </ul>

                    </div>


                    <div class="mt-6 flex justify-end">

                        <button
                            type="button"
                            @click="activeModal = null"
                            class="px-5 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-sm font-bold transition"
                        >
                            Tutup
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

    {{-- =========================================================
         CTA SECTION
    ========================================================== --}}
    <section
    id="pengaduan" class="relative py-[80px] bg-gradient-to-b from-[#E1EDF7] to-[#D3E4F2]"
    >

        <div class="max-w-[1160px] mx-auto px-[14px] md:px-5">

            <div
                class="relative p-8 md:p-[48px] overflow-hidden rounded-[23px] bg-gradient-to-br from-[#155EEF] to-[#0C46B9] text-white shadow-2xl"
            >

                <div
                    class="absolute w-[350px] h-[350px] -right-[160px] -bottom-[220px] rounded-full border border-white/10 shadow-[0_0_0_35px_rgba(255,255,255,0.025),0_0_0_70px_rgba(255,255,255,0.02)] pointer-events-none"
                    aria-hidden="true"
                ></div>

                <div
                    class="absolute w-[220px] h-[220px] -right-[70px] -top-[90px] rounded-full bg-white/10 pointer-events-none"
                    aria-hidden="true"
                ></div>


                <div class="relative z-10 max-w-[680px]">

                    <h2 class="m-0 mb-[10px] text-[28px] md:text-[31px] font-black text-white">
                        Butuh Bantuan Lebih Lanjut?
                    </h2>

                    <p class="m-0 text-[#E5EEFF] leading-relaxed">
                        Tim Balai Besar POM di Palembang siap membantu pertanyaan dan kendala Anda.
                    </p>


                    <a
                        href="https://ampera-bbpom.vercel.app/"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Hubungi Layanan Pengaduan Balai Besar POM di Palembang"
                        class="inline-flex items-center justify-center gap-[9px] min-h-[52px] px-[21px] py-[13px] mt-[23px] rounded-[11px] text-[15px] font-extrabold bg-white text-[#155EEF] hover:bg-[#F3F7FF] hover:text-[#0B45C4] hover:-translate-y-1 hover:shadow-lg focus:outline-none focus-visible:ring-4 focus-visible:ring-white/50 transition-all duration-200"
                    >
                        Hubungi Layanan Pengaduan
                    </a>

                </div>

            </div>

        </div>

    </section>

</main>

@endsection