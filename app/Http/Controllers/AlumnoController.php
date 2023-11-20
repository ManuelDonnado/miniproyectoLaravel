<?php

namespace App\Http\Controllers;

use App\Models\alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()   
    {
        return alumno::all();
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
        $alumno = new alumno();
        $alumno->matricula = $request->matricula;
        $alumno->nombre = $request->nombre;
        $alumno->apellido = $request->apellido;
        $alumno->telefono = $request->telefono;
        $alumno->direccion = $request->direccion;
        $alumno->correo = $request->correo;
        $alumno->password = $request->password;
        $alumno->save();
        return "Alumno guardado exitosamente";
    }

    /**
     * Display the specified resource.
     */
    public function show(alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $alumno = alumno::find($id);
        $alumno->matricula = $request->matricula;
        $alumno->nombre = $request->nombre;
        $alumno->apellido = $request->apellido;
        $alumno->telefono = $request->telefono;
        $alumno->direccion = $request->direccion;
        $alumno->correo = $request->correo;
        $alumno->password = $request->password;
        $alumno->save();
        return "Alumno actualizado exitosamente";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $alumno = alumno::find($id);
        $alumno->delete();
        return "Alumno eliminado existosamente";  
    }
}
