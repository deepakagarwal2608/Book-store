@extends('admin.layout.admin')

@section('content')
    <h3>Add Book</h3>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="{{route('postadd')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" class="form-control" placeholder="Title" required>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" class="form-control">
                        <option></option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Description" style="resize: none;" required></textarea>
                </div>
                <div class="form-group">
                    <label for="qty">Quantity</label>
                    <input type="number" id="qty" class="form-control" name="qty" placeholder="Quantity" required>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" id="price" class="form-control" name="price" placeholder="Price" required>
                </div>
                <div class="form-group">
                    <label for="discount">Discount</label>
                    <input type="number" id="discount" class="form-control" name="discount" placeholder="Discount" required>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" required>
                </div>
                <div class="form-group">
                    <input type="button" name="Cancel" value="Cancel" class="btn btn-danger" style="width: 49%" onclick="window.location = '/admin/books' " />
                    <input type="submit" class="btn btn-danger" style="width: 49%">
                </div>
            </form>
        </div>
    </div>
@endsection
