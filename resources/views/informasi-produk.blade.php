@extends('layouts.app')

@section('title', 'Informasi Layanan - SEDOLOR')

@section('content')

<style>
    /* =========================================================
       SEDOLOR - INFORMASI LAYANAN
       ========================================================= */

    :root {
        --primary: #155EEF;
        --primary-dark: #0B45C4;
        --deep-blue: #123C9C;

        --navy: #0B1F4B;
        --navy-dark: #06163F;

        --text: #18324B;
        --muted: #5B6B7D;

        --page-bg: #FFFFFF;
        --light-blue: #EAF4FF;
        --very-light-blue: #F5FAFF;
        --soft-blue: #DCEEFF;
        --border: #BFDBFE;

        --white: #FFFFFF;
        --black: #000000;

        --shadow:
            0 10px 30px rgba(11, 31, 75, .08);

        --shadow-hover:
            0 18px 38px rgba(21, 94, 239, .15);

        --radius: 18px;
    }


    * {
        box-sizing: border-box;
    }


    html {
        scroll-behavior: smooth;
    }


    body {
        margin: 0;
        background: var(--page-bg);
        color: var(--text);
    }


    a,
    button {
        font-family: inherit;
    }


    /* =========================================================
       ICON
       ========================================================= */

    .icon {
        width: 24px;
        height: 24px;

        display: block;

        flex-shrink: 0;

        stroke: currentColor;
        fill: none;

        stroke-width: 2;
        stroke-linecap: round;
        stroke-linejoin: round;
    }


    /* =========================================================
       CONTAINER
       ========================================================= */

    .info-page {
        width: 100%;
        overflow: hidden;
        background: #FFFFFF;
    }


    .info-container {
        width: min(1160px, calc(100% - 40px));
        margin: 0 auto;
    }


    /* =========================================================
       SCROLL REVEAL
       Hero TIDAK menggunakan reveal.
       Section berikutnya muncul saat discroll.
       ========================================================= */

    .reveal {
        opacity: 0;

        transform:
            translateY(45px);

        transition:
            opacity .75s ease,
            transform .75s cubic-bezier(.22, 1, .36, 1);
    }


    .reveal.is-visible {
        opacity: 1;

        transform:
            translateY(0);
    }


    .reveal-delay-1 {
        transition-delay: .08s;
    }


    .reveal-delay-2 {
        transition-delay: .16s;
    }


    .reveal-delay-3 {
        transition-delay: .24s;
    }


    /* =========================================================
       HERO
       ========================================================= */

    .info-hero {
        position: relative;

        padding: 82px 0 90px;

        overflow: hidden;

        background:
            linear-gradient(
                135deg,
                #06163F 0%,
                #0B1F4B 48%,
                #155EEF 100%
            );

        color: white;
    }


    .info-hero::before {
        content: "";

        position: absolute;

        width: 500px;
        height: 500px;

        right: -180px;
        top: -210px;

        border-radius: 50%;

        background:
            rgba(255,255,255,.06);

        border:
            1px solid rgba(255,255,255,.10);

        box-shadow:
            0 0 0 45px rgba(255,255,255,.025),
            0 0 0 90px rgba(255,255,255,.018);

        pointer-events: none;
    }


    .info-hero::after {
        content: "";

        position: absolute;

        width: 230px;
        height: 230px;

        left: -100px;
        bottom: -120px;

        border-radius: 50%;

        background:
            rgba(56,189,248,.10);

        pointer-events: none;
    }


    .info-hero-grid {
        position: relative;

        z-index: 2;

        display: grid;

        grid-template-columns:
            minmax(0, 1.25fr)
            minmax(320px, .75fr);

        align-items: center;

        gap: 65px;
    }


    .hero-badge {
        display: inline-flex;

        align-items: center;

        gap: 8px;

        margin-bottom: 20px;

        padding: 8px 14px;

        border-radius: 999px;

        background:
            rgba(255,255,255,.95);

        color:
            var(--primary);

        font-size: 13px;

        font-weight: 900;

        box-shadow:
            0 8px 20px rgba(0,0,0,.12);
    }


    .hero-badge-dot {
        width: 8px;
        height: 8px;

        border-radius: 50%;

        background:
            var(--primary);
    }


    .info-hero-title {
        margin: 0 0 18px;

        max-width: 720px;

        font-size:
            clamp(38px, 5vw, 58px);

        line-height: 1.08;

        letter-spacing: -1.3px;

        font-weight: 900;

        color: white;
    }


    .info-hero-title span {
        color:
            #8FC3FF;
    }


    .info-hero-description {
        max-width: 680px;

        margin: 0;

        color:
            #EAF3FF;

        font-size: 17px;

        line-height: 1.75;
    }


    .hero-buttons {
        display: flex;

        flex-wrap: wrap;

        gap: 12px;

        margin-top: 30px;
    }


    .info-btn {
        display: inline-flex;

        align-items: center;
        justify-content: center;

        gap: 8px;

        min-height: 50px;

        padding: 12px 20px;

        border-radius: 11px;

        border: 2px solid transparent;

        font-size: 14px;

        font-weight: 900;

        text-decoration: none;

        cursor: pointer;

        transition:
            .2s ease;
    }


    .info-btn:hover {
        transform:
            translateY(-3px);
    }


    .info-btn-primary {
        background:
            #155EEF;

        color:
            white;

        box-shadow:
            0 9px 22px rgba(0,0,0,.18);
    }


    .info-btn-primary:hover {
        background:
            #0B45C4;

        color:
            white;
    }


    .info-btn-outline {
        background:
            white;

        color:
            var(--navy);

        border-color:
            white;
    }


    .info-btn-outline:hover {
        color:
            var(--primary);
    }


    .hero-visual {
        position: relative;

        min-height: 330px;

        display: flex;

        align-items: center;
        justify-content: center;
    }


    .hero-visual-card {
        position: relative;

        width: 100%;
        max-width: 390px;

        padding: 35px 30px;

        border-radius: 25px;

        background:
            rgba(255,255,255,.96);

        color:
            var(--navy);

        box-shadow:
            0 25px 55px rgba(0,0,0,.22);

        overflow: hidden;
    }


    .hero-visual-card::before {
        content: "";

        position: absolute;

        width: 170px;
        height: 170px;

        right: -70px;
        top: -70px;

        border-radius: 50%;

        background:
            var(--light-blue);
    }


    .hero-visual-card > * {
        position: relative;
        z-index: 2;
    }


    .hero-visual-label {
        margin-bottom: 8px;

        color:
            var(--primary);

        font-size: 12px;

        font-weight: 900;

        letter-spacing: 1px;
    }


    .hero-visual-title {
        margin: 0 0 25px;

        font-size: 28px;

        font-weight: 900;
    }


    .hero-visual-items {
        display: flex;

        flex-direction: column;

        gap: 11px;
    }


    .hero-visual-item {
        display: flex;

        align-items: center;

        gap: 12px;

        padding: 13px;

        border:
            1px solid var(--border);

        border-radius: 12px;

        background:
            var(--very-light-blue);
    }


    .hero-visual-icon {
        width: 40px;
        height: 40px;

        display: flex;

        align-items: center;
        justify-content: center;

        flex-shrink: 0;

        border-radius: 10px;

        background:
            var(--light-blue);

        color:
            var(--primary);
    }


    .hero-visual-icon .icon {
        width: 21px;
        height: 21px;
    }


    .hero-visual-item strong {
        display: block;

        margin-bottom: 2px;

        font-size: 13px;
    }


    .hero-visual-item small {
        color:
            var(--muted);

        font-size: 11px;
    }


    /* =========================================================
       INFORMATION TICKER
       ========================================================= */

    .info-ticker {
        position: relative;

        padding: 22px 0;

        background:
            #FFFFFF;

        border-top:
            1px solid #DBEAFE;

        border-bottom:
            1px solid #DBEAFE;

        overflow: hidden;
    }


    .info-ticker-track {
        display: flex;

        width: max-content;

        animation:
            tickerMove 28s linear infinite;
    }


    .info-ticker-group {
        display: flex;

        flex-shrink: 0;

        align-items: center;

        gap: 14px;

        padding-right: 14px;
    }


    .info-ticker-item {
        display: inline-flex;

        align-items: center;

        gap: 9px;

        min-height: 43px;

        padding: 9px 16px;

        border-radius: 999px;

        background:
            var(--navy);

        color:
            white;

        text-decoration: none;

        font-size: 13px;

        font-weight: 800;

        white-space: nowrap;

        transition:
            .2s ease;
    }


    .info-ticker-item {
    display: inline-flex;

    align-items: center;

    gap: 9px;

    min-height: 43px;

    padding: 9px 16px;

    border-radius: 999px;

    background:
        var(--navy);

    color:
        white;

    text-decoration: none;

    font-size: 13px;

    font-weight: 800;

    white-space: nowrap;

    transition:
        .2s ease;
}


    .info-ticker-item:hover {
        transform:
            translateY(-3px);

        box-shadow:
            0 8px 20px rgba(21,94,239,.18);
    }


    .info-ticker-item .icon {
        width: 18px;
        height: 18px;
    }


    @keyframes tickerMove {

        from {
            transform:
                translateX(0);
        }

        to {
            transform:
                translateX(-50%);
        }

    }


    .info-ticker:hover .info-ticker-track,
    .info-ticker:focus-within .info-ticker-track {
        animation-play-state:
            paused;
    }


    /* =========================================================
       QUICK NAVIGATION
       ========================================================= */

    .quick-section {
        padding: 82px 0;

        background:
            #FFFFFF;
    }


    .section-heading {
        max-width: 720px;

        margin-bottom: 35px;
    }


    .section-label {
        display: inline-flex;

        align-items: center;

        gap: 7px;

        margin-bottom: 10px;

        padding: 7px 12px;

        border-radius: 999px;

        background:
            var(--light-blue);

        color:
            var(--primary);

        font-size: 12px;

        font-weight: 900;

        letter-spacing: .7px;

        text-transform: uppercase;
    }


    .section-title {
        margin: 0 0 10px;

        color:
            var(--navy);

        font-size: 31px;

        line-height: 1.2;

        font-weight: 900;
    }


    .section-description {
        margin: 0;

        color:
            var(--muted);

        font-size: 15px;

        line-height: 1.7;
    }


    .quick-grid {
        display: grid;

        grid-template-columns:
            repeat(4, minmax(0, 1fr));

        gap: 20px;
    }


    .info-card {
        position: relative;

        display: flex;

        flex-direction: column;

        min-height: 220px;

        padding: 25px;

        border-radius:
            var(--radius);

        text-decoration: none;

        overflow: hidden;

        transition:
            transform .25s ease,
            box-shadow .25s ease;
    }


    .info-card:hover {
        transform:
            translateY(-8px);

        box-shadow:
            var(--shadow-hover);
    }


    .info-card:active {
        transform:
            translateY(-4px)
            scale(.99);
    }


    .info-card-blue {
        background:
            var(--primary);

        color:
            white;
    }


    .info-card-light {
        background:
            var(--light-blue);

        color:
            var(--navy);

        border:
            1px solid var(--border);
    }


    .info-card-navy {
        background:
            var(--navy);

        color:
            white;
    }


    .info-card-white {
        background:
            white;

        color:
            var(--navy);

        border:
            1px solid var(--border);
    }


    .info-card-icon {
        width: 52px;
        height: 52px;

        display: flex;

        align-items: center;
        justify-content: center;

        margin-bottom: 20px;

        border-radius: 14px;
    }


    .info-card-blue .info-card-icon,
    .info-card-navy .info-card-icon {
        background:
            rgba(255,255,255,.14);

        color:
            white;
    }


    .info-card-light .info-card-icon,
    .info-card-white .info-card-icon {
        background:
            var(--soft-blue);

        color:
            var(--primary);
    }


    .info-card-icon .icon {
        width: 25px;
        height: 25px;
    }


    .info-card h3 {
        margin: 0 0 8px;

        font-size: 18px;

        font-weight: 900;
    }


    .info-card p {
        margin: 0;

        font-size: 13px;

        line-height: 1.6;

        opacity: .82;
    }


    .info-card-arrow {
        margin-top: auto;

        padding-top: 18px;

        font-size: 13px;

        font-weight: 900;
    }


    /* =========================================================
       SERVICE SECTION
       ========================================================= */

    .service-section {
        padding: 85px 0;

        background:
            var(--light-blue);
    }


    .service-grid {
        display: grid;

        grid-template-columns:
            repeat(4, minmax(0, 1fr));

        gap: 18px;
    }


    .service-option {
        min-height: 230px;

        padding: 24px;

        border:
            1px solid var(--border);

        border-radius:
            var(--radius);

        background:
            white;

        color:
            var(--navy);

        text-align: left;

        cursor: pointer;

        box-shadow:
            0 8px 22px rgba(11,31,75,.06);

        transition:
            .25s ease;
    }


    .service-option:hover,
    .service-option.active {
        transform:
            translateY(-7px);

        background:
            var(--navy);

        color:
            white;

        border-color:
            var(--navy);

        box-shadow:
            var(--shadow-hover);
    }


    .service-option-icon {
        width: 53px;
        height: 53px;

        display: flex;

        align-items: center;
        justify-content: center;

        margin-bottom: 18px;

        border-radius: 13px;

        background:
            var(--light-blue);

        color:
            var(--primary);

        transition:
            .25s ease;
    }


    .service-option:hover .service-option-icon,
    .service-option.active .service-option-icon {
        background:
            rgba(255,255,255,.12);

        color:
            white;
    }


    .service-option h3 {
        margin: 0 0 8px;

        font-size: 17px;

        font-weight: 900;
    }


    .service-option p {
        margin: 0;

        font-size: 13px;

        line-height: 1.6;

        opacity: .78;
    }


    .service-detail {
        margin-top: 28px;

        padding: 34px;

        border-radius: 22px;

        background:
            linear-gradient(
                135deg,
                var(--navy),
                var(--deep-blue)
            );

        color:
            white;

        box-shadow:
            0 18px 38px rgba(11,31,75,.16);
    }


    .service-detail h3 {
        margin: 0 0 10px;

        font-size: 24px;

        font-weight: 900;
    }


    .service-detail p {
        max-width: 760px;

        margin: 0;

        color:
            #DCEBFF;

        line-height: 1.7;
    }


    .service-detail-action {
        display: inline-flex;

        align-items: center;

        margin-top: 22px;

        padding: 12px 18px;

        border-radius: 10px;

        background:
            white;

        color:
            var(--primary);

        text-decoration: none;

        font-size: 13px;

        font-weight: 900;

        transition:
            .2s ease;
    }


    .service-detail-action:hover {
        transform:
            translateY(-3px);

        background:
            var(--light-blue);
    }


    /* =========================================================
       FLOW
       ========================================================= */

    .flow-section {
        padding: 85px 0;

        background:
            var(--navy);
    }


    .flow-section .section-label {
        background:
            rgba(255,255,255,.12);

        color:
            #FFFFFF;
    }


    .flow-section .section-title {
        color:
            white;
    }


    .flow-section .section-description {
        color:
            #D7E5F5;
    }


    .flow-grid {
        display: grid;

        grid-template-columns:
            repeat(4, minmax(0, 1fr));

        gap: 20px;
    }


    .flow-card {
        position: relative;

        min-height: 235px;

        padding: 26px;

        border-radius:
            var(--radius);

        background:
            white;

        color:
            var(--navy);

        transition:
            .25s ease;
    }


    .flow-card:nth-child(2) {
        background:
            var(--light-blue);
    }


    .flow-card:nth-child(3) {
        background:
            #FFFFFF;
    }


    .flow-card:nth-child(4) {
        background:
            var(--soft-blue);
    }


    .flow-card:hover {
        transform:
            translateY(-8px);

        box-shadow:
            0 18px 35px rgba(0,0,0,.18);
    }


    .flow-number {
        width: 45px;
        height: 45px;

        display: flex;

        align-items: center;
        justify-content: center;

        margin-bottom: 20px;

        border-radius: 50%;

        background:
            var(--primary);

        color:
            white;

        font-size: 13px;

        font-weight: 900;
    }


    .flow-card h3 {
        margin: 0 0 8px;

        font-size: 18px;

        font-weight: 900;
    }


    .flow-card p {
        margin: 0;

        color:
            var(--muted);

        font-size: 13px;

        line-height: 1.65;
    }


    /* =========================================================
       PREPARATION
       ========================================================= */

    .preparation-section {
        padding: 85px 0;

        background:
            white;
    }


    .preparation-grid {
        display: grid;

        grid-template-columns:
            repeat(4, minmax(0, 1fr));

        gap: 20px;
    }


    .preparation-card {
        min-height: 230px;

        padding: 25px;

        border-radius:
            var(--radius);

        border:
            1px solid var(--border);

        transition:
            .25s ease;
    }


   .preparation-card:nth-child(1) {
    background: white;
    border: 2px solid var(--navy);
    color: var(--navy);
}


   .preparation-card:nth-child(2) {
    background: white;
    border: 2px solid var(--navy);
    color: var(--navy);
}

