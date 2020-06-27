@extends('layoutweb.index')
@section('content')


<section id="headernhochung" class="align-items-center">
    <div class="container">
        <div class="khoichu ">
            @foreach($cateService as $cS)


            <h1>{{$cS->name}}</h1>
            @endforeach
            <ul>
                <li><a href="{{route('indexWeb')}}">Home</a></li>
                <li><i class="fas fa-angle-double-right"></i></li>
                @foreach($cateService as $cS)
                    <li>{{$cS->name}}</li>
                @endforeach
            </ul>
        </div>
    </div>
</section>

<section class="latest-food section-padding">
    <div class="container">
        <div class="section-title text-center">
            <span class="title-top">Latest Food</span>
            <h1>Popular Dishes</h1>
        </div>
        <!-- Foods Wrap -->
        <div class="row">
            @foreach($new_service as $n_s)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-latest-food">
                    <div class="food-img">
                        <img src="public/uploads/images/servicess/{{$n_s->image}}" alt="Food">
                    </div>
                    <div class="l-food-desc d-flex justify-content-between align-items-center">
                        <h4>{{$n_s->name}}</h4>
                        <p class="price"><span class="price-currency">$</span> {{$n_s->price}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<section class="food-cta bg-img-center" style="background-image: url(public/web/images/img/food/food-cta.jpg);">
    <div class="container">
        <div class="food-cta-text">
            <h1>Special Offer <span>For Burgers</span></h1>
            <a href="" class="btn filled-btn">SHOP NOW <i class="far fa-long-arrow-right"></i></a>
        </div>
    </div>
    <h1 class="big-text">
        Burgers
    </h1>
</section>


<section class="food-section section-padding">
    <div class="container">
        <div class="section-title text-center">
            <span class="title-top">Regular Food</span>
            @foreach($cateService as $cS)
            <h1>Main Menu / {{$cS->name}} list</h1>
            @endforeach
        </div>
        <div class="regular-food-wrap">
            <div class="row">
                @foreach($Services as $service)
                <div class="col-lg-6">
                    <div class="single-regular-food d-flex  align-items-center">
                        <div class="food-img" style="width:100px;height:100px;border-radius:100%;overflow:hidden">
                            <img src="public/uploads/images/servicess/{{$service->image}}" alt="Food">
                        </div>
                        <div class="food-dec" style="overflow: hidden;max-width:70%;flex-wrap: wrap;">
                            <h4>{{$service->name}}</h4>
                            <p>{!!$service->description!!}</p>
                            <p class="price">$ {{number_format($service->price)}}</p>
                            <a href="{{route('addService',['id'=>$service->id])}}">Thêm vào giỏ</a>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-12 text-center">
                    <a href="#" class="btn filled-btn">View More Food <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

@stop