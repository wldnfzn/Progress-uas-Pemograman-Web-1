<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    public function run()
    {
        DB::table('level')->insert([
            [
                'id' => 1,
                'name' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Officer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
