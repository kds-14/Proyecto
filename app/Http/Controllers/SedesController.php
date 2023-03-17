<?php

namespace App\Http\Controllers;

use App\Models\sedes;
use Illuminate\Http\Request;

class SedesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sede=sedes::orderby ('Nombre_sede','DESC') ->get();
        return view('Formulario_Consulta.Sede', ['mostrar'=>$sede]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Formulario_crear.sede_c');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevo= new sedes();
        $nuevo->Codigo_sede= $request->Codigo_sede;
        $nuevo->Direccion= $request->Direccion;
        $nuevo->Nombre_Sede= $request->Nombre_Sede;
        $nuevo->Telefono= $request->Telefono;

        $nuevo->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sedes  $sede
     * @return \Illuminate\Http\Response
     */
    public function show(sedes $sede)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sedes  $sede
     * @return \Illuminate\Http\Response
     */
    public function edit(sedes $sede)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sedes  $sede
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sedes $sede)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sedes  $sede
     * @return \Illuminate\Http\Response
     */
    public function destroy(sedes $sede)
    {
        //
    }
}
