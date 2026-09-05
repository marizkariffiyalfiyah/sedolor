@extends('layouts.logged-in')

@section('title', 'Pendaftaran Layanan - SEDOLOR')

@section('content')

<style>
    :root {
        --primary: #155EEF;
        --primary-dark: #0B45C4;
        --primary-soft: #E8F0FF;

        --navy: #102A43;
        --text: #18324B;
        --muted: #5B6B7D;

        --page-bg: #EEF4FA;
        --white: #FFFFFF;
        --border: #CFDCE9;

        --shadow-sm: 0 4px 14px rgba(16, 42, 67, 0.06);
        --shadow-md: 0 10px 28px rgba(16, 42, 67, 0.09);

        --radius-lg: 18px;
        --radius-md: 14px;
    }

    .registration-page {
        min-height: calc(100vh - 80px);
        background: var(--page-bg);
        padding: 42px 24px 70px;
    }

    .registration-container {
        max-width: 1180px;
        margin: 0 auto;
    }

    /* =========================
       PAGE HEADER
    ========================= */

    .page-heading {
        margin-bottom: 30px;
    }

    .page-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--primary-soft);
        color: var(--primary);
        border-radius: 999px;
        padding: 8px 14px;
        font-size: 13px;
        font-weight: 700;
        margin-bottom: 14px;
    }

    .page-badge svg {
        width: 17px;
        height: 17px;
    }

    .page-heading h1 {
        margin: 0 0 10px;
        color: var(--navy);
        font-size: 32px;
        line-height: 1.25;
        font-weight: 800;
        letter-spacing: -0.5px;
    }

    .page-heading p {
        margin: 0;
        max-width: 720px;
        color: var(--muted);
        font-size: 16px;
        line-height: 1.7;
    }

    /* =========================
       STEP INDICATOR
    ========================= */

    .steps-card {
        background: var(--white);
        border: 1px solid var(--border);
        border-radius: var(--radius-lg);
        padding: 20px 24px;
        margin-bottom: 30px;
        box-shadow: var(--shadow-sm);
    }

    .steps {
        display: flex;
        align-items: center;
        width: 100%;
    }

    .step {
        display: flex;
        align-items: center;
        gap: 10px;
        flex-shrink: 0;
    }

    .step-number {
        width: 34px;
        height: 34px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        font-weight: 800;
        background: #E8EDF3;
        color: var(--muted);
    }

    .step.active .step-number {
        background: var(--primary);
        color: white;
    }

    .step-text {
        font-size: 14px;
        font-weight: 700;
        color: var(--muted);
        white-space: nowrap;
    }

    .step.active .step-text {
        color: var(--primary);
    }

    .step-line {
        flex: 1;
        height: 1px;
        background: var(--border);
        margin: 0 18px;
    }

    /* =========================
       SERVICE SECTION
    ========================= */

    .section-title {
        margin-bottom: 18px;
    }

    .section-title h2 {
        margin: 0 0 6px;
        color: var(--navy);
        font-size: 22px;
        font-weight: 800;
    }

    .section-title p {
        margin: 0;
        color: var(--muted);
        font-size: 14px;
    }

    .service-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 20px;
    }

    .service-card {
        display: flex;
        flex-direction: column;
        background: var(--white);
        border: 1px solid var(--border);
        border-radius: var(--radius-lg);
        padding: 25px;
        min-height: 245px;
        box-shadow: var(--shadow-sm);
        transition: all 0.2s ease;
    }

    .service-card:hover {
        transform: translateY(-3px);
        border-color: #AFC5E0;
        box-shadow: var(--shadow-md);
    }

    .service-icon {
        width: 52px;
        height: 52px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--primary-soft);
        color: var(--primary);
        border-radius: 14px;
        margin-bottom: 18px;
    }

    .service-icon svg {
        width: 27px;
        height: 27px;
    }

    .service-card h3 {
        margin: 0 0 9px;
        color: var(--navy);
        font-size: 18px;
        font-weight: 800;
        line-height: 1.4;
    }

    .service-card p {
        margin: 0;
        color: var(--muted);
        font-size: 14px;
        line-height: 1.65;
    }

    .service-action {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: auto;
        padding-top: 22px;
    }

    .service-label {
        color: #718096;
        font-size: 12px;
        font-weight: 600;
    }

    .choose-button {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        border: none;
        background: var(--primary);
        color: white;
        border-radius: 10px;
        padding: 10px 15px;
        font-size: 13px;
        font-weight: 700;
        text-decoration: none;
        transition: background 0.2s ease;
    }

    .choose-button:hover {
        background: var(--primary-dark);
    }

    .choose-button svg {
        width: 16px;
        height: 16px;
    }

    /* =========================
       INFORMATION BOX
    ========================= */

    .help-card {
        margin-top: 28px;
        background: var(--primary-soft);
        border: 1px solid #C9D9F7;
        border-radius: var(--radius-lg);
        padding: 22px 24px;
        display: flex;
        align-items: flex-start;
        gap: 15px;
    }

    .help-icon {
        width: 40px;
        height: 40px;
        flex: 0 0 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: white;
        color: var(--primary);
        border-radius: 10px;
    }

    .help-icon svg {
        width: 21px;
        height: 21px;
    }

    .help-content h3 {
        margin: 0 0 5px;
        color: var(--navy);
        font-size: 15px;
        font-weight: 800;
    }

    .help-content p {
        margin: 0;
        color: var(--muted);
        font-size: 13px;
        line-height: 1.6;
    }

    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 768px) {
        .registration-page {
            padding: 30px 16px 50px;
        }

        .page-heading h1 {
            font-size: 27px;
        }

        .steps-card {
            padding: 16px;
        }

        .step-text {
            display: none;
        }

        .step-line {
            margin: 0 10px;
        }

        .service-grid {
            grid-template-columns: 1fr;
        }

        .service-card {
            min-height: auto;
        }
    }
