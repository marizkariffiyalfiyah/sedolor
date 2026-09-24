@extends('layouts.logged-in')

@section('title', 'Masuk')

@section('content')

<main id="main-content" class="min-h-screen bg-slate-50 scroll-smooth">

{{-- =========================================================
     WELCOME
     ========================================================= --}}
<section id="informasi" class="relative overflow-hidden bg-gradient-to-b from-blue-100 to-slate-50 py-10 sm:py-14">

    {{-- Decorative circles --}}
    <div class="pointer-events-none absolute -right-32 -top-32 h-80 w-80 rounded-full border border-blue-200/60 bg-blue-500/10"></div>
    <div class="pointer-events-none absolute -bottom-24 -left-20 h-52 w-52 rounded-full bg-emerald-500/5"></div>

    <div class="relative mx-auto w-full max-w-6xl px-4 sm:px-6 lg:px-8">

        <div class="grid min-h-[390px] overflow-hidden rounded-3xl bg-gradient-to-br from-slate-900 via-slate-800 to-blue-600 shadow-2xl lg:grid-cols-[1fr_440px]">


            {{-- Welcome Content --}}
            <div class="relative z-10 flex flex-col justify-center p-7 sm:p-10 lg:p-12">

                <div class="mb-4 inline-flex w-fit items-center gap-2 rounded-full border border-white/15 bg-white/10 px-3 py-2 text-xs font-bold text-blue-100 backdrop-blur">
                    <span class="h-2 w-2 animate-pulse rounded-full bg-emerald-300 ring-4 ring-emerald-300/10"></span>
                    Dashboard SEDOLOR
                </div>

                <h1 class="max-w-2xl text-3xl font-black leading-tight tracking-tight text-white sm:text-4xl">
                    Selamat datang kembali,
                    <span class="text-blue-300">
                        {{ auth()->user()->name ?? 'Pengguna SEDOLOR' }}
                    </span>.
                </h1>

                <p class="mt-4 max-w-xl text-sm leading-7 text-slate-200 sm:text-base">
                    Kelola pendaftaran layanan BPOM Palembang,
                    lihat jadwal pertemuan, nomor antrean,
                    dan informasi layanan Anda melalui satu halaman.
                </p>

                <div class="mt-7 flex flex-wrap gap-3">
                    <a
                        href="{{ route('informasi-produk') }}"
                        class="inline-flex min-h-11 items-center justify-center gap-2 rounded-xl bg-white px-5 py-3 text-sm font-bold text-blue-700 shadow-lg transition duration-200 hover:-translate-y-1 hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-700"
                    >
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" d="M12 5v14"/>
                            <path stroke-linecap="round" d="M5 12h14"/>
                        </svg>

                        Daftar Layanan
                    </a>

                    <a
                        href="{{ route('informasi-produk') }}"
                        class="inline-flex min-h-11 items-center justify-center rounded-xl border border-white/20 bg-white/10 px-5 py-3 text-sm font-bold text-white backdrop-blur transition duration-200 hover:-translate-y-1 hover:bg-white/20 focus:outline-none focus:ring-2 focus:ring-white"
                    >
                        Lihat Informasi
                    </a>

                </div>
            </div>

            {{-- Character --}}
            <div
                id="characterArea"
                class="relative flex min-h-[320px] items-end justify-center overflow-hidden px-4 pt-8 lg:min-h-[390px]"
            >

                {{-- Orbit --}}
                <div class="absolute right-4 top-8 h-72 w-72 rounded-full border border-white/10 bg-radial from-white/15 via-white/5 to-transparent sm:h-80 sm:w-80"></div>

                <div class="absolute right-4 top-20 h-52 w-80 rotate-[-17deg] rounded-[50%] border border-white/10"></div>

                {{-- Floating Document --}}
                <div class="absolute left-6 top-24 flex h-14 w-14 items-center justify-center rounded-2xl bg-white text-emerald-600 shadow-xl animate-bounce [animation-duration:4s]">
                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="5" y="3" width="14" height="18" rx="2"/>
                        <path d="M9 8h6"/>
                        <path d="M9 12h6"/>
                        <path d="M9 16h4"/>
                    </svg>
                </div>

                {{-- Floating Calendar --}}
                <div class="absolute right-8 top-12 flex h-14 w-14 items-center justify-center rounded-2xl bg-white text-blue-600 shadow-xl animate-bounce [animation-duration:4.5s]">
                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="5" width="18" height="16" rx="2"/>
                        <path d="M16 3v4"/>
                        <path d="M8 3v4"/>
                        <path d="M3 10h18"/>
                    </svg>
                </div>

                {{-- Floating Queue --}}
                <div class="absolute bottom-16 right-5 flex h-12 w-[70px] items-center justify-center rounded-xl bg-white px-3 text-xs font-black text-orange-600 shadow-xl animate-bounce [animation-duration:4s]">
                    A-012
                </div>

                {{-- Floating WhatsApp --}}
                <div class="absolute bottom-16 left-12 flex h-12 w-12 items-center justify-center rounded-xl bg-white text-emerald-600 shadow-xl animate-bounce [animation-duration:3.5s]">
                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 11.5a8.5 8.5 0 0 1-12.8 7.4L4 20l1.2-4.1A8.5 8.5 0 1 1 21 11.5z"/>
                        <path d="M9 9.5c.2 1.2 1.3 2.8 3.2 3.7 1.2.6 1.8.6 2.3.2"/>
                    </svg>
                </div>

                {{-- Character --}}
                <img
                    src="{{ asset('assets/karakter.png') }}"
                    alt="Ilustrasi pengguna SEDOLOR"
                    id="characterImage"
                    class="relative z-10 h-[350px] w-full max-w-[410px] object-contain object-bottom drop-shadow-2xl transition-transform duration-200"
                >

            </div>

        </div>
    </div>
