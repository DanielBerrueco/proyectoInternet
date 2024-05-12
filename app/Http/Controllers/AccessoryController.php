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
        $accessories = Accessory::all();
        return view('accessories/accessoriesList', compact('accessories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('accessories/createAccessory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'stock' => ['required', 'integer', 'min:0'],
            'minimo' => ['required', 'integer', 'min:0'],
            'ubicacion' => ['required', 'string', 'max:255'],
        ]);

        $accessorio = new Accessory();
        $accessorio -> nombre = $request -> nombre;
        $accessorio -> stock = $request -> stock;
        $accessorio -> minimo = $request ->minimo;
        $accessorio -> ubicacion = $request -> ubicacion;
        $accessorio -> save();

        return redirect() -> route('accessory.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Accessory $accessory)
    {
        return view('accessories/detailsAccessory', compact('accessory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Accessory $accessory)
    {
        return view('accessories/editAccessory', compact('accessory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Accessory $accessory)
    {
        $request-> validate([
            'nombre' => ['required', 'string', 'max:255'],
            'stock' => ['required', 'integer'],
            'minimo' => ['required', 'integer'],
            'ubicacion' => ['required', 'string', 'max:255'],
        ]);
        $accessory -> nombre = $request -> nombre;
        $accessory -> stock = $request -> stock;
        $accessory -> minimo = $request ->minimo;
        $accessory -> ubicacion = $request -> ubicacion;
        $accessory -> save();

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
