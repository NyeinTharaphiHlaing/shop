<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable=['codeno','name','photo','price','discount','description','subcategory_id','brand_id'];

    
    public function brands($value=''){
    	return $this->belongsTo('App\Brands');
}
    	 public function subcategoty($value=''){
    	return $this->belongsTo('App\Subcategory');
}
}
