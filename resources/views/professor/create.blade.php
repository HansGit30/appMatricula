@extends('layouts.listar')

@section('content')

<div class="form-container">
    <a href="{{ route('docente') }}" class="back-link">&larr; Volver atrás</a>
    
    <form action="{{ route('docente.store') }}" method="POST">
        @csrf
        <h2>Registrar Profesor</h2>

        <div class="form-grid">
            <div class="form-group">
                <label for="first_name">Nombres:</label>
                <input type="text" id="first_name" name="first_name" required placeholder="Ej: Juan">
            </div>

            <div class="form-group">
                <label for="last_name">Apellidos:</label>
                <input type="text" id="last_name" name="last_name" required placeholder="Ej: Perez">
            </div>

            <div class="form-group full-width">
                <label for="specialization">Especialización:</label>
                <input type="text" id="specialization" name="specialization" required placeholder="Ej: Ingeniería de Software">
            </div>
        </div>

        <button type="submit" class="submit-btn">Guardar Profesor</button>
    </form>
</div>  
@endsection
