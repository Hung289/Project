@extends('layoutweb.index')
@section('content')

<section id="headernhochung" class="align-items-center">
    <div class="container">
        <div class="khoichu ">
            <h1>Room Detail</h1>
            <ul>
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
                            <div class="carousel-inner">
                                @foreach($roomImages as $rI)
                                <?php $check = ($rI->room_id == $room->id) ? "$rI->image" : "" ?>
                                @if(!$check=="")
                                <div class="carousel-item ">
                                    <img src="public/uploads/images/rooms/{{$check}}" class="d-block w-100" alt="...">
                                </div>
                                @endif
                                @endforeach
                                <div class="carousel-item active">
                                    <img src="public/uploads/images/rooms/{{$rImage->image}}" class="d-block w-100" alt="...">
                                </div>

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
                        <div class="room-cat">
                            <a href="">{{$room->cateRoom->name}}</a>
                        </div>
                        <h2 class="entry-title">{{$room->name}}</h2>
                        <ul class="entry-meta list-inline">
                            <li><i class="fas fa-bed"></i>{{$room->bed}} Bed</li>
                            <li><i class="fas fa-bath"></i>{{$room->bath}} Baths</li>
                            <li><i class="fas fa-ruler-triangle"></i>{{$room->area}} m</li>
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

                                                {!!$room->description!!}
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
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.2028126423584!2d105.7839097225188!3d21.04657966784879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab32dd484c53%3A0x4201b89c8bdfd968!2zMjM4IEhvw6BuZyBRdeG7kWMgVmnhu4d0LCBD4buVIE5odeG6vywgQ-G6p3UgR2nhuqV5LCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1589343014159!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
                                        <div class="reviews-count">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="count-num d-flex align-items-center justify-content-center">
                                                        <p> <span>6.8</span>Suprrb</p>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="reviews-bars">
                                                        <!-- Single bar -->
                                                        <div class="single-bar">
                                                            <p class="bar-title">Acaommodation
                                                                <span>8.0</span></p>
                                                            <div class="bar" data-width="80%">
                                                                <div class="bar-inner" style="width: 80%;"></div>
                                                            </div>
                                                        </div>
                                                        <!-- Single bar -->
                                                        <div class="single-bar">
                                                            <p class="bar-title">Destination
                                                                <span>6.0</span></p>
                                                            <div class="bar" data-width="60%">
                                                                <div class="bar-inner" style="width: 60%;"></div>
                                                            </div>
                                                        </div>
                                                        <!-- Single bar -->
                                                        <div class="single-bar">
                                                            <p class="bar-title">Transport
                                                                <span>7.0</span></p>
                                                            <div class="bar" data-width="70%">
                                                                <div class="bar-inner" style="width: 70%;"></div>
                                                            </div>
                                                        </div>
                                                        <!-- Single bar -->
                                                        <div class="single-bar">
                                                            <p class="bar-title">Overall
                                                                <span>9.0</span></p>
                                                            <div class="bar" data-width="90%">
                                                                <div class="bar-inner" style="width: 90%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="comment-area">
                                            <h5 class="tab-title">All Reviews</h5>
                                            <ul class="comment-list">
                                                <li>
                                                    <div class="comment-autor">
                                                        <img src="public/web/images/img/blog-details/04.jpg" alt="reviews">
                                                    </div>
                                                    <div class="comment-desc">
                                                        <h6>Alexzeder Alex <span class="comment-date"> 25 Feb
                                                                2020</span></h6>
                                                        <p>But I must explain to you how all this mistaken idea
                                                            of denouncing pleasure
                                                            and praising pain was born and I will give you a
                                                            complete account</p>
                                                        <a href="#" class="reply-comment">Reply <i class="fas fa-long-arrow-right"></i></a>
                                                        <div class="autor-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-alt"></i>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div> -->
                                        <div class="comment-area">
                                            <h2 class="comment-title">Client’s Comments</h2>
                                            @foreach($reviewRoom as $rR)
                                            <ul class="comment-list">
                                                <li>
                                                    <div class="comment-autor">
                                                        <img src="public/uploads/images/user/{{$rR->user->avatar}}" alt="Chưa có avatar">
                                                    </div>
                                                    <div class="comment-desc">
                                                        <h6>{{$rR->user->name}}<span class="comment-date"> {{$rR->created_at}}</span></h6>
                                                        <p>{{$rR->content}}</p>
                                                        <a href="#" class="reply-comment">Reply Commets <i class="fas fa-long-arrow-right"></i></a>
                                                    </div>
                                                    @foreach($reviewRoomChild->where('parent',$rR->id) as $cC)
                                                    <ul class="children">
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
                                                    <form action="{{route('postReviewRoomChild',['id'=>$room->id,'parent'=>$rR->id])}}" method="POST" style="display:flex">
                                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                        <div>
                                                            <input type="text" class="formcmt" name="contentChild">
                                                        </div>
                                                        <div>
                                                            <button type="submit" class="btn btn-primary nutche"><i class="fas fa-paper-plane"></i></button>
                                                        </div>
                                                    </form>
                                                </li>
                                            </ul>
                                            @endforeach
                                        </div>
                                        <div class="review-form">
                                            <h5 class="tab-title">Write a Review</h5>
                                            <div class="star-given-box">
                                                <ul class="list-inline">
                                                    <li>
                                                        <p class="st-title">Acaommodation</p>
                                                        <p class="rating-box">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="st-title">Destination</p>
                                                        <p class="rating-box">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="st-title">Transport</p>
                                                        <p class="rating-box">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="st-title">Overall</p>
                                                        <p class="rating-box">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <form action="{{route('postReviewRoom',['id'=>$room->id])}}" method="POST">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <div class="input-wrap text-area">
                                                    <textarea placeholder="Write Review" name="content"></textarea>
                                                    <i class="fas fa-pencil"></i>
                                                </div>
                                                <!-- <div class="input-wrap">
                                                    <input type="text" placeholder="Name" id="name">
                                                    <i class="fas fa-user-alt"></i>
                                                </div>
                                                <div class="input-wrap">
                                                    <input type="text" placeholder="Your Email" id="email">
                                                    <i class="fas fa-envelope"></i>
                                                </div> -->
                                                <div class="input-wrap">
                                                    <button type="submit" class="btn btn-block">Submit</button>
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
                        <form action="{{route('cart.add',['id'=>$room->id])}}" method="GET">
                            <div class="input-wrap">
                                <input type="date" placeholder="Arrive Date" name="ArriveDate">
                            </div>
                            <div class="input-wrap">
                                <input type="date" placeholder="Depart Date" name="DepartDate">
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
                        <div class="single-cat bg-img-center" style="background-image: url(public/web/images/img/blog/cat-01.jpg);">
                            <a href="">Luxury Room</a>
                        </div>
                        <div class="single-cat bg-img-center" style="background-image: url(public/web/images/img/blog/cat-02.jpg);">
                            <a href="">Couple Room</a>
                        </div>
                        <div class="single-cat bg-img-center" style="background-image: url(public/web/images/img/blog/cat-03.jpg);">
                            <a href="">Hotel Views</a>
                        </div>
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
            <div class="col-lg-4 col-md-6">
                <!-- Single Room -->
                <div class="single-room">
                    <div class="room-thumb">
                        <img src="public/web/images/img/rooms/01.jpg" alt="Room">
                    </div>
                    <div class="room-desc">
                        <div class="room-cat">
                            <p>Guest House</p>
                        </div>
                        <h4><a href="single-room.html">Modern Guest Rooms</a></h4>
                        <p class="p">
                            Avoids pleasure itself, because pleasure,
                            but because those who do not know how
                            to pursue pleasure rationally encounter
                        </p>
                        <ul class="room-info list-inline">
                            <li><i class="fas fa-bed"></i>3 Bed</li>
                            <li><i class="fas fa-bath"></i>2 Baths</li>
                            <li><i class="fas fa-ruler-triangle"></i>72 m</li>
                        </ul>
                        <div class="room-price">
                            <p>$180.00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Single Room -->
                <div class="single-room">
                    <div class="room-thumb">
                        <img src="public/web/images/img/rooms/02.jpg" alt="Room">
                    </div>
                    <div class="room-desc">
                        <div class="room-cat">
                            <p>Meeting Room</p>
                        </div>
                        <h4><a href="single-room.html">Conference Room</a></h4>
                        <p class="p">
                            Great explorer of the truth, the master-
                            builder of human happiness one rejects,
                            dislikes avoids pleasure because
                        </p>
                        <ul class="room-info list-inline">
                            <li><i class="fas fa-bed"></i>3 Bed</li>
                            <li><i class="fas fa-bath"></i>2 Baths</li>
                            <li><i class="fas fa-ruler-triangle"></i>72 m</li>
                        </ul>
                        <div class="room-price">
                            <p>$205.00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mx-auto">
                <!-- Single Room -->
                <div class="single-room">
                    <div class="room-thumb">
                        <img src="public/web/images/img/rooms/03.jpg" alt="Room">
                    </div>
                    <div class="room-desc">
                        <div class="room-cat">
                            <p>Guest Room</p>
                        </div>
                        <h4><a href="single-room.html">Deluxe Couple Room</a></h4>
                        <p class="p">
                            Provident, similique sunt in culpa qui
                            officia deserunt mollitia animi laborum
                            dolorum fuga. Et harum quidem
                        </p>
                        <ul class="room-info list-inline">
                            <li><i class="fas fa-bed"></i>3 Bed</li>
                            <li><i class="fas fa-bath"></i>2 Baths</li>
                            <li><i class="fas fa-ruler-triangle"></i>72 m</li>
                        </ul>
                        <div class="room-price">
                            <p>$199.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Last room end -->

@stop