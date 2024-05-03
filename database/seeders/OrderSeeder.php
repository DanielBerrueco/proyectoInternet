<?php

namespace Database\Seeders;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Equipment;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        Order::create([
            
            'stats' => 'En reparacion', 
            'jefa_id' => 1,
            'equipo_id' => 1,
            'ingBiomedico_id' => 6,
            'area_id' => 1,
            'ubicacion' => 'Cama 132',
            'falla' => 'No cicla',
            'fecha_ejecucion' => now() ,
        ]);

        Order::create([
            
            'stats' => 'En reparacion', 
            'jefa_id' => 2,
            'equipo_id' => 2,
            'ingBiomedico_id' => 7,
            'area_id' => 2,
            'ubicacion' => 'Quirofano 10',
            'falla' => 'Tiene fuga',
            'fecha_ejecucion' => now() ,
        ]);
        Order::create([
            
            'stats' => 'En reparacion', 
            'jefa_id' => 3,
            'equipo_id' => 3,
            'ingBiomedico_id' => 8,
            'area_id' => 3,
            'ubicacion' => 'Cama 302',
            'falla' => 'No funciona el sensor de Spo2',
            'fecha_ejecucion' => now() ,
        ]);
        Order::create([
            
            'stats' => 'En reparacion', 
            'jefa_id' => 2,
            'equipo_id' => 2,
            'ingBiomedico_id' => 7,
            'area_id' => 2,
            'ubicacion' => 'Quirofano 1',
            'falla' => 'No sube respaldo',
            'fecha_ejecucion' => now() ,
        ]);
        Order::create([
            
            'stats' => 'En reparacion', 
            'jefa_id' => 5,
            'equipo_id' => 5,
            'ingBiomedico_id' => 9,
            'area_id' => 5,
            'ubicacion' => 'Cama 510',
            'falla' => 'No marca la derivacion LL',
            'fecha_ejecucion' => now() ,
        ]);
    }
}

