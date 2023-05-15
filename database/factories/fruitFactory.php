<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\fruit>
 */
class fruitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=>fake()->lexify('frutas-???????'),
            'temporada'=>fake()->randomNumber(2),
            'pais'=>fake()->state()
        ];
    }
}
