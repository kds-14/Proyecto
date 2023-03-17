<?php

namespace App\Http\Controllers;

use App\Models\ambientes;
use Illuminate\Http\Request;

class AmbientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ambiente=ambientes::orderby ('Nro_ambi','desc') ->get();
        return view('Formulario_Consulta/Ambiente', ['mostrar'=>$ambiente]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Formulario_crear.ambiente_c');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevo= new ambientes();
        $nuevo->Nro_ambi= $request->Nro_ambi;
        $nuevo->Elementos_del_Ambiente= $request->Elementos_del_Ambiente;
        $nuevo->Especializacion= $request->Especializacion;

        $nuevo->save();

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ambientes  $ambiente
     * @return \Illuminate\Http\Response
     */
    public function show(ambientes $ambiente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ambientes  $ambiente
     * @return \Illuminate\Http\Response
     */
    public function edit(ambientes $ambiente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ambientes  $ambiente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ambientes $ambiente)
    {
        return view ('Form_Actualizar.Ambiente_a');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ambientes  $ambiente
     * @return \Illuminate\Http\Response
     */
    public function destroy(ambientes $ambiente)
    {
        //
    }
}
