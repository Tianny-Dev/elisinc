<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vehicle_types')->insert([
            [
                'name'       => 'Taxi Car',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'name'       => 'Bus',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'name'       => 'Tricycle',
                'updated_at' => now(),
                'created_at' => now(),
            ],
        ]);
    }
}
