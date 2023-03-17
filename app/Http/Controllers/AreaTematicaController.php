<?php

namespace App\Http\Controllers;

use App\Models\area_tematica;
use Illuminate\Http\Request;

class AreaTematicaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $area=area_tematica::orderby ('Codigo_area','ASC') ->get();
        return view('Formulario_Consulta/Area', ['mostrar'=>$area]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Formulario_crear.area_c');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevo=new area_tematica();
        $nuevo->Codigo_area= $request->Codigo_area;
        $nuevo->Nombre_area= $request->Nombre_area;
        $nuevo->Codigo_red= $request->Codigo_red;

        $nuevo->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(area_tematica $area_tematica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(area_tematica $area_tematica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, area_tematica $area_tematica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(area_tematica $area_tematica)
    {
        //
    }
}
