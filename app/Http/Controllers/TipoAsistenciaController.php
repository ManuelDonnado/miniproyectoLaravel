<?php

namespace App\Http\Controllers;

use App\Models\tipoAsistencia;
use Illuminate\Http\Request;

class TipoAsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return tipoAsistencia::all();
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
        $tipoAsistencia = new tipoAsistencia();
        $tipoAsistencia->tipoAsistencia = $request->tipoAsistencia;
        $tipoAsistencia->save();
        return "Tipo de asistencia creado exitosamente";
    }

    /**
     * Display the specified resource.
     */
    public function show(tipoAsistencia $tipoAsistencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tipoAsistencia $tipoAsistencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tipoAsistencia = tipoAsistencia::find($id);
        $tipoAsistencia->tipoAsistencia = $request->tipoAsistencia;
        $tipoAsistencia->save();
        return "Tipo de asistencia Actualizado exitosamente";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tipoAsistencia = tipoAsistencia::find($id);
        $tipoAsistencia->delete();
        return "Tipo de asistencia eliminado exitosamente";  
    }
}
