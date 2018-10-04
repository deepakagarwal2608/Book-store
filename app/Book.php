<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable=['id','image','title','description','qty','price','discount','category_id'];

    public function cart()
    {
    	return $this->hasMany(Cart::class);
    }

    public function category()
   {
   	return $this->belongsTo(Category::class);
   }
}
