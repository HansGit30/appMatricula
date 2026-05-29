<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Listar todos los estudiantes
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    // Mostrar formulario de creación
    public function create()
    {
        return view('students.create');
    }

    // Guardar nuevo estudiante
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'dni' => 'required|unique:students|size:8',
            'email' => 'required|email|unique:students',
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')->with('success', 'Estudiante registrado correctamente.');
    }
}