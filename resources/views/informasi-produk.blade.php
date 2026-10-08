@extends('layouts.logged-in')

@section('title', 'SEDOLOR')
<link rel="icon" type="image/png" href="{{ asset('assets/logosedolor.png') }}">

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/html-to-image/1.11.11/html-to-image.min.js"></script>

<div class="min-h-screen bg-gradient-to-br from-slate-50 via-slate-100/50 to-blue-50/30 py-8 px-3 sm:px-6 lg:px-8 font-sans text-slate-900">
    <div class="max-w-[96%] xl:max-w-[90%] mx-auto space-y-8">
        
        {{-- Header Banner --}}
        <header class="relative overflow-hidden bg-gradient-to-r from-blue-900 via-blue-800 to-indigo-950 rounded-3xl p-6 sm:p-10 text-white shadow-xl">
            <div class="absolute -right-12 -bottom-12 w-64 h-64 bg-blue-500/10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="relative z-10 space-y-3">
                <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-white/10 text-blue-200 text-xs font-semibold backdrop-blur-md">
                    <svg class="w-4 h-4 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Layanan Terpadu BPOM Palembang
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-tight">SEDOLOR</h1>
                <p class="text-base sm:text-lg text-blue-100/90 font-medium leading-relaxed max-w-4xl">
                    SistEm penDaftaran Online Layanan informasi, LabOratorium dan Registrasi
                </p>
            </div>
        </header>

        {{-- Main Content Form --}}
        <main class="bg-white rounded-3xl shadow-xl shadow-slate-200/50 border border-slate-200/80 p-6 sm:p-10 space-y-8">
            <div class="border-b border-slate-100 pb-4">
                <h2 class="text-xl font-bold text-slate-900">Formulir Pendaftaran Layanan</h2>
                <p class="text-sm text-slate-500">Silakan lengkapi data di bawah ini untuk mendapatkan nomor antrean secara online.</p>
            </div>

            <form id="pendaftaranForm" onsubmit="submitPendaftaran(event)" class="space-y-8">
                @csrf
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8">
                    
                    {{-- Nama Lengkap --}}
                    <div class="space-y-2">
                        <label for="nama_lengkap" class="block text-sm font-bold text-slate-800">Nama Lengkap <span class="text-red-600">*</span></label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                            </div>
                            <input type="text" id="nama_lengkap" name="nama_lengkap" required placeholder="Masukkan nama lengkap" class="w-full pl-11 pr-4 py-3.5 text-base rounded-2xl border-2 border-slate-200 text-slate-900 bg-slate-50/50 focus:bg-white focus:border-blue-700 focus:ring-4 focus:ring-blue-100 outline-none transition min-h-[50px]">
                        </div>
                    </div>

                    {{-- Tingkat Prioritas / Kategori --}}
                    <div class="space-y-2">
                        <label for="prioritas" class="block text-sm font-bold text-slate-800">Kategori / Prioritas <span class="text-red-600">*</span></label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                </svg>
                            </div>
                            <select id="prioritas" name="prioritas" required class="w-full pl-11 pr-4 py-3.5 text-base rounded-2xl border-2 border-slate-200 text-slate-900 bg-slate-50/50 focus:bg-white focus:border-blue-700 focus:ring-4 focus:ring-blue-100 outline-none transition min-h-[50px]">
                                <option value="" disabled selected>Pilih Kategori Pengunjung</option>
                                <option value="Umum">Umum</option>
                                <option value="Ibu Hamil">Ibu Hamil</option>
                                <option value="Lansia">Lansia</option>
                                <option value="Disabilitas">Disabilitas</option>
                            </select>
                        </div>
                    </div>

                    {{-- Tanggal Permintaan --}}
                    <div class="space-y-2">
                        <label for="tanggal_permintaan" class="block text-sm font-bold text-slate-800">Tanggal Permintaan Layanan <span class="text-red-600">*</span></label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <input type="date" id="tanggal_permintaan" name="tanggal_permintaan" value="{{ date('Y-m-d') }}" required class="w-full pl-11 pr-4 py-3.5 text-base rounded-2xl border-2 border-slate-200 text-slate-900 bg-slate-50/50 focus:bg-white focus:border-blue-700 focus:ring-4 focus:ring-blue-100 outline-none transition min-h-[50px]">
                        </div>
                    </div>

                    {{-- Jenis Layanan --}}
                    <div class="space-y-2">
                        <label for="jenis_layanan" class="block text-sm font-bold text-slate-800">Jenis Layanan <span class="text-red-600">*</span></label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                </svg>
                            </div>
                            <select id="jenis_layanan" name="jenis_layanan" required class="w-full pl-11 pr-4 py-3.5 text-base rounded-2xl border-2 border-slate-200 text-slate-900 bg-slate-50/50 focus:bg-white focus:border-blue-700 focus:ring-4 focus:ring-blue-100 outline-none transition min-h-[50px]">
                                <option value="" disabled selected>Pilih jenis layanan</option>
                                <option value="Permintaan Informasi">Permintaan Informasi</option>
                                <option value="Registrasi Produk">Registrasi Produk</option>
                                <option value="Pengujian Pihak Ketiga">Pengujian Pihak Ketiga</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="pt-6 border-t border-slate-100 flex flex-col sm:flex-row-reverse gap-4">
                    <button type="submit" id="btnSubmit" class="w-full sm:w-auto px-10 py-4 bg-blue-600 hover:bg-blue-700 active:bg-blue-800 text-white font-bold text-base rounded-2xl shadow-lg shadow-blue-600/25 transition-all duration-200 min-h-[52px] flex items-center justify-center space-x-2 cursor-pointer">
                        <span>Dapatkan Nomor Antrean</span>
                    </button>
                    <button type="reset" class="w-full sm:w-auto px-8 py-4 bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-base rounded-2xl transition text-center min-h-[52px] cursor-pointer">
                        Reset Form
                    </button>
                </div>
            </form>
        </main>
    </div>
