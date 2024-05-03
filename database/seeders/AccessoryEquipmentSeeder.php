<?php

namespace Database\Seeders;

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
        db::table('accessory_equipment')->insert([
            'equipment_id'=>1,
            'accessory_id'=>1
        ]);
        db::table('accessory_equipment')->insert([
            'equipment_id'=>1,
            'accessory_id'=>2
        ]);
        db::table('accessory_equipment')->insert([
            'equipment_id'=>1,
            'accessory_id'=>4
        ]);

        db::table('accessory_equipment')->insert([
            'equipment_id'=>2,
            'accessory_id'=>1
        ]);
        db::table('accessory_equipment')->insert([
            'equipment_id'=>2,
            'accessory_id'=>3
        ]);
        db::table('accessory_equipment')->insert([
            'equipment_id'=>2,
            'accessory_id'=>4
        ]);

        db::table('accessory_equipment')->insert([
            'equipment_id'=>3,
            'accessory_id'=>1
        ]);
        db::table('accessory_equipment')->insert([
            'equipment_id'=>3,
            'accessory_id'=>4
        ]);

        db::table('accessory_equipment')->insert([
            'equipment_id'=>3,
            'accessory_id'=>5
        ]);

        db::table('accessory_equipment')->insert([
            'equipment_id'=>4,
            'accessory_id'=>2
        ]);
        db::table('accessory_equipment')->insert([
            'equipment_id'=>4,
            'accessory_id'=>3
        ]);
        db::table('accessory_equipment')->insert([
            'equipment_id'=>4,
            'accessory_id'=>5
        ]);

        db::table('accessory_equipment')->insert([
            'equipment_id'=>5,
            'accessory_id'=>2
        ]);
        db::table('accessory_equipment')->insert([
            'equipment_id'=>5,
            'accessory_id'=>3
        ]);
        db::table('accessory_equipment')->insert([
            'equipment_id'=>5,
            'accessory_id'=>4
        ]);
    }
}