.preparation-card:nth-child(3) {
    background: white;
    border: 2px solid var(--navy);
    color: var(--navy);
}

.preparation-card:nth-child(4) {
    background: white;
    border: 2px solid var(--navy);
    color: var(--navy);
}


    .preparation-card:hover {
        transform:
            translateY(-7px);

        box-shadow:
            var(--shadow-hover);
    }


    .preparation-icon {
        width: 52px;
        height: 52px;

        display: flex;

        align-items: center;
        justify-content: center;

        margin-bottom: 18px;

        border-radius: 13px;

        background:
            rgba(255,255,255,.72);

        color:
            var(--primary);
    }


    .preparation-card:nth-child(1) .preparation-icon,
    .preparation-card:nth-child(2) .preparation-icon {
        background:
            var(--soft-blue);
    }


    .preparation-card h3 {
        margin: 0 0 8px;

        font-size: 17px;

        font-weight: 900;
    }


    .preparation-card p {
        margin: 0;

        font-size: 13px;

        line-height: 1.65;

        opacity: .82;
    }


    /* =========================================================
       SCHEDULE
       ========================================================= */

    .schedule-section {
        padding: 85px 0;

        background:
            var(--light-blue);
    }


    .schedule-box {
        display: grid;

        grid-template-columns:
            1fr 1fr;

        gap: 25px;

        padding: 30px;

        border-radius: 22px;

        background:
            white;

        border:
            1px solid var(--border);

        box-shadow:
            var(--shadow);
    }


    .schedule-info h3 {
        margin: 0 0 10px;

        color:
            var(--navy);

        font-size: 23px;

        font-weight: 900;
    }


    .schedule-info p {
        margin: 0;

        color:
            var(--muted);

        line-height: 1.65;
    }


    .schedule-card {
        padding: 24px;

        border-radius: 16px;

        background:
            var(--navy);

        color:
            white;
    }


    .schedule-card-top {
        display: flex;

        align-items: center;
        justify-content: space-between;

        gap: 15px;

        margin-bottom: 20px;
    }


    .schedule-status {
        padding: 7px 11px;

        border-radius: 999px;

        background:
            white;

        color:
            var(--primary);

        font-size: 11px;

        font-weight: 900;
    }


    .queue-number {
        font-size: 38px;

        font-weight: 900;

        letter-spacing: -1px;
    }


    .schedule-details {
        display: grid;

        grid-template-columns:
            1fr 1fr;

        gap: 12px;
    }


    .schedule-detail {
        padding: 14px;

        border-radius: 11px;

        background:
            rgba(255,255,255,.08);
    }


    .schedule-detail small {
        display: block;

        margin-bottom: 4px;

        color:
            #BFD5EF;

        font-size: 11px;
    }


    .schedule-detail strong {
        font-size: 13px;
    }


    .schedule-link {
        display: inline-flex;

        align-items: center;

        margin-top: 20px;

        color:
            var(--primary);

        font-weight: 900;

        font-size: 13px;

        text-decoration: none;
    }


    .schedule-link:hover {
        text-decoration:
            underline;
    }


    /* =========================================================
       FAQ
       ========================================================= */

    .faq-section {
        padding: 85px 0;

        background:
            white;
    }


    .faq-list {
        display: flex;

        flex-direction: column;

        gap: 13px;
    }


    .faq-item {
        border:
            1px solid var(--border);

        border-radius:
            15px;

        overflow: hidden;

        background:
            white;

        transition:
            .2s ease;
    }


    .faq-item:nth-child(2n) {
        background:
            var(--very-light-blue);
    }


    .faq-question {
        width: 100%;

        display: flex;

        align-items: center;

        justify-content: space-between;

        gap: 15px;

        padding: 19px 21px;

        border: 0;

        background: transparent;

        color:
            var(--navy);

        text-align: left;

        font-size: 14px;

        font-weight: 900;

        cursor: pointer;
    }


    .faq-question .icon {
        transition:
            transform .2s ease;
    }


    .faq-item.active .faq-question .icon {
        transform:
            rotate(180deg);
    }


    .faq-answer {
        display: none;

        padding:
            0 21px 20px;

        color:
            var(--muted);

        font-size: 13px;

        line-height: 1.7;
    }


    .faq-item.active .faq-answer {
        display: block;
    }


    /* =========================================================
       CTA
       ========================================================= */

    .cta-section {
        padding: 80px 0;

        background:
            var(--light-blue);
    }


    .cta {
        position: relative;

        padding: 48px;

        overflow: hidden;

        border-radius: 23px;

        background:
            linear-gradient(
                135deg,
                #155EEF,
                #0B1F4B
            );

        color:
            white;

        box-shadow:
            0 18px 40px rgba(11,31,75,.20);
    }


    .cta::before {
        content: "";

        position: absolute;

        width: 350px;
        height: 350px;

        right: -160px;
        bottom: -220px;

        border-radius: 50%;

        border:
            1px solid rgba(255,255,255,.12);
    }


    .cta-content {
        position: relative;

        z-index: 2;

        max-width: 700px;
    }


    .cta h2 {
        margin: 0 0 10px;

        font-size: 31px;

        font-weight: 900;
    }


    .cta p {
        margin: 0;

        color:
            #DCEBFF;

        line-height: 1.7;
    }


    .cta-button {
        display: inline-flex;

        align-items: center;

        margin-top: 23px;

        padding: 13px 20px;

        border-radius: 10px;

        background:
            white;

        color:
            var(--primary);

        text-decoration: none;

        font-weight: 900;

        font-size: 14px;

        transition:
            .2s ease;
    }


    .cta-button:hover {
        transform:
            translateY(-3px);

        background:
            var(--light-blue);
    }


    /* =========================================================
       ACCESSIBILITY FLOATING
       ========================================================= */

    .accessibility-float {
        position: fixed;

        right: 20px;
        bottom: 20px;

        z-index: 900;

        width: 50px;
        height: 50px;

        display: flex;

        align-items: center;
        justify-content: center;

        border: 0;

        border-radius: 50%;

        background:
            var(--navy);

        color:
            white;

        box-shadow:
            0 10px 25px rgba(0,0,0,.18);

        cursor: pointer;

        transition:
            .2s ease;
    }


    .accessibility-float:hover {
        transform:
            translateY(-4px);

        background:
            var(--primary);
    }


    .accessibility-panel {
        position: fixed;

        right: 20px;
        bottom: 82px;

        z-index: 899;

        width: 280px;

        padding: 20px;

        border-radius: 18px;

        background:
            white;

        border:
            1px solid var(--border);

        box-shadow:
            0 18px 40px rgba(0,0,0,.16);

        display: none;
    }


    .accessibility-panel.open {
        display: block;
    }


    .accessibility-panel h3 {
        margin: 0 0 14px;

        color:
            var(--navy);

        font-size: 16px;

        font-weight: 900;
    }


    .accessibility-tools {
        display: grid;

        grid-template-columns:
            1fr 1fr;

        gap: 9px;
    }


    .accessibility-tool {
        min-height: 75px;

        padding: 12px;

        border:
            1px solid var(--border);

        border-radius: 11px;

        background:
            var(--very-light-blue);

        color:
            var(--navy);

        cursor: pointer;

        text-align: left;

        transition:
            .2s ease;
    }


    .accessibility-tool:hover,
    .accessibility-tool.active {
        background:
            var(--primary);

        color:
            white;

        border-color:
            var(--primary);
    }


    .accessibility-tool strong {
        display: block;

        margin-bottom: 3px;

        font-size: 12px;
    }


    .accessibility-tool small {
        display: block;

        font-size: 10px;

        line-height: 1.35;

        opacity: .78;
    }


    /* =========================================================
       BACK TO TOP
       ========================================================= */

    .back-to-top {
        position: fixed;

        right: 20px;
        bottom: 80px;

        z-index: 800;

        width: 44px;
        height: 44px;

        display: flex;

        align-items: center;
        justify-content: center;

        border: 0;

        border-radius: 50%;

        background:
            var(--primary);

        color:
            white;

        box-shadow:
            0 9px 22px rgba(21,94,239,.25);

        cursor: pointer;

        opacity: 0;
        visibility: hidden;

        transform:
            translateY(10px);

        transition:
            .25s ease;
    }


    .back-to-top.show {
        opacity: 1;

        visibility: visible;

        transform:
            translateY(0);
    }


    .back-to-top:hover {
        background:
            var(--navy);
    }


    /* =========================================================
       FOOTER
       PERSIS STRUKTUR FOOTER HOME
       ========================================================= */

    .sedolor-footer {
        background:
            linear-gradient(
                135deg,
                #0C2135,
                #102A43
            );

        color:
            white;

        padding:
            48px 0 25px;
    }


    .footer-grid {
        display: grid;

        grid-template-columns:
            1.5fr 1fr 1fr;

        gap: 50px;

        padding-bottom: 35px;

        border-bottom:
            1px solid rgba(255,255,255,.13);
    }


    .footer-brand {
        display: flex;

        align-items: flex-start;

        gap: 12px;
    }


    .footer-brand-mark {
        width: 42px;
        height: 42px;

        display: flex;

        align-items: center;
        justify-content: center;

        flex-shrink: 0;

        border-radius: 11px;

        background:
            white;

        color:
            var(--primary);

        font-size: 13px;

        font-weight: 900;

        padding: 4px;
    }


    .footer-brand-mark img {
        width: 100%;
        height: 100%;

        object-fit: contain;

        border-radius: 6px;
    }


    .footer-brand strong {
        display: block;

        margin-bottom: 6px;

        font-size: 16px;
    }


    .footer-brand p {
        max-width: 350px;

        margin: 0;

        color:
            #B9CBDD;

        font-size: 13px;

        line-height: 1.6;
    }


    .footer-title {
        margin: 0 0 13px;

        font-size: 14px;

        font-weight: 900;
    }


    .footer-links {
        display: flex;

        flex-direction: column;

        gap: 9px;
    }


    .footer-links a {
        color:
            #B9CBDD;

        font-size: 13px;

        text-decoration:
            none;

        transition:
            color .15s ease,
            transform .15s ease;
    }


    .footer-links a:hover {
        color:
            white;

        transform:
            translateX(3px);
    }


    .footer-bottom {
        display: flex;

        align-items: center;

        justify-content: space-between;

        gap: 20px;

        padding-top: 22px;

        color:
            #9EB3C8;

        font-size: 12px;
    }


    /* =========================================================
       LARGE TEXT
       ========================================================= */

    body.sedolor-large-text {
        font-size: 18px;
    }


    body.sedolor-large-text .info-hero-title {
        font-size:
            clamp(44px, 6vw, 66px);
    }


    body.sedolor-large-text .info-hero-description,
    body.sedolor-large-text .section-description,
    body.sedolor-large-text .info-card p,
    body.sedolor-large-text .service-option p,
    body.sedolor-large-text .flow-card p,
    body.sedolor-large-text .preparation-card p,
    body.sedolor-large-text .faq-answer {
        font-size: 17px;
    }


    /* =========================================================
       HIGH CONTRAST
       ========================================================= */

    body.sedolor-high-contrast {
        background:
            #FFFFFF;

        color:
            #000000;
    }


    body.sedolor-high-contrast
    .info-ticker,
    body.sedolor-high-contrast
    .quick-section,
    body.sedolor-high-contrast
    .preparation-section,
    body.sedolor-high-contrast
    .faq-section {
        background:
            #FFFFFF;
    }


    body.sedolor-high-contrast
    .service-section,
    body.sedolor-high-contrast
    .schedule-section,
    body.sedolor-high-contrast
    .cta-section {
        background:
            #FFFFFF;
    }


    body.sedolor-high-contrast
    .info-card,
    body.sedolor-high-contrast
    .service-option,
    body.sedolor-high-contrast
    .preparation-card,
    body.sedolor-high-contrast
    .schedule-box,
    body.sedolor-high-contrast
    .faq-item {
        border:
            2px solid #000000;

        background:
            #FFFFFF;

        color:
            #000000;
    }


    body.sedolor-high-contrast
    .section-title,
    body.sedolor-high-contrast
    .section-description,
    body.sedolor-high-contrast
    .info-card h3,
    body.sedolor-high-contrast
    .info-card p,
    body.sedolor-high-contrast
    .service-option h3,
    body.sedolor-high-contrast
    .service-option p,
    body.sedolor-high-contrast
    .preparation-card h3,
    body.sedolor-high-contrast
    .preparation-card p,
    body.sedolor-high-contrast
    .faq-question,
    body.sedolor-high-contrast
    .faq-answer {
        color:
            #000000;
    }


    body.sedolor-high-contrast
    .flow-section {
        background:
            #000000;
    }


    body.sedolor-high-contrast
    .flow-section .section-title,
    body.sedolor-high-contrast
    .flow-section .section-description {
        color:
            #FFFFFF;
    }


    /* =========================================================
       REDUCE ANIMATION
       ========================================================= */

    body.no-animation *,
    body.no-animation *::before,
    body.no-animation *::after {
        animation:
            none !important;

        transition:
            none !important;
    }


    body.no-animation .reveal {
        opacity:
            1;

        transform:
            none;
    }


    /* =========================================================
       RESPONSIVE
       ========================================================= */

    @media (max-width: 1050px) {

        .info-hero-grid {
            grid-template-columns:
                1fr;
        }


        .hero-visual {
            min-height:
                auto;
        }


        .hero-visual-card {
            max-width:
                650px;
        }


        .quick-grid,
        .service-grid,
        .flow-grid,
        .preparation-grid {
            grid-template-columns:
                repeat(2, 1fr);
        }

    }


    @media (max-width: 850px) {

        .schedule-box {
            grid-template-columns:
                1fr;
        }


        .footer-grid {
            grid-template-columns:
                1fr 1fr;
        }

    }


    @media (max-width: 700px) {

        .info-container {
            width:
                min(100% - 28px, 1160px);
        }


        .info-hero {
            padding:
                55px 0 65px;
        }


        .info-hero-title {
            font-size:
                37px;
        }


        .info-hero-description {
            font-size:
                16px;
        }


        .hero-buttons {
            flex-direction:
                column;
        }


        .hero-buttons .info-btn {
            width:
                100%;
        }


        .quick-section,
        .service-section,
        .flow-section,
        .preparation-section,
        .schedule-section,
        .faq-section {
            padding:
                58px 0;
        }


        .section-title {
            font-size:
                27px;
        }


        .quick-grid,
        .service-grid,
        .flow-grid,
        .preparation-grid {
            grid-template-columns:
                1fr;
        }


        .schedule-details {
            grid-template-columns:
                1fr;
        }


        .cta {
            padding:
                32px 24px;
        }


        .cta h2 {
            font-size:
                27px;
        }


        .accessibility-panel {
            right:
                14px;

            bottom:
                80px;

            width:
                calc(100% - 28px);
        }


        .footer-grid {
            grid-template-columns:
                1fr;

            gap:
                30px;
        }


        .footer-bottom {
            flex-direction:
                column;

            align-items:
                flex-start;
        }

    }


    /* =========================================================
       PREFERS REDUCED MOTION
       ========================================================= */

    @media (prefers-reduced-motion: reduce) {

        html {
            scroll-behavior:
                auto;
        }


        *,
        *::before,
        *::after {
            animation:
                none !important;

            transition:
                none !important;
        }


        .reveal {
            opacity:
                1;

            transform:
                none;
        }

    }

