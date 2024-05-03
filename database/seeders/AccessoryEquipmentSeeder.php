<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Accessory;
use App\Models\Equipment;

class AccessoryEquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('accessory_equipment')->insert([
            'equipment_id'=>1,
            'accessory_id'=>1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('accessory_equipment')->insert([
            'equipment_id'=>1,
            'accessory_id'=>2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('accessory_equipment')->insert([
            'equipment_id'=>1,
            'accessory_id'=>4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('accessory_equipment')->insert([
            'equipment_id'=>2,
            'accessory_id'=>1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('accessory_equipment')->insert([
            'equipment_id'=>2,
            'accessory_id'=>3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('accessory_equipment')->insert([
            'equipment_id'=>2,
            'accessory_id'=>4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('accessory_equipment')->insert([
            'equipment_id'=>3,
            'accessory_id'=>1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('accessory_equipment')->insert([
            'equipment_id'=>3,
            'accessory_id'=>4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('accessory_equipment')->insert([
            'equipment_id'=>3,
            'accessory_id'=>5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('accessory_equipment')->insert([
            'equipment_id'=>4,
            'accessory_id'=>2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('accessory_equipment')->insert([
            'equipment_id'=>4,
            'accessory_id'=>3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('accessory_equipment')->insert([
            'equipment_id'=>4,
            'accessory_id'=>5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('accessory_equipment')->insert([
            'equipment_id'=>5,
            'accessory_id'=>2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('accessory_equipment')->insert([
            'equipment_id'=>5,
            'accessory_id'=>3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('accessory_equipment')->insert([
            'equipment_id'=>5,
            'accessory_id'=>4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
