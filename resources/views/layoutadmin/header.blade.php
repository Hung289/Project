<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="index3.html" class="nav-link">Home</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    @if(!Auth::check())
    <li class="nav-item">
      <a class="nav-link" href="">
        Đăng Ký
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('Login')}}">
        Đăng Nhập
      </a>
    </li>
    @else
    <li class="nav-item">
      <a class="nav-link" href="#">
        <img src="public/uploads/images/user/{{Auth::User()->avatar}}" class="img-circle elevation-2" alt="User Image" style="width: 30px;height:30px">
        {{Auth::User()->email}}
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('logout')}}">
        Đăng Xuất
      </a>
    </li>
    @endif
</nav>
<!-- /.navbar -->