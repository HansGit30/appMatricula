<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'credits' => 'required|integer',
        ]);

        Course::create($request->all());

        return redirect()->route('courses.index')->with('success', 'Curso creado con éxito.');
    }
}