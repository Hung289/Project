@extends('layoutweb.index')
@section('content')
    <section id="headernhochung" class="align-items-center">
        <div class="container">
            <div class="khoichu ">
                <h1>Blog Stand</h1>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i></li>
                    <li>Blogs</li>
                </ul>
            </div>
        </div>
    </section>  
    <!-- content blogstand -->
    <section class="blog-wrapper section-padding section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Blog Post Loop -->
                    <div class="post-loop">
                        <div class="single-blog-wrap">
                            <div class="post-thumbnail">
                                <img src="public/web/images/img/blog/01.jpg" alt="Image">
                            </div>
                            <div class="post-desc">
                                <ul class="blog-meta list-inline">
                                    <li><a href="single-blog.html"><i class="fas fa-user-alt"></i>Somalia Alexz</a>
                                    </li>
                                    <li><a href="single-blog.html"><i class="fas fa-calendar-alt"></i>20 jan
                                            2020</a></li>
                                </ul>
                                <h3><a href="single-blog-html">CSS Grid Challenge Build A Template, Win Some
                                        Smashing Prizes!</a></h3>
                                <a href="single-blog.html" class="btn filled-btn">View post <i class="fas fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="single-blog-wrap video-post">
                            <div class="post-thumbnail">
                                <img src="public/web/images/img/blog/01.jpg" alt="Image">
                                <a href="https://youtu.be/sPsbVtQbJx0" class="video-popup"> <i class="fas fa-play"></i></a>
                            </div>
                            <div class="post-desc">
                                <ul class="blog-meta list-inline">
                                    <li><a href="single-blog.html"><i class="fas fa-user-alt"></i>Somalia Alexz</a>
                                    </li>
                                    <li><a href="single-blog.html"><i class="fas fa-calendar-alt"></i>20 jan
                                            2020</a></li>
                                </ul>
                                <h3><a href="single-blog-html">Building Pattern Libraries With Shadow Dom in
                                        Markdown</a></h3>
                                <a href="single-blog.html" class="btn filled-btn">View post <i class="fas fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="single-blog-wrap quote-post">
                            <div class="post-desc">
                                <h3><a href="single-blog-html">Web Development Reading List One Real-World
                                        Accessibility, Flexbox Madness And The Ephemerality Things Build</a></h3>
                                <p class="quote-v">Zakia X Petel</p>
                            </div>
                        </div>
                        <div class="single-blog-wrap">
                            <div class="post-thumbnail">
                                <img src="public/web/images/img/blog/03.jpg" alt="Image">
                            </div>
                            <div class="post-desc">
                                <ul class="blog-meta list-inline">
                                    <li><a href="single-blog.html"><i class="fas fa-user-alt"></i>Somalia Alexz</a>
                                    </li>
                                    <li><a href="single-blog.html"><i class="fas fa-calendar-alt"></i>20 jan
                                            2020</a></li>
                                </ul>
                                <h3><a href="single-blog-html">Challenge Yourself More Often By Creating Artwork
                                        Every Day Shadow Markdown</a></h3>
                                <a href="single-blog.html" class="btn filled-btn">View post <i class="fas fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="single-blog-wrap">
                            <div class="post-thumbnail">
                                <img src="public/web/images/img/blog/04.jpg" alt="Image">
                            </div>
                            <div class="post-desc">
                                <ul class="blog-meta list-inline">
                                    <li><a href="single-blog.html"><i class="fas fa-user-alt"></i>Somalia Alexz</a>
                                    </li>
                                    <li><a href="single-blog.html"><i class="fas fa-calendar-alt"></i>20 jan
                                            2020</a></li>
                                </ul>
                                <h3><a href="single-blog-html">Things To Keep In Mind When Designing Transportation
                                        Map Weather</a></h3>
                                <a href="single-blog.html" class="btn filled-btn">View post <i class="fas fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination Wrap -->
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
                <div class="col-lg-4">
                    <!-- Sidebars Area -->
                    <div class="sidebar-wrap">
                        <div class="widget search-widget">
                            <h4 class="widget-title">Search Here</h4>
                            <form>
                                <input type="text" placeholder="Seacrh Keywords">
                                <button><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget recent-news">
                            <h4 class="widget-title">Latest News</h4>
                            <ul>
                                <li>
                                    <div class="recent-post-img">
                                        <img src="public/web/images/img/blog/rp01.jpg" alt="Image">
                                    </div>
                                    <div class="recent-post-desc">
                                        <h6><a href="">Quick Win For Impre Perfor Securitys.</a></h6>
                                        <span class="date">05 Feb 2020</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="recent-post-img">
                                        <img src="public/web/images/img/blog/rp02.jpg" alt="Image">
                                    </div>
                                    <div class="recent-post-desc">
                                        <h6><a href="">Quick Win For Impre Perfor Securitys.</a></h6>
                                        <span class="date">05 Feb 2020</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="recent-post-img">
                                        <img src="public/web/images/img/blog/rp03.jpg" alt="Image">
                                    </div>
                                    <div class="recent-post-desc">
                                        <h6><a href="">Quick Win For Impre Perfor Securitys.</a></h6>
                                        <span class="date">05 Feb 2020</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="widget category-widget">
                            <h4 class="widget-title">Gategory</h4>
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
                        <div class="widget popular-tag">
                            <h4 class="widget-title">Populer Tag</h4>
                            <div class="tag-wrap">
                                <a href="">Cleaning</a>
                                <a href="">Business</a>
                                <a href="">Booking</a>
                                <a href="">Car</a>
                                <a href="">House</a>
                                <a href="">Apartment</a>
                                <a href="">Washing</a>
                                <a href="">Agency</a>
                                <a href="">Listing</a>
                            </div>
                        </div>
                        <div class="widget banner-widget" style="background-image: url(public/web/images/img/blog/sidebar-banner.jpg);">
                            <h2>Booking Your Latest apartment</h2>
                            <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit sed do eiusmod tempor
                                incididunt ut labore </p>
                            <a href="" class="btn filled-btn">BOOK NOW <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
@stop