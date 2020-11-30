<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('models')->insert([
            'id' => 1,
            'name' => 'A4 2016',
            'brand_id' => 1,
        ]);
        DB::table('models')->insert([
            'id' => 2,
            'name' => 'C 280 4matic',
            'brand_id' => 2,
        ]);
        DB::table('models')->insert([
            'id' => 3,
            'name' => 'C 300 4matic',
            'brand_id' => 2,
        ]);
        DB::table('models')->insert([
            'id' => 4,
            'name' => 'Golf',
            'brand_id' => 3,
        ]);
    }
}
