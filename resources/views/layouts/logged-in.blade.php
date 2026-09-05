<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Dashboard SEDOLOR')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 text-slate-800 antialiased">

    <!-- =====================================================
         HEADER KHUSUS PENGGUNA SETELAH LOGIN
         Ukuran dibuat mengikuti header Home
    ====================================================== -->

    <nav class="bg-white border-b border-slate-200 sticky top-0 z-50 shadow-sm">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="flex items-center justify-between h-20">

                <!-- =================================================
                     LOGO
                ================================================== -->

                <a
                    href="{{ route('dashboard') }}"
                    class="flex items-center gap-4 group"
                >

                    <!-- Logo -->
                    <div
                        class="w-12 h-12
                               bg-white
                               border border-slate-200
                               rounded-xl
                               shadow-sm
                               flex items-center justify-center
                               p-2
                               overflow-hidden
                               transition-transform
                               group-hover:scale-105"
                    >

                        <img
                            src="{{ asset('assets/logosedolor.png') }}"
                            alt="Logo SEDOLOR"
                            class="w-full h-full object-contain"
                        >

                    </div>

                    <!-- Nama -->
                    <div>

                        <h1
                            class="font-bold
                                   text-slate-900
                                   leading-tight"
                        >
                            SEDOLOR BPOM
                        </h1>

                        <p
                            class="text-xs
                                   text-slate-500"
                        >
                            Layanan Digital BPOM Palembang
                        </p>

                    </div>

                </a>


                <!-- =================================================
                     NAVIGASI PENGGUNA LOGIN
                ================================================== -->

                <div class="hidden md:flex items-center gap-10">

                    <!-- =============================================
                         BERANDA
                    ============================================== -->

                    <a
                        href="{{ route('home') }}"
                        class="text-sm
                               font-medium
                               text-slate-600
                               hover:text-blue-700
                               transition"
                    >
                        Beranda
                    </a>


                    <!-- =============================================
                         LAYANAN
                    ============================================== -->

                    <a
                        href="{{ route('pendaftaran.mulai') }}"
                        class="text-sm
                               font-medium
                               text-slate-600
                               hover:text-blue-700
                               transition"
                    >
                        Layanan
                    </a>


                    <!-- =============================================
                         JADWAL & ANTREAN
                    ============================================== -->

                    <a
                        href="/jadwal-antrean"
                        class="text-sm
                               font-medium
                               text-slate-600
                               hover:text-blue-700
                               transition"
                    >
                        Jadwal & Antrean
                    </a>


                    <!-- =============================================
                         BANTUAN
                    ============================================== -->

                    <a
                        href="{{ route('informasi-produk') }}"
                        class="text-sm
                               font-medium
                               text-slate-600
                               hover:text-blue-700
                               transition"
                    >
                        Bantuan
                    </a>


                    <!-- =================================================
                         PROFILE
                    ================================================== -->

                    <div class="relative">

                        <!-- =========================================
                             PROFILE BUTTON
                        ========================================== -->

                        <button
                            type="button"
                            id="profileButton"
                            aria-expanded="false"
                            aria-controls="profileDropdown"
                            class="flex
                                   items-center
                                   gap-2
                                   px-3
                                   py-2
                                   rounded-lg
                                   hover:bg-slate-100
                                   transition
                                   cursor-pointer"
                        >

                            <!-- USER ICON -->

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
                                aria-hidden="true"
                            >

                                <path d="M20 21a8 8 0 0 0-16 0" />

                                <circle
                                    cx="12"
                                    cy="7"
                                    r="4"
                                />

                            </svg>


                            <!-- NAMA USER -->

                            <span
                                class="text-sm
                                       font-semibold
                                       text-slate-700"
                            >
                                {{ auth()->check() ? auth()->user()->name : 'Pengguna SEDOLOR' }}
                            </span>


                            <!-- CHEVRON -->

                            <svg
                                id="profileChevron"
                                xmlns="http://www.w3.org/2000/svg"
                                width="17"
                                height="17"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="text-slate-500 transition-transform duration-200"
                                aria-hidden="true"
                            >

                                <path d="m6 9 6 6 6-6" />

                            </svg>

                        </button>


                        <!-- =================================================
                             PROFILE DROPDOWN
                        ================================================== -->

                        <div
                            id="profileDropdown"
                            class="hidden
                                   absolute
                                   right-0
                                   mt-2
                                   w-52
                                   bg-white
                                   border
                                   border-slate-200
                                   rounded-xl
                                   shadow-lg
                                   overflow-hidden
                                   z-[100]"
                        >

                            <!-- =========================================
                                 PROFIL SAYA
                            ========================================== -->

                            <a
                                href="/profil"
                                class="flex
                                       items-center
                                       gap-3
                                       px-4
                                       py-3
                                       text-sm
                                       text-slate-700
                                       hover:bg-slate-50
                                       transition"
                            >

                                <!-- USER ICON -->

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
                                    class="text-slate-500"
                                    aria-hidden="true"
                                >

                                    <circle
                                        cx="12"
                                        cy="8"
                                        r="4"
                                    />

                                    <path
                                        d="M4 21a8 8 0 0 1 16 0"
                                    />

                                </svg>

                                <span>
                                    Profil Saya
                                </span>

                            </a>


                            <!-- =========================================
                                 PEMBATAS
                            ========================================== -->

                            <div class="border-t border-slate-100"></div>


                            <!-- =========================================
                                 LOGOUT
                            ========================================== -->

                            <form
                                method="POST"
                                action="{{ route('logout') }}"
                            >

                                @csrf

                                <button
                                    type="submit"
                                    class="w-full
                                           flex
                                           items-center
                                           gap-3
                                           px-4
                                           py-3
                                           text-sm
                                           text-red-600
                                           hover:bg-red-50
                                           transition
                                           text-left
                                           cursor-pointer"
                                >

                                    <!-- LOGOUT ICON -->

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
                                        aria-hidden="true"
                                    >

                                        <path
                                            d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"
                                        />

                                        <polyline
                                            points="16 17 21 12 16 7"
                                        />

                                        <line
                                            x1="21"
                                            y1="12"
                                            x2="9"
                                            y2="12"
                                        />

                                    </svg>

                                    <span>
                                        Logout
                                    </span>

                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </nav>


    <!-- =====================================================
         CONTENT
    ====================================================== -->

    <main>

        @yield('content')

    </main>


    <!-- =====================================================
         PROFILE DROPDOWN SCRIPT
    ====================================================== -->

    <script>
    const profileButton = document.getElementById('profileButton');
    const profileDropdown = document.getElementById('profileDropdown');
    const profileChevron = document.getElementById('profileChevron');

    if (profileButton && profileDropdown) {

        profileButton.addEventListener('click', function () {

            const isOpen = !profileDropdown.classList.contains('hidden');

            if (isOpen) {
                profileDropdown.classList.add('hidden');
                profileButton.setAttribute('aria-expanded', 'false');

                if (profileChevron) {
                    profileChevron.classList.remove('rotate-180');
                }

            } else {
                profileDropdown.classList.remove('hidden');
                profileButton.setAttribute('aria-expanded', 'true');

                if (profileChevron) {
                    profileChevron.classList.add('rotate-180');
                }
            }
        });

        document.addEventListener('click', function (event) {

            if (
                !profileButton.contains(event.target) &&
                !profileDropdown.contains(event.target)
            ) {
                profileDropdown.classList.add('hidden');
                profileButton.setAttribute('aria-expanded', 'false');

                if (profileChevron) {
                    profileChevron.classList.remove('rotate-180');
                }
            }

        });
    }
</script>


</body>

</html>