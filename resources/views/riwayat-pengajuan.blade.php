@extends('layouts.logged-in')

@section('title', __('SEDOLOR'))
<link rel="icon" type="image/png" href="{{ asset('assets/logosedolor.png') }}">

@section('content')
<div class="w-full bg-[#EEF4FA] py-6 md:py-8 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Header Card dengan Sentuhan Gradasi & Tombol Aksi --}}
        <div class="relative overflow-hidden bg-gradient-to-r from-blue-900 via-blue-800 to-indigo-900 rounded-2xl shadow-xl p-6 md:p-8 mb-6 text-white">
            <div class="absolute -right-10 -bottom-10 w-60 h-60 bg-blue-500/10 rounded-full blur-3xl pointer-events-none"></div>
            
            <div class="relative z-10 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div>
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-blue-200 text-xs font-semibold mb-3 backdrop-blur-md">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        {{ __('Sistem Pemantauan Terpadu') }}
                    </div>
                    <h1 class="text-2xl sm:text-3xl font-black tracking-tight text-white">
                        {{ __('Riwayat Pengajuan Antrean') }}
                    </h1>
                    <p class="text-sm text-blue-100/80 mt-1 max-w-xl">
                        {{ __('Pantau status pemrosesan permohonan layanan, jadwal, serta nomor antrean Anda secara real-time.') }}
                    </p>
                </div>

                <a href="{{ route('informasi-produk') }}" class="inline-flex items-center justify-center gap-2 bg-white text-blue-900 font-bold text-sm px-5 py-3 rounded-xl shadow-lg hover:bg-blue-50 transition-all duration-200 hover:-translate-y-0.5 shrink-0">
                    <svg class="w-4 h-4 text-blue-700" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path>
                    </svg>
                    {{ __('Buat Pengajuan Baru') }}
                </a>
            </div>
        </div>

        {{-- Alert Notification --}}
        @if(session('success'))
            <div class="mb-6 p-4 rounded-xl bg-green-50 border border-green-200 text-green-700 flex items-center justify-between shadow-sm">
                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span class="text-sm font-medium">{{ session('success') }}</span>
                </div>
            </div>
        @endif

        {{-- Content Table Container --}}
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            @if($informasi_produks->count() > 0)
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-50 text-gray-600 text-xs uppercase tracking-wider border-b border-gray-200">
                                <th class="py-3 px-4 w-12 text-center">No</th>
                                <th class="py-3 px-4">No Antrean</th>
                                <th class="py-3 px-4">Nama Lengkap</th>
                                <th class="py-3 px-4">Jenis Layanan</th>
                                <th class="py-3 px-4">Prioritas</th>
                                <th class="py-3 px-4">Tanggal</th>
                                <th class="py-3 px-4">Estimasi Jam</th>
                                <th class="py-3 px-4 text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 text-sm">
                            @foreach($informasi_produks as $index => $item)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="py-4 px-4 text-center font-medium text-gray-400">
                                        {{ $informasi_produks->firstItem() + $index }}
                                    </td>
                                    <td class="py-4 px-4 whitespace-nowrap">
                                        <span class="px-3 py-1 bg-indigo-50 text-indigo-700 border border-indigo-200 rounded-md font-semibold text-xs">
                                            {{ $item->nomor_antrean }}
                                        </span>
                                    </td>
                                    <td class="py-4 px-4 font-semibold text-gray-800 whitespace-nowrap">
                                        {{ $item->nama_lengkap }}
                                    </td>
                                    <td class="py-4 px-4 text-gray-600">
                                        {{ $item->jenis_layanan }}
                                    </td>
                                    <td class="py-4 px-4 whitespace-nowrap">
                                        @php
                                            $prioritas = strtolower(trim($item->prioritas ?? 'umum'));
                                        @endphp

                                        @if(str_contains($prioritas, 'hamil'))
                                            {{-- PINK untuk Ibu Hamil --}}
                                            <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-xs font-medium bg-pink-100 text-pink-800">
                                                {{ $item->prioritas }}
                                            </span>
                                        @elseif(str_contains($prioritas, 'lansia'))
                                            {{-- AMBER/KUNING HANGAT untuk Lansia --}}
                                            <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800">
                                                {{ $item->prioritas }}
                                            </span>
                                        @elseif(str_contains($prioritas, 'disabilitas'))
                                            {{-- HIJAU untuk Disabilitas --}}
                                            <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800">
                                                {{ $item->prioritas }}
                                            </span>
                                        @else
                                            {{-- BIRU untuk Umum --}}
                                            <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                                {{ $item->prioritas ?? 'Umum' }}
                                            </span>
                                        @endif
                                    </td>
                                    <td class="py-4 px-4 text-gray-600 whitespace-nowrap">
                                        {{ \Carbon\Carbon::parse($item->tanggal_permintaan)->translatedFormat('d M Y') }}
                                    </td>
                                    <td class="py-4 px-4 text-gray-500 whitespace-nowrap">
                                        {{ $item->estimasi_jam }}
                                    </td>
                                    <td class="py-4 px-4 text-center whitespace-nowrap">
                                        @php
                                            $status = $item->status ?? 'Menunggu Konfirmasi';
                                        @endphp

                                        @if($status == 'Selesai')
                                            <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                                Selesai
                                            </span>
                                        @elseif($status == 'Terkonfirmasi')
                                            <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                                                <span class="w-1.5 h-1.5 rounded-full bg-indigo-500 animate-pulse"></span>
                                                Terkonfirmasi
                                            </span>
                                        @else
                                            <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-xs font-medium bg-amber-100 text-amber-800">
                                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                                                Menunggu Konfirmasi
                                            </span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- Navigasi Pagination --}}
                <div class="p-4 border-t border-gray-100 bg-gray-50">
                    {{ $informasi_produks->links() }}
                </div>
            @else
                {{-- Empty State --}}
                <div class="text-center py-12">
                    <svg class="mx-auto h-12 w-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                    </svg>
                    <h3 class="mt-2 text-sm font-semibold text-gray-900">Belum Ada Riwayat Pengajuan</h3>
                    <p class="mt-1 text-sm text-gray-500">Anda belum membuat pengajuan antrean saat ini.</p>
                </div>
            @endif
        </div>

    </div>
</div>
@endsection