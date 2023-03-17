<?php

namespace App\Http\Controllers;

use App\Models\competencias;
use Illuminate\Http\Request;

class CompetenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $competencia=competencias::orderby ('programas_Codigo','DESC') ->get();
        return view('Formulario_Consulta/Competencias', ['mostrar'=>$competencia]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Formulario_crear.competencia_c');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevo=new competencias();
        $nuevo->competencias_Codigo= $request->competencias_Codigo;
        $nuevo->Nombre_competencia= $request->Nombre_competencia;
        $nuevo->Duracion_competencia= $request->Duracion_competencia;
        $nuevo->programas_Codigo= $request->programas_Codigo;

        $nuevo->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(competencias $competencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(competencias $competencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, competencias $competencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(competencias $competencia)
    {
        //
    }
}