</div>

{{-- Modal Tiket Antrean --}}
<div id="modalTiket" class="fixed inset-0 bg-slate-900/70 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4 overflow-y-auto">
    <div class="bg-white rounded-3xl shadow-2xl max-w-lg w-full overflow-hidden transition-all transform scale-95 opacity-0 duration-300" id="modalContent">
        
        <div id="kartuTiket" class="p-6 sm:p-8 bg-gradient-to-b from-blue-50 to-white border-b border-slate-200 text-slate-900">
            <div class="text-center space-y-2 border-b border-dashed border-slate-300 pb-4">
                <span class="text-xs font-bold tracking-widest text-blue-700 uppercase bg-blue-100 px-3.5 py-1 rounded-full">Tiket Antrean SEDOLOR</span>
                <h2 class="text-2xl font-black text-slate-900">LAYANAN PUBLIK TERPADU</h2>
                <p class="text-xs text-slate-500" id="ticketTanggal"></p>
            </div>

            <div class="my-6 text-center bg-white p-6 rounded-2xl border-2 border-blue-200 shadow-inner space-y-1">
                <p class="text-xs font-bold text-slate-500 uppercase tracking-wider">Nomor Antrean Anda</p>
                <p class="text-5xl font-black text-blue-700 tracking-tight" id="ticketNomor">---</p>
                <div class="pt-2 text-xs font-semibold text-emerald-700 flex items-center justify-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span>Estimasi Jam Pelayanan: <strong id="ticketJam" class="text-slate-900 text-sm">--:-- WIB</strong></span>
                </div>
            </div>

            <div class="space-y-2.5 text-xs text-slate-700 bg-slate-50 p-4 rounded-xl border border-slate-200">
                <div class="flex justify-between"><span class="text-slate-500">Nama:</span> <span class="font-bold text-right" id="ticketNama">-</span></div>
                <div class="flex justify-between"><span class="text-slate-500">Layanan:</span> <span class="font-bold text-right" id="ticketLayanan">-</span></div>
                <div class="flex justify-between"><span class="text-slate-500">Kategori / Prioritas:</span> <span class="font-bold text-right" id="ticketPrioritas">-</span></div>
            </div>

            <div class="mt-4 p-3 bg-amber-50 border border-amber-200 rounded-xl text-center text-amber-900 text-xs font-medium">
                Harap simpan bukti antrean ini dan tunjukkan kepada petugas / konfirmasi melalui WhatsApp Admin.
            </div>
        </div>

        <div class="p-6 bg-slate-50 space-y-3">
            <button onclick="downloadTiket()" class="w-full py-3.5 px-4 bg-blue-600 hover:bg-blue-700 active:bg-blue-800 text-white font-bold rounded-2xl text-sm flex items-center justify-center gap-2 transition-all duration-200 shadow-md hover:shadow-lg active:scale-[0.99] cursor-pointer">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                <span>Unduh Bukti Tiket (Gambar)</span>
            </button>

            <a id="btnWA" href="#" target="_blank" class="w-full py-3.5 px-4 bg-emerald-600 hover:bg-emerald-700 active:bg-emerald-800 text-white font-bold rounded-2xl text-sm flex items-center justify-center gap-2 transition-all duration-200 shadow-md hover:shadow-lg active:scale-[0.99] cursor-pointer">
                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                <span>Konfirmasi ke WhatsApp Admin</span>
            </a>

            <button onclick="tutupModal()" class="w-full py-2.5 px-4 text-slate-500 hover:text-slate-900 hover:bg-slate-200/60 active:bg-slate-200 font-semibold text-xs rounded-xl transition-all duration-200 cursor-pointer">
                Tutup
            </button>
        </div>
    </div>
</div>

