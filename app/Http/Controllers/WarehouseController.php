<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $warehouses = Warehouse::all();
        return view('warehouses/warehouseList', compact('warehouses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('warehouses/createWarehouse');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_accesorio' =>['required', 'integer'],
            'stock' => ['required', 'integer'],
            'min_stock' => ['required', 'integer'],
            'max_stock' => ['required', 'integer'],
        ]);

        $warehouse = new Warehouse();
        $warehouse->id_accesorio = $request->id_accesorio;
        $warehouse->stock = $request->stock;
        $warehouse->min_stock = $request->min_stock;
        $warehouse->max_stock = $request->max_stock;
        $warehouse->save();

        return redirect()->route('warehouse.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Warehouse $warehouse)
    {
        return view('warehouses/showWarehouse', compact('warehouse'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Warehouse $warehouse)
    {
        return view('warehouses/editWarehouse', compact('warehouse'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Warehouse $warehouse)
    {
        $request->validate([
            'id_accesorio' =>['required', 'integer'],
            'stock' => ['required', 'integer'],
            'min_stock' => ['required', 'integer'],
            'max_stock' => ['required', 'integer'],
        ]);

        $warehouse->id_accesorio = $request->id_accesorio;
        $warehouse->stock = $request->stock;
        $warehouse->min_stock = $request->min_stock;
        $warehouse->max_stock = $request->max_stock;
        $warehouse->save();

        return redirect()->route('warehouse.show', $warehouse);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Warehouse $warehouse)
    {
        $warehouse->delete();
        return redirect()->route('warehouse.index');
    }
}
