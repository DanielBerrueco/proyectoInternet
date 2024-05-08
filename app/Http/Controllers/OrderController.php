<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Middleware\middlewareOrdenes;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('middleware.ordenes')->only(['create', 'store']);
    }  

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with('equipment', 'area', 'user', 'user2')->get();
        return view('order/indexOrder', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Verificar que el usuario tenga el puesto de "Enfermero" antes de mostrar la vista
        
        return view('order/createOrder');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
          
            
            'stats' =>   ['required'],
            'jefa_id' =>   ['required', 'integer'],
            'equipo_id' =>   ['required', 'integer'],
            'ingBiomedico_id' =>   ['required', 'integer'],
            'area_id' =>  ['required', 'integer'],
            'ubicacion' =>  ['required', 'string', 'max:255'],
            'falla' => ['required', 'string', 'max:255'],
        ]); 
        
        $order = new Order();
        $order->stats = $request->stats;
        $order->jefa_id = $request->jefa_id;
        $order->equipo_id = $request->equipo_id;
        $order->ingBiomedico_id= $request->ingBiomedico_id;
        $order->area_id = $request->area_id;
        $order->ubicacion = $request->ubicacion;
        $order->falla = $request->falla;
        $order->fecha_ejecucion = now();
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
        $order->update($request->all());
          
      
        

        /*$order = new Order();
        $order->status = $request->status;
        $order->jefa_id = $request->jefa_id;
        $order->equipo_id = $request->equipo_id;
        $order->ingBiomedico_id= $request->ingBiomedico_id;
        $order->area_id = $request->area_id;
        $order->ubicacion = $request->ubicacion;
        $order->falla = $request->falla;
        $order->fecha_ejecucion = $request->fecha_ejecucion;
        $order->save();*/
        
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
