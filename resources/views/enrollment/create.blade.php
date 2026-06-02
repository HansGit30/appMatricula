@extends('layouts.listar')

@section('content')

<div class="form-container">
    <a href="{{ route('matricula') }}" class="back-link">&larr; Volver atrás</a>
    
    {{-- Asegúrate de que la ruta apunte a tu controlador de Enrollment --}}
    <form action="{{ route('matricula.store') }}" method="POST">
        @csrf
        <h2>Registrar Matrícula</h2>

        <div class="form-grid">
            {{-- Claves foráneas (idealmente aquí cargarías selectores con los nombres) --}}
            <div class="form-group">
                <label for="student_id">ID Estudiante:</label>
                <input type="number" id="student_id" name="student_id" required>
            </div>

            <div class="form-group">
                <label for="course_id">ID Curso:</label>
                <input type="number" id="course_id" name="course_id" required>
            </div>

            <div class="form-group">
                <label for="professor_id">ID Docente:</label>
                <input type="number" id="professor_id" name="professor_id" required>
            </div>

            <div class="form-group">
                <label for="schedule_id">ID Horario:</label>
                <input type="number" id="schedule_id" name="schedule_id" required>
            </div>

            <div class="form-group">
                <label for="semester">Semestre:</label>
                <input type="text" id="semester" name="semester" required placeholder="Ej: primer">
            </div>

            <div class="form-group">
                <label for="enrollment_date">Fecha de Matrícula:</label>
                <input type="date" id="enrollment_date" name="enrollment_date" required>
            </div>

            <div class="form-group">
                <label for="final_grade">Nota Final:</label>
                <input type="number" step="0.1" id="final_grade" name="final_grade" placeholder="0.0">
            </div>

            <div class="form-group full-width">
                <label for="status">Estado:</label>
                <select id="status" name="status" required>
                    <option value="enrolled">Enrolled (Matriculado)</option>
                    <option value="pending">Pending (Pendiente)</option>
                    <option value="withdrawn">Withdrawn (Retirado)</option>
                </select>
            </div>
        </div>

        <button type="submit" class="submit-btn">Guardar Matrícula</button>
    </form>
</div>  
@endsection