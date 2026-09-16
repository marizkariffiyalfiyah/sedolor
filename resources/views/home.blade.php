@extends('layouts.app')

@section('title', 'Masuk')

@section('content')

{{-- SKIP LINK FOR ACCESSIBILITY --}}
<a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:top-5 focus:left-5 focus:z-[9999] focus:px-5 focus:py-3 focus:bg-black focus:text-white focus:rounded-lg focus:font-extrabold">
    Lompati ke konten utama
</a>


<main id="main-content" class="w-full overflow-hidden bg-[#EEF4FA]">

    {{-- HERO SECTION --}}
    <section class="relative min-h-[570px] py-12 md:py-20 overflow-hidden bg-cover bg-center bg-no-repeat" 
             style="background-image: linear-gradient(90deg, rgba(7, 31, 61, 0.90) 0%, rgba(12, 55, 105, 0.80) 35%, rgba(21, 94, 239, 0.52) 68%, rgba(21, 94, 239, 0.30) 100%), url('{{ asset('assets/fotobpom.jpg') }}');">
        
        {{-- Hero Background Effects --}}
        <div class="absolute inset-0 bg-gradient-to-br from-[#051c37]/28 to-[#155eef]/10 pointer-events-none"></div>
        <div class="absolute w-[300px] h-[300px] md:w-[520px] md:h-[520px] -right-[150px] -top-[120px] md:-right-[190px] md:-top-[190px] rounded-full bg-white/5 border border-white/10 shadow-[0_0_0_45px_rgba(255,255,255,0.035),0_0_0_90px_rgba(255,255,255,0.02)] pointer-events-none"></div>

        <div class="relative z-10 max-w-[1160px] mx-auto px-[14px] md:px-5">
            <div class="grid grid-cols-1 lg:grid-cols-[minmax(0,1.25fr)_minmax(330px,0.75fr)] gap-10 lg:gap-[60px] items-center">
                
                {{-- Hero Left Content --}}
                <div class="animate-[fadeUp_0.7s_ease-out_both]">
                    <div class="inline-flex items-center gap-[9px] px-[14px] py-[9px] rounded-full bg-white/95 text-[#155EEF] border border-white/65 text-xs md:text-sm font-extrabold shadow-md mb-5 backdrop-blur-md">
                        <span class="w-[9px] h-[9px] rounded-full bg-[#087F5B] ring-4 ring-[#087F5B]/10"></span>
                        Layanan Resmi BPOM Palembang
                    </div>

                    <h1 class="m-0 mb-[18px] max-w-[700px] text-[37px] sm:text-[48px] md:text-[58px] leading-[1.08] tracking-[-1.3px] font-black text-white drop-shadow-md">
                        Layanan Publik <span class="text-[#8FC3FF]">Terpadu & Inklusif</span>
                    </h1>

                    <p class="max-w-[650px] m-0 text-base md:text-[18px] leading-[1.7] text-[#EAF3FF] drop-shadow">
                        Akses kemudahan informasi, sertifikasi, konsultasi, dan pengaduan obat serta makanan dalam satu platform terintegrasi.
                    </p>

                    <div class="flex flex-col sm:flex-row flex-wrap gap-[12px] mt-[30px]">
                        <a href="#layanan" class="inline-flex items-center justify-center gap-[9px] min-h-[52px] px-[21px] py-[13px] rounded-[11px] text-[15px] font-extrabold text-white bg-[#155EEF] hover:bg-[#0B45C4] transition-all duration-200 shadow-lg hover:-translate-y-1 hover:shadow-xl">
                            Eksplorasi Layanan
                        </a>
                        <a href="#aksesibilitas" class="inline-flex items-center justify-center gap-[9px] min-h-[52px] px-[21px] py-[13px] rounded-[11px] text-[15px] font-extrabold text-[#102A43] bg-white/95 hover:bg-white hover:text-[#155EEF] border border-white/80 transition-all duration-200 shadow-md backdrop-blur-md hover:-translate-y-1">
                            Fitur Aksesibilitas
                        </a>
                    </div>
                </div>

                {{-- Hero Panel / Quick Access --}}
                <div class="relative bg-white/95 border border-white/80 rounded-[24px] p-[27px] shadow-2xl backdrop-blur-md overflow-hidden animate-[panelIn_0.8s_ease-out_0.15s_both] max-w-[650px] lg:max-w-none">
                    <div class="absolute w-[120px] h-[120px] -right-[45px] -top-[45px] rounded-full bg-[#E8F0FF] opacity-80 pointer-events-none"></div>

                    <div class="relative z-10">
                        <span class="block text-[#155EEF] text-xs font-black tracking-wider uppercase mb-[10px]">Akses Cepat</span>
                        <h2 class="m-0 mb-5 text-[#102A43] text-[22px] font-black">Layanan Populer</h2>

                        <div class="space-y-[11px]">
                            <a href="#" class="group flex items-center gap-[15px] p-[15px] border border-[#CFDCE9] rounded-[13px] bg-[#FAFCFE] text-[#18324B] no-underline hover:bg-[#E8F0FF] hover:border-[#AFC7EE] hover:translate-x-1 hover:shadow-md transition-all duration-200">
                                <div class="w-[47px] h-[47px] shrink-0 flex items-center justify-center rounded-[12px] bg-[#E8F0FF] text-[#155EEF] group-hover:scale-105 group-hover:-rotate-3 transition-transform duration-200">
                                    <svg class="w-[23px] h-[23px] stroke-current fill-none stroke-2 stroke-round" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                                </div>
                                <div>
                                    <strong class="block text-[15px] font-black leading-tight">Pengajuan Sertifikasi</strong>
                                    <small class="text-[#5B6B7D] text-[13px]">Izin edar obat & makanan</small>
                                </div>
                                <div class="ml-auto text-[#155EEF] group-hover:translate-x-1 transition-transform duration-200">
                                    <svg class="w-[18px] h-[18px] stroke-current fill-none stroke-2 stroke-round" viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                </div>
                            </a>

                            <a href="#" class="group flex items-center gap-[15px] p-[15px] border border-[#CFDCE9] rounded-[13px] bg-[#FAFCFE] text-[#18324B] no-underline hover:bg-[#E8F0FF] hover:border-[#AFC7EE] hover:translate-x-1 hover:shadow-md transition-all duration-200">
                                <div class="w-[47px] h-[47px] shrink-0 flex items-center justify-center rounded-[12px] bg-[#E8F0FF] text-[#155EEF] group-hover:scale-105 group-hover:-rotate-3 transition-transform duration-200">
                                    <svg class="w-[23px] h-[23px] stroke-current fill-none stroke-2 stroke-round" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                                </div>
                                <div>
                                    <strong class="block text-[15px] font-black leading-tight">Konsultasi Layanan</strong>
                                    <small class="text-[#5B6B7D] text-[13px]">Tanya petugas resmi</small>
                                </div>
                                <div class="ml-auto text-[#155EEF] group-hover:translate-x-1 transition-transform duration-200">
                                    <svg class="w-[18px] h-[18px] stroke-current fill-none stroke-2 stroke-round" viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ACCESSIBILITY SECTION --}}
    <section id="aksesibilitas" class="relative pt-[25px] pb-[45px] md:pb-[75px] bg-gradient-to-b from-[#EEF4FA] to-[#D9E8F6]">
        <div class="max-w-[1160px] mx-auto px-[14px] md:px-5">
            <div class="relative grid grid-cols-1 lg:grid-cols-[280px_1fr] gap-[28px] p-[30px] overflow-hidden bg-gradient-to-br from-[#102A43] via-[#123B60] to-[#155EEF] rounded-[22px] text-white shadow-xl">
                
                {{-- Decorative Shapes --}}
                <div class="absolute w-[230px] h-[230px] -right-[100px] -top-[110px] rounded-full bg-white/5 border border-white/10 pointer-events-none"></div>
                <div class="absolute w-[130px] h-[130px] left-[35%] -bottom-[85px] rounded-full bg-[#8FC3FF]/10 pointer-events-none"></div>

                <div class="relative z-10 flex flex-col justify-center">
                    <div class="w-[52px] h-[52px] flex items-center justify-center mb-[14px] rounded-[14px] bg-white/10 text-white border border-white/20">
                        <svg class="w-[27px] h-[27px] stroke-current fill-none stroke-2 stroke-round" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path d="M12 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"></path><path d="M12 12v8"></path><path d="M8 14l4-2 4 2"></path></svg>
                    </div>
                    <h2 class="m-0 mb-[7px] text-[23px] font-black">Aksesibilitas</h2>
                    <p class="m-0 text-[#D8E5F0] text-sm leading-[1.55]">Sesuaikan tampilan portal sesuai dengan kebutuhan Anda.</p>
                </div>

                <div class="relative z-10 grid grid-cols-1 sm:grid-cols-3 gap-[12px]">
                    <button id="btn-normal-text" type="button" class="group relative min-h-[125px] p-[18px] text-left border border-white/20 rounded-[15px] bg-white/10 text-white cursor-pointer overflow-hidden transition-all duration-200 hover:bg-white hover:text-[#102A43] hover:-translate-y-1 hover:shadow-lg">
                        <div class="flex items-center mb-[9px]"><svg class="w-[25px] h-[25px] stroke-current fill-none stroke-2 stroke-round" viewBox="0 0 24 24"><path d="M4 7V4h16v3"></path><path d="M9 20h6"></path><path d="M12 4v16"></path></svg></div>
                        <span class="block mb-[3px] text-sm font-black">Teks Normal</span>
                        <span class="block text-xs opacity-80 leading-relaxed">Ukuran font standar sistem</span>
                    </button>

                    <button id="btn-large-text" type="button" class="group relative min-h-[125px] p-[18px] text-left border border-white/20 rounded-[15px] bg-white/10 text-white cursor-pointer overflow-hidden transition-all duration-200 hover:bg-white hover:text-[#102A43] hover:-translate-y-1 hover:shadow-lg">
                        <div class="flex items-center mb-[9px]"><svg class="w-[25px] h-[25px] stroke-current fill-none stroke-2 stroke-round" viewBox="0 0 24 24"><path d="M4 7V4h16v3"></path><path d="M9 20h6"></path><path d="M12 4v16"></path></svg></div>
                        <span class="block mb-[3px] text-sm font-black">Teks Besar</span>
                        <span class="block text-xs opacity-80 leading-relaxed">Memperbesar ukuran font</span>
                    </button>

                    <button id="btn-high-contrast" type="button" class="group relative min-h-[125px] p-[18px] text-left border border-white/20 rounded-[15px] bg-white/10 text-white cursor-pointer overflow-hidden transition-all duration-200 hover:bg-white hover:text-[#102A43] hover:-translate-y-1 hover:shadow-lg">
                        <div class="flex items-center mb-[9px]"><svg class="w-[25px] h-[25px] stroke-current fill-none stroke-2 stroke-round" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a10 10 0 0 0 0 20z" fill="currentColor"></path></svg></div>
                        <span class="block mb-[3px] text-sm font-black">Kontras Tinggi</span>
                        <span class="block text-xs opacity-80 leading-relaxed">Tampilan baca ekstra jelas</span>
                    </button>
                </div>

            </div>
        </div>
    </section>

    {{-- SERVICES SECTION --}}
    <section id="layanan" class="relative py-[82px] bg-gradient-to-b from-[#E7F1FA] to-[#DCEAF7]">
        <div class="max-w-[1160px] mx-auto px-[14px] md:px-5">
            <div class="max-w-[700px] mb-[34px]">
                <span class="inline-flex items-center gap-[7px] mb-[10px] px-[12px] py-[7px] rounded-full bg-[#155EEF]/10 text-[#155EEF] text-xs font-black uppercase tracking-wider">
                    Layanan Utama
                </span>
                <h2 class="m-0 mb-[10px] text-[#102A43] text-[31px] font-black leading-tight">Kemudahan Dalam Satu Pintu</h2>
                <p class="m-0 text-[#5B6B7D] text-[15px] leading-relaxed">Pilih jenis layanan publik sesuai dengan kebutuhan informasi atau perizinan Anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                {{-- Service Card 1 --}}
                <div class="relative flex flex-col min-h-[285px] p-[25px] overflow-hidden bg-white/80 border border-[#ADC3D9]/85 rounded-[18px] shadow-sm backdrop-blur-sm hover:-translate-y-2 hover:bg-white hover:shadow-xl transition-all duration-200 group">
                    <div class="absolute top-0 left-0 w-full h-[4px] bg-[#155EEF] scale-x-25 origin-left group-hover:scale-x-100 transition-transform duration-200"></div>
                    <div class="w-[57px] h-[57px] flex items-center justify-center mb-[18px] rounded-[14px] bg-[#E8F0FF] text-[#155EEF] group-hover:-translate-y-1 group-hover:scale-105 transition-transform duration-200">
                        <svg class="w-[27px] h-[27px] stroke-current fill-none stroke-2 stroke-round" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline></svg>
                    </div>
                    <h3 class="m-0 mb-[8px] text-[#102A43] text-[19px] font-black">Sertifikasi & Perizinan</h3>
                    <p class="m-0 text-[#5B6B7D] text-sm leading-relaxed">Layanan pendaftaran produk obat, makanan, kosmetik, dan perbekalan kesehatan secara efisien.</p>
                    <a href="#" class="inline-flex items-center justify-center gap-[7px] min-h-[46px] mt-auto pt-[18px] text-[#155EEF] text-sm font-black no-underline group-hover:gap-[11px] transition-all duration-200">
                        Selengkapnya 
                        <svg class="w-[17px] h-[17px] stroke-current fill-none stroke-2 stroke-round group-hover:translate-x-1 transition-transform duration-200" viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>

                {{-- Service Card 2 --}}
                <div class="relative flex flex-col min-h-[285px] p-[25px] overflow-hidden bg-white/80 border border-[#ADC3D9]/85 rounded-[18px] shadow-sm backdrop-blur-sm hover:-translate-y-2 hover:bg-white hover:shadow-xl transition-all duration-200 group">
                    <div class="absolute top-0 left-0 w-full h-[4px] bg-[#087F5B] scale-x-25 origin-left group-hover:scale-x-100 transition-transform duration-200"></div>
                    <div class="w-[57px] h-[57px] flex items-center justify-center mb-[18px] rounded-[14px] bg-[#E7F7F1] text-[#087F5B] group-hover:-translate-y-1 group-hover:scale-105 transition-transform duration-200">
                        <svg class="w-[27px] h-[27px] stroke-current fill-none stroke-2 stroke-round" viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                    </div>
                    <h3 class="m-0 mb-[8px] text-[#102A43] text-[19px] font-black">Pengaduan & Informasi</h3>
                    <p class="m-0 text-[#5B6B7D] text-sm leading-relaxed">Sampaikan keluhan, konsultasi, atau verifikasi keabsahan produk langsung kepada tim ahli BPOM.</p>
                    <a href="#" class="inline-flex items-center justify-center gap-[7px] min-h-[46px] mt-auto pt-[18px] text-[#155EEF] text-sm font-black no-underline group-hover:gap-[11px] transition-all duration-200">
                        Selengkapnya 
                        <svg class="w-[17px] h-[17px] stroke-current fill-none stroke-2 stroke-round group-hover:translate-x-1 transition-transform duration-200" viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>

                {{-- Service Card 3 --}}
                <div class="relative flex flex-col min-h-[285px] p-[25px] overflow-hidden bg-white/80 border border-[#ADC3D9]/85 rounded-[18px] shadow-sm backdrop-blur-sm hover:-translate-y-2 hover:bg-white hover:shadow-xl transition-all duration-200 group">
                    <div class="absolute top-0 left-0 w-full h-[4px] bg-[#A85B00] scale-x-25 origin-left group-hover:scale-x-100 transition-transform duration-200"></div>
                    <div class="w-[57px] h-[57px] flex items-center justify-center mb-[18px] rounded-[14px] bg-[#FFF3DF] text-[#A85B00] group-hover:-translate-y-1 group-hover:scale-105 transition-transform duration-200">
                        <svg class="w-[27px] h-[27px] stroke-current fill-none stroke-2 stroke-round" viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                    </div>
                    <h3 class="m-0 mb-[8px] text-[#102A43] text-[19px] font-black">Edukasi & Publikasi</h3>
                    <p class="m-0 text-[#5B6B7D] text-sm leading-relaxed">Akses artikel resmi, panduan keamanan pangan, serta regulasi terbaru seputar obat dan makanan.</p>
                    <a href="#" class="inline-flex items-center justify-center gap-[7px] min-h-[46px] mt-auto pt-[18px] text-[#155EEF] text-sm font-black no-underline group-hover:gap-[11px] transition-all duration-200">
                        Selengkapnya 
                        <svg class="w-[17px] h-[17px] stroke-current fill-none stroke-2 stroke-round group-hover:translate-x-1 transition-transform duration-200" viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- HOW IT WORKS --}}
    <section class="relative py-[82px] bg-gradient-to-b from-[#CFE2F2] to-[#E1EDF7]">
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
                    <h2 class="m-0 mb-[10px] text-[28px] md:text-[31px] font-black">Butuh Bantuan Lebih Lanjut?</h2>
                    <p class="m-0 text-[#E5EEFF] leading-relaxed">Tim Balai Besar POM di Palembang siap membantu pertanyaan dan kendala Anda.</p>
                    <a href="#" class="inline-flex items-center justify-center gap-[9px] min-h-[52px] px-[21px] py-[13px] rounded-[11px] text-[15px] font-extrabold bg-white text-[#155EEF] hover:bg-[#F3F7FF] hover:text-[#0B45C4] hover:-translate-y-1 hover:shadow-lg transition-all duration-200 mt-[23px]">
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