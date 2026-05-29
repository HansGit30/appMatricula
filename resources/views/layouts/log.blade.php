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
          --primary-color: #ff6f43;    
          --secondary-color: #0c3e54;  
          --text-dark: #2d3748;
          --text-muted: #718096;
          --bg-light: #f3f7f9;
          --white: #ffffff;
          --font-main: 'Plus Jakarta Sans', 'Segoe UI', sans-serif;
        }
    
        /* Anulamos contenedores ruidosos de bootstrap solo en esta sección */
        .login-wrapper {
          font-family: var(--font-main);
          min-height: 75vh;
          display: flex;
          align-items: center;
          justify-content: center;
          padding: 20px;
        }
    
        .login-container {
          background-color: var(--white);
          width: 100%;
          max-width: 450px;
          padding: 40px 35px;
          border-radius: 12px;
          box-shadow: 0 10px 30px rgba(12, 62, 84, 0.08);
        }
    
        .login-header {
          text-align: center;
          margin-bottom: 30px;
        }
    
        .login-header .logo {
          font-size: 1.8rem;
          color: var(--secondary-color);
          letter-spacing: 0.5px;
          margin-bottom: 8px;
          display: inline-block;
        }
    
        .login-header .logo b {
          color: var(--primary-color);
        }
    
        .login-header h2 {
          font-size: 1.4rem;
          color: var(--secondary-color);
          font-weight: 700;
        }
    
        .login-header p {
          color: var(--text-muted);
          font-size: 0.9rem;
          margin-top: 4px;
        }
    
        .social-auth {
          display: flex;
          flex-direction: column;
          gap: 12px;
          margin-bottom: 24px;
        }
    
        .btn-social {
          display: flex;
          align-items: center;
          justify-content: center;
          gap: 10px;
          width: 100%;
          padding: 12px;
          border: 1px solid #e2e8f0;
          border-radius: 6px;
          font-weight: 600;
          font-size: 0.95rem;
          cursor: pointer;
          text-decoration: none;
          transition: background-color 0.3s, border-color 0.3s;
        }
    
        .btn-social.google {
          background-color: var(--white);
          color: #333333;
        }
    
        .btn-social.google:hover {
          background-color: #f8fafc;
          border-color: #cbd5e1;
        }
    
        .divider {
          display: flex;
          align-items: center;
          text-align: center;
          color: var(--text-muted);
          font-size: 0.85rem;
          margin-bottom: 24px;
        }
    
        .divider::before, .divider::after {
          content: '';
          flex: 1;
          border-bottom: 1px solid #e2e8f0;
        }
    
        .divider:not(:empty)::before { margin-right: .75em; }
        .divider:not(:empty)::after { margin-left: .75em; }
    
        .form-group {
          margin-bottom: 20px;
        }
    
        .form-label {
          display: block;
          font-size: 0.88rem;
          font-weight: 600;
          color: var(--secondary-color);
          margin-bottom: 6px;
          text-align: left;
        }
    
        .form-input {
          width: 100%;
          padding: 12px 16px;
          font-family: var(--font-main);
          font-size: 0.95rem;
          border: 1px solid #cbd5e1;
          border-radius: 6px;
          color: var(--text-dark);
          transition: border-color 0.3s, box-shadow 0.3s;
        }
    
        .form-input:focus {
          outline: none;
          border-color: var(--primary-color);
          box-shadow: 0 0 0 3px rgba(255, 111, 67, 0.15);
        }
    
        .form-input.is-invalid {
          border-color: #ea4335;
        }
    
        .error-message {
          color: #ea4335;
          font-size: 0.8rem;
          margin-top: 5px;
          text-align: left;
          display: block;
        }
    
        .form-options {
          display: flex;
          justify-content: space-between;
          align-items: center;
          font-size: 0.85rem;
          margin-bottom: 24px;
        }
    
        .remember-me {
          display: flex;
          align-items: center;
          gap: 6px;
          cursor: pointer;
          color: var(--text-muted);
        }
    
        .remember-me input {
          accent-color: var(--primary-color);
        }
    
        .forgot-password {
          color: var(--primary-color);
          text-decoration: none;
          font-weight: 500;
        }
    
        .forgot-password:hover {
          text-decoration: underline;
        }
    
        .btn-login {
          width: 100%;
          background-color: var(--secondary-color);
          color: var(--white);
          border: none;
          padding: 14px;
          font-size: 1rem;
          font-weight: 600;
          border-radius: 6px;
          cursor: pointer;
          transition: background-color 0.3s;
        }
    
        .btn-login:hover {
          background-color: #134e69;
        }
      </style>

</head>
<body>
    <div id="app">


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
