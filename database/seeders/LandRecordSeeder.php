<?php

namespace Database\Seeders;

use App\Models\LandRecord;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LandRecordSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('land_records')->insert([
            [
                'parcel_id' => 'PARCEL001',
                'plot_number' => 'PLOT123',
                'owner_name' => 'John Doe',
                'address' => '123 Main St, Delhi',
                'area' => 500.50,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parcel_id' => 'PARCEL002',
                'plot_number' => 'PLOT456',
                'owner_name' => 'Jane Smith',
                'address' => '456 Park Ave, Delhi',
                'area' => 750.25,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        LandRecord::factory()->count(100)->create();
    }
}
