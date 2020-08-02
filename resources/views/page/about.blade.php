@extends('layoutweb.index')
@section('content')

<section id="headernhochung" class="align-items-center">
    <div class="container">
        <div class="khoichu ">
            <h1 class="wow flipInX">About Us</h1>
            <ul class="wow zoomIn">
                <li><a href="">Home</a></li>
                <li><i class="fas fa-angle-double-right"></i></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</section>


<section class="chungtoi about-site section-padding">
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="section-title text-right wow bounceInDown">
                    <span class="title-top with-border ">About Us</span>
                    <h1>Welcome To Avson <br> Modern Hotel Room <br> Sells Services</h1>
                </div>
            </div>
            <div class="col-md-6 wow bounceInRight">
                <p class="mb-30">
                    But I must explain you how all this mistaken idea denounci pleasure and praising pain was
                    born and I will give you a comount of the system, and expound the actual teachin
                    reatexplorer of the truth, theter-builder of human happiness one rejdislikes, or avoids
                    pleasure itself
                </p>
                <p>
                    Will give you a comount of the system, and expound the actual teachin reatexplorer of the
                    truth, theter-builder of human happiness
                </p>
            </div>
        </div>

        <div class="about-img bg-image-center" style="background-image: url(public/web/images/img/about/01.jpg);"></div>
        <div class="row no-gutters">
            <div class="offset-xl-1 col-xl-5 col-md-6 ">
                <div class="about-text-box section-bg">
                    <h2>An Professional Hotel, Living Service Provider Company</h2>
                    <p>But must explain you how all this mistaken idea deno
                        asure and praising pain was born and will give comous
                        of the system, and expound the actual teachin reatexp
                        lorer of the truth, theter-builder human happine one
                        rejdislikes, or avoids pleasure itself</p>
                    <a href="#" class="btn filled-btn">Get Started <i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="offset-lg-1 col-lg-5 col-md-6 ">
                <div class="counter">
                    <div class="row">
                        <div class="col-6">
                            <div class="counter-box">
                                <img src="public/web/images/img/icons/building.png" alt="">
                                <span class="counter-number">506</span>
                                <p>Luxury Appartment</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="counter-box">
                                <img src="public/web/images/img/icons/trophy.png" alt="">
                                <span class="counter-number">420</span>
                                <p>Win Int Awards</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="xumenh our-mission section-padding">
    <div class="container">
        <div class="section-title text-center">
            <span class="title-top">Our Mission</span>
            <h1>Modern Hotel &amp; Room For <br> Luxury Living </h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="mission-box">
                    <div class="mission-bg bg-img-center" style="background-image: url(public/web/images/img/about/02.jpg);"></div>
                    <div class="mission-desc">
                        <h4>Company Mission</h4>
                        <p>Sedut perspiciatis unde omnis iste natu error
                            sit voluptatem accusantium doloremque laudti
                            um totam rem aperiam eaque quae</p>
                        <a href="#" class="read-more">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="mission-box">
                    <div class="mission-bg bg-img-center" style="background-image: url(public/web/images/img/about/03.jpg);"></div>
                    <div class="mission-desc">
                        <h4>Company History</h4>
                        <p>Sedut perspiciatis unde omnis iste natu error
                            sit voluptatem accusantium doloremque laudti
                            um totam rem aperiam eaque quae</p>
                        <a href="#" class="read-more">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mx-auto">
                <div class="mission-box">
                    <div class="mission-bg bg-img-center" style="background-image: url(public/web/images/img/about/04.jpg);"></div>
                    <div class="mission-desc">
                        <h4>What We Do?</h4>
                        <p>Sedut perspiciatis unde omnis iste natu error
                            sit voluptatem accusantium doloremque laudti
                            um totam rem aperiam eaque quae</p>
                        <a href="#" class="read-more">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section id="clientfeedback" class="section-padding">
    <div class="container">
        <div class="section-title text-center">
            <span class="title-top">Clients Feedback</span>
            <h1>Our Satisfaction People Say <br> About Our Services </h1>
        </div>
        <div class="owl-carousel owl-theme">
            @foreach($commentBlogsss as $cB)
            <div class="item">
                <p>{{$cB->comment}}</p>
                <h5 class="feedback">{{$cB->user->name}}</h5>
            </div>
            @endforeach
        </div>
    </div>
</section>


@stop