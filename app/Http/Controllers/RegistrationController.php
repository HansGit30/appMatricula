<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        // Cargamos los datos relacionados para mostrar nombres en la vista
        $registrations = Registration::with(['student', 'course'])->get();
        return view('registrations.index', compact('registrations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
            'semester' => 'required|string',
            'status' => 'required|string',
            'final_grade' => 'required|numeric'
        ]);

        Registration::create($request->all());

        return redirect()->route('registrations.index')->with('success', 'Inscripción realizada con éxito.');
    }
}