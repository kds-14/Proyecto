<?php

namespace App\Http\Controllers;

use App\Models\instructores;
use Illuminate\Http\Request;

class InstructoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructor=instructores::orderby ('Estado','DESC') ->get();
        return view('Formulario_Consulta.Instructor', ['mostrar'=>$instructor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Formulario_crear.instructor_c');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevo= new instructores();
        $nuevo->Tipo_Documento= $request->Tipo_Documento;
        $nuevo->Nro_Doc= $request->Nro_Doc;
        $nuevo->Nombres= $request->Nombres;
        $nuevo->Apellidos= $request->Apellidos;
        $nuevo->Correo_Electronico= $request->Correo_Electronico;
        $nuevo->Estado= $request->Estado;

        $nuevo->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\instructores  $instructor
     * @return \Illuminate\Http\Response
     */
    public function show(instructores $instructor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\instructores  $instructor
     * @return \Illuminate\Http\Response
     */
    public function edit(instructores $instructor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\instructores  $instructor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, instructores $instructor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\instructores  $instructor
     * @return \Illuminate\Http\Response
     */
    public function destroy(instructores $instructor)
    {
        //
    }
}
