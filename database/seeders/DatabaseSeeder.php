<?php

namespace Database\Seeders;

use App\Models\CaseModel;
use App\Models\CellOccupation;
use App\Models\Location;
use App\Models\Prisoner;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
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
    }
}
