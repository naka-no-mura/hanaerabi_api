<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeaningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meanings')->insert([
            [
                'id' => 1,
                'meaning' => '辛抱強さ'
            ],
            [
                'id' => 2,
                'meaning' => '冷酷'
            ],
            [
                'id' => 3,
                'meaning' => 'あこがれ'
            ],
            [
                'id' => 4,
                'meaning' => '熱愛'
            ],
            [
                'id' => 5,
                'meaning' => '清明'
            ],
            [
                'id' => 6,
                'meaning' => '威厳'
            ],
            [
                'id' => 7,
                'meaning' => '純愛'
            ],
            [
                'id' => 8,
                'meaning' => '優美'
            ],
            [
                'id' => 9,
                'meaning' => '希望'
            ],
            [
                'id' => 10,
                'meaning' => '気取り'
            ],
            [
                'id' => 11,
                'meaning' => '風変わり'
            ],
            [
                'id' => 12,
                'meaning' => '持続'
            ],
            [
                'id' => 13,
                'meaning' => '未来への憧れ'
            ],
            [
                'id' => 14,
                'meaning' => '清らかな心'
            ],
            [
                'id' => 15,
                'meaning' => '幸福'
            ],
            [
                'id' => 16,
                'meaning' => '変わらぬ心'
            ],
            [
                'id' => 17,
                'meaning' => '途絶えぬ記憶'
            ],
            [
                'id' => 18,
                'meaning' => '調和'
            ],
            [
                'id' => 19,
                'meaning' => '謙虚'
            ],
            [
                'id' => 20,
                'meaning' => '高潔'
            ],
            [
                'id' => 21,
                'meaning' => '高尚'
            ],
            [
                'id' => 22,
                'meaning' => '華麗'
            ],
            [
                'id' => 23,
                'meaning' => '不安定'
            ],
            [
                'id' => 24,
                'meaning' => '正義'
            ],
            [
                'id' => 25,
                'meaning' => '誠実'
            ],
            [
                'id' => 26,
                'meaning' => '常に前進'
            ],
            [
                'id' => 27,
                'meaning' => '我慢強さ'
            ],
            [
                'id' => 28,
                'meaning' => '変化'
            ],
            [
                'id' => 29,
                'meaning' => 'もの思い'
            ],
            [
                'id' => 30,
                'meaning' => '魔力'
            ],
            [
                'id' => 31,
                'meaning' => '魅惑的'
            ],
            [
                'id' => 32,
                'meaning' => '配慮'
            ],
            [
                'id' => 33,
                'meaning' => '気後れ'
            ],
            [
                'id' => 34,
                'meaning' => 'はかない美しさ'
            ],
            [
                'id' => 35,
                'meaning' => '愛らしさ'
            ],
            [
                'id' => 36,
                'meaning' => '秘密の恋'
            ],
            [
                'id' => 37,
                'meaning' => '友情'
            ],
            [
                'id' => 38,
                'meaning' => 'うぬぼれ'
            ],
            [
                'id' => 39,
                'meaning' => '自己愛'
            ],
            [
                'id' => 40,
                'meaning' => 'あどけなさ'
            ],
            [
                'id' => 41,
                'meaning' => '親愛の情'
            ],
            [
                'id' => 42,
                'meaning' => '思いやり'
            ],
            [
                'id' => 43,
                'meaning' => 'いい便り'
            ],
            [
                'id' => 44,
                'meaning' => '希望'
            ],
            [
                'id' => 45,
                'meaning' => '遊び'
            ],
            [
                'id' => 46,
                'meaning' => 'スポーツ'
            ],
            [
                'id' => 47,
                'meaning' => '魅力的'
            ],
            [
                'id' => 48,
                'meaning' => '儚い恋'
            ],
            [
                'id' => 49,
                'meaning' => '恋の苦しみ'
            ],
            [
                'id' => 50,
                'meaning' => '愛'
            ],
            [
                'id' => 51,
                'meaning' => '美'
            ],
            [
                'id' => 52,
                'meaning' => '無垢な愛'
            ],
        ]);
    }
}