<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
   protected $fillable=['name','photo'];

   public function categories($value=''){
    	return $this->hasMany('App\Category');
}
   public function items($value=''){
    	return $this->hasMany('App\Items');

}
}
