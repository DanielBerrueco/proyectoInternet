<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use App\Models\Archivo;
use App\Models\Area;
use App\Models\Equipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipments = Equipment::with('area', 'accessory')->get();
        return view('equipment/indexEquipment', compact('equipments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $areas = Area::all();
        return view('equipment/createEquipment', compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
          
            'nombre' =>   ['required', 'string', 'max:255'],
            'marca' =>   ['required', 'string', 'max:255'],
            'modelo' =>   ['required', 'string', 'max:255'],
            'n_serie' =>   ['required', 'string', 'max:255'],
            'status_eq_med' => ['required'],
            'area_id' =>   ['required', 'integer'],
            'archivo' =>['required', 'file', 'mimes:pdf'],
            
        ]);

        $equipment=Equipment::create($request->all());

        if ($request->file('archivo')->isValid()){
            $ruta=$request->archivo->store('', 'public');

            $archivo = new Archivo();
            $archivo->ubicacion=$ruta;
            $archivo->nombre_original = $request->archivo->getClientOriginalName();
            $archivo->mime = $request->archivo->getClientMimeType();
            $archivo->equipment_id = $equipment->id;
            $archivo->save();
        }

        return redirect()->route('equipment.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipment $equipment)
    {
        $accessoryNames = $equipment->accessory->pluck('nombre');
        $accessories[$equipment->id] = $accessoryNames;
        return view('equipment.showEquipment', compact('equipment', 'accessories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipment $equipment)
    {
        return view('equipment.editEquipment', compact('equipment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipment $equipment)
    {
        $request->validate([
          
            'nombre' =>   ['required', 'string', 'max:255'],
            'marca' =>   ['required', 'string', 'max:255'],
            'modelo' =>   ['required', 'string', 'max:255'],
            'n_serie' =>   ['required', 'string', 'max:255'],
            'status_eq_med' => ['required'],
            'area_id' =>   ['required', 'integer'],
            'archivo' =>['nullable', 'file', 'mimes:pdf'],
            
        ]);

        $equipment->update($request->except('archivo'));

        if ($request->hasFile('archivo') && $request->file('archivo')->isValid()) {
            $archivoAnterior = $equipment->archivo;
            if ($archivoAnterior) {
                Storage::disk('public')->delete($archivoAnterior->ubicacion);
                $archivoAnterior->delete();
            }
            
            $ruta = $request->archivo->store('', 'public');

            $archivoNuevo = new Archivo();
            $archivoNuevo->ubicacion = $ruta;
            $archivoNuevo->nombre_original = $request->archivo->getClientOriginalName();
            $archivoNuevo->mime = $request->archivo->getClientMimeType();
            $archivoNuevo->equipment_id = $equipment->id;
            $archivoNuevo->save();
        }


        return redirect()->route('equipment.show', $equipment);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipment $equipment)
    {
        $equipment->delete();
        return redirect()->route('equipment.index');
    }

    public function download(Archivo $archivo)
    {
        return response()->download(storage_path('app/public/' . $archivo->ubicacion), $archivo->nombre_original);
    }
}
