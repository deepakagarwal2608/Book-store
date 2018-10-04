<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\User;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $title="Orders";
        $users=User::all();
        $orders=Order::with('orderItem')->paginate(6);
        $count=Order::with('orderItem')->count();
        return view('admin.orders',compact('orders','users','title','count'));
    }

    public function edit($id)
    {
        $x=1;
        Order::where('id', $id)->update(['status' => $x]);
        return redirect()->back();
    }

    public function pending()
    {
        $title="Pending Orders";
        $users=User::all();
        $orders=Order::with('orderItem')->where('status',0)->paginate(6);
        $count=Order::with('orderItem')->where('status',0)->count();
        return view('admin.orders',compact('orders','users','title','count'));
        
    }

    public function deliverd()
    {
        $title="Delivered Orders";
        $users=User::all();
        $orders=Order::with('orderItem')->where('status',1)->paginate(6);
        $count=Order::with('orderItem')->where('status',1)->count();
        return view('admin.orders',compact('orders','users','title','count'));
    }
}
