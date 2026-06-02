@extends('layouts.listar')

@section('content')
    <form action="{{ route('alumno.update', $student->student_id) }}" method="POST">
        @method('PUT')
        @csrf {{-- Token de seguridad obligatorio en Laravel --}}

        <div class="form-container">
            <form action="..." method="POST">
                @csrf
                @method('PUT')

                <h2>Editar Alumno</h2>

                <div class="form-grid">
                    <div class="form-group">
                        <label for="first_name">Nombres:</label>
                        <input type="text" id="first_name" name="first_name" required value="{{ $student->first_name }}">
                    </div>

                    <div class="form-group">
                        <label for="last_name">Apellidos:</label>
                        <input type="text" id="last_name" name="last_name" required value="{{ $student->last_name }}">
                    </div>

                    <div class="form-group">
                        <label for="date_of_birth">Fecha de Nacimiento:</label>
                        <input type="date" id="date_of_birth" name="date_of_birth" required
                            value="{{ $student->date_of_birth }}">
                    </div>

                    <div class="form-group">
                        <label for="dni">DNI / Identificación:</label>
                        <input type="text" id="dni" name="dni" required value="{{ $student->dni }}">
                    </div>

                    <div class="form-group full-width">
                        <label for="address">Dirección:</label>
                        <input type="text" id="address" name="address" value="{{ $student->address }}">
                    </div>

                    <div class="form-group">
                        <label for="phone_number">Teléfono:</label>
                        <input type="tel" id="phone_number" name="phone_number" value="{{ $student->phone_number }}">
                    </div>

                    <div class="form-group">
                        <label for="email">Correo Electrónico:</label>
                        <input type="email" id="email" name="email" value="{{ $student->email }}" required>
                    </div>

                    <div class="form-group full-width">
                        <label for="enrollment_status">Estado de Matrícula:</label>
                        <select id="enrollment_status" name="enrollment_status" required>
                            <option value="enrolled" {{ $student->enrollment_status == 'enrolled' ? 'selected' : '' }}>
                                Enrolled (Matriculado)</option>
                            <option value="pending" {{ $student->enrollment_status == 'pending' ? 'selected' : '' }}>Pending
                                (Pendiente)</option>
                            <option value="inactive" {{ $student->enrollment_status == 'inactive' ? 'selected' : '' }}>
                                Inactive (Inactivo)</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="submit-btn">Guardar Alumno</button>

            </form>
        </div>
        <div class="btn-actii">
            <button class="btn-acti"><a href="{{ route('alumno') }}">Regresar</a></button>

        </div>
    @endsection
