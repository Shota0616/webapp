<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Review;
use App\Place;
use App\User;
use Auth;

class HomeController extends Controller
{

  public function logout(){
    Auth::logout();
    return redirect('/');
  }

  public function user_review(Request $request){
    $query = Review::query();
    $review = $query->where('users_id','=',"$request->id")->get();
    $query2 = User::query();
    $user = $query2->where('id','=',"$request->id")->get();

    return view('layouts.home',[
      'review' => $review,
      'user' => $user
    ]);
  }

  public function review_edit(Request $request){
    $review = Review::find($request->id);
    return view('layouts.review_edit',['review' => $review]);
  }

  public function review_update(Request $request)
  {
    $review=[
      'id' => $request->id,
      'review_title' => $request->review_title,
      'review_comment' => $request->review_comment,
      'review_evaluation' => $request->review_evaluation,
      'review_user_name' => $request->review_user_name,
      'review_place_name' => $request->review_place_name,
      'places_id' => $request->places_id,
      'users_id' => $request->users_id,
    ];
    DB::table('reviews')
    ->where('id',$request->id)
    ->update($review);
    return redirect('/complete');
  }

  public function review_delete(Request $request){
    $query = Review::query();
    $review = $query->where('id','=',"$request->id")->get();

    return view('layouts.review_delete',[
      'review' => $review,
    ]);
  }

  public function review_remove(Request $request){
    Review::find($request->id)->delete();
    return redirect('/complete');
  }

}
