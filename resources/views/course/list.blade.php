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
        <h1>Lista de Cursos</h1>

        <button><a href="{{ route('curso.create') }}">Registrar Curso</a></button>
    </div>



    <div class="students-grid">
        @foreach ($course as $stu)
            <div class="student-card">
                <div class="card-header">
                    <div class="student-avatar">
                        {{-- Mantenemos la lógica de iniciales con el nombre del curso --}}
                        {{ substr($stu->course_name, 0, 2) }}
                    </div>
                    <div class="student-info">
                        <h3>{{ $stu->course_name }}</h3>
                        <p>ID: #{{ $stu->course_id }} | Código: {{ $stu->course_code }}</p>
                    </div>
                    {{-- Mantenemos el badge, podrías usar créditos como indicador --}}
                    <span class="status-badge">
                        {{ $stu->credits }} Créditos
                    </span>
                </div>

                <div class="card-body">
                    <p><strong>Descripción:</strong> {{ $stu->description }}</p>
                </div>

                <div class="card-footer">
                    <button class="btn-action">
                        <a href="{{ route('curso.edit', ['course' => $stu->course_id]) }}">Editar</a>
                    </button>
                    <form method="POST" action="{{ route('curso.destroy', ['course' => $stu->course_id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" value="DELETE">Eliminar</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
