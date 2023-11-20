<?php

namespace App\Http\Controllers;

use App\Models\asistencia;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return asistencia::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $asistencia = new asistencia();
        $asistencia->idAlumnoCurso = $request->idAlumnoCurso;
        $asistencia->idTipoAsistencia = $request->idTipoAsistencia;
        $asistencia->fecha = $request->fecha;
        $asistencia->save();
        return "Asistencia guardada exitosamente";
    }

    /**
     * Display the specified resource.
     */
    public function show(asistencia $asistencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(asistencia $asistencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $asistencia =  asistencia::find($id);
        $asistencia->idAlumnoCurso = $request->idAlumnoCurso;
        $asistencia->idTipoAsistencia = $request->idTipoAsistencia;
        $asistencia->fecha = $request->fecha;
        $asistencia->save();
        return "Asistencia Actualizada exitosamente";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $asistencia = asistencia::find($id);
        $asistencia->delete();
        return "Asistencia eliminada exitosamente"; 
    }
}
