<?php

namespace Database\Seeders;

use App\Models\Accessory;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccessorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Accessory::create([
                'nombre' => 'Cable de ECG',
                'stock' => 50,
                'minimo' => 20,
                'ubicacion' => 'C-1',
            ]);

        Accessory::create([
                'nombre' => 'Sensor de SpO2',
                'stock' => 30,
                'minimo' => 20,
                'ubicacion' => 'S-5',
            ]);
        
        Accessory::create([
                'nombre' => 'Sensor de temperatura',
                'stock' => 65,
                'minimo' => 20,
                'ubicacion' => 'S-5',
            ]);
        
        Accessory::create([
                'nombre' => 'Brazalete de dos vías adulto',
                'stock' => 15,
                'minimo' => 10,
                'ubicacion' => 'B-18',
            ]);

        Accessory::create([
                'nombre' => 'Juego de perillas precordiales',
                'stock' => 23,
                'minimo' => 20,
                'ubicacion' => 'J-10',
            ]);
    }
}