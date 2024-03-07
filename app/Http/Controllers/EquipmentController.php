<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$equipments = Equipment::where(();
        $equipments = Equipment::all();
       
        return view('equipment/indexEquipment', compact('equipments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('equipment/createEquipment');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validar
        

        $request->validate([
          
            'nombre' =>   ['required', 'string', 'max:255'],
            'marca' =>   ['required', 'string', 'max:255'],
            'modelo' =>   ['required', 'string', 'max:255'],
            'n_serie' =>   ['required', 'string', 'max:255'],
            'status_eq_med' => ['required'],
            'id_area' =>   ['required', 'string', 'max:255'],
            'id_accesorio' =>   ['required', 'string', 'max:255'],
        ]);
        
        $equipment= new Equipment();
       
        $equipment->nombre = $request->nombre;
        $equipment->marca = $request->marca;
        $equipment->modelo = $request->modelo;
        $equipment->n_serie = $request->n_serie;
        $equipment->status_eq_med = $request->status_eq_med;
        $equipment->id_area = $request->id_area;
        $equipment->id_accesorio =  $request->id_accesorio;
        $equipment->save();

        return redirect()->route('equipment.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipment $equipment)
    {
      
        return view('equipment.showEquipment', compact('equipment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipment $equipment)
    {
        return view('equipment.editEquipment', compact('equipment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipment $equipment)
    {
        $request->validate([
          
            'nombre' =>   ['required', 'string', 'max:255'],
            'marca' =>   ['required', 'string', 'max:255'],
            'modelo' =>   ['required', 'string', 'max:255'],
            'n_serie' =>   ['required', 'string', 'max:255'],
            'status_eq_med' => ['required'],
            'id_area' =>   ['required', 'string', 'max:255'],
            'id_accesorio' =>   ['required', 'string', 'max:255'],
        ]);
        $equipment->update($request->all());
       /* $equipment->nombre = $request->nombre;
        $equipment->marca = $request->marca;
        $equipment->modelo = $request->modelo;
        $equipment->n_serie = $request->n_serie;
        $equipment->status_eq_med = $request->status_eq_med;
        $equipment->id_area = $request->id_area;
        $equipment->id_accesorio =  $request->id_accesorio;
        $equipment->save();*/
        
        return redirect()->route('equipment.show', $equipment);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipment $equipment)
    {
        $equipment->delete();
        return redirect()->route('equipment.index');
    }
}
