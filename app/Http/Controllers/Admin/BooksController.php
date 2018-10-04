<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;
use App\Category;


class BooksController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $books=Book::with('category')->orderBy('category_id', 'asc')->paginate(6);
        return view('admin.product.index',compact('books'));
    }

    public function create()
    {
        $categories=Category::all();
        return view('admin.product.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
            'title'=>'required',
            'category'=>'required',
            'description'=>'required|min:10',
            'qty'=>'required',
            'price'=>'required',
            'discount'=>'required',
            'image'=>'required'
        ]);

        if($request->price<=$request->discount)
        {
        return redirect()->back()->with('message','Sorry..discount should be less then price');
        }

        $book = new Book;
        $book->title = $request->title;
        $book->category_id=$request->category;
        $book->description = $request->description;
        $book->qty = $request->qty;
        $book->price = $request->price;
        $book->discount = $request->discount;
        $file_name = $request->file('image')->store('public');
        $book->image = $file_name;
        $book->save();
        return redirect('/admin/books');
    }

    public function edit($id)
    {
        $book=Book::find($id);
        $categories=Category::all();
        return view('admin.product.edit',compact('book','categories'));
    }

    public function update(Request $request, $id)
    {
        $this->validate(request(),[
            'title'=>'required',
            'category'=>'required',
            'description'=>'required|min:10',
            'qty'=>'required',
            'price'=>'required',
            'discount'=>'required'
        ]);

        if($request->price<=$request->discount)
        {
        return redirect()->back()->with('message','Sorry..discount should be less then price');
        }
        
        $book=Book::find($id);
        if($request->image==null)
        {
            $file_name=$book->image;
        }
        else
        {
        $file_name = $request->file('image')->store('public');
        }
        $book->update(['title' => $request->title,
            'category_id' =>$request->category,
            'description' =>$request->description,
            'qty' => $request->qty,
            'price' => $request->price,
            'discount' =>$request->discount,
            'image' => $file_name
            ]);
        return redirect('/admin/books');
    }

    public function destroy($id)
    {
        $book=Book::find($id);
        $book->delete();
        return redirect('/admin/books');
    }
}
