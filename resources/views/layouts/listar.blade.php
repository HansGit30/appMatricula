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
            font-size: 1.2rem;
            color: var(--primary-color);
            padding-top: 10px;
        }

        .logo-icon img {
            width: 90px;
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


        .students-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 40px;
            padding: 60px;
        }

        .student-card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            border: 1px solid #eee;
        }

        .card-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .student-avatar {
            width: 50px;
            height: 50px;
            background: blue;
            /* Color institucional */
            color: white;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .status-badge {
            margin-left: auto;
            font-size: 0.75rem;
            padding: 4px 8px;
            border-radius: 6px;
            background: #e0f2f1;
            color: #00796b;
        }

        .card-body p {
            margin: 8px 0;
            color: #555;
            font-size: 0.9rem;
        }

        .card-footer {
            margin-top: 20px;
            display: flex;
            gap: 10px;
        }

        button {
            padding: 8px 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
        }

        .btn-actii {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btn-details {
            background: #f0f0f0;
        }

        .btn-acti {
            background: #ffc107;
            width: 120px;
        }

        .btn-action {
            background: #ffc107;
        }

        .btn-action a {

            text-decoration: none;
            color: black;
        }

        .btn-acti a {

            margin-top: 20px;

            text-decoration: none;
            color: black;
        }


        h1 {
            font-size: 70px;

        }



        /* Centrado del contenedor */
        .form-container {
            max-width: 600px;
            margin: 40px auto;
            padding: 30px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        /* Grid para organizar los inputs */
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .full-width {
            grid-column: span 2;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 0.9rem;
            margin-bottom: 5px;
            color: #555;
            font-weight: 600;
        }

        input,
        select {
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        input:focus {
            border-color: #004a99;
            outline: none;
        }

        /* Botón estilo moderno */
        .submit-btn {
            width: 100%;
            padding: 15px;
            margin-top: 20px;
            background-color: #004a99;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }

        .submit-btn:hover {
            background-color: #003366;
        }

        /* Responsivo para móviles */
        @media (max-width: 600px) {
            .form-grid {
                grid-template-columns: 1fr;
            }

            .full-width {
                grid-column: span 1;
            }
        }

        .hed {
            margin-top: 100px;
            width: 100%;
            height: 150px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px 70px;
        }

        .hed h1 {
            background-color: white;
        }

        .hed button {
            background-color: blue;
        }

        .hed button a {
            text-decoration: none;
            color: white;
        }

        /* Estilo para el botón de retroceso */
        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            color: #666;
            text-decoration: none;
            font-weight: 500;
        }

        .back-link:hover {
            color: #004a99;
        }

        /* El resto de estilos (form-container, form-grid, submit-btn)
   son los mismos que definimos en el paso anterior. */
    </style>

</head>

<body>
    <div id="app">
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
                        {{-- Definimos la lista de correos autorizados como administradores --}}
                        @php
                            $admins = [
                                'olartemelohans224@gmail.com',
                                'aguirreantoni172@gmail.com',
                                'derekgalarzasilva@gmail.com',
                            ];
                        @endphp

                        @if (in_array(auth()->user()->email, $admins))
                            {{-- Menú de Administrador --}}
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
    </div>
</body>

</html>
