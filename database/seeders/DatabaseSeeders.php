<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call ([
            ContactoSeeder::class,
            NotaSeeder::class,
            EventoSeeder::class,
        ]);
    }
}
