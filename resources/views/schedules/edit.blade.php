@extends('layouts.listar')

@section('content')
    {{-- Ruta actualizada para el método update de horarios --}}
    <form action="{{ route('horario.update', $schedules->schedule_id) }}" method="POST">
        @method('PUT')
        @csrf 

        <div class="form-container">
            <h2>Editar Horario</h2>

            <div class="form-grid">
                <div class="form-group">
                    <label for="course_id">ID del Curso:</label>
                    <input type="number" id="course_id" name="course_id" required value="{{ $schedules->course_id }}">
                </div>

                <div class="form-group">
                    <label for="day_of_week">Día de la semana:</label>
                    <select id="day_of_week" name="day_of_week" required>
                        <option value="monday" {{ $schedules->day_of_week == 'monday' ? 'selected' : '' }}>Lunes</option>
                        <option value="tuesday" {{ $schedules->day_of_week == 'tuesday' ? 'selected' : '' }}>Martes</option>
                        <option value="wednesday" {{ $schedules->day_of_week == 'wednesday' ? 'selected' : '' }}>Miércoles</option>
                        <option value="thursday" {{ $schedules->day_of_week == 'thursday' ? 'selected' : '' }}>Jueves</option>
                        <option value="friday" {{ $schedules->day_of_week == 'friday' ? 'selected' : '' }}>Viernes</option>
                        <option value="saturday" {{ $schedules->day_of_week == 'saturday' ? 'selected' : '' }}>Sábado</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="start_time">Hora de inicio:</label>
                    <input type="time" id="start_time" name="start_time" required value="{{ $schedules->start_time }}">
                </div>

                <div class="form-group">
                    <label for="end_time">Hora de fin:</label>
                    <input type="time" id="end_time" name="end_time" required value="{{ $schedules->end_time }}">
                </div>

                <div class="form-group full-width">
                    <label for="classroom">Aula:</label>
                    <input type="text" id="classroom" name="classroom" required value="{{ $schedules->classroom }}">
                </div>
            </div>

            <button type="submit" class="submit-btn">Guardar Cambios</button>
        </div>
    </form>

    <div class="btn-actii">
        <button class="btn-acti">
            <a href="{{ route('horario') }}">Regresar</a>
        </button>
    </div>
@endsection