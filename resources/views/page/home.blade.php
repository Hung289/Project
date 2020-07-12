@extends('layoutweb.index')
@section('content')
@if(Session::has('errors'))
<div class="alert alert-danger">
  {{Session::get('errors')}}
</div>
@endif
@if(Session::has('success'))
<div class="alert alert-success">
  {{Session::get('success')}}
</div>
@endif
<section class="slide1">
  <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <!-- <div class="carousel-item active" data-interval="10000">
        <img src="public/web/images/img/bg/hero-bg-1.jpg" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h1 class="chutoslide wow fadeInDown">
            Luxury Hotel <br />& Room Service <br />
            Agency
          </h1>
          <p class="chunhoslide wow fadeInLeft">
            Desires to obtain pain of itself, because it is pain, but
            because occacu stances occur in which toil and pain can procure
            him some here ways.
          </p>
        </div>
      </div>
      <div class="carousel-item" data-interval="2000">
        <img src="public/web/images/img/bg/hero-bg-2.jpg" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h1>
            Luxury Hotel <br />& Room Service <br />
            Agency
          </h1>
          <p>
            Desires to obtain pain of itself, because it is pain, but
            because occacu stances occur in which toil and pain can procure
            him some here ways.
          </p>
        </div>
      </div> -->
      @foreach($banners as $banner)
      <div class="carousel-item {{ ($loop->index+1 == 1)?'active':'' }}">
        <img src="public/uploads/images/Banner/{{$banner->banner}}" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h1>
            {{$banner->name}}
          </h1>
          <p>
            {{$banner->content}}
          </p>
        </div>
      </div>
      @endforeach

    </div>
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>

