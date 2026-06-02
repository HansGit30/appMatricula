@extends('layouts.listar')

@section('content')
    <div class="form-container">
        <a href="{{ route('curso') }}" class="back-link">&larr; Volver atrás</a>

        <form action="{{ route('curso.store') }}" method="POST">
            @csrf
            <h2>Registrar Curso</h2>

            <div class="form-grid">
                <div class="form-group">
                    <label for="course_name">Nombre del Curso:</label>
                    <input type="text" id="course_name" name="course_name" required placeholder="Ej: Desarrollo Web">
                </div>

                <div class="form-group">
                    <label for="course_code">Código del Curso:</label>
                    <input type="text" id="course_code" name="course_code" required placeholder="Ej: DW-101">
                </div>

                <div class="form-group">
                    <label for="credits">Créditos:</label>
                    <input type="number" id="credits" name="credits" required placeholder="Ej: 5">
                </div>

                <div class="form-group full-width">
                    <label for="description">Descripción:</label>
                    <textarea id="description" name="description" rows="4" placeholder="Breve descripción del curso..."></textarea>
                </div>
            </div>

            <button type="submit" class="submit-btn">Guardar Curso</button>
        </form>
    </div>
@endsection