{{-- Modal Pop-up Berhasil Mendaftar --}}
<div id="modalSukses" class="fixed inset-0 bg-slate-900/70 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl shadow-2xl max-w-sm w-full p-6 text-center space-y-4 transition-all transform scale-95 opacity-0 duration-300" id="modalSuksesContent">
        <div class="w-16 h-16 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mx-auto shadow-inner">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
            </svg>
        </div>
        <div class="space-y-1">
            <h3 class="text-xl font-black text-slate-900">Pendaftaran Berhasil!</h3>
            <p class="text-xs text-slate-500 leading-relaxed">
                Data pendaftaran layanan kamu telah sukses tersimpan di sistem.
            </p>
        </div>
        <button onclick="selesaiSemua()" class="w-full py-3.5 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-2xl text-sm transition shadow-md cursor-pointer">
            Mengerti & Lanjutkan
        </button>
    </div>
</div>

<script>
let dataTiketSaatIni = null;

function submitPendaftaran(event) {
    event.preventDefault();
    const form = document.getElementById('pendaftaranForm');
    const formData = new FormData(form);
    const btn = document.getElementById('btnSubmit');
    btn.disabled = true;
    btn.innerText = "Memproses...";
    
    fetch("{{ route('informasi-produk.store') }}", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}",
            "Accept": "application/json"
        },
        body: formData
    })
    .then(async response => {
        const data = await response.json();
        if (!response.ok) {
            throw new Error(data.message || 'Gagal menyimpan pendaftaran.');
        }
        return data;
    })
    .then(data => {
        dataTiketSaatIni = data;
        tampilkanModal(data);
        form.reset();
    })
    .catch(error => {
        alert("Terjadi kesalahan: " + error.message);
    })
    .finally(() => {
        btn.disabled = false;
        btn.innerText = "Dapatkan Nomor Antrean";
    });
}

function tampilkanModal(data) {
    document.getElementById('ticketNomor').innerText = data.nomor_antrean || 'A-001';
    document.getElementById('ticketJam').innerText = data.jam_pelayanan || '09:00 WIB';
    document.getElementById('ticketNama').innerText = data.nama || document.getElementById('nama_lengkap').value;
    document.getElementById('ticketLayanan').innerText = data.layanan || document.getElementById('jenis_layanan').value;
    document.getElementById('ticketPrioritas').innerText = data.prioritas || document.getElementById('prioritas').value;
    document.getElementById('ticketTanggal').innerText = data.tanggal || document.getElementById('tanggal_permintaan').value;

    const noWAAdmin = "6282133133179";
    const pesanWA = encodeURIComponent(
        `Halo Admin SEDOLOR, saya telah mendaftar layanan online.\n\n` +
        `• No. Antrean: ${data.nomor_antrean}\n` +
        `• Nama: ${data.nama}\n` +
        `• Tanggal: ${data.tanggal}\n` +
        `• Jam Pelayanan: ${data.jam_pelayanan}\n` +
        `• Layanan: ${data.layanan}\n` +
        `• Prioritas: ${data.prioritas}\n\n` +
        `Mohon info lebih lanjut. Terima kasih!`
    );
    document.getElementById('btnWA').href = `https://wa.me/${noWAAdmin}?text=${pesanWA}`;
    
    const modal = document.getElementById('modalTiket');
    const content = document.getElementById('modalContent');

    modal.classList.remove('hidden');

    setTimeout(() => {
        content.classList.remove('scale-95', 'opacity-0');
        content.classList.add('scale-100', 'opacity-100');
    }, 10);
}

function tutupModal() {
    const modalTiket = document.getElementById('modalTiket');
    const contentTiket = document.getElementById('modalContent');
    
    contentTiket.classList.remove('scale-100', 'opacity-100');
    contentTiket.classList.add('scale-95', 'opacity-0');
    
    setTimeout(() => {
        modalTiket.classList.add('hidden');
        tampilkanModalSukses();
    }, 200);
}

function tampilkanModalSukses() {
    const modalSukses = document.getElementById('modalSukses');
    const contentSukses = document.getElementById('modalSuksesContent');

    modalSukses.classList.remove('hidden');

    setTimeout(() => {
        contentSukses.classList.remove('scale-95', 'opacity-0');
        contentSukses.classList.add('scale-100', 'opacity-100');
    }, 10);
}

function selesaiSemua() {
    window.location.href = "{{ route('dashboard') }}";
}

function downloadTiket() {
    const kartu = document.getElementById('kartuTiket');
    const nomor = document.getElementById('ticketNomor').innerText.trim() || 'SEDOLOR';

    htmlToImage.toPng(kartu, { 
        cacheBust: true, 
        pixelRatio: 2, 
        backgroundColor: '#ffffff' 
    })
    .then(function (dataUrl) {
        const link = document.createElement('a');
        link.download = `Tiket-Antrean-${nomor}.png`;
        link.href = dataUrl;
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    })
    .catch(function (error) {
        console.error('Gagal unduh tiket:', error);
        alert('Gagal mengunduh gambar tiket: ' + error.message);
    });
}
</script>
@endsection