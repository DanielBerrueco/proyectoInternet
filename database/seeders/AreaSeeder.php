<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Area;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Area::create([
            
                'piso'=>'Piso 1',
                'servicio'=>'Urgencias Adulto',
                'jefe_id'=>1,
                'ingBiomedico_id'=>6
        ]);
        Area::create([
            'piso'=>'Piso 2',
            'servicio'=>'Quirofano',
            'jefe_id'=>2,
            'ingBiomedico_id'=>7
        ]);
        Area::create([
            'piso'=>'Piso 3',
            'servicio'=>'Pediatria',
            'jefe_id'=>3,
            'ingBiomedico_id'=>8
        ]);
        Area::create([
            'piso'=>'Piso 4',
            'servicio'=>'Ginecologia',
            'jefe_id'=>4,
            'ingBiomedico_id'=>9
        ]);
        Area::create([
            'piso'=>'Piso 5',
            'servicio'=>'SECIN',
            'jefe_id'=>5,
            'ingBiomedico_id'=>10
        ]);
    }
}