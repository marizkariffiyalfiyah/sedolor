{{-- Navbar --}}
<nav class="bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <div class="w-11 h-11 flex items-center justify-center shrink-0">
                    <img
                        src="{{ asset('assets/logosedolor.png') }}"
                        alt="Logo SEDOLOR"
                        class="w-full h-full object-contain"
                    >
                </div>

                <div>
                    <h1 class="font-bold text-slate-900 text-lg leading-tight">
                        SEDOLOR
                    </h1>

                    <p class="text-xs text-slate-500">
                        Layanan Digital BPOM
                    </p>
                </div>
            </a>

            {{-- Navigation --}}
            <div class="hidden md:flex items-center gap-3">

                <a
                    href="{{ route('home') }}"
                    class="px-4 py-2 text-sm font-medium text-slate-600 hover:text-blue-700 transition"
                >
                    Beranda
                </a>

                <a
                    href="{{ route('login') }}"
                    class="px-5 py-2.5 rounded-lg border border-blue-700 text-blue-700 font-semibold text-sm hover:bg-blue-50 transition"
                >
                    Masuk
                </a>

                <a
                    href="{{ route('register') }}"
                    class="px-5 py-2.5 rounded-lg bg-blue-700 text-white font-semibold text-sm hover:bg-blue-800 transition shadow-sm"
                >
                    Daftar Akun
                </a>

            </div>

        </div>
    </div>
</nav>