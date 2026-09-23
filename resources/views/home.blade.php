@extends('layouts.app')

@section('title', 'SEDOLOR - Layanan BPOM Palembang')

@section('content')

<style>
    /* =========================================================
       SEDOLOR - PUBLIC HOMEPAGE
       ========================================================= */

    :root {
        --primary: #155EEF;
        --primary-dark: #0B45C4;
        --primary-soft: #E8F0FF;

        --navy: #102A43;
        --text: #18324B;
        --muted: #5B6B7D;

        --page-bg: #EEF4FA;
        --section-bg: #DCEAF7;
        --section-blue: #E4F0FC;
        --section-blue-dark: #C9DDF1;

        --white: #FFFFFF;
        --border: #CFDCE9;

        --green: #087F5B;
        --green-soft: #E7F7F1;

        --orange: #A85B00;
        --orange-soft: #FFF3DF;

        --shadow: 0 8px 25px rgba(31, 55, 80, .08);
        --shadow-hover: 0 16px 35px rgba(21, 94, 239, .16);

        --radius: 18px;
    }


    * {
        box-sizing: border-box;
    }


    html {
        scroll-behavior: smooth;
    }


    body {
        background: var(--page-bg);
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


    .icon-fill {
        fill: currentColor;
        stroke: none;
    }


    /* =========================================================
       SKIP LINK
       ========================================================= */

    .skip-link {
        position: fixed;

        top: -100px;
        left: 20px;

        z-index: 9999;

        padding: 13px 18px;

        background: #000;
        color: #fff;

        border-radius: 8px;

        font-weight: 800;

        text-decoration: none;
    }


    .skip-link:focus {
        top: 20px;
    }


    /* =========================================================
       CONTAINER
       ========================================================= */

    .sedolor-home {
        width: 100%;

        overflow: hidden;

        background: var(--page-bg);
    }


    .sedolor-container {
        width: min(1160px, calc(100% - 40px));

        margin: 0 auto;
    }


    /* =========================================================
       HERO
       ========================================================= */

    .hero {
        position: relative;

        min-height: 570px;

        padding: 78px 0 88px;

        overflow: hidden;

        /*
         * FOTO BPOM PALEMBANG
         * TIDAK DIUBAH
         */

        background-image:

            linear-gradient(
                90deg,
                rgba(7, 31, 61, .90) 0%,
                rgba(12, 55, 105, .80) 35%,
                rgba(21, 94, 239, .52) 68%,
                rgba(21, 94, 239, .30) 100%
            ),

            url('{{ asset('assets/fotobpom.jpg') }}');

        background-size: cover;

        background-position: center;

        background-repeat: no-repeat;
    }


    .hero::before {
        content: "";

        position: absolute;

        inset: 0;

        background:
            linear-gradient(
                135deg,
                rgba(5, 28, 55, .28),
                rgba(21, 94, 239, .08)
            );

        pointer-events: none;
    }


    .hero::after {
        content: "";

        position: absolute;

        width: 520px;
        height: 520px;

        right: -190px;
        top: -190px;

        border-radius: 50%;

        background:
            rgba(255,255,255,.08);

        border:
            1px solid rgba(255,255,255,.13);

        box-shadow:
            0 0 0 45px rgba(255,255,255,.035),
            0 0 0 90px rgba(255,255,255,.02);

        pointer-events: none;
    }


    .hero .sedolor-container {
        position: relative;

        z-index: 3;
    }


    .hero-grid {
        position: relative;

        z-index: 2;

        display: grid;

        grid-template-columns:
            minmax(0, 1.25fr)
            minmax(330px, .75fr);

        align-items: center;

        gap: 60px;
    }


    /* =========================================================
       HERO ANIMATION
       ========================================================= */

    @keyframes heroFadeUp {

        from {
            opacity: 0;

            transform:
                translateY(18px);
        }

        to {
            opacity: 1;

            transform:
                translateY(0);
        }

    }


    @keyframes heroPanelIn {

        from {
            opacity: 0;

            transform:
                translateX(25px)
                translateY(8px);
        }

        to {
            opacity: 1;

            transform:
                translateX(0)
                translateY(0);
        }

    }


    .hero-grid > div:first-child {
        animation:
            heroFadeUp .7s ease-out both;
    }


    .hero-panel {
        animation:
            heroPanelIn .8s ease-out .15s both;
    }


    /* =========================================================
       HERO CONTENT
       ========================================================= */

    .hero-badge {
        display: inline-flex;

        align-items: center;

        gap: 9px;

        padding: 9px 14px;

        border-radius: 999px;

        background: rgba(255,255,255,.94);

        color: var(--primary);

        border:
            1px solid rgba(255,255,255,.65);

        font-size: 13px;

        font-weight: 800;

        box-shadow:
            0 8px 20px rgba(0,0,0,.12);

        margin-bottom: 20px;

        backdrop-filter: blur(8px);
    }


    .hero-badge-dot {
        width: 9px;
        height: 9px;

        border-radius: 50%;

        background: var(--green);

        box-shadow:
            0 0 0 4px rgba(8,127,91,.12);
    }


    .hero-title {
        margin: 0 0 18px;

        max-width: 700px;

        font-size: clamp(38px, 5vw, 58px);

        line-height: 1.08;

        letter-spacing: -1.3px;

        font-weight: 900;

        color: #FFFFFF;

        text-shadow:
            0 3px 15px rgba(0,0,0,.18);
    }


    .hero-title span {
        color: #8FC3FF;

        text-shadow:
            0 2px 10px rgba(0,0,0,.15);
    }


    .hero-description {
        max-width: 650px;

        margin: 0;

        font-size: 18px;

        line-height: 1.7;

        color: #EAF3FF;

        text-shadow:
            0 2px 8px rgba(0,0,0,.18);
    }


    .hero-buttons {
        display: flex;

        flex-wrap: wrap;

        gap: 12px;

        margin-top: 30px;
    }


    /* =========================================================
       BUTTON
       ========================================================= */

    .sedolor-btn {
        display: inline-flex;

        align-items: center;
        justify-content: center;

        gap: 9px;

        min-height: 52px;

        padding: 13px 21px;

        border-radius: 11px;

        font-size: 15px;

        font-weight: 800;

        text-decoration: none;

        border: 2px solid transparent;

        cursor: pointer;

        transition:
            background .2s ease,
            transform .2s ease,
            box-shadow .2s ease;
    }


    .sedolor-btn:hover {
        transform: translateY(-3px);
    }


    .sedolor-btn:focus-visible,
    button:focus-visible,
    a:focus-visible {
        outline: 4px solid rgba(21, 94, 239, .35);

        outline-offset: 3px;
    }


    .btn-primary {
        background: #155EEF;

        color: white;

        box-shadow:
            0 9px 22px rgba(0,0,0,.20);
    }


    .btn-primary:hover {
        background: #0B45C4;

        color: white;

        box-shadow:
            0 14px 30px rgba(0,0,0,.27);
    }


    .btn-outline {
        background: rgba(255,255,255,.94);

        color: var(--navy);

        border-color:
            rgba(255,255,255,.8);

        box-shadow:
            0 7px 18px rgba(0,0,0,.10);

        backdrop-filter: blur(6px);
    }


    .btn-outline:hover {
        background: white;

        color: var(--primary);
    }


    /* =========================================================
       HERO QUICK ACCESS
       ========================================================= */

    .hero-panel {
        position: relative;

        background:
            rgba(255,255,255,.96);

        border:
            1px solid rgba(255,255,255,.8);

        border-radius: 24px;

        padding: 27px;

        box-shadow:
            0 20px 45px rgba(4, 29, 57, .22);

        backdrop-filter: blur(12px);

        overflow: hidden;
    }


    .hero-panel::before {
        content: "";

        position: absolute;

        width: 120px;
        height: 120px;

        right: -45px;
        top: -45px;

        border-radius: 50%;

        background:
            var(--primary-soft);

        opacity: .8;
    }


    .hero-panel > * {
        position: relative;

        z-index: 2;
    }


    .hero-panel-label {
        color: var(--primary);

        font-size: 12px;

        font-weight: 900;

        letter-spacing: .7px;

        text-transform: uppercase;

        margin-bottom: 10px;
    }


    .hero-panel-title {
        margin: 0 0 20px;

        color: var(--navy);

        font-size: 22px;

        font-weight: 900;
    }


    .quick-action {
        display: flex;

        align-items: center;

        gap: 15px;

        padding: 15px;

        margin-bottom: 11px;

        border:
            1px solid var(--border);

        border-radius: 13px;

        background:
            #FAFCFE;

        text-decoration: none;

        color: var(--text);

        transition:
            .2s ease;
    }


    .quick-action:last-child {
        margin-bottom: 0;
    }


    .quick-action:hover {
        background:
            var(--primary-soft);

        border-color:
            #AFC7EE;

        transform:
            translateX(5px);

        box-shadow:
            0 7px 18px rgba(21,94,239,.09);
    }


    .quick-icon {
        width: 47px;
        height: 47px;

        flex-shrink: 0;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 12px;

        background:
            var(--primary-soft);

        color:
            var(--primary);

        transition:
            transform .2s ease;
    }


    .quick-action:hover .quick-icon {
        transform:
            scale(1.08)
            rotate(-3deg);
    }


    .quick-icon .icon {
        width: 23px;
        height: 23px;
    }


    .quick-text strong {
        display: block;

        margin-bottom: 3px;

        font-size: 15px;

        font-weight: 850;
    }


    .quick-text small {
        color: var(--muted);

        font-size: 13px;
    }


    .quick-arrow {
        margin-left: auto;

        color: var(--primary);

        transition:
            transform .2s ease;
    }


    .quick-action:hover .quick-arrow {
        transform:
            translateX(4px);
    }


    .quick-arrow .icon {
        width: 18px;
        height: 18px;
    }


    /* =========================================================
       SCROLL REVEAL
       ========================================================= */

    .reveal {
        opacity: 0;

        transform:
            translateY(45px);

        transition:
            opacity .75s ease,
            transform .75s cubic-bezier(.22,1,.36,1);
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
       ACCESSIBILITY
       ========================================================= */

    .accessibility-section {
        position: relative;

        padding: 25px 0 75px;

        background:
            linear-gradient(
                180deg,
                var(--page-bg) 0%,
                #D9E8F6 100%
            );
    }


    .accessibility-box {
        position: relative;

        display: grid;

        grid-template-columns:
            280px 1fr;

        gap: 28px;

        padding: 30px;

        overflow: hidden;

        background:
            linear-gradient(
                135deg,
                #102A43 0%,
                #123B60 55%,
                #155EEF 100%
            );

        border-radius: 22px;

        color: white;

        box-shadow:
            0 18px 38px rgba(16,42,67,.20);
    }


    .accessibility-box::before {
        content: "";

        position: absolute;

        width: 230px;
        height: 230px;

        right: -100px;
        top: -110px;

        border-radius: 50%;

        background:
            rgba(255,255,255,.08);

        border:
            1px solid rgba(255,255,255,.10);
    }


    .accessibility-box::after {
        content: "";

        position: absolute;

        width: 130px;
        height: 130px;

        left: 35%;
        bottom: -85px;

        border-radius: 50%;

        background:
            rgba(143,195,255,.12);
    }


    .accessibility-heading,
    .accessibility-tools {
        position: relative;

        z-index: 2;
    }


    .accessibility-heading {
        display: flex;

        flex-direction: column;

        justify-content: center;
    }


    .accessibility-icon-large {
        width: 52px;
        height: 52px;

        display: flex;

        align-items: center;
        justify-content: center;

        margin-bottom: 14px;

        border-radius: 14px;

        background:
            rgba(255,255,255,.13);

        color:
            #FFFFFF;

        border:
            1px solid rgba(255,255,255,.18);
    }


    .accessibility-icon-large .icon {
        width: 27px;
        height: 27px;
    }


    .accessibility-heading h2 {
        margin: 0 0 7px;

        font-size: 23px;

        font-weight: 900;
    }


    .accessibility-heading p {
        margin: 0;

        color:
            #D8E5F0;

        font-size: 14px;

        line-height: 1.55;
    }


    .accessibility-tools {
        display: grid;

        grid-template-columns:
            repeat(3, 1fr);

        gap: 12px;
    }


    .accessibility-tool {
        position: relative;

        min-height: 125px;

        padding: 18px;

        text-align: left;

        border:
            1px solid rgba(255,255,255,.18);

        border-radius: 15px;

        background:
            rgba(255,255,255,.09);

        color:
            white;

        cursor: pointer;

        overflow: hidden;

        transition:
            .22s ease;
    }


    .accessibility-tool::before {
        content: "";

        position: absolute;

        width: 80px;
        height: 80px;

        right: -35px;
        bottom: -40px;

        border-radius: 50%;

        background:
            rgba(255,255,255,.07);

        transition:
            .25s ease;
    }


    .accessibility-tool:hover::before {
        transform:
            scale(1.5);
    }


    .accessibility-tool:hover,
    .accessibility-tool.active {
        background:
            #FFFFFF;

        color:
            var(--navy);

        border-color:
            #FFFFFF;

        transform:
            translateY(-5px);

        box-shadow:
            0 12px 25px rgba(0,0,0,.16);
    }


    .tool-icon {
        display: flex;

        align-items: center;

        margin-bottom: 9px;
    }


    .tool-icon .icon {
        width: 25px;
        height: 25px;
    }


    .tool-name {
        display: block;

        margin-bottom: 3px;

        font-size: 14px;

        font-weight: 900;
    }


    .tool-desc {
        display: block;

        font-size: 12px;

        opacity: .78;

        line-height: 1.4;
    }


    /* =========================================================
       SECTION
       ========================================================= */

    .section {
        position: relative;

        padding: 82px 0;

        background:
            linear-gradient(
                180deg,
                #E7F1FA 0%,
                #DCEAF7 100%
            );
    }


    .section-alt {
        background:
            linear-gradient(
                180deg,
                #CFE2F2 0%,
                #E1EDF7 100%
            );
    }


    .section-header {
        max-width: 700px;

        margin-bottom: 34px;
    }


    .section-label {
        display: inline-flex;

        align-items: center;

        gap: 7px;

        margin-bottom: 10px;

        padding: 7px 12px;

        border-radius: 999px;

        background:
            rgba(21,94,239,.10);

        color:
            var(--primary);

        font-size: 12px;

        font-weight: 900;

        text-transform: uppercase;

        letter-spacing: .7px;
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

        line-height: 1.65;
    }


    /* =========================================================
       SERVICES
       ========================================================= */

    .services-grid {
        display: grid;

        grid-template-columns:
            repeat(3, minmax(0, 1fr));

        gap: 20px;
    }


    .service-card {
        position: relative;

        display: flex;

        flex-direction: column;

        min-height: 285px;

        padding: 25px;

        overflow: hidden;

        background:
            rgba(255,255,255,.82);

        border:
            1px solid rgba(173,195,217,.85);

        border-radius:
            var(--radius);

        box-shadow:
            0 8px 25px rgba(31,55,80,.07);

        backdrop-filter:
            blur(5px);

        transition:
            .25s ease;
    }


    .service-card::before {
        content: "";

        position: absolute;

        width: 100%;

        height: 4px;

        left: 0;
        top: 0;

        background:
            var(--primary);

        transform:
            scaleX(.25);

        transform-origin:
            left;

        transition:
            transform .25s ease;
    }


    .service-card:nth-child(2)::before {
        background:
            var(--green);
    }


    .service-card:nth-child(3)::before {
        background:
            var(--orange);
    }


    .service-card:hover {
        transform:
            translateY(-8px);

        background:
            #FFFFFF;

        box-shadow:
            var(--shadow-hover);

        border-color:
            #AFC7E0;
    }


    .service-card:hover::before {
        transform:
            scaleX(1);
    }


    .service-icon {
        width: 57px;
        height: 57px;

        display: flex;

        align-items: center;
        justify-content: center;

        margin-bottom: 18px;

        border-radius: 14px;

        background:
            var(--primary-soft);

        color:
            var(--primary);

        transition:
            transform .25s ease;
    }


    .service-card:hover .service-icon {
        transform:
            translateY(-3px)
            scale(1.06);
    }


    .service-icon .icon {
        width: 27px;
        height: 27px;
    }


    .service-card:nth-child(2) .service-icon {
        background:
            var(--green-soft);

        color:
            var(--green);
    }


    .service-card:nth-child(3) .service-icon {
        background:
            var(--orange-soft);

        color:
            var(--orange);
    }


    .service-title {
        margin: 0 0 8px;

        color:
            var(--navy);

        font-size: 19px;

        font-weight: 900;
    }


    .service-description {
        margin: 0;

        color:
            var(--muted);

        font-size: 14px;

        line-height: 1.6;
    }


    .service-link {
        display: flex;

        align-items: center;
        justify-content: center;

        gap: 7px;

        min-height: 46px;

        margin-top: auto;

        padding-top: 18px;

        color:
            var(--primary);

        font-size: 14px;

        font-weight: 900;

        text-decoration: none;

        transition:
            .2s ease;
    }


    .service-link:hover {
        gap: 11px;

        text-decoration:
            none;
    }


    .service-link .icon {
        width: 17px;
        height: 17px;

        transition:
            transform .2s ease;
    }


    .service-link:hover .icon {
        transform:
            translateX(3px);
    }


    /* =========================================================
       HOW IT WORKS
       ========================================================= */

    .steps {
        position: relative;

        display: grid;

        grid-template-columns:
            repeat(3, 1fr);

        gap: 25px;
    }


    .steps::before {
        content: "";

        position: absolute;

        top: 46px;

        left: 14%;

        right: 14%;

        height: 2px;

        background:
            linear-gradient(
                90deg,
                #8CB6DE,
                #155EEF,
                #8CB6DE
            );

        z-index: 0;
    }


    .step {
        position: relative;

        z-index: 1;

        padding: 27px;

        background:
            rgba(255,255,255,.72);

        border:
            1px solid rgba(166,193,217,.9);

        border-radius: 18px;

        box-shadow:
            0 8px 25px rgba(31,55,80,.07);

        backdrop-filter:
            blur(5px);

        transition:
            .25s ease;
    }


    .step:hover {
        transform:
            translateY(-7px);

        background:
            #FFFFFF;

        box-shadow:
            var(--shadow-hover);
    }


    .step-number {
        width: 46px;
        height: 46px;

        display: flex;

        align-items: center;
        justify-content: center;

        margin-bottom: 19px;

        border-radius: 50%;

        background:
            linear-gradient(
                135deg,
                #155EEF,
                #0B45C4
            );

        color:
            white;

        font-size: 14px;

        font-weight: 900;

        box-shadow:
            0 7px 16px rgba(21,94,239,.25);

        transition:
            transform .25s ease;
    }


    .step:hover .step-number {
        transform:
            scale(1.1)
            rotate(5deg);
    }


    .step-title {
        margin: 0 0 8px;

        color:
            var(--navy);

        font-size: 18px;

        font-weight: 900;
    }


    .step-text {
        margin: 0;

        color:
            var(--muted);

        font-size: 14px;

        line-height: 1.6;
    }


    /* =========================================================
       CTA
       ========================================================= */

    .cta-section {
        position: relative;

        padding: 80px 0;

        background:
            linear-gradient(
                180deg,
                #E1EDF7 0%,
                #D3E4F2 100%
            );
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
                #0C46B9
            );

        color:
            white;

        box-shadow:
            0 18px 40px rgba(21,94,239,.24);
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

        box-shadow:
            0 0 0 35px rgba(255,255,255,.025),
            0 0 0 70px rgba(255,255,255,.02);
    }


    .cta::after {
        content: "";

        position: absolute;

        width: 220px;
        height: 220px;

        right: -70px;
        top: -90px;

        border-radius: 50%;

        background:
            rgba(255,255,255,.09);
    }


    .cta-content {
        position: relative;

        z-index: 2;

        max-width: 680px;
    }


    .cta h2 {
        margin: 0 0 10px;

        font-size: 31px;

        font-weight: 900;
    }


    .cta p {
        margin: 0;

        color:
            #E5EEFF;

        line-height: 1.65;
    }


    .cta-button {
        margin-top: 23px;

        background:
            white;

        color:
            var(--primary);

        transition:
            .2s ease;
    }


    .cta-button:hover {
        background:
            #F3F7FF;

        color:
            var(--primary-dark);

        transform:
            translateY(-4px);

        box-shadow:
            0 10px 24px rgba(0,0,0,.18);
    }


    /* =========================================================
       FOOTER
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


    body.sedolor-large-text .hero-title {
        font-size:
            clamp(44px, 6vw, 66px);
    }


    body.sedolor-large-text .hero-description,
    body.sedolor-large-text .service-description,
    body.sedolor-large-text .section-description,
    body.sedolor-large-text .step-text {
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


    body.sedolor-high-contrast .hero {
        background-image:
            linear-gradient(
                90deg,
                rgba(0,0,0,.94),
                rgba(0,0,0,.82)
            ),
            url('{{ asset('assets/fotobpom.jpg') }}');
    }


    body.sedolor-high-contrast .section,
    body.sedolor-high-contrast .section-alt,
    body.sedolor-high-contrast .accessibility-section,
    body.sedolor-high-contrast .cta-section {
        background:
            #FFFFFF;
    }


    body.sedolor-high-contrast .hero-title,
    body.sedolor-high-contrast .section-title,
    body.sedolor-high-contrast .service-title,
    body.sedolor-high-contrast .step-title,
    body.sedolor-high-contrast .hero-panel-title {
        color:
            #000000;
    }


    body.sedolor-high-contrast .hero-title {
        color:
            #FFFFFF;
    }


    body.sedolor-high-contrast .hero-description {
        color:
            #FFFFFF;
    }


    body.sedolor-high-contrast .section-description,
    body.sedolor-high-contrast .service-description,
    body.sedolor-high-contrast .step-text {
        color:
            #111111;
    }


    body.sedolor-high-contrast .service-card,
    body.sedolor-high-contrast .step,
    body.sedolor-high-contrast .hero-panel {
        border:
            2px solid #000000;

        background:
            #FFFFFF;
    }


    body.sedolor-high-contrast .quick-action {
        border:
            2px solid #000000;

        background:
            #FFFFFF;
    }


    body.sedolor-high-contrast .nav-link,
    body.sedolor-high-contrast .header-login {
        color:
            #000000;
    }


    /* =========================================================
       RESPONSIVE
       ========================================================= */

    @media (max-width: 1050px) {

        .hero-grid {
            grid-template-columns:
                1fr;
        }


        .hero-panel {
            max-width:
                650px;
        }


        .accessibility-box {
            grid-template-columns:
                1fr;
        }


        .accessibility-tools {
            grid-template-columns:
                repeat(3, 1fr);
        }

    }


    @media (max-width: 850px) {

        .services-grid {
            grid-template-columns:
                repeat(2, 1fr);
        }


        .footer-grid {
            grid-template-columns:
                1fr 1fr;
        }


        .steps::before {
            display:
                none;
        }

    }


    @media (max-width: 700px) {

        .sedolor-container {
            width:
                min(100% - 28px, 1160px);
        }


        .hero {
            padding:
                48px 0 65px;

            min-height:
                auto;

            background-position:
                58% center;
        }


        .hero::after {
            width:
                300px;

            height:
                300px;

            right:
                -150px;

            top:
                -120px;
        }


        .hero-title {
            font-size:
                37px;
        }


        .hero-description {
            font-size:
                16px;
        }


        .hero-buttons {
            flex-direction:
                column;
        }


        .hero-buttons .sedolor-btn {
            width:
                100%;
        }


        .accessibility-section {
            padding-bottom:
                45px;
        }


        .accessibility-box {
            padding:
                21px;
        }


        .accessibility-tools {
            grid-template-columns:
                1fr;
        }


        .accessibility-tool {
            min-height:
                85px;
        }


        .section {
            padding:
                55px 0;
        }


        .section-title {
            font-size:
                27px;
        }


        .services-grid,
        .steps {
            grid-template-columns:
                1fr;
        }


        .service-card {
            min-height:
                235px;
        }


        .cta {
            padding:
                32px 24px;
        }


        .cta h2 {
            font-size:
                27px;
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
       REDUCED MOTION
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


{{-- =========================================================
     SKIP LINK
     ========================================================= --}}

<a
    href="#main-content"
    class="skip-link"
>
    Lewati ke konten utama
</a>


<div class="sedolor-home">

    {{-- =====================================================
         MAIN CONTENT
         ===================================================== --}}

    <main id="main-content">


        {{-- =================================================
             HERO
             ================================================= --}}

        <section class="hero">

            <div class="sedolor-container">

                <div class="hero-grid">


                    {{-- HERO CONTENT --}}

                    <div>

                        <div class="hero-badge">

                            <span
                                class="hero-badge-dot"
                                aria-hidden="true"
                            ></span>

                            Layanan Digital BPOM Palembang

                        </div>


                        <h1 class="hero-title">

                            Layanan BPOM yang
                            <span>lebih mudah</span>
                            untuk semua.

                        </h1>


                        <p class="hero-description">

                            SEDOLOR membantu masyarakat mengakses
                            layanan BPOM Palembang dengan lebih
                            sederhana, jelas, dan mudah digunakan,
                            termasuk bagi pengguna dengan kebutuhan
                            aksesibilitas.

                        </p>


                        <div class="hero-buttons">

                            <a
                                href="{{ route('login') }}"
                                class="sedolor-btn btn-primary"
                            >

                                Masuk ke SEDOLOR

                            </a>


                            <a
                                href="{{ route('register') }}"
                                class="sedolor-btn btn-outline"
                            >

                                Buat Akun

                            </a>

                        </div>

                    </div>


                    {{-- QUICK ACCESS --}}

                    <div class="hero-panel">

                        <div class="hero-panel-label">
                            Akses Cepat
                        </div>


                        <h2 class="hero-panel-title">
                            Apa yang ingin Anda lakukan?
                        </h2>


                        <a
                            href="#layanan"
                            class="quick-action"
                        >

                            <div
                                class="quick-icon"
                                aria-hidden="true"
                            >

                                <svg
                                    class="icon"
                                    viewBox="0 0 24 24"
                                >

                                    <rect
                                        x="5"
                                        y="4"
                                        width="14"
                                        height="17"
                                        rx="2"
                                    ></rect>

                                    <path
                                        d="M9 4.5V3h6v1.5"
                                    ></path>

                                    <path
                                        d="M9 10h6"
                                    ></path>

                                    <path
                                        d="M9 14h6"
                                    ></path>

                                    <path
                                        d="M9 18h4"
                                    ></path>

                                </svg>

                            </div>


                            <div class="quick-text">

                                <strong>
                                    Lihat Layanan
                                </strong>

                                <small>
                                    Temukan layanan BPOM
                                </small>

                            </div>


                            <span
                                class="quick-arrow"
                                aria-hidden="true"
                            >

                                <svg
                                    class="icon"
                                    viewBox="0 0 24 24"
                                >

                                    <path
                                        d="M5 12h13"
                                    ></path>

                                    <path
                                        d="M13 6l6 6-6 6"
                                    ></path>

                                </svg>

                            </span>

                        </a>


                        <a
                            href="#cara-kerja"
                            class="quick-action"
                        >

                            <div
                                class="quick-icon"
                                aria-hidden="true"
                            >

                                <svg
                                    class="icon"
                                    viewBox="0 0 24 24"
                                >

                                    <circle
                                        cx="12"
                                        cy="12"
                                        r="9"
                                    ></circle>

                                    <path
                                        d="M12 10v6"
                                    ></path>

                                    <path
                                        d="M12 7h.01"
                                    ></path>

                                </svg>

                            </div>


                            <div class="quick-text">

                                <strong>
                                    Cara Menggunakan
                                </strong>

                                <small>
                                    Lihat langkah-langkahnya
                                </small>

                            </div>


                            <span
                                class="quick-arrow"
                                aria-hidden="true"
                            >

                                <svg
                                    class="icon"
                                    viewBox="0 0 24 24"
                                >

                                    <path
                                        d="M5 12h13"
                                    ></path>

                                    <path
                                        d="M13 6l6 6-6 6"
                                    ></path>

                                </svg>

                            </span>

                        </a>


                        <a
                            href="#aksesibilitas"
                            class="quick-action"
                        >

                            <div
                                class="quick-icon"
                                aria-hidden="true"
                            >

                                <svg
                                    class="icon"
                                    viewBox="0 0 24 24"
                                >

                                    <circle
                                        cx="12"
                                        cy="4"
                                        r="2"
                                    ></circle>

                                    <path
                                        d="M5 8h14"
                                    ></path>

                                    <path
                                        d="M12 6v7"
                                    ></path>

                                    <path
                                        d="M8 21l4-8 4 8"
                                    ></path>

                                    <path
                                        d="M8 13l-3 4"
                                    ></path>

                                    <path
                                        d="M16 13l3 4"
                                    ></path>

                                </svg>

                            </div>


                            <div class="quick-text">

                                <strong>
                                    Aksesibilitas
                                </strong>

                                <small>
                                    Sesuaikan tampilan halaman
                                </small>

                            </div>


                            <span
                                class="quick-arrow"
                                aria-hidden="true"
                            >

                                <svg
                                    class="icon"
                                    viewBox="0 0 24 24"
                                >

                                    <path
                                        d="M5 12h13"
                                    ></path>

                                    <path
                                        d="M13 6l6 6-6 6"
                                    ></path>

                                </svg>

                            </span>

                        </a>

                    </div>

                </div>

            </div>

        </section>


        {{-- =================================================
             ACCESSIBILITY
             ================================================= --}}

        <section
            class="accessibility-section"
            id="aksesibilitas"
        >

            <div class="sedolor-container">

                <div class="accessibility-box reveal">


                    <div class="accessibility-heading">

                        <div
                            class="accessibility-icon-large"
                            aria-hidden="true"
                        >

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                            >

                                <circle
                                    cx="12"
                                    cy="4"
                                    r="2"
                                ></circle>

                                <path
                                    d="M5 8h14"
                                ></path>

                                <path
                                    d="M12 6v7"
                                ></path>

                                <path
                                    d="M8 21l4-8 4 8"
                                ></path>

                                <path
                                    d="M8 13l-3 4"
                                ></path>

                                <path
                                    d="M16 13l3 4"
                                ></path>

                            </svg>

                        </div>


                        <h2>
                            Aksesibilitas
                        </h2>


                        <p>
                            Sesuaikan tampilan SEDOLOR agar
                            lebih nyaman sesuai kebutuhan Anda.
                        </p>

                    </div>


                    <div class="accessibility-tools">


                        <button
                            type="button"
                            class="accessibility-tool reveal reveal-delay-1"
                            id="fontToggle"
                            aria-pressed="false"
                        >

                            <span
                                class="tool-icon"
                                aria-hidden="true"
                            >

                                <svg
                                    class="icon"
                                    viewBox="0 0 24 24"
                                >

                                    <path
                                        d="M4 19L9 5h2l5 14"
                                    ></path>

                                    <path
                                        d="M6 14h8"
                                    ></path>

                                    <path
                                        d="M17 8h4"
                                    ></path>

                                    <path
                                        d="M19 6v4"
                                    ></path>

                                </svg>

                            </span>


                            <span class="tool-name">
                                Perbesar Teks
                            </span>


                            <span class="tool-desc">
                                Membuat tulisan lebih mudah dibaca.
                            </span>

                        </button>


                        <button
                            type="button"
                            class="accessibility-tool reveal reveal-delay-2"
                            id="contrastToggle"
                            aria-pressed="false"
                        >

                            <span
                                class="tool-icon"
                                aria-hidden="true"
                            >

                                <svg
                                    class="icon"
                                    viewBox="0 0 24 24"
                                >

                                    <circle
                                        cx="12"
                                        cy="12"
                                        r="9"
                                    ></circle>

                                    <path
                                        d="M12 3a9 9 0 0 1 0 18z"
                                    ></path>

                                </svg>

                            </span>


                            <span class="tool-name">
                                Kontras Tinggi
                            </span>


                            <span class="tool-desc">
                                Tingkatkan perbedaan warna.
                            </span>

                        </button>


                        <button
                            type="button"
                            class="accessibility-tool reveal reveal-delay-3"
                            id="readToggle"
                            aria-pressed="false"
                        >

                            <span
                                class="tool-icon"
                                aria-hidden="true"
                            >

                                <svg
                                    class="icon"
                                    viewBox="0 0 24 24"
                                >

                                    <path
                                        d="M4 10v4h4l5 4V6l-5 4H4z"
                                    ></path>

                                    <path
                                        d="M16 9a4 4 0 0 1 0 6"
                                    ></path>

                                    <path
                                        d="M18.5 6.5a8 8 0 0 1 0 11"
                                    ></path>

                                </svg>

                            </span>


                            <span class="tool-name">
                                Baca Halaman
                            </span>


                            <span class="tool-desc">
                                Membacakan isi halaman dengan suara.
                            </span>

                        </button>

                    </div>

                </div>

            </div>

        </section>


        {{-- =================================================
             SERVICES
             ================================================= --}}

        <section
            class="section"
            id="layanan"
        >

            <div class="sedolor-container">


                <div class="section-header reveal">

                    <span class="section-label">
                        Layanan
                    </span>


                    <h2 class="section-title">
                        Layanan BPOM Palembang
                    </h2>


                    <p class="section-description">
                        Pilih layanan yang sesuai dengan kebutuhan
                        Anda. Informasi dibuat sederhana agar
                        mudah dipahami.
                    </p>

                </div>


                <div class="services-grid">


                    <article class="service-card reveal">

                        <div
                            class="service-icon"
                            aria-hidden="true"
                        >

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

                                <path
                                    d="M9 8h6"
                                ></path>

                                <path
                                    d="M9 12h6"
                                ></path>

                                <path
                                    d="M9 16h4"
                                ></path>

                            </svg>

                        </div>


                        <h3 class="service-title">
                            Pendaftaran Layanan
                        </h3>


                        <p class="service-description">
                            Ajukan permohonan layanan BPOM sesuai
                            dengan kebutuhan Anda melalui SEDOLOR.
                        </p>


                        <a
                            href="{{ route('informasi-produk') }}"
                            class="service-link"
                        >

                            Daftar Layanan

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >

                                <path
                                    d="M5 12h13"
                                ></path>

                                <path
                                    d="M13 6l6 6-6 6"
                                ></path>

                            </svg>

                        </a>

                    </article>


                    <article class="service-card reveal reveal-delay-1">

                        <div
                            class="service-icon"
                            aria-hidden="true"
                        >

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                            >

                                <circle
                                    cx="12"
                                    cy="12"
                                    r="9"
                                ></circle>

                                <path
                                    d="M12 10v6"
                                ></path>

                                <path
                                    d="M12 7h.01"
                                ></path>

                            </svg>

                        </div>


                        <h3 class="service-title">
                            Informasi Layanan
                        </h3>


                        <p class="service-description">
                            Temukan informasi mengenai jenis layanan,
                            persyaratan, dan hal yang perlu disiapkan
                            sebelum datang ke BPOM.
                        </p>


                        <a
                            href="{{ route('informasi-produk') }}"
                            class="service-link"
                        >

                            Lihat informasi

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >

                                <path
                                    d="M5 12h13"
                                ></path>

                                <path
                                    d="M13 6l6 6-6 6"
                                ></path>

                            </svg>

                        </a>

                    </article>


                    <article class="service-card reveal reveal-delay-2">

                        <div
                            class="service-icon"
                            aria-hidden="true"
                        >

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                            >

                                <rect
                                    x="3"
                                    y="5"
                                    width="18"
                                    height="16"
                                    rx="2"
                                ></rect>

                                <path
                                    d="M16 3v4"
                                ></path>

                                <path
                                    d="M8 3v4"
                                ></path>

                                <path
                                    d="M3 10h18"
                                ></path>

                                <path
                                    d="M8 14h.01"
                                ></path>

                                <path
                                    d="M12 14h.01"
                                ></path>

                                <path
                                    d="M16 14h.01"
                                ></path>

                                <path
                                    d="M8 18h.01"
                                ></path>

                                <path
                                    d="M12 18h.01"
                                ></path>

                            </svg>

                        </div>


                        <h3 class="service-title">
                            Jadwal & Antrean
                        </h3>


                        <p class="service-description">
                            Lihat jadwal pertemuan, jam layanan,
                            dan nomor antrean yang Anda dapatkan
                            setelah melakukan pendaftaran.
                        </p>


                        <a
                            href="{{ route('login') }}"
                            class="service-link"
                        >

                            Cek Jadwal & Antrean

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >

                                <path
                                    d="M5 12h13"
                                ></path>

                                <path
                                    d="M13 6l6 6-6 6"
                                ></path>

                            </svg>

                        </a>

                    </article>

                </div>

            </div>

        </section>


        {{-- =================================================
             HOW IT WORKS
             ================================================= --}}

        <section
            class="section section-alt"
            id="cara-kerja"
        >

            <div class="sedolor-container">


                <div class="section-header reveal">

                    <span class="section-label">
                        Cara Menggunakan
                    </span>


                    <h2 class="section-title">
                        Sederhana dalam 3 langkah
                    </h2>


                    <p class="section-description">
                        SEDOLOR dirancang agar masyarakat dapat
                        memperoleh layanan dengan alur yang
                        sederhana dan mudah dipahami.
                    </p>

                </div>


                <div class="steps">


                    <article class="step reveal">

                        <div class="step-number">
                            01
                        </div>


                        <h3 class="step-title">
                            Buat akun & daftar
                        </h3>


                        <p class="step-text">
                            Buat akun terlebih dahulu, kemudian
                            lakukan pendaftaran layanan sesuai
                            dengan kebutuhan Anda.
                        </p>

                    </article>


                    <article class="step reveal reveal-delay-1">

                        <div class="step-number">
                            02
                        </div>


                        <h3 class="step-title">
                            Dapatkan jadwal & antrean
                        </h3>


                        <p class="step-text">
                            Setelah pendaftaran diproses, Anda
                            mendapatkan informasi hari, jam
                            pertemuan, dan nomor antrean melalui
                            WhatsApp.
                        </p>

                    </article>


                    <article class="step reveal reveal-delay-2">

                        <div class="step-number">
                            03
                        </div>


                        <h3 class="step-title">
                            Datang sesuai jadwal
                        </h3>


                        <p class="step-text">
                            Datang ke BPOM Palembang sesuai
                            hari, jam, dan nomor antrean yang
                            telah diberikan.
                        </p>

                    </article>

                </div>

            </div>

        </section>


        {{-- =================================================
             CTA
             ================================================= --}}

        <section class="cta-section">

            <div class="sedolor-container">

                <div class="cta reveal">

                    <div class="cta-content">

                        <h2>
                            Siap menggunakan layanan SEDOLOR?
                        </h2>


                        <p>
                            Masuk ke akun Anda untuk melakukan
                            pendaftaran layanan BPOM Palembang
                            dan memperoleh informasi jadwal serta
                            nomor antrean.
                        </p>


                        <a
                            href="{{ route('login') }}"
                            class="sedolor-btn cta-button"
                        >

                            Masuk ke SEDOLOR

                        </a>

                    </div>

                </div>

            </div>

        </section>

    </main>


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

</div>


{{-- =========================================================
     JAVASCRIPT
     ========================================================= --}}

<script>

document.addEventListener('DOMContentLoaded', function () {


    /* =====================================================
       SCROLL REVEAL
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
       PERBESAR TEKS
       ===================================================== */

    const fontToggle =
        document.getElementById('fontToggle');


    if (fontToggle) {

        fontToggle.addEventListener(
            'click',
            function () {

                const isActive =
                    document.body.classList.toggle(
                        'sedolor-large-text'
                    );


                this.classList.toggle(
                    'active',
                    isActive
                );


                this.setAttribute(
                    'aria-pressed',
                    isActive
                        ? 'true'
                        : 'false'
                );

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

                const isActive =
                    document.body.classList.toggle(
                        'sedolor-high-contrast'
                    );


                this.classList.toggle(
                    'active',
                    isActive
                );


                this.setAttribute(
                    'aria-pressed',
                    isActive
                        ? 'true'
                        : 'false'
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

                    window.speechSynthesis.cancel();


                    this.classList.remove(
                        'active'
                    );


                    this.setAttribute(
                        'aria-pressed',
                        'false'
                    );


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


                        readToggle.setAttribute(
                            'aria-pressed',
                            'false'
                        );

                    };


                speech.onerror =
                    function () {

                        readToggle.classList.remove(
                            'active'
                        );


                        readToggle.setAttribute(
                            'aria-pressed',
                            'false'
                        );

                    };


                this.classList.add(
                    'active'
                );


                this.setAttribute(
                    'aria-pressed',
                    'true'
                );


                window.speechSynthesis.speak(
                    speech
                );

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

});

</script>

@endsection