@extends('layoutweb.index')
@section('content')


<section id="headernhochung" class="align-items-center">
    <div class="container">
        <div class="khoichu ">
            @foreach($cateService as $cS)
            <h1 class="wow flipInX">{{$cS->name}}</h1>
            @endforeach
            <ul class="wow zoomIn">
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
        @foreach($cateService as $cS)
            <span class="title-top">Latest</span>
            <h1>{{$cS->name}}</h1>
        @endforeach
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

@foreach($cateService as $cS)
<section class="food-cta bg-img-center video-section" style="background-image: url(public/uploads/images/CategoryService/{{$cS->banner_service}});">
    <div class="container">
        <div class="food-cta-text">
            <h1>{{$cS->name}}</h1>
                <div class="video-play">
                    <a href="https://youtu.be/csInAyfVSwg" data-toggle="modal" data-target=".bd-example-modal-lg" class="video-popup"> <i class="fas fa-play"></i></a>
                </div>
        </div>
    </div>
    <h1 class="big-text">
        AVSON
    </h1>
</section>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content videoService" >
        {!!$cS->link_video_service!!}
        </div>
    </div>
</div>
@endforeach

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
                            <p class="price">Price: ${{number_format($service->price)}}</p>
                        </div>
                    </div>
                </div>
                @endforeach        
            </div>
        </div>
    </div>
</section>

@stop