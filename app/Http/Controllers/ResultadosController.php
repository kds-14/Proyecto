<?php

namespace App\Http\Controllers;

use App\Models\resultados;
use Illuminate\Http\Request;

class ResultadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resultado=resultados::orderby ('programas_Codigo','DESC') ->get();
        return view('Formulario_Consulta/Resultados', ['mostrar'=>$resultado]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Formulario_crear.resultado_c');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevo=new resultados();
        $nuevo->Codigo= $request->Codigo;
        $nuevo->Nombre_resul= $request->Nombre_resul;
        $nuevo->competencias_Codigo= $request->competencias_Codigo;
        $nuevo->programas_Codigo= $request->programas_Codigo;

        $nuevo->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(resultados $resultados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(resultados $resultados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, resultados $resultados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(resultados $resultados)
    {
        //
    }
}
