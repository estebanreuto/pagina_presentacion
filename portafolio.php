<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Portafolio | VERTIX TECNOLOGY S.A.S.</title>
    <link rel="icon" href="./ico_redondo.png" type="image/png" sizes="128x128">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root {
            --c-blue: #2E86FF;
            --c-green: #1FCAA0;
            --c-yellow: #F5B200;
            --c-dark: #0F172A;
            --c-muted: #6B7280;
            --radius: 16px;
            --shadow: 0 10px 30px rgba(15, 23, 42, .15);
            --grad: linear-gradient(135deg, var(--c-blue), var(--c-green), var(--c-yellow));
        }

        * {
            box-sizing: border-box
        }

        a {
            text-decoration: none
        }

        html,
        body {
            height: 100%
        }

        body {
            margin: 0;
            background: #fff;
            color: var(--c-dark);
            font-family: system-ui, -apple-system, Segoe UI, Roboto, Inter, Ubuntu, "Helvetica Neue", Arial, sans-serif;
            line-height: 1.4
        }

        @media (max-width: 540px) {
            .services {
                grid-template-columns: 1fr
            }

            .topbar {
                margin: 12px
            }

            .hero {
                margin: 12px
            }

            footer {
                margin: 18px 12px
            }
        }

        .topbar {
            border-radius: 20px;
        }

        /* Capa “glassy” sin romper el sticky */
        .topbar::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: inherit;
            background: rgba(255, 255, 255, .88);
            -webkit-backdrop-filter: saturate(120%) blur(8px);
            backdrop-filter: saturate(120%) blur(8px);
            z-index: -1;
            /* queda detrás del contenido */
        }


        .logo {
            height: 44px;
            width: 44px;
            display: grid;
            place-items: center;
            border-radius: 14px;
            background: transparent
        }

        .logo img {
            height: 100%;
            width: 100%;
            object-fit: contain;
            display: block
        }

        .brand {
            font-weight: 700;
            letter-spacing: .2px
        }

        .cta {
            margin-left: auto;
            display: flex;
            gap: 8px
        }

        @keyframes gradientMove {
            0% {
                background-position: 0% 50%
            }

            50% {
                background-position: 100% 50%
            }

            100% {
                background-position: 0% 50%
            }
        }

        .btn {
            position: relative;
            padding: 8px 14px;
            border-radius: 12px;
            border: 1px solid transparent;
            cursor: pointer;
            font-weight: 600;
            background: var(--grad);
            background-size: 200% 200%;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: gradientMove 8s ease-in-out infinite
        }

        .btn::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 12px;
            padding: 2px;
            background: var(--grad);
            background-size: 200% 200%;
            animation: gradientMove 8s ease-in-out infinite;
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude
        }

        .btn:hover {
            filter: drop-shadow(0 4px 10px rgba(47, 139, 255, .18))
        }

        .btn:active {
            transform: translateY(1px)
        }

        .btn.solid {
            color: #fff;
            background: var(--grad);
            background-size: 200% 200%;
            border: none;
            animation: gradientMove 6s linear infinite;
            box-shadow: 0 6px 16px rgba(31, 202, 160, .22)
        }

        .btn.solid::before {
            display: none
        }

        .btn.current {
            color: #0f172a;
            -webkit-background-clip: initial;
            background-clip: initial;
            background: var(--grad);
            border: none;
            box-shadow: 0 6px 18px rgba(46, 134, 255, .2)
        }

        .btn.current::before {
            display: none
        }

        @media (prefers-reduced-motion:reduce) {

            .btn,
            .btn::before,
            .btn.solid,
            .btn.current {
                animation: none !important
            }
        }

        .wrap {
            max-width: 95%;
            margin: 22px auto;
        }

        .page-head {
            background: #fff;
            border: 1px solid #eef1f6;
            border-radius: 16px;
            box-shadow: var(--shadow);
            padding: 22px
        }

        .badge {
            font-size: 12px;
            color: var(--c-muted);
            text-transform: uppercase;
            letter-spacing: .14em
        }

        .title {
            margin: 8px 0 12px;
            font-size: clamp(26px, 4vw, 44px);
            font-weight: 900;
            line-height: 1.05
        }

        .divider {
            height: 4px;
            width: 160px;
            border-radius: 4px;
            background: var(--grad);
            background-size: 250% 250%;
            animation: gradientMove 10s ease-in-out infinite;
            margin: 10px 0 12px
        }

        .lead {
            color: #374151;
            font-size: 16px
        }

        /* Filtros */
        .filters {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 14px
        }

        .chip {
            padding: 8px 12px;
            border-radius: 999px;
            border: 1px solid #e6e9f2;
            background: #fff;
            cursor: pointer;
            font-weight: 600
        }

        .chip.active {
            background: var(--grad);
            background-size: 220% 220%;
            animation: gradientMove 6s ease-in-out infinite;
            color: #fff;
            border: none;
            box-shadow: 0 6px 16px rgba(31, 202, 160, .18)
        }

        /* Grid */
        .portfolio {
            margin-top: 16px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px
        }

        .project {
            position: relative;
            background: #fff;
            border: 1px solid #eef1f6;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--shadow)
        }

        .thumb {
            position: relative;
            height: 200px;
            overflow: hidden
        }

        .thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transform: scale(1.03);
            transition: transform .5s ease
        }

        .project:hover .thumb img {
            transform: scale(1.08)
        }

        .pill-tag {
            position: absolute;
            top: 10px;
            left: 10px;
            background: rgba(255, 255, 255, .9);
            border: 1px solid #eef1f6;
            border-radius: 999px;
            padding: 6px 10px;
            font-weight: 700;
            font-size: 12px;
            box-shadow: var(--shadow)
        }

        .project .body {
            padding: 14px
        }

        .project h4 {
            margin: 0 0 6px;
            font-size: 18px
        }

        .meta {
            color: #6b7280;
            font-size: 13px
        }

        .actions {
            display: flex;
            gap: 8px;
            margin-top: 12px
        }

        .actions .btn {
            padding: 7px 12px
        }

        .overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(0, 0, 0, 0) 40%, rgba(15, 23, 42, .55));
            opacity: 0;
            transition: opacity .3s
        }

        .project:hover .overlay {
            opacity: 1
        }

        /* Modal + Carrusel */
        .modal {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, .55);
            display: none;
            align-items: center;
            justify-content: center;
            padding: 18px;
            z-index: 1200
        }

        .modal.open {
            display: flex
        }

        .modal-card {
            max-width: 920px;
            width: 100%;
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 16px;
            box-shadow: var(--shadow);
            overflow: hidden;
            position: relative
        }

        .modal-body {
            padding: 16px
        }

        .modal h3 {
            margin: 0 0 8px
        }

        .modal .close {
            position: absolute;
            top: 18px;
            right: 18px;
            width: 40px;
            height: 40px;
            border-radius: 10px;
            border: none;
            background: #fff;
            box-shadow: var(--shadow);
            cursor: pointer;
            z-index: 5
        }

        /* mini-carrusel dentro del modal */
        .mcarousel {
            position: relative;
            background: #000
        }

        .mtrack {
            display: flex;
            transition: transform .6s cubic-bezier(.22, .61, .36, 1)
        }

        .mslide {
            min-width: 100%;
            height: 420px
        }

        .mslide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block
        }

        .mnav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            border: none;
            border-radius: 12px;
            padding: 8px 12px;
            cursor: pointer;
            background: var(--grad);
            background-size: 200% 200%;
            animation: gradientMove 6s linear infinite;
            color: #0f172a;
            box-shadow: 0 6px 16px rgba(31, 202, 160, .22)
        }

        .mnav.prev {
            left: 12px
        }

        .mnav.next {
            right: 12px
        }

        .mdots {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: 10px;
            display: flex;
            gap: 8px
        }

        .mdot {
            width: 10px;
            height: 10px;
            border-radius: 999px;
            border: 1px solid #cfd8e3;
            background: #fff;
            opacity: .9;
            cursor: pointer
        }

        .mdot.active {
            background: var(--grad);
            background-size: 200% 200%;
            animation: gradientMove 8s ease-in-out infinite;
            border: none;
            width: 12px;
            height: 12px
        }

        /* Footer + back to top */
        footer {
            max-width: 95%;
            margin: 28px auto 60px;
            padding: 20px;
            border-radius: 18px;
            border: 1px solid #eef1f6;
            box-shadow: var(--shadow);
            text-align: center
        }

        .back-to-top {
            position: fixed;
            right: 18px;
            bottom: 18px;
            z-index: 999;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            border: none;
            cursor: pointer;
            background: var(--grad);
            background-size: 200% 200%;
            animation: gradientMove 6s ease-in-out infinite;
            color: #fff;
            font-size: 20px;
            display: none;
            box-shadow: 0 6px 16px rgba(31, 202, 160, .25)
        }

        /* Burger / mobile */
        .hamburger {
            display: none;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            width: 40px;
            height: 40px;
            border-radius: 10px;
            border: none;
            background: var(--grad);
            background-size: 200% 200%;
            animation: gradientMove 6s ease-in-out infinite;
            margin-left: auto
        }

        .hamburger i {
            color: #fff;
            font-size: 18px;
            line-height: 1
        }

        .mobile-menu {
            display: none;
            flex-direction: column;
            gap: 12px;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 14px 36px rgba(15, 23, 42, .22);
            padding: 18px;
            position: absolute;
            top: calc(100% + 14px);
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
            max-width: 420px;
            z-index: 999
        }

        .mobile-menu.open {
            display: flex
        }

        .mobile-menu a {
            font-weight: 600;
            color: var(--c-dark);
            padding: 12px 16px;
            border-radius: 10px
        }

        .mobile-menu a:hover {
            background: rgba(31, 202, 160, .1)
        }

        @media (max-width:1280px) {
            .portfolio {
                grid-template-columns: repeat(3, 1fr)
            }
        }

        @media (max-width:980px) {
            .portfolio {
                grid-template-columns: repeat(2, 1fr)
            }
        }

        @media (max-width:768px) {
            .cta {
                display: none
            }

            .hamburger {
                display: flex
            }
        }

        @media (max-width:540px) {
            .portfolio {
                grid-template-columns: 1fr
            }

            .topbar,
            .wrap,
            footer {
                margin-left: 12px;
                margin-right: 12px
            }

            .mslide {
                height: 300px
            }
        }

        /* Loader (se mantiene igual que el tuyo) */
        .page-loader {
            position: fixed;
            inset: 0;
            z-index: 2000;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 18px;
            background: rgba(255, 255, 255, .96);
            backdrop-filter: blur(6px) saturate(120%);
            transition: opacity .55s ease, visibility .55s ease
        }

        .page-loader.hidden {
            opacity: 0;
            visibility: hidden;
            pointer-events: none
        }

        .goo-wrap {
            position: relative;
            width: 220px;
            height: 180px;
            animation: spin 9s linear infinite
        }

        .goo-scene {
            position: absolute;
            inset: 0;
            filter: url(#gooey)
        }

        .mb {
            position: absolute;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: var(--grad);
            background-size: 220% 220%;
            animation: gradientMove 6s ease-in-out infinite;
            box-shadow: 0 0 0 6px rgba(46, 134, 255, .10) inset, 0 10px 24px rgba(0, 0, 0, .12)
        }

        @keyframes spin {
            to {
                transform: rotate(360deg)
            }
        }

        .loader-text {
            font-weight: 800;
            letter-spacing: .4px;
            background: var(--grad);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            background-size: 200% 200%;
            animation: gradientMove 6s ease-in-out infinite;
            font-size: 18px;
            user-select: none
        }

        .tl {
            top: 10px;
            left: 20px;
            animation: tl 2.8s ease-in-out infinite
        }

        .tr {
            top: 10px;
            right: 20px;
            animation: tr 2.8s ease-in-out infinite
        }

        .bl {
            bottom: 10px;
            left: 20px;
            animation: bl 2.8s ease-in-out infinite
        }

        .br {
            bottom: 10px;
            right: 20px;
            animation: br 2.8s ease-in-out infinite
        }

        .c {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation: cPulse 2.8s ease-in-out infinite
        }

        @keyframes tl {

            0%,
            100% {
                transform: translate(0, 0)
            }

            25% {
                transform: translate(35px, 22px)
            }

            50% {
                transform: translate(65px, 55px)
            }

            75% {
                transform: translate(35px, 22px)
            }
        }

        @keyframes tr {

            0%,
            100% {
                transform: translate(0, 0)
            }

            25% {
                transform: translate(-35px, 22px)
            }

            50% {
                transform: translate(-65px, 55px)
            }

            75% {
                transform: translate(-35px, 22px)
            }
        }

        @keyframes bl {

            0%,
            100% {
                transform: translate(0, 0)
            }

            25% {
                transform: translate(35px, -22px)
            }

            50% {
                transform: translate(65px, -55px)
            }

            75% {
                transform: translate(35px, -22px)
            }
        }

        @keyframes br {

            0%,
            100% {
                transform: translate(0, 0)
            }

            25% {
                transform: translate(-35px, -22px)
            }

            50% {
                transform: translate(-65px, -55px)
            }

            75% {
                transform: translate(-35px, -22px)
            }
        }

        @keyframes cPulse {

            0%,
            100% {
                transform: translate(-50%, -50%) scale(1)
            }

            25% {
                transform: translate(-50%, -50%) scale(1.18)
            }

            50% {
                transform: translate(-50%, -50%) scale(1.35)
            }

            75% {
                transform: translate(-50%, -50%) scale(1.18)
            }
        }

        :root {
            --c-blue: #2E86FF;
            --c-green: #1FCAA0;
            --c-yellow: #F5B200;
            --c-dark: #0F172A;
            --c-muted: #6B7280;
            --radius: 16px;
            --shadow: 0 10px 30px rgba(15, 23, 42, .15);
            --grad: linear-gradient(135deg, var(--c-blue), var(--c-green), var(--c-yellow));
            --mint: #5CF7C7;
        }

        * {
            box-sizing: border-box
        }

        html,
        body {
            height: 100%
        }

        body {
            margin: 0;
            background: #fff;
            color: var(--c-dark);
            font-family: system-ui, -apple-system, Segoe UI, Roboto, Inter, Ubuntu, "Helvetica Neue", Arial, sans-serif;
            line-height: 1.4
        }


        .logo {
            height: 44px;
            width: 44px;
            flex: 0 0 auto;
            display: grid;
            place-items: center;
            border-radius: 14px;
            background: transparent;
            border: none;
            box-shadow: none;
            padding: 0
        }

        .logo img {
            height: 100%;
            width: 100%;
            object-fit: contain;
            display: block
        }

        .brand {
            font-weight: 700;
            letter-spacing: .2px
        }

        .cta {
            margin-left: auto;
            display: flex;
            gap: 8px
        }

        @keyframes gradientMove {
            0% {
                background-position: 0% 50%
            }

            50% {
                background-position: 100% 50%
            }

            100% {
                background-position: 0% 50%
            }
        }

        /* =========================
   PORTAFOLIO RESPONSIVE PACK
   (pegar al final del <style>)
   ========================= */

        /* 1) Tarjetas: imágenes fluidas con relación de aspecto */
        .thumb {
            height: auto;
            /* deja que crezca por ancho */
            aspect-ratio: 16 / 10;
            /* relación agradable para cards */
            overflow: hidden;
        }

        .thumb img {
            transform: scale(1.02);
        }

        /* 2) Grid del portafolio por breakpoints limpios */
        @media (min-width: 1281px) {
            .portfolio {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }

        @media (max-width: 1280px) {
            .portfolio {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }

        @media (max-width: 1024px) {
            .portfolio {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 680px) {
            .portfolio {
                grid-template-columns: 1fr;
            }

            .project .body {
                padding: 12px;
            }

            .project h4 {
                font-size: 17px;
            }

            .meta {
                font-size: 13px;
            }
        }

        /* 3) Filtros + buscador: que no se rompan y el buscador sea 100% ancho en móvil */
        .filters {
            align-items: center;
            gap: 10px;
        }

        .filters .chip {
            white-space: nowrap;
        }

        @media (max-width: 980px) {
            .filters {
                row-gap: 8px;
            }
        }

        @media (max-width: 720px) {

            /* 2 filas: chips arriba; buscador ocupa todo abajo */
            .filters {
                display: grid;
                grid-template-columns: repeat(3, auto);
                justify-content: start;
            }

            .filters>div[style] {
                /* tu contenedor del buscador */
                grid-column: 1 / -1;
                /* tomar ancho completo */
                width: 100%;
                display: flex !important;
                gap: 8px !important;
                justify-content: stretch;
            }

            .filters i {
                display: none;
            }

            #search {
                min-width: 0 !important;
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            .filters {
                grid-template-columns: repeat(2, auto);
            }
        }

        /* 4) Modal / carrusel: alto según pantalla y controles más cómodos */
        .mslide {
            height: min(70vh, 520px);
        }

        @media (max-width: 680px) {
            .mslide {
                height: 55vh;
            }

            .mnav {
                padding: 6px 10px;
                border-radius: 10px;
            }

            .modal-body {
                padding: 12px;
            }
        }

        /* 5) Topbar: mantener sticky sin “saltitos” y más compacto en móvil */
        .topbar {
            will-change: transform;
        }

        @media (max-width: 768px) {
            .topbar {
                margin: 12px auto 0;
                padding: 6px 12px;
            }

            .logo {
                width: 48px;
                height: 48px;
            }

            .brand {
                font-size: 14px;
            }

            .cta {
                display: none;
            }

            .hamburger {
                display: flex;
                margin-left: auto;
            }
        }

        /* 6) Contenedores: márgenes cómodos en pantallas chicas */
        @media (max-width: 1024px) {
            .wrap {
                max-width: 96%;
            }

            .page-head {
                padding: 18px;
            }

            .divider {
                width: 130px;
            }
        }

        @media (max-width: 560px) {

            .wrap,
            footer {
                margin-left: 12px;
                margin-right: 12px;
            }

            .page-head {
                padding: 14px;
                border-radius: 14px;
            }

            .divider {
                width: 100px;
            }

            .actions .btn {
                padding: 7px 12px;
            }

            .back-to-top {
                right: 14px;
                bottom: 14px;
                width: 40px;
                height: 40px;
            }
        }

        /* ===== TOPBAR IGUAL AL DE INICIO (OVERRIDE) ===== */

        /* Apaga la capa previa para evitar doble fondo */
        .topbar::before {
            display: none !important;
        }

        /* Contenedor glassy, radios y sombra como Inicio */
        .topbar {
            position: sticky;
            top: 8px;
            z-index: 1000;
            max-width: 1200px;
            margin: 20px auto 0;
            padding: 10px 18px;
            display: flex;
            align-items: center;
            gap: 14px;
            border-radius: 20px;
            background: rgba(255, 255, 255, .88);
            -webkit-backdrop-filter: saturate(120%) blur(8px);
            backdrop-filter: saturate(120%) blur(8px);
            box-shadow: var(--shadow);
            border: 1px solid #eef1f6;
        }

        /* Logo y marca */
        .logo {
            height: 44px;
            width: 44px;
            flex: 0 0 auto;
            display: grid;
            place-items: center;
            border-radius: 14px;
            background: transparent;
            border: none;
            box-shadow: none;
            padding: 0;
        }

        .logo img {
            height: 100%;
            width: 100%;
            object-fit: contain;
            display: block;
        }

        .brand {
            font-weight: 700;
            letter-spacing: .2px;
        }

        /* CTA de la derecha */
        .cta {
            margin-left: auto;
            display: flex;
            gap: 10px;
        }

        .cta .btn {
            text-decoration: none;
        }

        /* Botones (mismos estilos que Inicio) */
        .btn {
            padding: 8px 14px;
            /* más pequeño */
            border-radius: 12px;
            /* más cuadrado */
            font-size: 14px;
            position: relative;
            border: 1px solid transparent;
            cursor: pointer;
            font-weight: 600;
            background: var(--grad);
            background-size: 200% 200%;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: gradientMove 8s ease-in-out infinite;
        }

        .btn::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 999px;
            padding: 2px;
            background: var(--grad);
            background-size: 200% 200%;
            animation: gradientMove 8s ease-in-out infinite;
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
        }

        .btn:hover {
            filter: drop-shadow(0 6px 14px rgba(47, 139, 255, .25));
        }

        .btn:active {
            transform: translateY(1px);
        }

        /* Activo (Portafolio): relleno sólido como en Inicio */
        .btn.current {
            color: #0f172a;
            -webkit-background-clip: initial;
            background-clip: initial;
            background: var(--grad);
            background-size: 200% 200%;
            animation: gradientMove 6s linear infinite;
            border: none;
            box-shadow: 0 6px 18px rgba(46, 134, 255, .20);
        }

        .btn.current::before {
            display: none;
        }

        /* Variante sólida */
        .btn.solid {
            color: #0f172a;
            background: var(--grad);
            background-size: 200% 200%;
            border: none;
            animation: gradientMove 6s linear infinite;
            box-shadow: 0 6px 18px rgba(31, 202, 160, .25);
        }

        .btn.solid::before {
            display: none;
        }

        /* Hamburguesa y menú móvil (idéntico a Inicio) */
        .hamburger {
            display: none;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            width: 40px;
            height: 40px;
            border-radius: 10px;
            border: none;
            background: var(--grad);
            background-size: 200% 200%;
            animation: gradientMove 6s ease-in-out infinite;
            margin-left: auto;
        }

        .hamburger i {
            color: #fff;
            font-size: 18px;
            line-height: 1;
        }

        .mobile-menu {
            display: none;
            flex-direction: column;
            gap: 12px;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 14px 36px rgba(15, 23, 42, .22);
            padding: 18px;
            position: absolute;
            top: calc(100% + 14px);
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
            max-width: 420px;
            z-index: 999;
        }

        .mobile-menu.open {
            display: flex;
        }

        .mobile-menu a {
            text-decoration: none;
            font-weight: 600;
            color: var(--c-dark);
            padding: 12px 16px;
            border-radius: 10px;
            transition: background .2s;
        }

        .mobile-menu a:hover {
            background: rgba(31, 202, 160, .1);
        }

        /* Breakpoints como Inicio */
        @media (max-width:768px) {
            .cta {
                display: none;
            }

            .hamburger {
                display: flex;
            }
        }

        @media (max-width:540px) {
            .topbar {
                margin: 12px;
            }
        }

        /* Respeta “prefiere menos movimiento” */
        @media (prefers-reduced-motion: reduce) {

            .btn,
            .btn::before,
            .btn.solid,
            .btn.current {
                animation: none !important;
            }
        }

        /* =========================
   RESPONSIve QUICK FIX PACK
   (pegar al final del <style>)
   ========================= */

        /* Layout base un poco más fluido en pantallas medianas */
        @media (max-width: 1200px) {
            .hero {
                max-width: 96%;
            }
        }

        /* <= 1024px: una sola columna, tamaños más compactos */
        @media (max-width: 1024px) {
            .hero {
                grid-template-columns: 1fr;
                /* panel arriba, sidebar abajo */
                gap: 20px;
                margin: 18px auto;
                max-width: 96%;
            }

            .panel {
                padding: 22px;
                border-radius: 16px;
            }

            .sidecard {
                padding: 14px;
                border-radius: 12px;
            }

            .team {
                grid-template-columns: repeat(2, 1fr);
                gap: 14px;
            }

            .divider {
                width: 130px;
            }

            .topbar {
                margin: 14px auto 0;
                padding: 8px 14px;
            }

            .cta .btn {
                font-size: 14px;
                padding: 8px 12px;
                border-radius: 12px;
            }
        }

        /* <= 768px: navegación móvil + tipografías y espacios */
        @media (max-width: 768px) {

            /* nav móvil */
            .cta {
                display: none;
            }

            .hamburger {
                display: flex;
                margin-left: auto;
            }

            .mobile-menu {
                width: calc(100% - 24px);
                left: 50%;
                transform: translateX(-50%);
                top: calc(100% + 10px);
                border-radius: 16px;
                padding: 14px;
            }

            .mobile-menu a {
                padding: 12px;
                border-radius: 10px;
            }

            /* contenido */
            .title {
                font-size: clamp(24px, 6vw, 34px);
            }

            .lead {
                font-size: 16px;
            }

            .panel {
                padding: 18px;
            }

            .grid.cols-3 {
                grid-template-columns: repeat(2, 1fr);
            }

            .grid.cols-2 {
                grid-template-columns: 1fr 1fr;
            }

            .team {
                grid-template-columns: repeat(2, 1fr);
            }

            .avatar {
                width: 64px;
                height: 64px;
            }

            footer {
                margin: 22px 12px 48px;
            }

            .topbar {
                margin: 12px;
                border-radius: 20px;
            }

            .btn {
                font-size: 14px;
                padding: 8px 12px;
                border-radius: 12px;
            }
        }

        /* <= 560px: una columna en todo, márgenes seguros */
        @media (max-width: 560px) {
            .hero {
                margin: 12px;
            }

            .grid.cols-3,
            .grid.cols-2 {
                grid-template-columns: 1fr;
            }

            .team {
                grid-template-columns: 1fr;
            }

            .divider {
                width: 100px;
            }

            .panel {
                padding: 16px;
            }

            .sidecard {
                padding: 12px;
            }

            .card {
                padding: 12px;
            }

            .pill {
                padding: 8px 12px;
                border-radius: 999px;
            }

            .topbar {
                padding: 8px 12px;
            }

            .logo {
                width: 48px;
                height: 48px;
            }

            .brand {
                font-size: 14px;
            }

            /* botón “subir” un poco más arriba para no chocar con barras del móvil */
            .back-to-top {
                right: 14px;
                bottom: 14px;
                width: 40px;
                height: 40px;
            }
        }

        /* Slogan debajo de la marca */
        .brand {
            display: flex;
            flex-direction: column;
            font-weight: 700;
            letter-spacing: .2px;
            line-height: 1.2;
        }

        .brand .slogan {
            font-size: 12px;
            font-weight: 500;
            color: var(--c-muted);
            margin-top: 2px;
            letter-spacing: 0.3px;
        }
    </style>
</head>

<body>
    <!-- Topbar -->
    <div class="topbar">
        <div class="logo"><img src="./logo_vertix_sin_fondo.png" alt="Logo"></div>
        <div class="brand">
            VERTIX TECNOLOGY
            <div class="slogan">El Punto más Alto en Desarrollo y Tecnología</div>
        </div>
        <div class="cta">
            <a href="index.php" class="btn">Inicio</a>
            <a href="conocenos.php" class="btn">Conócenos</a>
            <button class="btn current" aria-current="page" style="color:#fff">Portafolio</button>
            <a href="#contacto" class="btn solid" style="color:#fff">Contáctanos</a>
        </div>
        <button class="hamburger" id="hamburger" aria-label="Menú" aria-expanded="false"><i
                class="fa-solid fa-bars"></i></button>
        <div class="mobile-menu" id="mobileMenu">
            <a href="index.php">Inicio</a><a href="conocenos.php">Conócenos</a><a href="portafolio.php">Portafolio</a><a
                href="#contacto">Contáctanos</a>
        </div>
    </div>

    <!-- Header Portafolio -->
    <div class="wrap">
        <section class="page-head">
            <div class="badge">Nuestro trabajo</div>
            <h1 class="title">Portafolio</h1>
            <div class="divider"></div>
            <p class="lead">Casos reales en desarrollo web, apps móviles, UI/UX, nube, integraciones, ciberseguridad y
                analítica. Filtra por categoría o busca un caso similar al tuyo.</p>

            <div class="filters" id="filters">
                <button class="chip active" data-filter="all">Todos</button>
                <button class="chip" data-filter="web">Web & Apps</button>
                <button class="chip" data-filter="mobile">Apps móviles</button>
                <button class="chip" data-filter="uiux">Diseño UI/UX</button>
                <button class="chip" data-filter="cloud">Nube / DevOps</button>
                <button class="chip" data-filter="api">Integraciones & APIs</button>
                <button class="chip" data-filter="sec">Ciberseguridad / Optimización</button>
                <button class="chip" data-filter="mkt">Analítica & Marketing</button>

                <div style="margin-left:auto;display:flex;gap:8px;align-items:center">
                    <i class="fa-solid fa-magnifying-glass" style="color:#94a3b8"></i>
                    <input id="search" type="search" placeholder="Buscar proyecto..."
                        style="border:1px solid #e5e7eb;border-radius:12px;padding:8px 12px;outline:none;min-width:220px">
                </div>
            </div>

            <!-- Grid -->
            <div class="portfolio" id="portfolio">
                <!-- WEB -->
                <article class="project" data-cat="web" data-title="Landing Page corporativa"
                    data-gallery="./imgs/landing1.jpg|./imgs/landing2.jpg|./imgs/landing3.jpg">
                    <div class="thumb">
                        <img src="./imgs/landing1.jpg" alt="Landing Page">
                        <span class="pill-tag">Web & Apps</span>
                        <div class="overlay"></div>
                    </div>
                    <div class="body">
                        <h4>Páginas de Presentación</h4>
                        <div class="meta">Sitios web modernos y optimizados para mostrar tu negocio o marca de forma profesional.</div>
                        <div class="actions">
                            <button class="btn solid preview">Vista rápida</button>
                        </div>
                    </div>
                </article>

                <article class="project" data-cat="web" data-title="Sitio corporativo + Blog"
                    data-gallery="./imgs/corporativo1.jpg|./imgs/corporativo2.jpg">
                    <div class="thumb">
                        <img src="./imgs/corporativo1.jpg" alt="Sitio corporativo">
                        <span class="pill-tag">Web & Apps</span>
                        <div class="overlay"></div>
                    </div>
                    <div class="body">
                        <h4>Sitio corporativo + Blog</h4>
                        <div class="meta">Institucional • Servicios • Contacto • Blog</div>
                        <div class="actions">
                            <button class="btn solid preview">Vista rápida</button>
                        </div>
                    </div>
                </article>

                <article class="project" data-cat="web" data-title="E-commerce WordPress"
                    data-gallery="./imgs/ecom1.jpg|./imgs/ecom2.jpg|./imgs/ecom3.jpg">
                    <div class="thumb">
                        <img src="./imgs/ecom1.jpg" alt="E-commerce">
                        <span class="pill-tag">Web & Apps</span>
                        <div class="overlay"></div>
                    </div>
                    <div class="body">
                        <h4>E-commerce WordPress</h4>
                        <div class="meta">Pasarelas • Carrito • Inventario</div>
                        <div class="actions">
                            <button class="btn solid preview">Vista rápida</button>
                        </div>
                    </div>
                </article>

                <!-- SISTEMAS/ERP/CRM -->
                <article class="project" data-cat="web" data-title="Sistemas administrativos a medida"
                    data-gallery="./imgs/admin1.jpg|./imgs/admin2.jpg">
                    <div class="thumb">
                        <img src="./imgs/admin1.jpg" alt="Sistemas a medida">
                        <span class="pill-tag">Web & Apps</span>
                        <div class="overlay"></div>
                    </div>
                    <div class="body">
                        <h4>Sistemas administrativos a medida</h4>
                        <div class="meta">Paneles de control • Clientes • Ventas • Procesos</div>
                        <div class="actions">
                            <button class="btn solid preview">Vista rápida</button>
                        </div>
                    </div>
                </article>

                <article class="project" data-cat="web" data-title="ERP & Facturación electrónica"
                    data-gallery="./imgs/erp1.jpg|./imgs/erp2.jpg|./imgs/erp3.jpg">
                    <div class="thumb">
                        <img src="./imgs/erp1.jpg" alt="ERP">
                        <span class="pill-tag">Web & Apps</span>
                        <div class="overlay"></div>
                    </div>
                    <div class="body">
                        <h4>ERP & Facturación electrónica</h4>
                        <div class="meta">Inventarios • Reportes • DIAN / FE</div>
                        <div class="actions">
                            <button class="btn solid preview">Vista rápida</button>
                        </div>
                    </div>
                </article>

                <article class="project" data-cat="web" data-title="CRM de clientes"
                    data-gallery="./imgs/crm1.jpg|./imgs/crm2.jpg">
                    <div class="thumb">
                        <img src="./imgs/crm1.jpg" alt="CRM">
                        <span class="pill-tag">Web & Apps</span>
                        <div class="overlay"></div>
                    </div>
                    <div class="body">
                        <h4>CRM de clientes</h4>
                        <div class="meta">Historial • Oportunidades • Soporte • Fidelización</div>
                        <div class="actions">
                            <button class="btn solid preview">Vista rápida</button>
                        </div>
                    </div>
                </article>

                <!-- AUTOMATIZACIÓN -->
                <article class="project" data-cat="api" data-title="Automatización de procesos (RPA)"
                    data-gallery="./imgs/rpa1.jpg|./imgs/rpa2.jpg">
                    <div class="thumb">
                        <img src="./imgs/rpa1.jpg" alt="RPA">
                        <span class="pill-tag">Automatización</span>
                        <div class="overlay"></div>
                    </div>
                    <div class="body">
                        <h4>Automatización de procesos (RPA)</h4>
                        <div class="meta">Power Automate • Copilot • 85% menos tiempo</div>
                        <div class="actions">
                            <button class="btn solid preview">Vista rápida</button>
                        </div>
                    </div>
                </article>

                <!-- MÓVIL -->
                <article class="project" data-cat="mobile" data-title="App móvil multiplataforma"
                    data-gallery="./imgs/mobile1.jpg|./imgs/mobile2.jpg">
                    <div class="thumb">
                        <img src="./imgs/mobile1.jpg" alt="App móvil">
                        <span class="pill-tag">Apps móviles</span>
                        <div class="overlay"></div>
                    </div>
                    <div class="body">
                        <h4>App móvil multiplataforma</h4>
                        <div class="meta">React Native • Android & iOS con una base</div>
                        <div class="actions">
                            <button class="btn solid preview">Vista rápida</button>
                        </div>
                    </div>
                </article>

                <article class="project" data-cat="mobile" data-title="Integración con APIs y BD"
                    data-gallery="./imgs/mobiledb1.jpg|./imgs/mobiledb2.jpg">
                    <div class="thumb">
                        <img src="./imgs/mobiledb1.jpg" alt="Integración móvil">
                        <span class="pill-tag">Apps móviles</span>
                        <div class="overlay"></div>
                    </div>
                    <div class="body">
                        <h4>Integración con APIs y BD</h4>
                        <div class="meta">Sincronización en tiempo real • Notificaciones</div>
                        <div class="actions">
                            <button class="btn solid preview">Vista rápida</button>
                        </div>
                    </div>
                </article>

                <!-- UI/UX -->
                <article class="project" data-cat="uiux" data-title="UI/UX – Prototipado y wireframes"
                    data-gallery="./imgs/uiux1.jpg|./imgs/uiux2.jpg">
                    <div class="thumb">
                        <img src="./imgs/uiux1.jpg" alt="UI/UX">
                        <span class="pill-tag">UI/UX</span>
                        <div class="overlay"></div>
                    </div>
                    <div class="body">
                        <h4>UI/UX – Prototipado y wireframes</h4>
                        <div class="meta">Validación previa • Figma</div>
                        <div class="actions">
                            <button class="btn solid preview">Vista rápida</button>
                        </div>
                    </div>
                </article>

                <!-- NUBE -->
                <article class="project" data-cat="cloud" data-title="Hosting y dominio gestionado"
                    data-gallery="./imgs/hosting1.jpg|./imgs/hosting2.jpg">
                    <div class="thumb">
                        <img src="./imgs/hosting1.jpg" alt="Hosting">
                        <span class="pill-tag">Nube</span>
                        <div class="overlay"></div>
                    </div>
                    <div class="body">
                        <h4>Hosting y dominio gestionado</h4>
                        <div class="meta">Despliegue seguro • Monitoreo</div>
                        <div class="actions">
                            <button class="btn solid preview">Vista rápida</button>
                        </div>
                    </div>
                </article>

                <article class="project" data-cat="cloud" data-title="Integración con Firebase/AWS/Azure"
                    data-gallery="./imgs/cloud1.jpg|./imgs/cloud2.jpg|./imgs/cloud3.jpg">
                    <div class="thumb">
                        <img src="./imgs/cloud1.jpg" alt="Cloud">
                        <span class="pill-tag">Nube</span>
                        <div class="overlay"></div>
                    </div>
                    <div class="body">
                        <h4>Integración con Firebase / AWS / Azure</h4>
                        <div class="meta">Auth • DB • Storage • CI/CD</div>
                        <div class="actions">
                            <button class="btn solid preview">Vista rápida</button>
                        </div>
                    </div>
                </article>

                <!-- INTEGRACIONES -->
                <article class="project" data-cat="api" data-title="Pasarelas de pago (ePayco, MercadoPago, PayPal)"
                    data-gallery="./imgs/pay1.jpg|./imgs/pay2.jpg">
                    <div class="thumb">
                        <img src="./imgs/pay1.jpg" alt="Pasarelas">
                        <span class="pill-tag">Integraciones</span>
                        <div class="overlay"></div>
                    </div>
                    <div class="body">
                        <h4>Pasarelas de pago</h4>
                        <div class="meta">Cobros en línea seguros</div>
                        <div class="actions">
                            <button class="btn solid preview">Vista rápida</button>
                        </div>
                    </div>
                </article>

                <article class="project" data-cat="api" data-title="APIs de terceros: RRSS, WhatsApp, envíos"
                    data-gallery="./imgs/apis1.jpg|./imgs/apis2.jpg">
                    <div class="thumb">
                        <img src="./imgs/apis1.jpg" alt="APIs">
                        <span class="pill-tag">Integraciones</span>
                        <div class="overlay"></div>
                    </div>
                    <div class="body">
                        <h4>Conexiones con sistemas externos</h4>
                        <div class="meta">Redes sociales • Mensajería • Envíos</div>
                        <div class="actions">
                            <button class="btn solid preview">Vista rápida</button>
                        </div>
                    </div>
                </article>

                <!-- SEGURIDAD / OPTIMIZACIÓN -->
                <article class="project" data-cat="sec" data-title="Seguridad web (SSL, cifrado) + Hardening"
                    data-gallery="./imgs/sec1.jpg|./imgs/sec2.jpg">
                    <div class="thumb">
                        <img src="./imgs/sec1.jpg" alt="Seguridad">
                        <span class="pill-tag">Seguridad</span>
                        <div class="overlay"></div>
                    </div>
                    <div class="body">
                        <h4>Seguridad web + Hardening</h4>
                        <div class="meta">SSL • Cifrado • DLP • MFA</div>
                        <div class="actions">
                            <button class="btn solid preview">Vista rápida</button>
                        </div>
                    </div>
                </article>

                <article class="project" data-cat="sec" data-title="SEO técnico y performance"
                    data-gallery="./imgs/seo1.jpg|./imgs/seo2.jpg">
                    <div class="thumb">
                        <img src="./imgs/seo1.jpg" alt="SEO">
                        <span class="pill-tag">Optimización</span>
                        <div class="overlay"></div>
                    </div>
                    <div class="body">
                        <h4>SEO técnico y performance</h4>
                        <div class="meta">Core Web Vitals • Indexación</div>
                        <div class="actions">
                            <button class="btn solid preview">Vista rápida</button>
                        </div>
                    </div>
                </article>

                <!-- ANALÍTICA / MARKETING -->
                <article class="project" data-cat="mkt" data-title="Analytics & Tagging"
                    data-gallery="./imgs/ga1.jpg|./imgs/ga2.jpg">
                    <div class="thumb">
                        <img src="./imgs/ga1.jpg" alt="Analytics">
                        <span class="pill-tag">Analítica</span>
                        <div class="overlay"></div>
                    </div>
                    <div class="body">
                        <h4>Integración GA4 / Meta Pixel</h4>
                        <div class="meta">Medición de tráfico y conversiones</div>
                        <div class="actions">
                            <button class="btn solid preview">Vista rápida</button>
                        </div>
                    </div>
                </article>

                <article class="project" data-cat="mkt" data-title="Email marketing automatizado"
                    data-gallery="./imgs/email1.jpg|./imgs/email2.jpg">
                    <div class="thumb">
                        <img src="./imgs/email1.jpg" alt="Email marketing">
                        <span class="pill-tag">Marketing</span>
                        <div class="overlay"></div>
                    </div>
                    <div class="body">
                        <h4>Campañas de Email marketing</h4>
                        <div class="meta">Automatizaciones • Segmentación</div>
                        <div class="actions">
                            <button class="btn solid preview">Vista rápida</button>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </div>

    <footer>© 2025 · VERTIX TECNOLOGY S.A.S. · contacto@tuempresa.com · +57 300 000 0000</footer>
    <button id="backToTop" class="back-to-top" aria-label="Volver arriba"><i class="fas fa-arrow-up"></i></button>

    <!-- Modal con carrusel -->
    <div class="modal" id="modal">
        <button class="close" id="modalClose" aria-label="Cerrar"><i class="fa-solid fa-xmark"></i></button>
        <div class="modal-card">
            <div class="mcarousel" id="mcarousel">
                <div class="mtrack" id="mtrack"></div>
                <button class="mnav prev" id="mprev">‹</button>
                <button class="mnav next" id="mnext">›</button>
                <div class="mdots" id="mdots"></div>
            </div>
            <div class="modal-body">
                <h3 id="modalTitle"></h3>
                <p id="modalDesc" class="lead" style="font-size:15px">
                    Alcance, herramientas y valor entregado. Si quieres un caso similar para tu empresa, escríbenos y te
                    enviamos una propuesta en 24–48h.
                </p>
                <div class="actions">
                    <a id="modalLink" href="#contacto" class="btn solid">Solicitar propuesta</a>
                </div>
            </div>
        </div>
    </div>

    <!-- SVG filtro goo del loader -->
    <svg width="0" height="0" style="position:absolute">
        <defs>
            <filter id="gooey">
                <feGaussianBlur in="SourceGraphic" stdDeviation="12" result="blur" />
                <feColorMatrix in="blur" result="goo" type="matrix"
                    values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -10" />
                <feBlend in="SourceGraphic" in2="goo" />
            </filter>
        </defs>
    </svg>

    <div class="page-loader" id="pageLoader" aria-live="polite" aria-busy="true">
        <div class="goo-wrap">
            <div class="goo-scene">
                <span class="mb tl"></span><span class="mb tr"></span><span class="mb bl"></span><span
                    class="mb br"></span><span class="mb c"></span>
            </div>
        </div>
        <div class="loader-text">Cargando…</div>
    </div>

    <script>
        // Burger
        const burger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobileMenu');
        if (burger) burger.addEventListener('click', () => {
            const open = mobileMenu.classList.toggle('open');
            burger.setAttribute('aria-expanded', open ? 'true' : 'false');
        });
        document.addEventListener('click', (e) => {
            if (!mobileMenu) return;
            if (!mobileMenu.contains(e.target) && !burger.contains(e.target)) {
                mobileMenu.classList.remove('open');
                burger.setAttribute('aria-expanded', 'false');
            }
        });

        // Back to top
        const backToTop = document.getElementById('backToTop');
        window.addEventListener('scroll', () => { backToTop.style.display = window.scrollY > 300 ? 'block' : 'none'; });
        backToTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

        // Loader show/hide on navigation
        const pageLoader = document.getElementById('pageLoader');
        window.addEventListener('load', () => { setTimeout(() => pageLoader.classList.add('hidden'), 1800); });
        document.addEventListener('click', (e) => {
            const a = e.target.closest('a[href]'); if (!a) return;
            const target = (a.getAttribute('target') || '').toLowerCase();
            const anchor = a.getAttribute('href')?.startsWith('#');
            if ((!target || target === '_self') && !anchor) pageLoader.classList.remove('hidden');
        });
        window.addEventListener('beforeunload', () => { pageLoader.classList.remove('hidden'); });

        // Filtros + búsqueda
        const chips = document.querySelectorAll('.chip');
        const cards = [...document.querySelectorAll('.project')];
        const search = document.getElementById('search');
        function applyFilters() {
            const active = document.querySelector('.chip.active')?.dataset.filter || 'all';
            const q = (search.value || '').trim().toLowerCase();
            cards.forEach(card => {
                const cat = card.dataset.cat;
                const title = (card.dataset.title || '').toLowerCase();
                const byCat = active === 'all' || cat === active;
                const byText = !q || title.includes(q);
                card.style.display = (byCat && byText) ? '' : 'none';
            });
        }
        chips.forEach(ch => {
            ch.addEventListener('click', () => {
                chips.forEach(c => c.classList.remove('active'));
                ch.classList.add('active'); applyFilters();
            });
        });
        search.addEventListener('input', applyFilters);

        // ---- Modal con CARRUSEL ----
        const modal = document.getElementById('modal');
        const modalClose = document.getElementById('modalClose');
        const modalTitle = document.getElementById('modalTitle');
        const modalLink = document.getElementById('modalLink');

        const mtrack = document.getElementById('mtrack');
        const mdots = document.getElementById('mdots');
        const mprev = document.getElementById('mprev');
        const mnext = document.getElementById('mnext');

        let mIndex = 0; let mSlides = [];

        function buildCarousel(urls) {
            // limpia
            mtrack.innerHTML = ''; mdots.innerHTML = ''; mSlides = [];
            urls.forEach((src, i) => {
                const s = document.createElement('div'); s.className = 'mslide';
                const img = document.createElement('img'); img.src = src.trim(); img.alt = 'preview ' + (i + 1);
                s.appendChild(img); mtrack.appendChild(s); mSlides.push(s);

                const d = document.createElement('button'); d.className = 'mdot' + (i === 0 ? ' active' : '');
                d.addEventListener('click', () => goTo(i, true)); mdots.appendChild(d);
            });
            mIndex = 0; updateCarousel();
        }
        function updateCarousel() {
            mtrack.style.transform = `translateX(${-mIndex * 100}%)`;
            [...mdots.children].forEach((d, i) => d.classList.toggle('active', i === mIndex));
        }
        function goTo(i) { mIndex = (i + mSlides.length) % mSlides.length; updateCarousel(); }
        mprev.addEventListener('click', () => goTo(mIndex - 1));
        mnext.addEventListener('click', () => goTo(mIndex + 1));

        // abrir modal
        document.querySelectorAll('.project .preview').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const card = e.target.closest('.project');
                const gallery = (card.getAttribute('data-gallery') || '').split('|').filter(Boolean);
                // si no hay varias, usa la imagen visible
                const fallback = [card.querySelector('img').src];
                buildCarousel(gallery.length ? gallery : fallback);
                modalTitle.textContent = card.dataset.title;
                modalLink.href = '#';
                modal.classList.add('open');
            });
        });
        // cerrar
        modalClose.addEventListener('click', () => modal.classList.remove('open'));
        modal.addEventListener('click', (e) => { if (e.target === modal) modal.classList.remove('open'); });
    </script>
</body>

</html>
