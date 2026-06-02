@extends('layouts.listar')

@section('content')
    <div class="form-container">
        {{-- Asegúrate de que la ruta 'profesor.update' y el parámetro correspondan a tu web.php --}}
        <form action="{{ route('docente.update', $professor->professor_id) }}" method="POST">
            @method('PUT')
            @csrf 

            <h2>Editar Profesor</h2>

            <div class="form-grid">
                <div class="form-group">
                    <label for="first_name">Nombres:</label>
                    <input type="text" id="first_name" name="first_name" required value="{{ $professor->first_name }}">
                </div>

                <div class="form-group">
                    <label for="last_name">Apellidos:</label>
                    <input type="text" id="last_name" name="last_name" required value="{{ $professor->last_name }}">
                </div>

                <div class="form-group full-width">
                    <label for="specialization">Especialización:</label>
                    <input type="text" id="specialization" name="specialization" required value="{{ $professor->specialization }}">
                </div>
            </div>

            <button type="submit" class="submit-btn">Guardar Cambios</button>
        </form>
    </div>

    <div class="btn-actii">
        <button class="btn-acti">
            {{-- Asegúrate de que la ruta 'profesor' sea la correcta para volver al listado --}}
            <a href="{{ route('docente') }}">Regresar</a>
        </button>
    </div>
@endsection