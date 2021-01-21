<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Review;
use App\Place;
use Auth;

class ReviewController extends Controller
{

  public function review_post(Request $request){
    // バリデーション
    $request->validate([
        'places_id' => [
            'required',
            'exists:places,id',
            function($attribute, $value, $fail) use($request) {

                // すでにレビュー投稿してるかチェック
                $exists = Review::where('users_id', $request->users_id)
                    ->where('places_id', $request->places_id)
                    ->exists();

                    if ($exists) {
                      $exists = Review::where('users_id','1')
                          ->exists();
                          if ($exists) {
                            $exists = NULL;
                          }
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
