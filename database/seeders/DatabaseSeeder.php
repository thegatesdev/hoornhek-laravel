<?php

namespace Database\Seeders;

use App\Models\CaseModel;
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
        $cases = CaseModel::factory(35)->create();
        $cellIdx = 0;

        foreach ($prisoners as $prisoner) {
            $case = $cases->random();
            $prisoner->cases()->attach($case, ['reason' => fake()->realTextBetween(20, 40)]);
            $caseId = $prisoner->cases()->first()->link->id;
            if (fake()->boolean(70)) {
                CellOccupation::factory()->create([
                    'location_id' => $location,
                    'case_prisoner_id' => $caseId,
                    'cell' => $cellIdx++,
                ]);
            }
        }

        $randomCase = CaseModel::all()->random();
        echo "Case {$randomCase->id}" . PHP_EOL;
        foreach ($randomCase->prisoners as $prisoner) {
            echo "-> Prisoner {$prisoner->id}" . PHP_EOL;
        }
        foreach ($randomCase->cell_occupations as $occupation) {
            echo "-> Occupation {$occupation->id} in {$occupation->location->city}" . PHP_EOL;
        }
    }
}
