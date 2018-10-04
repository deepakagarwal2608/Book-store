<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
   protected $fillable=['user_id','book_id','qty','total'];

   public function book()
   {
   	return $this->belongsTo(Book::class);
   }
   public function user()
   {
   	return $this->belongsTo(User::class);
   }
}
