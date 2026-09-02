<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Produk BPOM</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 text-slate-800">

    <!-- Navbar -->
    <nav class="bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">

                <!-- Logo -->
                <a href="/" class="flex items-center gap-3">
                    <div class="w-11 h-11 rounded-xl bg-blue-700 flex items-center justify-center text-white font-bold text-lg">
                        BPOM
                    </div>

                    <div>
                        <h1 class="font-bold text-slate-900 text-lg leading-tight">
                            Registrasi Produk
                        </h1>
                        <p class="text-xs text-slate-500">
                            Layanan Pendaftaran Produk
                        </p>
                    </div>
                </a>

                <!-- Navigation -->
                <div class="hidden md:flex items-center gap-3">
                    <a href="#informasi"
                       class="px-4 py-2 text-sm font-medium text-slate-600 hover:text-blue-700 transition">
                        Informasi
                    </a>

                    <a href="#aksesibilitas"
                       class="px-4 py-2 text-sm font-medium text-slate-600 hover:text-blue-700 transition">
                        Aksesibilitas
                    </a>

                    <a href="{{ route('login') }}"
                       class="px-5 py-2.5 rounded-lg border border-blue-700 text-blue-700 font-semibold text-sm hover:bg-blue-50 transition">
                        Masuk
                    </a>

                    <a href="{{ route('register') }}"
                       class="px-5 py-2.5 rounded-lg bg-blue-700 text-white font-semibold text-sm hover:bg-blue-800 transition shadow-sm">
                        Daftar Akun
                    </a>
                </div>
            </div>
        </div>
    </nav>


    <!-- Hero -->
    <main>

        <section class="relative overflow-hidden bg-white">

            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-12 items-center min-h-[560px] py-16">

                    <!-- Text -->
                    <div>

                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 text-blue-700 text-sm font-semibold mb-6">
                            <span class="w-2 h-2 rounded-full bg-blue-600"></span>
                            Layanan Registrasi Produk
                        </div>

                        <h2 class="text-4xl lg:text-5xl font-bold tracking-tight text-slate-900 leading-tight">
                            Registrasi Produk
                            <span class="text-blue-700">BPOM</span>
                            Lebih Mudah
                        </h2>

                        <p class="mt-6 text-lg text-slate-600 leading-relaxed max-w-xl">
                            Ajukan pendaftaran produk secara online dengan proses yang
                            lebih mudah, terstruktur, transparan, dan dapat dipantau
                            secara berkala.
                        </p>

                        <div class="mt-8 flex flex-col sm:flex-row gap-4">

                            <a href="{{ route('register') }}"
                               class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-blue-700 text-white font-semibold hover:bg-blue-800 transition shadow-md">
                                Daftar Akun
                                <span>→</span>
                            </a>

                            <a href="{{ route('login') }}"
                               class="inline-flex items-center justify-center px-6 py-3.5 rounded-xl border border-slate-300 bg-white text-slate-700 font-semibold hover:bg-slate-50 transition">
                                Masuk ke Akun
                            </a>

                        </div>

                        <!-- Accessibility notice -->
                        <div class="mt-8 flex items-start gap-3">
                            <div class="w-9 h-9 shrink-0 rounded-lg bg-blue-50 flex items-center justify-center text-blue-700">
                                ♿
                            </div>

                            <div>
                                <p class="font-semibold text-slate-800 text-sm">
                                    Dirancang dengan prinsip aksesibilitas
                                </p>
                                <p class="text-sm text-slate-500 mt-1">
                                    Mendukung ukuran teks, kontras tinggi, navigasi keyboard,
                                    pembaca layar, dan input suara.
                                </p>
                            </div>
                        </div>

                    </div>


                    <!-- Illustration / Card -->
                    <div class="relative">

                        <div class="absolute -top-10 -right-10 w-72 h-72 bg-blue-100 rounded-full blur-3xl opacity-60"></div>
                        <div class="absolute -bottom-10 -left-10 w-72 h-72 bg-sky-100 rounded-full blur-3xl opacity-60"></div>

                        <div class="relative bg-slate-50 border border-slate-200 rounded-3xl p-6 shadow-xl">

                            <div class="bg-white rounded-2xl border border-slate-200 p-6">

                                <div class="flex items-center justify-between mb-6">
                                    <div>
                                        <p class="text-sm text-slate-500">
                                            Proses Registrasi
                                        </p>
                                        <h3 class="text-xl font-bold text-slate-900 mt-1">
                                            Pendaftaran Produk
                                        </h3>
                                    </div>

                                    <div class="w-12 h-12 rounded-xl bg-blue-700 text-white flex items-center justify-center font-bold">
                                        ✓
                                    </div>
                                </div>

                                <!-- Progress -->
                                <div class="space-y-5">

                                    <div class="flex items-center gap-4">
                                        <div class="w-10 h-10 rounded-full bg-blue-700 text-white flex items-center justify-center font-bold">
                                            1
                                        </div>

                                        <div class="flex-1">
                                            <p class="font-semibold text-slate-800">
                                                Data Pelaku Usaha
                                            </p>
                                            <p class="text-xs text-slate-500">
                                                Informasi pemohon
                                            </p>
                                        </div>

                                        <span class="text-green-600">✓</span>
                                    </div>

                                    <div class="h-5 border-l-2 border-blue-200 ml-5"></div>

                                    <div class="flex items-center gap-4">
                                        <div class="w-10 h-10 rounded-full bg-blue-700 text-white flex items-center justify-center font-bold">
                                            2
                                        </div>

                                        <div class="flex-1">
                                            <p class="font-semibold text-slate-800">
                                                Data Produk
                                            </p>
                                            <p class="text-xs text-slate-500">
                                                Informasi produk yang didaftarkan
                                            </p>
                                        </div>

                                        <span class="text-green-600">✓</span>
                                    </div>

                                    <div class="h-5 border-l-2 border-blue-200 ml-5"></div>

                                    <div class="flex items-center gap-4">
                                        <div class="w-10 h-10 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center font-bold">
                                            3
                                        </div>

                                        <div class="flex-1">
                                            <p class="font-semibold text-slate-800">
                                                Dokumen
                                            </p>
                                            <p class="text-xs text-slate-500">
                                                Upload dokumen persyaratan
                                            </p>
                                        </div>
                                    </div>

                                    <div class="h-5 border-l-2 border-slate-200 ml-5"></div>

                                    <div class="flex items-center gap-4">
                                        <div class="w-10 h-10 rounded-full bg-slate-100 text-slate-500 flex items-center justify-center font-bold">
                                            4
                                        </div>

                                        <div class="flex-1">
                                            <p class="font-semibold text-slate-700">
                                                Verifikasi
                                            </p>
                                            <p class="text-xs text-slate-500">
                                                Menunggu pemeriksaan petugas
                                            </p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </section>


        <!-- Information -->
        <section id="informasi" class="py-20 bg-slate-50">

            <div class="max-w-7xl mx-auto px-6 lg:px-8">

                <div class="text-center max-w-2xl mx-auto mb-12">
                    <p class="text-blue-700 font-semibold text-sm">
                        INFORMASI LAYANAN
                    </p>

                    <h2 class="mt-2 text-3xl font-bold text-slate-900">
                        Sebelum Melakukan Pendaftaran
                    </h2>

                    <p class="mt-4 text-slate-600">
                        Kenali kategori produk dan persyaratan yang diperlukan
                        sebelum mengajukan registrasi.
                    </p>
                </div>


                <div class="grid md:grid-cols-3 gap-6">

                    <!-- Card -->
                    <div class="bg-white rounded-2xl border border-slate-200 p-6 hover:shadow-lg transition">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-700 flex items-center justify-center text-xl mb-5">
                            📦
                        </div>

                        <h3 class="font-bold text-lg text-slate-900">
                            Kategori Produk
                        </h3>

                        <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                            Obat, kosmetik, pangan olahan, obat tradisional,
                            dan suplemen.
                        </p>

                        <a href="#"
                           class="inline-flex mt-5 text-sm font-semibold text-blue-700 hover:text-blue-800">
                            Lihat informasi →
                        </a>
                    </div>


                    <div class="bg-white rounded-2xl border border-slate-200 p-6 hover:shadow-lg transition">
                        <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-700 flex items-center justify-center text-xl mb-5">
                            📄
                        </div>

                        <h3 class="font-bold text-lg text-slate-900">
                            Persyaratan
                        </h3>

                        <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                            Siapkan dokumen dan informasi produk sesuai
                            kategori yang akan didaftarkan.
                        </p>

                        <a href="#"
                           class="inline-flex mt-5 text-sm font-semibold text-blue-700 hover:text-blue-800">
                            Lihat persyaratan →
                        </a>
                    </div>


                    <div class="bg-white rounded-2xl border border-slate-200 p-6 hover:shadow-lg transition">
                        <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-700 flex items-center justify-center text-xl mb-5">
                            🔎
                        </div>

                        <h3 class="font-bold text-lg text-slate-900">
                            Monitoring
                        </h3>

                        <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                            Pantau proses pengajuan dan status verifikasi
                            produk melalui akun Anda.
                        </p>

                        <a href="{{ route('login') }}"
                           class="inline-flex mt-5 text-sm font-semibold text-blue-700 hover:text-blue-800">
                            Cek status →
                        </a>
                    </div>

                </div>

            </div>

        </section>


        <!-- Accessibility -->
        <section id="aksesibilitas" class="py-16 bg-blue-700">

            <div class="max-w-7xl mx-auto px-6 lg:px-8">

                <div class="grid md:grid-cols-2 gap-10 items-center">

                    <div>
                        <p class="text-blue-200 font-semibold text-sm">
                            AKSESIBILITAS
                        </p>

                        <h2 class="mt-2 text-3xl font-bold text-white">
                            Registrasi yang Lebih Inklusif
                        </h2>

                        <p class="mt-4 text-blue-100 leading-relaxed">
                            Portal ini dirancang agar dapat digunakan oleh
                            pengguna dengan berbagai kebutuhan aksesibilitas.
                        </p>
                    </div>


                    <div class="grid grid-cols-2 gap-4">

                        <div class="bg-white/10 border border-white/20 rounded-xl p-4 text-white">
                            <div class="text-2xl mb-2">Aa</div>
                            <p class="font-semibold text-sm">
                                Ukuran Teks
                            </p>
                            <p class="text-xs text-blue-100 mt-1">
                                Perbesar teks sesuai kebutuhan
                            </p>
                        </div>

                        <div class="bg-white/10 border border-white/20 rounded-xl p-4 text-white">
                            <div class="text-2xl mb-2">◐</div>
                            <p class="font-semibold text-sm">
                                Kontras Tinggi
                            </p>
                            <p class="text-xs text-blue-100 mt-1">
                                Tampilan lebih mudah dibaca
                            </p>
                        </div>

                        <div class="bg-white/10 border border-white/20 rounded-xl p-4 text-white">
                            <div class="text-2xl mb-2">🔊</div>
                            <p class="font-semibold text-sm">
                                Pembaca Layar
                            </p>
                            <p class="text-xs text-blue-100 mt-1">
                                Mendukung teknologi pembaca layar
                            </p>
                        </div>

                        <div class="bg-white/10 border border-white/20 rounded-xl p-4 text-white">
                            <div class="text-2xl mb-2">⌨</div>
                            <p class="font-semibold text-sm">
                                Navigasi Keyboard
                            </p>
                            <p class="text-xs text-blue-100 mt-1">
                                Navigasi tanpa mouse
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>


    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-300">

        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-10">

            <div class="flex flex-col md:flex-row justify-between gap-6">

                <div>
                    <h3 class="font-bold text-white text-lg">
                        Registrasi Produk BPOM
                    </h3>

                    <p class="text-sm text-slate-400 mt-2 max-w-md">
                        Portal layanan pendaftaran produk secara online
                        dengan memperhatikan kemudahan dan aksesibilitas pengguna.
                    </p>
                </div>

                <div class="text-sm text-slate-400">
                    <p>Butuh bantuan?</p>
                    <p class="mt-1">
                        Silakan hubungi layanan informasi.
                    </p>
                </div>

            </div>

            <div class="border-t border-slate-800 mt-8 pt-6 text-xs text-slate-500">
                © {{ date('Y') }} Portal Registrasi Produk. Semua hak dilindungi.
            </div>

        </div>

    </footer>
