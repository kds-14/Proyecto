<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listar=programas::orderby ('Estado','DESC') ->get();
        return view('Formulario_Consulta.Programa', ['mostrar'=>$listar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Formulario_Crear.create4');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevo= new programas();
        $nuevo->Codigo= $request->Codigo;
        $nuevo->Nombre_programa= $request->Nombre_programa;
        $nuevo->Version= $request->Version;
        $nuevo->Nivel_formación= $request->Nivel_formación;
        $nuevo->Duracion_maxima= $request->Duracion_maxima;
        $nuevo->Tipo_de_Formacion= $request->Tipo_de_Formacion;
        $nuevo->Estado= $request->Estado;

        $nuevo->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\programas  $programa
     * @return \Illuminate\Http\Response
     */
    public function show(programas $programa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\programas  $programa
     * @return \Illuminate\Http\Response
     */
    public function edit(programas $programa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\programas  $programa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, programas $programa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\programas  $programa
     * @return \Illuminate\Http\Response
     */
    public function destroy(programas $programa)
    {
        //
    }
}