</style>


<div class="info-page">

    {{-- =====================================================
         MAIN
         ===================================================== --}}

    <main id="main-content">


        {{-- =================================================
             HERO
             TIDAK memakai reveal agar langsung tampil
             ================================================= --}}

        <section class="info-hero">

            <div class="info-container">

                <div class="info-hero-grid">


                    <div>

                        <div class="hero-badge">

                            <span
                                class="hero-badge-dot"
                                aria-hidden="true"
                            ></span>

                            Informasi Layanan BPOM Palembang

                        </div>


                        <h1 class="info-hero-title">

                            Semua Informasi Layanan BPOM
                            <span>dalam Satu Tempat</span>

                        </h1>


                        <p class="info-hero-description">

                            Temukan informasi mengenai jenis layanan,
                            alur pelayanan, persiapan sebelum datang,
                            jadwal dan antrean, serta pertanyaan yang
                            sering ditanyakan melalui SEDOLOR.

                        </p>


                        <div class="hero-buttons">

                            <a
                                href="#jenis-layanan"
                                class="info-btn info-btn-primary"
                            >

                                Lihat Jenis Layanan

                                <svg
                                    class="icon"
                                    viewBox="0 0 24 24"
                                    aria-hidden="true"
                                >

                                    <path d="M5 12h13"></path>

                                    <path d="M13 6l6 6-6 6"></path>

                                </svg>

                            </a>


                            <a
                                href="#faq"
                                class="info-btn info-btn-outline"
                            >

                                Pertanyaan Umum

                            </a>

                        </div>

                    </div>


                    {{-- HERO VISUAL --}}

                    <div class="hero-visual">

                        <div class="hero-visual-card">

                            <div class="hero-visual-label">
                                INFORMASI
                            </div>


                            <h2 class="hero-visual-title">
                                Layanan BPOM
                            </h2>


                            <div class="hero-visual-items">

                                <div class="hero-visual-item">

                                    <div class="hero-visual-icon">

                                        <svg
                                            class="icon"
                                            viewBox="0 0 24 24"
                                        >

                                            <rect
                                                x="5"
                                                y="3"
                                                width="14"
                                                height="18"
                                                rx="2"
                                            ></rect>

                                            <path d="M9 8h6"></path>

                                            <path d="M9 12h6"></path>

                                            <path d="M9 16h4"></path>

                                        </svg>

                                    </div>


                                    <div>

                                        <strong>
                                            Jenis Layanan
                                        </strong>

                                        <small>
                                            Pilih layanan sesuai kebutuhan
                                        </small>

                                    </div>

                                </div>


                                <div class="hero-visual-item">

                                    <div class="hero-visual-icon">

                                        <svg
                                            class="icon"
                                            viewBox="0 0 24 24"
                                        >

                                            <circle
                                                cx="12"
                                                cy="12"
                                                r="9"
                                            ></circle>

                                            <path d="M12 7v5l3 2"></path>

                                        </svg>

                                    </div>


                                    <div>

                                        <strong>
                                            Jadwal & Antrean
                                        </strong>

                                        <small>
                                            Ketahui waktu pelayanan
                                        </small>

                                    </div>

                                </div>


                                <div class="hero-visual-item">

                                    <div class="hero-visual-icon">

                                        <svg
                                            class="icon"
                                            viewBox="0 0 24 24"
                                        >

                                            <circle
                                                cx="12"
                                                cy="12"
                                                r="9"
                                            ></circle>

                                            <path d="M12 10v6"></path>

                                            <path d="M12 7h.01"></path>

                                        </svg>

                                    </div>


                                    <div>

                                        <strong>
                                            Bantuan
                                        </strong>

                                        <small>
                                            Temukan jawaban pertanyaan Anda
                                        </small>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- =================================================
             INFORMATION TICKER
             ================================================= --}}

        <section
            class="info-ticker"
            aria-label="Informasi cepat"
        >

            <div class="info-ticker-track">


                <div class="info-ticker-group">

                    <a
                        href="#jenis-layanan"
                        class="info-ticker-item"
                    >

                        <svg
                            class="icon"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                        >
                            <path d="M4 6h16"></path>
                            <path d="M4 12h16"></path>
                            <path d="M4 18h16"></path>
                        </svg>

                        Informasi Layanan BPOM

                    </a>


                    <a
                        href="/jadwal-antrean"
                        class="info-ticker-item"
                    >

                        <svg
                            class="icon"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                        >
                            <circle
                                cx="12"
                                cy="12"
                                r="9"
                            ></circle>

                            <path d="M12 7v5l3 2"></path>
                        </svg>

                        Jadwal & Antrean

                    </a>


                    <a
                        href="#persiapan"
                        class="info-ticker-item"
                    >

                        <svg
                            class="icon"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                        >
                            <path d="M6 3h12v18H6z"></path>
                            <path d="M9 8h6"></path>
                            <path d="M9 12h6"></path>
                            <path d="M9 16h4"></path>
                        </svg>

                        Persyaratan Layanan

                    </a>


                    <a
                        href="#alur"
                        class="info-ticker-item"
                    >

                        <svg
                            class="icon"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                        >
                            <path d="M5 12h14"></path>
                            <path d="M13 6l6 6-6 6"></path>
                        </svg>

                        Alur Pelayanan

                    </a>


                    <a
                        href="#aksesibilitas"
                        class="info-ticker-item"
                    >

                        <svg
                            class="icon"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                        >
                            <circle cx="12" cy="4" r="2"></circle>
                            <path d="M5 8h14"></path>
                            <path d="M12 6v7"></path>
                            <path d="M8 21l4-8 4 8"></path>
                        </svg>

                        Aksesibilitas SEDOLOR

                    </a>


                    <a
                        href="{{ route('pendaftaran.mulai') }}"
                        class="info-ticker-item"
                    >

                        <svg
                            class="icon"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                        >
                            <path d="M12 5v14"></path>
                            <path d="M5 12h14"></path>
                        </svg>

                        Daftar Layanan dengan Mudah

                    </a>

                </div>


                {{-- DUPLIKASI UNTUK MARQUEE SEAMLESS --}}

                <div class="info-ticker-group">

                    <a
                        href="#jenis-layanan"
                        class="info-ticker-item"
                    >
                        Informasi Layanan BPOM
                    </a>

                    <a
                        href="/jadwal-antrean"
                        class="info-ticker-item"
                    >
                        Jadwal & Antrean
                    </a>

                    <a
                        href="#persiapan"
                        class="info-ticker-item"
                    >
                        Persyaratan Layanan
                    </a>

                    <a
                        href="#alur"
                        class="info-ticker-item"
                    >
                        Alur Pelayanan
                    </a>

                    <a
                        href="#aksesibilitas"
                        class="info-ticker-item"
                    >
                        Aksesibilitas SEDOLOR
                    </a>

                    <a
                        href="{{ route('pendaftaran.mulai') }}"
                        class="info-ticker-item"
                    >
                        Daftar Layanan dengan Mudah
                    </a>

                </div>

            </div>

        </section>


        {{-- =================================================
             QUICK NAVIGATION
             MUNCUL SAAT SCROLL
             ================================================= --}}

        <section class="quick-section">

            <div class="info-container">

                <div class="section-heading reveal">

                    <span class="section-label">
                        Jelajahi Informasi
                    </span>


                    <h2 class="section-title">
                        Apa yang ingin Anda ketahui?
                    </h2>


                    <p class="section-description">
                        Gunakan pilihan berikut untuk langsung menuju
                        informasi yang Anda perlukan.
                    </p>

                </div>


                <div class="quick-grid">


                    <a
                        href="#jenis-layanan"
                        class="info-card info-card-navy reveal"
                    >

                        <div class="info-card-icon">

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                            >
                                <rect
                                    x="5"
                                    y="3"
                                    width="14"
                                    height="18"
                                    rx="2"
                                ></rect>

                                <path d="M9 8h6"></path>
                                <path d="M9 12h6"></path>
                                <path d="M9 16h4"></path>
                            </svg>

                        </div>


                        <h3>
                            Jenis Layanan
                        </h3>


                        <p>
                            Lihat layanan BPOM yang tersedia
                            dan pilih sesuai kebutuhan Anda.
                        </p>


                        <div class="info-card-arrow">
                            Lihat layanan →
                        </div>

                    </a>


                    <a
                        href="#alur"
                        class="info-card info-card-navy reveal reveal-delay-1"
                    >

                        <div class="info-card-icon">

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                            >
                                <path d="M5 12h14"></path>
                                <path d="M13 6l6 6-6 6"></path>
                            </svg>

                        </div>


                        <h3>
                            Alur Pelayanan
                        </h3>


                        <p>
                            Pelajari langkah pelayanan dari
                            pendaftaran sampai kedatangan.
                        </p>


                        <div class="info-card-arrow">
                            Lihat alur →
                        </div>

                    </a>


                    <a
                        href="#persiapan"
                        class="info-card info-card-navy reveal reveal-delay-2"
                    >

                        <div class="info-card-icon">

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                            >
                                <path d="M6 3h12v18H6z"></path>
                                <path d="M9 8h6"></path>
                                <path d="M9 12h6"></path>
                                <path d="M9 16h4"></path>
                            </svg>

                        </div>


                        <h3>
                            Persiapan
                        </h3>


                        <p>
                            Ketahui hal yang perlu disiapkan
                            sebelum datang ke BPOM.
                        </p>


                        <div class="info-card-arrow">
                            Lihat persiapan →
                        </div>

                    </a>


                    <a
                        href="#faq"
                        class="info-card info-card-navy reveal reveal-delay-3"
                    >

                        <div class="info-card-icon">

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                            >
                                <circle
                                    cx="12"
                                    cy="12"
                                    r="9"
                                ></circle>

                                <path d="M9.5 9a2.5 2.5 0 1 1 4.2 1.8c-.9.7-1.7 1.1-1.7 2.2"></path>

                                <path d="M12 17h.01"></path>
                            </svg>

                        </div>


                        <h3>
                            FAQ
                        </h3>


                        <p>
                            Temukan jawaban dari pertanyaan
                            yang sering ditanyakan masyarakat.
                        </p>


                        <div class="info-card-arrow">
                            Lihat FAQ →
                        </div>

                    </a>

                </div>

            </div>

        </section>


        {{-- =================================================
             JENIS LAYANAN
             ================================================= --}}

        <section
            class="service-section"
            id="jenis-layanan"
        >

            <div class="info-container">

                <div class="section-heading reveal">

                    <span class="section-label">
                        Layanan BPOM
                    </span>


                    <h2 class="section-title">
                        Jenis Layanan yang Tersedia
                    </h2>


                    <p class="section-description">
                        Pilih salah satu layanan untuk melihat
                        informasi lebih lengkap.
                    </p>

                </div>


                <div class="service-grid">


                    <button
                        type="button"
                        class="service-option active reveal"
                        onclick="showService('konsultasi', this)"
                    >

                        <div class="service-option-icon">

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                            >
                                <path d="M5 5h14v10H8l-3 3z"></path>
                            </svg>

                        </div>


                        <h3>
                            Konsultasi
                        </h3>


                        <p>
                            Konsultasikan kebutuhan layanan
                            dan informasi terkait BPOM.
                        </p>

                    </button>


                    <button
                        type="button"
                        class="service-option reveal reveal-delay-1"
                        onclick="showService('pengaduan', this)"
                    >

                        <div class="service-option-icon">

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                            >
                                <path d="M4 5h16v12H8l-4 3z"></path>
                                <path d="M8 9h8"></path>
                                <path d="M8 13h5"></path>
                            </svg>

                        </div>


                        <h3>
                            Pengaduan
                        </h3>


                        <p>
                            Sampaikan pengaduan atau laporan
                            yang berkaitan dengan layanan BPOM.
                        </p>

                    </button>


                    <button
                        type="button"
                        class="service-option reveal reveal-delay-2"
                        onclick="showService('informasi', this)"
                    >

                        <div class="service-option-icon">

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                            >
                                <circle
                                    cx="12"
                                    cy="12"
                                    r="9"
                                ></circle>

                                <path d="M12 10v6"></path>
                                <path d="M12 7h.01"></path>
                            </svg>

                        </div>


                        <h3>
                            Informasi
                        </h3>


                        <p>
                            Dapatkan informasi mengenai produk,
                            layanan, persyaratan dan prosedur.
                        </p>

                    </button>


                    <button
                        type="button"
                        class="service-option reveal reveal-delay-3"
                        onclick="showService('administrasi', this)"
                    >

                        <div class="service-option-icon">

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                            >
                                <rect
                                    x="4"
                                    y="4"
                                    width="16"
                                    height="16"
                                    rx="2"
                                ></rect>

                                <path d="M8 9h8"></path>
                                <path d="M8 13h8"></path>
                                <path d="M8 17h5"></path>
                            </svg>

                        </div>


                        <h3>
                            Administrasi
                        </h3>


                        <p>
                            Informasi mengenai dokumen dan
                            kebutuhan administrasi layanan.
                        </p>

                    </button>

                </div>


                <div
                    class="service-detail reveal"
                    id="serviceDetail"
                >

                    <h3 id="serviceDetailTitle">
                        Konsultasi Layanan BPOM
                    </h3>


                    <p id="serviceDetailText">
                        Dapatkan bantuan dan konsultasi mengenai
                        layanan BPOM sesuai kebutuhan Anda.
                    </p>


                    <a
                        href="{{ route('pendaftaran.mulai') }}"
                        class="service-detail-action"
                    >
                        Daftar Layanan
                    </a>

                </div>

            </div>

        </section>


        {{-- =================================================
             ALUR
             ================================================= --}}

        <section
            class="flow-section"
            id="alur"
        >

            <div class="info-container">

                <div class="section-heading reveal">

                    <span class="section-label">
                        Alur Pelayanan
                    </span>


                    <h2 class="section-title">
                        Cara menggunakan SEDOLOR
                    </h2>


                    <p class="section-description">
                        Proses dibuat sederhana agar Anda dapat
                        memahami setiap tahap pelayanan.
                    </p>

                </div>


                <div class="flow-grid">


                    <article class="flow-card reveal">

                        <div class="flow-number">
                            01
                        </div>


                        <h3>
                            Daftar Layanan
                        </h3>


                        <p>
                            Pilih layanan yang Anda perlukan
                            dan lengkapi data pendaftaran.
                        </p>

                    </article>


                    <article class="flow-card reveal reveal-delay-1">

                        <div class="flow-number">
                            02
                        </div>


                        <h3>
                            Pilih Jadwal
                        </h3>


                        <p>
                            Pilih tanggal dan waktu pelayanan
                            yang tersedia.
                        </p>

                    </article>


                    <article class="flow-card reveal reveal-delay-2">

                        <div class="flow-number">
                            03
                        </div>


                        <h3>
                            Konfirmasi
                        </h3>


                        <p>
                            Periksa kembali data dan jadwal
                            sebelum menyelesaikan pendaftaran.
                        </p>

                    </article>


                    <article class="flow-card reveal reveal-delay-3">

                        <div class="flow-number">
                            04
                        </div>


                        <h3>
                            Datang
                        </h3>


                        <p>
                            Datang sesuai jadwal dan gunakan
                            nomor antrean yang telah diberikan.
                        </p>

                    </article>

                </div>

            </div>

        </section>


        {{-- =================================================
             PERSIAPAN
             ================================================= --}}

        <section
            class="preparation-section"
            id="persiapan"
        >

            <div class="info-container">

                <div class="section-heading reveal">

                    <span class="section-label">
                        Persiapan
                    </span>


                    <h2 class="section-title">
                        Sebelum datang ke BPOM
                    </h2>


                    <p class="section-description">
                        Pastikan beberapa hal berikut sudah
                        disiapkan agar pelayanan berjalan lancar.
                    </p>

                </div>


                <div class="preparation-grid">


                    <article class="preparation-card reveal">

                        <div class="preparation-icon">

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                            >
                                <rect
                                    x="4"
                                    y="5"
                                    width="16"
                                    height="14"
                                    rx="2"
                                ></rect>

                                <circle
                                    cx="9"
                                    cy="11"
                                    r="2"
                                ></circle>

                                <path d="M13 10h4"></path>
                                <path d="M13 14h4"></path>
                            </svg>

                        </div>


                        <h3>
                            Siapkan Identitas
                        </h3>


                        <p>
                            Pastikan identitas diri yang diperlukan
                            sudah tersedia sebelum pelayanan.
                        </p>

                    </article>


                    <article class="preparation-card reveal reveal-delay-1">

                        <div class="preparation-icon">

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                            >
                                <path d="M6 3h12v18H6z"></path>
                                <path d="M9 8h6"></path>
                                <path d="M9 12h6"></path>
                                <path d="M9 16h4"></path>
                            </svg>

                        </div>


                        <h3>
                            Siapkan Dokumen
                        </h3>


                        <p>
                            Bawa dokumen atau persyaratan sesuai
                            jenis layanan yang dipilih.
                        </p>

                    </article>


                    <article class="preparation-card reveal reveal-delay-2">

                        <div class="preparation-icon">

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                            >
                                <circle
                                    cx="12"
                                    cy="12"
                                    r="9"
                                ></circle>

                                <path d="M12 7v5l3 2"></path>
                            </svg>

                        </div>


                        <h3>
                            Datang Tepat Waktu
                        </h3>


                        <p>
                            Datang sesuai tanggal dan waktu yang
                            telah dipilih pada saat pendaftaran.
                        </p>

                    </article>


                    <article class="preparation-card reveal reveal-delay-3">

                        <div class="preparation-icon">

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                            >
                                <path d="M6 3h12v18H6z"></path>
                                <path d="M9 8h6"></path>
                                <path d="M9 12h6"></path>
                                <path d="M9 16h6"></path>
                            </svg>

                        </div>


                        <h3>
                            Simpan Nomor Antrean
                        </h3>


                        <p>
                            Simpan nomor antrean yang diberikan
                            agar mudah ditunjukkan saat datang.
                        </p>

                    </article>

                </div>

            </div>

        </section>


        {{-- =================================================
             JADWAL
             ================================================= --}}

        <section
            class="schedule-section"
            id="jadwal"
        >

            <div class="info-container">

                <div class="section-heading reveal">

                    <span class="section-label">
                        Jadwal & Antrean
                    </span>


                    <h2 class="section-title">
                        Kelola jadwal pelayanan Anda
                    </h2>


                    <p class="section-description">
                        Setelah melakukan pendaftaran, Anda dapat
                        melihat informasi jadwal dan nomor antrean.
                    </p>

                </div>


                <div class="schedule-box reveal">


                    <div class="schedule-info">

                        <h3>
                            Cek jadwal dan antrean
                        </h3>


                        <p>
                            Pastikan Anda mengetahui tanggal,
                            waktu, dan nomor antrean sebelum
                            datang ke BPOM Palembang.
                        </p>


                        <a
                            href="/jadwal-antrean"
                            class="schedule-link"
                        >
                            Lihat Jadwal & Antrean →
                        </a>

                    </div>


                    <div class="schedule-card">

                        <div class="schedule-card-top">

                            <div>

                                <small>
                                    Nomor Antrean
                                </small>

                                <div class="queue-number">
                                    A-012
                                </div>

                            </div>


                            <span class="schedule-status">
                                Terdaftar
                            </span>

                        </div>


                        <div class="schedule-details">

                            <div class="schedule-detail">

                                <small>
                                    Layanan
                                </small>

                                <strong>
                                    Konsultasi Layanan BPOM
                                </strong>

                            </div>


                            <div class="schedule-detail">

                                <small>
                                    Waktu
                                </small>

                                <strong>
                                    09.00 WIB
                                </strong>

                            </div>


                            <div class="schedule-detail">

                                <small>
                                    Tanggal
                                </small>

                                <strong>
                                    15 September 2026
                                </strong>

                            </div>


                            <div class="schedule-detail">

                                <small>
                                    Durasi
                                </small>

                                <strong>
                                    30 Menit
                                </strong>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- =================================================
             FAQ
             ================================================= --}}

        <section
            class="faq-section"
            id="faq"
        >

            <div class="info-container">

                <div class="section-heading reveal">

                    <span class="section-label">
                        FAQ
                    </span>


                    <h2 class="section-title">
                        Pertanyaan yang sering ditanyakan
                    </h2>


                    <p class="section-description">
                        Temukan jawaban singkat mengenai penggunaan
                        SEDOLOR dan layanan BPOM.
                    </p>

                </div>


                <div class="faq-list">


                    <div class="faq-item reveal">

                        <button
                            type="button"
                            class="faq-question"
                            onclick="toggleInfoAccordion(this)"
                        >

                            <span>
                                Apa itu SEDOLOR?
                            </span>


                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>

                        </button>


                        <div class="faq-answer">

                            SEDOLOR merupakan layanan digital yang
                            membantu masyarakat memperoleh informasi
                            dan mengakses layanan BPOM Palembang
                            dengan lebih mudah.

                        </div>

                    </div>


                    <div class="faq-item reveal reveal-delay-1">

                        <button
                            type="button"
                            class="faq-question"
                            onclick="toggleInfoAccordion(this)"
                        >

                            <span>
                                Bagaimana cara melakukan pendaftaran?
                            </span>


                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>

                        </button>


                        <div class="faq-answer">

                            Masuk ke akun SEDOLOR, pilih layanan
                            yang dibutuhkan, lengkapi data, kemudian
                            pilih jadwal pelayanan yang tersedia.

                        </div>

                    </div>


                    <div class="faq-item reveal reveal-delay-2">

                        <button
                            type="button"
                            class="faq-question"
                            onclick="toggleInfoAccordion(this)"
                        >

                            <span>
                                Apakah saya mendapatkan nomor antrean?
                            </span>


                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>

                        </button>


                        <div class="faq-answer">

                            Ya. Setelah proses pendaftaran selesai,
                            informasi jadwal dan nomor antrean akan
                            diberikan kepada pengguna.

                        </div>

                    </div>


                    <div class="faq-item reveal reveal-delay-3">

                        <button
                            type="button"
                            class="faq-question"
                            onclick="toggleInfoAccordion(this)"
                        >

                            <span>
                                Apakah SEDOLOR mendukung aksesibilitas?
                            </span>


                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>

                        </button>


                        <div class="faq-answer">

                            Ya. SEDOLOR menyediakan fitur seperti
                            pembaca suara, perbesar teks, kontras
                            tinggi, dan pengurangan animasi.

                        </div>

                    </div>


                    <div class="faq-item reveal">

                        <button
                            type="button"
                            class="faq-question"
                            onclick="toggleInfoAccordion(this)"
                        >

                            <span>
                                Apa yang harus dibawa saat datang?
                            </span>


                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>

                        </button>


                        <div class="faq-answer">

                            Siapkan identitas, dokumen persyaratan
                            sesuai layanan, serta simpan nomor
                            antrean yang telah diberikan.

                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- =================================================
             CTA
             ================================================= --}}

        <section class="cta-section">

            <div class="info-container">

                <div class="cta reveal">

                    <div class="cta-content">

                        <h2>
                            Siap menggunakan layanan SEDOLOR?
                        </h2>


                        <p>
                            Mulai pendaftaran layanan BPOM Palembang
                            dengan proses yang sederhana dan mudah
                            dipahami.
                        </p>


                        <a
                            href="{{ route('pendaftaran.mulai') }}"
                            class="cta-button"
                        >
                            Daftar Layanan
                        </a>

                    </div>

                </div>

            </div>

        </section>


        {{-- =================================================
             ACCESSIBILITY
             ================================================= --}}

        <section
    id="aksesibilitas"
    style="
        padding: 70px 0;
        background: #FFFFFF;
    "
