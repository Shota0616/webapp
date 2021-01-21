<?php

use Illuminate\Database\Seeder;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $param = [
        "review_title" => '定番のデートスポット',
        "review_comment" => '誰と言っても楽しい夢の国。何歳になっても楽しめると思います。難点としては、混んでいることくらいです。',
        "review_user_name" => '田中太郎',
        "review_place_name" => 'ディズニーランド',
        "review_evaluation" => '5',
        'places_id' => '1',
        'users_id' => '2',
      ];
      DB::table('reviews')->insert($param);

      $param = [
        "review_title" => 'ふつうだね',
        "review_comment" => '何歳になっても楽しめると思います。難点としては、混んでいることくらいです。',
        "review_user_name" => '田中二郎',
        "review_place_name" => 'ディズニーランド',
        "review_evaluation" => '4',
        'places_id' => '1',
        'users_id' => '3',
      ];
      DB::table('reviews')->insert($param);

      $param = [
        "review_title" => '最高',
        "review_comment" => '足が疲れます',
        "review_user_name" => '田中三郎',
        "review_place_name" => '赤城山',
        "review_evaluation" => '5',
        'places_id' => '2',
        'users_id' => '4',
      ];
      DB::table('reviews')->insert($param);

      $param = [
        "review_title" => 'ふつうだね',
        "review_comment" => '何歳になっても楽しめると思います。難点としては、混んでいることくらいです。',
        "review_user_name" => '田中四郎',
        "review_place_name" => '赤城山',
        "review_evaluation" => '4',
        'places_id' => '2',
        'users_id' => '5',
      ];
      DB::table('reviews')->insert($param);

    }
}
