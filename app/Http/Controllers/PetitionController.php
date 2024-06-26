<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use App\Models\Equipment;
use App\Models\Petition;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\LaravelIgnition\Exceptions\ViewExceptionWithSolution;

class PetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petitions = Petition::with('equipment', 'accessory', 'user')->get();
        return view('petitions/petitionsList', compact('petitions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $accessories = Accessory::all();
        $equipment = Equipment::all();
        return view('petitions/createPetition', compact('accessories', 'equipment'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'accesorio_id' => ['required', 'integer', 'not_in:'],
            'equipo_id' => ['required', 'integer', 'not_in:'],
        ]);

        $peticion = new Petition();
        $peticion -> fecha_hora = now();
        $peticion -> accesorio_id = $request -> accesorio_id;
        $peticion -> equipo_id = $request -> equipo_id;
        $peticion -> ingBiomedico_id = auth()->user()->id;
        $peticion -> save();

        return redirect() -> route('petition.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Petition $petition)
    {
        return view('petitions/detailsPetition', compact('petition'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Petition $petition)
    {
        $accessories = Accessory::all();
        $equipment = Equipment::all();
        $selectedEquip = $petition->equipment->nombre;
        $selectedAccessory = $petition->accessory->nombre;
        return view('petitions/editPetition', compact('petition', 'accessories', 'equipment', 'selectedEquip', 'selectedAccessory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Petition $petition)
    {
        $request -> validate([
            'accesorio_id' => ['required', 'integer'],
            'equipo_id' => ['required', 'integer'],
        ]);

        $petition -> accesorio_id = $request -> accesorio_id;
        $petition -> equipo_id = $request -> equipo_id;
        $petition -> update();

        return redirect()->route('petition.show', compact('petition'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petition $petition)
    {
        $petition -> delete();
        return redirect() -> route('petition.index');
    }
}
