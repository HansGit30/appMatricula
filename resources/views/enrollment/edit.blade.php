@extends('layouts.listar')

@section('content')
    {{-- La ruta debe usar el ID específico de la matrícula --}}
    <form action="{{ route('matricula.update', $enrollments->enrollment_id) }}" method="POST">
        @method('PUT')
        @csrf

        <div class="form-container">
            <h2>Editar Matrícula</h2>

            <div class="form-grid">
                <div class="form-group">
                    <label for="student_id">ID Estudiante:</label>
                    <input type="number" id="student_id" name="student_id" required value="{{ $enrollments->student_id }}">
                </div>

                <div class="form-group">
                    <label for="course_id">ID Curso:</label>
                    <input type="number" id="course_id" name="course_id" required value="{{ $enrollments->course_id }}">
                </div>

                <div class="form-group">
                    <label for="professor_id">ID Docente:</label>
                    <input type="number" id="professor_id" name="professor_id" required value="{{ $enrollments->professor_id }}">
                </div>

                <div class="form-group">
                    <label for="schedule_id">ID Horario:</label>
                    <input type="number" id="schedule_id" name="schedule_id" required value="{{ $enrollments->schedule_id }}">
                </div>

                <div class="form-group">
                    <label for="semester">Semestre:</label>
                    <input type="text" id="semester" name="semester" required value="{{ $enrollments->semester }}">
                </div>

                <div class="form-group">
                    <label for="enrollment_date">Fecha de Matrícula:</label>
                    <input type="date" id="enrollment_date" name="enrollment_date" required value="{{ $enrollments->enrollment_date }}">
                </div>

                <div class="form-group">
                    <label for="final_grade">Nota Final:</label>
                    <input type="number" step="0.1" id="final_grade" name="final_grade" value="{{ $enrollments->final_grade }}">
                </div>

                <div class="form-group full-width">
                    <label for="status">Estado:</label>
                    <select id="status" name="status" required>
                        <option value="enrolled" {{ $enrollments->status == 'enrolled' ? 'selected' : '' }}>Enrolled (Matriculado)</option>
                        <option value="pending" {{ $enrollments->status == 'pending' ? 'selected' : '' }}>Pending (Pendiente)</option>
                        <option value="withdrawn" {{ $enrollments->status == 'withdrawn' ? 'selected' : '' }}>Withdrawn (Retirado)</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="submit-btn">Guardar Cambios</button>
        </div>
    </form>

    <div class="btn-actii">
        <button class="btn-acti"><a href="{{ route('matricula') }}">Regresar</a></button>
    </div>
@endsection