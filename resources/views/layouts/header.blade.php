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
    <div class="w-11 h-11 flex items-center justify-center">
        <img src="{{ asset('storage/assets/logosedolor.png') }}" alt="Logo SEDOLOR" class="w-full h-full object-contain"
             alt="Logo SEDULUR"
             class="w-5 h-5 object-contain">
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
</body>
</html>