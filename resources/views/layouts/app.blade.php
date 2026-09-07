<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'SEDOLOR BPOM')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 text-slate-800 antialiased">

    <!-- Navbar -->
    <nav class="bg-white border-b border-slate-200 sticky top-0 z-50 shadow-sm">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">

                <!-- LOGO -->
                <a href="{{ route('home') }}" class="flex items-center gap-4 group">

                    <div class="w-12 h-12 bg-white border border-slate-200 rounded-xl shadow-sm
                                flex items-center justify-center p-2 overflow-hidden
                                transition-transform group-hover:scale-105">

                        <img
                            src="{{ asset('assets/logosedolor.png') }}"
                            alt="Logo SEDOLOR"
                            class="w-full h-full object-contain"
                        >
                    </div>

                    <div>
                        <h1 class="font-bold text-slate-900 leading-tight">
                            SEDOLOR BPOM
                        </h1>

                        <p class="text-xs text-slate-500">
                            Layanan Digital BPOM Palembang
                        </p>
                    </div>

                </a>


                {{-- ================================================= --}}
                {{-- HEADER SEBELUM LOGIN --}}
                {{-- ================================================= --}}

                @guest

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

                @endguest


                {{-- ================================================= --}}
                {{-- HEADER SETELAH LOGIN --}}
                {{-- ================================================= --}}

                @auth

                    <div class="flex items-center gap-7">

                        <!-- Beranda -->
                        <a
                            href="{{ route('home') }}"
                            class="text-sm font-medium text-slate-600
                                   hover:text-blue-700 transition"
                        >
                            Beranda
                        </a>


                        <!-- Layanan -->
                        <a
                            href="{{ route('pendaftaran.mulai') }}"
                            class="text-sm font-medium text-slate-600
                                   hover:text-blue-700 transition"
                        >
                            Layanan
                        </a>


                        <!-- Jadwal & Antrean -->
                        <a
                            href="/jadwal-antrean"
                            class="text-sm font-medium text-slate-600
                                   hover:text-blue-700 transition"
                        >
                            Jadwal & Antrean
                        </a>


                        <!-- Bantuan -->
                        <a
                            href="{{ route('informasi-produk') }}"
                            class="text-sm font-medium text-slate-600
                                   hover:text-blue-700 transition"
                        >
                            Bantuan
                        </a>


                        <!-- PROFILE -->
                        <div class="relative">

                            <button
                                type="button"
                                onclick="toggleProfileMenu()"
                                class="flex items-center gap-2 px-3 py-2 rounded-lg
                                       hover:bg-slate-100 transition"
                            >

                                <!-- Icon User -->
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="21"
                                    height="21"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="text-slate-600"
                                >
                                    <path d="M20 21a8 8 0 0 0-16 0"/>
                                    <circle cx="12" cy="7" r="4"/>
                                </svg>


                                <!-- Nama -->
                                <span class="text-sm font-semibold text-slate-700">
                                    {{ auth()->user()->name }}
                                </span>


                                <!-- Arrow -->
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="17"
                                    height="17"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="text-slate-500"
                                >
                                    <path d="m6 9 6 6 6-6"/>
                                </svg>

                            </button>


                            <!-- Dropdown Profile -->
                            <div
                                id="profileMenu"
                                class="hidden absolute right-0 mt-2 w-52
                                       bg-white border border-slate-200
                                       rounded-xl shadow-lg overflow-hidden"
                            >

                                <!-- Profil Saya -->
                                <a
                                    href="/profil"
                                    class="flex items-center gap-3 px-4 py-3
                                           text-sm text-slate-700
                                           hover:bg-slate-50 transition"
                                >

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="18"
                                        height="18"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <circle cx="12" cy="8" r="4"/>
                                        <path d="M4 21a8 8 0 0 1 16 0"/>
                                    </svg>

                                    <span>Profil Saya</span>

                                </a>


                                <!-- Garis -->
                                <div class="border-t border-slate-100"></div>


                                <!-- Logout -->
                                <form
                                    method="POST"
                                    action="{{ route('logout') }}"
                                >

                                    @csrf

                                    <button
                                        type="submit"
                                        class="w-full flex items-center gap-3 px-4 py-3
                                               text-sm text-red-600
                                               hover:bg-red-50 transition text-left"
                                    >

                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="18"
                                            height="18"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        >
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                                            <polyline points="16 17 21 12 16 7"/>
                                            <line x1="21" y1="12" x2="9" y2="12"/>
                                        </svg>

                                        <span>Logout</span>

                                    </button>

                                </form>

                            </div>

                        </div>

                    </div>

                @endauth

            </div>
        </div>
    </nav>


    <!-- Content -->
    <main>
        @yield('content')
    </main>


    <!-- Profile Dropdown Script -->
    <script>

        function toggleProfileMenu() {

            const menu = document.getElementById('profileMenu');

            menu.classList.toggle('hidden');

        }


        // Tutup dropdown ketika klik di luar
        document.addEventListener('click', function(event) {

            const menu = document.getElementById('profileMenu');

            const button = event.target.closest('button');

            if (
                menu &&
                !menu.contains(event.target) &&
                !button
            ) {
                menu.classList.add('hidden');
            }

        });

    </script>

</body>
</html>