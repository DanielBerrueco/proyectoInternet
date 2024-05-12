<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\User;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $areas = Area::with('user', 'user2')->get();
        return view('areas/listaArea', compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bosses = User::where('puesto', 'Enfermero')->get();
        $biomedics = User::where('puesto', 'Ingeniero biomedico')->get();
        return view('areas/agregarArea', compact('biomedics', 'bosses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
            'piso'=>['required','string'],
            'servicio'=>['required','string'],
            'jefe_id'=>['required','string', 'not_in:'],
            'ingBiomedico_id'=>['required','string', 'not_in:'],
       ]);
       $area=new Area();
       $area->piso=$request->piso;
       $area->servicio=$request->servicio;
       $area->jefe_id=$request->jefe_id;
       $area->ingBiomedico_id=$request->ingBiomedico_id;
       $area->save();
       return redirect()->route('areas.index');
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
        $bosses = User::where('puesto', 'Enfermero')->get();
        $biomedics = User::where('puesto', 'Ingeniero biomedico')->get();
        $selectedBoss = $area->user2->name;
        $selectedBiomedic = $area->user->name;
        return view('areas/editArea', compact('area', 'biomedics', 'bosses', 'selectedBoss', 'selectedBiomedic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Area $area)
    {
        $request->validate([
            'piso'=>['required','string'],
            'servicio'=>['required','string'],
            'jefe_id'=>['required','string'],
            'ingBiomedico_id'=>['required','string'],
       ]);
       $area->piso=$request->piso;
       $area->servicio=$request->servicio;
       $area->jefe_id=$request->jefe_id;
       $area->ingBiomedico_id=$request->ingBiomedico_id;
       $area->save();
       return redirect()->route('areas.show', $area);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Area $area)
    {
        $area->delete();
        return redirect()->route('areas.index');
    }
}
