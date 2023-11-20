<?php

namespace App\Http\Controllers;

use App\Models\alumnoCurso;
use Illuminate\Http\Request;

class AlumnoCursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return alumnoCurso::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alumnoCurso = new alumnoCurso();
        $alumnoCurso->idAlumno = $request->idAlumno;
        $alumnoCurso->idDocenteCurso = $request->idDocenteCurso;
        $alumnoCurso->alumnosInscriptos = $request->alumnosInscriptos;
        $alumnoCurso->save();
        return "Alumno inscrito al curso exitosamente";
    }

    /**
     * Display the specified resource.
     */
    public function show(alumnoCurso $alumnoCurso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(alumnoCurso $alumnoCurso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $alumnoCurso = alumnoCurso::find($id);
        $alumnoCurso->idAlumno = $request->idAlumno;
        $alumnoCurso->idDocenteCurso = $request->idDocenteCurso;
        $alumnoCurso->alumnosInscriptos = $request->alumnosInscriptos;
        $alumnoCurso->save();
        return "Alumno Actualizado en su curso exitosamente";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $alumnoCurso = alumnoCurso::find($id);
        $alumnoCurso->delete();
        return "Alumno  eliminado del curso exitosamente";  
    }
}