<!-- Accessibility Button -->
<button
    type="button"
    id="accessibilityToggle"
    aria-label="Buka pengaturan aksesibilitas"
    aria-expanded="false"
    class="fixed bottom-6 right-6 z-50 w-14 h-14 rounded-full bg-blue-700 text-white text-2xl shadow-xl hover:bg-blue-800 hover:scale-105 transition focus:outline-none focus:ring-4 focus:ring-blue-300"
>
    ♿
</button>


<!-- Accessibility Panel -->
<div
    id="accessibilityPanel"
    class="hidden fixed bottom-24 right-6 z-50 w-80 bg-white border border-slate-200 rounded-2xl shadow-2xl p-5"
>
    <div class="flex items-center justify-between mb-4">
        <div>
            <h2 class="font-bold text-lg text-slate-900">
                Aksesibilitas
            </h2>
            <p class="text-xs text-slate-500">
                Sesuaikan tampilan sesuai kebutuhan
            </p>
        </div>

        <button
            type="button"
            id="accessibilityClose"
            aria-label="Tutup pengaturan aksesibilitas"
            class="w-8 h-8 rounded-lg bg-slate-100 text-slate-600 hover:bg-slate-200"
        >
            ✕
        </button>
    </div>


    <div class="space-y-3">

        <!-- Perbesar -->
        <button
            type="button"
            id="increaseText"
            class="w-full flex items-center justify-between px-4 py-3 rounded-xl border border-slate-200 hover:bg-slate-50"
        >
            <span class="font-medium text-slate-700">
                🔤 Perbesar teks
            </span>
            <span class="font-bold text-blue-700">
                A+
            </span>
        </button>


        <!-- Perkecil -->
        <button
            type="button"
            id="decreaseText"
            class="w-full flex items-center justify-between px-4 py-3 rounded-xl border border-slate-200 hover:bg-slate-50"
        >
            <span class="font-medium text-slate-700">
                🔡 Perkecil teks
            </span>
            <span class="font-bold text-blue-700">
                A−
            </span>
        </button>


        <!-- Kontras -->
        <button
            type="button"
            id="highContrast"
            class="w-full flex items-center justify-between px-4 py-3 rounded-xl border border-slate-200 hover:bg-slate-50"
        >
            <span class="font-medium text-slate-700">
                ◐ Kontras tinggi
            </span>
            <span class="font-bold text-blue-700">
                ON
            </span>
        </button>


        <!-- Underline -->
        <button
            type="button"
            id="underlineLinks"
            class="w-full flex items-center justify-between px-4 py-3 rounded-xl border border-slate-200 hover:bg-slate-50"
        >
            <span class="font-medium text-slate-700">
                🔗 Garis bawahi link
            </span>
            <span class="font-bold text-blue-700">
                ON
            </span>
        </button>


        <!-- Reset -->
        <button
            type="button"
            id="resetAccessibility"
            class="w-full px-4 py-3 rounded-xl bg-slate-900 text-white font-semibold hover:bg-slate-800"
        >
            🔄 Reset tampilan
        </button>

    </div>
</div>

</body>
</html>