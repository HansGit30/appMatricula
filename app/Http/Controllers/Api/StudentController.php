<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Http\Resources\StudentResource;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listar(): View
    {
        $student = student::all();
        return view('student.list', compact('student'));
    }

    public function create(): View
    {
        return view('student.create');
    }

    public function edit($id): View
    {
        $student = student::findOrFail($id);
        return view('student.edit', compact('student'));
    }


    public function index()
    {
        $student = student::all();
        return StudentResource::collection($student);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        $student = student::create($request->validated());
        //return new StudentResource($student);
        return redirect()->route('alumno')->with('success', '¡Alumno registrado con éxito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = student::findOrFail($id);
        return new StudentResource($student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, string $id)
    {
        $student = student::findOrFail($id);
        //$student = student::where('student_id', $id)->firstOrFail();
        $student->update($request->validated());
        //return new StudentResource($student);
        return redirect()->route('alumno')->with('success', '¡Alumno actualizado con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = student::findOrFail($id);
        $student->delete();
        //return response()->json(null, 204);
        return redirect()->route('alumno')->with('success', '¡Alumno eliminado con éxito!');
    }
}
