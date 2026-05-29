<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'last_name' => 'required|string',
            'specialty' => 'required|string',
        ]);

        Teacher::create($request->all());

        return redirect()->route('teachers.index')->with('success', 'Docente registrado correctamente.');
    }
}