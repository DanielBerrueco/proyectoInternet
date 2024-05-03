<?php

namespace Database\Seeders;

use App\Models\Petition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Petition::create([
            'fecha_hora' => '',
            'accesosio_id' => '',
            'equipo_id' => '',
            'ingBiomedico_id' => '',
        ]);

        Petition::create([
            'fecha_hora' => '',
            'accesosio_id' => '',
            'equipo_id' => '',
            'ingBiomedico_id' => '',
            ]);

        Petition::create([
            'fecha_hora' => '',
            'accesosio_id' => '',
            'equipo_id' => '',
            'ingBiomedico_id' => '',
        ]);

        Petition::create([
            'fecha_hora' => '',
            'accesosio_id' => '',
            'equipo_id' => '',
            'ingBiomedico_id' => '',
        ]);

        Petition::create([
            'fecha_hora' => '',
            'accesosio_id' => '',
            'equipo_id' => '',
            'ingBiomedico_id' => '',
        ]);
    }
}
