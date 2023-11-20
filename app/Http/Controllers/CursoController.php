<?php

namespace App\Http\Controllers;

use App\Models\curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return curso::all();
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
        $curso = new curso();
        $curso->nombreCurso = $request->nombreCurso;
        $curso->save();
        return "Curso creado exitosamente";
    }

    /**
     * Display the specified resource.
     */
    public function show(curso $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(curso $curso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $curso = curso::find($id);
        $curso->nombreCurso = $request->nombreCurso;
        $curso->save();
        return "Curso actualizado exitosamente";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $curso = curso::find($id);
        $curso->delete();
        return "Curso eliminado exitosamente";  
    }
}
