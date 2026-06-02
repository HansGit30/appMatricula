<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProfessorRequest;
use App\Http\Requests\UpdateProfessorRequest;
use App\Http\Resources\ProfessorResource;
use App\Models\professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     */

       public function listar()
    {
        $professor = professor::all();
        return view('professor.list', compact('professor'));
    }

    public function create()
    {
        return view('professor.create');
    }

    public function edit($id)
    {
        $professor = professor::findOrFail($id);
        return view('professor.edit', compact('professor'));
    }


    public function index()
    {
        $professor = professor::all();
        return ProfessorResource::collection($professor);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfessorRequest $request)
    {
        $professor = professor::create($request->validated());
        //return new ProfessorResource($professor);
        return redirect()->route('docente')->with('success', '¡Docente registrado con éxito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $professor = professor::findOrFail($id);
        return new ProfessorResource($professor);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfessorRequest $request, string $id)
    {
        $professor = professor::findOrFail($id);
        $professor->update($request->validated());
        //return new ProfessorResource($professor);

        return redirect()->route('docente')->with('success', '¡Docente actualizado con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $professor = professor::findOrFail($id);
        $professor->delete();
        //return response()->json(null, 204);

        return redirect()->route('docente')->with('success', '¡Docente eliminado con éxito!');
    }
}
