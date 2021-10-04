<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Flower;
use App\Models\Season;

class MeaningController extends Controller
{
    public function meanings($season_id)
    {
        $res_season_id['season_id'] = $season_id;
        $season_flowers = Season::find($season_id)->flower;
        foreach ($season_flowers as $season_flower) {
            $season_meanings[] = Flower::find($season_flower->id)->meaning;
        }
        foreach ($season_meanings as $season_meaning) {
            foreach ($season_meaning as $meaning) {
                $res_meanings['meanings'][] = $meaning;
            }
        }
        $res = array_merge($res_season_id, $res_meanings);
        return response()->json($res);
    }
}