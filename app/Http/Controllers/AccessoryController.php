<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use Illuminate\Http\Request;

class AccessoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accesories = Accessory::all();
        return view('accesories/accesoriesList', compact('accesories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('accesories/createAccessory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar datos
        $request->validate([
            'nombre' => ['required', 'string', 'max:255', 'min:10'],
            'marca' => ['required', 'string', 'max:255'],
            'modelo'=> ['required', 'string', 'max:255'],
        ]);

        $accesorio = new Accessory();
        $accesorio->nombre = $request->nombre;
        $accesorio->marca = $request->marca;
        $accesorio->modelo = $request->modelo;
        $accesorio->save();

        return redirect()->route('accessory.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Accessory $accessory)
    {
        return view('accesories/showAccessory', compact('accessory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Accessory $accessory)
    {
        return view('accesories/editAccessory', compact('accessory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Accessory $accessory)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'max:255', 'min:10'],
            'marca' => ['required', 'string', 'max:255'],
            'modelo'=> ['required', 'string', 'max:255'],
        ]);
        $accessory->nombre = $request->nombre;
        $accessory->marca = $request->marca;
        $accessory->modelo = $request->modelo;
        $accessory->save();

        return redirect()->route('accessory.show', $accessory);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accessory $accessory)
    {
        $accessory->delete();
        return redirect()->route('accessory.index');
    }
}
