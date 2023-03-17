<?php

namespace App\Http\Controllers;

use App\Models\calendarios;
use Illuminate\Http\Request;

class CalendariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('calendario.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(calendarios $calendarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(calendarios $calendarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, calendarios $calendarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(calendarios $calendarios)
    {
        //
    }
}
