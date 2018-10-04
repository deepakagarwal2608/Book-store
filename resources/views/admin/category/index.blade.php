@extends('admin.layout.admin')

@section('content')
<h3>Category</h3>
  <table class="table table-bordered table-striped" style="margin-top: 5px;">
    <thead>
      <tr class="item-head">
        <th>S.No.</th>
        <th>Title</th>
        <th>Book</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @php
      $x=1
      @endphp
      @foreach($categories as $category)
      <tr>
        <td>{{$x}}</td>
        <td>{{$category->name}}</td>
        <td>
            <ul>
                @foreach($category->book as $book)
                <li>{{$book->title}}</li>
                @endforeach
            </ul>
        </td>
        <td>
          <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action<span class="caret"></span></button>
            <ul class="dropdown-menu dropdown-menu-right">
              <li>
                <a href="{{route('editcategory',['id'=>$category->id])}}">Edit</a> 
              </li>
              <li>
                <a href="{{route('deleteCategory',['id'=>$category->id])}}" onclick="return confirm('Are you sure?')">Delete</a>
              </li>
            </ul>
          </div>
        </td>       
      </tr>
      @php
      $x=$x+1
      @endphp
      @endforeach
    </tbody>
  </table>
  <div class="text-center">
    {{ $categories->links() }}
  </div>
@endsection
    
    
    