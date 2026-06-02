@extends('layouts.listar')

@section('content')
    {{-- Ruta actualizada para el método update de cursos --}}
    <form action="{{ route('curso.update', $course->course_id) }}" method="POST">
        @method('PUT')
        @csrf 

        <div class="form-container">
            <h2>Editar Curso</h2>

            <div class="form-grid">
                <div class="form-group">
                    <label for="course_name">Nombre del Curso:</label>
                    <input type="text" id="course_name" name="course_name" required value="{{ $course->course_name }}">
                </div>

                <div class="form-group">
                    <label for="course_code">Código del Curso:</label>
                    <input type="text" id="course_code" name="course_code" required value="{{ $course->course_code }}">
                </div>

                <div class="form-group">
                    <label for="credits">Créditos:</label>
                    <input type="number" id="credits" name="credits" required value="{{ $course->credits }}">
                </div>

                <div class="form-group full-width">
                    <label for="description">Descripción:</label>
                    <textarea id="description" name="description" rows="4">{{ $course->description }}</textarea>
                </div>
            </div>

            <button type="submit" class="submit-btn">Guardar Cambios</button>
        </div>
    </form>

    <div class="btn-actii">
        <button class="btn-acti">
            <a href="{{ route('curso') }}">Regresar</a>
        </button>
    </div>
@endsection