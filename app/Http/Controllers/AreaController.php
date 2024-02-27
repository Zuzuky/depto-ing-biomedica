<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $areas = Area::all();
        return view('areas/areasList', compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('areas/createArea');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'servicio'=>['required','string'],
            'piso'=>['required', 'string'],
            'id_biomed'=>['required', 'string'],
            'id_jefe'=>['required', 'string'],
        ]);

        $area = new Area();
        $area->servicio = $request->servicio;
        $area->piso = $request->piso;
        $area->id_biomed = $request->id_biomed;
        $area-> id_jefe = $request->id_jefe;
        $area->save();

        return redirect()->route('area.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Area $area)
    {
        return view('areas/showArea', compact('area'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Area $area)
    {
        return view('areas/editArea', compact('area'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Area $area)
    {
        $request->validate([
            'servicio'=>['required','string'],
            'piso'=>['required', 'string'],
            'id_biomed'=>['required', 'string'],
            'id_jefe'=>['required', 'string'],
        ]);

        $area->servicio = $request->servicio;
        $area->piso = $request->piso;
        $area->id_biomed = $request->id_biomed;
        $area-> id_jefe = $request->id_jefe;
        $area->save();

        return redirect()->route('area.show', $area);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Area $area)
    {
        $area->delete();
        return redirect()->route('area.index');
    }
}
