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
        "place_tel" => '',
        "place_cat" => '登山・ハイキング',
        "place_postcode" => '3710101',
        "place_prefecture" => '群馬県',
        "place_city" => '前橋市富士見町赤城山',
        "place_block" => '',
        "place_busihours" => '24時間営業',
        "place_holiday" => '年中無休',
        "place_budget" => '〜¥999',
      ];
      DB::table('places')->insert($param);

      $param = [
        "place_furigana" => 'クサツオンセン',
        "place_name" => '草津温泉',
        "place_tel" => '',
        "place_cat" => '温泉',
        "place_postcode" => '3771711',
        "place_prefecture" => '群馬県',
        "place_city" => '吾妻郡草津町草津',
        "place_block" => '',
        "place_busihours" => '24時間営業',
        "place_holiday" => '年中無休',
        "place_budget" => '〜¥999',
      ];
      DB::table('places')->insert($param);

      $param = [
        "place_furigana" => 'イカホオンセンイシダンガイ',
        "place_name" => '伊香保温泉石段街',
        "place_tel" => '',
        "place_cat" => '温泉',
        "place_postcode" => '3770102',
        "place_prefecture" => '群馬県',
        "place_city" => '渋川市伊香保町伊香保',
        "place_block" => '76-5',
        "place_busihours" => '24時間営業',
        "place_holiday" => '年中無休',
        "place_budget" => '〜¥999',
      ];
      DB::table('places')->insert($param);

      $param = [
        "place_furigana" => 'マエバシシチュウオウジドウユウエンルナパアク',
        "place_name" => '前橋市中央児童遊園るなぱあく',
        "place_tel" => '0272316774',
        "place_cat" => '遊園地・テーマパーク',
        "place_postcode" => '3710026',
        "place_prefecture" => '群馬県',
        "place_city" => '前橋市大手町',
        "place_block" => '3丁目16-3',
        "place_busihours" => '［3月～10月］9:30～17:00
        [11月～2月］9:30～16:00',
        "place_holiday" => '火曜日',
        "place_budget" => '〜¥999',
      ];
      DB::table('places')->insert($param);

      $param = [
        "place_furigana" => 'トミオカセイシジョウ',
        "place_name" => '富岡製糸場',
        "place_tel" => '0274670075',
        "place_cat" => '工場見学',
        "place_postcode" => '3702316',
        "place_prefecture" => '群馬県',
        "place_city" => '富岡市富岡',
        "place_block" => '1-1',
        "place_busihours" => '9:00～17:00',
        "place_holiday" => '年中無休',
        "place_budget" => '〜¥999',
      ];
      DB::table('places')->insert($param);

      $param = [
        "place_furigana" => 'タカサキオーパ',
        "place_name" => '高崎オーパ',
        "place_tel" => '0273218111',
        "place_cat" => 'ショッピングモール・アウトレットモール',
        "place_postcode" => '3700849',
        "place_prefecture" => '群馬県',
        "place_city" => '高崎市八島町',
        "place_block" => '46-1',
        "place_busihours" => '10:00～21:00',
        "place_holiday" => '年中無休',
        "place_budget" => '¥5,000〜¥5,999',
      ];
      DB::table('places')->insert($param);

    }
}
