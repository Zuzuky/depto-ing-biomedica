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
        //
    }

    /**
     * Display the specified resource.
     */  
    public function show(AreaBoss $areaBoss)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AreaBoss $areaBoss)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AreaBoss $areaBoss)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AreaBoss $areaBoss)
    {
        //
    }
}
