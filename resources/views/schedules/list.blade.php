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
        <h1>Lista de Horarios</h1>

        <button><a href="{{ route('horario.create') }}">Registrar Horario</a></button>
    </div>



    <div class="students-grid">
        @foreach ($schedules as $sch)
            <div class="student-card">
                <div class="card-header">
                    <div class="student-avatar">
                        {{-- Iniciales basadas en el día de la semana --}}
                        {{ strtoupper(substr($sch->day_of_week, 0, 2)) }}
                    </div>
                    <div class="student-info">
                        <h3>{{ ucfirst($sch->day_of_week) }}</h3>
                        <p>ID Horario: #{{ $sch->schedule_id }} | Curso ID: #{{ $sch->course_id }}</p>
                    </div>
                    {{-- Badge para mostrar el aula --}}
                    <span class="status-badge">
                        Aula: {{ $sch->classroom }}
                    </span>
                </div>

                <div class="card-body">
                    <p><strong>Inicio:</strong> {{ $sch->start_time }}</p>
                    <p><strong>Fin:</strong> {{ $sch->end_time }}</p>
                </div>

                <div class="card-footer">
                    <button class="btn-action">
                        {{-- Asegúrate de que las rutas 'schedule.edit' y 'schedule.destroy' existan --}}
                        <a href="{{ route('horario.edit', ['schedule' => $sch->schedule_id]) }}">Editar</a>
                    </button>
                    <form method="POST" action="{{ route('horario.destroy', ['schedule' => $sch->schedule_id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" value="DELETE">Eliminar</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
