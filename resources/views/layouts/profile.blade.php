@extends('layouts.master')
@section('content')
<div class="container">
  <div class="col-12 col-md-4" style="background-color:white; height:35%;">
    @if($user->google_id)
    <img src="{{ url($user->Image) }}" style="width:100%; border-radius: 50%; padding:5%;">
    @else
    <img src="{{ Storage::url($user->Image) }}" style="width:100%; border-radius: 50%; padding:5%;">
    @endif
    <center>
      @if ($message = Session::get('success'))
      <p style="color:green"><span class="fa fa-check"></span> {{ $message }}</p>
      @endif
      @if ($message = Session::get('error'))
      <p style="color:red"><span class="fa fa-remove"></span> {{ $message }}</p>
      @endif
    </center>
  </div>
  <div class="col-12 col-md-8" style="background-color:white; height: 35%;">
    <div class="table-responsive">          
      <table class="table">
        <thead>
          <tr>
            <th>Profile</th>
            <th>Details</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Name</td>
            <td>{{ Auth::user()->name }}</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>{{ Auth::user()->email }}</td>
          </tr>
          <tr>
            <td>Contact</td>
            <td>{{ Auth::user()->contact }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  @if(auth()->user()->admin==0)
  <div class="col-12 col-md-12" style="background-color:white;">
    <div class="panel-group">
      <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#collapse2"><strong>Delete Account</strong></a>
            </h4>
          </div>
          <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">
              <form action="{{route('postdeleteprofile')}}" method="POST">
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="passeord">Enter Password</label>
                  <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-success">Delete Account</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endif
  <div class="col-12 col-md-12" style="background-color:white;">
    <div class="panel-group">
      <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#collapse3"><strong>Change Password</strong></a>
            </h4>
          </div>
          <div id="collapse3" class="panel-collapse collapse">
            <div class="panel-body">
              <form action="{{route('postchangepassword')}}" method="POST">
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="password">Old Password</label>
                  <input type="password" class="form-control" placeholder="Old Password" name="password" required>
                </div>
                <div class="form-group">
                  <label for="new_password">New Password:</label>
                  <input type="password" class="form-control" placeholder="New Password" name="new_password" required>
                </div>
                <div class="form-group">
                  <label for="confirm_password">Retype New Password:</label>
                  <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" required>
                </div>
                <div class="panel-footer">
                  <button type="submit" class="btn btn-success">Change Password</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-md-12" style="background-color:white;">
  @include('layouts.errors')
  </div>
</div>
@endsection