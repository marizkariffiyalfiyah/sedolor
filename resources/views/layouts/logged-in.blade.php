<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'SEDOLOR')
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 text-slate-800">

    <!-- =====================================================
         NAVBAR
    ====================================================== -->

    <nav class="border-b border-slate-200 bg-white">
        <div class="mx-auto w-full max-w-7xl px-6 lg:px-8">
            <div class="flex h-20 items-center justify-between">

                <!-- LOGO -->
                <a
                    href="{{ route('dashboard') }}"
                    class="flex items-center gap-3"
                >

                    <div class="flex h-11 w-11 shrink-0 items-center justify-center">
                        <img
                            src="{{ asset('assets/logosedolor.png') }}"
                            alt="Logo SEDOLOR"
                            class="block h-11 w-11 object-contain"
                        >
                    </div>

                    <div>
                        <h1 class="text-lg font-bold leading-tight text-slate-900">
                            SEDOLOR
                        </h1>

                        <p class="text-xs text-slate-500">
                            Layanan Digital BPOM
                        </p>
                    </div>

                </a>


                <!-- NAVIGATION -->
                <div class="flex items-center gap-3">

                    <!-- BERANDA -->
                    <a
                        href="{{ route('home') }}"
                        class="hidden rounded-xl px-4 py-2 text-sm font-medium text-slate-600 transition hover:bg-blue-50 hover:text-blue-700 md:inline-flex"
                    >
                        Beranda
                    </a>


                    <!-- LOGOUT -->
                    <form
                        action="{{ route('logout') }}"
                        method="POST"
                        class="m-0"
                    >

                        @csrf

                        <button
                            type="submit"
                            class="inline-flex items-center gap-2 rounded-xl px-4 py-2 text-sm font-bold text-red-600 transition hover:bg-red-50 hover:text-red-700 focus:outline-none focus:ring-4 focus:ring-red-100"
                        >

                            <svg
                                class="h-5 w-5"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M10 17l5-5-5-5"
                                />

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15 12H3"
                                />

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M21 5v14"
                                />
                            </svg>

                            <span>
                                Keluar
                            </span>

                        </button>

                    </form>

                </div>

            </div>
        </div>
    </nav>


    <!-- =====================================================
         CONTENT
    ====================================================== -->

    @yield('content')


</body>
</html>