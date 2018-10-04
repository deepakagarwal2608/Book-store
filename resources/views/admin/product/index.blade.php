@extends('admin.layout.admin')

@section('content')
  <h3>Books</h3>
  <table class="table table-bordered table-striped" style="margin-top: 5px;">
    <thead>
      <tr class="item-head">
        <th>S.No.</th>
        <th>Image</th>
        <th>Title</th>
        <th>Category</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Discount</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @php
      $x=1
      @endphp
      @foreach($books as $book)
      <tr>
        <td>{{$x}}</td>
        <td><img src="{{Storage::url($book->image)}}" style="width: 100px;"></td>
        <td>{{$book->title}}</td>
        <td>{{$book->category->name}}</td>
        <td>{{ substr(strip_tags($book->description), 0, 350).'..................' }}
        </td>
        <td>{{$book->qty}}</td>
        <td>{{$book->price}}</td>
        <td>{{$book->discount}}</td>
        <td>
          <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action<span class="caret"></span></button>
            <ul class="dropdown-menu dropdown-menu-right">
              <li>
                <a href="{{route('editbookdetails',['id'=>$book->id])}}" data-toggle="modal" data-backdrop="static" data-keyboard="false" id={{$book->id}}>Edit</a>
                <input type="hidden" name="book" value="{{$book->id}}"/> 
              </li>
              <li>
                <a href="{{route('deletebook',['id'=>$book->id])}}" onclick="return confirm('Are you sure?')">Delete</a>
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
    {{ $books->links() }}
  </div>
@endsection