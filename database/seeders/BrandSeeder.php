<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'id' => 1,
            'name' => 'Audi'
        ]);
        DB::table('brands')->insert([
            'id' => 2,
            'name' => 'Mercedes Benz'
        ]);
        DB::table('brands')->insert([
            'id' => 3,
            'name' => 'Volkswagen'
        ]);
    }
}
