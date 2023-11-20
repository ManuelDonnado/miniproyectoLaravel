<?php

namespace App\Http\Controllers;

use App\Models\docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return docente::all();
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
        $docente = new docente();
        $docente->nombre = $request->nombre;
        $docente->apellido = $request->apellido;
        $docente->telefono = $request->telefono;
        $docente->direccion = $request->direccion;
        $docente->correo = $request->correo;
        $docente->password = $request->password;
        $docente->save();
        return "Docente creado exitosamente";
    }

    /**
     * Display the specified resource.
     */
    public function show(docente $docente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(docente $docente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $docente = docente::find($id);
        $docente->nombre = $request->nombre;
        $docente->apellido = $request->apellido;
        $docente->telefono = $request->telefono;
        $docente->direccion = $request->direccion;
        $docente->correo = $request->correo;
        $docente->password = $request->password;
        $docente->save();
        return "Docente actualizado exitosamente";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $docente = docente::find($id);
        $docente->delete();
        return "Docente eliminado exitosamente";  
    }
}
