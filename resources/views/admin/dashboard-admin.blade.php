@extends('layouts.admin')

@section('title', 'Informasi Antrean & Riwayat')

@section('content')
<main id="main-content" class="min-h-screen bg-[#EEF4FA] py-6 sm:py-8 lg:py-10">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 space-y-6">

        {{-- =========================================================
             SUCCESS ALERT
             ========================================================= --}}
        @if(session('success'))
        <div
            class="flex items-start gap-3 rounded-2xl border border-emerald-200 bg-white px-4 py-4 shadow-sm"
            role="alert"
        >
            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-emerald-600">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M5 13l4 4L19 7"
                    />
                </svg>
            </div>

            <div class="flex-1">
                <p class="text-sm font-bold text-slate-800">
                    Berhasil!
                </p>
                <p class="mt-0.5 text-sm text-slate-500">
                    {{ session('success') }}
                </p>
            </div>

            <button
                type="button"
                onclick="this.parentElement.remove()"
                class="rounded-lg p-1.5 text-slate-400 transition hover:bg-slate-100 hover:text-slate-600 cursor-pointer"
                aria-label="Tutup notifikasi"
            >
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"
                    />
                </svg>
            </button>
        </div>
        @endif


        {{-- =========================================================
             HEADER BANNER GRADASI BIRU (Sesuai Referensi)
             ========================================================= --}}
        <div class="relative overflow-hidden bg-gradient-to-r from-blue-950 via-blue-900 to-indigo-900 rounded-2xl shadow-xl p-6 md:p-8 text-white">
            <div class="absolute -right-10 -bottom-10 w-60 h-60 bg-blue-500/10 rounded-full blur-3xl pointer-events-none"></div>
            
            <div class="relative z-10 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div>
                    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-white/10 text-blue-200 text-xs font-semibold mb-3 backdrop-blur-md">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>Sistem Pemantauan Terpadu</span>
                    </div>
                    <h1 class="text-2xl sm:text-3xl font-black tracking-tight text-white">
                        Riwayat Pengajuan Antrean
                    </h1>
                    <p class="text-sm text-blue-100/80 mt-1 max-w-xl">
                        Pantau status pemrosesan permohonan layanan, jadwal, serta nomor antrean Anda secara real-time.
                    </p>
                </div>

                <div class="shrink-0">
                    <a
                        href="{{ route('admin.antrean.export', [
                            'prioritas' => request('prioritas'),
                            'search' => request('search')
                        ]) }}"
                        class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-emerald-600 px-5 py-3 text-sm font-bold text-white shadow-lg transition hover:bg-emerald-700 focus:outline-none sm:w-auto"
                    >
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                            />
                        </svg>
                        Export Excel
                    </a>
                </div>
            </div>
        </div>


        {{-- =========================================================
             MAIN CARD (TABEL & KONTROL)
             ========================================================= --}}
        <section class="overflow-hidden rounded-3xl border border-[#D9E5F0] bg-white shadow-sm">

            {{-- =====================================================
                 TABLE INFO
                 ===================================================== --}}
            <div class="border-b border-[#E1EAF2] bg-slate-50/60 px-5 py-3.5 sm:px-7">
                <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
                    <div class="flex items-center gap-2 text-xs text-slate-500">
                        <span class="flex h-6 w-6 items-center justify-center rounded-full bg-blue-100 text-[#155EEF]">
                            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M12 20a8 8 0 100-16 8 8 0 000 16z"
                                />
                            </svg>
                        </span>
                        <span>
                            Ubah status pengajuan melalui menu status pada setiap baris.
                        </span>
                    </div>
                    <span class="text-xs font-semibold text-slate-400">
                        Data pengajuan layanan
                    </span>
                </div>
            </div>


            {{-- =====================================================
                 TABLE
                 ===================================================== --}}
            <div class="overflow-x-auto">
                <table class="w-full min-w-[980px] text-left">

                    {{-- TABLE HEAD --}}
                    <thead>
                        <tr class="border-b border-[#E1EAF2] bg-white">
                            <th class="px-5 py-4 text-[11px] font-extrabold uppercase tracking-wider text-slate-400 sm:px-7">
                                Antrean
                            </th>
                            <th class="px-5 py-4 text-[11px] font-extrabold uppercase tracking-wider text-slate-400">
                                Jenis Layanan
                            </th>
                            <th class="px-5 py-4 text-[11px] font-extrabold uppercase tracking-wider text-slate-400">
                                Tanggal
                            </th>
                            <th class="px-5 py-4 text-[11px] font-extrabold uppercase tracking-wider text-slate-400">
                                Prioritas
                            </th>
                            <th class="px-5 py-4 text-[11px] font-extrabold uppercase tracking-wider text-slate-400">
                                Estimasi
                            </th>
                            <th class="px-5 py-4 text-[11px] font-extrabold uppercase tracking-wider text-slate-400">
                                Status
                            </th>
                        </tr>
                    </thead>


                    {{-- TABLE BODY --}}
                    <tbody class="divide-y divide-[#E8EFF5]">
                        @forelse($riwayatAntrean ?? [] as $item)
                        <tr class="group transition hover:bg-[#F7FAFD]">

                            {{-- ANTREAN + NAMA --}}
                            <td class="px-5 py-4 sm:px-7">
                                <div class="flex items-center gap-3">
                                    <div class="flex h-10 min-w-[58px] items-center justify-center rounded-xl bg-blue-50 px-2 text-sm font-black text-[#155EEF]">
                                        {{ $item->nomor_antrean }}
                                    </div>
                                    <div class="min-w-0">
                                        <p class="truncate text-sm font-bold text-[#102A43]">
                                            {{ $item->nama_lengkap }}
                                        </p>
                                    </div>
                                </div>
                            </td>

                            {{-- JENIS LAYANAN --}}
                            <td class="px-5 py-4">
                                <span class="max-w-[190px] text-sm font-semibold leading-snug text-slate-700">
                                    {{ $item->jenis_layanan }}
                                </span>
                            </td>

                            {{-- TANGGAL --}}
                            <td class="px-5 py-4">
                                <span class="whitespace-nowrap text-sm font-medium text-slate-600">
                                    {{ \Carbon\Carbon::parse($item->tanggal_permintaan)->isoFormat('D MMMM YYYY') }}
                                </span>
                            </td>

                            {{-- PRIORITAS / KATEGORI (WARNA DINAMIS) --}}
                            <td class="px-5 py-4 whitespace-nowrap">
                                @php
                                    $prioritas = strtolower(trim($item->prioritas ?? 'umum'));
                                @endphp

                                @if(str_contains($prioritas, 'hamil'))
                                    <span class="inline-flex items-center gap-1.5 rounded-full border border-pink-200 bg-pink-50 px-3 py-1.5 text-xs font-bold text-pink-700">
                                        <span class="h-1.5 w-1.5 rounded-full bg-pink-500"></span>
                                        {{ $item->prioritas }}
                                    </span>
                                @elseif(str_contains($prioritas, 'lansia'))
                                    <span class="inline-flex items-center gap-1.5 rounded-full border border-amber-200 bg-amber-50 px-3 py-1.5 text-xs font-bold text-amber-700">
                                        <span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span>
                                        {{ $item->prioritas }}
                                    </span>
                                @elseif(str_contains($prioritas, 'disabilitas'))
                                    <span class="inline-flex items-center gap-1.5 rounded-full border border-emerald-200 bg-emerald-50 px-3 py-1.5 text-xs font-bold text-emerald-700">
                                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                        {{ $item->prioritas }}
                                    </span>
                                @elseif(str_contains($prioritas, 'rendah') || str_contains($prioritas, 'tinggi') || str_contains($prioritas, 'sedang'))
                                    <span class="inline-flex items-center gap-1.5 rounded-full border border-slate-200 bg-slate-100 px-3 py-1.5 text-xs font-bold text-slate-700">
                                        <span class="h-1.5 w-1.5 rounded-full bg-slate-400"></span>
                                        {{ $item->prioritas }}
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1.5 rounded-full border border-blue-200 bg-blue-50 px-3 py-1.5 text-xs font-bold text-blue-700">
                                        <span class="h-1.5 w-1.5 rounded-full bg-blue-500"></span>
                                        {{ $item->prioritas ?? 'Umum' }}
                                    </span>
                                @endif
                            </td>

                            {{-- ESTIMASI --}}
                            <td class="px-5 py-4 whitespace-nowrap">
                                <span class="text-sm font-semibold text-slate-600">
                                    {{ $item->estimasi_jam }}
                                </span>
                            </td>

                            {{-- STATUS (DROPDOWN) --}}
                            <td class="px-5 py-4">
                                <form
                                    action="{{ route('admin.dashboard-admin.update-status', $item->id) }}"
                                    method="POST"
                                    onchange="this.submit()"
                                >
                                    @csrf
                                    @method('PATCH')

                                    <div class="relative inline-flex">
                                        <select
                                            name="status"
                                            aria-label="Ubah status pengajuan"
                                            class="appearance-none rounded-xl border py-2 pl-3 pr-9 text-xs font-bold shadow-sm outline-none transition focus:ring-2 focus:ring-blue-500/25 cursor-pointer
                                            {{ $item->status == 'Menunggu Konfirmasi' ? 'border-amber-200 bg-amber-50 text-amber-700' : '' }}
                                            {{ $item->status == 'Terkonfirmasi' ? 'border-blue-200 bg-blue-50 text-blue-700' : '' }}
                                            {{ $item->status == 'Selesai' ? 'border-emerald-200 bg-emerald-50 text-emerald-700' : '' }}"
                                        >
                                            <option value="Menunggu Konfirmasi" class="bg-white text-slate-800" {{ $item->status == 'Menunggu Konfirmasi' ? 'selected' : '' }}>Menunggu Konfirmasi</option>
                                            <option value="Terkonfirmasi" class="bg-white text-slate-800" {{ $item->status == 'Terkonfirmasi' ? 'selected' : '' }}>Terkonfirmasi</option>
                                            <option value="Selesai" class="bg-white text-slate-800" {{ $item->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                        </select>

                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2.5">
                                            <svg class="h-3.5 w-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                            </svg>
                                        </div>
                                    </div>
                                </form>
                            </td>

                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="px-6 py-16">
                                <div class="flex flex-col items-center justify-center text-center">
                                    <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-slate-100 text-slate-400">
                                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="1.6"
                                                d="M9 12h6m-6 4h4m-7 5h12a2 2 0 002-2V7.828a2 2 0 00-.586-1.414l-3.828-3.828A2 2 0 0010.172 2H7a2 2 0 00-2 2v15a2 2 0 002 2z"
                                            />
                                        </svg>
                                    </div>
                                    <h3 class="mt-4 text-sm font-bold text-slate-700">
                                        Belum Ada Pengajuan
                                    </h3>
                                    <p class="mt-1 max-w-sm text-sm leading-relaxed text-slate-400">
                                        Data pengajuan layanan yang masuk akan ditampilkan di halaman ini.
                                    </p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>


            {{-- =====================================================
                 PAGINATION
                 ===================================================== --}}
            <div class="border-t border-[#E1EAF2] bg-white px-5 py-4 sm:px-7">
                @if(isset($riwayatAntrean) && method_exists($riwayatAntrean, 'links'))
                    {{ $riwayatAntrean->links() }}
                @else
                    <div class="text-xs text-slate-400">
                        Menampilkan {{ count($riwayatAntrean ?? []) }} riwayat
                    </div>
                @endif
            </div>

        </section>

    </div>

</main>
@endsection