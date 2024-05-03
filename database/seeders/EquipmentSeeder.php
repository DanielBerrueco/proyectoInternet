<?php

namespace Database\Seeders;

use App\Models\Equipment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Equipment::create([
            
                'nombre' => 'Ventilador', 
                'marca' => 'Drager',
                'modelo' => 'Evita',
                'n_serie' => 'KFDE-0256',
                'status_eq_med' => 'Funcionando',
                'area_id' => 1,
            ]);
            Equipment::create([
                'nombre' => 'Maquina Anestesia', 
                'marca' => 'Datex',
                'modelo' => 'Aespire 7100',
                'n_serie' => 'tgh456544',
                'status_eq_med' => 'Funcionando',
                'area_id' => 2,
            ]);
            Equipment::create([
                'nombre' => 'Monitor de Signos Vitales', 
                'marca' => 'Mindray',
                'modelo' => 'PM-60',
                'n_serie' => '588926',
                'status_eq_med' => 'Funcionando',
                'area_id' => 3,
            ]);
            Equipment::create([
                'nombre' => 'Mesa Quirurgica', 
                'marca' => 'STERIS',
                'modelo' => 'E-896',
                'n_serie' => '964578',
                'status_eq_med' => 'Funcionando',
                'area_id' => 4,
            ]);
            Equipment::create([
                'nombre' => 'Electrocardiografo', 
                'marca' => 'HP',
                'modelo' => 'PAGEWRITE',
                'n_serie' => 'YD8885',
                'status_eq_med' => 'Funcionando',
                'area_id' => 5,
            ]);
    }
}
