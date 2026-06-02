<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        /* ==========================================
   BARRA LATERAL CON SVG (ESTILO UNIVERSIDAD DE LIMA)
   ========================================== */
        .social-sidebar-left {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 45px;
            /* Grosor exacto de la franja */
            background-color: #0046f4;
            /* Naranja institucional */
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            /* Todo hacia abajo */
            align-items: center;
            padding-bottom: 30px;
            gap: 18px;
            /* Separación vertical entre íconos */
            z-index: 99999;
            box-sizing: border-box;
        }

        /* Contenedor del ícono */
        .social-sidebar-left .social-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: auto;
            text-decoration: none;
            transition: transform 0.2s ease;
        }

        /* Control del tamaño y color del SVG */
        .social-sidebar-left .social-icon svg {
            width: 18px;
            /* Tamaño estilizado de los íconos */
            height: 18px;
            fill: #ffffff;
            /* Pintar los vectores de color blanco */
            transition: fill 0.2s ease, opacity 0.2s ease;
            opacity: 0.9;
        }

        /* Animación sutil al poner el cursor encima */
        .social-sidebar-left .social-icon:hover {
            transform: scale(1.15);
            /* Crece ligeramente */
        }

        .social-sidebar-left .social-icon:hover svg {
            opacity: 1;
            /* Brilla al máximo */
        }

        /* ==========================================
   AJUSTE DE MÁRGENES EN TU SITIO
   ========================================== */
        /* Empuja tu contenido hacia la derecha para que la barra fija no cubra nada */
        .main-header,
        .hero-section {
            margin-left: 45px !important;
            width: calc(100% - 45px) !important;
        }

        /* Desaparece en dispositivos móviles para optimizar la navegación */
        @media (max-width: 768px) {
            .social-sidebar-left {
                display: none !important;
            }

            .main-header,
            .hero-section {
                margin-left: 0 !important;
                width: 100% !important;
            }
        }

        /* ==========================================
   NUEVO ESTILO NAVBAR (ESTILO U. DE LIMA)
   ========================================== */
        :root {
            --primary-color: #0046f4;
            --secondary-color: #0c3e54;
            --white: #ffffff;
            --font-main: 'Plus Jakarta Sans', 'Segoe UI', sans-serif;
        }

        /* 1. Cabecera Principal */
        .main-header {
            display: flex !important;
            /* Forzamos flexbox */
            justify-content: space-between;
            align-items: center;
            padding: 0 0 0 2% !important;
            /* IMPORTANTE: 0 padding arriba, abajo y derecha */
            background-color: var(--white);
            font-family: var(--font-main);
            height: 90px !important;
            /* Altura real y total del header */
            box-sizing: border-box;
        }

        .logo-link {
            text-decoration: none;
            color: inherit;
            display: flex;
            align-items: center;
            height: 100%;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo-icon {
            font-size: 3.2rem;
            color: var(--primary-color);
            padding-top: 10px;
        }

        .logo-text {
            display: flex;
            flex-direction: column;
            line-height: 1.1;
        }

        .brand-title {
            font-size: 2.2rem;
            font-weight: 500;
            letter-spacing: 0.5px;
            color: #1a1a1a;
            padding-top: 10px;
        }

        .brand-subtitle {
            font-size: 2.2rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            color: var(--primary-color);
        }

        /* 2. Contenedor Derecho Completo */
        .nav-container-right {
            display: flex;
            align-items: center;
            gap: 40px;
            height: 100% !important;
            /* Forzamos a que mida los 90px del padre */
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 25px;
            height: 100%;
        }

        .nav-menu a {
            text-decoration: none;
            color: #333;
            font-weight: 600;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
            transition: color 0.3s;
        }

        .nav-menu a:hover,
        .nav-menu a.active {
            color: var(--primary-color);
        }

        /* 3. Grupo de Herramientas */
        .nav-tools {
            display: flex;
            align-items: center;
            gap: 30px;
            height: 100% !important;
            /* Mide los 90px */
        }

        .tool-search {
            text-decoration: none;
            color: #1a1a1a;
            font-weight: 700;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .lang-selector {
            font-weight: 700;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            color: #ccc;
            text-decoration: none;
        }

        .lang-active {
            color: #1a1a1a;
        }

        .lang-inactive {
            color: #aaa;
        }

        /* ==========================================
   EL BLOQUE NEGRO QUE SE AJUSTA AL ALTO TOTAL
   ========================================== */
        .menu-block-highlight {
            background-color: #1a1a1a !important;
            height: 100% !important;
            /* Absorbe estrictamente toda la altura */
            display: flex;
            align-items: center;
            /* Centra el texto verticalmente */
            padding: 0 35px !important;
            gap: 15px;
            margin: 0 !important;
            /* Elimina márgenes residuales */
            box-sizing: border-box;
        }

        .menu-block-highlight:hover {
            background-color: #2a2a2a !important;
        }

        .menu-highlight-link {
            color: #ffffff !important;
            text-decoration: none;
            font-weight: 700;
            font-size: 0.85rem;
            letter-spacing: 1px;
        }

        .menu-separator {
            color: rgba(255, 255, 255, 0.4);
            font-size: 0.85rem;
        }

        .user-logged-white {
            color: #ffffff;
            font-weight: 600;
            font-size: 0.85rem;
        }

        /* Icono Hamburguesa */
        .menu-bars-icon {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 22px;
            height: 14px;
            margin-left: 5px;
        }

        .menu-bars-icon span {
            display: block;
            height: 2px;
            width: 100%;
            background-color: #ffffff;
            border-radius: 1px;
        }


        /* ==========================================
   HERO BANNER & SECCIÓN DE ADMISIÓN
   ========================================== */


        /* Contenedor del título (Franja blanca superior del Hero) */
        .hero-title-container {
            background-color: #ffffff;
            /* Alinea el texto con el mismo margen izquierdo del logo (5%) */
            padding: 35px 5% 30px 2%;
            box-sizing: border-box;
            width: 100%;
        }

        /* Estilo exacto del h2 "SOMOS EL CAMBIO, ÚNETE" */
        .hero-title-container h2 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 2rem;
            /* Tamaño de letra imponente */
            font-weight: 750;
            /* Un grosor fuerte sin llegar a verse tosco */
            color: #1a1a1a;
            /* Negro casi puro estilo corporativo */
            letter-spacing: 0.5px;
            /* Ligero espacio entre letras para mejorar lectura */
            margin: 0;
            /* Resetea márgenes por defecto de Bootstrap/Navegador */
            text-transform: uppercase;
            /* Asegura que siempre esté en mayúsculas */
        }



        .hero-section {
            width: 100%;
            height: 900px;
            overflow: hidden;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Contenedor del banner en modo relativo para poder posicionar la caja negra */
        .hero-banner {
            position: relative;
            width: 100%;
            height: 100%;
            /* Puedes ajustar la altura que desees para tu banner */
            background-color: #f4f4f4;
        }

        /* La imagen de fondo se adapta por completo al contenedor */
        .hero-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* ==========================================
   TARJETA NEGRA DE ADMISIÓN SUPERPUESTA
   ========================================== */
        .hero-admission-block {
            position: absolute;
            bottom: 140px;
            /* Despeje desde el borde inferior de la imagen */
            left: 50px;
            /* Despeje desde el borde izquierdo de la imagen */
            background-color: rgba(26, 26, 26, 0.95);
            /* Color negro traslúcido elegante */
            width: 380px;
            /* Ancho de la tarjeta */
            padding: 30px;
            box-sizing: border-box;
            color: #ffffff;
        }

        .admission-content {
            display: flex;
            flex-direction: column;
        }

        /* Texto pequeño superior de cierre de inscripciones */
        .admission-countdown {
            font-size: 0.7rem;
            font-weight: 700;
            color: #0046f4;
            /* Color naranja institucional */
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        /* Título Principal */
        .admission-title {
            font-size: 1.4rem;
            font-weight: 800;
            letter-spacing: 0.5px;
            margin: 0;
            line-height: 1.2;
        }

        /* Fecha Destacada */
        .admission-date {
            font-size: 1.4rem;
            font-weight: 800;
            letter-spacing: 0.5px;
            margin: 2px 0 15px 0;
            line-height: 1.2;
        }

        /* Línea divisoria horizontal gris sutil */
        .admission-divider {
            border: 0;
            height: 1px;
            background-color: rgba(255, 255, 255, 0.2);
            margin: 0 0 20px 0;
        }

        /* Botón Naranja llamativo */
        .btn-admission-hero {
            display: inline-block;
            background-color: #0046f4;
            /* Fondo Naranja */
            color: #ffffff !important;
            text-decoration: none !important;
            font-weight: 700;
            font-size: 0.8rem;
            letter-spacing: 1px;
            text-align: center;
            padding: 12px 24px;
            width: fit-content;
            /* Se adapta al largo del texto */
            transition: background-color 0.3sEase;
        }

        .btn-admission-hero:hover {
            background-color: #e55a2d;
            /* Oscurece un poco al pasar el cursor */
        }








        /* --- ÁREA DE CONTENIDO PRINCIPAL --- */
        .main-content-den {
            flex: 1;
            /* Toma todo el espacio restante a la derecha */
            display: flex;
            justify-content: center;
            padding: 60px 40px;
        }

        .container-den {
            max-width: 1100px;
            width: 100%;
        }

        /* --- SECCIÓN SUPERIOR (DENTAL) --- */
        .dental-section {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            border-top: 1px solid #e0e0e0;
            padding-top: 25px;
            margin-bottom: 70px;
            gap: 40px;
        }

        .dental-title h2 {
            font-size: 1.2rem;
            font-weight: 700;
            font-family: -apple-system, sans-serif;
            color: #111;
            white-space: nowrap;
        }

        .dental-text p {
            font-size: 0.95rem;
            line-height: 1.6;
            color: #444;
            max-width: 580px;
        }

        .dental-image img {
            width: 115px;
            height: 85px;
            object-fit: cover;
            border-radius: 2px;
        }

        /* --- SECCIÓN INFERIOR (CONTENIDO DESTACADO) --- */
        .main-feature-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 60px;
        }

        .feature-content {
            flex: 1;
            max-width: 480px;
        }

        .feature-content h1 {
            font-family: Georgia, serif;
            font-size: 2.8rem;
            font-weight: 400;
            line-height: 1.15;
            margin-bottom: 25px;
            color: #111;
        }

        .feature-description {
            font-size: 1rem;
            line-height: 1.65;
            color: #333;
            margin-bottom: 35px;
        }

        /* Enlace/Botón con flecha circular */
        .btn-link {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            color: #111;
            font-weight: 600;
            font-size: 0.95rem;
            font-family: -apple-system, sans-serif;
            transition: opacity 0.2s;
        }

        .btn-link:hover {
            opacity: 0.7;
        }

        .icon-arrow {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #111;
            color: #fff;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            font-size: 1rem;
        }

        /* Bloque Multimedia derecho */
        .feature-video-thumbnail {
            flex: 1;
            position: relative;
            max-width: 580px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        .feature-video-thumbnail img {
            width: 100%;
            display: block;
            object-fit: cover;
        }

        /* Overlay encima del video */
        .video-overlay {
            position: absolute;
            bottom: 25px;
            left: 25px;
            display: flex;
            align-items: center;
            gap: 15px;
            color: #fff;
            font-family: Georgia, serif;
            font-size: 1.2rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
        }

        .play-button {
            background-color: #a51c30;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: transform 0.2s, background-color 0.2s;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .play-button:hover {
            transform: scale(1.1);
            background-color: #b8253b;
        }


        /* --- SECCIÓN HERO CELEBRACIÓN (DEGRADADO AZUL) --- */
        .hero-celebration-section {
            position: relative;
            width: 100%;
            height: 800px;
            /* Altura fija similar a la imagen */
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin-top: 60px;
            border-radius: 4px;
        }

        /* Imagen que cubre todo el fondo */
        .hero-bg-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
        }

        /* Capa de degradado azul de abajo hacia arriba (Estilo image_4e7c41.jpg) */
        .hero-overlay-blue {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* Degradado que va desde un azul marino profundo con opacidad abajo, hasta transparente arriba */
            background: linear-gradient(to top, rgba(0, 32, 96, 0.95) 0%, rgba(0, 51, 153, 0.6) 50%, rgba(0, 0, 0, 0.1) 100%);
            z-index: 2;
        }

        /* Bloque de contenido por encima del fondo y el degradado */
        .hero-content {
            position: relative;
            z-index: 3;
            color: #ffffff;
            padding: 0 20px;
            max-width: 850px;
        }

        /* Título Serif elegante */
        .hero-main-title {
            font-family: Georgia, serif;
            font-size: 4.2rem;
            font-weight: 400;
            line-height: 1.1;
            margin-bottom: 35px;
            letter-spacing: -1px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        /* Enlace interno con botón blanco */
        .btn-hero-link {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            color: #ffffff;
            font-weight: 700;
            font-size: 1rem;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            transition: opacity 0.2s;
        }

        .btn-hero-link:hover {
            opacity: 0.85;
        }

        /* Círculo blanco con la flecha */
        .icon-circle-arrow {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ffffff;
            color: #002060;
            /* Color del texto interno igual al azul del fondo */
            width: 36px;
            height: 36px;
            border-radius: 50%;
            font-size: 1rem;
            font-weight: bold;
        }


        .research-list-section {
            display: flex;
            flex-direction: column;
            width: 100%;
            max-width: 1000px;
            margin: 50px auto;
        }

        .research-row {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            border-top: 1px solid #ccc;
            padding: 25px 0;
            gap: 40px;
        }

        .research-list-section .research-row:last-child {
            border-bottom: 1px solid #ccc;
        }

        .research-title {
            flex: 0 0 280px;
        }

        .research-title h3 {
            font-family: sans-serif;
            font-size: 1.25rem;
            font-weight: 700;
            color: #111;
            line-height: 1.3;
        }

        .research-description {
            flex: 1;
            max-width: 600px;
        }

        .research-description p {
            font-family: sans-serif;
            font-size: 0.95rem;
            line-height: 1.6;
            color: #333;
        }

        .research-image img {
            width: 115px;
            height: 85px;
            object-fit: cover;
            border-radius: 2px;
            display: block;
        }


        .logo-principal {
            widows: 100px;
            height: 90px;
        }



        /* Estilos generales del contenedor */
        .footer-u-lima {
            background-color: #f4f4f4;
            padding: 40px 20px;
            font-family: Arial, sans-serif;
            color: #333;
        }

        .footer-container {
            display: flex;
            gap: 60px;
            max-width: 1200px;
            margin: 0 auto;
            align-items: flex-start;
        }

        /* Columna Izquierda */
        .footer-left {
            flex: 1;
            min-width: 300px;
        }

        .logo {
            max-width: 250px;
            margin-bottom: 20px;
        }

        address {
            font-style: normal;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .footer-links {
            margin-bottom: 20px;
        }

        .footer-links img {
            margin-bottom: 20px;
        }

        .footer-links a {
            display: block;
            color: #d32f2f;
            text-decoration: none;
            font-weight: 600;
            margin-bottom: 8px;
        }

        /* Columna Derecha */
        .footer-right {
            flex: 2;
        }

        .section h3 {
            font-size: 12px;
            color: #555;
            margin-bottom: 15px;
            letter-spacing: 0.5px;
        }

        /* Grilla de Logos */
        .logos-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 30px;
        }

        .logo-placeholder {
            width: 120px;
            /* Ajusta según el tamaño de tus imágenes */
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo-placeholder img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        hr {
            border: 0;
            border-top: 1px solid #ccc;
            margin: 20px 0;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .footer-container {
                flex-direction: column;
                gap: 30px;
            }
        }
    </style>

</head>

<body>
    <div id="app">
        <div class="social-sidebar-left">
            <a href="#" class="social-icon" target="_blank" title="WhatsApp">
                <svg viewBox="0 0 24 24">
                    <path
                        d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.513 2.266 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.503-5.713-1.458L0 24zm6.59-4.846c1.6.95 3.188 1.449 4.825 1.451 5.436 0 9.86-4.37 9.864-9.799.002-2.623-1.023-5.088-2.885-6.948-1.862-1.86-4.334-2.884-6.959-2.885-5.437 0-9.861 4.372-9.865 9.804-.001 1.742.484 3.442 1.403 4.949l-.98 3.575 3.676-.952zm11.213-4.72c-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.668.149-.198.299-.767.967-.94 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                </svg>
            </a>

            <a href="#" class="social-icon" target="_blank" title="Facebook">
                <svg viewBox="0 0 24 24">
                    <path
                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.879V14.89h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.989C18.343 21.129 22 16.99 22 12z" />
                </svg>
            </a>

            <a href="#" class="social-icon" target="_blank" title="Twitter / X">
                <svg viewBox="0 0 24 24">
                    <path
                        d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                </svg>
            </a>

            <a href="#" class="social-icon" target="_blank" title="YouTube">
                <svg viewBox="0 0 24 24">
                    <path
                        d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                </svg>
            </a>

            <a href="#" class="social-icon" target="_blank" title="LinkedIn">
                <svg viewBox="0 0 24 24">
                    <path
                        d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                </svg>
            </a>

            <a href="#" class="social-icon" target="_blank" title="Instagram">
                <svg viewBox="0 0 24 24">
                    <path
                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z" />
                </svg>
            </a>

            <a href="#" class="social-icon" target="_blank" title="Podcast">
                <svg viewBox="0 0 24 24">
                    <path
                        d="M12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm0-10C7.58 4 4 7.58 4 12c0 2.21.9 4.21 2.34 5.66l1.42-1.42C6.71 15.19 6 13.68 6 12c0-3.31 2.69-6 6-6s6 2.69 6 6c0 1.68-.71 3.19-1.76 4.24l1.42 1.42C23.1 16.21 24 14.21 24 12c0-4.42-3.58-8-8-8zm0-4C5.37 0 0 5.37 0 12c0 3.31 1.35 6.31 3.54 8.46l1.42-1.42C3.14 17.22 2 14.74 2 12c0-5.52 4.48-10 10-10s10 4.48 10 10c0 2.74-1.14 5.22-2.96 7.04l1.42 1.42C22.65 18.31 24 15.31 24 12c0-6.63-5.37-12-12-12z" />
                </svg>
            </a>
        </div>
        <nav class="main-header">
            <a class="logo-link" href="{{ url('/') }}">
                <div class="logo-container">
                    <span class="logo-icon">
                        <img class="logo-principal" src="{{ asset('image.png') }}" alt="">
                    </span>
                    <div class="logo-text">
                        <span class="brand-title">GE</span>
                        <span class="brand-subtitle">DUCATO</span>
                    </div>
                </div>
            </a>

            <div class="nav-container-right">
                <div class="nav-menu">


                    @auth
                        @if (auth()->user()->email === 'olartemelohans224@gmail.com')
                            <a href="{{ route('alumno') }}">ALUMNOS</a>
                            <a href="{{ route('docente') }}">DOCENTES</a>
                            <a href="{{ route('curso') }}">CURSOS</a>
                            <a href="{{ route('horario') }}">HORARIOS</a>
                            <a href="{{ route('matricula') }}">MATRICULA</a>
                        @elseif(str_ends_with(auth()->user()->email, '@docente.pe'))
                            <a href="/calificaciones">Subir Notas</a>
                        @else
                            <a href="#">CARRERAS</a>
                            <a href="#">NOSOTROS</a>
                        @endif
                    @else
                        {{-- Opciones para cuando el usuario es invitado --}}
                        <a href="#" class="active">INICIO</a>
                        <a href="#">CARRERAS</a>
                        <a href="#">NOSOTROS</a>
                    @endauth
                </div>

                <div class="nav-tools">

                    <div class="menu-block-highlight">
                        @guest
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}" class="menu-highlight-link">{{ __('ADMISIÓN') }}</a>
                            @endif

                            <span class="menu-separator">|</span>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="menu-highlight-link">{{ __('REGISTRO') }}</a>
                            @endif
                        @else
                            <span class="user-logged-white">{{ Auth::user()->name }}</span>
                            <span class="menu-separator">|</span>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="menu-highlight-link">
                                {{ __('SALIR') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endguest

                    </div>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>


        <footer class="footer-u-lima">
            <div class="footer-container">
                <div class="footer-left">
                    <img src="{{ asset('i1.png') }}" alt="Universidad de Lima" class="logo">
                    <address>
                        Avenida Javier Prado Este 4600<br>
                        Urbanización Fundo Monterrico Chico<br>
                        Distrito de Santiago de Surco<br>
                        Provincia y departamento de Lima<br>
                        Código postal 15023<br>
                        Teléfono: (511) 4376767
                    </address>
                    <div class="footer-links">
                        <img height="90px" src="{{ asset('image002.png') }}" alt="">
                        <a href="#">Política de Protección de Datos</a>
                        <a href="#">Mesa de partes</a>
                    </div>
                    <p class="copyright">&copy; DEDUCATO, 2026. Todos los derechos reservados.</p>
                </div>

                <div class="footer-right">
                    <div class="section">
                        <h3>GEDUCATO ES MIEMBRO DE</h3>
                        <div class="logos-grid">
                            <div class="logo-placeholder"><img src="{{ asset('l1.webp') }}" alt=""></div>
                            <div class="logo-placeholder"><img src="{{ asset('l2.webp') }}" alt=""></div>
                            <div class="logo-placeholder"><img src="{{ asset('l3.webp') }}" alt=""></div>
                            <div class="logo-placeholder"><img src="{{ asset('l4.webp') }}" alt=""></div>
                            <div class="logo-placeholder"><img src="{{ asset('l5.webp') }}" alt=""></div>

                        </div>
                    </div>
                    <hr>
                    <div class="section">
                        <h3>GEDUCATO ESTÁ AFILIADA A</h3>
                        <div class="logos-grid">
                            <div class="logo-placeholder"><img src="{{ asset('l6.webp') }}" alt=""></div>
                            <div class="logo-placeholder"><img src="{{ asset('l7.webp') }}" alt=""></div>
                            <div class="logo-placeholder"><img src="{{ asset('l8.webp') }}" alt=""></div>
                            <div class="logo-placeholder"><img src="{{ asset('l9.webp') }}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
