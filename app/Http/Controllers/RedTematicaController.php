<?php

namespace App\Http\Controllers;

use App\Models\red_tematica;
use Illuminate\Http\Request;

class RedTematicaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $red=red_tematica::orderby ('Codigo_red','ASC') ->get();
        return view('Formulario_Consulta/Red', ['mostrar'=>$red]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Formulario_crear.red_c');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevo=new red_tematica();
        $nuevo->Codigo_red= $request->Codigo_red;
        $nuevo->Nombre_red= $request->Nombre_red;

        $nuevo->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(red_tematica $red_tematica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(red_tematica $red_tematica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, red_tematica $red_tematica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(red_tematica $red_tematica)
    {
        //
    }
}
