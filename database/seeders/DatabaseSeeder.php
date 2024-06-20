<?php

namespace Database\Seeders;

use App\Models\CasePrisoner;
use App\Models\CellOccupation;
use App\Models\Location;
use App\Models\Prisoner;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    private static function get_used_cell_count(int $max): int
    {
        return max(10, $max - fake()->numberBetween(10, $max));
    }

    public function run(): void
    {
        $location = Location::factory()->createOne();
        User::factory(10)->create([
            'location_id' => $location,
        ]);
        User::factory()->create([
            'email' => 'admin@example.com',
            'password' => 'password',
            'location_id' => $location,
        ]);

        $prisoners = Prisoner::factory(40)->create();

        foreach ($prisoners as $prisoner) {
            // TODO case_prisoner does not need to hold 'cell_occupation_id', it's just a many to many.
            // TODO make cell_occupations hold 'case_id' instead to link to case
        }
    }
}