>
    <div class="info-container">

        <div class="reveal">

            <span
                class="section-label"
                style="
                    background: #EAF4FF;
                    color: #0B1F4B;
                "
            >
                Aksesibilitas
            </span>

            <h2
                class="section-title"
                style="
                    color: #0B1F4B;
                "
            >
                SEDOLOR untuk semua
            </h2>

            <p
                class="section-description"
                style="
                    color: #2563EB;
                "
            >
                Sesuaikan tampilan halaman agar lebih nyaman
                digunakan sesuai kebutuhan Anda.
            </p>

        </div>

    </div>
</section>

    </main>


    {{-- =====================================================
         FOOTER
         PERSIS SEPERTI HOME
         ===================================================== --}}

    <footer class="sedolor-footer">

        <div class="info-container">


            <div class="footer-grid">


                <div class="footer-brand">

                    <div
                        class="footer-brand-mark"
                    >

                        <img
                            src="{{ asset('assets/logosedolor.png') }}"
                            alt="Logo SEDOLOR"
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


                        <a href="{{ route('pendaftaran.mulai') }}">
                            Layanan
                        </a>


                        <a href="#alur">
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

</div>


{{-- =========================================================
     ACCESSIBILITY FLOATING BUTTON
     ========================================================= --}}

<button
    type="button"
    class="accessibility-float"
    id="accessibilityButton"
    aria-label="Buka pengaturan aksesibilitas"
    aria-expanded="false"
