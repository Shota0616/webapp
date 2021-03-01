<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Place;
use App\Review;
use App\User;

class PlaceController extends Controller
{

  public function add(Request $request){
    return view('layouts.add');
  }

  public function create(Request $request){
    $this->validate($request,Place::$rules);
    $place = new Place;
    $form = $request->all();
    unset($form['_token']);
    $place->fill($form)->save();
    return redirect('/complete');
  }

  public function edit(Request $request)
  {
    $place = Place::find($request->id);
    return view('layouts.place_edit',['place' => $place]);
  }

  public function update(Request $request)
  {
    $place=[
      'id' => $request->id,
      'place_furigana' => $request->place_furigana,
      'place_name' => $request->place_name,
      'place_tel' => $request->place_tel,
      'place_cat' => $request->place_cat,
      'place_postcode' => $request->place_postcode,
      'place_prefecture' => $request->place_prefecture,
      'place_city' => $request->place_city,
      'place_block' => $request->place_block,
      'place_busihours' => $request->place_busihours,
      'place_holiday' => $request->place_holiday,
      'place_budget' => $request->place_budget,
    ];
    DB::table('places')
    ->where('id',$request->id)
    ->update($place);
    return redirect('/complete');
  }

  public function complete(Request $request){
    return view('layouts.complete');
  }

  public function index(Request $request){
    $places = Place::all();
    $places = Place::paginate(5);
    return view('layouts.welcome',['places' => $places]);
  }

  public function search(Request $request){
    $query = Place::query();
    $keyword = $request->keyword;
    $prefecture = $request->prefecture;
    $category = $request->category;

    if(!empty($keyword)) {
      $query->where('place_furigana', 'LIKE', "%{$keyword}%")
        ->orWhere('place_name', 'LIKE', "%{$keyword}%")
        ->orWhere('place_prefecture','LIKE',"{$prefecture}");
    }
    if(!empty($prefecture)) {
      $query->where('place_prefecture','=',"{$prefecture}");
    }
    if(!empty($category)) {
      $query->where('place_cat','=',"{$category}");
    }

    $places = $query->paginate(5);

    return view('layouts.welcome')->with([
      'places' => $places,
    ]);

  }

  public function details(Request $request){
    $query = Place::query();
    $query2 = Review::query();

    $place = $query->where('id','=',"$request->id")->get();
    $review = $query2->where('places_id','=',"$request->id")->get();

    return view('layouts.place_details',[
      'place' => $place,
      'review' => $review,
    ]);
  }


}
