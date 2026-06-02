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
        <h1>Lista de Docentes</h1>

        <button><a href="{{ route('docente.create') }}">Registrar Docente</a></button>
    </div>



    <div class="students-grid">
        @foreach ($professor as $prof)
            <div class="student-card">
                <div class="card-header">
                    <div class="student-avatar">
                        {{-- Iniciales del nombre y apellido del profesor --}}
                        {{ substr($prof->first_name, 0, 1) }}{{ substr($prof->last_name, 0, 1) }}
                    </div>
                    <div class="student-info">
                        <h3>{{ $prof->first_name }} {{ $prof->last_name }}</h3>
                        <p>ID: #{{ $prof->professor_id }}</p>
                    </div>
                    {{-- Badge opcional para mostrar la especialización --}}
                    <span class="status-badge">
                        {{ $prof->specialization }}
                    </span>
                </div>

                <div class="card-body">
                    <p><strong>Especialización:</strong> {{ $prof->specialization }}</p>
                </div>

                <div class="card-footer">
                    <button class="btn-action">
                        {{-- Asegúrate de que las rutas 'profesor.edit' y 'profesor.destroy' existan en web.php --}}
                        <a href="{{ route('docente.edit', ['professor' => $prof->professor_id]) }}">Editar</a>
                    </button>
                    <form method="POST" action="{{ route('docente.destroy', ['professor' => $prof->professor_id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
