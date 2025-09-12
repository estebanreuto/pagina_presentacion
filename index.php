<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Inicio | VERTIX TECNOLOGY S.A.S.</title>
    <link rel="icon" href="./ico_redondo.png" type="image/png" sizes="128x128">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root {
            /* Colores derivados del logo (azul → verde → amarillo) */
            --c-blue: #2E86FF;
            --c-green: #1FCAA0;
            --c-yellow: #F5B200;
            --c-dark: #0F172A;
            /* slate */
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
            line-height: 1.4;
        }

        .topbar {
            position: sticky;
            /* se queda pegada al hacer scroll */
            top: 8px;
            /* separación del borde superior */
            z-index: 1000;
            /* por encima del resto */
            padding: 10px 18px;
            display: flex;
            align-items: center;
            gap: 14px;
            max-width: 1200px;
            margin: 20px auto 0;
            border-radius: 999px;
            background: rgba(255, 255, 255, .88);
            /* un toque translúcido */
            -webkit-backdrop-filter: saturate(120%) blur(8px);
            backdrop-filter: saturate(120%) blur(8px);
            /* glassy */
            box-shadow: var(--shadow);
            border: 1px solid #eef1f6;
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
            /* que se ajuste sin deformarse */
            display: block;
            border-radius: 0;
            /* dejamos la forma natural del PNG */
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

        /* Botón base (animación automática del gradiente en texto y borde) */
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

        /* Variante sólida (ya animada) */
        .btn.solid {
            color: #0f172a;
            background: var(--grad);
            background-size: 200% 200%;
            border: none;
            animation: gradientMove 6s linear infinite;
            box-shadow: 0 6px 18px rgba(31, 202, 160, .25);
        }

        /* Página actual (Inicio): relleno sólido animado */
        .btn.current {
            color: #0f172a;
            -webkit-background-clip: initial;
            background-clip: initial;
            border: none;
            background: var(--grad);
            background-size: 200% 200%;
            animation: gradientMove 6s linear infinite;
            box-shadow: 0 6px 18px rgba(46, 134, 255, .20);
        }

        .btn.current::before {
            display: none;
        }

        /* sin borde doble */

        /* Accesibilidad: si el usuario prefiere menos movimiento */
        @media (prefers-reduced-motion: reduce) {

            .btn,
            .btn::before,
            .btn.solid,
            .btn.current {
                animation: none !important;
            }
        }

        .hero {
            max-width: 95%;
            /* en vez de 1200px, casi todo el ancho */
            margin: 24px auto;
            /* sigue centrado */
            display: grid;
            grid-template-columns: 1.3fr 0.7fr;
            /* ajusta proporción principal/lateral */
            gap: 24px;
        }

        .panel {
            background: #ffffff;
            border: 1px solid #eef1f6;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 32px;
            position: relative;
            width: 100%;
            /* se estira al ancho disponible */
        }

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
            color: var(--c-dark);
        }

        .divider {
            height: 4px;
            width: 120px;
            border-radius: 4px;
            background: var(--grad);
            margin: 12px 0 16px
        }

        .lead {
            color: #374151;
            font-size: 14px
        }

        .pillbar {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 18px
        }

        .pill {
            padding: 10px 14px;
            border-radius: 999px;
            border: 1px solid #e6e9f2;
            background: #fff;
            box-shadow: var(--shadow);
            font-weight: 600
        }

        .pill .dot {
            display: inline-block;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: var(--c-green);
            margin-right: 8px
        }

        /* Tarjetas de servicios con estilo "pastilla" */
        .services {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
            margin-top: 18px
        }

        .card {
            background: #fff;
            border: 1px solid #eef1f6;
            border-radius: 18px;
            box-shadow: var(--shadow);
            padding: 16px;
            text-align: center;
            font-weight: 600;
            color: #111;
            position: relative;
        }

        .card:after {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 18px;
            padding: 2px;
            background: var(--grad);
            opacity: .6;
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            pointer-events: none
        }

        .card small {
            display: block;
            color: var(--c-muted);
            font-weight: 500;
            margin-top: 6px
        }

        /* Banda lateral (derecha) con bloques informativos */
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

        .sidecard h4 {
            margin: 0 0 8px;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: .12em;
            color: var(--c-muted)
        }

        .sidecard .big {
            font-size: 22px;
            font-weight: 800;
        }

        footer {
            max-width: 1200px;
            margin: 28px auto 60px;
            padding: 20px;
            border-radius: 18px;
            border: 1px solid #eef1f6;
            box-shadow: var(--shadow);
            text-align: center;
        }

        /* Responsivo */
        @media (max-width: 980px) {
            .hero {
                grid-template-columns: 1fr
            }

            .services {
                grid-template-columns: repeat(2, 1fr)
            }
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

        /* === Animaciones de gradiente === */
        @keyframes gradientMove {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Para usuarios que prefieren menos movimiento */
        @media (prefers-reduced-motion: reduce) {

            .anim-grad,
            .btn,
            .btn::before,
            .btn.solid,
            .grad-anim {
                animation: none !important;
            }
        }

        /* Clase utilitaria para aplicar animación a cualquier fondo con gradiente */
        .anim-grad {
            background: var(--grad);
            background-size: 200% 200%;
            animation: gradientMove 6s ease-in-out infinite;
        }

        /* ====== BOTONES DE NAVEGACIÓN ====== */
        .btn {
            /* lo que ya tienes… */
            position: relative;
            background: var(--grad);
            background-size: 200% 200%;
            /* importante para animación */
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: gradientMove 8s ease-in-out infinite;
        }

        .btn::before {
            /* borde gradiente animado */
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

        /* Variante sólida: píldora rellena con gradiente animado */
        .btn.solid {
            color: #0f172a;
            background: var(--grad);
            background-size: 200% 200%;
            border: none;
            animation: gradientMove 6s linear infinite;
            box-shadow: 0 6px 18px rgba(31, 202, 160, .25);
        }

        /* Pequeño ‘pulse’ al pasar el mouse */
        .btn.solid:hover {
            animation-duration: 3s;
        }

        /* ====== DIVISOR Y BARRAS CON GRADIENTE ====== */
        .divider,
        .grad-anim {
            background: var(--grad);
            background-size: 250% 250%;
            animation: gradientMove 10s ease-in-out infinite;
            border: none;
            box-shadow: 0 1px 0 rgba(0, 0, 0, .04) inset;
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

        /* Todos los botones (texto degradado + borde animado por defecto) */
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

        /* Todos los botones (texto degradado + borde animado por defecto) */
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

        /* ===== Carrusel ===== */
        .carousel-wrap {
            max-width: 95%;
            margin: 20px auto 0;
        }

        .carousel {
            position: relative;
            background: #fff;
            border: 1px solid #eef1f6;
            border-radius: 16px;
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .carousel-track {
            display: flex;
            transition: transform .6s cubic-bezier(.22, .61, .36, 1);
        }

        .carousel-slide {
            min-width: 100%;
            height: 360px;
            /* alto desktop */
            position: relative;
        }

        .carousel-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* Flechas */
        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 5;
            border: none;
            cursor: pointer;
            padding: 10px 14px;
            border-radius: 12px;
            font-weight: 700;
            background: var(--grad);
            background-size: 200% 200%;
            color: #0f172a;
            box-shadow: 0 6px 16px rgba(31, 202, 160, .22);
            animation: gradientMove 6s linear infinite;
            opacity: .95;
        }

        .carousel-btn.prev {
            left: 14px;
        }

        .carousel-btn.next {
            right: 14px;
        }

        /* Dots */
        .carousel-dots {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: 12px;
            display: flex;
            gap: 8px;
            z-index: 6;
        }

        .carousel-dot {
            width: 10px;
            height: 10px;
            border-radius: 999px;
            cursor: pointer;
            border: 1px solid #cfd8e3;
            background: #fff;
            opacity: .9;
        }

        .carousel-dot.active {
            background: var(--grad);
            background-size: 200% 200%;
            animation: gradientMove 8s ease-in-out infinite;
            border: none;
            width: 12px;
            height: 12px;
        }

        /* Caption opcional */
        .carousel-caption {
            position: absolute;
            left: 18px;
            bottom: 18px;
            background: rgba(255, 255, 255, .85);
            border: 1px solid #eef1f6;
            border-radius: 12px;
            padding: 8px 12px;
            font-weight: 600;
            color: #0f172a;
            box-shadow: var(--shadow);
        }

        /* Responsive */
        @media (max-width:980px) {
            .carousel-slide {
                height: 260px;
            }
        }

        @media (max-width:540px) {
            .carousel-wrap {
                margin: 12px auto 0;
            }

            .carousel-slide {
                height: 200px;
            }

            .carousel-btn {
                padding: 8px 12px;
            }
        }

        .carousel-wrap {
            max-width: 95%;
            /* antes 95% */
            margin: 20px auto 0;
            /* centrado */
        }

        .carousel {
            border-radius: 14px;
            /* opcional: un poquito menos redondeado si lo quieres más cuadrado */
        }

        .carousel-slide {
            height: 400px;
            /* un poquito más alto para equilibrio visual */
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
    <!-- Barra superior -->
    <div class="topbar">
        <div class="logo"><img src="./logo_vertix_sin_fondo.png" alt="Logo" /></div>
        <div class="brand">
            VERTIX TECNOLOGY
            <div class="slogan">El Punto más Alto en Desarrollo y Tecnología</div>
        </div>
        <div class="cta">
            <button style="color: white;" class="btn current" aria-current="page">Inicio</button>
            <a href="conocenos.php" class="btn">Conócenos</a>
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

    <!-- Carrusel -->
    <div class="carousel-wrap">
        <div class="carousel" id="carousel-main" aria-label="Galería destacada">
            <div class="carousel-track">
                <!-- Cambia las rutas a tus imágenes -->
                <div class="carousel-slide">
                    <img src="./carrusel_presentacion.jpg" alt="Proyecto cloud & DevOps" />
                    <div class="carousel-caption">Cloud & DevOps • Azure / AWS</div>
                </div>
                <div class="carousel-slide">
                    <img src="./carrusel_presentacion.jpg" alt="Automatizaciones RPA" />
                    <div class="carousel-caption">Automatización • Power Automate / Copilot</div>
                </div>
                <div class="carousel-slide">
                    <img src="./carrusel_presentacion.jpg" alt="Ciberseguridad y hardening" />
                    <div class="carousel-caption">Ciberseguridad • EndPoint & Hardening</div>
                </div>
            </div>

            <button class="carousel-btn prev" aria-label="Anterior">‹</button>
            <button class="carousel-btn next" aria-label="Siguiente">›</button>
            <div class="carousel-dots" role="tablist"></div>
        </div>
    </div>


    <!-- Sección principal estilo afiche blanco con acentos del logo -->
    <section class="hero">
        <div class="panel">
            <div class="badge">Servicios y Asesorías</div>
            <h1 class="title">Soluciones Tecnológicas que Impulsan tu Negocio</h1>
            <div class="divider"></div>
            <p class="lead">Implementamos, integramos y aseguramos tu stack digital: desde la nube y el desarrollo a
                medida, hasta automatización y ciberseguridad. Todo con enfoque práctico y rápido retorno.</p>

            <div class="pillbar" aria-label="etiquetas">
                <div class="pill"><span class="dot"></span> Transformación Digital</div>
                <div class="pill"><span class="dot" style="background:var(--c-blue)"></span> Automatización (RPA / Power
                    Automate)</div>
                <div class="pill"><span class="dot" style="background:var(--c-yellow)"></span> Ciberseguridad y SST
                    Digital</div>
            </div>

            <div class="services" style="margin-top:22px">
                <div class="card">💻 Desarrollo Web & Apps <small>React · Python · .NET</small></div>
                <div class="card">☁️ Cloud & DevOps <small>Azure · AWS · CI/CD</small></div>
                <div class="card">🔒 Ciberseguridad <small>EndPoint · Hardening · DLP</small></div>
                <div class="card">🤖 Automatización <small>Power Automate · Copilot</small></div>
                <div class="card">📊 Datos & Dashboards <small>Power BI · KPI</small></div>
                <div class="card">🛠️ Soporte & Helpdesk <small>On‑site y remoto</small></div>
                <div class="card">📚 Capacitaciones <small>Usuarios y equipos</small></div>
                <div class="card">🧩 Integraciones <small>APIs · ERP · CRM</small></div>
            </div>
        </div>

        <!-- Columna lateral con bloques informativos -->
        <aside class="sidebar">
            <div class="sidecard">
                <h4>Agenda una llamada</h4>
                <div class="big">30 min sin costo</div>
                <p class="lead" style="font-size:14px">Explora tu caso y recibe un plan de acción.</p>
                <button class="btn solid grad-anim" style="margin-top:8px;width:100%">Reservar ahora</button>
            </div>
            <div class="sidecard">
                <h4>Tiempo de implementación</h4>
                <div class="big">1–4 semanas</div>
                <p class="lead" style="font-size:14px">Proyectos cerrados con entregables quincenales.</p>
            </div>
            <div class="sidecard">
                <h4>Soporte</h4>
                <div class="big">SLA 8x5</div>
                <p class="lead" style="font-size:14px">Escalamiento 24/7 para incidentes críticos.</p>
            </div>
        </aside>
    </section>

    <footer>
        © 2025 · Tu Empresa · contacto@tuempresa.com · +57 300 000 0000
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
            function start() { timer = setInterval(nextSlide, 8000); } // 5s
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