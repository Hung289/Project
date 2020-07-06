@extends('layoutweb.index')
@section('content')

<section id="headernhochung" class="align-items-center">
    <div class="container">
        <div class="khoichu ">
            <h1>Blog Detail</h1>
            <ul>
                <li><a href="">Home</a></li>
                <li><i class="fas fa-angle-double-right"></i></li>
                <li>Blogs Details</li>
            </ul>
        </div>
    </div>
</section>


<!-- content blogstand -->

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
<section class="tinchitiet blog-details-wrapper section-padding section-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8  ">
                <div class="post-details">
                    <div class="entry-header">
                        <div class="post-thumb">
                            <img src="public/uploads/images/Blog/{{$bImage->image}}" alt="Image">
                        </div>
                        <ul class="entry-meta list-inline">
                            <li><a href="single-blog.html"><i class="fas fa-user-alt"></i>{{$blog->user->name}}</a></li>
                            <li><a href="single-blog.html"><i class="fas fa-calendar-alt"></i>{{$blog->updated_at}}</a>
                            </li>
                        </ul>
                        <h2 class="entry-title"> {{$blog->name}}</h2>
                    </div>
                    <div class="entry-content">
                        <p> {!!$blog->content!!}
                        </p>
                        <div class="entry-gallery-img">
                            <div class="row">
                                @foreach($blog2 as $b2)
                                <div class="col-md-6">
                                    <figure class="entry-media-img"><img src="public/uploads/images/Blog/{{$b2->image}}" alt="Image"></figure>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <blockquote>
                            {!!$blog->title!!}
                            <h6 class="blockquote-v">Tony R. Francois</h6>
                        </blockquote>
                    </div>
                    <div class="entry-footer d-flex justify-content-md-between">
                        <ul class="popular-tag list-inline">
                            <li class="title">Popular Tag :</li>
                            @foreach($cateBlog as $cB)
                            <li><a href="">{{$cB->name}},</a></li>
                            @endforeach
                        </ul>
                        <ul class="social-share list-inline">
                            <li class="title">Share </li>
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="post-nav">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="post-nav-box">
                                <a href="">Building Pub Sub Service Using Node And Redis</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="post-nav-box">
                                <a href="">Once Upon Timey Storyis For Better Enga gement</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="comment-area">
                        <h2 class="comment-title">Client’s Comments</h2>
                        <ul class="comment-list">
                            <li>
                                <div class="comment-autor">
                                    <img src="images/img/blog-details/04.jpg" alt="Comment">
                                </div>
                                <div class="comment-desc">
                                    <h6>Alexzeder Alex <span class="comment-date"> 25 Feb 2020</span></h6>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure
                                        and praising pain was born and I will give you a complete account</p>
                                    <a href="#" class="reply-comment">Reply Commets <i class="fas fa-long-arrow-right"></i></a>
                                </div>
                                <ul class="children">
                                    <li>
                                        <div class="comment-autor">
                                            <img src="images/img/blog-details/05.jpg" alt="Comment">
                                        </div>
                                        <div class="comment-desc">
                                            <h6>Alexzeder Alex <span class="comment-date"> 25 Feb 2020</span></h6>
                                            <p>But I must explain to you how all this mistaken idea of denouncing
                                                pleasure and praising pain was born and I will give you a complete
                                                account</p>
                                            <a href="#" class="reply-comment">Reply Commets <i class="fas fa-long-arrow-right"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="comment-autor">
                                    <img src="images/img/blog-details/06.jpg" alt="Comment">
                                </div>
                                <div class="comment-desc">
                                    <h6>Alexzeder Alex <span class="comment-date"> 25 Feb 2020</span></h6>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure
                                        and praising pain was born and I will give you a complete account</p>
                                    <a href="#" class="reply-comment">Reply Commets <i class="fas fa-long-arrow-right"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div> -->
                <div class="comment-area">
                    <h2 class="comment-title">Client’s Comments</h2>
                    @foreach($commentBlog as $cB)
                    @if($cB->blog_id == $blog->id)
                    <ul class="comment-list">
                        <li>
                            <div class="comment-autor">
                                <img src="public/uploads/images/user/{{$cB->user->avatar}}" alt="Chưa có avatar">
                            </div>
                            <div class="comment-desc">
                                <h6>{{$cB->user->name}} <span class="comment-date"> {{$cB->created_at}}</span></h6>
                                <p>{{$cB->comment}}</p>
                                <a href="#" class="reply-comment">Reply Commets <i class="fas fa-long-arrow-right"></i></a>
                            </div>
                            @foreach($commentBlogChild->where('parent',$cB->id) as $cBC)
                            <ul class="children">
                                <li>
                                    <div class="comment-autor">
                                        <img src="public/uploads/images/user/{{$cBC->user->avatar}}" alt="Chưa có avatar">
                                    </div>
                                    <div class="comment-desc">
                                        <h6>{{$cBC->user->name}} <span class="comment-date"> {{$cBC->created_at->diffForHumans()}}</span></h6>
                                        <p>{{$cBC->comment}}</p>
                                    </div>
                                </li>
                            </ul>
                            @endforeach
                            <form action="{{route('postCommentBlogChild',['id'=>$blog->id,'parent'=>$cB->id])}}" method="POST" style="display:flex">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div>
                                    <input type="text" class="formcmt" name="commentChild">
                                </div>
                                <div>
                                    <button class="btn btn-primary nutche"><i class="fas fa-paper-plane"></i></button>
                                </div>
                            </form>
                        </li>
                    </ul>
                    @endif
                    @endforeach
                </div>
                <div class="comment-form">
                    <h2 class="comment-form-title">Send A Message</h2>
                    <form action="{{route('postCommentBlog',['id'=>$blog->id])}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="row">
                            <div class="col-12">
                                <div class="input-wrap text-area">
                                    <textarea placeholder="Write Message" name="comment"></textarea>
                                    <i class="fas fa-pencil"></i>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn filled-btn">Send Message <i class="fas fa-long-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 ">
                <!-- Sidebars Area -->
                <div class="sidebar-wrap ">
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
                                    <h6><a href="">Quick Win For Impre Perfor Securitys</a>. </h6>
                                    <span class="date">05 Feb 2020</span>
                                </div>
                            </li>
                            <li>
                                <div class="recent-post-img">
                                    <img src="public/web/images/img/blog/rp02.jpg" alt="Image">
                                </div>
                                <div class="recent-post-desc">
                                    <h6><a href="">Quick Win Imperfora Security Web ses.</a> </h6>
                                    <span class="date">05 Feb 2020</span>
                                </div>
                            </li>
                            <li>
                                <div class="recent-post-img">
                                    <img src="public/web/images/img/blog/rp03.jpg" alt="Image">
                                </div>
                                <div class="recent-post-desc">
                                    <h6><a href="">We’ve Got Announce ment Make Rachel</a></h6>
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
                        <a href="" class="btn filled-btn">BOOK NOW <i class="fas fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@stop