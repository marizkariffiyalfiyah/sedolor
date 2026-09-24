@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<a
    href="#main-content"
    class="sr-only focus:not-sr-only focus:fixed focus:top-5 focus:left-5 focus:z-[9999] focus:px-5 focus:py-3 focus:bg-black focus:text-white focus:rounded-lg focus:font-extrabold"
>
    Lompati ke konten utama
</a>

<main id="main-content" class="w-full overflow-hidden bg-[#EEF4FA]">

    {{-- =========================================================
         HERO SECTION
    ========================================================== --}}
    <section
        class="relative min-h-[620px] py-16 md:py-24 overflow-hidden bg-cover bg-center bg-no-repeat"
        style="background-image: linear-gradient(
            105deg,
            rgba(5, 23, 46, 0.94) 0%,
            rgba(10, 45, 87, 0.88) 42%,
            rgba(21, 94, 239, 0.55) 75%,
            rgba(21, 94, 239, 0.25) 100%
        ), url('{{ asset('assets/fotobpom.jpg') }}');"
    >

        {{-- Decorative Background --}}
        <div
            class="absolute inset-0 bg-gradient-to-b from-black/20 via-transparent to-[#051c37]/40 pointer-events-none"
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


        <div class="relative z-10 max-w-[1240px] mx-auto px-4 md:px-6">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">

                {{-- =================================================
                     HERO LEFT
                ================================================== --}}
                <div class="lg:col-span-7">

                    {{-- Status Badge --}}
                    <div
                        class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bg-white/10 border border-white/20 text-white text-xs md:text-sm font-semibold shadow-lg backdrop-blur-md mb-6 hover:bg-white/15 transition-colors"
                    >

                        <span class="relative flex h-2.5 w-2.5">

                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"
                                aria-hidden="true"
                            ></span>

                            <span
                                class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"
                                aria-hidden="true"
                            ></span>

                        </span>

                        <span class="tracking-wide">
                            Layanan Resmi BPOM Palembang
                        </span>

                    </div>


                    {{-- Heading --}}
                    <h1
                        class="m-0 mb-4 text-3xl sm:text-4xl md:text-5xl lg:text-[52px] leading-[1.12] tracking-tight font-black text-white drop-shadow-md"
                    >
                        Layanan Publik Terpadu &amp; Inklusif

                        <br class="hidden sm:inline" />

                        <span class="bg-gradient-to-r from-[#8FC3FF] via-[#B8D9FF] to-white bg-clip-text text-transparent">
                            SEDULUR
                        </span>
                    </h1>


                    {{-- System Title --}}
                    <div
                        class="inline-block mb-4 px-3 py-1 rounded-lg bg-blue-500/20 border border-blue-400/30 backdrop-blur-sm"
                    >

                        <p class="m-0 text-sm md:text-base font-bold text-[#D0E4FF] tracking-wide">
                            Sistem Pendaftaran Online Layanan Informasi, Laboratorium &amp; Registrasi
                        </p>

                    </div>


                    {{-- Description --}}
                    <p
                        class="max-w-[620px] m-0 text-base md:text-lg leading-relaxed text-[#E2EDFF]/90 font-normal drop-shadow-sm mb-8"
                    >
                        Akses kemudahan informasi, sertifikasi, konsultasi, dan pengaduan obat serta makanan dalam satu platform terintegrasi.
                    </p>


                    {{-- CTA Buttons --}}
                    <div class="flex flex-wrap items-center gap-4">

                        <a
                            href="#layanan"
                            class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-gradient-to-r from-[#155EEF] to-[#004EEB] text-white font-bold text-sm shadow-lg shadow-blue-600/30 hover:shadow-blue-600/50 hover:scale-[1.02] active:scale-[0.98] transition-all duration-200"
                        >

                            <span>
                                Jelajahi Layanan
                            </span>

                            <svg
                                class="w-4 h-4 stroke-current fill-none stroke-2"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >
                                <path d="M19 9l-7 7-7-7"></path>
                            </svg>

                        </a>


                        <a
                            href="https://ampera-bbpom.vercel.app/"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-white/10 hover:bg-white/20 border border-white/20 text-white font-semibold text-sm backdrop-blur-md transition-all duration-200"
                        >

                            <span>
                                Pengaduan (AMPERA)
                            </span>

                            <svg
                                class="w-4 h-4 stroke-current fill-none stroke-2"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                <polyline points="15 3 21 3 21 9"></polyline>
                                <line x1="10" y1="14" x2="21" y2="3"></line>
                            </svg>

                        </a>

                    </div>

                </div>


                {{-- =================================================
                     HERO PANEL
                ================================================== --}}
                <div class="lg:col-span-5">

                    <div
                        class="relative bg-white/95 border border-white/90 rounded-3xl p-6 md:p-7 shadow-2xl backdrop-blur-xl overflow-hidden"
                    >

                        <div
                            class="absolute -right-10 -top-10 w-32 h-32 rounded-full bg-blue-100/60 blur-xl pointer-events-none"
                            aria-hidden="true"
                        ></div>


                        <div class="relative z-10">

                            <div class="flex items-center justify-between mb-5 pb-3 border-b border-gray-100">

                                <div>

                                    <span class="block text-[#155EEF] text-xs font-black tracking-wider uppercase mb-0.5">
                                        Akses Cepat
                                    </span>

                                    <h2 class="m-0 text-[#102A43] text-xl md:text-2xl font-black">
                                        Layanan Populer
                                    </h2>

                                </div>


                                <span class="px-2.5 py-1 rounded-md bg-blue-50 text-blue-700 text-xs font-bold">
                                    2 Utama
                                </span>

                            </div>


                            <div class="space-y-3.5">

                                {{-- Quick Access 1 --}}
                                <a
                                    href="{{ route('login') }}"
                                    class="group flex items-center gap-4 p-4 border border-slate-200/80 rounded-2xl bg-slate-50/50 hover:bg-white hover:border-blue-300 hover:shadow-xl hover:shadow-blue-500/5 hover:-translate-y-0.5 transition-all duration-200"
                                >

                                    <div
                                        class="w-12 h-12 shrink-0 flex items-center justify-center rounded-xl bg-blue-50 text-[#155EEF] group-hover:bg-[#155EEF] group-hover:text-white transition-colors duration-200 shadow-sm"
                                    >

                                        <svg
                                            class="w-6 h-6 stroke-current fill-none stroke-2"
                                            viewBox="0 0 24 24"
                                            aria-hidden="true"
                                        >
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                            <polyline points="14 2 14 8 20 8"></polyline>
                                            <line x1="16" y1="13" x2="8" y2="17"></line>
                                            <line x1="16" y1="17" x2="8" y2="17"></line>
                                        </svg>

                                    </div>


                                    <div class="grow">

                                        <strong class="block text-base font-extrabold text-slate-800 group-hover:text-[#155EEF] transition-colors leading-snug">
                                            Pengajuan Sertifikasi
                                        </strong>

                                        <small class="text-slate-500 text-xs font-medium">
                                            Izin edar obat &amp; makanan
                                        </small>

                                    </div>


                                    <div
                                        class="w-8 h-8 rounded-full bg-slate-100 group-hover:bg-blue-50 flex items-center justify-center text-slate-400 group-hover:text-[#155EEF] group-hover:translate-x-1 transition-all duration-200"
                                    >

                                        <svg
                                            class="w-4 h-4 stroke-current fill-none stroke-2"
                                            viewBox="0 0 24 24"
                                            aria-hidden="true"
                                        >
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>

                                    </div>

                                </a>


                                {{-- Quick Access 2 --}}
                                <a
                                    href="{{ route('login') }}"
                                    class="group flex items-center gap-4 p-4 border border-slate-200/80 rounded-2xl bg-slate-50/50 hover:bg-white hover:border-blue-300 hover:shadow-xl hover:shadow-blue-500/5 hover:-translate-y-0.5 transition-all duration-200"
                                >

                                    <div
                                        class="w-12 h-12 shrink-0 flex items-center justify-center rounded-xl bg-blue-50 text-[#155EEF] group-hover:bg-[#155EEF] group-hover:text-white transition-colors duration-200 shadow-sm"
                                    >

                                        <svg
                                            class="w-6 h-6 stroke-current fill-none stroke-2"
                                            viewBox="0 0 24 24"
                                            aria-hidden="true"
                                        >
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                            <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                        </svg>

                                    </div>


                                    <div class="grow">

                                        <strong class="block text-base font-extrabold text-slate-800 group-hover:text-[#155EEF] transition-colors leading-snug">
                                            Konsultasi Layanan
                                        </strong>

                                        <small class="text-slate-500 text-xs font-medium">
                                            Tanya petugas resmi
                                        </small>

                                    </div>


                                    <div
                                        class="w-8 h-8 rounded-full bg-slate-100 group-hover:bg-blue-50 flex items-center justify-center text-slate-400 group-hover:text-[#155EEF] group-hover:translate-x-1 transition-all duration-200"
                                    >

                                        <svg
                                            class="w-4 h-4 stroke-current fill-none stroke-2"
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

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
         SERVICES SECTION
    ========================================================== --}}
    <section
        id="layanan"
        class="relative py-[82px] bg-gradient-to-b from-[#E7F1FA] to-[#DCEAF7]"
    >

        <div class="max-w-[1160px] mx-auto px-[14px] md:px-5">

            <div class="max-w-[700px] mb-[34px]">

                <span class="inline-flex items-center gap-[7px] mb-[10px] px-[12px] py-[7px] rounded-full bg-[#155EEF]/10 text-[#155EEF] text-xs font-black uppercase tracking-wider">
                    Layanan Utama
                </span>

                <h2 class="m-0 mb-[10px] text-[#102A43] text-[31px] font-black leading-tight">
                    Kemudahan Dalam Satu Pintu
                </h2>

                <p class="m-0 text-[#5B6B7D] text-[15px] leading-relaxed">
                    Pilih jenis layanan publik sesuai dengan kebutuhan informasi atau perizinan Anda.
                </p>

            </div>


            {{-- Alpine wrapper untuk modal --}}
            <div x-data="{ activeModal: null }">

                {{-- Cards --}}
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

                    {{-- Service Card 1 --}}
                    <div
                        class="relative flex flex-col min-h-[285px] p-[25px] overflow-hidden bg-white/80 border border-[#ADC3D9]/85 rounded-[18px] shadow-sm backdrop-blur-sm hover:-translate-y-2 hover:bg-white hover:shadow-xl transition-all duration-200 group"
                    >

                        <div
                            class="absolute top-0 left-0 w-full h-[4px] bg-[#155EEF] scale-x-25 origin-left group-hover:scale-x-100 transition-transform duration-200"
                        ></div>


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


                        <h3 class="m-0 mb-[8px] text-[#102A43] text-[19px] font-black">
                            Sertifikasi &amp; Perizinan
                        </h3>


                        <p class="m-0 text-[#5B6B7D] text-sm leading-relaxed">
                            Layanan pendaftaran produk obat, makanan, kosmetik, dan perbekalan kesehatan secara efisien.
                        </p>


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


                    {{-- Service Card 2 --}}
                    <div
                        class="relative flex flex-col min-h-[285px] p-[25px] overflow-hidden bg-white/80 border border-[#ADC3D9]/85 rounded-[18px] shadow-sm backdrop-blur-sm hover:-translate-y-2 hover:bg-white hover:shadow-xl transition-all duration-200 group"
                    >

                        <div
                            class="absolute top-0 left-0 w-full h-[4px] bg-[#087F5B] scale-x-25 origin-left group-hover:scale-x-100 transition-transform duration-200"
                        ></div>


                        <div
                            class="w-[57px] h-[57px] flex items-center justify-center mb-[18px] rounded-[14px] bg-[#E7F7F1] text-[#087F5B] group-hover:-translate-y-1 group-hover:scale-105 transition-transform duration-200"
                        >

                            <svg
                                class="w-[27px] h-[27px] stroke-current fill-none stroke-2"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                            </svg>

                        </div>


                        <h3 class="m-0 mb-[8px] text-[#102A43] text-[19px] font-black">
                            Pengaduan &amp; Informasi
                        </h3>


                        <p class="m-0 text-[#5B6B7D] text-sm leading-relaxed">
                            Sampaikan keluhan, konsultasi, atau verifikasi keabsahan produk langsung kepada tim ahli BPOM.
                        </p>


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


                    {{-- Service Card 3 --}}
                    <div
                        class="relative flex flex-col min-h-[285px] p-[25px] overflow-hidden bg-white/80 border border-[#ADC3D9]/85 rounded-[18px] shadow-sm backdrop-blur-sm hover:-translate-y-2 hover:bg-white hover:shadow-xl transition-all duration-200 group"
                    >

                        <div
                            class="absolute top-0 left-0 w-full h-[4px] bg-[#A85B00] scale-x-25 origin-left group-hover:scale-x-100 transition-transform duration-200"
                        ></div>


                        <div
                            class="w-[57px] h-[57px] flex items-center justify-center mb-[18px] rounded-[14px] bg-[#FFF3DF] text-[#A85B00] group-hover:-translate-y-1 group-hover:scale-105 transition-transform duration-200"
                        >

                            <svg
                                class="w-[27px] h-[27px] stroke-current fill-none stroke-2"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                            </svg>

                        </div>


                        <h3 class="m-0 mb-[8px] text-[#102A43] text-[19px] font-black">
                            Edukasi &amp; Publikasi
                        </h3>


                        <p class="m-0 text-[#5B6B7D] text-sm leading-relaxed">
                            Akses artikel resmi, panduan keamanan pangan, serta regulasi terbaru seputar obat dan makanan.
                        </p>


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

                    {{-- Modal 1 --}}
                    <div
                        x-show="activeModal === 1"
                        @click.outside="activeModal = null"
                        class="relative w-full max-w-xl bg-white rounded-[24px] p-6 md:p-8 shadow-2xl border border-slate-100"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-95"
                        x-transition:enter-end="opacity-100 scale-100"
                    >

                        <div class="flex items-center justify-between pb-4 mb-4 border-b border-slate-100">

                            <div class="flex items-center gap-3">

                                <div class="w-10 h-10 flex items-center justify-center rounded-xl bg-[#E8F0FF] text-[#155EEF]">

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
                                    Sertifikasi &amp; Perizinan
                                </h3>

                            </div>


                            <button
                                type="button"
                                @click="activeModal = null"
                                class="text-slate-400 hover:text-slate-600 p-1 rounded-lg hover:bg-slate-100 transition"
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
                                Layanan ini mencakup alur registrasi izin edar untuk berbagai komoditas produk seperti obat, makanan/minuman (NIE/P-IRT), kosmetik, serta suplemen kesehatan.
                            </p>

                            <ul class="list-disc pl-5 space-y-1 text-slate-700">

                                <li>
                                    Verifikasi kelengkapan berkas teknis &amp; administratif.
                                </li>

                                <li>
                                    Pengujian laboratorium sampel produk secara akurat.
                                </li>

                                <li>
                                    Penerbitan Nomor Izin Edar (NIE) resmi dari BPOM.
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


                    {{-- Modal 2 --}}
                    <div
                        x-show="activeModal === 2"
                        @click.outside="activeModal = null"
                        class="relative w-full max-w-xl bg-white rounded-[24px] p-6 md:p-8 shadow-2xl border border-slate-100"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-95"
                        x-transition:enter-end="opacity-100 scale-100"
                    >

                        <div class="flex items-center justify-between pb-4 mb-4 border-b border-slate-100">

                            <div class="flex items-center gap-3">

                                <div class="w-10 h-10 flex items-center justify-center rounded-xl bg-[#E7F7F1] text-[#087F5B]">

                                    <svg
                                        class="w-5 h-5 stroke-current fill-none stroke-2"
                                        viewBox="0 0 24 24"
                                        aria-hidden="true"
                                    >
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                    </svg>

                                </div>

                                <h3 class="text-xl font-black text-[#102A43]">
                                    Pengaduan &amp; Informasi
                                </h3>

                            </div>


                            <button
                                type="button"
                                @click="activeModal = null"
                                class="text-slate-400 hover:text-slate-600 p-1 rounded-lg hover:bg-slate-100 transition"
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
                                Fasilitas pusat bantuan bagi masyarakat untuk menyampaikan keluhan terkait produk obat/makanan ilegal atau berbahaya di pasaran.
                            </p>

                            <ul class="list-disc pl-5 space-y-1 text-slate-700">

                                <li>
                                    Konsultasi langsung mengenai regulasi kejelasan produk.
                                </li>

                                <li>
                                    Pemeriksaan status keaslian NIE atau nomor registrasi.
                                </li>

                                <li>
                                    Laporan efek samping obat atau reaksi alergi produk kosmetik.
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


                    {{-- Modal 3 --}}
                    <div
                        x-show="activeModal === 3"
                        @click.outside="activeModal = null"
                        class="relative w-full max-w-xl bg-white rounded-[24px] p-6 md:p-8 shadow-2xl border border-slate-100"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-95"
                        x-transition:enter-end="opacity-100 scale-100"
                    >

                        <div class="flex items-center justify-between pb-4 mb-4 border-b border-slate-100">

                            <div class="flex items-center gap-3">

                                <div class="w-10 h-10 flex items-center justify-center rounded-xl bg-[#FFF3DF] text-[#A85B00]">

                                    <svg
                                        class="w-5 h-5 stroke-current fill-none stroke-2"
                                        viewBox="0 0 24 24"
                                        aria-hidden="true"
                                    >
                                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                    </svg>

                                </div>

                                <h3 class="text-xl font-black text-[#102A43]">
                                    Edukasi &amp; Publikasi
                                </h3>

                            </div>


                            <button
                                type="button"
                                @click="activeModal = null"
                                class="text-slate-400 hover:text-slate-600 p-1 rounded-lg hover:bg-slate-100 transition"
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
                                Pusat literasi publik berisi artikel resmi, majalah BPOM, serta publikasi hukum terkait standar keamanan obat dan makanan.
                            </p>

                            <ul class="list-disc pl-5 space-y-1 text-slate-700">

                                <li>
                                    Panduan Cek KLIK (Kemasan, Label, Izin Edar, Kedaluwarsa).
                                </li>

                                <li>
                                    Unduh regulasi dan Peraturan BPOM terbaru.
                                </li>

                                <li>
                                    Artikel edukasi pencegahan konsumsi bahan kimia berbahaya.
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
         HOW IT WORKS
    ========================================================== --}}
    <section
        id="informasi"
        class="relative py-[82px] bg-gradient-to-b from-[#CFE2F2] to-[#E1EDF7]"
    >

        <div class="max-w-[1160px] mx-auto px-[14px] md:px-5">

            <div class="max-w-[700px] mb-[34px]">

                <span class="inline-flex items-center gap-[7px] mb-[10px] px-[12px] py-[7px] rounded-full bg-[#155EEF]/10 text-[#155EEF] text-xs font-black uppercase tracking-wider">
                    Alur Penggunaan
                </span>

                <h2 class="m-0 mb-[10px] text-[#102A43] text-[31px] font-black leading-tight">
                    Cara Mengakses Layanan
                </h2>

            </div>


            <div class="relative grid grid-cols-1 md:grid-cols-3 gap-[25px]">

                {{-- Step Line --}}
                <div
                    class="hidden md:block absolute top-[46px] left-[14%] right-[14%] h-[2px] bg-gradient-to-r from-[#8CB6DE] via-[#155EEF] to-[#8CB6DE] z-0"
                    aria-hidden="true"
                ></div>


                {{-- Step 1 --}}
                <div
                    class="relative z-10 p-[27px] bg-white/70 border border-[#A6C1D9]/90 rounded-[18px] shadow-sm backdrop-blur-sm hover:-translate-y-[7px] hover:bg-white hover:shadow-xl transition-all duration-200 group"
                >

                    <div
                        class="w-[46px] h-[46px] flex items-center justify-center mb-[19px] rounded-full bg-gradient-to-br from-[#155EEF] to-[#0B45C4] text-white text-sm font-black shadow-md group-hover:scale-110 group-hover:rotate-6 transition-transform duration-200"
                    >
                        1
                    </div>

                    <h3 class="m-0 mb-[8px] text-[#102A43] text-[18px] font-black">
                        Pilih Layanan
                    </h3>

                    <p class="m-0 text-[#5B6B7D] text-sm leading-relaxed">
                        Pilih kategori layanan yang Anda perlukan di menu navigasi utama.
                    </p>

                </div>


                {{-- Step 2 --}}
                <div
                    class="relative z-10 p-[27px] bg-white/70 border border-[#A6C1D9]/90 rounded-[18px] shadow-sm backdrop-blur-sm hover:-translate-y-[7px] hover:bg-white hover:shadow-xl transition-all duration-200 group"
                >

                    <div
                        class="w-[46px] h-[46px] flex items-center justify-center mb-[19px] rounded-full bg-gradient-to-br from-[#155EEF] to-[#0B45C4] text-white text-sm font-black shadow-md group-hover:scale-110 group-hover:rotate-6 transition-transform duration-200"
                    >
                        2
                    </div>

                    <h3 class="m-0 mb-[8px] text-[#102A43] text-[18px] font-black">
                        Isi Formulir
                    </h3>

                    <p class="m-0 text-[#5B6B7D] text-sm leading-relaxed">
                        Lengkapi kelengkapan dokumen atau detail informasi pada formulir online.
                    </p>

                </div>


                {{-- Step 3 --}}
                <div
                    class="relative z-10 p-[27px] bg-white/70 border border-[#A6C1D9]/90 rounded-[18px] shadow-sm backdrop-blur-sm hover:-translate-y-[7px] hover:bg-white hover:shadow-xl transition-all duration-200 group"
                >

                    <div
                        class="w-[46px] h-[46px] flex items-center justify-center mb-[19px] rounded-full bg-gradient-to-br from-[#155EEF] to-[#0B45C4] text-white text-sm font-black shadow-md group-hover:scale-110 group-hover:rotate-6 transition-transform duration-200"
                    >
                        3
                    </div>

                    <h3 class="m-0 mb-[8px] text-[#102A43] text-[18px] font-black">
                        Proses &amp; Verifikasi
                    </h3>

                    <p class="m-0 text-[#5B6B7D] text-sm leading-relaxed">
                        Pantau status berkas Anda secara berkala hingga penyelesaian proses.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
         CTA SECTION
    ========================================================== --}}
    <section
        class="relative py-[80px] bg-gradient-to-b from-[#E1EDF7] to-[#D3E4F2]"
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