<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSheduleRequest;
use App\Http\Requests\UpdateSheduleRequest;
use App\Http\Resources\SheduleResource;
use App\Models\schedule;
use Illuminate\Http\Request;

class SheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function listar()
    {
        $schedules = schedule::all();
        return view('schedules.list', compact('schedules'));
    }

    public function create()
    {
        return view('schedules.create');
    }

    public function edit($id)
    {
        $schedules = schedule::findOrFail($id);
        return view('schedules.edit', compact('schedules'));
    }

    public function index()
    {
        $schedule = schedule::all();
        return SheduleResource::collection($schedule);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSheduleRequest $request)
    {
        $schedule = schedule::create($request->validated());
        //return new SheduleResource($schedule);
        return redirect()->route('horario')->with('success', '¡Horario registrado con éxito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $schedule = schedule::findOrFail($id);
        return new SheduleResource($schedule);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSheduleRequest $request, string $id)
    {
        $schedule = schedule::findOrFail($id);
        $schedule->update($request->validated());
        //return new SheduleResource($schedule);
        return redirect()->route('horario')->with('success', '¡Horario actualizado con éxito!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $schedule = schedule::findOrFail($id);
        $schedule->delete();
        //return response()->json(null, 204);
        return redirect()->route('horario')->with('success', '¡Horario eliminado con éxito!');
    }
}
