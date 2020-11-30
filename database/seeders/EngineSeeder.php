<?php

namespace Database\Seeders;

use App\Models\Engine;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EngineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('engines')->insert([
            'id' => 1,
            'name' => 'V6',
            'type' => Engine::TYPE_GASOLINE,
            'size' => 2.0,
            'power' => 240,
            'mileage' => 84020,
        ]);
        DB::table('engines')->insert([
            'id' => 2,
            'name' => '1.4 TSI BlueMotion',
            'type' => Engine::TYPE_GASOLINE,
            'size' => 1.8,
            'power' => 122,
            'mileage' => 43235,
        ]);
        DB::table('engines')->insert([
            'id' => 3,
            'name' => 'V8',
            'type' => Engine::TYPE_DIESEL,
            'size' => 3.0,
            'power' => 187,
            'mileage' => 50000,
        ]);
        DB::table('engines')->insert([
            'id' => 4,
            'name' => 'V8',
            'type' => Engine::TYPE_DIESEL,
            'size' => 3.0,
            'power' => 231,
            'mileage' => 100000,
        ]);
    }
}
