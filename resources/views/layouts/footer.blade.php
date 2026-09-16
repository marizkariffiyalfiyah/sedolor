
    {{-- =====================================================
         FOOTER
         ===================================================== --}}

    <footer class="sedolor-footer">

        <div class="sedolor-container">


            <div class="footer-grid">


                <div class="footer-brand">

                    <div
                        class="footer-brand-mark"
                        style="
                            background: white;
                            padding: 4px;
                        "
                    >

                        <img
                            src="{{ asset('assets/logosedolor.png') }}"
                            alt="Logo SEDOLOR"
                            style="
                                width: 100%;
                                height: 100%;
                                object-fit: contain;
                                border-radius: 6px;
                            "
                        >

                    </div>


                    <div>

                        <strong>
                            SEDOLOR
                        </strong>


                        <p>
                            SEDOLOR merupakan layanan digital
                            yang membantu masyarakat memperoleh
                            informasi dan mengakses layanan BPOM
                            Palembang dengan lebih mudah.
                        </p>

                    </div>

                </div>


                <div>

                    <h3 class="footer-title">
                        Navigasi
                    </h3>


                    <div class="footer-links">

                        <a href="{{ route('home') }}">
                            Beranda
                        </a>


                        <a href="#layanan">
                            Layanan
                        </a>


                        <a href="#cara-kerja">
                            Cara Menggunakan
                        </a>


                        <a href="{{ route('informasi-produk') }}">
                            Informasi
                        </a>


                        <a href="#aksesibilitas">
                            Aksesibilitas
                        </a>

                    </div>

                </div>


                <div>

                    <h3 class="footer-title">
                        Akun
                    </h3>


                    <div class="footer-links">

                        <a href="{{ route('login') }}">
                            Masuk ke SEDOLOR
                        </a>


                        <a href="{{ route('register') }}">
                            Daftar Akun
                        </a>

                    </div>

                </div>

            </div>


            <div class="footer-bottom">

                <span>

                    © {{ date('Y') }} SEDOLOR.
                    Layanan Digital BPOM Palembang.

                </span>


                <span>

                    Dirancang dengan memperhatikan
                    aksesibilitas.

                </span>

            </div>

        </div>

    </footer>