>

    <svg
        class="icon"
        viewBox="0 0 24 24"
        aria-hidden="true"
    >

        <circle
            cx="12"
            cy="4"
            r="2"
        ></circle>

        <path d="M5 8h14"></path>

        <path d="M12 6v7"></path>

        <path d="M8 21l4-8 4 8"></path>

        <path d="M8 13l-3 4"></path>

        <path d="M16 13l3 4"></path>

    </svg>

</button>


<div
    class="accessibility-panel"
    id="accessibilityPanel"
>

    <h3>
        Aksesibilitas
    </h3>


    <div class="accessibility-tools">


        <button
            type="button"
            class="accessibility-tool"
            id="readToggle"
        >

            <strong>
                🔊 Baca Halaman
            </strong>

            <small>
                Membacakan isi halaman.
            </small>

        </button>


        <button
            type="button"
            class="accessibility-tool"
            id="stopRead"
        >

            <strong>
                ■ Berhenti
            </strong>

            <small>
                Hentikan pembacaan suara.
            </small>

        </button>


        <button
            type="button"
            class="accessibility-tool"
            id="fontToggle"
        >

            <strong>
                A+ Perbesar
            </strong>

            <small>
                Perbesar ukuran teks.
            </small>

        </button>


        <button
            type="button"
            class="accessibility-tool"
            id="fontDecrease"
        >

            <strong>
                A− Perkecil
            </strong>

            <small>
                Kembalikan ukuran teks.
            </small>

        </button>


        <button
            type="button"
            class="accessibility-tool"
            id="contrastToggle"
        >

            <strong>
                Kontras Tinggi
            </strong>

            <small>
                Tingkatkan kontras warna.
            </small>

        </button>


        <button
            type="button"
            class="accessibility-tool"
            id="animationToggle"
        >

            <strong>
                Kurangi Animasi
            </strong>

            <small>
                Kurangi efek gerakan.
            </small>

        </button>


        <button
            type="button"
            class="accessibility-tool"
            id="resetAccessibility"
            style="grid-column: 1 / -1;"
        >

            <strong>
                Reset
            </strong>

            <small>
                Kembalikan pengaturan awal.
            </small>

        </button>

    </div>

