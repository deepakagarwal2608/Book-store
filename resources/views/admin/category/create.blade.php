@extends('admin.layout.admin')
@section('content')
<h3>Add Category</h3>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <form action="{{route('postaddcategory')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="button" name="Cancel" value="Cancel" class="btn btn-danger" style="width: 49%" onclick="window.location = '/admin/categories' " />
                <input type="submit" class="btn btn-danger" style="width: 49%">
            </div>
        </form>

        </div>
    </div>
@endsection