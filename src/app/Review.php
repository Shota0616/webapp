<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

  protected $guarded = [
    'id',
    'place_id',
    'user_id',
  ];

  public function place(){
    return $this->belongsTo('App\Place');
  }

  public function user(){
    return $this->belongsTo('App\User');
  }

}
