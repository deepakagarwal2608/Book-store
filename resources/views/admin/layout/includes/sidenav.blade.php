<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <li class="current"><a href="{{route('admin')}}"><i class="fa fa-home"></i>
                    Dashboard</a></li>
            <li class="submenu">
                <a href="#">
                    <i class="fa fa-list"></i> Books
                    <span class="caret pull-right"></span>
                </a>
                <ul>
                    <li><a href="{{route('adminbooks')}}">Books</a></li>
                    <li><a href="{{route('addbook')}}">Add Books</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <i class="fa fa-list"></i> Category
                    <span class="caret pull-right"></span>
                </a>
                <ul>
                    <li><a href="{{route('admincategory')}}">Categories</a></li>
                    <li><a href="{{route('addcategory')}}">Add Category</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <i class="fa fa-list"></i> Orders
                    <span class="caret pull-right"></span>
                </a>
                <ul>
                    <li><a href="{{route('pending')}}">Pending Orders</a></li>
                    <li><a href="{{route('deliverd')}}">Deliverd Orders</a></li>
                    <li><a href="{{route('adminorders')}}">All Orders</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>