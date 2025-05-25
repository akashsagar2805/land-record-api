<?php

namespace Database\Seeders;

use App\Models\LandRecord;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LandRecordSeeder extends Seeder
{
   public function run(): void
    {
        LandRecord::factory()->count(100)->create();
    }
}
