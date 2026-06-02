@extends('layouts.listar')

@section('content')
    {{-- Bloque para mostrar el mensaje de éxito si existe en la sesión --}}
    @if (session('success'))
        <div
            style="background-color: #d4edda; color: #155724; padding: 15px; margin-bottom: 20px; border: 1px solid #c3e6cb; border-radius: 4px;">
            {{ session('success') }}
        </div>
    @endif


    <div class="hed">
        <h1>Lista de Matriculas</h1>

        <button><a href="{{ route('matricula.create') }}">Registrar Matricula</a></button>
    </div>



    <div class="students-grid">
        @foreach ($enrollments as $enr)
    <div class="student-card">
        <div class="card-header">
            <div class="student-avatar">
                {{-- Iniciales basadas en el semestre --}}
                {{ strtoupper(substr($enr->semester, 0, 2)) }}
            </div>
            <div class="student-info">
                <h3>Semestre: {{ ucfirst($enr->semester) }}</h3>
                <p>ID Inscripción: #{{ $enr->enrollment_id }} | Fecha: {{ $enr->enrollment_date }}</p>
            </div>
            {{-- Badge para mostrar el estado --}}
            <span class="status-badge {{ $enr->status }}">
                {{ ucfirst($enr->status) }}
            </span>
        </div>

        <div class="card-body">
            <p><strong>Estudiante ID:</strong> {{ $enr->student_id }}</p>
            <p><strong>Curso ID:</strong> {{ $enr->course_id }}</p>
            <p><strong>Nota Final:</strong> {{ $enr->final_grade ?? 'N/A' }}</p>
        </div>

        <div class="card-footer">
            <button class="btn-action">
                {{-- Asegúrate de que las rutas 'enrollment.edit' y 'enrollment.destroy' estén definidas --}}
                <a href="{{ route('matricula.edit', ['enrollment' => $enr->enrollment_id]) }}">Editar</a>
            </button>
            <form method="POST" action="{{ route('matricula.destroy', ['enrollment' => $enr->enrollment_id]) }}">
                @csrf
                @method('DELETE')
                <button type="submit" value="DELETE">Eliminar</button>
            </form>
        </div>
    </div>
@endforeach
    </div>
@endsection
