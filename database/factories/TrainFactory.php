<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'azienda' => fake()->company(),
            'stazione_partenza' => fake()->city(),
            'stazione_arrivo' => fake()->city(),
            'orario_partenza' => fake()->time('H_i_s'),
            'orario_arrivo' => fake()->time('H_i_s'),
            'codice_treno' => fake()->randomNumber(4, true),
            'numero_carrozze' => fake()->randomNumber(5, true),
            'in_orario' => rand(0 , 1),
            'cancellato' => rand(0 , 1)
        ];
    }
}
