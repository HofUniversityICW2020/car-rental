<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            'id' => 1,
            'vin' => 'WAUZZZF40GA007267',
            'model_id' => 1,
            'color_id' => 1,
            'engine_id' => 1,
            'price' => 80.0,
            'available' => true,
        ]);
        DB::table('cars')->insert([
            'id' => 2,
            'vin' => 'WBAAl32040AZ13247',
            'model_id' => 4,
            'color_id' => 2,
            'engine_id' => 2,
            'price' => 75.5,
            'available' => true,
        ]);
        DB::table('cars')->insert([
            'id' => 3,
            'vin' => 'WDB2030921F819990',
            'model_id' => 2,
            'color_id' => 3,
            'engine_id' => 3,
            'price' => 90.0,
            'available' => true,
        ]);
        DB::table('cars')->insert([
            'id' => 4,
            'vin' => 'WDDGF8BB7AF458309',
            'model_id' => 3,
            'color_id' => 4,
            'engine_id' => 4,
            'price' => 95.0,
            'available' => true,
        ]);
    }
}
