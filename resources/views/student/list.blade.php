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
        <h1>Lista de Alumnos</h1>

        <button><a href="{{ route('alumno.create') }}">Registrar Alumno</a></button>
    </div>



    <div class="students-grid">
        @foreach ($student as $stu)
            <div class="student-card">
                <div class="card-header">
                    <div class="student-avatar">
                        {{ substr($stu->first_name, 0, 1) }}{{ substr($stu->last_name, 0, 1) }}
                    </div>
                    <div class="student-info">
                        <h3>{{ $stu->first_name }} {{ $stu->last_name }}</h3>
                        <p>ID: #{{ $stu->student_id }} | DNI: {{ $stu->dni }}</p>
                    </div>
                    <span class="status-badge {{ $stu->enrollment_status }}">
                        {{ ucfirst($stu->enrollment_status) }}
                    </span>
                </div>

                <div class="card-body">
                    <p><strong>Email:</strong> {{ $stu->email }}</p>
                    <p><strong>Teléfono:</strong> {{ $stu->phone_number }}</p>
                    <p><strong>Dirección:</strong> {{ $stu->address }}</p>
                </div>

                <div class="card-footer">
                    <button class="btn-action"><a
                            href="{{ route('alumno.edit', ['student' => $stu->student_id]) }}">Editar</a></button>
                    <form method="POST" action="{{ route('alumno.destroy', ['student' => $stu->student_id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" value="DELETE">Eliminar</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
