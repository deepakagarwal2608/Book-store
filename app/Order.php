<?php

namespace App;
use App\Book;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['user_id','name','email','contact_number','state','address','total','status','city','zip','transactions_id','transactions_status'];
   	public function orderItem()
	{
	  return $this->belongsToMany(Book::class)->withPivot('amount','total');
	}
   	public function user()
    {
      return $this->belongsTo(User::class);
    }
}
