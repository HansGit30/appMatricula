<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Course;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        // Traemos los horarios incluyendo el curso relacionado para mostrar su nombre
        $schedules = Schedule::with('course')->get();
        return view('schedules.index', compact('schedules'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'day_week' => 'required|string',
            'start_time' => 'required',
            'end_time' => 'required',
            'classroom_id' => 'required',
        ]);

        Schedule::create($request->all());

        return redirect()->route('schedules.index')->with('success', 'Horario asignado correctamente.');
    }
}