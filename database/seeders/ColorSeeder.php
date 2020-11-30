<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            'id' => 1,
            'name' => 'grey',
            'hex' => 'eeeeee',
        ]);
        DB::table('colors')->insert([
            'id' => 2,
            'name' => 'royal blue',
            'hex' => '4169e1',
        ]);
        DB::table('colors')->insert([
            'id' => 3,
            'name' => 'orange red',
            'hex' => 'ffa500',
        ]);
        DB::table('colors')->insert([
            'id' => 4,
            'name' => 'red',
            'hex' => 'cc0000',
        ]);
    }
}
