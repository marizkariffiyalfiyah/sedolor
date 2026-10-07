{{-- =====================================================
     SEDOLOR FOOTER
     ===================================================== --}}

<footer class="relative overflow-hidden bg-[#0B2342] text-white">

    {{-- Decorative Background --}}
    <div
        class="pointer-events-none absolute -right-32 -top-32 h-[420px] w-[420px] rounded-full border border-white/[0.06]"
    ></div>

    <div
        class="pointer-events-none absolute -right-20 -top-20 h-[280px] w-[280px] rounded-full border border-white/[0.05]"
    ></div>

    <div
        class="pointer-events-none absolute -bottom-40 -left-40 h-[420px] w-[420px] rounded-full bg-[#155EEF]/10 blur-3xl"
    ></div>


    <div
        class="relative mx-auto w-[min(1180px,calc(100%-48px))] max-[520px]:w-[calc(100%-32px)]"
    >

        {{-- =====================================================
             FOOTER MAIN
             ===================================================== --}}

        <div
            class="grid grid-cols-[1.6fr_1fr_1fr] gap-16 py-14
                   max-[900px]:grid-cols-2
                   max-[900px]:gap-10
                   max-[600px]:grid-cols-1
                   max-[600px]:gap-8
                   max-[600px]:py-10"
        >

            {{-- =================================================
                 BRAND
                 ================================================= --}}

            <div class="max-w-[480px]">

                <div class="mb-5 flex items-center gap-4">

                    {{-- Logo --}}
                    <div
                        class="flex h-[58px] w-[58px] shrink-0 items-center justify-center rounded-[15px] bg-white p-[7px] shadow-[0_8px_24px_rgba(0,0,0,0.18)]"
                    >
                        <img
                            src="{{ asset('assets/logosedolor.png') }}"
                            alt="Logo SEDOLOR"
                            class="block h-full w-full object-contain"
                        >
                    </div>

                    <div>
                        <h2 class="m-0 text-[22px] font-black tracking-tight text-white">
                            SEDOLOR
                        </h2>

                        <p class="m-0 mt-1 text-xs font-medium text-[#AFC6E5]">
                            Sistem Pendaftaran Online Layanan Informasi, Laboratorium &amp; Registrasi
                        </p>
                    </div>

                </div>

                <p
                    class="m-0 max-w-[440px] text-[14px] leading-7 text-[#B9C9DC]
                           max-[600px]:max-w-full"
                >
                    Platform layanan informasi publik yang membantu masyarakat
                    memperoleh informasi produk, layanan, dan pengaduan secara
                    mudah, jelas, dan aksesibel.
                </p>

                {{-- Accessibility Badge --}}
                <div
                    class="mt-6 inline-flex max-w-full items-center gap-2 rounded-full border border-white/10 bg-white/[0.06] px-3 py-2 text-xs font-semibold text-[#DCE9F8]
                           max-[600px]:rounded-xl"
                >
                    <svg
                        class="h-4 w-4 shrink-0 text-[#8FC3FF]"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                    >
                        <circle cx="12" cy="12" r="9"></circle>
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M8 12h8M12 8v8"
                        ></path>
                    </svg>

                    <span>
                        Layanan dirancang dengan prinsip aksesibilitas
                    </span>
                </div>

            </div>


            {{-- =================================================
                 INFORMASI
                 ================================================= --}}

            <div>

                <h3 class="mb-5 text-[15px] font-extrabold text-white">
                    Informasi
                </h3>

                <nav
                    aria-label="Informasi"
                    class="flex flex-col gap-3"
                >

                    <a
                        href="#"
                        class="group inline-flex w-fit items-center gap-2 text-[14px] text-[#AFC1D6] transition-all duration-200 hover:translate-x-1 hover:text-white"
                    >
                        Tentang SEDOLOR

                        <svg
                            class="h-3.5 w-3.5 opacity-0 transition-all duration-200 group-hover:translate-x-0.5 group-hover:opacity-100"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 5l7 7-7 7"
                            />
                        </svg>
                    </a>

                    <a
                        href="#layanan"
                        class="group inline-flex w-fit items-center gap-2 text-[14px] text-[#AFC1D6] transition-all duration-200 hover:translate-x-1 hover:text-white"
                    >
                        Layanan Publik

                        <svg
                            class="h-3.5 w-3.5 opacity-0 transition-all duration-200 group-hover:translate-x-0.5 group-hover:opacity-100"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 5l7 7-7 7"
                            />
                        </svg>
                    </a>

                    <a
                        href="#"
                        class="group inline-flex w-fit items-center gap-2 text-[14px] text-[#AFC1D6] transition-all duration-200 hover:translate-x-1 hover:text-white"
                    >
                        Panduan Pengguna

                        <svg
                            class="h-3.5 w-3.5 opacity-0 transition-all duration-200 group-hover:translate-x-0.5 group-hover:opacity-100"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 5l7 7-7 7"
                            />
                        </svg>
                    </a>

                    <a
                        href="https://ampera-bbpom.vercel.app/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="group inline-flex w-fit items-center gap-2 text-[14px] text-[#AFC1D6] transition-all duration-200 hover:translate-x-1 hover:text-white"
                    >
                        Layanan Pengaduan

                        <svg
                            class="h-3.5 w-3.5 opacity-0 transition-all duration-200 group-hover:translate-x-0.5 group-hover:opacity-100"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 5l7 7-7 7"
                            />
                        </svg>
                    </a>

                </nav>

            </div>


            {{-- =================================================
                 MEDIA SOSIAL
                 ================================================= --}}

            <div>

                <h3 class="mb-5 text-[15px] font-extrabold text-white">
                    Media Sosial
                </h3>

                <nav
                    aria-label="Media Sosial BBPOM Palembang"
                    class="flex flex-col gap-3"
                >

                    {{-- Instagram --}}
                    <a
                        href="https://www.instagram.com/bpom.palembang?stkn=eGVncXg2bzhkazhp"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="group inline-flex w-fit items-center gap-2.5 text-[14px] text-[#AFC1D6] transition-all duration-200 hover:translate-x-1 hover:text-white"
                    >
                        <svg class="h-4 w-4 shrink-0 transition-colors duration-200 group-hover:text-[#E4405F]"
                            fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                fill-rule="evenodd"
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.28-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618-6.979-6.98-.059-1.28-.073-1.689-.073-4.948 0-3.259.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"
                                clip-rule="evenodd"
                            />
                        </svg>
                        Instagram

                        <svg class="h-3.5 w-3.5 opacity-0 transition-all duration-200 group-hover:translate-x-0.5 group-hover:opacity-100"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>

                    {{-- Facebook --}}
                    <a
                        href="https://www.facebook.com/share/1By5XkpSkU/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="group inline-flex w-fit items-center gap-2.5 text-[14px] text-[#AFC1D6] transition-all duration-200 hover:translate-x-1 hover:text-white"
                    >
                        <svg class="h-4 w-4 shrink-0 transition-colors duration-200 group-hover:text-[#1877F2]"
                            fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.891h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd"
                            />
                        </svg>
                        Facebook

                        <svg class="h-3.5 w-3.5 opacity-0 transition-all duration-200 group-hover:translate-x-0.5 group-hover:opacity-100"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>

                    {{-- YouTube --}}
                    <a
                        href="https://youtube.com/@bbpom_palembang?si=GKh_2qa339womLm3"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="group inline-flex w-fit items-center gap-2.5 text-[14px] text-[#AFC1D6] transition-all duration-200 hover:translate-x-1 hover:text-white"
                    >
                        <svg class="h-4 w-4 shrink-0 transition-colors duration-200 group-hover:text-[#FF0000]"
                            fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                fill-rule="evenodd"
                                d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.254.418-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 12 5 12 5s6.256 0 7.812.418zM9.75 15.02l5.75-3.02-5.75-3.02v6.04z"
                                clip-rule="evenodd"
                            />
                        </svg>
                        YouTube

                        <svg class="h-3.5 w-3.5 opacity-0 transition-all duration-200 group-hover:translate-x-0.5 group-hover:opacity-100"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>

                    {{-- Twitter / X --}}
                    <a
                        href="https://x.com/bpompalembang?s=11"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="group inline-flex w-fit items-center gap-2.5 text-[14px] text-[#AFC1D6] transition-all duration-200 hover:translate-x-1 hover:text-white"
                    >
                        <svg class="h-3.5 w-3.5 shrink-0 transition-colors duration-200 group-hover:text-white"
                            fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                        </svg>
                        Twitter / X

                        <svg class="h-3.5 w-3.5 opacity-0 transition-all duration-200 group-hover:translate-x-0.5 group-hover:opacity-100"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>

                    {{-- Website Resmi --}}
                    <a
                        href="https://palembang.pom.go.id/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="group inline-flex w-fit items-center gap-2.5 text-[14px] text-[#AFC1D6] transition-all duration-200 hover:translate-x-1 hover:text-white"
                    >
                        <svg class="h-4 w-4 shrink-0 transition-colors duration-200 group-hover:text-[#3B82F6]"
                            fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 21a9 9 0 100-18 9 9 0 000 18zM2.05 10.5h19.9M2.05 13.5h19.9M12 2.05c2.454 2.558 3.86 5.862 3.95 9.45a16.892 16.892 0 01-3.95 9.45c-2.454-2.558-3.86-5.862-3.95-9.45a16.892 16.892 0 013.95-9.45z"
                            />
                        </svg>
                        Website Resmi

                        <svg class="h-3.5 w-3.5 opacity-0 transition-all duration-200 group-hover:translate-x-0.5 group-hover:opacity-100"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>

                </nav>

            </div>

        </div>


        {{-- =====================================================
             DIVIDER
             ===================================================== --}}

        <div class="h-px w-full bg-white/[0.10]"></div>


        {{-- =====================================================
             FOOTER BOTTOM
             ===================================================== --}}

        <div
            class="flex min-h-[76px] items-center justify-between gap-5
                   max-[600px]:flex-col
                   max-[600px]:items-start
                   max-[600px]:justify-center
                   max-[600px]:gap-3
                   max-[600px]:py-5"
        >

            <p
                class="m-0 text-[12px] leading-6 text-[#8196B0]
                       max-[600px]:w-full"
            >
                © {{ date('Y') }} SEDOLOR. Seluruh hak cipta dilindungi.
            </p>

            <div
                class="flex items-center gap-5
                       max-[600px]:w-full
                       max-[600px]:flex-wrap
                       max-[600px]:gap-x-4
                       max-[600px]:gap-y-2"
            >

                <a
                    href="#"
                    class="text-[12px] text-[#8196B0] transition-colors hover:text-white"
                >
                    Kebijakan Privasi
                </a>

                <span class="h-1 w-1 shrink-0 rounded-full bg-[#607892]"></span>

                <a
                    href="#"
                    class="text-[12px] text-[#8196B0] transition-colors hover:text-white"
                >
                    Aksesibilitas
                </a>

                <span class="h-1 w-1 shrink-0 rounded-full bg-[#607892]"></span>

                <a
                    href="#"
                    class="text-[12px] text-[#8196B0] transition-colors hover:text-white"
                >
                    Bantuan
                </a>

            </div>

        </div>

    </div>

</footer>