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
<a href="{{ route('home') }}"
   class="px-4 py-2 text-sm font-medium text-slate-600 hover:text-blue-700 transition">
    Beranda
</a>
                  
                </div>
            </div>
        </div>
    </nav>
</body>
</html>