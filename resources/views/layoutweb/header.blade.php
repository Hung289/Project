<header class="header">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-lg-4 col-md-3 col-7">
        <div class="logoandphone justify-content-between align-items-center">
          <div class="logo">
            <div class="khoianh">
              <a href="{{route('indexWeb')}}">
                @foreach($logo as $l)
                <img src="public/uploads/images/System/{{$l->data}}" alt="" />
                @endforeach
              </a>
            </div>
            <div class="chulogo">
              <p class="to">Avson</p>
              <p class="nho">Hotel & room Services</p>
            </div>
          </div>
          <div class="phonenumber">
            <i class="fas fa-phone"></i>
            @foreach($hostline as $e)
            {{$e->data}}
            @endforeach
          </div>
        </div>
      </div>
      <div class="col-lg-8 col-md-9 col-5">
        <div class="menu-right align-items-center">
          <nav class="main-menu">
            <ul>
              <li class="hasmenu">
                <a href="{{route('indexWeb')}}" class="active">Home </a>
              </li>
              <li class="hasmenu">
                <a href="{{route('roomList')}}">Room <i class="fas fa-chevron-down"></i></a>
                <ul class="menunho">
                  @foreach($CategoryRoom as $CateRoom)
                  <li><a href="{{route('RoomListMaster',['id'=>$CateRoom->id])}}">{{$CateRoom->name}}</a></li>
                  @endforeach
                </ul>
              </li>
              <li><a href="{{route('viewService')}}">Service <i class="fas fa-chevron-down"></i></a>
                <ul class="menunho">
                  @foreach($CategoryService as $CateService)
                  <li><a href="{{route('serviceMasterNotIdRoom',['id'=>$CateService->id])}}">{{$CateService->name}}</a></li>
                  @endforeach
                </ul>
              </li>
              <li><a href="{{route('blogGrid')}}">Blog <i class="fas fa-chevron-down"></i></a>
                <ul class="menunho">
                  @foreach($CategoryBlog as $CateBlog)
                  <li><a href="{{route('blogStand',['id'=>$CateBlog->id])}}">{{$CateBlog->name}}</a></li>
                  @endforeach
                </ul>
              </li>
              <li class="hasmenu">
                <a href="">Pages <i class="fas fa-chevron-down"></i></a>
                <ul class="menunho">
                  <li><a href="{{route('about')}}">About Us</a></li>
                  <li><a href="">Our Staff</a></li>
                  <li><a href="{{route('restaurant')}}">Resturent</a></li>
                  <li><a href="{{route('gallery')}}">Gallery</a></li>
                  <li><a href="{{route('checkout')}}">Checkout</a></li>
                  <li><a href="{{route('reservation')}}">Reservation</a></li>
                </ul>
              </li>
              <li><a href="{{route('contact')}}">Contact</a></li>
            </ul>
          </nav>
          <div class="qoute align-items-center">
            <a href="{{route('cart.view')}}" class="btn filled-btn">CartRoom <i class="fas fa-long-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="mobilemenu">
      <div class="meanbar">
        <a href="" class="nutmobile"><i class="fas fa-bars"></i></a>
        <nav class="meannav">
          <ul>
            <li>
              <a href="{{route('indexWeb')}}" class="active">Home </a>
            </li>
            <li>
              <a href="{{route('roomList')}}">Room </a>
              <ul class="menunho room">
                @foreach($CategoryRoom as $CateRoom)
                <li><a href="{{route('RoomListMaster',['id'=>$CateRoom->id])}}">{{$CateRoom->name}}</a></li>
                @endforeach
              </ul>
              <i class="fas fa-plus" data-class="room"></i>
            </li>
            <li>
              <a href="{{route('viewService')}}">Service </a>
              <ul class="menunho service">
                @foreach($CategoryService as $CateService)
                <li><a href="{{route('serviceMasterNotIdRoom',['id'=>$CateService->id])}}">{{$CateService->name}}</a></li>
                @endforeach
              </ul>
              <i class="fas fa-plus" data-class="service"></i>
            </li>
            <li><a href="{{route('blogGrid')}}">Blog </a>
              <ul class="menunho blog">
                @foreach($CategoryBlog as $CateBlog)
                <li><a href="">{{$CateBlog->name}}</a></li>
                @endforeach
              </ul>
              <i class="fas fa-plus" data-class="blog"></i>
            </li>
            <li>
              <a href="">Pages </a>
              <ul class="menunho page">
                <li><a href="">Home</a></li>
                <li><a href="{{route('about')}}">About Us</a></li>
                <li><a href="">Rooms</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">News</a></li>
                <li><a href="">Gallery</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Our Staff</a></li>
                <li><a href="{{route('restaurant')}}">Resturent</a></li>
                <li><a href="{{route('gallery')}}">Gallery</a></li>
                <li><a href="{{route('checkout')}}">Checkout</a></li>
                <li><a href="{{route('reservation')}}">Reservation</a></li>
              </ul>
              <i class="fas fa-plus" data-class="page"></i>
            </li>
            <li><a href="{{route('contact')}}">Contact</a></li>
            <li><a href="{{route('cart.view')}}">CartRoom</a></li>
          </ul>
        </nav>
        <a href="" class="nutuser"><i class="fas fa-user"></i></a>
        <div class="thongTinUser">
          <div class="thoat"><i class="fas fa-times"></i></div>

          <div class="noidunghienthi">
            <nav>
              @if(!Auth::check())
              <ul>
                <li><a href="{{route('getloginWeb')}}">Login</a></li>
                <li><a href="{{route('getRegisterWeb')}}">Register</a></li>
              </ul>
              @else
              <ul>
                <div class="divanh">
                  <img id="avatar_auth" src="public/uploads/images/user/{{Auth::user()->avatar}}" class="img-circle elevation-2" alt="User Image" style="border-radius: 50%">
                </div>
                <li class="khac chouser">
                  <a href="{{route('CustomerInfor',['id'=>Auth::User()->id])}}">{{Auth::User()->email}}</a>
                </li>
                <li><a href="{{route('CustomerInfor',['id'=>Auth::User()->id])}}">Thông tin tài khoản <i class="fas fa-user"></i></a> </li>
                <li><a href="{{route('historyBooking')}}">Lịch sử đơn hàng <i class="fas fa-history"></i></a></li>
                <li><a href="{{route('getLogoutWeb')}}">Logout <i class="fas fa-sign-out-alt"></i></a></li>
              </ul>
              @endif
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>