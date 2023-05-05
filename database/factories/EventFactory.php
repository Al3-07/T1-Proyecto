<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Evento;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this -> faker->word,
            'descripcion' => $this -> faker->paragrahp,
            'fecha_inicio' => $this ->faker->datetime,
            'fecha_final' =>$this-> $faker->datetime,
        ];
    }
}
