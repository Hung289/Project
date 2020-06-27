<header class="header">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-lg-4 col-md-3 col-7">
        <div class="logoandphone justify-content-between align-items-center">
          <div class="logo">
            <a href="">
              <img src="public/web/images/img/logo-transparent.png" alt="Avson" />
            </a>
          </div>
          <div class="phonenumber">
            <i class="fas fa-phone"></i>
            +89 (456) 789 999
          </div>
        </div>
      </div>
      <div class="col-lg-8 col-md-9 col-5">
        <div class="menu-right align-items-center">
          <nav class="main-menu">
            <ul>
              <li class="hasmenu">
                <a href="{{route('indexWeb')}}" class="active">Home <i class="fas fa-chevron-down"></i></a>
                <ul class="menunho">
                  <li><a href="">Home1</a></li>
                  <li><a href="">Home2</a></li>
                </ul>
              </li>
              <li class="hasmenu">
                <a href="{{route('roomList')}}">Room <i class="fas fa-chevron-down"></i></a>

                <ul class="menunho">
                  @foreach($CategoryRoom as $CateRoom)
                  <li><a href="{{route('RoomListMaster',['id'=>$CateRoom->id])}}">{{$CateRoom->name}}</a></li>
                  @endforeach
                </ul>

              </li>
              <li><a href="{{route('service')}}">Service <i class="fas fa-chevron-down"></i></a>
                <ul class="menunho">
                  @foreach($CategoryService as $CateService)
                  <li><a href="{{route('serviceMaster',['id'=>$CateService->id])}}">{{$CateService->name}}</a></li>
                  @endforeach
                </ul>
              </li>
              <li><a href="{{route('blogGrid')}}">Blog <i class="fas fa-chevron-down"></i></a>
                <ul class="menunho">
                  @foreach($CategoryBlog as $CateBlog)
                  <li><a href="">{{$CateBlog->name}}</a></li>
                  @endforeach
                </ul>
              </li>
              <li class="hasmenu">
                <a href="">Pages <i class="fas fa-chevron-down"></i></a>
                <ul class="menunho">
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
              </li>
              <li><a href="{{route('cart.view')}}">CartRoom</a></li>
              
              <li><a href="{{route('contact')}}">contact</a></li>
            </ul>
          </nav>
          <div class="search">
            <a href="" class="searcha"><i class="fas fa-search"></i></a>
          </div>
          <div class="qoute align-items-center">
            <a href="#" class="btn filled-btn">get a quote <i class="fas fa-long-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="mobilemenu">
      <div class="meanbar">
        <a href="" class="nutmobile"><i class="fas fa-bars"></i></a>
        <nav class="meannav">
          <ul>
            <li data-class="home">
              <a href="" class="active">Home</a>
              <ul class="menunho home">
                <li><a href="">Home1</a></li>
                <li><a href="">Home2</a></li>
              </ul>
            </li>
            <li data-class="room">
              <a href="">Rooms</a>
              <ul class="menunho room">
                <li><a href="">Room list</a></li>
                <li><a href="">Room Gird</a></li>
                <li><a href="">Room Detail</a></li>
              </ul>
            </li>
            <li><a href="">Services</a></li>
            <li data-class="new">
              <a href="">News</a>
              <ul class="menunho new">
                <li><a href="">New Gird</a></li>
                <li><a href="">New Standard</a></li>
                <li><a href="">New Details</a></li>
              </ul>
            </li>
            <li data-class="page">
              <a href="">Pages</a>
              <ul class="menunho page">
                <li><a href="">Home</a></li>
                <li><a href="{{route('about')}}">About Us</a></li>
                <li><a href="">Rooms</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">News</a></li>
                <li><a href="">Gallery</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Our Staff</a></li>
                <li><a href="">Resturent</a></li>
              </ul>
            </li>
            <li><a href="">Gallery</a></li>
            <li><a href="">contact</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>