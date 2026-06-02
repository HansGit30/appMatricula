@extends('layouts.listar')

@section('content')

<div class="form-container">
    <a href="{{ route('alumno') }}" class="back-link">&larr; Volver atrás</a>
    
    <form action="{{ route('alumno.store') }}" method="POST">
        @csrf
        <h2>Registrar Alumno</h2>

        <div class="form-grid">
            <div class="form-group">
                <label for="first_name">Nombres:</label>
                <input type="text" id="first_name" name="first_name" required placeholder="Ej: Juan">
            </div>

            <div class="form-group">
                <label for="last_name">Apellidos:</label>
                <input type="text" id="last_name" name="last_name" required placeholder="Ej: Perez">
            </div>

            <div class="form-group">
                <label for="date_of_birth">Fecha de Nacimiento:</label>
                <input type="date" id="date_of_birth" name="date_of_birth" required>
            </div>

            <div class="form-group">
                <label for="dni">DNI / Identificación:</label>
                <input type="text" id="dni" name="dni" required placeholder="Ej: 12345678">
            </div>

            <div class="form-group full-width">
                <label for="address">Dirección:</label>
                <input type="text" id="address" name="address" placeholder="Av. Ejemplo 123">
            </div>

            <div class="form-group">
                <label for="phone_number">Teléfono:</label>
                <input type="tel" id="phone_number" name="phone_number" placeholder="999 999 999">
            </div>

            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required placeholder="correo@ejemplo.com">
            </div>

            <div class="form-group full-width">
                <label for="enrollment_status">Estado de Matrícula:</label>
                <select id="enrollment_status" name="enrollment_status" required>
                    <option value="enrolled">Enrolled (Matriculado)</option>
                    <option value="pending">Pending (Pendiente)</option>
                    <option value="inactive">Inactive (Inactivo)</option>
                </select>
            </div>
        </div>

        <button type="submit" class="submit-btn">Guardar Alumno</button>
    </form>
</div>  
@endsection
