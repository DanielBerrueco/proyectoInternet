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
            'fecha_hora' => now(),
            'accesorio_id' => 1,
            'equipo_id' => 1,
            'ingBiomedico_id' => 6,
        ]);

        Petition::create([
            'fecha_hora' => now(),
            'accesorio_id' => 2,
            'equipo_id' => 2,
            'ingBiomedico_id' => 7,
            ]);

        Petition::create([
            'fecha_hora' => now(),
            'accesorio_id' => 3,
            'equipo_id' => 3,
            'ingBiomedico_id' => 8,
        ]);

        Petition::create([
            'fecha_hora' => now(),
            'accesorio_id' => 4,
            'equipo_id' => 4,
            'ingBiomedico_id' => 9,
        ]);

        Petition::create([
            'fecha_hora' => now(),
            'accesorio_id' => 5,
            'equipo_id' => 4,
            'ingBiomedico_id' => 10,
        ]);
    }
}