</section>


{{-- =========================================================
     MAIN DASHBOARD
     ========================================================= --}}
<section  class="bg-gradient-to-b from-slate-50 to-blue-50/60 py-10 sm:py-14">

    <div class="mx-auto w-full max-w-6xl px-4 sm:px-6 lg:px-8">


        {{-- =====================================================
             APPOINTMENT
             ===================================================== --}}
        <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-lg">

            {{-- Header --}}
            <div class="flex flex-col gap-4 border-b border-slate-200 p-5 sm:flex-row sm:items-start sm:justify-between sm:p-7">

                <div>

                    <div class="mb-2 flex items-center gap-2 text-xs font-black uppercase tracking-wider text-blue-600">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="5" width="18" height="16" rx="2"/>
                            <path d="M16 3v4"/>
                            <path d="M8 3v4"/>
                            <path d="M3 10h18"/>
                        </svg>

                        Jadwal Anda
                    </div>

                    <h2 class="text-xl font-black text-slate-800 sm:text-2xl">
                        Pertemuan layanan berikutnya
                    </h2>

                </div>

                <span class="inline-flex w-fit items-center gap-2 rounded-full bg-emerald-50 px-3 py-2 text-xs font-black text-emerald-700">
                    <span class="h-2 w-2 animate-pulse rounded-full bg-emerald-600"></span>
                    Terjadwal
                </span>

            </div>


            {{-- Appointment Body --}}
            <div class="grid gap-5 p-5 sm:p-7 lg:grid-cols-[1.25fr_.75fr]">

                <div class="grid gap-3 sm:grid-cols-3">

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                        <span class="block mb-1 text-xs font-bold text-slate-500">
                            Layanan
                        </span>

                        <span class="text-sm font-black leading-5 text-slate-800">
                            Konsultasi Layanan BPOM
                        </span>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                        <span class="block mb-1 text-xs font-bold text-slate-500">
                            Tanggal
                        </span>

                        <span class="text-sm font-black leading-5 text-slate-800">
                            Senin, 15 September 2026
                        </span>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                        <span class="block mb-1 text-xs font-bold text-slate-500">
                            Jam
                        </span>

                        <span class="text-sm font-black leading-5 text-slate-800">
                            09.00 - 09.30 WIB
                        </span>
                    </div>

                </div>


                {{-- Queue --}}
                <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-blue-600 to-blue-800 p-6 text-white shadow-lg">

                    <span class="text-xs font-bold text-blue-100">
                        Nomor Antrean
                    </span>

                    <strong class="mt-1 block text-4xl font-black tracking-tight">
                        A-012
                    </strong>

                    <p class="mt-3 text-sm leading-6 text-blue-100">
                        Silakan datang sesuai jadwal dan tunjukkan nomor antrean kepada petugas.
                    </p>

                </div>

            </div>


            {{-- Appointment Footer --}}
            <div class="flex flex-col gap-4 border-t border-slate-200 px-5 py-5 sm:flex-row sm:items-center sm:justify-between sm:px-7">

                <span class="text-sm text-slate-500">
                    Konfirmasi jadwal dan antrean juga dapat diterima melalui WhatsApp.
                </span>

                <a
                    href="/jadwal-antrean"
                    class="inline-flex items-center gap-2 text-sm font-black text-blue-600 transition hover:text-blue-800"
                >
                    Lihat Jadwal & Antrean

                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h13"/>
                        <path d="M13 6l6 6-6 6"/>
                    </svg>
                </a>

            </div>

        </div>


        {{-- =====================================================
             SERVICES HEADER
             ===================================================== --}}
        <div class="mt-12 mb-6">

            <span class="text-xs font-black uppercase tracking-widest text-blue-600">
                Layanan
            </span>

            <h2 class="mt-2 text-2xl font-black text-slate-800 sm:text-3xl">
                Apa yang ingin Anda lakukan?
            </h2>

            <p class="mt-2 max-w-2xl text-sm leading-6 text-slate-500">
                Akses layanan SEDOLOR secara langsung tanpa perlu kembali ke halaman masuk.
            </p>

        </div>


        {{-- =====================================================
             SERVICES
             ===================================================== --}}
        <div class="grid gap-5 md:grid-cols-3">

            {{-- Pendaftaran --}}
            <article class="group flex flex-col rounded-3xl border border-slate-200 bg-white p-6 shadow-md transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-50 text-blue-600 transition group-hover:bg-blue-600 group-hover:text-white">

                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="5" y="3" width="14" height="18" rx="2"/>
                        <path d="M9 8h6"/>
                        <path d="M9 12h6"/>
                        <path d="M9 16h4"/>
                    </svg>

                </div>

                <h3 class="mt-5 text-lg font-black text-slate-800">
                    Pendaftaran Layanan
                </h3>

                <p class="mt-2 flex-1 text-sm leading-6 text-slate-500">
                    Lakukan pendaftaran layanan BPOM sesuai dengan kebutuhan Anda dan tentukan jadwal pertemuan.
                </p>

                <a
                    href="{{ route('pendaftaran.mulai') }}"
                    class="mt-6 inline-flex items-center gap-2 text-sm font-black text-blue-600 hover:text-blue-800"
                >
                    Mulai Pendaftaran

                    <svg class="h-5 w-5 transition group-hover:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h13"/>
                        <path d="M13 6l6 6-6 6"/>
                    </svg>
                </a>

            </article>


            {{-- Informasi --}}
            <article class="group flex flex-col rounded-3xl border border-slate-200 bg-white p-6 shadow-md transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600 transition group-hover:bg-emerald-600 group-hover:text-white">

                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="9"/>
                        <path d="M12 10v6"/>
                        <path d="M12 7h.01"/>
                    </svg>

                </div>

                <h3 class="mt-5 text-lg font-black text-slate-800">
                    Informasi Layanan
                </h3>

                <p class="mt-2 flex-1 text-sm leading-6 text-slate-500">
                    Temukan jenis layanan, persyaratan, dokumen yang perlu disiapkan, dan informasi sebelum datang ke BPOM.
                </p>

                <a
                    href="{{ route('informasi-produk') }}"
                    class="mt-6 inline-flex items-center gap-2 text-sm font-black text-blue-600 hover:text-blue-800"
                >
                    Lihat Informasi

                    <svg class="h-5 w-5 transition group-hover:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h13"/>
                        <path d="M13 6l6 6-6 6"/>
                    </svg>
                </a>

            </article>


            {{-- Jadwal --}}
            <article class="group flex flex-col rounded-3xl border border-slate-200 bg-white p-6 shadow-md transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-orange-50 text-orange-600 transition group-hover:bg-orange-600 group-hover:text-white">

                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="5" width="18" height="16" rx="2"/>
                        <path d="M16 3v4"/>
                        <path d="M8 3v4"/>
                        <path d="M3 10h18"/>
                    </svg>

                </div>

                <h3 class="mt-5 text-lg font-black text-slate-800">
                    Jadwal & Antrean
                </h3>

                <p class="mt-2 flex-1 text-sm leading-6 text-slate-500">
                    Periksa tanggal pertemuan, jam layanan, dan nomor antrean yang telah Anda dapatkan.
                </p>

                <a
                    href="/jadwal-antrean"
                    class="mt-6 inline-flex items-center gap-2 text-sm font-black text-blue-600 hover:text-blue-800"
                >
                    Cek Jadwal & Antrean

                    <svg class="h-5 w-5 transition group-hover:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h13"/>
                        <path d="M13 6l6 6-6 6"/>
                    </svg>
                </a>

            </article>

        </div>


        {{-- =====================================================
             LOWER SECTION
             ===================================================== --}}
        <div class="mt-8 grid gap-5 lg:grid-cols-2">


            {{-- History --}}
            <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-md">

                <div class="border-b border-slate-200 p-6">
                    <h3 class="text-lg font-black text-slate-800">
                        Aktivitas Terakhir
                    </h3>

                    <p class="mt-1 text-sm text-slate-500">
                        Riwayat layanan yang pernah Anda lakukan.
                    </p>
                </div>

                <div class="divide-y divide-slate-100">

                    <div class="flex items-center gap-4 p-5">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 6h16"/>
                                <path d="M4 10h16"/>
                                <path d="M4 14h10"/>
                                <path d="M4 18h8"/>
                            </svg>
                        </div>

                        <div class="min-w-0 flex-1">
                            <strong class="block text-sm font-black text-slate-800">
                                Pendaftaran Layanan
                            </strong>

                            <span class="text-xs text-slate-500">
                                10 September 2026 · Konsultasi Layanan
                            </span>
                        </div>

                        <span class="shrink-0 rounded-full bg-emerald-50 px-3 py-1.5 text-xs font-bold text-emerald-700">
                            Selesai
                        </span>

                    </div>


                    <div class="flex items-center gap-4 p-5">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="5" width="18" height="16" rx="2"/>
                                <path d="M16 3v4"/>
                                <path d="M8 3v4"/>
                                <path d="M3 10h18"/>
                            </svg>
                        </div>

                        <div class="min-w-0 flex-1">
                            <strong class="block text-sm font-black text-slate-800">
                                Jadwal Pertemuan
                            </strong>

                            <span class="text-xs text-slate-500">
                                5 September 2026 · Antrean B-021
                            </span>
                        </div>

                        <span class="shrink-0 rounded-full bg-emerald-50 px-3 py-1.5 text-xs font-bold text-emerald-700">
                            Selesai
                        </span>

                    </div>


                    <div class="flex items-center gap-4 p-5">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="9"/>
                                <path d="M12 7v5l3 2"/>
                            </svg>
                        </div>

                        <div class="min-w-0 flex-1">
                            <strong class="block text-sm font-black text-slate-800">
                                Permohonan Layanan
                            </strong>

                            <span class="text-xs text-slate-500">
                                28 Agustus 2026 · Informasi Produk
                            </span>
                        </div>

                        <span class="shrink-0 rounded-full bg-emerald-50 px-3 py-1.5 text-xs font-bold text-emerald-700">
                            Selesai
                        </span>

                    </div>

                </div>

            </div>


            {{-- Important Information --}}
            <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-md">

                <div class="border-b border-slate-200 p-6">
                    <h3 class="text-lg font-black text-slate-800">
                        Informasi Penting
                    </h3>

                    <p class="mt-1 text-sm text-slate-500">
                        Hal yang perlu diperhatikan sebelum datang ke BPOM.
                    </p>
                </div>

                <div class="divide-y divide-slate-100">

                    <a
                        href="{{ route('informasi-produk') }}"
                        class="group flex items-center gap-4 p-5 transition hover:bg-slate-50"
                    >
                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 3l8 4v5c0 5-3.5 8-8 9-4.5-1-8-4-8-9V7l8-4z"/>
                                <path d="M9 12l2 2 4-4"/>
                            </svg>
                        </div>

                        <div class="flex-1">
                            <strong class="block text-sm font-black text-slate-800">
                                Persyaratan Layanan
                            </strong>

                            <span class="text-xs text-slate-500">
                                Pastikan dokumen telah dipersiapkan.
                            </span>
                        </div>

                        <svg
                            class="h-5 w-5 text-slate-400 transition group-hover:translate-x-1 group-hover:text-blue-600"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path d="M5 12h13"/>
                            <path d="M13 6l6 6-6 6"/>
                        </svg>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

</main>

{{-- =========================================================
CHARACTER PARALLAX
========================================================= --}}

<script>
document.addEventListener('DOMContentLoaded', function () {

    const characterArea = document.getElementById('characterArea');
    const characterImage = document.getElementById('characterImage');

    if (
        characterArea &&
        characterImage &&
        window.matchMedia('(prefers-reduced-motion: no-preference)').matches
    ) {

        characterArea.addEventListener('mousemove', function (event) {

            const rect = characterArea.getBoundingClientRect();

            const x = event.clientX - rect.left;
            const y = event.clientY - rect.top;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const moveX = ((x - centerX) / centerX) * 7;
            const moveY = ((y - centerY) / centerY) * 5;

            characterImage.style.transform =
                `translate3d(${moveX}px, ${moveY}px, 0) scale(1.02)`;
        });

        characterArea.addEventListener('mouseleave', function () {
            characterImage.style.transform = '';
        });
    }

});
</script>

@endsection
