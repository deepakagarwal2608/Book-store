<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;
use App\Order;
use DB;
use Carbon;
class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function index()
    {
    	$books=Book::orderBy('created_at', 'desc')->paginate(12);
    	$order_month = Order::where('transactions_status','succeeded')->select(DB::raw('MONTH(created_at) as month'),DB::raw('sum(total) as total'))->groupBy(DB::raw('MONTH(created_at)'))->get()->toArray();
        $size_month=count($order_month);
        for($i=0;$i<$size_month;$i++)
        {
        	$order_month[$i]['month'] = date("F", strtotime("2001-" . $order_month[$i]['month'] . "-01"));
    	}

        $order_date = Order::where('transactions_status','succeeded')->select(DB::raw('DATE(created_at) as date'),DB::raw('sum(total) as total'))->groupBy(DB::raw('DATE(created_at)'))->get()->toArray();

        $order_year = Order::where('transactions_status','succeeded')->select(DB::raw('YEAR(created_at) as year'),DB::raw('sum(total) as total'))->groupBy(DB::raw('YEAR(created_at)'))->get()->toArray();

    	return view('admin.index',compact('books','order_month','order_date','order_year'));
    }
}
