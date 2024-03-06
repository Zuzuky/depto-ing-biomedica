<?php

namespace App\Http\Controllers;

use App\Models\AreaBoss;
use Illuminate\Http\Request;

class AreaBossController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bosses=AreaBoss::all();
        return view('bosses/listaBosses', compact('bosses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bosses/agregarBoss');
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
            'fecha_nac'=>['required', 'DATE'],
            'domicilio'=>['required', 'string'],
            'telefono'=>['required', 'string'],
        ]);
        $bosses=new AreaBoss();
        $bosses->nombre=$request->nombre;
        $bosses->apellidoP=$request->apellidoP;
        $bosses->apellidoM=$request->apellidoM;
        $bosses->fecha_nac=$request->fecha_nac;
        $bosses->domicilio=$request->domicilio;
        $bosses->telefono=$request->telefono;
        $bosses->save();
        return redirect()->route('areaBosses.index');
    }

    /**
     * Display the specified resource.
     */  
    public function show(AreaBoss $areaBoss)
    {
        return view('bosses/showBoss', compact('areaBoss'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AreaBoss $areaBoss)
    {
        return view('bosses/editBoss', compact('areaBoss'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AreaBoss $areaBoss)
    {
        $request->validate([
            'nombre'=>['required','string'],
            'apellidoP'=>['required', 'string'],
            'apellidoM'=>['required', 'string'],
            'fecha_nac'=>['required', 'DATE'],
            'domicilio'=>['required', 'string'],
            'telefono'=>['required', 'string'],
        ]);
        $areaBoss->nombre=$request->nombre;
        $areaBoss->apellidoP=$request->apellidoP;
        $areaBoss->apellidoM=$request->apellidoM;
        $areaBoss->fecha_nac=$request->fecha_nac;
        $areaBoss->domicilio=$request->domicilio;
        $areaBoss->telefono=$request->telefono;
        $areaBoss->save();
        return redirect()->route('areaBosses.show', $areaBoss);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AreaBoss $areaBoss)
    {
        $areaBoss->delete();
        return redirect()->route('areaBosses.index');
    }
}
