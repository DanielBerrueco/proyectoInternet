<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Archivo;
use Illuminate\Database\Seeder;
use App\Models\Area;
use App\Models\User;
use App\Models\Order;
use App\Models\Equipment;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserSeeder::class,
            AreaSeeder::class,
            AccessorySeeder::class,
            EquipmentSeeder::class, 
            OrderSeeder::class, 
            AccessoryEquipmentSeeder::class,
            PetitionSeeder::class,
            ArchivoSeeder::class,
        ]);
    }
}
