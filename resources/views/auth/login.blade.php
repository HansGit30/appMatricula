@extends('layouts.log')

@section('content')
<div class="login-wrapper">
    <div class="login-container">
        <div class="login-header">
          <div class="logo">🎓 GE<b>DUCATO</b></div>
          <h2>¡Bienvenido de nuevo!</h2>
          <p>Ingresa tus credenciales para acceder al sistema</p>
        </div>
        <a class="navbar-brand" href="{{ url('/') }}">
            <div class="logo">
                <span class="logo-icon">🎓</span> <span>GE<b>DUCATO</b></span>
            </div>
            <!--{{ config('app.name', 'Laravel') }}-->
        </a>
    
        <div class="social-auth">
          <a href="{{ url('/login/google') }}" class="btn-social google">
            <svg viewBox="0 0 24 24" width="18" height="18" xmlns="http://www.w3.org/2000/svg">
              <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
              <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
              <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z" fill="#FBBC05"/>
              <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
            </svg>
            Continuar con Google
          </a>
        </div>
    
        <div class="divider">o inicia sesión con correo</div>
    
        <form method="POST" action="{{ route('login') }}">
          @csrf
          
          <div class="form-group">
            <label for="email" class="form-label">{{ __('Email Address') }}</label>
            <input id="email" type="email" class="form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="ejemplo@correo.com" required autocomplete="email" autofocus>
            
            @error('email')
              <span class="error-message" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
    
          <div class="form-group">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-input @error('password') is-invalid @enderror" name="password" placeholder="••••••••" required autocomplete="current-password">
            
            @error('password')
              <span class="error-message" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
    
          <div class="form-options">
            <label class="remember-me" for="remember">
              <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <span>{{ __('Remember Me') }}</span>
            </label>
            
            @if (Route::has('password.request'))
              <a class="forgot-password" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
              </a>
            @endif
          </div>
    
          <button type="submit" class="btn-login">
            {{ __('Login') }}
          </button>
        </form>
    </div>
</div>


@endsection