</style>


<div class="registration-page">

    <div class="registration-container">

        {{-- =========================
             PAGE HEADER
        ========================== --}}
        <div class="page-heading">

            <div class="page-badge">

                {{-- Clipboard / Registration SVG --}}
                <svg viewBox="0 0 24 24"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     stroke-linecap="round"
                     stroke-linejoin="round"
                     aria-hidden="true">

                    <path d="M9 5h6"/>
                    <path d="M9 4a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v1"/>
                    <rect x="4" y="5" width="16" height="17" rx="2"/>
                    <path d="M8 10h8"/>
                    <path d="M8 14h8"/>
                    <path d="M8 18h5"/>

                </svg>

                Pendaftaran Layanan
            </div>

            <h1>Pilih Jenis Layanan</h1>

            <p>
                Silakan pilih jenis layanan yang Anda butuhkan.
                Setelah memilih layanan, Anda akan melanjutkan ke
                pengisian data pemohon dan pemilihan jadwal.
            </p>

        </div>


        {{-- =========================
             STEP INDICATOR
        ========================== --}}
        <div class="steps-card">

            <div class="steps">

                <div class="step active">
                    <div class="step-number">1</div>
                    <div class="step-text">Pilih Layanan</div>
                </div>

                <div class="step-line"></div>

                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-text">Data Pemohon</div>
                </div>

                <div class="step-line"></div>

                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-text">Pilih Jadwal</div>
                </div>

                <div class="step-line"></div>

                <div class="step">
                    <div class="step-number">4</div>
                    <div class="step-text">Konfirmasi</div>
                </div>

            </div>

        </div>


        {{-- =========================
             SERVICE LIST
        ========================== --}}
        <div class="section-title">

            <h2>Layanan yang Tersedia</h2>

            <p>
                Pilih salah satu layanan berikut untuk melanjutkan pendaftaran.
            </p>

        </div>


        <div class="service-grid">


            {{-- =========================
                 SERVICE 1
            ========================== --}}
            <div class="service-card">

                <div class="service-icon">

                    {{-- Information SVG --}}
                    <svg viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="2"
                         stroke-linecap="round"
                         stroke-linejoin="round"
                         aria-hidden="true">

                        <circle cx="12" cy="12" r="9"/>
                        <path d="M12 10v6"/>
                        <path d="M12 7h.01"/>

                    </svg>

                </div>

                <h3>Konsultasi Layanan Informasi</h3>

                <p>
                    Konsultasi dan informasi mengenai layanan BPOM
                    yang dibutuhkan oleh masyarakat.
                </p>

                <div class="service-action">

                    <span class="service-label">
                        Layanan Konsultasi
                    </span>

                    <a href="{{ route('pendaftaran.mulai', ['layanan' => 'konsultasi-informasi']) }}"
                       class="choose-button">

                        Pilih Layanan

                        <svg viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="2"
                             stroke-linecap="round"
                             stroke-linejoin="round">

                            <path d="M5 12h14"/>
                            <path d="m13 6 6 6-6 6"/>

                        </svg>

                    </a>

                </div>

            </div>


            {{-- =========================
                 SERVICE 2
            ========================== --}}
            <div class="service-card">

                <div class="service-icon">

                    {{-- Building / Business SVG --}}
                    <svg viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="2"
                         stroke-linecap="round"
                         stroke-linejoin="round"
                         aria-hidden="true">

                        <path d="M4 21h16"/>
                        <path d="M6 21V5l6-3 6 3v16"/>
                        <path d="M9 9h1"/>
                        <path d="M14 9h1"/>
                        <path d="M9 13h1"/>
                        <path d="M14 13h1"/>
                        <path d="M10 21v-4h4v4"/>

                    </svg>

                </div>

                <h3>Konsultasi Registrasi Produk</h3>

                <p>
                    Konsultasi mengenai proses, persyaratan,
                    dan informasi registrasi produk BPOM.
                </p>

                <div class="service-action">

                    <span class="service-label">
                        Layanan Konsultasi
                    </span>

                    <a href="{{ route('pendaftaran.mulai', ['layanan' => 'registrasi-produk']) }}"
                       class="choose-button">

                        Pilih Layanan

                        <svg viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="2"
                             stroke-linecap="round"
                             stroke-linejoin="round">

                            <path d="M5 12h14"/>
                            <path d="m13 6 6 6-6 6"/>

                        </svg>

                    </a>

                </div>

            </div>


            {{-- =========================
                 SERVICE 3
            ========================== --}}
            <div class="service-card">

                <div class="service-icon">

                    {{-- Document SVG --}}
                    <svg viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="2"
                         stroke-linecap="round"
                         stroke-linejoin="round"
                         aria-hidden="true">

                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <path d="M14 2v6h6"/>
                        <path d="M8 13h8"/>
                        <path d="M8 17h6"/>

                    </svg>

                </div>

                <h3>Perizinan & Sertifikasi</h3>

                <p>
                    Konsultasi mengenai informasi perizinan,
                    sertifikasi, serta persyaratan layanan BPOM.
                </p>

                <div class="service-action">

                    <span class="service-label">
                        Layanan Konsultasi
                    </span>

                    <a href="{{ route('pendaftaran.mulai', ['layanan' => 'perizinan-sertifikasi']) }}"
                       class="choose-button">

                        Pilih Layanan

                        <svg viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="2"
                             stroke-linecap="round"
                             stroke-linejoin="round">

                            <path d="M5 12h14"/>
                            <path d="m13 6 6 6-6 6"/>

                        </svg>

                    </a>

                </div>

            </div>


            {{-- =========================
                 SERVICE 4
            ========================== --}}
            <div class="service-card">

                <div class="service-icon">

                    {{-- Shield SVG --}}
                    <svg viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="2"
                         stroke-linecap="round"
                         stroke-linejoin="round"
                         aria-hidden="true">

                        <path d="M12 3 20 6v5c0 5-3.4 8.5-8 10-4.6-1.5-8-5-8-10V6l8-3z"/>
                        <path d="m9 12 2 2 4-4"/>

                    </svg>

                </div>

                <h3>Pengawasan Obat & Makanan</h3>

                <p>
                    Mendapatkan informasi dan konsultasi mengenai
                    pengawasan obat, makanan, kosmetik, dan produk terkait.
                </p>

                <div class="service-action">

                    <span class="service-label">
                        Layanan Informasi
                    </span>

                    <a href="{{ route('pendaftaran.mulai', ['layanan' => 'pengawasan']) }}"
                       class="choose-button">

                        Pilih Layanan

                        <svg viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="2"
                             stroke-linecap="round"
                             stroke-linejoin="round">

                            <path d="M5 12h14"/>
                            <path d="m13 6 6 6-6 6"/>

                        </svg>

                    </a>

                </div>

            </div>


        </div>


        {{-- =========================
             HELP INFORMATION
        ========================== --}}
        <div class="help-card">

            <div class="help-icon">

                {{-- Help SVG --}}
                <svg viewBox="0 0 24 24"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     stroke-linecap="round"
                     stroke-linejoin="round">

                    <circle cx="12" cy="12" r="9"/>
                    <path d="M9.5 9a2.5 2.5 0 1 1 4.2 1.8c-.9.8-1.7 1.2-1.7 2.7"/>
                    <path d="M12 17h.01"/>

                </svg>

            </div>

            <div class="help-content">

                <h3>Butuh bantuan memilih layanan?</h3>

                <p>
                    Jika Anda belum mengetahui layanan yang sesuai,
                    silakan lihat informasi layanan atau hubungi petugas
                    untuk mendapatkan bantuan.
                </p>

            </div>

        </div>

    </div>

</div>

@endsection