</div>


{{-- =========================================================
     BACK TO TOP
     ========================================================= --}}

<button
    type="button"
    class="back-to-top"
    id="backToTop"
    aria-label="Kembali ke atas"
>

    <svg
        class="icon"
        viewBox="0 0 24 24"
        aria-hidden="true"
    >

        <path d="M12 19V5"></path>

        <path d="M6 11l6-6 6 6"></path>

    </svg>

</button>


{{-- =========================================================
     JAVASCRIPT
     ========================================================= --}}

<script>

document.addEventListener('DOMContentLoaded', function () {


    /* =====================================================
       SCROLL REVEAL
       Section/card akan muncul saat masuk viewport.
       HERO TIDAK terkena reveal.
       ===================================================== */

    const revealElements =
        document.querySelectorAll('.reveal');


    if ('IntersectionObserver' in window) {

        const revealObserver =
            new IntersectionObserver(
                function (entries, observer) {

                    entries.forEach(function (entry) {

                        if (entry.isIntersecting) {

                            entry.target.classList.add(
                                'is-visible'
                            );

                            observer.unobserve(
                                entry.target
                            );

                        }

                    });

                },
                {
                    threshold: 0.12,

                    rootMargin:
                        '0px 0px -45px 0px'
                }
            );


        revealElements.forEach(function (element) {

            revealObserver.observe(element);

        });

    } else {

        revealElements.forEach(function (element) {

            element.classList.add(
                'is-visible'
            );

        });

    }


    /* =====================================================
       SERVICE DATA
       ===================================================== */

    const serviceData = {

        konsultasi: {

            title:
                'Konsultasi Layanan BPOM',

            text:
                'Dapatkan bantuan dan konsultasi mengenai layanan BPOM sesuai dengan kebutuhan Anda.'

        },


        pengaduan: {

            title:
                'Pengaduan',

            text:
                'Sampaikan pengaduan atau laporan yang berkaitan dengan layanan dan pengawasan BPOM.'

        },


        informasi: {

            title:
                'Informasi Layanan',

            text:
                'Temukan informasi mengenai jenis layanan, persyaratan, prosedur, dan hal yang perlu disiapkan sebelum datang.'

        },


        administrasi: {

            title:
                'Administrasi',

            text:
                'Dapatkan informasi mengenai dokumen dan kebutuhan administrasi untuk layanan yang Anda pilih.'

        }

    };


    window.showService =
        function (type, button) {

            const data =
                serviceData[type];

            if (!data) {
                return;
            }


            const title =
                document.getElementById(
                    'serviceDetailTitle'
                );


            const text =
                document.getElementById(
                    'serviceDetailText'
                );


            if (title) {
                title.textContent =
                    data.title;
            }


            if (text) {
                text.textContent =
                    data.text;
            }


            document
                .querySelectorAll('.service-option')
                .forEach(function (item) {

                    item.classList.remove(
                        'active'
                    );

                });


            if (button) {

                button.classList.add(
                    'active'
                );

            }

        };


    /* =====================================================
       FAQ ACCORDION
       ===================================================== */

    window.toggleInfoAccordion =
        function (button) {

            const item =
                button.closest('.faq-item');


            if (!item) {
                return;
            }


            const wasActive =
                item.classList.contains(
                    'active'
                );


            document
                .querySelectorAll('.faq-item')
                .forEach(function (faq) {

                    faq.classList.remove(
                        'active'
                    );

                });


            if (!wasActive) {

                item.classList.add(
                    'active'
                );

            }

        };


    /* =====================================================
       ACCESSIBILITY PANEL
       ===================================================== */

    const accessibilityButton =
        document.getElementById(
            'accessibilityButton'
        );


    const accessibilityPanel =
        document.getElementById(
            'accessibilityPanel'
        );


    if (
        accessibilityButton &&
        accessibilityPanel
    ) {

        accessibilityButton.addEventListener(
            'click',
            function () {

                const isOpen =
                    accessibilityPanel.classList.toggle(
                        'open'
                    );


                this.setAttribute(
                    'aria-expanded',
                    isOpen
                        ? 'true'
                        : 'false'
                );

            }
        );

    }


    /* =====================================================
       PERBESAR TEKS
       ===================================================== */

    const fontToggle =
        document.getElementById(
            'fontToggle'
        );


    if (fontToggle) {

        fontToggle.addEventListener(
            'click',
            function () {

                const active =
                    document.body.classList.toggle(
                        'sedolor-large-text'
                    );


                this.classList.toggle(
                    'active',
                    active
                );

            }
        );

    }


    /* =====================================================
       PERKECIL / RESET UKURAN
       ===================================================== */

    const fontDecrease =
        document.getElementById(
            'fontDecrease'
        );


    if (fontDecrease) {

        fontDecrease.addEventListener(
            'click',
            function () {

                document.body.classList.remove(
                    'sedolor-large-text'
                );


                if (fontToggle) {

                    fontToggle.classList.remove(
                        'active'
                    );

                }

            }
        );

    }


    /* =====================================================
       KONTRAS TINGGI
       ===================================================== */

    const contrastToggle =
        document.getElementById(
            'contrastToggle'
        );


    if (contrastToggle) {

        contrastToggle.addEventListener(
            'click',
            function () {

                const active =
                    document.body.classList.toggle(
                        'sedolor-high-contrast'
                    );


                this.classList.toggle(
                    'active',
                    active
                );

            }
        );

    }


    /* =====================================================
       REDUCE ANIMATION
       ===================================================== */

    const animationToggle =
        document.getElementById(
            'animationToggle'
        );


    if (animationToggle) {

        animationToggle.addEventListener(
            'click',
            function () {

                const active =
                    document.body.classList.toggle(
                        'no-animation'
                    );


                this.classList.toggle(
                    'active',
                    active
                );

            }
        );

    }


    /* =====================================================
       TEXT TO SPEECH
       ===================================================== */

    const readToggle =
        document.getElementById(
            'readToggle'
        );


    const stopRead =
        document.getElementById(
            'stopRead'
        );


    function stopSpeech() {

        if (
            'speechSynthesis' in window
        ) {

            window.speechSynthesis.cancel();

        }


        if (readToggle) {

            readToggle.classList.remove(
                'active'
            );

        }

    }


    if (readToggle) {

        readToggle.addEventListener(
            'click',
            function () {

                if (
                    !('speechSynthesis' in window)
                ) {

                    alert(
                        'Browser Anda belum mendukung fitur pembaca suara.'
                    );

                    return;

                }


                if (
                    window.speechSynthesis.speaking
                ) {

                    stopSpeech();

                    return;

                }


                const main =
                    document.getElementById(
                        'main-content'
                    );


                if (!main) {
                    return;
                }


                const text =
                    main.innerText.trim();


                if (!text) {
                    return;
                }


                const speech =
                    new SpeechSynthesisUtterance(
                        text
                    );


                speech.lang =
                    'id-ID';


                speech.rate =
                    0.9;


                speech.pitch =
                    1;


                speech.onend =
                    function () {

                        readToggle.classList.remove(
                            'active'
                        );

                    };


                speech.onerror =
                    function () {

                        readToggle.classList.remove(
                            'active'
                        );

                    };


                this.classList.add(
                    'active'
                );


                window.speechSynthesis.speak(
                    speech
                );

            }
        );

    }


    if (stopRead) {

        stopRead.addEventListener(
            'click',
            function () {

                stopSpeech();

            }
        );

    }


    /* =====================================================
       RESET ACCESSIBILITY
       ===================================================== */

    const resetAccessibility =
        document.getElementById(
            'resetAccessibility'
        );


    if (resetAccessibility) {

        resetAccessibility.addEventListener(
            'click',
            function () {

                document.body.classList.remove(
                    'sedolor-large-text',
                    'sedolor-high-contrast',
                    'no-animation'
                );


                document
                    .querySelectorAll(
                        '.accessibility-tool'
                    )
                    .forEach(function (tool) {

                        tool.classList.remove(
                            'active'
                        );

                    });


                stopSpeech();

            }
        );

    }


    /* =====================================================
       STOP SPEECH SAAT MENINGGALKAN HALAMAN
       ===================================================== */

    window.addEventListener(
        'beforeunload',
        function () {

            if (
                'speechSynthesis' in window
            ) {

                window.speechSynthesis.cancel();

            }

        }
    );


    /* =====================================================
       BACK TO TOP
       ===================================================== */

    const backToTop =
        document.getElementById(
            'backToTop'
        );


    function updateBackToTop() {

        if (!backToTop) {
            return;
        }


        if (window.scrollY > 500) {

            backToTop.classList.add(
                'show'
            );

        } else {

            backToTop.classList.remove(
                'show'
            );

        }

    }


    window.addEventListener(
        'scroll',
        updateBackToTop,
        {
            passive: true
        }
    );


    updateBackToTop();


    if (backToTop) {

        backToTop.addEventListener(
            'click',
            function () {

                window.scrollTo({

                    top: 0,

                    behavior: 'smooth'

                });

            }
        );

    }


    /* =====================================================
       ESCAPE
       ===================================================== */

    document.addEventListener(
        'keydown',
        function (event) {

            if (
                event.key === 'Escape'
            ) {

                if (
                    accessibilityPanel
                ) {

                    accessibilityPanel.classList.remove(
                        'open'
                    );

                    if (
                        accessibilityButton
                    ) {

                        accessibilityButton.setAttribute(
                            'aria-expanded',
                            'false'
                        );

                    }

                }

            }

        }
    );

});

</script>

@endsection