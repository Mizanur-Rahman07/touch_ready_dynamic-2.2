<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard')}}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Product</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('add.product')}}">Add Product</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('manage.product')}}">Manage Product</a></li>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Author</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('add.author')}}"> Add Author </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('manage.author')}}"> Manage Author </a></li>
              </ul>
            </div>
          </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#category" aria-expanded="false" aria-controls="category">
            <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Category</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="category">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('add.category')}}"> Add Category </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('manage.category')}}"> Manage Category </a></li>
              </ul>
            </div>
          </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#advertisement" aria-expanded="false" aria-controls="advertisement">
            <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Advertisements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="advertisement">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('add.advertisement')}}"> Add Advertisement </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('manage.advertisement')}}"> Manage Advertisement </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="icon-contract menu-icon"></i>
              <span class="menu-title">Our Talk</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('add.ourtalk')}}"> Add Our Talk </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('manage.ourtalk')}}"> Manage Our Talk </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#user" aria-expanded="false" aria-controls="user">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="user">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#"> Add User </a></li>
                <li class="nav-item"> <a class="nav-link" href="#"> Manage User </a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../../pages/documentation/documentation.html">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Payment</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Order</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#">Product Order</a></li>
              </ul>
            </div>
          </li>
    </ul>
</nav>