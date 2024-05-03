<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Faker = Faker::create();
        User::create([
                'name'=>$Faker -> name,
                'email'=>$Faker -> unique()->safeEmail,
                'password'=>'$2y$12$shtABVkMlptgpCrE1TSf8ePsL2U49gfItbU1ombsPPu/J56gB2stC',
                'puesto'=>'Enfermero'
            ]);
        User::create([
                'name'=>$Faker -> name,
                'email'=>$Faker -> unique()->safeEmail,
                'password'=>'$2y$12$shtABVkMlptgpCrE1TSf8ePsL2U49gfItbU1ombsPPu/J56gB2stC',
                'puesto'=>'Enfermero'
            ]);
        User::create([
                'name'=>$Faker -> name,
                'email'=>$Faker -> unique()->safeEmail,
                'password'=>'$2y$12$shtABVkMlptgpCrE1TSf8ePsL2U49gfItbU1ombsPPu/J56gB2stC',
                'puesto'=>'Enfermero'
            ]);
        User::create([
                'name'=>$Faker -> name,
                'email'=>$Faker -> unique()->safeEmail,
                'password'=>'$2y$12$shtABVkMlptgpCrE1TSf8ePsL2U49gfItbU1ombsPPu/J56gB2stC',
                'puesto'=>'Enfermero'
            ]);
        User::create([
                'name'=>$Faker -> name,
                'email'=>$Faker -> unique()->safeEmail,
                'password'=>'$2y$12$shtABVkMlptgpCrE1TSf8ePsL2U49gfItbU1ombsPPu/J56gB2stC',
                'puesto'=>'Enfermero'
            ]);
        User::create([
                'name'=>$Faker -> name,
                'email'=>$Faker -> unique()->safeEmail,
                'password'=>'$2y$12$shtABVkMlptgpCrE1TSf8ePsL2U49gfItbU1ombsPPu/J56gB2stC',
                'puesto'=>'Biomedico'
            ]);
        User::create([
                'name'=>$Faker -> name,
                'email'=>$Faker -> unique()->safeEmail,
                'password'=>'$2y$12$shtABVkMlptgpCrE1TSf8ePsL2U49gfItbU1ombsPPu/J56gB2stC',
                'puesto'=>'Biomedico'
            ]);
        User::create([
                'name'=>$Faker -> name,
                'email'=>$Faker -> unique()->safeEmail,
                'password'=>'$2y$12$shtABVkMlptgpCrE1TSf8ePsL2U49gfItbU1ombsPPu/J56gB2stC',
                'puesto'=>'Biomedico'
            ]);
        User::create([
                'name'=>$Faker -> name,
                'email'=>$Faker -> unique()->safeEmail,
                'password'=>'$2y$12$shtABVkMlptgpCrE1TSf8ePsL2U49gfItbU1ombsPPu/J56gB2stC',
                'puesto'=>'Biomedico'
            ]);
        User::create([
                'name'=>$Faker -> name,
                'email'=>$Faker -> unique()->safeEmail,
                'password'=>'$2y$12$shtABVkMlptgpCrE1TSf8ePsL2U49gfItbU1ombsPPu/J56gB2stC',
                'puesto'=>'Biomedico'
            ]);
    }
}
