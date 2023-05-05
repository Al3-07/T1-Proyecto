<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Notas')->insert([
            'texto'=>Str::random(10),
            'fecha'=>Str::random(10),
            

        ]);
    

    }
}
