<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prisoner>
 */
class PrisonerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bsn' => fake()->randomNumber(9),
            'name' => fake()->name(),
            'address' => fake()->streetAddress(),
            'city' => fake()->city()
        ];
    }
}