<section class="booking-section">
  <div class="continer-fuild align-items-center">
    <div class="row">
      <div class="col-md-10 offset-md-1 toinput">
        <form action="{{route('getFilterRoom')}}" method="POST">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="oto">
            <input type="date" name="searchFromDate" placeholder="Arrive Date" />
          </div>
          <div class="oto">
            <input type="date" name="searchToDate" placeholder="Depart Date" />
          </div>
          <div class="oto">
            <select name="guest" id="">
              <option value="" disabled="" selected="">Guests</option>
              <option value="1">1 guest</option>
              <option value="2">2 guest</option>
              <option value="3">3 guest</option>
              <option value="4">4 guest</option>
            </select>
          </div>
          <div class="oto">
            <select name="adult" id="">
              <option value="" disabled="" selected="">Adults</option>
              <option value="1">1 adult</option>
              <option value="2">2 adult</option>
              <option value="3">3 adult</option>
            </select>
          </div>
          <div class="oto nut">
            <button type="submit">Check Now</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<section class="tinhnang2 feature-section-two">
  <div class="wcu-section section-padding">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="section-title">
            <span class="title-top">Why Choose Us</span>
            <h1>
              Since1990 We Provides <br />
              Professional Service
            </h1>
          </div>
          <div class="listcart">
            <div class="car">
              <div class="car-header">
                <button type="button" class="active">
                  Why Choose Our Product?
                </button>

                <div class="car-body">
                  But must explain to you how all this mistaken idea
                  denounie pleasure and praising pain was borand omnis dolor
                  Tempbus autem officiis debitis rerum necessitatibus saepe
                </div>
              </div>
            </div>
            <div class="car">
              <div class="car-header">
                <button type="button">
                  Meet Respond Testing To Make Build?
                </button>

                <div class="car-body">
                  But must explain to you how all this mistaken idea
                  denounie pleasure and praising pain was borand omnis dolor
                  Tempbus autem officiis debitis rerum necessitatibus saepe
                </div>
              </div>
            </div>
            <div class="car">
              <div class="car-header">
                <button type="button">
                  Css Gird Chanllenge:Build A Template?
                </button>

                <div class="car-body">
                  But must explain to you how all this mistaken idea
                  denounie pleasure and praising pain was borand omnis dolor
                  Tempbus autem officiis debitis rerum necessitatibus saepe
                </div>
              </div>
            </div>
            <div class="car">
              <div class="car-header">
                <button type="button">Why Choose Our Product?</button>

                <div class="car-body">
                  But must explain to you how all this mistaken idea
                  denounie pleasure and praising pain was borand omnis dolor
                  Tempbus autem officiis debitis rerum necessitatibus saepe
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="feature-accordion-img text-right">
            <img src="public/web/images/img/tile-gallery/03.jpg" alt="Image" />
            <div class="degin-shape">
              <div class="shape-one">
                <img src="public/web/images/img/shape/11.png" alt="Shape" />
              </div>
              <div class="shape-two">
                <img src="public/web/images/img/shape/12.png" alt="Shape" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="tinhnang feature-section section-padding">
  <div class="container">
    <div class="section-title text-center">
      <span class="title-top">Popular Features</span>
      <h1>
        Explore Our Hotels Benefits <br />
        Why Take Our Services?
      </h1>
    </div>
    <div class="row">
      @foreach($Services as $Service)
      <div class="col-lg-4 col-md-6 mx-auto">
        <div class="single-feature-box text-center wow fadeIn animated" data-wow-duration="1500ms" data-wow-delay="800ms" style="
                visibility: visible;
                animation-duration: 1500ms;
                animation-delay: 800ms;
                animation-name: fadeIn;
              ">
          <div class="feature-icon" style="width:64px;height:70px;overflow:hidden;margin:0 auto;margin-bottom:20px">
            <img src="public/uploads/images/CategoryService/{{$Service->image}}" alt="Icon" />
          </div>
          <h4>{{$Service->name}}</h4>
          <p>
            {!!$Service->description!!}
          </p>
          <a href="{{route('serviceMaster',['id'=>$Service->id])}}" class="read-more">raed more <i class="fas fa-long-arrow-alt-right"></i></i></a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section class="mayophong latest-product section-padding">
  <div class="container">
    <div class="section-title text-center">
      <span class="title-top">Latest Product</span>
      <h1>
        Modern Hotel &amp; Room For <br />
        Luxury Living
      </h1>
    </div>
    <div class="row">
      @foreach($rooms as $room)
      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <div class="product-box text-center">
          <div class="product-img">
            @foreach($roomImages as $rI)
            <?php $check = ($rI->room_id == $room->id) ? "$rI->image" : "" ?>
            @if(!$check=="")
            <img src="public/uploads/images/rooms/{{$check}}" alt="Product" />
            @break
            @endif
            @endforeach
          </div>
          <div class="product-content">
            <i class="fas fa-bahai"></i>
            <h5><a href="{{route('roomDetail',['id'=>$room->id])}}">{{$room->name}}</a></h5>
            <p class="price">${{$room->priceNight}}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <div class="shape-one">
    <img src="public/web/images/img/shape/08.png" alt="Shape" />
  </div>
  <div class="shape-two">
    <img src="public/web/images/img/shape/03.png" alt="Shape" />
  </div>
  <div class="shape-three"></div>
</section>

<section class="sochay counter-up primary-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="counter-box style-two">
          <img src="public/web/images/img/icons/07.png" alt="icon" />
          <p class="fact-num">
            <span class="counter-number">506</span>
          </p>
          <p>Luxury Appartment</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="counter-box style-two">
          <img src="public/web/images/img/icons/08.png" alt="icon" />
          <p class="fact-num">
            <span class="counter-number">352</span>
          </p>
          <p>Modern Bedroom</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="counter-box style-two">
          <img src="public/web/images/img/icons/09.png" alt="icon" />
          <p class="fact-num">
            <span class="counter-number">420</span>
          </p>
          <p>Win Int Awards</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="counter-box style-two">
          <img src="public/web/images/img/icons/10.png" alt="icon" />
          <p class="fact-num">
            <span class="counter-number">653</span>
          </p>
          <p>Cup Of coffee</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="lookingfor">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <div class="text1">
          Looking For Luxury Hotel
        </div>
        <div class="text2">
          Booking now
        </div>
        <div class="text3">
          <a href="{{route('roomList')}}">Booking now <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-md-2">
        <!-- <div class="video-icon">
                <a href="https://www.youtube.com/watch?v=NpEaa2P7qZI"
                  ><i class="fas fa-play"></i
                ></a>
              </div> -->
      </div>
    </div>
  </div>
  <div class="lopmo"></div>
