<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Review;
use App\Place;

class ReviewController extends Controller
{

  public function review_post(Request $request){

    // バリデーション
    $request->validate([
      // すでにレビュー投稿してるかチェック

      'places_id' => [
           'required',
           'exists:places,id',
           function($attribute, $value, $fail) use($request) {

               $exists = Review::where('users_id', '=', $request->users_id)
                   ->where('places_id','=', $request->places_id)
                   ->exists();

               if($request->users_id == 1){
                 $exists = NULL;
               }

               if($exists) {
                 $fail('すでにレビューは投稿済みです。');
                 return;
               }
           }
       ],


        'review_evaluation' => 'required',
        'review_title' => 'required',
        'review_comment' => 'required',
    ]);

      //S3へのファイルアップロード処理の時の情報を変数$upload_infoに格納する
      $upload_info = Storage::disk('s3')->putFile('/pic', $request->file('file'), 'public');
      //S3へのファイルアップロード処理の時の情報が格納された変数$upload_infoを用いてアップロードされた画像へのリンクURLを変数$pathに格納する
      $path = Storage::disk('s3')->url($upload_info);
      //モデルファイルのクラスからインスタンスを作成し、オブジェクト変数$reviewに格納する
      $review = new Review();
      $review->review_title = $request->review_title;
      $review->review_comment = $request->review_comment;
      $review->review_evaluation = $request->review_evaluation;
      $review->review_user_name = $request->review_user_name;
      $review->review_place_name = $request->review_place_name;
      $review->users_id = $request->users_id;
      $review->places_id = $request->places_id;
      $review->path = $path;
      //インスタンスの内容をDBのテーブルに格納する
      $review->save();
      return \Redirect::back();


  }

}
