<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Http\Resources\CourseResource;
use App\Models\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function listar()
    {
        $course = course::all();
        return view('course.list', compact('course'));
    }

    public function create()
    {
        return view('course.create');
    }

    public function edit($id)
    {
        $course = course::findOrFail($id);
        return view('course.edit', compact('course'));
    }



    public function index()
    {
        $course = course::all();
        return CourseResource::collection($course);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        $course = course::create($request->validated());
        //return new CourseResource($course);
        //return new StudentResource($student);
        return redirect()->route('curso')->with('success', '¡Curso registrado con éxito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = course::findOrFail($id);
        return new CourseResource($course);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, string $id)
    {
        $course = course::findOrFail($id);
        $course->update($request->validated());
        //return new CourseResource($course);
        return redirect()->route('curso')->with('success', '¡Curso actualizado con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = course::findOrFail($id);
        $course->delete();
        //return response()->json(null, 204);
        return redirect()->route('curso')->with('success', '¡Curso eliminado con éxito!');
    }
}
