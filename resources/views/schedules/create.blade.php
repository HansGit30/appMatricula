@extends('layouts.listar')

@section('content')

<div class="form-container">
    {{-- Asegúrate de que la ruta 'horario' exista en tu archivo web.php --}}
    <a href="{{ route('horario') }}" class="back-link">&larr; Volver atrás</a>
    
    <form action="{{ route('horario.store') }}" method="POST">
        @csrf
        <h2>Registrar Horario</h2>

        <div class="form-grid">
            <div class="form-group">
                <label for="course_id">ID del Curso:</label>
                <input type="number" id="course_id" name="course_id" required placeholder="Ej: 1">
            </div>

            <div class="form-group">
                <label for="day_of_week">Día de la semana:</label>
                <select id="day_of_week" name="day_of_week" required>
                    <option value="monday">Lunes</option>
                    <option value="tuesday">Martes</option>
                    <option value="wednesday">Miércoles</option>
                    <option value="thursday">Jueves</option>
                    <option value="friday">Viernes</option>
                    <option value="saturday">Sábado</option>
                </select>
            </div>

            <div class="form-group">
                <label for="start_time">Hora de inicio:</label>
                <input type="time" id="start_time" name="start_time" required>
            </div>

            <div class="form-group">
                <label for="end_time">Hora de fin:</label>
                <input type="time" id="end_time" name="end_time" required>
            </div>

            <div class="form-group full-width">
                <label for="classroom">Aula:</label>
                <input type="text" id="classroom" name="classroom" required placeholder="Ej: Aula 101">
            </div>
        </div>

        <button type="submit" class="submit-btn">Guardar Horario</button>
    </form>
</div>  
@endsection