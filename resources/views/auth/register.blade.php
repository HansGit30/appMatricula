@extends('layouts.app')

@section('content')
<div class="auth-container">
    <form method="POST" action="{{ route('register') }}" class="auth-card">
        @csrf
        <h2>Crear Cuenta</h2>
        <p class="subtitle">Ingresa tus datos para registrarte</p>

        <div class="field">
            <label for="name">Nombre Completo</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus placeholder="Ej: Juan Perez">
        </div>

        <div class="field">
            <label for="email">Correo Electrónico</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required placeholder="ejemplo@correo.com">
        </div>

        <div class="field">
            <label for="password">Contraseña</label>
            <input id="password" type="password" name="password" required placeholder="••••••••">
        </div>

        <div class="field">
            <label for="password-confirm">Confirmar Contraseña</label>
            <input id="password-confirm" type="password" name="password_confirmation" required placeholder="••••••••">
        </div>

        <button type="submit" class="auth-btn">Registrarse</button>
    </form>
</div>
@endsection
