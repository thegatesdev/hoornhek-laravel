<?php

namespace Database\Seeders;

use App\Models\Location;
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
    }
}
