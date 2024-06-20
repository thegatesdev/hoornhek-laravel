<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CaseModelFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(3),
            'description' => fake()->realText(100),
        ];
    }
}
