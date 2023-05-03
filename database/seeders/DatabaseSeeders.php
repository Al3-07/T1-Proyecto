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
        ]);
        $this->call ([
            EventoSeeder::class,
        ]);
        $this->call ([
            NotaSeeder::class,
        ]);
    }
}
