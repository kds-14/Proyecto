<?php

namespace App\Http\Controllers;

use App\Models\semaforos;
use Illuminate\Http\Request;

class SemaforosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        $semaforo=semaforos::orderby ('programas_Codigo','DESC') ->get();
        return view('Formulario_Consulta/Semaforo', ['mostrar'=>$semaforo]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Formulario_crear.semaforo_c');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevo=new semaforos();
        $nuevo->Intensidad_diaria= $request->Intensidad_diaria;
        $nuevo->Trimestre= $request->Trimestre;
        $nuevo->programas_Codigo= $request->programas_Codigo;
        $nuevo->Nro_ficha= $request->Nro_ficha;
        $nuevo->competencias_Codigo= $request->competencias_Codigo;
        $nuevo->resultados_Codigo= $request->resultados_Codigo;
    }

    /**
     * Display the specified resource.
     */
    public function show(semaforos $semaforos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(semaforos $semaforos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, semaforos $semaforos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(semaforos $semaforos)
    {
        //
    }
}