</section>

<section id="Client2">
  <div class="container">
    <div class="section-title text-center">
      <span class="title-top">Clients Feedback</span>
      <h1>Our Satisfaction People Say <br> About Our Services</h1>
    </div>
    <div class="owl-carousel owl-theme" id="hai">
      @foreach($commentBlogs as $cB)
      <div class="item">
        <div class="row">
          <div class="col-md-6">
            <img src="public/web/images/img/man-image/01.jpg" alt="">
          </div>
          <div class="col-md-5 offset-md-1">
            <div class="phanhoi">
              <div class="phanhoiavaname">
                <div class="client_avar" style="border-radius:50%;overflow:hidden">
                  <img src="public/uploads/images/user/{{$cB->user->avatar}}" alt="">
                </div>
                <div class="client_name">
                  <h3>{{$cB->user->name}}</h3>
                  <span>{{$cB->user->lever}}</span>
                </div>
              </div>
              <p>{{$cB->comment}}</p>
              <div class="dauphay">
                <img src="public/web/images/images/dauphay_03.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

</section>

<section id="ourstore">
  <div class="container">
    <div class="text1">
      News & Articles
    </div>
    <div class="text2">
      Our Store & Latest News
      <br />
      Get More Tips
    </div>
    <div class="row">
      @foreach($blogs as $blog)
      <div class="col-md-3 {{ ($loop->index+1 == 2)?'col-md-6':'' }} ">
        <div class="tomotkhoi wow wow fadeIn animated" data-wow-duration="1500ms" data-wow-delay="400ms" style="
                visibility: visible;
                animation-duration: 1500ms;
                animation-delay: 400ms;
                animation-name: fadeIn;
              ">
          <div class="khoianh" style="height:250px">
            @foreach($blogImages as $bI)
            <?php $check = ($bI->blog_id == $blog->id) ? "$bI->image" : "" ?>
            @if($check!="")
            <img src="public/uploads/images/Blog/{{$check}}" alt="" />
            @break
            @endif
            @endforeach
          </div>
          <div class="khoiduoianh " style="height:325px">
            <div class="row1">
              <img src="public/web/images/images/lich_03.png" alt="" />
              {{$blog->created_at}}
            </div>
            <div class="row2">
              {{$blog->name}}
            </div>
            <div class="row3">
              <a href="{{route('blogDetail',['id'=>$blog->id])}}">READ MORE <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- <section id="icontrenfooter">
      <div class="container">
        <div class="row">
          <div class="col-md-2 col-sm-6 moticon">
            <div class="ngoaianh">
              <img src="public/web/images/images/icontrenfooter_03.png" alt="" />
            </div>
          </div>
          <div class="col-md-2 col-sm-6 moticon">
            <div class="ngoaianh">
              <img src="public/web/images/images/icontrenfooter_03.png" alt="" />
            </div>
          </div>
          <div class="col-md-2 col-sm-6 moticon">
            <div class="ngoaianh">
              <img src="public/web/images/images/icontrenfooter_05.png" alt="" />
            </div>
          </div>
          <div class="col-md-2 col-sm-6 moticon">
            <div class="ngoaianh">
              <img src="public/web/images/images/icontrenfooter_05.png" alt="" />
            </div>
          </div>
          <div class="col-md-2 col-sm-6 moticon">
            <div class="ngoaianh">
              <img src="public/web/images/images/icontrenfooter_07.png" alt="" />
            </div>
          </div>
          <div class="col-md-2 col-sm-6 moticon">
            <div class="ngoaianh">
              <img src="public/web/images/images/icontrenfooter_09.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section> -->



@stop