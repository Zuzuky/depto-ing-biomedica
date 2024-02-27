<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        //dd($reportes); para debuguear
        return view('order/indexOrder', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('order/createOrder');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //Validar
        

        $request->validate([
          
            'id_jefa' =>   ['required', 'string', 'max:255'],
            'id_eq_med' =>   ['required', 'string', 'max:255'],
            'id_ing_biomed' =>   ['required', 'string', 'max:255'],
            'id_area' =>  ['required', 'string', 'max:255'],
            'falla' => 'required | string | min:5',
        ]);

        $order = new Order();
        $order->id_jefa = $request->id_jefa;
        $order->id_eq_med = $request->id_eq_med;
        $order->id_ing_biomed = $request->id_ing_biomed;
        $order->id_area = $request->id_area;
        $order->falla = $request->falla;
        $order->save();

        return redirect()->route('order.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return view('order.showOrder', compact('order'));
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        return view('order.editOrder', compact('order'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {

        $request->validate([
          
            'id_jefa' =>   ['required', 'string', 'max:255'],
            'id_eq_med' =>   ['required', 'string', 'max:255'],
            'id_ing_biomed' =>   ['required', 'string', 'max:255'],
            'id_area' =>  ['required', 'string', 'max:255'],
            'falla' => 'required | string | min:5',
        ]);


        $order->id_jefa = $request->id_jefa;
        $order->id_eq_med = $request->id_eq_med;
        $order->id_ing_biomed = $request->id_ing_biomed;
        $order->id_area  = $request->id_area ;
        $order->falla = $request->falla;
        $order->save();
        
        return redirect()->route('order.show', $order);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('order.index');
    }
}
