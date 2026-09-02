<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Registrasi Produk BPOM')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 text-slate-800 antialiased">

    <!-- Navbar -->
    <nav class="bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">

                <a href="/" class="flex items-center gap-3">
                    <div class="w-11 h-11 rounded-xl bg-blue-700
                                flex items-center justify-center
                                text-white font-bold text-xs">
                        BPOM
                    </div>

                    <div>
                        <h1 class="font-bold text-slate-900">
                            Registrasi Produk BPOM
                        </h1>

                        <p class="text-xs text-slate-500">
                            Layanan Pendaftaran Produk
                        </p>
                    </div>
                </a>

                <div class="flex items-center gap-3">

                    <a
                        href="{{ route('login') }}"
                        class="px-4 py-2 text-sm font-medium text-slate-600
                               hover:text-blue-700 transition"
                    >
                        Masuk
                    </a>

                    <a
                        href="{{ route('register') }}"
                        class="px-5 py-2.5 rounded-lg
                               bg-blue-700 text-white
                               text-sm font-semibold
                               hover:bg-blue-800 transition"
                    >
                        Daftar Akun
                    </a>

                </div>

            </div>
        </div>
    </nav>


    <!-- Content -->
    <main>
        @yield('content')
    </main>

</body>
</html>