<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Eventos')->insert([
            'titulo'=>Str::random(10),
            'descripcion'=>Str::random(10),
            'fecha_inicio'=>Str::random(10),
            'fecha_fin'=>Str::random(10),

        ]);
    
    }
}
