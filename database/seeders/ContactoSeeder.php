<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run():void
    {
        DB::table('Contactos')->insert([
            'nombre'=>Str::random(10),
            'apellido'=>Str::random(10),
            'correo_electronico'=>Str::random(10).'@gmail.com',
            'telefono'=>Str::random(10),

        ]);
    
    }
}
