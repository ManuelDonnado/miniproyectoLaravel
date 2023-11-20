<?php

namespace App\Http\Controllers;

use App\Models\docenteCurso;
use Illuminate\Http\Request;

class DocenteCursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return docenteCurso::all();
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
        $docenteCurso = new docenteCurso();
        $docenteCurso->idDocente = $request->idDocente;
        $docenteCurso->idCurso = $request->idCurso;
        $docenteCurso->dia = $request->dia;
        $docenteCurso->hora = $request->hora;
        $docenteCurso->save();
        return "Docente asignado a un curso exitosamente";
    }

    /**
     * Display the specified resource.
     */
    public function show(docenteCurso $docenteCurso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(docenteCurso $docenteCurso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $docenteCurso = docenteCurso::find($id);
        $docenteCurso->idDocente = $request->idDocente;
        $docenteCurso->idCurso = $request->idCurso;
        $docenteCurso->dia = $request->dia;
        $docenteCurso->hora = $request->hora;
        $docenteCurso->save();
        return "Docente actualizado en un curso exitosamente";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $docenteCurso = docenteCurso::find($id);
        $docenteCurso->delete();
        return "Docente eliminado del curso asignado exitosamente";  
    }
}
