<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{

  protected $guarded = ['id'];

  public function reviews(){
    return $this->hasMany('App\Review');
  }

  public static $rules = array(
    'place_name' => 'unique:places,place_name',
    'place_tel' => 'unique:places,place_tel',
  );

}
