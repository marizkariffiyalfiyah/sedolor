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
{{-- HERO SECTION --}}
<section class="relative min-h-[620px] py-16 md:py-24 overflow-hidden bg-cover bg-center bg-no-repeat" 
         style="background-image: linear-gradient(105deg, rgba(5, 23, 46, 0.94) 0%, rgba(10, 45, 87, 0.88) 42%, rgba(21, 94, 239, 0.55) 75%, rgba(21, 94, 239, 0.25) 100%), url('{{ asset('assets/fotobpom.jpg') }}');">
    
    {{-- Decorative Background Elements --}}
    <div class="absolute inset-0 bg-gradient-to-b from-black/20 via-transparent to-[#051c37]/40 pointer-events-none"></div>
    <div class="absolute w-[350px] h-[350px] md:w-[600px] md:h-[600px] -right-[100px] -top-[100px] md:-right-[180px] md:-top-[180px] rounded-full bg-blue-500/10 blur-3xl pointer-events-none"></div>
    <div class="absolute w-[250px] h-[250px] md:w-[450px] md:h-[450px] -right-[50px] -top-[50px] md:-right-[120px] md:-top-[120px] rounded-full border border-white/10 shadow-[0_0_0_50px_rgba(255,255,255,0.02)] pointer-events-none"></div>

    <div class="relative z-10 max-w-[1240px] mx-auto px-4 md:px-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
            
            {{-- Hero Left Content --}}
            <div class="lg:col-span-7 animate-[fadeUp_0.7s_ease-out_both]">
                
                {{-- Status Badge --}}
                <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bg-white/10 border border-white/20 text-white text-xs md:text-sm font-semibold shadow-lg backdrop-blur-md mb-6 hover:bg-white/15 transition-colors">
                    <span class="relative flex h-2.5 w-2.5">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                    </span>
                    <span class="tracking-wide">Layanan Resmi BPOM Palembang</span>
                </div>

                {{-- Unified Heading Hierarchy --}}
                <h1 class="m-0 mb-4 text-3xl sm:text-4xl md:text-5xl lg:text-[52px] leading-[1.12] tracking-tight font-black text-white drop-shadow-md">
                    Layanan Publik Terpadu & Inklusif <br class="hidden sm:inline" />
                    <span class="bg-gradient-to-r from-[#8FC3FF] via-[#B8D9FF] to-white bg-clip-text text-transparent">
                        SEDULUR
                    </span>
                </h1>

                {{-- Subheading / System Title --}}
                <div class="inline-block mb-4 px-3 py-1 rounded-lg bg-blue-500/20 border border-blue-400/30 backdrop-blur-sm">
                    <p class="m-0 text-sm md:text-base font-bold text-[#D0E4FF] tracking-wide">
                        Sistem Pendaftaran Online Layanan Informasi, Laboratorium & Registrasi
                    </p>
                </div>

                {{-- Description --}}
                <p class="max-w-[620px] m-0 text-base md:text-lg leading-relaxed text-[#E2EDFF]/90 font-normal drop-shadow-sm mb-8">
                    Akses kemudahan informasi, sertifikasi, konsultasi, dan pengaduan obat serta makanan dalam satu platform terintegrasi.
                </p>

                {{-- Call To Action Quick Buttons --}}
                <div class="flex flex-wrap items-center gap-4">
                    <a href="#layanan" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-gradient-to-r from-[#155EEF] to-[#004EEB] text-white font-bold text-sm shadow-lg shadow-blue-600/30 hover:shadow-blue-600/50 hover:scale-[1.02] active:scale-[0.98] transition-all duration-200">
                        <span>Jelajahi Layanan</span>
                        <svg class="w-4 h-4 stroke-current fill-none stroke-2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"/></svg>
                    </a>
                    <a href="https://ampera-bbpom.vercel.app/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-white/10 hover:bg-white/20 border border-white/20 text-white font-semibold text-sm backdrop-blur-md transition-all duration-200">
                        <span>Pengaduan (AMPERA)</span>
                        <svg class="w-4 h-4 stroke-current fill-none stroke-2" viewBox="0 0 24 24"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                    </a>
                </div>
            </div>

            {{-- Hero Panel / Quick Access --}}
            <div class="lg:col-span-5">
                <div class="relative bg-white/95 border border-white/90 rounded-3xl p-6 md:p-7 shadow-2xl backdrop-blur-xl overflow-hidden animate-[panelIn_0.8s_ease-out_0.15s_both]">
                    
                    {{-- Decorative Card Accent --}}
                    <div class="absolute -right-10 -top-10 w-32 h-32 rounded-full bg-blue-100/60 blur-xl pointer-events-none"></div>

                    <div class="relative z-10">
                        <div class="flex items-center justify-between mb-5 pb-3 border-b border-gray-100">
                            <div>
                                <span class="block text-[#155EEF] text-xs font-black tracking-wider uppercase mb-0.5">Akses Cepat</span>
                                <h2 class="m-0 text-[#102A43] text-xl md:text-2xl font-black">Layanan Populer</h2>
                            </div>
                            <span class="px-2.5 py-1 rounded-md bg-blue-50 text-blue-700 text-xs font-bold">2 Utama</span>
                        </div>

                        <div class="space-y-3.5">
                            {{-- Card 1 --}}
                            <a href="login" class="group flex items-center gap-4 p-4 border border-slate-200/80 rounded-2xl bg-slate-50/50 hover:bg-white hover:border-blue-300 hover:shadow-xl hover:shadow-blue-500/5 hover:-translate-y-0.5 transition-all duration-200">
                                <div class="w-12 h-12 shrink-0 flex items-center justify-center rounded-xl bg-blue-50 text-[#155EEF] group-hover:bg-[#155EEF] group-hover:text-white transition-colors duration-200 shadow-sm">
                                    <svg class="w-6 h-6 stroke-current fill-none stroke-2 stroke-round" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="17"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                                </div>
                                <div class="grow">
                                    <strong class="block text-base font-extrabold text-slate-800 group-hover:text-[#155EEF] transition-colors leading-snug">Pengajuan Sertifikasi</strong>
                                    <small class="text-slate-500 text-xs font-medium">Izin edar obat &amp; makanan</small>
                                </div>
                                <div class="w-8 h-8 rounded-full bg-slate-100 group-hover:bg-blue-50 flex items-center justify-center text-slate-400 group-hover:text-[#155EEF] group-hover:translate-x-1 transition-all duration-200">
                                    <svg class="w-4 h-4 stroke-current fill-none stroke-2 stroke-round" viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                </div>
                            </a>

                            {{-- Card 2 --}}
                            <a href="login" class="group flex items-center gap-4 p-4 border border-slate-200/80 rounded-2xl bg-slate-50/50 hover:bg-white hover:border-blue-300 hover:shadow-xl hover:shadow-blue-500/5 hover:-translate-y-0.5 transition-all duration-200">
                                <div class="w-12 h-12 shrink-0 flex items-center justify-center rounded-xl bg-blue-50 text-[#155EEF] group-hover:bg-[#155EEF] group-hover:text-white transition-colors duration-200 shadow-sm">
                                    <svg class="w-6 h-6 stroke-current fill-none stroke-2 stroke-round" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                                </div>
                                <div class="grow">
                                    <strong class="block text-base font-extrabold text-slate-800 group-hover:text-[#155EEF] transition-colors leading-snug">Konsultasi Layanan</strong>
                                    <small class="text-slate-500 text-xs font-medium">Tanya petugas resmi</small>
                                </div>
                                <div class="w-8 h-8 rounded-full bg-slate-100 group-hover:bg-blue-50 flex items-center justify-center text-slate-400 group-hover:text-[#155EEF] group-hover:translate-x-1 transition-all duration-200">
                                    <svg class="w-4 h-4 stroke-current fill-none stroke-2 stroke-round" viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

<<<<<<< HEAD
        </section>


        {{-- =================================================
             ACCESSIBILITY
             ================================================= --}}

        <section
            class="accessibility-section"
            id="aksesibilitas"
        >

            <div class="sedolor-container">

                <div class="accessibility-box reveal">


                    <div class="accessibility-heading">

                        <div
                            class="accessibility-icon-large"
                            aria-hidden="true"
                        >

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                            >

                                <circle
                                    cx="12"
                                    cy="4"
                                    r="2"
                                ></circle>

                                <path
                                    d="M5 8h14"
                                ></path>

                                <path
                                    d="M12 6v7"
                                ></path>

                                <path
                                    d="M8 21l4-8 4 8"
                                ></path>

                                <path
                                    d="M8 13l-3 4"
                                ></path>

                                <path
                                    d="M16 13l3 4"
                                ></path>

                            </svg>

                        </div>


                        <h2>
                            Aksesibilitas
                        </h2>


                        <p>
                            Sesuaikan tampilan SEDOLOR agar
                            lebih nyaman sesuai kebutuhan Anda.
                        </p>

                    </div>


                    <div class="accessibility-tools">


                        <button
                            type="button"
                            class="accessibility-tool reveal reveal-delay-1"
                            id="fontToggle"
                            aria-pressed="false"
                        >

                            <span
                                class="tool-icon"
                                aria-hidden="true"
                            >

                                <svg
                                    class="icon"
                                    viewBox="0 0 24 24"
                                >

                                    <path
                                        d="M4 19L9 5h2l5 14"
                                    ></path>

                                    <path
                                        d="M6 14h8"
                                    ></path>

                                    <path
                                        d="M17 8h4"
                                    ></path>

                                    <path
                                        d="M19 6v4"
                                    ></path>

                                </svg>

                            </span>


                            <span class="tool-name">
                                Perbesar Teks
                            </span>


                            <span class="tool-desc">
                                Membuat tulisan lebih mudah dibaca.
                            </span>

                        </button>


                        <button
                            type="button"
                            class="accessibility-tool reveal reveal-delay-2"
                            id="contrastToggle"
                            aria-pressed="false"
                        >

                            <span
                                class="tool-icon"
                                aria-hidden="true"
                            >

                                <svg
                                    class="icon"
                                    viewBox="0 0 24 24"
                                >

                                    <circle
                                        cx="12"
                                        cy="12"
                                        r="9"
                                    ></circle>

                                    <path
                                        d="M12 3a9 9 0 0 1 0 18z"
                                    ></path>

                                </svg>

                            </span>


                            <span class="tool-name">
                                Kontras Tinggi
                            </span>


                            <span class="tool-desc">
                                Tingkatkan perbedaan warna.
                            </span>

                        </button>


                        <button
                            type="button"
                            class="accessibility-tool reveal reveal-delay-3"
                            id="readToggle"
                            aria-pressed="false"
                        >

                            <span
                                class="tool-icon"
                                aria-hidden="true"
                            >

                                <svg
                                    class="icon"
                                    viewBox="0 0 24 24"
                                >

                                    <path
                                        d="M4 10v4h4l5 4V6l-5 4H4z"
                                    ></path>

                                    <path
                                        d="M16 9a4 4 0 0 1 0 6"
                                    ></path>

                                    <path
                                        d="M18.5 6.5a8 8 0 0 1 0 11"
                                    ></path>

                                </svg>

                            </span>


                            <span class="tool-name">
                                Baca Halaman
                            </span>


                            <span class="tool-desc">
                                Membacakan isi halaman dengan suara.
                            </span>

                        </button>

                    </div>

                </div>

            </div>

        </section>


        {{-- =================================================
             SERVICES
             ================================================= --}}

        <section
            class="section"
            id="layanan"
        >

            <div class="sedolor-container">


                <div class="section-header reveal">

                    <span class="section-label">
                        Layanan
                    </span>


                    <h2 class="section-title">
                        Layanan BPOM Palembang
                    </h2>


                    <p class="section-description">
                        Pilih layanan yang sesuai dengan kebutuhan
                        Anda. Informasi dibuat sederhana agar
                        mudah dipahami.
                    </p>

                </div>


                <div class="services-grid">


                    <article class="service-card reveal">

                        <div
                            class="service-icon"
                            aria-hidden="true"
                        >

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                            >

                                <rect
                                    x="5"
                                    y="3"
                                    width="14"
                                    height="18"
                                    rx="2"
                                ></rect>

                                <path
                                    d="M9 8h6"
                                ></path>

                                <path
                                    d="M9 12h6"
                                ></path>

                                <path
                                    d="M9 16h4"
                                ></path>

                            </svg>

                        </div>


                        <h3 class="service-title">
                            Pendaftaran Layanan
                        </h3>


                        <p class="service-description">
                            Ajukan permohonan layanan BPOM sesuai
                            dengan kebutuhan Anda melalui SEDOLOR.
                        </p>


                        <a
                            href="{{ route('informasi-produk') }}"
                            class="service-link"
                        >

                            Daftar Layanan

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >

                                <path
                                    d="M5 12h13"
                                ></path>

                                <path
                                    d="M13 6l6 6-6 6"
                                ></path>

                            </svg>

                        </a>

                    </article>


                    <article class="service-card reveal reveal-delay-1">

                        <div
                            class="service-icon"
                            aria-hidden="true"
                        >

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                            >

                                <circle
                                    cx="12"
                                    cy="12"
                                    r="9"
                                ></circle>

                                <path
                                    d="M12 10v6"
                                ></path>

                                <path
                                    d="M12 7h.01"
                                ></path>

                            </svg>

                        </div>


                        <h3 class="service-title">
                            Informasi Layanan
                        </h3>


                        <p class="service-description">
                            Temukan informasi mengenai jenis layanan,
                            persyaratan, dan hal yang perlu disiapkan
                            sebelum datang ke BPOM.
                        </p>


                        <a
                            href="{{ route('informasi-produk') }}"
                            class="service-link"
                        >

                            Lihat informasi

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >

                                <path
                                    d="M5 12h13"
                                ></path>

                                <path
                                    d="M13 6l6 6-6 6"
                                ></path>

                            </svg>

                        </a>

                    </article>


                    <article class="service-card reveal reveal-delay-2">

                        <div
                            class="service-icon"
                            aria-hidden="true"
                        >

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                            >

                                <rect
                                    x="3"
                                    y="5"
                                    width="18"
                                    height="16"
                                    rx="2"
                                ></rect>

                                <path
                                    d="M16 3v4"
                                ></path>

                                <path
                                    d="M8 3v4"
                                ></path>

                                <path
                                    d="M3 10h18"
                                ></path>

                                <path
                                    d="M8 14h.01"
                                ></path>

                                <path
                                    d="M12 14h.01"
                                ></path>

                                <path
                                    d="M16 14h.01"
                                ></path>

                                <path
                                    d="M8 18h.01"
                                ></path>

                                <path
                                    d="M12 18h.01"
                                ></path>

                            </svg>

                        </div>


                        <h3 class="service-title">
                            Jadwal & Antrean
                        </h3>


                        <p class="service-description">
                            Lihat jadwal pertemuan, jam layanan,
                            dan nomor antrean yang Anda dapatkan
                            setelah melakukan pendaftaran.
                        </p>


                        <a
                            href="{{ route('login') }}"
                            class="service-link"
                        >

                            Cek Jadwal & Antrean

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >

                                <path
                                    d="M5 12h13"
                                ></path>

                                <path
                                    d="M13 6l6 6-6 6"
                                ></path>

                            </svg>

                        </a>

                    </article>

                </div>

            </div>

        </section>


        {{-- =================================================
             HOW IT WORKS
             ================================================= --}}

        <section
            class="section section-alt"
            id="cara-kerja"
        >

            <div class="sedolor-container">


                <div class="section-header reveal">

                    <span class="section-label">
                        Cara Menggunakan
                    </span>


                    <h2 class="section-title">
                        Sederhana dalam 3 langkah
                    </h2>


                    <p class="section-description">
                        SEDOLOR dirancang agar masyarakat dapat
                        memperoleh layanan dengan alur yang
                        sederhana dan mudah dipahami.
                    </p>

                </div>


                <div class="steps">


                    <article class="step reveal">

                        <div class="step-number">
                            01
                        </div>


                        <h3 class="step-title">
                            Buat akun & daftar
                        </h3>


                        <p class="step-text">
                            Buat akun terlebih dahulu, kemudian
                            lakukan pendaftaran layanan sesuai
                            dengan kebutuhan Anda.
                        </p>

                    </article>


                    <article class="step reveal reveal-delay-1">

                        <div class="step-number">
                            02
                        </div>


                        <h3 class="step-title">
                            Dapatkan jadwal & antrean
                        </h3>


                        <p class="step-text">
                            Setelah pendaftaran diproses, Anda
                            mendapatkan informasi hari, jam
                            pertemuan, dan nomor antrean melalui
                            WhatsApp.
                        </p>

                    </article>


                    <article class="step reveal reveal-delay-2">

                        <div class="step-number">
                            03
                        </div>


                        <h3 class="step-title">
                            Datang sesuai jadwal
                        </h3>


                        <p class="step-text">
                            Datang ke BPOM Palembang sesuai
                            hari, jam, dan nomor antrean yang
                            telah diberikan.
                        </p>

                    </article>

                </div>

            </div>

        </section>


        {{-- =================================================
             CTA
             ================================================= --}}

        <section class="cta-section">

            <div class="sedolor-container">

                <div class="cta reveal">

                    <div class="cta-content">

                        <h2>
                            Siap menggunakan layanan SEDOLOR?
                        </h2>


                        <p>
                            Masuk ke akun Anda untuk melakukan
                            pendaftaran layanan BPOM Palembang
                            dan memperoleh informasi jadwal serta
                            nomor antrean.
                        </p>


                        <a
                            href="{{ route('login') }}"
                            class="sedolor-btn cta-button"
                        >

                            Masuk ke SEDOLOR

                        </a>

                    </div>

                </div>

            </div>

        </section>

    </main>


    {{-- =====================================================
         FOOTER
         ===================================================== --}}

    <footer class="sedolor-footer">

        <div class="sedolor-container">


            <div class="footer-grid">


                <div class="footer-brand">

                    <div
                        class="footer-brand-mark"
                        style="
                            background: white;
                            padding: 4px;
                        "
                    >

                        <img
                            src="{{ asset('assets/logosedolor.png') }}"
                            alt="Logo SEDOLOR"
                            style="
                                width: 100%;
                                height: 100%;
                                object-fit: contain;
                                border-radius: 6px;
                            "
                        >

                    </div>


                    <div>

                        <strong>
                            SEDOLOR
                        </strong>


                        <p>
                            SEDOLOR merupakan layanan digital
                            yang membantu masyarakat memperoleh
                            informasi dan mengakses layanan BPOM
                            Palembang dengan lebih mudah.
                        </p>

                    </div>

                </div>


                <div>

                    <h3 class="footer-title">
                        Navigasi
                    </h3>


                    <div class="footer-links">

                        <a href="{{ route('home') }}">
                            Beranda
                        </a>


                        <a href="#layanan">
                            Layanan
                        </a>


                        <a href="#cara-kerja">
                            Cara Menggunakan
                        </a>


                        <a href="{{ route('informasi-produk') }}">
                            Informasi
                        </a>


                        <a href="#aksesibilitas">
                            Aksesibilitas
                        </a>

                    </div>

                </div>


                <div>

                    <h3 class="footer-title">
                        Akun
                    </h3>


                    <div class="footer-links">

                        <a href="{{ route('login') }}">
                            Masuk ke SEDOLOR
                        </a>


                        <a href="{{ route('register') }}">
                            Daftar Akun
                        </a>

                    </div>

                </div>

            </div>


            <div class="footer-bottom">

                <span>

                    © {{ date('Y') }} SEDOLOR.
                    Layanan Digital BPOM Palembang.

=======
        </div>
    </div>
</section>
    {{-- SERVICES SECTION --}}
    <section id="layanan" class="relative py-[82px] bg-gradient-to-b from-[#E7F1FA] to-[#DCEAF7]">
        <div class="max-w-[1160px] mx-auto px-[14px] md:px-5">
            <div class="max-w-[700px] mb-[34px]">
                <span class="inline-flex items-center gap-[7px] mb-[10px] px-[12px] py-[7px] rounded-full bg-[#155EEF]/10 text-[#155EEF] text-xs font-black uppercase tracking-wider">
                    Layanan Utama
>>>>>>> 12ded19613921a8d46eb44987fdea92e7d2cb0d5
                </span>
                <h2 class="m-0 mb-[10px] text-[#102A43] text-[31px] font-black leading-tight">Kemudahan Dalam Satu Pintu</h2>
                <p class="m-0 text-[#5B6B7D] text-[15px] leading-relaxed">Pilih jenis layanan publik sesuai dengan kebutuhan informasi atau perizinan Anda.</p>
            </div>

            <!-- Wrapper Utama Alpine.js untuk Cards & Pop-up Modals -->
            <div x-data="{ activeModal: null }">

                <!-- Grid Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                    
                    {{-- Service Card 1 --}}
                    <div class="relative flex flex-col min-h-[285px] p-[25px] overflow-hidden bg-white/80 border border-[#ADC3D9]/85 rounded-[18px] shadow-sm backdrop-blur-sm hover:-translate-y-2 hover:bg-white hover:shadow-xl transition-all duration-200 group">
                        <div class="absolute top-0 left-0 w-full h-[4px] bg-[#155EEF] scale-x-25 origin-left group-hover:scale-x-100 transition-transform duration-200"></div>
                        <div class="w-[57px] h-[57px] flex items-center justify-center mb-[18px] rounded-[14px] bg-[#E8F0FF] text-[#155EEF] group-hover:-translate-y-1 group-hover:scale-105 transition-transform duration-200">
                            <svg class="w-[27px] h-[27px] stroke-current fill-none stroke-2 stroke-round" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline></svg>
                        </div>
                        <h3 class="m-0 mb-[8px] text-[#102A43] text-[19px] font-black">Sertifikasi & Perizinan</h3>
                        <p class="m-0 text-[#5B6B7D] text-sm leading-relaxed">Layanan pendaftaran produk obat, makanan, kosmetik, dan perbekalan kesehatan secara efisien.</p>
                        
                        <!-- Button Trigger Modal 1 -->
                        <button @click="activeModal = 1" class="inline-flex items-center justify-center gap-[7px] min-h-[46px] mt-auto pt-[18px] text-[#155EEF] text-sm font-black no-underline group-hover:gap-[11px] transition-all duration-200 cursor-pointer text-left">
                            Selengkapnya 
                            <svg class="w-[17px] h-[17px] stroke-current fill-none stroke-2 stroke-round group-hover:translate-x-1 transition-transform duration-200" viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </button>
                    </div>

                    {{-- Service Card 2 --}}
                    <div class="relative flex flex-col min-h-[285px] p-[25px] overflow-hidden bg-white/80 border border-[#ADC3D9]/85 rounded-[18px] shadow-sm backdrop-blur-sm hover:-translate-y-2 hover:bg-white hover:shadow-xl transition-all duration-200 group">
                        <div class="absolute top-0 left-0 w-full h-[4px] bg-[#087F5B] scale-x-25 origin-left group-hover:scale-x-100 transition-transform duration-200"></div>
                        <div class="w-[57px] h-[57px] flex items-center justify-center mb-[18px] rounded-[14px] bg-[#E7F7F1] text-[#087F5B] group-hover:-translate-y-1 group-hover:scale-105 transition-transform duration-200">
                            <svg class="w-[27px] h-[27px] stroke-current fill-none stroke-2 stroke-round" viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                        </div>
                        <h3 class="m-0 mb-[8px] text-[#102A43] text-[19px] font-black">Pengaduan & Informasi</h3>
                        <p class="m-0 text-[#5B6B7D] text-sm leading-relaxed">Sampaikan keluhan, konsultasi, atau verifikasi keabsahan produk langsung kepada tim ahli BPOM.</p>
                        
                        <!-- Button Trigger Modal 2 -->
                        <button @click="activeModal = 2" class="inline-flex items-center justify-center gap-[7px] min-h-[46px] mt-auto pt-[18px] text-[#155EEF] text-sm font-black no-underline group-hover:gap-[11px] transition-all duration-200 cursor-pointer text-left">
                            Selengkapnya 
                            <svg class="w-[17px] h-[17px] stroke-current fill-none stroke-2 stroke-round group-hover:translate-x-1 transition-transform duration-200" viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </button>
                    </div>

                    {{-- Service Card 3 --}}
                    <div class="relative flex flex-col min-h-[285px] p-[25px] overflow-hidden bg-white/80 border border-[#ADC3D9]/85 rounded-[18px] shadow-sm backdrop-blur-sm hover:-translate-y-2 hover:bg-white hover:shadow-xl transition-all duration-200 group">
                        <div class="absolute top-0 left-0 w-full h-[4px] bg-[#A85B00] scale-x-25 origin-left group-hover:scale-x-100 transition-transform duration-200"></div>
                        <div class="w-[57px] h-[57px] flex items-center justify-center mb-[18px] rounded-[14px] bg-[#FFF3DF] text-[#A85B00] group-hover:-translate-y-1 group-hover:scale-105 transition-transform duration-200">
                            <svg class="w-[27px] h-[27px] stroke-current fill-none stroke-2 stroke-round" viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                        </div>
                        <h3 class="m-0 mb-[8px] text-[#102A43] text-[19px] font-black">Edukasi & Publikasi</h3>
                        <p class="m-0 text-[#5B6B7D] text-sm leading-relaxed">Akses artikel resmi, panduan keamanan pangan, serta regulasi terbaru seputar obat dan makanan.</p>
                        
                        <!-- Button Trigger Modal 3 -->
                        <button @click="activeModal = 3" class="inline-flex items-center justify-center gap-[7px] min-h-[46px] mt-auto pt-[18px] text-[#155EEF] text-sm font-black no-underline group-hover:gap-[11px] transition-all duration-200 cursor-pointer text-left">
                            Selengkapnya 
                            <svg class="w-[17px] h-[17px] stroke-current fill-none stroke-2 stroke-round group-hover:translate-x-1 transition-transform duration-200" viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </button>
                    </div>

                </div>

                <!-- POP-UP MODALS CONTAINER -->
                <div x-show="activeModal !== null" 
                     x-cloak 
                     class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0"
                     x-transition:enter-end="opacity-100"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100"
                     x-transition:leave-end="opacity-0">

                    <!-- Modal Card 1 -->
                    <div x-show="activeModal === 1" 
                         @click.outside="activeModal = null"
                         class="relative w-full max-w-xl bg-white rounded-[24px] p-6 md:p-8 shadow-2xl border border-slate-100"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 scale-95"
                         x-transition:enter-end="opacity-100 scale-100">
                        <div class="flex items-center justify-between pb-4 mb-4 border-b border-slate-100">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 flex items-center justify-center rounded-xl bg-[#E8F0FF] text-[#155EEF]">
                                    <svg class="w-5 h-5 stroke-current fill-none stroke-2" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline></svg>
                                </div>
                                <h3 class="text-xl font-black text-[#102A43]">Sertifikasi & Perizinan</h3>
                            </div>
                            <button @click="activeModal = null" class="text-slate-400 hover:text-slate-600 p-1 rounded-lg hover:bg-slate-100 transition">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                            </button>
                        </div>
                        <div class="text-slate-600 text-sm leading-relaxed space-y-3">
                            <p>Layanan ini mencakup alur registrasi izin edar untuk berbagai komoditas produk seperti obat, makanan/minuman (NIE/P-IRT), kosmetik, serta suplemen kesehatan.</p>
                            <ul class="list-disc pl-5 space-y-1 text-slate-700">
                                <li>Verifikasi kelengkapan berkas teknis & administratif.</li>
                                <li>Pengujian laboratorium sampel produk secara akurat.</li>
                                <li>Penerbitan Nomor Izin Edar (NIE) resmi dari BPOM.</li>
                            </ul>
                        </div>
                        <div class="mt-6 flex justify-end">
                            <button @click="activeModal = null" class="px-5 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-sm font-bold transition">Tutup</button>
                        </div>
                    </div>

                    <!-- Modal Card 2 -->
                    <div x-show="activeModal === 2" 
                         @click.outside="activeModal = null"
                         class="relative w-full max-w-xl bg-white rounded-[24px] p-6 md:p-8 shadow-2xl border border-slate-100"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 scale-95"
                         x-transition:enter-end="opacity-100 scale-100">
                        <div class="flex items-center justify-between pb-4 mb-4 border-b border-slate-100">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 flex items-center justify-center rounded-xl bg-[#E7F7F1] text-[#087F5B]">
                                    <svg class="w-5 h-5 stroke-current fill-none stroke-2" viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                </div>
                                <h3 class="text-xl font-black text-[#102A43]">Pengaduan & Informasi</h3>
                            </div>
                            <button @click="activeModal = null" class="text-slate-400 hover:text-slate-600 p-1 rounded-lg hover:bg-slate-100 transition">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                            </button>
                        </div>
                        <div class="text-slate-600 text-sm leading-relaxed space-y-3">
                            <p>Fasilitas pusat bantuan bagi masyarakat untuk menyampaikan keluhan terkait produk obat/makanan ilegal atau berbahaya di pasaran.</p>
                            <ul class="list-disc pl-5 space-y-1 text-slate-700">
                                <li>Konsultasi langsung mengenai regulasi kejelasan produk.</li>
                                <li>Pemeriksaan status keaslian NIE atau nomor registrasi.</li>
                                <li>Laporan efek samping obat atau reaksi alergi produk kosmetik.</li>
                            </ul>
                        </div>
                        <div class="mt-6 flex justify-end">
                            <button @click="activeModal = null" class="px-5 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-sm font-bold transition">Tutup</button>
                        </div>
                    </div>

                    <!-- Modal Card 3 -->
                    <div x-show="activeModal === 3" 
                         @click.outside="activeModal = null"
                         class="relative w-full max-w-xl bg-white rounded-[24px] p-6 md:p-8 shadow-2xl border border-slate-100"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 scale-95"
                         x-transition:enter-end="opacity-100 scale-100">
                        <div class="flex items-center justify-between pb-4 mb-4 border-b border-slate-100">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 flex items-center justify-center rounded-xl bg-[#FFF3DF] text-[#A85B00]">
                                    <svg class="w-5 h-5 stroke-current fill-none stroke-2" viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                                </div>
                                <h3 class="text-xl font-black text-[#102A43]">Edukasi & Publikasi</h3>
                            </div>
                            <button @click="activeModal = null" class="text-slate-400 hover:text-slate-600 p-1 rounded-lg hover:bg-slate-100 transition">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                            </button>
                        </div>
                        <div class="text-slate-600 text-sm leading-relaxed space-y-3">
                            <p>Pusat literasi publik berisi artikel resmi, majalah BPOM, serta publikasi hukum terkait standar keamanan obat dan makanan.</p>
                            <ul class="list-disc pl-5 space-y-1 text-slate-700">
                                <li>Panduan Cek KLIK (Kemasan, Label, Izin Edar, Kedaluwarsa).</li>
                                <li>Unduh regulasi dan Peraturan BPOM terbaru.</li>
                                <li>Artikel edukasi pencegahan konsumsi bahan kimia berbahaya.</li>
                            </ul>
                        </div>
                        <div class="mt-6 flex justify-end">
                            <button @click="activeModal = null" class="px-5 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-sm font-bold transition">Tutup</button>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

    {{-- HOW IT WORKS --}}
    <section id="informasi" class="relative py-[82px] bg-gradient-to-b from-[#CFE2F2] to-[#E1EDF7]">
        <div class="max-w-[1160px] mx-auto px-[14px] md:px-5">
            <div class="max-w-[700px] mb-[34px]">
                <span class="inline-flex items-center gap-[7px] mb-[10px] px-[12px] py-[7px] rounded-full bg-[#155EEF]/10 text-[#155EEF] text-xs font-black uppercase tracking-wider">
                    Alur Penggunaan
                </span>
                <h2 class="m-0 mb-[10px] text-[#102A43] text-[31px] font-black leading-tight">Cara Mengakses Layanan</h2>
            </div>

            <div class="relative grid grid-cols-1 md:grid-cols-3 gap-[25px]">
                {{-- Step Line Divider (Desktop) --}}
                <div class="hidden md:block absolute top-[46px] left-[14%] right-[14%] h-[2px] bg-gradient-to-r from-[#8CB6DE] via-[#155EEF] to-[#8CB6DE] z-0"></div>

                {{-- Step 1 --}}
                <div class="relative z-10 p-[27px] bg-white/70 border border-[#A6C1D9]/90 rounded-[18px] shadow-sm backdrop-blur-sm hover:-translate-y-[7px] hover:bg-white hover:shadow-xl transition-all duration-200 group">
                    <div class="w-[46px] h-[46px] flex items-center justify-center mb-[19px] rounded-full bg-gradient-to-br from-[#155EEF] to-[#0B45C4] text-white text-sm font-black shadow-md group-hover:scale-110 group-hover:rotate-6 transition-transform duration-200">1</div>
                    <h3 class="m-0 mb-[8px] text-[#102A43] text-[18px] font-black">Pilih Layanan</h3>
                    <p class="m-0 text-[#5B6B7D] text-sm leading-relaxed">Pilih kategori layanan yang Anda perlukan di menu navigasi utama.</p>
                </div>

                {{-- Step 2 --}}
                <div class="relative z-10 p-[27px] bg-white/70 border border-[#A6C1D9]/90 rounded-[18px] shadow-sm backdrop-blur-sm hover:-translate-y-[7px] hover:bg-white hover:shadow-xl transition-all duration-200 group">
                    <div class="w-[46px] h-[46px] flex items-center justify-center mb-[19px] rounded-full bg-gradient-to-br from-[#155EEF] to-[#0B45C4] text-white text-sm font-black shadow-md group-hover:scale-110 group-hover:rotate-6 transition-transform duration-200">2</div>
                    <h3 class="m-0 mb-[8px] text-[#102A43] text-[18px] font-black">Isi Formulir</h3>
                    <p class="m-0 text-[#5B6B7D] text-sm leading-relaxed">Lengkapi kelengkapan dokumen atau detail informasi pada formulir online.</p>
                </div>

                {{-- Step 3 --}}
                <div class="relative z-10 p-[27px] bg-white/70 border border-[#A6C1D9]/90 rounded-[18px] shadow-sm backdrop-blur-sm hover:-translate-y-[7px] hover:bg-white hover:shadow-xl transition-all duration-200 group">
                    <div class="w-[46px] h-[46px] flex items-center justify-center mb-[19px] rounded-full bg-gradient-to-br from-[#155EEF] to-[#0B45C4] text-white text-sm font-black shadow-md group-hover:scale-110 group-hover:rotate-6 transition-transform duration-200">3</div>
                    <h3 class="m-0 mb-[8px] text-[#102A43] text-[18px] font-black">Proses & Verifikasi</h3>
                    <p class="m-0 text-[#5B6B7D] text-sm leading-relaxed">Pantau status berkas Anda secara berkala hingga penyelesaian proses.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA SECTION --}}
    <section class="relative py-[80px] bg-gradient-to-b from-[#E1EDF7] to-[#D3E4F2]">
        <div class="max-w-[1160px] mx-auto px-[14px] md:px-5">
            <div class="relative p-8 md:p-[48px] overflow-hidden rounded-[23px] bg-gradient-to-br from-[#155EEF] to-[#0C46B9] text-white shadow-2xl">
                <div class="absolute w-[350px] h-[350px] -right-[160px] -bottom-[220px] rounded-full border border-white/10 shadow-[0_0_0_35px_rgba(255,255,255,0.025),0_0_0_70px_rgba(255,255,255,0.02)] pointer-events-none"></div>
                <div class="absolute w-[220px] h-[220px] -right-[70px] -top-[90px] rounded-full bg-white/10 pointer-events-none"></div>

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
                        class="
                            inline-flex
                            items-center
                            justify-center
                            gap-[9px]
                            min-h-[52px]
                            px-[21px]
                            py-[13px]
                            mt-[23px]
                            rounded-[11px]
                            text-[15px]
                            font-extrabold
                            bg-white
                            text-[#155EEF]
                            hover:bg-[#F3F7FF]
                            hover:text-[#0B45C4]
                            hover:-translate-y-1
                            hover:shadow-lg
                            focus:outline-none
                            focus-visible:ring-4
                            focus-visible:ring-white/50
                            transition-all
                            duration-200
                        "
                    >
                        Hubungi Layanan Pengaduan
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

{{-- ACCESSIBILITY JAVASCRIPT TOGGLES --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const body = document.body;
        const btnNormal = document.getElementById('btn-normal-text');
        const btnLarge = document.getElementById('btn-large-text');
        const btnContrast = document.getElementById('btn-high-contrast');

        btnLarge?.addEventListener('click', function() {
            body.classList.toggle('text-lg');
            btnLarge.classList.toggle('bg-white');
            btnLarge.classList.toggle('text-[#102A43]');
        });

        btnContrast?.addEventListener('click', function() {
            body.classList.toggle('contrast-125');
            btnContrast.classList.toggle('bg-white');
            btnContrast.classList.toggle('text-[#102A43]');
        });

        btnNormal?.addEventListener('click', function() {
            body.classList.remove('text-lg', 'contrast-125');
            btnLarge?.classList.remove('bg-white', 'text-[#102A43]');
            btnContrast?.classList.remove('bg-white', 'text-[#102A43]');
        });
    });
</script>

@endsection