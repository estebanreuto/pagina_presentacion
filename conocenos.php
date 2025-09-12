<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Conócenos | VERTIX TECNOLOGY S.A.S.</title>
    <link rel="icon" href="./ico_redondo.png" type="image/png" sizes="128x128">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root {
            --c-blue: #2E86FF;
            --c-green: #1FCAA0;
            --c-yellow: #F5B200;
            --c-dark: #0F172A;
            --c-muted: #6B7280;
            --radius: 22px;
            --shadow: 0 10px 30px rgba(15, 23, 42, .15);
            --grad: linear-gradient(135deg, var(--c-blue), var(--c-green), var(--c-yellow));
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
            /* Quitamos el fondo blanco y el borde innecesario */
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
            border-radius: 0
        }

        .brand {
            font-weight: 700;
            letter-spacing: .2px
        }

        .cta {
            margin-left: auto;
            display: flex;
            gap: 10px
        }

        /* Buttons with animated gradient */
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
            padding: 10px 16px;
            border-radius: 999px;
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
            border-radius: 999px;
            padding: 2px;
            background: var(--grad);
            background-size: 200% 200%;
            animation: gradientMove 8s ease-in-out infinite;
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude
        }

        .btn.solid {
            color: #0f172a;
            background: var(--grad);
            background-size: 200% 200%;
            border: none;
            animation: gradientMove 6s linear infinite;
            box-shadow: 0 6px 18px rgba(31, 202, 160, .25)
        }

        .btn.current {
            color: #0f172a;
            -webkit-background-clip: initial;
            background-clip: initial;
            border: none;
            background: var(--grad);
            background-size: 200% 200%;
            animation: gradientMove 6s linear infinite;
            box-shadow: 0 6px 18px rgba(46, 134, 255, .20)
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

        /* Layout principal */
        .hero {
            max-width: 95%;
            margin: 24px auto;
            display: grid;
            grid-template-columns: 1.3fr .7fr;
            gap: 24px
        }

        .panel {
            background: #fff;
            border: 1px solid #eef1f6;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 32px;
            position: relative;
            width: 100%
        }

        .sidebar {
            display: grid;
            gap: 16px
        }

        .sidecard {
            background: #fff;
            border: 1px solid #eef1f6;
            border-radius: 18px;
            box-shadow: var(--shadow);
            padding: 18px
        }

        /* Typography + dividers */
        .badge {
            font-size: 12px;
            color: var(--c-muted);
            text-transform: uppercase;
            letter-spacing: .14em
        }

        .title {
            margin: 8px 0 16px;
            font-size: clamp(28px, 4.2vw, 56px);
            font-weight: 900;
            line-height: 1.05;
            color: var(--c-dark)
        }

        .divider {
            height: 4px;
            width: 160px;
            border-radius: 4px;
            background: var(--grad);
            background-size: 250% 250%;
            animation: gradientMove 10s ease-in-out infinite;
            margin: 12px 0 16px
        }

        .lead {
            color: #374151;
            font-size: 14px
        }

        /* Secciones */
        .grid {
            display: grid;
            gap: 16px
        }

        .grid.cols-3 {
            grid-template-columns: repeat(3, 1fr)
        }

        .grid.cols-2 {
            grid-template-columns: repeat(2, 1fr)
        }

        .pill {
            padding: 10px 14px;
            border-radius: 999px;
            border: 1px solid #e6e9f2;
            background: #fff;
            box-shadow: var(--shadow);
            font-weight: 600
        }

        .stat {
            background: #fff;
            border: 1px solid #eef1f6;
            border-radius: 18px;
            box-shadow: var(--shadow);
            padding: 18px;
            text-align: center
        }

        .stat .num {
            font-size: 28px;
            font-weight: 900
        }

        .card {
            background: #fff;
            border: 1px solid #eef1f6;
            border-radius: 18px;
            box-shadow: var(--shadow);
            padding: 18px;
            font-size: 14px;
        }

        .card h4 {
            margin: 0 0 6px;
            font-size: 18px;
        }

        .team {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px
        }

        .avatar {
            height: 72px;
            width: 72px;
            border-radius: 50%;
            background: #f1f5f9;
            display: grid;
            place-items: center;
            margin-bottom: 8px;
            border: 2px solid #e2e8f0
        }

        footer {
            max-width: 1200px;
            margin: 28px auto 60px;
            padding: 20px;
            border-radius: 18px;
            border: 1px solid #eef1f6;
            box-shadow: var(--shadow);
            text-align: center;
            margin-bottom: 40px
        }

        @media (max-width:980px) {
            .hero {
                grid-template-columns: 1fr
            }

            .team {
                grid-template-columns: repeat(2, 1fr)
            }
        }

        @media (max-width:540px) {
            .hero {
                margin: 12px
            }

            .topbar {
                margin: 12px
            }

            .team {
                grid-template-columns: 1fr
            }
        }

        /* --- 1) Radios y tamaños más cuadrados/compactos --- */
        :root {
            --radius: 16px;
            /* antes 22px */
        }

        .topbar {
            border-radius: 20px;
        }

        /* antes 999px */

        .panel {
            border-radius: var(--radius);
            padding: 24px;
        }

        /* antes 32px */
        .sidecard {
            border-radius: 12px;
            padding: 16px;
        }

        /* antes 18px */
        .card {
            border-radius: 12px;
            padding: 14px;
        }

        /* antes 18px/16px */
        .pill {
            border-radius: 999px;
            padding: 8px 12px;
            font-weight: 600;
        }

        /* un poco + chica */

        /* --- 2) Navegación más cuadrada y pequeña --- */
        .cta {
            gap: 8px;
        }

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
            border-radius: 12px;
            padding: 2px;
            background: var(--grad);
            background-size: 200% 200%;
            animation: gradientMove 8s ease-in-out infinite;
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
        }

        /* Activo (Inicio): relleno gradiente animado, sin “rayita” */
        .btn.current {
            color: #0f172a;
            -webkit-background-clip: initial;
            background-clip: initial;
            background: var(--grad);
            background-size: 200% 200%;
            animation: gradientMove 6s linear infinite;
            border: none;
        }

        .btn.current::before {
            display: none;
        }

        /* Contáctanos sólido, SIN borde (“rayita”) y con animación automática */
        .btn.solid {
            color: #0f172a;
            background: var(--grad);
            background-size: 200% 200%;
            border: none;
            /* quita rayita */
            animation: gradientMove 6s linear infinite;
            box-shadow: 0 6px 16px rgba(31, 202, 160, .22);
        }

        .btn.solid::before {
            display: none;
        }

        /* sin borde para sólido */

        /* Hover/active sutiles */
        .btn:hover {
            filter: drop-shadow(0 4px 10px rgba(47, 139, 255, .18));
        }

        .btn:active {
            transform: translateY(1px);
        }

        /* --- 3) Cards de servicios un poquito más compactas --- */
        .services {
            gap: 14px;
        }

        .services .card {
            font-size: 15px;
        }

        /* Accesibilidad: sin animación si el usuario lo prefiere */
        @media (prefers-reduced-motion: reduce) {

            .btn,
            .btn::before,
            .btn.solid,
            .btn.current {
                animation: none !important;
            }
        }

        .cta .btn {
            text-decoration: none;
        }

        /* ====== MENÚ HAMBURGUESA ====== */
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
            /* clave: empujarla a la derecha cuando .cta desaparece en móvil */
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
            box-shadow: 0 14px 36px rgba(15, 23, 42, 0.22);
            padding: 18px;
            position: absolute;
            top: calc(100% + 14px);
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
            /* más ancho */
            max-width: 420px;
            /* límite para que no sea enorme en pantallas grandes */
            z-index: 999;
        }


        /* Centrar visualmente en móviles */
        @media(max-width:768px) {
            .mobile-menu {
                left: 50%;
                transform: translateX(-50%);
            }
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
            background: rgba(31, 202, 160, 0.1);
        }


        /* Mostrar hamburguesa solo en móvil */
        @media(max-width:768px) {
            .cta {
                display: none;
            }

            .hamburger {
                display: flex;
            }
        }

        /* ====== BOTÓN SUBIR ====== */
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
            /* oculto hasta que bajes */
            box-shadow: 0 6px 16px rgba(31, 202, 160, .25);
        }

        :root {
            --mint: #5CF7C7;
            /* puedes cambiarlo por tu gradiente si quieres */
        }

        .page-loader {
            position: fixed;
            inset: 0;
            /* ocupa toda la pantalla */
            z-index: 2000;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            /* <-- esto lo centra verticalmente */
            gap: 18px;
            background: rgba(255, 255, 255, .96);
            -webkit-backdrop-filter: blur(6px) saturate(120%);
            backdrop-filter: blur(6px) saturate(120%);
            transition: opacity .55s ease, visibility .55s ease;
        }

        .goo-wrap {
            position: relative;
            width: 220px;
            height: 100px;
            /* <-- esta altura lo empuja un poco más abajo */
        }


        .page-loader.hidden {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        /* Área del efecto tipo gel */
        .goo-wrap {
            position: relative;
            width: 220px;
            height: 180px;
        }

        .goo-scene {
            position: absolute;
            inset: 0;
            filter: url(#gooey);
        }

        .mb {
            position: absolute;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: var(--grad);
            background-size: 220% 220%;
            animation: gradientMove 6s ease-in-out infinite;
            box-shadow:
                0 0 0 6px rgba(46, 134, 255, .10) inset,
                /* halo azulado suave */
                0 10px 24px rgba(0, 0, 0, .12);
        }

        /* (opcional) sutil giro del conjunto para más vida */
        .goo-wrap {
            animation: spin 9s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        /* Mantén tu loader-text como estaba, ya usa var(--grad) */
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
            user-select: none;
        }

        /* posiciones base */
        .tl {
            top: 10px;
            left: 20px;
            animation: tl 2.8s ease-in-out infinite;
        }

        .tr {
            top: 10px;
            right: 20px;
            animation: tr 2.8s ease-in-out infinite;
        }

        .bl {
            bottom: 10px;
            left: 20px;
            animation: bl 2.8s ease-in-out infinite;
        }

        .br {
            bottom: 10px;
            right: 20px;
            animation: br 2.8s ease-in-out infinite;
        }

        .c {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation: cPulse 2.8s ease-in-out infinite;
        }

        /* Animaciones: se acercan, se cruzan (forma X) y vuelven */
        @keyframes tl {

            0%,
            100% {
                transform: translate(0, 0);
            }

            25% {
                transform: translate(35px, 22px);
            }

            50% {
                transform: translate(65px, 55px);
            }

            /* se une al centro */
            75% {
                transform: translate(35px, 22px);
            }
        }

        @keyframes tr {

            0%,
            100% {
                transform: translate(0, 0);
            }

            25% {
                transform: translate(-35px, 22px);
            }

            50% {
                transform: translate(-65px, 55px);
            }

            75% {
                transform: translate(-35px, 22px);
            }
        }

        @keyframes bl {

            0%,
            100% {
                transform: translate(0, 0);
            }

            25% {
                transform: translate(35px, -22px);
            }

            50% {
                transform: translate(65px, -55px);
            }

            75% {
                transform: translate(35px, -22px);
            }
        }

        @keyframes br {

            0%,
            100% {
                transform: translate(0, 0);
            }

            25% {
                transform: translate(-35px, -22px);
            }

            50% {
                transform: translate(-65px, -55px);
            }

            75% {
                transform: translate(-35px, -22px);
            }
        }

        @keyframes cPulse {

            0%,
            100% {
                transform: translate(-50%, -50%) scale(1.00);
            }

            25% {
                transform: translate(-50%, -50%) scale(1.18);
            }

            50% {
                transform: translate(-50%, -50%) scale(1.35);
            }

            /* fusión más fuerte */
            75% {
                transform: translate(-50%, -50%) scale(1.18);
            }
        }

        .loader-text {
            font-weight: 800;
            letter-spacing: .4px;
            background: linear-gradient(135deg, var(--c-green), var(--c-yellow));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: gradientMove 6s ease-in-out infinite;
            font-size: 18px;
            user-select: none;
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
                padding: 6px 14px;
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
                padding: 6px 12px;
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
        <div class="logo"><img src="./logo_vertix_sin_fondo.png" alt="Logo" /></div>
        <div class="brand">
            VERTIX TECNOLOGY
            <div class="slogan">El Punto más Alto en Desarrollo y Tecnología</div>
        </div>
        <div class="cta">
            <a href="index.php" class="btn">Inicio</a>
            <button style="color: white;" class="btn current" aria-current="page">Conócenos</button>
            <a href="portafolio.php" class="btn">Portafolio</a>
            <a style="color: white;" href="#contacto" class="btn solid">Contáctanos</a>
        </div>
        <!-- antes: spans -->
        <button class="hamburger" id="hamburger" aria-label="Menú" aria-expanded="false">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="mobile-menu" id="mobileMenu">
            <a href="index.php">Inicio</a>
            <a href="conocenos.php">Conócenos</a>
            <a href="portafolio.php">Portafolio</a>
            <a href="#contacto">Contáctanos</a>
        </div>

    </div>

    <!-- Hero Conócenos -->
    <section class="hero">
        <div class="panel">
            <div class="badge">Nosotros</div>
            <h1 class="title">Conócenos</h1>
            <div class="divider"></div>

            <!-- Intro (actualizado) -->
            <p class="lead">
                En VERTIX creemos que la verdadera fortaleza de una empresa está en su capacidad de proteger lo que es e
                impulsar lo que será.
                Por eso, somos una compañía comprometida con la seguridad y la innovación de nuestros clientes,
                ofreciendo soluciones que cuidan los procesos y potencian el crecimiento de los negocios.
            </p>
            <p class="lead">
                No solo crecemos en redes, sino también en la facilidad de trabajar con las personas, a través de
                entornos prácticos y confiables que cuidan lo que has construido y lo que sueñas alcanzar.
            </p>
            <!-- Misión / Visión (actualizado) -->
            <div class="grid cols-2" style="margin-top:18px">
                <div class="card">
                    <h4>🚀 Misión</h4>
                    <p>En VERTIX trabajamos para proteger lo que las empresas ya han construido e impulsar lo que sueñan
                        alcanzar. Nuestra misión es ofrecer soluciones seguras, innovadoras y adaptables a todo tipo de
                        empresa y actividad, diseñando propuestas de valor a la medida que cuiden a las personas y
                        optimicen los procesos. Generamos entornos prácticos, confiables y humanos, donde la tecnología
                        y la cercanía se unen para asegurar el presente y proyectar el futuro de nuestros clientes.</p>
                </div>
                <div class="card">
                    <h4>🧭 Visión</h4>
                    <p>En VERTIX queremos ser reconocidos como aliados estratégicos de confianza para las empresas,
                        destacándonos por ofrecer soluciones seguras, innovadoras y adaptables que marquen la diferencia
                        en cada sector. Aspiramos a consolidarnos como una compañía referente en tecnología y seguridad,
                        generando propuestas de valor a la medida que fortalezcan los procesos, impulsen el crecimiento
                        y aseguren un futuro sostenible para nuestros clientes y sus comunidades.</p>
                </div>
            </div>

            <!-- Valores corporativos (nuevo) -->
            <h2 class="title" style="font-size:clamp(22px,2.6vw,32px);margin-top:22px">Valores corporativos</h2>
            <div class="divider" style="width:140px"></div>
            <div class="grid cols-3">
                <div class="card">
                    <h4>1. Confianza 🤝</h4>
                    <p>Actuamos con transparencia y responsabilidad, generando seguridad en cada relación con nuestros
                        clientes y aliados.</p>
                </div>
                <div class="card">
                    <h4>2. Innovación 💡</h4>
                    <p>Integramos la tecnología con soluciones creativas que se adaptan a los cambios y necesidades de
                        cada empresa.</p>
                </div>
                <div class="card">
                    <h4>3. Cercanía 👥</h4>
                    <p>Escuchamos, entendemos y acompañamos de manera cercana, construyendo relaciones humanas y
                        duraderas.</p>
                </div>
                <div class="card">
                    <h4>4. Adaptabilidad 🔄</h4>
                    <p>Diseñamos propuestas a la medida, ajustándonos a la realidad y particularidades de cada sector y
                        actividad.</p>
                </div>
                <div class="card">
                    <h4>5. Compromiso 🔐</h4>
                    <p>Asumimos cada proyecto como propio, cuidando lo que las empresas han construido y apoyando lo que
                        sueñan alcanzar.</p>
                </div>
            </div>
            <!-- Propuesta de valor (nuevo) -->
            <h2 class="title" style="font-size:clamp(22px,2.6vw,32px);margin-top:22px">Propuesta de valor</h2>
            <div class="divider" style="width:160px"></div>
            <div class="grid">
                <div class="card">
                    <p>
                        En VERTIX acercamos la tecnología a las pymes de cualquier sector económico, desde pequeños
                        negocios hasta medianas y grandes empresas.
                        Sabemos que muchas empresas sienten que la innovación está lejos de su alcance, por eso creamos
                        soluciones prácticas, accesibles y fáciles de usar que se adaptan a su tamaño, presupuesto y
                        necesidad real.
                    </p>
                    <p style="margin-top:10px">
                        Nos diferenciamos por nuestra cercanía y compromiso: no vendemos solo un servicio, impulsamos a
                        las empresas para que avancen, optimicen sus procesos y se conecten mejor con sus clientes.
                        Nuestro propósito es claro:
                        hacer que la tecnología sea una aliada cotidiana, que facilite el trabajo, fortalezca los
                        negocios y abra nuevas oportunidades de crecimiento.
                    </p>
                </div>
            </div>

            <!-- Equipo -->
            <h2 class="title" style="font-size:clamp(22px,2.6vw,32px);margin-top:22px">Nuestro Equipo</h2>
            <div class="divider" style="width:120px"></div>
            <div class="team">
                <div class="card" style="text-align:center">
                    <div class="avatar">A</div>
                    <h4>Arturo Ospina</h4>
                    <small>Director / Ing. SST & Sistemas</small>
                    <p style="margin-top:8px;color:#475569">Integra operaciones de SST con soluciones digitales y
                        automatización.</p>
                </div>
                <div class="card" style="text-align:center">
                    <div class="avatar">W</div>
                    <h4>Willmer Reuto</h4>
                    <small>Director / Ing. Sistemas / Proyectos & QA</small>
                    <p style="margin-top:8px;color:#475569">Construcción de software y entornos aplicativos & Webs
                        alineado con la documentación y la calidad.</p>
                </div>
                <div class="card" style="text-align:center">
                    <div class="avatar">F</div>
                    <h4>Felipe Castañeda</h4>
                    <small>Cloud & Seguridad</small>
                    <p style="margin-top:8px;color:#475569">Infraestructura, hardening y despliegues seguros en la nube.
                    </p>
                </div>
            </div>
        </div>

        <!-- Sidebar: Línea de tiempo / CTA -->
        <aside class="sidebar">
            <div class="sidecard">
                <h4>Nuestra historia</h4>
                <div class="card" style="margin:0 0 12px 0">
                    <strong>2023</strong><br />
                    Nace VERTIX con foco en automatización y soporte.
                </div>
                <div class="card" style="margin:0 0 12px 0">
                    <strong>2024</strong><br />
                    Saltamos a nube (Azure/AWS) y ciberseguridad.
                </div>
                <div class="card" style="margin:0">
                    <strong>2025</strong><br />
                    Integraciones API, BI y chatbots corporativos.
                </div>
            </div>

            <div class="sidecard">
                <h4>Agenda una llamada</h4>
                <div style="font-size:22px;font-weight:800">30 min sin costo</div>
                <p class="lead" style="font-size:14px">Conversemos objetivos y definamos un plan de 1–4 semanas.</p>
                <a href="#contacto" class="btn solid" style="width:100%;text-align:center;display:inline-block">Reservar
                    ahora</a>
            </div>
        </aside>
    </section>

    <footer>
        © 2025 · VERTIX TECNOLOGY S.A.S. · contacto@tuempresa.com · +57 300 000 0000
    </footer>

    <button id="backToTop" class="back-to-top" aria-label="Volver arriba">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Filtro SVG para el efecto “goo” -->
    <svg width="0" height="0" style="position:absolute">
        <defs>
            <filter id="gooey">
                <feGaussianBlur in="SourceGraphic" stdDeviation="12" result="blur" />
                <feColorMatrix in="blur" result="goo" type="matrix" values="1 0 0 0 0
                0 1 0 0 0
                0 0 1 0 0
                0 0 0 18 -10" />
                <feBlend in="SourceGraphic" in2="goo" />
            </filter>
        </defs>
    </svg>

    <div class="page-loader" id="pageLoader" aria-live="polite" aria-busy="true">
        <div class="goo-wrap">
            <div class="goo-scene">
                <span class="mb tl"></span>
                <span class="mb tr"></span>
                <span class="mb bl"></span>
                <span class="mb br"></span>
                <span class="mb c"></span>
            </div>
        </div>
        <div class="loader-text">Cargando…</div>
    </div>

    <script>
        (function () {
            const root = document.getElementById('carousel-main');
            if (!root) return;

            const track = root.querySelector('.carousel-track');
            const slides = Array.from(root.querySelectorAll('.carousel-slide'));
            const prev = root.querySelector('.carousel-btn.prev');
            const next = root.querySelector('.carousel-btn.next');
            const dotsWrap = root.querySelector('.carousel-dots');

            // Crear dots según cantidad de slides
            dotsWrap.innerHTML = '';
            slides.forEach((_, i) => {
                const dot = document.createElement('button');
                dot.className = 'carousel-dot' + (i === 0 ? ' active' : '');
                dot.addEventListener('click', () => go(i, true));
                dotsWrap.appendChild(dot);
            });
            const dots = Array.from(dotsWrap.children);

            let index = 0;
            let timer;

            function update() {
                track.style.transform = `translateX(${-index * 100}%)`;
                dots.forEach((d, i) => d.classList.toggle('active', i === index));
            }
            function go(i, stopAuto = false) {
                index = (i + slides.length) % slides.length;
                update();
                if (stopAuto) restart();
            }
            function nextSlide() { go(index + 1); }
            function prevSlide() { go(index - 1); }

            // Botones (opcional)
            if (next) next.addEventListener('click', () => go(index + 1, true));
            if (prev) prev.addEventListener('click', () => go(index - 1, true));

            // Auto-play
            function start() { timer = setInterval(nextSlide, 5000); } // 5s
            function stop() { clearInterval(timer); }
            function restart() { stop(); start(); }
            start();

            // Pausar al pasar el mouse o enfocar (mejor UX)
            root.addEventListener('mouseenter', stop);
            root.addEventListener('mouseleave', start);
            root.addEventListener('focusin', stop);
            root.addEventListener('focusout', start);

            // Swipe básico (opcional pero útil)
            let isDown = false, startX = 0, delta = 0;
            track.addEventListener('pointerdown', e => { isDown = true; startX = e.clientX; stop(); });
            window.addEventListener('pointermove', e => {
                if (!isDown) return;
                delta = e.clientX - startX;
                track.style.transform = `translateX(${-index * 100 + (delta / root.clientWidth) * 100}%)`;
            });
            window.addEventListener('pointerup', () => {
                if (!isDown) return;
                isDown = false;
                if (Math.abs(delta) > 60) (delta < 0 ? nextSlide() : prevSlide()); else update();
                delta = 0; start();
            });
        })();

        // Botón subir
        const backToTop = document.getElementById('backToTop');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTop.style.display = 'block';
            } else {
                backToTop.style.display = 'none';
            }
        });
        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        const burger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobileMenu');

        burger.addEventListener('click', () => {
            const open = mobileMenu.classList.toggle('open');
            burger.setAttribute('aria-expanded', open ? 'true' : 'false');
        });

        // Cerrar al clicar fuera
        document.addEventListener('click', (e) => {
            if (!mobileMenu.contains(e.target) && !burger.contains(e.target)) {
                mobileMenu.classList.remove('open');
                burger.setAttribute('aria-expanded', 'false');
            }
        });

        // Mostrar al navegar y ocultar al cargar (reutiliza tu lógica actual)
        const pageLoader = document.getElementById('pageLoader');

        window.addEventListener('load', () => {
            // un pelín más largo para que se disfrute la animación
            setTimeout(() => pageLoader.classList.add('hidden'), 1800);
        });

        document.addEventListener('click', (e) => {
            const a = e.target.closest('a[href]');
            if (!a) return;
            const href = a.getAttribute('href');
            const target = (a.getAttribute('target') || '').toLowerCase();
            const sameTab = !target || target === '_self';
            const anchor = href && href.startsWith('#');
            if (sameTab && !anchor) pageLoader.classList.remove('hidden');
        });

        window.addEventListener('beforeunload', () => {
            pageLoader.classList.remove('hidden');
        });
    </script>


</body>

</html>