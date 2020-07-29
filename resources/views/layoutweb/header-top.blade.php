<section>
  <div class="header-top-area section-bg">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-xl-6 col-lg-7 col-md-6">
          <ul class="top-contact-info list-inline">
            <li>
              <i class="fas fa-map-marker-alt"></i>@foreach($address as $a)
              {{$a->data}}
              @endforeach
            </li>
          </ul>
        </div>
        <div class="col-xl-6 col-lg-5 col-md-6">
          <div class="top-right text-right">
            @if(!Auth::check())
            <ul class="top-menu list-inline d-inline">
              <li class="khac"><a href="{{route('getloginWeb')}}">Login</a></li>
              <li><a href="{{route('getRegisterWeb')}}">Register</a></li>
            </ul>
            @else
            <ul class="top-menu list-inline d-inline">
              <li class="khac chouser">
                <img id="avatar_auth" src="public/uploads/images/user/{{Auth::user()->avatar}}" class="img-circle elevation-2" alt="User Image" style="width: 30px;height:30px;border-radius: 50%">
                <a href="{{route('CustomerInfor',['id'=>Auth::User()->id])}}">{{Auth::User()->email}}</a>
                <div class="thongtinuser">
                  <ul class="menuuser">
                    <li><a href="{{route('CustomerInfor',['id'=>Auth::User()->id])}}">Thông tin tài khoản</a> </li>
                    <li><a href="{{route('historyBooking')}}">Lịch sử đặt phòng</a></li>
                  </ul>
                </div>
              </li>
              <li><a href="{{route('getLogoutWeb')}}">Logout</a></li>
            </ul>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</section>