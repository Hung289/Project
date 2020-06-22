@extends('layoutweb.index')
@section('content')

<section id="headernhochung" class="align-items-center">
        <div class="container">
            <div class="khoichu ">
                <h1>Our Gallery</h1>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i></li>
                    <li>Our Gallery</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="gallery-warp section-padding">
        <div class="container">
            <div class="gallery-filter text-center">
                <ul class="list-inline">
                    <li class="active" data-filter="*">Show All</li>
                    <li data-filter=".luxury">luxury</li>
                    <li data-filter=".twieen">Twieen</li>
                    <li data-filter=".couple">Couple</li>
                    <li data-filter=".family">Family</li>
                    <li data-filter=".conference">Conference</li>
                </ul>
            </div>
            <div class="gallery-items">
                <div class="row gallery-filter-items" >

                    <div class="col-lg-4 col-md-6 col-sm-6 luxury conference" >
                        <div class="gallery-item" style="background-image: url(public/web/images/img/gallery/01.jpg);">
                            <div class="gallery-content">
                                <h3><a href="">Luxuey Hotel</a></h3>
                                <a href="" class="view-gallery"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 twieen family" >
                        <div class="gallery-item" style="background-image: url(public/web/images/img/gallery/02.jpg);">
                            <div class="gallery-content">
                                <h3><a href="">Luxuey Hotel</a></h3>
                                <a href="" class="view-gallery"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 conference twieen" >
                        <div class="gallery-item" style="background-image: url(public/web/images/img/gallery/03.jpg);">
                            <div class="gallery-content">
                                <h3><a href="">Luxuey Hotel</a></h3>
                                <a href="" class="view-gallery"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 couple twieen conference" >
                        <div class="gallery-item" style="background-image: url(public/web/images/img/gallery/04.jpg);">
                            <div class="gallery-content">
                                <h3><a href="">Luxuey Hotel</a></h3>
                                <a href="" class="view-gallery"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 twieen family" >
                        <div class="gallery-item" style="background-image: url(public/web/images/img/gallery/05.jpg);">
                            <div class="gallery-content">
                                <h3><a href="">Luxuey Hotel</a></h3>
                                <a href="" class="view-gallery"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 luxury conference" >
                        <div class="gallery-item" style="background-image: url(public/web/images/img/gallery/06.jpg);">
                            <div class="gallery-content">
                                <h3><a href="">Luxuey Hotel</a></h3>
                                <a href="" class="view-gallery"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 luxury couple" >
                        <div class="gallery-item" style="background-image: url(public/web/images/img/gallery/07.jpg);">
                            <div class="gallery-content">
                                <h3><a href="">Luxuey Hotel</a></h3>
                                <a href="" class="view-gallery"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 couple twieen conference" >
                        <div class="gallery-item" style="background-image: url(public/web/images/img/gallery/08.jpg);">
                            <div class="gallery-content">
                                <h3><a href="">Luxuey Hotel</a></h3>
                                <a href="" class="view-gallery"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 luxury conference" >
                        <div class="gallery-item" style="background-image: url(public/web/images/img/gallery/09.jpg);">
                            <div class="gallery-content">
                                <h3><a href="">Luxuey Hotel</a></h3>
                                <a href="" class="view-gallery"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination-wrap">
                <ul class="list-inline">
                    <li><a href=""><i class="fas fa-angle-left"></i></a></li>
                    <li class="active"><a href="">01</a></li>
                    <li><a href="">02</a></li>
                    <li><a href="">03</a></li>
                    <li><a href=""><i class="fas fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div>
    </section>

@stop