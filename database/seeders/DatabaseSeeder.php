<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Illuminate\Database\Seeder;
use App\Models\Area;
use App\Models\User;
use App\Models\Order;
use App\Models\Equipment;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
           EquipmentSeeder::class, 
           OrderSeeder::class, 
            UserSeeder::class,
            AreaSeeder::class
        ]);
    }
}
