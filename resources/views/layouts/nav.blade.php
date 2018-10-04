<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="{{route('home')}}" style="color:white; font-family: monospace;">Book Store</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          @if(Auth::check())
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Categories
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            @foreach($categories as $category)
            <li>
              <a href="{{route('books',['id'=>$category->id])}}">{{$category->name}}</a>
            </li>
            @endforeach
          </ul>
          @endif
        </li>
      </ul>
      <form class="navbar-form navbar-left" action="#">
        @if(Auth::check())
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search" autocomplete="off" style="width: 400px; ">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
        @endif
      </form>
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
        @if($item==0)
        <li>
          <button class="btn btn-primary navbar-btn" onclick="window.location.href='/cart'"><span class="fa fa-shopping-cart"></span> Cart </button>
        </li>
        @else
        <li>
          <button class="btn btn-primary navbar-btn" onclick="window.location.href='/cart'"><span class="fa fa-shopping-cart"></span> Cart <span class="badge">{{$item}}</span></button>
        </li>
        @endif
        @endif
        @if (Auth::check())
        <li>
          <a href="{{route('profile')}}"><img src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/user-male-icon.png" style="width:20px;">  {{ Auth::user()->name }}</a>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <span class="fa fa-user"></span> Accounts<span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="{{route('profile')}}"><span class="fa fa-user"></span> &nbspProfile</a>
            </li>
            <li>
              <a href="{{route('orders')}}"><span class="fa fa-list-alt"></span> &nbspOrders</a>
            </li>
            @if(auth()->user()->admin==1)
            <li>
              <a href="{{route('admin')}}"><span class="fa fa-user-secret"></span> &nbspAdmin Panel</a>
            </li>
            @endif
            @if(auth()->user()->admin==0)
            <li>
              <a href="{{route('logout')}}"><span class="fa fa-power-off"></span> &nbspLogout</a>
            </li>
            @endif
          </ul>
        </li>
        @else
        <li>
          <a href="{{route('register')}}"><span class="fa fa-user"></span> Sign Up</a>
        </li>
        <li>
          <a href="{{route('login')}}" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><span class="fa fa-sign-in"></span> Login</a>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>