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
        $request->validate([
            'nombre'=>['required','string'],
            'apellidoP'=>['required', 'string'],
            'apellidoM'=>['required', 'string'],
            'puesto'=>['required', 'string'],
            'fecha_nac'=>['required', 'DATE'],
            'domicilio'=>['required', 'string'],
            'telefono'=>['required', 'string'],
        ]);
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
        return view('biomedics/editBiomedic', compact('biomedic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Biomedic $biomedic)
    {
        $request->validate([
            'nombre'=>['required','string'],
            'apellidoP'=>['required', 'string'],
            'apellidoM'=>['required', 'string'],
            'puesto'=>['required', 'string'],
            'fecha_nac'=>['required', 'DATE'],
            'domicilio'=>['required', 'string'],
            'telefono'=>['required', 'string'],
        ]);
        $biomedic->nombre=$request->nombre;
        $biomedic->apellidoP=$request->apellidoP;
        $biomedic->apellidoM=$request->apellidoM;
        $biomedic->puesto=$request->puesto;
        $biomedic->fecha_nac=$request->fecha_nac;
        $biomedic->domicilio=$request->domicilio;
        $biomedic->telefono=$request->telefono;
        $biomedic->save();
        return redirect()->route('biomedics.show', $biomedic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Biomedic $biomedic)
    {
        $biomedic->delete();
        return redirect()->route('biomedics.index');
    }
}
