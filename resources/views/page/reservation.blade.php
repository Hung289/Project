@extends('layoutweb.index')
@section('content')

<section id="headernhochung" class="align-items-center">
        <div class="container">
            <div class="khoichu ">
                <h1 class="wow flipInX">Reservation</h1>
                <ul class="wow zoomIn">
                    <li><a href="">Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i></li>
                    <li>Resvervation</li>
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

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-latest-food">
                        <div class="food-img">
                            <img src="public/web/images/img/food/01.jpg" alt="Food">
                        </div>
                        <div class="l-food-desc d-flex justify-content-between align-items-center">
                            <h4>London <br> Mashroom</h4>
                            <p class="price"><span class="price-currency">$</span> 59</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-latest-food">
                        <div class="food-img">
                            <img src="public/web/images/img/food/02.jpg" alt="Food">
                        </div>
                        <div class="l-food-desc d-flex justify-content-between align-items-center">
                            <h4>Special <br> Hot Burger</h4>
                            <p class="price"><span class="price-currency">$</span> 29</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-latest-food">
                        <div class="food-img">
                            <img src="public/web/images/img/food/03.jpg" alt="Food">
                        </div>
                        <div class="l-food-desc d-flex justify-content-between align-items-center">
                            <h4>Italian <br> Supper Pizza</h4>
                            <p class="price"><span class="price-currency">$</span> 85</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-latest-food">
                        <div class="food-img">
                            <img src="public/web/images/img/food/11.jpg" alt="Food">
                        </div>
                        <div class="l-food-desc d-flex justify-content-between align-items-center">
                            <h4>Special <br> Hot Burger</h4>
                            <p class="price"><span class="price-currency">$</span> 47</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="video-section bg-img-center" style="background-image: url(public/web/images/img/reservation/02.jpg);">
        <div class="video-play">
            <a href="https://youtu.be/csInAyfVSwg" data-toggle="modal" data-target=".bd-example-modal-lg" class="video-popup"> <i class="fas fa-play"></i></a>
        </div>
    </section>

    <!-- modal -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/8vH5yTXvWpI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    </div>

    <section class="reserv-form-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <!-- Section Title -->
                    <div class="section-title book-table-desc">
                        <span class="title-top">Book Your Table</span>
                        <h1>Reservation</h1>
                        <p>
                            But I must explain to you how all this mistaken idea denouncing pleasure and praising
                            pain was born and I will give you a complete account of the system, and expound the
                            actual teachings of the great explorer of the truth, the master-builder of human
                            hapness. No one rejects dislikes or avoids pleasure itself
                        </p>
                        <a href="contact.html" class="read-more">Get Started <i class="fas fa-long-arrow-right"></i></a>
                        <div class="book-table-img">
                            <img src="public/web/images/img/reservation/03.jpg" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-7 offset-lg-1">
                    <div class="booking-form-wrap">
                        <h2 class="b-form-title">Book A Table</h2>
                        <div class="b-form section-bg">
                            <form>
                                <label for="name">Your Full Name</label>
                                <div class="input-wrap">
                                    <input type="text" placeholder="Your Full Name" id="name">
                                    <i class="fas fa-user-alt"></i>
                                </div>
                                <label for="email">Your Email Address</label>
                                <div class="input-wrap">
                                    <input type="text" placeholder="Your Email" id="email">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <label for="msg">Write Message</label>
                                <div class="input-wrap text-area">
                                    <textarea placeholder="Write Message" id="msg"></textarea>
                                    <i class="fas fa-pencil"></i>
                                </div>
                                <button type="submit" class="btn filled-btn">Book Now <i class="fas fa-long-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop