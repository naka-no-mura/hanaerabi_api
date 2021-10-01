<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seasons')->insert([
            [
                'id' => 1,
                'season' => '春'
            ],
            [
                'id' => 2,
                'season' => '夏'
            ],
            [
                'id' => 3,
                'season' => '秋'
            ],
            [
                'id' => 4,
                'season' => '冬'
            ]
        ]);
    }
}