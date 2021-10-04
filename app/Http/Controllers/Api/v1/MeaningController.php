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
        $season_flowers = Season::find($season_id)->flower;
        foreach ($season_flowers as $season_flower) {
            $season_meanings[] = Flower::find($season_flower->id)->meaning->first();
        }
        return response()->json($season_meanings);
    }
}