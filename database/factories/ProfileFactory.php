<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    public function definition(): array
    {
        $startCity = fake()->city();
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'bsn' => fake()->randomNumber(9),
            'address' => fake()->streetAddress(),
            'city' => $startCity,
            'date_of_birth' => fake()->dateTimeThisCentury(),
            'place_of_birth' => fake()->boolean(70) ? $startCity : fake()->city(),
        ];
    }
}
