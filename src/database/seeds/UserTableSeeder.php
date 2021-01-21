<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $param = [
        "name" => 'ゲスト',
        "email" => 'abcd@efg',
        "password" => 'password',
      ];
      DB::table('users')->insert($param);

      $param = [
        "name" => '田中太郎',
        "email" => 'abcde@efg',
        "password" => 'password',
      ];
      DB::table('users')->insert($param);

      $param = [
        "name" => '田中二郎',
        "email" => 'abcdef@efg',
        "password" => 'password',
      ];
      DB::table('users')->insert($param);

      $param = [
        "name" => '田中三郎',
        "email" => 'abcdefg@efg',
        "password" => 'password',
      ];
      DB::table('users')->insert($param);

      $param = [
        "name" => '田中四郎',
        "email" => 'abcdegff@efg',
        "password" => 'password',
      ];
      DB::table('users')->insert($param);

    }
}
