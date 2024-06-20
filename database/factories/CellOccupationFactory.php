<?php

namespace Database\Factories;

use App\Models\CaseModel;
use App\Models\Location;
use App\Models\Prisoner;
use Illuminate\Database\Eloquent\Factories\Factory;

class CellOccupationFactory extends Factory
{
    public function definition(): array
    {
        return [
            'prisoner_id' => Prisoner::factory(),
            'location_id' => Location::factory(),
            'case_id' => CaseModel::factory(),
            'cell' => fake()->numberBetween(0, 200),
            'start_time' => fake()->dateTimeBetween('-30 years', 'now'),
            'end_time' => fake()->dateTimeBetween('now', '5 years'),
        ];
    }
}
