<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flowers')->insert([
            [
                'id' => 1,
                'name' => 'コスモス',
                'image' => 'cosmos.jpg'
            ],
            [
                'id' => 2,
                'name' => 'キク',
                'image' => 'chrysanthemum.jpg'
            ],
            [
                'id' => 3,
                'name' => 'ダリア',
                'image' => 'dahlia.jpg'
            ],
            [
                'id' => 4,
                'name' => 'リンドウ',
                'image' => 'gentian.jpg'
            ],
            [
                'id' => 5,
                'name' => 'ガーベラ',
                'image' => 'gerbera.jpg'
            ],
            [
                'id' => 6,
                'name' => 'ワレモコウ',
                'image' => 'sanguisorba.jpg'
            ],
            [
                'id' => 7,
                'name' => 'カトレア',
                'image' => 'gerbera.jpg'
            ],
            [
                'id' => 8,
                'name' => 'アジサイ',
                'image' => 'hydrangea.jpg'
            ],
            [
                'id' => 9,
                'name' => 'ヒマワリ',
                'image' => 'sunflower.jpg'
            ],
            [
                'id' => 10,
                'name' => 'デルフィニウム',
                'image' => 'delphinium.jpg'
            ],
            [
                'id' => 11,
                'name' => 'ユリ',
                'image' => 'lily.jpg'
            ],
            [
                'id' => 12,
                'name' => 'トルコキキョウ',
                'image' => 'eustoma.jpg'
            ],
            [
                'id' => 13,
                'name' => 'アルストロメリア',
                'image' => 'alstroemeria.jpg'
            ],
            [
                'id' => 14,
                'name' => 'カスミソウ',
                'image' => 'gypsophila.jpg'
            ],
            [
                'id' => 15,
                'name' => 'スターチス',
                'image' => 'statice.jpg'
            ],
            [
                'id' => 16,
                'name' => 'シクラメン',
                'image' => 'cyclamen.png'
            ],
            [
                'id' => 17,
                'name' => 'ツバキ',
                'image' => 'cyclamen.png'
            ],
            [
                'id' => 18,
                'name' => 'ミモザ',
                'image' => 'mimosa.jpg'
            ],
            [
                'id' => 19,
                'name' => 'スイセン',
                'image' => 'narcissus.jpg'
            ],
            [
                'id' => 20,
                'name' => 'フリージア',
                'image' => 'mimosa.jpg'
            ],
            [
                'id' => 21,
                'name' => 'チューリップ',
                'image' => 'tulips.jpg'
            ],
            [
                'id' => 22,
                'name' => 'アイリス',
                'image' => 'iris.jpg'
            ],
            [
                'id' => 23,
                'name' => 'ヒヤシンス',
                'image' => 'hyacinth.jpg'
            ],
            [
                'id' => 24,
                'name' => 'ラナンキュラス',
                'image' => 'ranunculus.jpg'
            ],
            [
                'id' => 25,
                'name' => 'アネモネ',
                'image' => 'anemone.jpg'
            ],
            [
                'id' => 26,
                'name' => 'バラ',
                'image' => 'roses.jpg'
            ],
            [
                'id' => 27,
                'name' => 'カーネーション',
                'image' => 'carnation.jpg'
            ],
            [
                'id' => 28,
                'name' => 'ケイトウ',
                'image' => 'eustoma.jpg'
            ],
        ]);
    }
}