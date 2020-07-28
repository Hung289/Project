@extends('layoutweb.index')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<section id="headernhochung" class="align-items-center">
    <div class="container">
        <div class="khoichu ">
            <h1 class="wow flipInX">Room Detail</h1>
            <ul class="wow zoomIn">
                <li><a href="">Home</a></li>
                <li><i class="fas fa-angle-double-right"></i></li>
                <li>Room Detail</li>
            </ul>
        </div>
    </div>
</section>



@if(Session::has('error_login'))
<div class="alert alert-danger ">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    {{Session::get('error_login')}}</small>
</div>
@endif
@if(Session::has('error'))
<div class="alert alert-danger">
    {{Session::get('error')}}
</div>
@endif
@if(Session::has('success'))
<div class="alert alert-success">
    {{Session::get('success')}}
</div>
@endif
<section class="chitietphong room-details-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Room Details -->
                <div class="room-details">
                    <div class="entry-header">
                        <div id="carouselExampleInterval" class="carousel slide post-thumb" data-ride="carousel">
                            <div class="carousel-inner roomD">
                                <?php $i = 0; ?>
                                @foreach($roomImages as $rI)
                                <?php $check = ($rI->room_id == $room->id) ? "$rI->image" : "" ?>
                                @if(!$check=="")
                                <div class="carousel-item <?php if ($i == 0) {
                                                                echo ' active';
                                                            }      ?> ">
                                    <img src="public/uploads/images/rooms/{{$check}}" class="d-block w-100" alt="...">
                                </div>
                                <?php $i++; ?>
                                @endif
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
                        <!-- lưu id phòng -->
                        <input type="hidden" name="roomD" value="{{$room->id}}">
                        <!--  -->
                        <!-- Lưu id người đang đăng nhập -->
                        @if(Auth::check())
                        <input type="hidden" name="userId" value="{{Auth::User()->id}}">
                        @endif
                        <!--  -->
                        <div class="room-cat">
                            <a href="">{{$room->cateRoom->name}}</a>
                        </div>
                        <h2 class="entry-title">{{$room->name}}</h2>
                        <div id="khoisao">
                            <div id="ll">
                                @for($i=1;$i<=5;$i++) @if($i<=$numberStar) <i class="fas fa-star"></i>
                                    @else
                                    <i class="far fa-star"></i>
                                    @endif
                                    @endfor
                            </div>
                        </div>
                        <ul class="entry-meta list-inline">
                            <li><i class="fas fa-bed"></i>{{$room->bed}} Bed</li>
                            <li><i class="fas fa-bath"></i>{{$room->bath}} Baths</li>
                            <li><i class="fas fa-ruler-combined"></i>{{$room->area}} m</li>
                        </ul>
                    </div>
                    <div class="room-details-tab">
                        <div class="row">
                            <div class="col-sm-3">
                                <ul class="nav desc-tab-item" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#desc" role="tab" data-toggle="tab">Room Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#location" role="tab" data-toggle="tab">Location</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#reviews" role="tab" data-toggle="tab">Reviews</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-9">
                                <div class="tab-content desc-tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active show" id="desc">
                                        <h5 class="tab-title">Room Details </h5>
                                        <div class="entry-content">
                                            <p>
                                                {!!$room->content!!}
                                            </p>
                                            <div class="entry-gallery-img">
                                                <figure class="entry-media-img">
                                                    <img src="public/uploads/images/rooms/{{$rImage->image}}" alt="Image">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="room-specification">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-12">
                                                    <div class="pricing-plan">
                                                        <h4 class="specific-title"> Pricing Plan </h4>
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Nightly: </td>
                                                                    <td class="big">${{$room->priceNight}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Weekends (Sat_sun): </td>
                                                                    <td class="big">${{$room->priceWeekends}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Weekly (7d+): </td>
                                                                    <td class="big">${{$room->priceWeekly}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cleaning Fee: </td>
                                                                    <td class="big">${{$room->priceClearFee}}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 ">
                                                    <div class="feature">
                                                        <h4 class="specific-title"> Features </h4>
                                                        <ul>
                                                            @if($room->gym==1)
                                                            <li>Gym </li>
                                                            @endif
                                                            @if($room->Laundry==1)
                                                            <li>Laundry </li>
                                                            @endif
                                                            @if($room->tvCable==1)
                                                            <li>tvCable </li>
                                                            @endif
                                                            @if($room->wifi==1)
                                                            <li>wifi </li>
                                                            @endif

                                                        </ul>
                                                    </div>
                                                    <div class="facilities">
                                                        <h4 class="specific-title"> Facilities </h4>
                                                        <ul>
                                                            @if($room->FreeParking==1)
                                                            <li>FreeParking </li>
                                                            @endif
                                                            @if($room->Security==1)
                                                            <li>Security </li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="accomodation">
                                                        <h4 class="specific-title"> Features </h4>
                                                        <ul>
                                                            <li>Master Room</li>
                                                            <li>1 King Size</li>
                                                            <li>2 Guests</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bedrooms">
                                                        <h4 class="specific-title"> Bedrooms </h4>
                                                        <ul>
                                                            <li>1 Queen Size</li>
                                                            <li>2 Guests</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="location">

                                        <h5 class="tab-title">Location</h5>
                                        <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 500px;">
                                            <!-- <iframe src="{{$room->link_map}}" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
                                            {!!$room->link_map!!}
                                        </div>
                                        <div class="room-location">
                                            <div class="row">
                                                <div class="col-4">
                                                    <h6>City</h6>
                                                    <p>{{$room->location}}</p>
                                                </div>
                                                <div class="col-4">
                                                    <h6>Phone</h6>
                                                    <p>+901280-89121</p>
                                                    <p>+901280-89121</p>
                                                </div>
                                                <div class="col-4">
                                                    <h6>Email</h6>
                                                    <p>room@avson.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane fade" id="reviews">
                                        <h5 class="tab-title">Reviews</h5>
                                        <div class="reviews-count" id="c1">
                                            <div class="row" id="cc">
                                                <div class="col-4">
                                                    <div class="count-num d-flex align-items-center justify-content-center">
                                                        <p> <span>{{number_format($tb,2)}}</span>Star</p>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div id="demo"></div>
                                                    <div class="reviews-bars " id="loadvote">
                                                        <!-- Single bar -->
                                                        <div class="single-bar">
                                                            <p class="bar-title">Acaommodation
                                                                <span>{{number_format($avgStarAcao,2)}}</span></p>
                                                            <div class="bar" data-width="{{$avgStarAcao}}%">
                                                                <div class="bar-inner" style="width:{{($avgStarAcao/5*100)}}%;"></div>
                                                            </div>
                                                        </div>
                                                        <!-- Single bar -->
                                                        <div class="single-bar">
                                                            <p class="bar-title">Destination
                                                                <span>{{number_format($avgStarDes,2)}}</span></p>
                                                            <div class="bar" data-width="{{$avgStarDes}}%">
                                                                <div class="bar-inner" style="width: {{$avgStarDes/5*100}}%;"></div>
                                                            </div>
                                                        </div>
                                                        <!-- Single bar -->
                                                        <div class="single-bar">
                                                            <p class="bar-title">Transport
                                                                <span>{{number_format($avgStarTran,2)}}</span></p>
                                                            <div class="bar" data-width="{{$avgStarTran}}%">
                                                                <div class="bar-inner" style="width: {{$avgStarTran/5*100}}%;"></div>
                                                            </div>
                                                        </div>
                                                        <!-- Single bar -->
                                                        <div class="single-bar">
                                                            <p class="bar-title">Overall
                                                                <span>{{number_format($avgStarOver,2)}}</span></p>
                                                            <div class="bar" data-width="{{$avgStarOver}}%">
                                                                <div class="bar-inner" style="width: {{$avgStarOver/5*100}}%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-area" id="khoicmt">

                                            <h2 class="comment-title">Client’s Comments</h2>
                                            <?php $i = 0 ?>
                                            @foreach($room->reviewRoom as $rR)
                                            @if($rR->status == 0)
                                            <ul class="comment-list" id="cckhoicmt">
                                                <li>
                                                    <div class="comment-autor">
                                                        <img src="public/uploads/images/user/{{$rR->user->avatar}}" alt="Chưa có avatar">
                                                    </div>
                                                    <div class="comment-desc">
                                                        <h6>{{$rR->user->name}}<span class="comment-date"> {{$rR->created_at}}</span></h6>
                                                        <p>{{$rR->content}}</p>
                                                        <a href="#" id="{{$rR->id}}" class="reply-comment">Reply Commets ( {{$rR->ReviewRoomchilds->count()}} ) <i class="fas fa-long-arrow-alt-right"></i></a>
                                                    </div>
                                                    <div id="cmt-child-{{$rR->id}}" class="cmtChild">
                                                        <div id="khoicmtChild">
                                                            @foreach($rR->ReviewRoomchilds as $cC)
                                                            <input type="hidden" name="parentcmtchild" value="{{$cC->id}}">
                                                            <ul class="children" id="cckhoicmtChild">
                                                                <li>
                                                                    <div class="comment-autor">
                                                                        <img src="public/uploads/images/user/{{$cC->user->avatar}}" alt="Chưa có avatar">
                                                                    </div>
                                                                    <div class="comment-desc">
                                                                        <h6>{{$cC->user->name}} <span class="comment-date"> {{$cC->created_at->diffForHumans()}}</span></h6>
                                                                        <p>{{$cC->content}}</p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <!-- <form action="{{route('postReviewRoomChild',['id'=>$room->id,'parent'=>$rR->id])}}" method="POST" style="display:flex">
                                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                        <div>
                                                            <input type="text" class="formcmt" name="contentChild">
                                                        </div>
                                                        <div>
                                                            <button type="submit" class="btn btn-primary nutche"><i class="fas fa-paper-plane"></i></button>
                                                        </div>
                                                    </form> -->
                                                    <form style="display:flex">
                                                        <div>
                                                            <input type="text" class="formcmt" name="contentChild" id="form-cmt-{{$rR->id}}">
                                                        </div>
                                                        <div>
                                                            <button type="button" id="{{$rR->id}}" url="{{route('postReviewRoomChild',['id'=>$room->id,'parent'=>$rR->id])}}" class="btn btn-primary nutche"><i class="fas fa-paper-plane"></i></button>
                                                        </div>
                                                    </form>

                                                </li>
                                            </ul>
                                            @endif
                                            <?php $i++ ?>
                                            @endforeach
                                        </div>
                                        <div class="review-form">
                                            <h5 class="tab-title">Write a Review</h5>
                                            <div class="star-given-box">
                                                <ul class="list-inline">
                                                    <li class="To">
                                                        <p class="st-title">Acaommodation</p>
                                                        <!-- <p class="rating-box">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </p> -->
                                                        <ul class="ratings">
                                                            <li class="star" data-star="5"></li>
                                                            <li class="star" data-star="4"></li>
                                                            <li class="star" data-star="3"></li>
                                                            <li class="star" data-star="2"></li>
                                                            <li class="star" data-star="1"></li>
                                                        </ul>
                                                    </li>
                                                    <li class="To">
                                                        <p class="st-title">Destination</p>
                                                        <ul class="ratings">
                                                            <li class="star1" data-star="5"></li>
                                                            <li class="star1" data-star="4"></li>
                                                            <li class="star1" data-star="3"></li>
                                                            <li class="star1" data-star="2"></li>
                                                            <li class="star1" data-star="1"></li>
                                                        </ul>
                                                    </li>
                                                    <li class="To">
                                                        <p class="st-title">Transport</p>
                                                        <ul class="ratings">
                                                            <li class="star2" data-star="5"></li>
                                                            <li class="star2" data-star="4"></li>
                                                            <li class="star2" data-star="3"></li>
                                                            <li class="star2" data-star="2"></li>
                                                            <li class="star2" data-star="1"></li>
                                                        </ul>
                                                    </li>
                                                    <li class="To">
                                                        <p class="st-title">Overall</p>
                                                        <ul class="ratings">
                                                            <li class="star3" data-star="5"></li>
                                                            <li class="star3" data-star="4"></li>
                                                            <li class="star3" data-star="3"></li>
                                                            <li class="star3" data-star="2"></li>
                                                            <li class="star3" data-star="1"></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- <form action="{{route('postReviewRoom',['id'=>$room->id])}}" method="POST">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <div class="input-wrap text-area">
                                                    <textarea placeholder="Write Review" name="content"></textarea>
                                                    <i class="fas fa-pencil"></i>
                                                    @error('content')
                                                    <small class="error help-block" style="color:red">{{$message}}</small>
                                                    @enderror
                                                </div>
                                                <div class="input-wrap">
                                                    <button type="button" class="btn btn-block nutguiblto">Submit</button>
                                                </div>
                                            </form> -->
                                            <form>
                                                <div class="input-wrap text-area">
                                                    <textarea placeholder="Write Review" name="content"></textarea>
                                                    <i class="fas fa-pencil"></i>
                                                    @error('content')
                                                    <small class="error help-block" style="color:red">{{$message}}</small>
                                                    @enderror
                                                </div>
                                                <div class="input-wrap">
                                                    <button url="{{route('postReviewRoom',['id'=>$room->id])}}" type="button" class="btn btn-block nutguiblto">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- Sidebars Area -->

                <div class="sidebar-wrap">
                    <div class="widget booking-widget">
                        <h4 class="widget-title">$160.00 <span>Night</span></h4>
                        <div class="khoitime">
                            <h5>Booking time for this room</h5>
                            <ul class="khoilisttime">
                                @foreach($listDateFormTo as $listDFT)
                                <li>{{$listDFT->from_date}} - {{$listDFT->to_date}}</li>
                                @endforeach
                            </ul>
                        </div>
                        <form action="{{route('cart.add',['id'=>$room->id])}}" method="GET">
                            <div class="input-wrap">
                                <input type="date" placeholder="Arrive Date" min="<?php echo date("Y-m-d") ?>" name="ArriveDate">
                            </div>
                            <div class="input-wrap">
                                <input type="date" placeholder="Depart Date" min="<?php echo date("Y-m-d", strtotime(date('Y-m-d') . "+1 days")); ?>" name="DepartDate">
                                <i class=""></i>
                            </div>
                            <div class="input-wrap">
                                <button class="btn filled-btn btn-block">
                                    book now <i class="fas fa-long-arrow-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="widget category-widget">
                        <h4 class="widget-title">Category</h4>
                        @foreach($listCateRoom as $lCR)
                        <div class="single-cat bg-img-center" style="background-image: url(public/uploads/images/CategoryRoom/{{$lCR->image}});">
                            <a href="{{route('RoomListMaster',['id'=>$lCR->id])}}">{{$lCR->name}}</a>
                        </div>
                        @endforeach
                    </div>
                    <div class="widget banner-widget" style="background-image: url(public/web/images/img/blog/sidebar-banner.jpg);">
                        <h2>Booking Your Latest apartment</h2>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit sed do eiusmod tempor
                            incididunt ut labore </p>
                        <a href="" style="height: 72px;" class="btn filled-btn">BOOK NOW <i class="fas fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Last room start -->
<section class="latest-room-d section-bg section-padding">
    <div class="container">
        <!-- Section Title -->
        <div class="section-title text-center">
            <span class="title-top">Latest Product</span>
            <h1>Explore Latest Product</h1>
        </div>
        <div class="row">
            @foreach($lastRoom as $lR)
            <div class="col-lg-4 col-md-6 wow fadeInLeft">
                <!-- Single Room -->
                <div class="single-room">
                    <div class="room-thumb">
                        @foreach($roomImages as $rI)
                        <?php $check = ($rI->room_id == $lR->id) ? "$rI->image" : "" ?>
                        @if(!$check=="")
                        <img src="public/uploads/images/rooms/{{$check}}" alt="Room">
                        @break
                        @endif
                        @endforeach
                    </div>
                    <div class="room-desc">
                        <div class="room-cat">
                            <p>{{$lR->cateRoom->name}}</p>
                        </div>
                        <h4 style="overflow: hidden;white-space: nowrap;text-anchor: ;text-overflow: ellipsis;"><a href="{{route('roomDetail',['id'=>$lR->id])}}">{{$lR->name}}</a></h4>
                        <p class="p">
                            {!!$lR->description!!}
                        </p>
                        <ul class="room-info list-inline">
                            <li><i class="fas fa-bed"></i>{{$lR->bed}} Bed</li>
                            <li><i class="fas fa-bath"></i>{{$lR->bath}} Baths</li>
                            <li><i class="fas fa-ruler-triangle"></i>{{$lR->area}} m</li>
                        </ul>
                        <div class="room-price">
                            <p>{{number_format($lR->priceNight)}} $</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Last room end -->

@stop