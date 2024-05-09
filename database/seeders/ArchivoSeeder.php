<?php

namespace Database\Seeders;

use App\Models\Archivo;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArchivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Archivo::create([
            'equipment_id' => '1',
            'ubicacion' => 'Manual Ventilador.pdf',
            'nombre_original' => 'Manual Ventilador.pdf',
            'mime' => 'application/pdf',
        ]);
        Archivo::create([
            'equipment_id' => '2',
            'ubicacion' => 'Manual Maquina Anestesia.pdf',
            'nombre_original' => 'Manual Maquina Anestesia.pdf',
            'mime' => 'application/pdf',
        ]);        
        Archivo::create([
            'equipment_id' => '3',
            'ubicacion' => 'Manual Monitor de Signos Vitales.pdf',
            'nombre_original' => 'Manual Monitor de Signos Vitales.pdf',
            'mime' => 'application/pdf',
        ]);        
        Archivo::create([
            'equipment_id' => '4',
            'ubicacion' => 'Manual Mesa Quirurgica.pdf',
            'nombre_original' => 'Manual Mesa Quirurgica.pdf',
            'mime' => 'application/pdf',
        ]);        
        Archivo::create([
            'equipment_id' => '5',
            'ubicacion' => 'Manual Electrocardiografo.pdf',
            'nombre_original' => 'Manual Electrocardiografo.pdf',
            'mime' => 'application/pdf',
        ]);
    }
}
