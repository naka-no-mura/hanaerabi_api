<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlowerSeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flower_season')->insert([
            [
                'season_id' => 1,
                'flower_id' => 18,
            ],
            [
                'season_id' => 1,
                'flower_id' => 21,
            ],
            [
                'season_id' => 1,
                'flower_id' => 26,
            ],
            [
                'season_id' => 1,
                'flower_id' => 24,
            ],
            [
                'season_id' => 1,
                'flower_id' => 25,
            ],
            [
                'season_id' => 1,
                'flower_id' => 27,
            ],
            [
                'season_id' => 1,
                'flower_id' => 5,
            ],
            [
                'season_id' => 2,
                'flower_id' => 8,
            ],
            [
                'season_id' => 2,
                'flower_id' => 9,
            ],
            [
                'season_id' => 2,
                'flower_id' => 10,
            ],
            [
                'season_id' => 2,
                'flower_id' => 11,
            ],
            [
                'season_id' => 2,
                'flower_id' => 12,
            ],
            [
                'season_id' => 2,
                'flower_id' => 13,
            ],
            [
                'season_id' => 2,
                'flower_id' => 14,
            ],
            [
                'season_id' => 2,
                'flower_id' => 15,
            ],
            [
                'season_id' => 3,
                'flower_id' => 1,
            ],
            [
                'season_id' => 3,
                'flower_id' => 2,
            ],
            [
                'season_id' => 3,
                'flower_id' => 3,
            ],
            [
                'season_id' => 3,
                'flower_id' => 4,
            ],
            [
                'season_id' => 3,
                'flower_id' => 5,
            ],
            [
                'season_id' => 3,
                'flower_id' => 6,
            ],
            [
                'season_id' => 3,
                'flower_id' => 7,
            ],
            [
                'season_id' => 4,
                'flower_id' => 16,
            ],
            [
                'season_id' => 4,
                'flower_id' => 17,
            ],
            [
                'season_id' => 4,
                'flower_id' => 18,
            ],
            [
                'season_id' => 4,
                'flower_id' => 19,
            ],
            [
                'season_id' => 4,
                'flower_id' => 20,
            ],
            [
                'season_id' => 4,
                'flower_id' => 21,
            ],
            [
                'season_id' => 4,
                'flower_id' => 22,
            ],
            [
                'season_id' => 4,
                'flower_id' => 23,
            ],
            [
                'season_id' => 4,
                'flower_id' => 24,
            ],
            [
                'season_id' => 4,
                'flower_id' => 25,
            ],
        ]);
    }
}