<?php

namespace App\Http\Controllers;

use App\Models\Petition;
use Illuminate\Http\Request;

class PetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petitions=Petition::all();
        return view('petitions/listaPetition', compact('petitions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('petitions/agregarPetition');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'accesorio_id'=>['required', 'string'],
            'equipo_id'=>['required', 'string'],
            'ingBiomedico_id'=>['required', 'string']
        ]);
        $peticion=new Petition();
        $peticion->accesorio_id=$request->accesorio_id;
        $peticion->equipo_id=$request->equipo_id;
        $peticion->ingBiomedico_id=$request->ingBiomedico_id;
        date_default_timezone_set('America/Mexico_City');
        $peticion->fecha_hora=date('Y/m/d h:i:s', time());
        $peticion->save();
        return redirect()->route('petition.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Petition $petition)
    {
        return view('petitions/showPetition', compact('petition'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Petition $petition)
    {
        return view('petitions/editPetition', compact('petition'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Petition $petition)
    {
        $request->validate([
            'accesorio_id'=>['required', 'string'],
            'equipo_id'=>['required', 'string'],
            'ingBiomedico_id'=>['required', 'string']
        ]);
        $petition->accesorio_id=$request->accesorio_id;
        $petition->equipo_id=$request->equipo_id;
        $petition->ingBiomedico_id=$request->ingBiomedico_id;
        $petition->save();
        return redirect()->route('petition.show', $petition);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petition $petition)
    {
        $petition->delete();
        return redirect()->route('petition.index');
    }
}
