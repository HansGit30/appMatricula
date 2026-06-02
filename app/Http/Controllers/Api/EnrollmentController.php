<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEnrollmentRequest;
use App\Http\Requests\UpdateEnrollmentRequest;
use App\Http\Resources\EnrollmentResource;
use App\Models\enrollments;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function listar()
    {
        $enrollments = enrollments::all();
        return view('enrollment.list', compact('enrollments'));
    }

    public function create()
    {
        return view('enrollment.create');
    }

    public function edit($id)
    {
        $enrollments = enrollments::findOrFail($id);
        return view('enrollment.edit', compact('enrollments'));
    }

    public function index()
    {
        $enrollment = enrollments::all();
        return EnrollmentResource::collection($enrollment);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEnrollmentRequest $request)
    {
        $enrollment = enrollments::create($request->validated());
        //return new EnrollmentResource($enrollment);
        return redirect()->route('matricula')->with('success', '¡Matricula registrado con éxito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $enrollment = enrollments::findOrFail($id);
        return new EnrollmentResource($enrollment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEnrollmentRequest $request, string $id)
    {
        $enrollment = enrollments::findOrFail($id);
        $enrollment->update($request->validated());
        //return new EnrollmentResource($enrollment);
        return redirect()->route('matricula')->with('success', '¡Matricula actualizado con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $enrollment = enrollments::findOrFail($id);
        $enrollment->delete();
        //return response()->json(null, 204);
        return redirect()->route('matricula')->with('success', '¡Matricula eliminado con éxito!');
    }
}
