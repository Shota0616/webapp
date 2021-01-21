<?php

use Illuminate\Database\Seeder;

class PlaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $param = [
        "place_furigana" => 'トウキョウディズニーランド',
        "place_name" => '東京ディズニーランド',
        "place_tel" => '01234567890',
        "place_cat" => '遊園地・テーマパーク',
        "place_postcode" => '2790031',
        "place_prefecture" => '千葉県',
        "place_city" => '浦安市舞浜',
        "place_block" => '1-1',
        "place_busihours" => '8:00-22:00',
        "place_holiday" => '年中無休',
        "place_budget" => '〜¥999',
      ];
      DB::table('places')->insert($param);

      $param = [
        "place_furigana" => 'アカギヤマ',
        "place_name" => '赤城山',
        "place_tel" => '01234567890',
        "place_cat" => '登山・ハイキング',
        "place_postcode" => '2790031',
        "place_prefecture" => '千葉県',
        "place_city" => '浦安市舞浜',
        "place_block" => '1-1',
        "place_busihours" => '8:00-22:00',
        "place_holiday" => '年中無休',
        "place_budget" => '〜¥999',
      ];
      DB::table('places')->insert($param);
    }
}
