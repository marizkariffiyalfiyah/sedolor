@extends('layouts.logged-in')

@section('title', 'Dashboard - SEDOLOR')

@section('content')

<style>
    /* =========================================================
       SEDOLOR - DASHBOARD
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

        --red: #B42318;
        --red-soft: #FEECEB;

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


    /* =========================================================
       CONTAINER
       ========================================================= */

    .sedolor-dashboard {
        width: 100%;
        overflow: hidden;
        background: var(--page-bg);
    }


    .sedolor-container {
        width: min(1160px, calc(100% - 40px));
        margin: 0 auto;
    }


    /* =========================================================
       REVEAL
       ========================================================= */

    .dashboard-reveal {
        opacity: 0;
        transform: translateY(35px);

        transition:
            opacity .7s ease,
            transform .7s cubic-bezier(.22, 1, .36, 1);
    }


    .dashboard-reveal.is-visible {
        opacity: 1;
        transform: translateY(0);
    }


    .dashboard-delay-1 {
        transition-delay: .08s;
    }


    .dashboard-delay-2 {
        transition-delay: .16s;
    }


    .dashboard-delay-3 {
        transition-delay: .24s;
    }


    /* =========================================================
       WELCOME SECTION
       ========================================================= */

    .dashboard-welcome-section {
        position: relative;

        padding: 55px 0 35px;

        background:
            linear-gradient(
                180deg,
                #DCEAF7 0%,
                #E8F2FA 100%
            );

        overflow: hidden;
    }


    .dashboard-welcome-section::before {
        content: "";

        position: absolute;

        width: 430px;
        height: 430px;

        right: -170px;
        top: -180px;

        border-radius: 50%;

        background:
            rgba(21, 94, 239, .07);

        border:
            1px solid rgba(21, 94, 239, .08);
    }


    .dashboard-welcome-section::after {
        content: "";

        position: absolute;

        width: 230px;
        height: 230px;

        left: -110px;
        bottom: -120px;

        border-radius: 50%;

        background:
            rgba(8, 127, 91, .06);
    }


    /* =========================================================
       WELCOME CARD
       ========================================================= */

    .welcome-card {
        position: relative;

        z-index: 2;

        display: grid;

        grid-template-columns:
            minmax(0, 1fr)
            440px;

        align-items: stretch;

        min-height: 390px;

        overflow: hidden;

        border-radius: 26px;

        background:
            linear-gradient(
                135deg,
                #102A43 0%,
                #123B60 45%,
                #155EEF 100%
            );

        box-shadow:
            0 20px 45px rgba(16,42,67,.20);
    }


    .welcome-card::before {
        content: "";

        position: absolute;

        width: 360px;
        height: 360px;

        right: 170px;
        top: -250px;

        border-radius: 50%;

        border:
            1px solid rgba(255,255,255,.10);

        box-shadow:
            0 0 0 35px rgba(255,255,255,.025),
            0 0 0 70px rgba(255,255,255,.018);
    }


    .welcome-content {
        position: relative;

        z-index: 5;

        padding:
            52px 25px 48px 48px;

        align-self: center;
    }


    .welcome-badge {
        display: inline-flex;

        align-items: center;

        gap: 8px;

        margin-bottom: 15px;

        padding: 7px 12px;

        border-radius: 999px;

        background:
            rgba(255,255,255,.12);

        border:
            1px solid rgba(255,255,255,.16);

        color:
            #DCEBFF;

        font-size: 12px;

        font-weight: 900;
    }


    .welcome-dot {
        width: 8px;
        height: 8px;

        border-radius: 50%;

        background:
            #7BE0B5;

        box-shadow:
            0 0 0 4px rgba(123,224,181,.12);

        animation:
            pulseDot 2s infinite ease-in-out;
    }


    @keyframes pulseDot {

        0%,
        100% {
            transform: scale(1);
            opacity: 1;
        }

        50% {
            transform: scale(1.35);
            opacity: .65;
        }

    }


    .welcome-title {
        margin: 0 0 10px;

        color: white;

        font-size:
            clamp(29px, 4vw, 42px);

        line-height: 1.12;

        letter-spacing: -.8px;

        font-weight: 900;
    }


    .welcome-title span {
        color: #8FC3FF;
    }


    .welcome-description {
        max-width: 590px;

        margin: 0;

        color: #D9E8F6;

        font-size: 15px;

        line-height: 1.65;
    }


    .welcome-actions {
        display: flex;

        flex-wrap: wrap;

        gap: 10px;

        margin-top: 23px;
    }


    .welcome-button {
        display: inline-flex;

        align-items: center;
        justify-content: center;

        gap: 8px;

        min-height: 46px;

        padding: 11px 18px;

        border-radius: 10px;

        text-decoration: none;

        font-size: 14px;

        font-weight: 900;

        transition: .2s ease;
    }


    .welcome-button-primary {
        background: white;

        color: var(--primary);

        box-shadow:
            0 8px 20px rgba(0,0,0,.14);
    }


    .welcome-button-primary:hover {
        transform: translateY(-3px);

        box-shadow:
            0 12px 25px rgba(0,0,0,.20);
    }


    .welcome-button-secondary {
        background:
            rgba(255,255,255,.10);

        border:
            1px solid rgba(255,255,255,.20);

        color: white;
    }


    .welcome-button-secondary:hover {
        background:
            rgba(255,255,255,.18);

        transform:
            translateY(-3px);
    }


    /* =========================================================
       CHARACTER AREA
       ========================================================= */

    .welcome-character {
        position: relative;

        z-index: 3;

        min-height: 390px;

        display: flex;

        align-items: flex-end;

        justify-content: center;

        padding:
            10px 10px 0;
    }


    /* Lingkaran belakang karakter */

    .character-orbit {
        position: absolute;

        width: 350px;
        height: 350px;

        right: 18px;
        top: 20px;

        border-radius: 50%;

        background:
            radial-gradient(
                circle,
                rgba(255,255,255,.15) 0%,
                rgba(255,255,255,.07) 45%,
                rgba(255,255,255,0) 72%
            );

        border:
            1px solid rgba(255,255,255,.10);

        animation:
            orbitPulse 5s ease-in-out infinite;
    }


    @keyframes orbitPulse {

        0%,
        100% {
            transform: scale(1);
            opacity: .85;
        }

        50% {
            transform: scale(1.06);
            opacity: 1;
        }

    }


    /* Karakter utama */

    .character-main {
        position: relative;

        z-index: 4;

        width: 100%;

        max-width: 410px;

        height: 380px;

        object-fit: contain;

        object-position: center bottom;

        filter:
            drop-shadow(
                0 22px 28px rgba(0,0,0,.24)
            );

        transform:
            translateY(15px);

        animation:
            characterFloat
            4.5s
            ease-in-out
            infinite;

        transition:
            transform .25s ease;
    }


    @keyframes characterFloat {

        0%,
        100% {
            transform:
                translate3d(0, 15px, 0)
                rotate(0deg);
        }

        25% {
            transform:
                translate3d(0, 4px, 0)
                rotate(-1deg);
        }

        50% {
            transform:
                translate3d(0, -8px, 0)
                rotate(0deg);
        }

        75% {
            transform:
                translate3d(0, 2px, 0)
                rotate(1deg);
        }

    }


    .welcome-card:hover .character-main {
        animation-play-state:
            paused;

        transform:
            translateY(-8px)
            scale(1.025);
    }


    /* =========================================================
       FLOATING ELEMENTS
       ========================================================= */

    .character-float {
        position: absolute;

        z-index: 5;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 14px;

        background:
            rgba(255,255,255,.96);

        color:
            var(--primary);

        box-shadow:
            0 12px 25px rgba(0,0,0,.15);

        animation:
            floatingObject
            4s
            ease-in-out
            infinite;
    }


    .character-float .icon {
        width: 25px;
        height: 25px;
    }


    .character-float-calendar {
        width: 58px;
        height: 58px;

        right: 52px;
        top: 62px;

        animation-delay:
            -.5s;
    }


    .character-float-document {
        width: 54px;
        height: 54px;

        left: 32px;
        top: 105px;

        color:
            var(--green);

        animation-delay:
            -1.5s;
    }


    .character-float-queue {
        width: 70px;
        height: 48px;

        right: 25px;
        bottom: 72px;

        color:
            var(--orange);

        font-size: 12px;

        font-weight: 900;

        animation-delay:
            -2.3s;
    }


    .character-float-queue span {
        display: block;
    }


    .character-float-whatsapp {
        width: 48px;
        height: 48px;

        left: 60px;
        bottom: 75px;

        color:
            var(--green);

        animation-delay:
            -3s;
    }


    @keyframes floatingObject {

        0%,
        100% {
            transform:
                translateY(0)
                rotate(0deg);
        }

        50% {
            transform:
                translateY(-12px)
                rotate(3deg);
        }

    }


    /* Garis orbit dekoratif */

    .character-ring {
        position: absolute;

        z-index: 1;

        width: 390px;
        height: 250px;

        right: 10px;
        top: 75px;

        border:
            1px solid rgba(255,255,255,.13);

        border-radius: 50%;

        transform:
            rotate(-17deg);

        animation:
            ringRotate
            9s
            linear
            infinite;
    }


    @keyframes ringRotate {

        from {
            transform:
                rotate(-17deg);
        }

        to {
            transform:
                rotate(343deg);
        }

    }


    /* =========================================================
       MAIN DASHBOARD
       ========================================================= */

    .dashboard-main-section {
        position: relative;

        padding: 35px 0 75px;

        background:
            linear-gradient(
                180deg,
                #E8F2FA 0%,
                #DCEAF7 100%
            );
    }


    /* =========================================================
       APPOINTMENT
       ========================================================= */

    .appointment-card {
        position: relative;

        overflow: hidden;

        border-radius: 22px;

        background:
            #FFFFFF;

        border:
            1px solid #C9D9E8;

        box-shadow:
            0 12px 30px rgba(31,55,80,.09);
    }


    .appointment-card::before {
        content: "";

        position: absolute;

        width: 250px;
        height: 250px;

        right: -110px;
        top: -130px;

        border-radius: 50%;

        background:
            rgba(21,94,239,.07);
    }


    .appointment-header {
        position: relative;

        z-index: 2;

        display: flex;

        align-items: flex-start;

        justify-content: space-between;

        gap: 20px;

        padding: 25px 27px;

        border-bottom:
            1px solid var(--border);
    }


    .appointment-label {
        display: inline-flex;

        align-items: center;

        gap: 8px;

        margin-bottom: 7px;

        color:
            var(--primary);

        font-size: 12px;

        font-weight: 900;

        text-transform: uppercase;

        letter-spacing: .7px;
    }


    .appointment-title {
        margin: 0;

        color:
            var(--navy);

        font-size: 22px;

        font-weight: 900;
    }


    .appointment-status {
        display: inline-flex;

        align-items: center;

        gap: 7px;

        padding: 8px 12px;

        border-radius: 999px;

        background:
            var(--green-soft);

        color:
            var(--green);

        font-size: 12px;

        font-weight: 900;

        white-space: nowrap;
    }


    .status-dot {
        width: 8px;
        height: 8px;

        border-radius: 50%;

        background:
            var(--green);

        animation:
            pulseDot 2s infinite;
    }


    .appointment-body {
        position: relative;

        z-index: 2;

        display: grid;

        grid-template-columns:
            1.25fr .75fr;

        gap: 18px;

        padding: 22px;
    }


    .appointment-details {
        display: grid;

        grid-template-columns:
            repeat(3, 1fr);

        gap: 12px;
    }


    .appointment-detail {
        padding: 17px;

        border-radius: 14px;

        background:
            #F5F9FD;

        border:
            1px solid #D8E4EF;
    }


    .detail-label {
        display: block;

        margin-bottom: 6px;

        color:
            var(--muted);

        font-size: 12px;

        font-weight: 700;
    }


    .detail-value {
        display: block;

        color:
            var(--navy);

        font-size: 15px;

        font-weight: 900;

        line-height: 1.35;
    }


    .queue-box {
        position: relative;

        overflow: hidden;

        min-height: 160px;

        padding: 20px;

        border-radius: 17px;

        background:
            linear-gradient(
                135deg,
                #155EEF,
                #0B45C4
            );

        color:
            white;

        box-shadow:
            0 10px 25px rgba(21,94,239,.22);

        animation:
            queueGlow
            4s
            ease-in-out
            infinite;
    }


    @keyframes queueGlow {

        0%,
        100% {
            box-shadow:
                0 10px 25px rgba(21,94,239,.22);
        }

        50% {
            box-shadow:
                0 15px 32px rgba(21,94,239,.34);
        }

    }


    .queue-box::after {
        content: "";

        position: absolute;

        width: 150px;
        height: 150px;

        right: -65px;
        bottom: -75px;

        border-radius: 50%;

        background:
            rgba(255,255,255,.10);

        border:
            1px solid rgba(255,255,255,.10);
    }


    .queue-label {
        position: relative;

        z-index: 2;

        display: block;

        margin-bottom: 5px;

        color:
            #DCE9FF;

        font-size: 12px;

        font-weight: 800;
    }


    .queue-number {
        position: relative;

        z-index: 2;

        display: block;

        margin-bottom: 7px;

        color:
            white;

        font-size: 46px;

        line-height: 1;

        letter-spacing: -1px;

        font-weight: 950;
    }


    .queue-info {
        position: relative;

        z-index: 2;

        color:
            #E3ECFF;

        font-size: 12px;

        line-height: 1.5;
    }


    .appointment-footer {
        display: flex;

        align-items: center;

        justify-content: space-between;

        gap: 15px;

        padding: 17px 22px;

        background:
            #F5F9FD;

        border-top:
            1px solid var(--border);
    }


    .appointment-note {
        color:
            var(--muted);

        font-size: 12px;

        line-height: 1.5;
    }


    .appointment-link {
        display: inline-flex;

        align-items: center;

        gap: 7px;

        color:
            var(--primary);

        font-size: 13px;

        font-weight: 900;

        text-decoration: none;

        white-space: nowrap;

        transition:
            .2s ease;
    }


    .appointment-link:hover {
        gap: 11px;
    }


    /* =========================================================
       SECTION HEADER
       ========================================================= */

    .dashboard-section-header {
        display: flex;

        align-items: flex-end;

        justify-content: space-between;

        gap: 20px;

        margin:
            45px 0 23px;
    }


    .dashboard-section-label {
        display: inline-flex;

        align-items: center;

        gap: 7px;

        margin-bottom: 8px;

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


    .dashboard-section-title {
        margin: 0;

        color:
            var(--navy);

        font-size: 27px;

        font-weight: 900;
    }


    .dashboard-section-description {
        max-width: 650px;

        margin: 7px 0 0;

        color:
            var(--muted);

        font-size: 14px;

        line-height: 1.6;
    }


    /* =========================================================
       SERVICES
       ========================================================= */

    .dashboard-services {
        display: grid;

        grid-template-columns:
            repeat(3, 1fr);

        gap: 18px;
    }


    .dashboard-service-card {
        position: relative;

        display: flex;

        flex-direction: column;

        min-height: 245px;

        padding: 24px;

        overflow: hidden;

        border-radius: 18px;

        background:
            rgba(255,255,255,.80);

        border:
            1px solid rgba(173,195,217,.85);

        box-shadow:
            0 8px 25px rgba(31,55,80,.07);

        transition:
            .25s ease;
    }


    .dashboard-service-card::before {
        content: "";

        position: absolute;

        width: 100%;
        height: 4px;

        top: 0;
        left: 0;

        background:
            var(--primary);

        transform:
            scaleX(.25);

        transform-origin:
            left;

        transition:
            transform .25s ease;
    }


    .dashboard-service-card:nth-child(2)::before {
        background:
            var(--green);
    }


    .dashboard-service-card:nth-child(3)::before {
        background:
            var(--orange);
    }


    .dashboard-service-card:hover {
        transform:
            translateY(-7px);

        background:
            white;

        box-shadow:
            var(--shadow-hover);
    }


    .dashboard-service-card:hover::before {
        transform:
            scaleX(1);
    }


    .dashboard-service-icon {
        width: 55px;
        height: 55px;

        display: flex;

        align-items: center;
        justify-content: center;

        margin-bottom: 17px;

        border-radius: 14px;

        background:
            var(--primary-soft);

        color:
            var(--primary);

        transition:
            .25s ease;
    }


    .dashboard-service-card:nth-child(2)
    .dashboard-service-icon {
        background:
            var(--green-soft);

        color:
            var(--green);
    }


    .dashboard-service-card:nth-child(3)
    .dashboard-service-icon {
        background:
            var(--orange-soft);

        color:
            var(--orange);
    }


    .dashboard-service-card:hover
    .dashboard-service-icon {
        transform:
            translateY(-3px)
            scale(1.06);
    }


    .dashboard-service-title {
        margin: 0 0 8px;

        color:
            var(--navy);

        font-size: 18px;

        font-weight: 900;
    }


    .dashboard-service-text {
        margin: 0;

        color:
            var(--muted);

        font-size: 13px;

        line-height: 1.6;
    }


    .dashboard-service-link {
        display: inline-flex;

        align-items: center;
        justify-content: center;

        gap: 7px;

        min-height: 44px;

        margin-top: auto;

        padding-top: 15px;

        color:
            var(--primary);

        font-size: 13px;

        font-weight: 900;

        text-decoration: none;

        transition:
            .2s ease;
    }


    .dashboard-service-link:hover {
        gap: 11px;
    }


    /* =========================================================
       LOWER GRID
       ========================================================= */

    .dashboard-lower-grid {
        display: grid;

        grid-template-columns:
            1.15fr .85fr;

        gap: 20px;

        margin-top: 45px;
    }


    /* =========================================================
       HISTORY
       ========================================================= */

    .history-card {
        overflow: hidden;

        border-radius: 20px;

        background:
            rgba(255,255,255,.82);

        border:
            1px solid rgba(173,195,217,.85);

        box-shadow:
            var(--shadow);
    }


    .history-card-header {
        padding: 22px 24px;

        border-bottom:
            1px solid var(--border);
    }


    .history-card-header h3 {
        margin: 0 0 5px;

        color:
            var(--navy);

        font-size: 19px;

        font-weight: 900;
    }


    .history-card-header p {
        margin: 0;

        color:
            var(--muted);

        font-size: 13px;
    }


    .history-list {
        padding:
            5px 0;
    }


    .history-item {
        position: relative;

        display: grid;

        grid-template-columns:
            48px 1fr auto;

        align-items: center;

        gap: 14px;

        padding: 17px 24px;

        transition:
            .2s ease;
    }


    .history-item::before {
        content: "";

        position: absolute;

        left: 0;
        top: 9px;
        bottom: 9px;

        width: 3px;

        border-radius:
            0 4px 4px 0;

        background:
            transparent;

        transition:
            .2s ease;
    }


    .history-item:hover {
        background:
            #F4F8FC;
    }


    .history-item:hover::before {
        background:
            var(--primary);
    }


    .history-icon {
        width: 43px;
        height: 43px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 12px;

        background:
            var(--primary-soft);

        color:
            var(--primary);
    }


    .history-main strong {
        display: block;

        margin-bottom: 3px;

        color:
            var(--navy);

        font-size: 14px;

        font-weight: 900;
    }


    .history-main span {
        color:
            var(--muted);

        font-size: 12px;
    }


    .history-status {
        padding: 6px 9px;

        border-radius: 999px;

        background:
            var(--green-soft);

        color:
            var(--green);

        font-size: 11px;

        font-weight: 900;
    }


    /* =========================================================
       IMPORTANT INFO
       ========================================================= */

    .info-card {
        overflow: hidden;

        border-radius: 20px;

        background:
            linear-gradient(
                135deg,
                #E7F7F1,
                #F5FBF9
            );

        border:
            1px solid #BFE4D6;

        box-shadow:
            var(--shadow);
    }


    .info-card-header {
        padding: 22px 24px;

        border-bottom:
            1px solid #CBE9DE;
    }


    .info-card-header h3 {
        margin: 0 0 5px;

        color:
            #075A42;

        font-size: 19px;

        font-weight: 900;
    }


    .info-card-header p {
        margin: 0;

        color:
            #477467;

        font-size: 13px;

        line-height: 1.5;
    }


    .info-list {
        display: flex;

        flex-direction: column;
    }


    .info-item {
        display: flex;

        align-items: flex-start;

        gap: 13px;

        padding: 17px 24px;

        text-decoration: none;

        border-bottom:
            1px solid #CBE9DE;

        transition:
            .2s ease;
    }


    .info-item:last-child {
        border-bottom:
            none;
    }


    .info-item:hover {
        background:
            rgba(255,255,255,.60);

        transform:
            translateX(3px);
    }


    .info-item-icon {
        width: 39px;
        height: 39px;

        display: flex;

        align-items: center;
        justify-content: center;

        flex-shrink: 0;

        border-radius: 10px;

        background:
            white;

        color:
            var(--green);

        box-shadow:
            0 4px 12px rgba(8,127,91,.08);
    }


    .info-item strong {
        display: block;

        margin-bottom: 3px;

        color:
            #075A42;

        font-size: 13px;

        font-weight: 900;
    }


    .info-item span {
        color:
            #527A6E;

        font-size: 12px;

        line-height: 1.5;
    }


    /* =========================================================
       ACCESSIBILITY
       ========================================================= */

    .dashboard-accessibility {
        margin-top: 45px;

        padding: 25px;

        border-radius: 20px;

        background:
            linear-gradient(
                135deg,
                #102A43,
                #123B60
            );

        color:
            white;

        box-shadow:
            0 14px 32px rgba(16,42,67,.15);
    }


    .dashboard-accessibility-top {
        display: flex;

        align-items: center;

        justify-content: space-between;

        gap: 20px;

        margin-bottom: 17px;
    }


    .dashboard-accessibility-title {
        margin: 0 0 5px;

        font-size: 19px;

        font-weight: 900;
    }


    .dashboard-accessibility-text {
        margin: 0;

        color:
            #D3E2EF;

        font-size: 13px;

        line-height: 1.5;
    }


    .accessibility-controls {
        display: grid;

        grid-template-columns:
            repeat(3, 1fr);

        gap: 11px;
    }


    .dashboard-accessibility-button {
        display: flex;

        align-items: center;

        gap: 11px;

        min-height: 67px;

        padding: 13px 15px;

        border:
            1px solid rgba(255,255,255,.15);

        border-radius: 12px;

        background:
            rgba(255,255,255,.08);

        color:
            white;

        cursor: pointer;

        text-align: left;

        transition:
            .2s ease;
    }


    .dashboard-accessibility-button:hover,
    .dashboard-accessibility-button.active {
        background:
            white;

        color:
            var(--navy);

        transform:
            translateY(-3px);
    }


    .dashboard-accessibility-button .icon {
        width: 22px;
        height: 22px;
    }


    .accessibility-button-text strong {
        display: block;

        margin-bottom: 2px;

        font-size: 12px;

        font-weight: 900;
    }


    .accessibility-button-text span {
        display: block;

        font-size: 11px;

        opacity: .75;
    }


    /* =========================================================
       LARGE TEXT
       ========================================================= */

    body.sedolor-large-text {
        font-size: 18px;
    }


    body.sedolor-large-text
    .welcome-description,
    body.sedolor-large-text
    .dashboard-service-text,
    body.sedolor-large-text
    .dashboard-section-description,
    body.sedolor-large-text
    .appointment-note {
        font-size: 16px;
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
    .dashboard-welcome-section,
    body.sedolor-high-contrast
    .dashboard-main-section {
        background:
            #FFFFFF;
    }


    body.sedolor-high-contrast
    .appointment-card,
    body.sedolor-high-contrast
    .dashboard-service-card,
    body.sedolor-high-contrast
    .history-card {
        background:
            #FFFFFF;

        border:
            2px solid #000000;
    }


    body.sedolor-high-contrast
    .dashboard-section-title,
    body.sedolor-high-contrast
    .dashboard-service-title,
    body.sedolor-high-contrast
    .appointment-title,
    body.sedolor-high-contrast
    .history-main strong {
        color:
            #000000;
    }


    body.sedolor-high-contrast
    .dashboard-section-description,
    body.sedolor-high-contrast
    .dashboard-service-text,
    body.sedolor-high-contrast
    .history-main span {
        color:
            #111111;
    }


    /* =========================================================
       FOOTER
       SAMA DENGAN HOME
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
       RESPONSIVE
       ========================================================= */

    @media (max-width: 1050px) {

        .welcome-card {
            grid-template-columns:
                minmax(0, 1fr)
                370px;
        }


        .character-main {
            max-width: 350px;
            height: 350px;
        }


        .character-orbit {
            width: 310px;
            height: 310px;
        }


        .appointment-body {
            grid-template-columns:
                1fr;
        }


        .dashboard-lower-grid {
            grid-template-columns:
                1fr;
        }

    }


    @media (max-width: 850px) {

        .welcome-card {
            grid-template-columns:
                1fr;

            min-height:
                auto;
        }


        .welcome-content {
            padding:
                40px 35px 20px;
        }


        .welcome-character {
            min-height:
                360px;
        }


        .character-main {
            height:
                350px;

            max-width:
                370px;
        }


        .character-orbit {
            width:
                330px;

            height:
                330px;

            right:
                50%;

            transform:
                translateX(50%);
        }


        .character-ring {
            right:
                50%;

            transform:
                translateX(50%)
                rotate(-17deg);
        }


        .character-float-document {
            left:
                calc(50% - 190px);
        }


        .character-float-whatsapp {
            left:
                calc(50% - 170px);
        }


        .character-float-calendar {
            right:
                calc(50% - 180px);
        }


        .character-float-queue {
            right:
                calc(50% - 195px);
        }


        .appointment-details {
            grid-template-columns:
                repeat(3, 1fr);
        }


        .dashboard-services {
            grid-template-columns:
                repeat(2, 1fr);
        }


        .accessibility-controls {
            grid-template-columns:
                repeat(3, 1fr);
        }


        .footer-grid {
            grid-template-columns:
                1fr 1fr;
        }

    }


    @media (max-width: 700px) {

        .sedolor-container {
            width:
                min(100% - 28px, 1160px);
        }


        .dashboard-welcome-section {
            padding:
                30px 0 25px;
        }


        .welcome-content {
            padding:
                30px 24px 10px;
        }


        .welcome-title {
            font-size:
                30px;
        }


        .welcome-character {
            min-height:
                300px;

            padding:
                0;
        }


        .character-main {
            height:
                295px;

            max-width:
                320px;
        }


        .character-orbit {
            width:
                275px;

            height:
                275px;

            top:
                10px;
        }


        .character-ring {
            width:
                300px;

            height:
                190px;

            top:
                55px;
        }


        .character-float {
            transform:
                scale(.82);
        }


        .character-float-document {
            left:
                calc(50% - 155px);

            top:
                70px;
        }


        .character-float-whatsapp {
            left:
                calc(50% - 145px);

            bottom:
                45px;
        }


        .character-float-calendar {
            right:
                calc(50% - 150px);

            top:
                40px;
        }


        .character-float-queue {
            right:
                calc(50% - 165px);

            bottom:
                45px;
        }


        .dashboard-main-section {
            padding:
                25px 0 55px;
        }


        .appointment-header {
            flex-direction:
                column;

            align-items:
                flex-start;

            padding:
                20px;
        }


        .appointment-body {
            padding:
                15px;
        }


        .appointment-details {
            grid-template-columns:
                1fr;
        }


        .appointment-footer {
            flex-direction:
                column;

            align-items:
                flex-start;

            padding:
                16px;
        }


        .dashboard-section-header {
            flex-direction:
                column;

            align-items:
                flex-start;

            margin-top:
                35px;
        }


        .dashboard-services {
            grid-template-columns:
                1fr;
        }


        .history-item {
            grid-template-columns:
                42px 1fr;

            padding:
                15px 17px;
        }


        .history-status {
            grid-column:
                2;

            justify-self:
                start;
        }


        .dashboard-accessibility {
            padding:
                20px;
        }


        .dashboard-accessibility-top {
            align-items:
                flex-start;

            flex-direction:
                column;
        }


        .accessibility-controls {
            grid-template-columns:
                1fr;
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
        *::before {
            animation:
                none !important;

            transition:
                none !important;
        }


        .dashboard-reveal {
            opacity:
                1;

            transform:
                none;
        }

    }

</style>


<div class="sedolor-dashboard">

    {{-- =====================================================
         MAIN
         ===================================================== --}}

    <main id="main-content">


        {{-- =================================================
             WELCOME
             ================================================= --}}

        <section class="dashboard-welcome-section">

            <div class="sedolor-container">

                <div class="welcome-card dashboard-reveal">


                    {{-- =================================================
                         WELCOME CONTENT
                         ================================================= --}}

                    <div class="welcome-content">

                        <div class="welcome-badge">

                            <span
                                class="welcome-dot"
                                aria-hidden="true"
                            ></span>

                            Dashboard SEDOLOR

                        </div>


                        <h1 class="welcome-title">

                            Selamat datang kembali,
                            <span>
                                {{ auth()->user()->name ?? 'Pengguna SEDOLOR' }}
                            </span>.

                        </h1>


                        <p class="welcome-description">

                            Kelola pendaftaran layanan BPOM Palembang,
                            lihat jadwal pertemuan, nomor antrean,
                            dan informasi layanan Anda melalui
                            satu halaman.

                        </p>


                        <div class="welcome-actions">

                            <a
                                href="{{ route('informasi-produk') }}"
                                class="welcome-button welcome-button-primary"
                            >

                                <svg
                                    class="icon"
                                    viewBox="0 0 24 24"
                                    aria-hidden="true"
                                >

                                    <path d="M12 5v14"></path>

                                    <path d="M5 12h14"></path>

                                </svg>

                                Daftar Layanan

                            </a>


                            <a
                                href="{{ route('informasi-produk') }}"
                                class="welcome-button welcome-button-secondary"
                            >

                                Lihat Informasi

                            </a>

                        </div>

                    </div>


                    {{-- =================================================
                         CHARACTER
                         ================================================= --}}

                    <div
                        class="welcome-character"
                        id="characterArea"
                    >


                        {{-- ORBIT BACKGROUND --}}

                        <div
                            class="character-orbit"
                            aria-hidden="true"
                        ></div>


                        <div
                            class="character-ring"
                            aria-hidden="true"
                        ></div>


                        {{-- FLOATING DOCUMENT --}}

                        <div
                            class="character-float character-float-document"
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

                                <path d="M9 8h6"></path>

                                <path d="M9 12h6"></path>

                                <path d="M9 16h4"></path>

                            </svg>

                        </div>


                        {{-- FLOATING CALENDAR --}}

                        <div
                            class="character-float character-float-calendar"
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

                                <path d="M16 3v4"></path>

                                <path d="M8 3v4"></path>

                                <path d="M3 10h18"></path>

                            </svg>

                        </div>


                        {{-- FLOATING WHATSAPP --}}

                        <div
                            class="character-float character-float-whatsapp"
                            aria-hidden="true"
                        >

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                            >

                                <path
                                    d="M21 11.5a8.5 8.5 0 0 1-12.8 7.4L4 20l1.2-4.1A8.5 8.5 0 1 1 21 11.5z"
                                ></path>

                                <path
                                    d="M9 9.5c.2 1.2 1.3 2.8 3.2 3.7 1.2.6 1.8.6 2.3.2"
                                ></path>

                            </svg>

                        </div>


                        {{-- FLOATING QUEUE --}}

                        <div
                            class="character-float character-float-queue"
                            aria-hidden="true"
                        >

                            <span>
                                A-012
                            </span>

                        </div>


                        {{-- =================================================
                             CHARACTER IMAGE
                             ================================================= --}}

                        <img
                            src="{{ asset('assets/karakter.png') }}"
                            alt="Ilustrasi pengguna SEDOLOR"
                            class="character-main"
                            id="characterImage"
                        >

                    </div>

                </div>

            </div>

        </section>


        {{-- =================================================
             MAIN DASHBOARD
             ================================================= --}}

        <section class="dashboard-main-section">

            <div class="sedolor-container">


                {{-- =================================================
                     APPOINTMENT
                     ================================================= --}}

                <div class="appointment-card dashboard-reveal">


                    <div class="appointment-header">

                        <div>

                            <div class="appointment-label">

                                <svg
                                    class="icon"
                                    viewBox="0 0 24 24"
                                    aria-hidden="true"
                                >

                                    <rect
                                        x="3"
                                        y="5"
                                        width="18"
                                        height="16"
                                        rx="2"
                                    ></rect>

                                    <path d="M16 3v4"></path>

                                    <path d="M8 3v4"></path>

                                    <path d="M3 10h18"></path>

                                </svg>

                                Jadwal Anda

                            </div>


                            <h2 class="appointment-title">

                                Pertemuan layanan berikutnya

                            </h2>

                        </div>


                        <span class="appointment-status">

                            <span
                                class="status-dot"
                                aria-hidden="true"
                            ></span>

                            Terjadwal

                        </span>

                    </div>


                    <div class="appointment-body">


                        <div class="appointment-details">


                            <div class="appointment-detail">

                                <span class="detail-label">
                                    Layanan
                                </span>

                                <span class="detail-value">
                                    Konsultasi Layanan BPOM
                                </span>

                            </div>


                            <div class="appointment-detail">

                                <span class="detail-label">
                                    Tanggal
                                </span>

                                <span class="detail-value">
                                    Senin, 15 September 2026
                                </span>

                            </div>


                            <div class="appointment-detail">

                                <span class="detail-label">
                                    Jam
                                </span>

                                <span class="detail-value">
                                    09.00 - 09.30 WIB
                                </span>

                            </div>

                        </div>


                        <div class="queue-box">

                            <span class="queue-label">
                                Nomor Antrean
                            </span>


                            <strong class="queue-number">
                                A-012
                            </strong>


                            <span class="queue-info">
                                Silakan datang sesuai jadwal
                                dan tunjukkan nomor antrean
                                kepada petugas.
                            </span>

                        </div>

                    </div>


                    <div class="appointment-footer">

                        <span class="appointment-note">

                            Konfirmasi jadwal dan antrean juga
                            dapat diterima melalui WhatsApp.

                        </span>


                        <a
                            href="/jadwal-antrean"
                            class="appointment-link"
                        >

                            Lihat Jadwal & Antrean

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >

                                <path d="M5 12h13"></path>

                                <path d="M13 6l6 6-6 6"></path>

                            </svg>

                        </a>

                    </div>

                </div>


                {{-- =================================================
                     SERVICES HEADER
                     ================================================= --}}

                <div class="dashboard-section-header dashboard-reveal">

                    <div>

                        <span class="dashboard-section-label">
                            Layanan
                        </span>


                        <h2 class="dashboard-section-title">
                            Apa yang ingin Anda lakukan?
                        </h2>


                        <p class="dashboard-section-description">
                            Akses layanan SEDOLOR secara langsung
                            tanpa perlu kembali ke halaman masuk.
                        </p>

                    </div>

                </div>


                {{-- =================================================
                     SERVICES
                     ================================================= --}}

                <div class="dashboard-services">


                    {{-- PENDAFTARAN --}}

                    <article
                        class="dashboard-service-card dashboard-reveal"
                    >

                        <div
                            class="dashboard-service-icon"
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

                                <path d="M9 8h6"></path>

                                <path d="M9 12h6"></path>

                                <path d="M9 16h4"></path>

                            </svg>

                        </div>


                        <h3 class="dashboard-service-title">
                            Pendaftaran Layanan
                        </h3>


                        <p class="dashboard-service-text">
                            Lakukan pendaftaran layanan BPOM
                            sesuai dengan kebutuhan Anda dan
                            tentukan jadwal pertemuan.
                        </p>


                        <a
                            href="{{ route('pendaftaran.mulai') }}"
                            class="dashboard-service-link"
                        >

                            Mulai Pendaftaran

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >

                                <path d="M5 12h13"></path>

                                <path d="M13 6l6 6-6 6"></path>

                            </svg>

                        </a>

                    </article>


                    {{-- INFORMASI --}}

                    <article
                        class="dashboard-service-card dashboard-reveal dashboard-delay-1"
                    >

                        <div
                            class="dashboard-service-icon"
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

                                <path d="M12 10v6"></path>

                                <path d="M12 7h.01"></path>

                            </svg>

                        </div>


                        <h3 class="dashboard-service-title">
                            Informasi Layanan
                        </h3>


                        <p class="dashboard-service-text">
                            Temukan jenis layanan, persyaratan,
                            dokumen yang perlu disiapkan, dan
                            informasi sebelum datang ke BPOM.
                        </p>


                        <a
                            href="{{ route('informasi-produk') }}"
                            class="dashboard-service-link"
                        >

                            Lihat Informasi

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >

                                <path d="M5 12h13"></path>

                                <path d="M13 6l6 6-6 6"></path>

                            </svg>

                        </a>

                    </article>


                    {{-- JADWAL --}}

                    <article
                        class="dashboard-service-card dashboard-reveal dashboard-delay-2"
                    >

                        <div
                            class="dashboard-service-icon"
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

                                <path d="M16 3v4"></path>

                                <path d="M8 3v4"></path>

                                <path d="M3 10h18"></path>

                                <path d="M8 14h.01"></path>

                                <path d="M12 14h.01"></path>

                                <path d="M16 14h.01"></path>

                                <path d="M8 18h.01"></path>

                                <path d="M12 18h.01"></path>

                            </svg>

                        </div>


                        <h3 class="dashboard-service-title">
                            Jadwal & Antrean
                        </h3>


                        <p class="dashboard-service-text">
                            Periksa tanggal pertemuan, jam layanan,
                            dan nomor antrean yang telah Anda
                            dapatkan.
                        </p>


                        <a
                            href="/jadwal-antrean"
                            class="dashboard-service-link"
                        >

                            Cek Jadwal & Antrean

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >

                                <path d="M5 12h13"></path>

                                <path d="M13 6l6 6-6 6"></path>

                            </svg>

                        </a>

                    </article>

                </div>


                {{-- =================================================
                     LOWER SECTION
                     ================================================= --}}

                <div class="dashboard-lower-grid">


                    {{-- HISTORY --}}

                    <div
                        class="history-card dashboard-reveal"
                    >

                        <div class="history-card-header">

                            <h3>
                                Aktivitas Terakhir
                            </h3>

                            <p>
                                Riwayat layanan yang pernah Anda lakukan.
                            </p>

                        </div>


                        <div class="history-list">


                            <div class="history-item">

                                <div
                                    class="history-icon"
                                    aria-hidden="true"
                                >

                                    <svg
                                        class="icon"
                                        viewBox="0 0 24 24"
                                    >

                                        <path d="M4 6h16"></path>

                                        <path d="M4 10h16"></path>

                                        <path d="M4 14h10"></path>

                                        <path d="M4 18h8"></path>

                                    </svg>

                                </div>


                                <div class="history-main">

                                    <strong>
                                        Pendaftaran Layanan
                                    </strong>

                                    <span>
                                        10 September 2026 ·
                                        Konsultasi Layanan
                                    </span>

                                </div>


                                <span class="history-status">
                                    Selesai
                                </span>

                            </div>


                            <div class="history-item">

                                <div
                                    class="history-icon"
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

                                        <path d="M16 3v4"></path>

                                        <path d="M8 3v4"></path>

                                        <path d="M3 10h18"></path>

                                    </svg>

                                </div>


                                <div class="history-main">

                                    <strong>
                                        Jadwal Pertemuan
                                    </strong>

                                    <span>
                                        5 September 2026 ·
                                        Antrean B-021
                                    </span>

                                </div>


                                <span class="history-status">
                                    Selesai
                                </span>

                            </div>


                            <div class="history-item">

                                <div
                                    class="history-icon"
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

                                        <path d="M12 7v5l3 2"></path>

                                    </svg>

                                </div>


                                <div class="history-main">

                                    <strong>
                                        Permohonan Layanan
                                    </strong>

                                    <span>
                                        28 Agustus 2026 ·
                                        Informasi Produk
                                    </span>

                                </div>


                                <span class="history-status">
                                    Selesai
                                </span>

                            </div>

                        </div>

                    </div>


                    {{-- IMPORTANT INFO --}}

                    <div
                        class="info-card dashboard-reveal dashboard-delay-1"
                    >

                        <div class="info-card-header">

                            <h3>
                                Informasi Penting
                            </h3>

                            <p>
                                Hal yang perlu diperhatikan
                                sebelum datang ke BPOM.
                            </p>

                        </div>


                        <div class="info-list">


                            <a
                                href="{{ route('informasi-produk') }}"
                                class="info-item"
                            >

                                <div
                                    class="info-item-icon"
                                    aria-hidden="true"
                                >

                                    <svg
                                        class="icon"
                                        viewBox="0 0 24 24"
                                    >

                                        <path
                                            d="M12 3l8 4v5c0 5-3.5 8-8 9-4.5-1-8-4-8-9V7l8-4z"
                                        ></path>

                                        <path
                                            d="M9 12l2 2 4-4"
                                        ></path>

                                    </svg>

                                </div>


                                <div>

                                    <strong>
                                        Siapkan dokumen
                                    </strong>

                                    <span>
                                        Pastikan dokumen persyaratan
                                        telah disiapkan sebelum
                                        datang.
                                    </span>

                                </div>

                            </a>


                            <a
                                href="/jadwal-antrean"
                                class="info-item"
                            >

                                <div
                                    class="info-item-icon"
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

                                        <path d="M12 7v5l3 2"></path>

                                    </svg>

                                </div>


                                <div>

                                    <strong>
                                        Datang sesuai jadwal
                                    </strong>

                                    <span>
                                        Perhatikan tanggal dan jam
                                        pertemuan yang telah diberikan.
                                    </span>

                                </div>

                            </a>


                            <a
                                href="{{ route('informasi-produk') }}"
                                class="info-item"
                            >

                                <div
                                    class="info-item-icon"
                                    aria-hidden="true"
                                >

                                    <svg
                                        class="icon"
                                        viewBox="0 0 24 24"
                                    >

                                        <path
                                            d="M21 15a4 4 0 0 1-4 4H8l-5 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"
                                        ></path>

                                        <path d="M8 9h8"></path>

                                        <path d="M8 13h5"></path>

                                    </svg>

                                </div>


                                <div>

                                    <strong>
                                        Periksa WhatsApp
                                    </strong>

                                    <span>
                                        Informasi jadwal dan antrean
                                        dapat dikirimkan melalui WhatsApp.
                                    </span>

                                </div>

                            </a>

                        </div>

                    </div>

                </div>


                {{-- =================================================
                     ACCESSIBILITY
                     ================================================= --}}

                <div
                    class="dashboard-accessibility dashboard-reveal"
                    id="aksesibilitas"
                >

                    <div class="dashboard-accessibility-top">

                        <div>

                            <h2 class="dashboard-accessibility-title">
                                Aksesibilitas
                            </h2>

                            <p class="dashboard-accessibility-text">
                                Sesuaikan tampilan SEDOLOR agar
                                lebih nyaman digunakan.
                            </p>

                        </div>

                    </div>


                    <div class="accessibility-controls">


                        {{-- FONT --}}

                        <button
                            type="button"
                            class="dashboard-accessibility-button"
                            id="fontToggle"
                            aria-pressed="false"
                        >

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >

                                <path d="M4 19L9 5h2l5 14"></path>

                                <path d="M6 14h8"></path>

                                <path d="M17 8h4"></path>

                                <path d="M19 6v4"></path>

                            </svg>


                            <span class="accessibility-button-text">

                                <strong>
                                    Perbesar Teks
                                </strong>

                                <span>
                                    Membuat tulisan lebih mudah dibaca.
                                </span>

                            </span>

                        </button>


                        {{-- CONTRAST --}}

                        <button
                            type="button"
                            class="dashboard-accessibility-button"
                            id="contrastToggle"
                            aria-pressed="false"
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

                                <path
                                    d="M12 3a9 9 0 0 1 0 18z"
                                ></path>

                            </svg>


                            <span class="accessibility-button-text">

                                <strong>
                                    Kontras Tinggi
                                </strong>

                                <span>
                                    Tingkatkan perbedaan warna.
                                </span>

                            </span>

                        </button>


                        {{-- READ --}}

                        <button
                            type="button"
                            class="dashboard-accessibility-button"
                            id="readToggle"
                            aria-pressed="false"
                        >

                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
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


                            <span class="accessibility-button-text">

                                <strong>
                                    Baca Halaman
                                </strong>

                                <span>
                                    Membacakan isi halaman dengan suara.
                                </span>

                            </span>

                        </button>

                    </div>

                </div>

            </div>

        </section>

    </main>


    {{-- =====================================================
         FOOTER
         SAMA DENGAN HOME
         ===================================================== --}}

    <footer class="sedolor-footer">

        <div class="sedolor-container">

            <div class="footer-grid">


                {{-- BRAND --}}

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


                {{-- NAVIGASI --}}

                <div>

                    <h3 class="footer-title">
                        Navigasi
                    </h3>


                    <div class="footer-links">

                        <a href="{{ route('dashboard') }}">
                            Beranda
                        </a>


                        <a href="{{ route('pendaftaran.mulai') }}">
                            Layanan
                        </a>


                        <a href="/jadwal-antrean">
                            Jadwal & Antrean
                        </a>


                        <a href="{{ route('informasi-produk') }}">
                            Informasi
                        </a>


                        <a href="#aksesibilitas">
                            Aksesibilitas
                        </a>

                    </div>

                </div>


                {{-- AKUN --}}

                <div>

                    <h3 class="footer-title">
                        Akun
                    </h3>


                    <div class="footer-links">

                        <a href="#">
                            Profil Saya
                        </a>


                        <a href="{{ route('informasi-produk') }}">
                            Bantuan
                        </a>


                        <form
                            method="POST"
                            action="{{ route('logout') }}"
                            style="margin:0;"
                        >

                            @csrf

                            <button
                                type="submit"
                                style="
                                    padding:0;
                                    border:0;
                                    background:none;
                                    color:#B9CBDD;
                                    font-size:13px;
                                    cursor:pointer;
                                    text-align:left;
                                    transition:color .15s ease,
                                               transform .15s ease;
                                "
                                onmouseover="
                                    this.style.color='white';
                                    this.style.transform='translateX(3px)';
                                "
                                onmouseout="
                                    this.style.color='#B9CBDD';
                                    this.style.transform='translateX(0)';
                                "
                            >

                                Keluar dari SEDOLOR

                            </button>

                        </form>

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
        document.querySelectorAll(
            '.dashboard-reveal'
        );


    if ('IntersectionObserver' in window) {

        const revealObserver =
            new IntersectionObserver(
                function (entries, observer) {

                    entries.forEach(
                        function (entry) {

                            if (
                                entry.isIntersecting
                            ) {

                                entry.target.classList.add(
                                    'is-visible'
                                );

                                observer.unobserve(
                                    entry.target
                                );

                            }

                        }
                    );

                },
                {
                    threshold: 0.12,

                    rootMargin:
                        '0px 0px -35px 0px'
                }
            );


        revealElements.forEach(
            function (element) {

                revealObserver.observe(
                    element
                );

            }
        );

    } else {

        revealElements.forEach(
            function (element) {

                element.classList.add(
                    'is-visible'
                );

            }
        );

    }


    /* =====================================================
       CHARACTER MOUSE PARALLAX
       Karakter sedikit mengikuti gerakan mouse
       ===================================================== */

    const characterArea =
        document.getElementById(
            'characterArea'
        );


    const characterImage =
        document.getElementById(
            'characterImage'
        );


    if (
        characterArea &&
        characterImage &&
        window.matchMedia(
            '(prefers-reduced-motion: no-preference)'
        ).matches
    ) {

        characterArea.addEventListener(
            'mousemove',
            function (event) {

                const rect =
                    characterArea.getBoundingClientRect();


                const x =
                    event.clientX -
                    rect.left;


                const y =
                    event.clientY -
                    rect.top;


                const centerX =
                    rect.width / 2;


                const centerY =
                    rect.height / 2;


                const moveX =
                    (x - centerX) /
                    centerX *
                    7;


                const moveY =
                    (y - centerY) /
                    centerY *
                    5;


                characterImage.style.transform =
                    `translate3d(${moveX}px, ${moveY}px, 0) scale(1.02)`;

            }
        );


        characterArea.addEventListener(
            'mouseleave',
            function () {

                characterImage.style.transform =
                    '';

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
                    !(
                        'speechSynthesis'
                        in window
                    )
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
                'speechSynthesis'
                in window
            ) {

                window.speechSynthesis.cancel();

            }

        }
    );

});

</script>


@endsection