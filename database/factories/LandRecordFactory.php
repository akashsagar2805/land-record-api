<?php

namespace Database\Factories;

use App\Models\LandRecord;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class LandRecordFactory extends Factory
{
    protected $model = LandRecord::class;

    public function definition(): array
    {
        $faker = Faker::create('en_IN');

        return [
            'parcel_id' => 'PARCEL' . $faker->unique()->numberBetween(1000, 9999),
            'plot_number' => 'PLOT' . $faker->numberBetween(100, 999),
            'owner_name' => $faker->name,
            'address' => $faker->address,
            'area' => $faker->randomFloat(2, 100, 2000),
            'status' => $faker->randomElement(['active', 'inactive', 'pending']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
