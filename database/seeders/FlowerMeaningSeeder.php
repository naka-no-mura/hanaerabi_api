<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlowerMeaningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flower_meaning')->insert([
            [
                'flower_id' => 1, //コスモス
                'meaning_id' => 18, //調和
            ],
            [
                'flower_id' => 1, //コスモス
                'meaning_id' => 19, //謙虚
            ],
            [
                'flower_id' => 2, //キク
                'meaning_id' => 20, //高潔
            ],
            [
                'flower_id' => 2, //キク
                'meaning_id' => 21, //高尚
            ],
            [
                'flower_id' => 3, //ダリア
                'meaning_id' => 22, //華麗
            ],
            [
                'flower_id' => 3, //ダリア
                'meaning_id' => 23, //不安定
            ],
            [
                'flower_id' => 4, //リンドウ
                'meaning_id' => 24, //正義
            ],
            [
                'flower_id' => 4, //リンドウ
                'meaning_id' => 25, //誠実
            ],
            [
                'flower_id' => 5, //ガーベラ
                'meaning_id' => 26, //常に前進
            ],
            [
                'flower_id' => 5, //ガーベラ
                'meaning_id' => 27, //我慢強さ
            ],
            [
                'flower_id' => 6, //ワレモコウ
                'meaning_id' => 28, //変化
            ],
            [
                'flower_id' => 6, //ワレモコウ
                'meaning_id' => 29, //もの思い
            ],
            [
                'flower_id' => 7, //カトレア
                'meaning_id' => 30, //魔力
            ],
            [
                'flower_id' => 7, //カトレア
                'meaning_id' => 31, //魅惑的
            ],
            [
                'flower_id' => 8, //アジサイ
                'meaning_id' => 1, //辛抱強さ
            ],
            [
                'flower_id' => 8, //アジサイ
                'meaning_id' => 2, //冷酷
            ],
            [
                'flower_id' => 9, //ヒマワリ
                'meaning_id' => 3, //あこがれ
            ],
            [
                'flower_id' => 9, //ヒマワリ
                'meaning_id' => 4, //鉄愛
            ],
            [
                'flower_id' => 10, //デルフィニウム
                'meaning_id' => 5, //清明
            ],
            [
                'flower_id' => 11, //ユリ
                'meaning_id' => 6, //威厳
            ],
            [
                'flower_id' => 11, //ユリ
                'meaning_id' => 7, //純愛
            ],
            [
                'flower_id' => 12, //トルコキキョウ
                'meaning_id' => 8, //優美
            ],
            [
                'flower_id' => 12, //トルコキキョウ
                'meaning_id' => 9, //希望
            ],
            [
                'flower_id' => 28, //ケイトウ
                'meaning_id' => 10, //気取り
            ],
            [
                'flower_id' => 28, //ケイトウ
                'meaning_id' => 11, //風変わり
            ],
            [
                'flower_id' => 13, //アルストロメリア
                'meaning_id' => 12, //持続
            ],
            [
                'flower_id' => 13, //アルストロメリア
                'meaning_id' => 13, //未来への憧れ
            ],
            [
                'flower_id' => 14, //カスミソウ
                'meaning_id' => 14, //清らかな心
            ],
            [
                'flower_id' => 14, //カスミソウ
                'meaning_id' => 15, //幸福
            ],
            [
                'flower_id' => 15, //スターチス
                'meaning_id' => 16, //変わらぬ心
            ],
            [
                'flower_id' => 15, //スターチス
                'meaning_id' => 17, //途絶えぬ記憶
            ],
            [
                'flower_id' => 16, //シクラメン
                'meaning_id' => 32, //配慮
            ],
            [
                'flower_id' => 16, //シクラメン
                'meaning_id' => 33, //気後れ
            ],
            [
                'flower_id' => 17, //ツバキ
                'meaning_id' => 34, //はかない美しさ
            ],
            [
                'flower_id' => 17, //ツバキ
                'meaning_id' => 35, //愛らしさ
            ],
            [
                'flower_id' => 18, //ミモザ
                'meaning_id' => 36, //秘密の恋
            ],
            [
                'flower_id' => 18, //ミモザ
                'meaning_id' => 37, //友情
            ],
            [
                'flower_id' => 19, //スイセン
                'meaning_id' => 38, //うぬぼれ
            ],
            [
                'flower_id' => 19, //スイセン
                'meaning_id' => 39, //自己愛
            ],
            [
                'flower_id' => 20, //フリージア
                'meaning_id' => 40, //あどけなさ
            ],
            [
                'flower_id' => 20, //フリージア
                'meaning_id' => 41, //親愛の情
            ],
            [
                'flower_id' => 21, //チューリップ
                'meaning_id' => 42, //思いやり
            ],
            [
                'flower_id' => 22, //アイリス
                'meaning_id' => 43, //いい便り
            ],
            [
                'flower_id' => 22, //アイリス
                'meaning_id' => 44, //希望
            ],
            [
                'flower_id' => 23, //ヒヤシンス
                'meaning_id' => 45, //遊び
            ],
            [
                'flower_id' => 23, //ヒヤシンス
                'meaning_id' => 46, //スポーツ
            ],
            [
                'flower_id' => 24, //ラナンキュラス
                'meaning_id' => 47, //魅力的
            ],
            [
                'flower_id' => 25, //アネモネ
                'meaning_id' => 48, //儚い恋
            ],
            [
                'flower_id' => 25, //アネモネ
                'meaning_id' => 49, //恋の苦しみ
            ],
            [
                'flower_id' => 18, //ミモザ
                'meaning_id' => 36, //秘密の恋
            ],
            [
                'flower_id' => 18, //ミモザ
                'meaning_id' => 37, //友情
            ],
            [
                'flower_id' => 21, //チューリップ
                'meaning_id' => 42, //思いやり
            ],
            [
                'flower_id' => 26, //バラ
                'meaning_id' => 50, //愛
            ],
            [
                'flower_id' => 26, //バラ
                'meaning_id' => 51, //美
            ],
            [
                'flower_id' => 24, //ラナンキュラス
                'meaning_id' => 47, //魅力的
            ],
            [
                'flower_id' => 25, //アネモネ
                'meaning_id' => 48, //儚い愛
            ],
            [
                'flower_id' => 25, //アネモネ
                'meaning_id' => 49, //恋の苦しみ
            ],
            [
                'flower_id' => 27, //カーネーション
                'meaning_id' => 52, //無垢な愛
            ],
            [
                'flower_id' => 5, //ガーベラ
                'meaning_id' => 26, //常に前進
            ],
            [
                'flower_id' => 5, //ガーベラ
                'meaning_id' => 27, //我慢強さ
            ],
        ]);
    }
}