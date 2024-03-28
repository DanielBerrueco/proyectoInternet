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
        $request->validate([
          
            
            'status' =>   ['required', 'string', 'max:255'],
            'jefa_id' =>   ['required', 'string', 'max:255'],
            'equipo_id' =>   ['required', 'string', 'max:255'],
            'area_id' =>  ['required', 'string', 'max:255'],
            'ubicacion' =>  ['required', 'string', 'max:255'],
            'falla' => 'required | string | min:5',
        ]);

        $order = new Order();
        $order->status = $request->status;
        $order->jefa_id = $request->jefa_id;
        $order->equipo_id = $request->equipo_id;
        $order->area_id = $request->area_id;
        $order->ubicacion = $request->ubicacion;
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
          
            
            'status' =>   ['required', 'string', 'max:255'],
            'jefa_id' =>   ['required', 'string', 'max:255'],
            'equipo_id' =>   ['required', 'string', 'max:255'],
            'area_id' =>  ['required', 'string', 'max:255'],
            'ubicacion' =>  ['required', 'string', 'max:255'],
            'falla' => 'required | string | min:5',
        ]);

        $order = new Order();
        $order->status = $request->status;
        $order->jefa_id = $request->jefa_id;
        $order->equipo_id = $request->equipo_id;
        $order->area_id = $request->area_id;
        $order->ubicacion = $request->ubicacion;
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
