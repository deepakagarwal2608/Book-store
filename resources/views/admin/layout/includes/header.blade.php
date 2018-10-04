<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="logo">
                    <h1><a href="{{route('admin')}}">Admin</a></h1>
                </div>
            </div>
            <div class="col-md-3 pull-right">
                <div class="navbar navbar-inverse" role="banner">
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-user-secret"></span>   {{Auth::user()->name}} <b
                                            class="caret"></b></a>
                                <ul class="dropdown-menu animated fadeInUp">
                                    <li><a href="{{route('home')}}"><span class="fa fa-user"></span>  User Panel</a></li>
                                    <li><a href="{{route('logout')}}"><span class="fa fa-power-off"></span>  Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>