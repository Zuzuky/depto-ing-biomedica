<?php

namespace App\Http\Controllers;

use App\Models\Biomedic;
use Illuminate\Http\Request;

class BiomedicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biomedics=Biomedic::all();
        return view('biomedics/listaBiomedic', compact('biomedics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('biomedics/agregarBiomedic');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $biomedico=new Biomedic();
        $biomedico->nombre=$request->nombre;
        $biomedico->apellidoP=$request->apellidoP;
        $biomedico->apellidoM=$request->apellidoM;
        $biomedico->puesto=$request->puesto;
        $biomedico->fecha_nac=$request->fecha_nac;
        $biomedico->domicilio=$request->domicilio;
        $biomedico->telefono=$request->telefono;
        $biomedico->save();
        return redirect()->route('biomedics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Biomedic $biomedic)
    {
        return view('biomedics/showBiomedic', compact('biomedic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Biomedic $biomedic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Biomedic $biomedic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Biomedic $biomedic)
    {
        //
    }
}
