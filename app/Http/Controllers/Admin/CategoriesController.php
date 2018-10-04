<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use DB;
use App\Book;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $categories=Category::with('book')->orderBy('id', 'asc')->paginate(7);
        return view('admin.category.index',compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
            'name'=>'required'
        ]);

        $category = new Category;
        $category->name = $request->name;
        $category->save();
        return redirect('/admin/categories');
    }


    public function edit($id)
    {
        $category=Category::find($id);
        return view('admin.category.edit',compact('category'));
    }

    public function update(Request $request, $id)
    {
        Category::where('id', $id)->update(['name' => $request->name]);
        return redirect('/admin/categories');
    }

    public function destroy($id)
    {
        $category=Category::find($id);
        DB::beginTransaction();
        try 
        {
            Book::where('category_id',$id)->delete();
            $category->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors( $e->getmessage() );
        }
        return redirect('/admin/categories');
    }
}
