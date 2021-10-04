<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Flower;
use App\Models\Meaning;
use App\Models\Season;

class FlowerController extends Controller
{
    public function flower($season_id, $meaning_id)
    {
        // 花言葉と合致する花データを取得（複数の可能性あり）
        $meaning_flowers = Meaning::where('id', $meaning_id)->with('flower')->first();
        // ①花データのみ取得
        $flowers = $meaning_flowers->flower;

        // 季節と合致する花データを取得（複数取得）
        $season_flowers = Season::find($season_id)->flower;
        // ②花データのidのみ配列で取得
        foreach ($season_flowers as $season_flower) {
            $search_flower_ids[] = $season_flower->id;
        }

        // ①のidと②のidを比較して合致したflower.idの情報と花言葉返す
        foreach ($flowers as $flower) {
            $flower_id = $flower->id;
            if(in_array($flower_id, $search_flower_ids)){
                $meaning_info['meaning'] = collect(Meaning::find($meaning_id)->first());
                $flower_info['flower'] = $flower;
                $res = array_merge($flower_info, $meaning_info);
            } else {
                $res['error'] = '季節と花言葉に合致する花が存在しません';
            }
        }
        return response()->json($res);
    }
}
