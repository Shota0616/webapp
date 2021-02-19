<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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


      $review = new Review;
      $form = $request->all();
      unset($form['_token']);
      $review->fill($form)->save();
      return \Redirect::back();


  }

}
