@extends('admin.layout.admin')
@section('content')
<h3>Edit Book Details</h3>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <form action="{{route('posteditbookdetails',['id'=>$book->id])}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" value="{{$book->title}}" required>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select name="category" class="form-control" value="{{$book->category->id}}">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description"  style="resize: none;" required>{{$book->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="qty">Quantity</label>
                <input type="number" id="qty" value="{{$book->qty}}" class="form-control" name="qty" placeholder="Quantity" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" id="price" value="{{$book->price}}" class="form-control" name="price" placeholder="Price" required>
            </div>
            <div class="form-group">
                <label for="discount">Discount</label>
                <input type="number" id="discount" value="{{$book->discount}}" class="form-control" name="discount" placeholder="Discount" required>
            </div>
            
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" value="{{$book->image}}" id="image">
            </div>

            <div class="form-group">
                <input type="button" name="Cancel" value="Cancel" class="btn btn-danger" style="width: 49%" onclick="window.location = '/admin/books' " />
                <input type="submit" class="btn btn-danger" style="width: 49%">

            </div>
        </form>

        </div>
    </div>
@endsection