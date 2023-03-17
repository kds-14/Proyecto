<?php

namespace App\Http\Controllers;

use App\Models\fichas;
use Illuminate\Http\Request;

class FichasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ficha=fichas::orderby ('Nro_ficha','DESC') ->get();
        return view('Formulario_Consulta/Ficha', ['mostrar'=>$ficha]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Formulario_crear.ficha_c');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevo=new fichas();
        $nuevo->Nro_ficha= $request->Nro_ficha;
        $nuevo->Jornada= $request->Jornada;
        $nuevo->Nro_aprendices= $request->Nro_aprendices;
        $nuevo->programas_Codigo= $request->programas_Codigo;

        $nuevo->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(fichas $fichas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(fichas $fichas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, fichas $fichas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(fichas $fichas)
    {
        //
    }
}
