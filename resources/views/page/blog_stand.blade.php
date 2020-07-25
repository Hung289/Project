@extends('layoutweb.index')
@section('content')
<section id="headernhochung" class="align-items-center">
    <div class="container">
        <div class="khoichu ">
            <h1 class="wow flipInX">Blog Stand</h1>
            <ul class="wow zoomIn">
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
                    @foreach($blogs as $blog)
                    <div class="single-blog-wrap">
                        <div class="post-thumbnail">
                            @foreach($blogImages as $bI)
                            <?php $check = ($bI->blog_id == $blog->id) ? $bI->image : "" ?>
                            @if($check != "")
                            <a href="{{route('blogDetail',[$blog->id])}}">
                                <img src="public/uploads/images/Blog/{{$check}}" style="height:490px" alt="Image">
                            </a>
                            @break
                            @endif
                            @endforeach
                        </div>
                        <div class="post-desc">
                            <ul class="blog-meta list-inline">
                                <li><a href="single-blog.html"><i class="fas fa-user-alt"></i>{{$blog->user->name}}</a>
                                </li>
                                <li><a href="single-blog.html"><i class="fas fa-calendar-alt"></i>{{$blog->created_at}}</a></li>
                            </ul>
                            <h3><a href="{{route('blogDetail',[$blog->id])}}">{{$blog->name}}</a></h3>
                            <p>{{$blog->title}}</p>
                            <a href="{{route('blogDetail',[$blog->id])}}" class="btn filled-btn">View post <i class="fas fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Pagination Wrap -->
                <!-- <div class="pagination-wrap">
                    <ul class="list-inline">
                        <li><a href=""><i class="fas fa-angle-left"></i></a></li>
                        <li class="active"><a href="">01</a></li>
                        <li><a href="">02</a></li>
                        <li><a href="">03</a></li>
                        <li><a href=""><i class="fas fa-angle-right"></i></a></li>
                    </ul>
                </div> -->
            </div>
            <div class="col-lg-4">
                <!-- Sidebars Area -->
                <div class="sidebar-wrap">
                    <div class="widget search-widget">
                        <h4 class="widget-title">Search Here</h4>
                        <form action="{{route('getSearchBlog')}}" method="POST">
                            <input type="hidden" name="_token" id="csrf_token" value="{{csrf_token()}}">
                            <input type="text" name="searchKeyBlog" placeholder="Seacrh Keywords">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget recent-news">
                        <h4 class="widget-title">Latest News</h4>
                        @foreach($blogNew as $bN)
                        <li>
                            <div class="recent-post-img">
                                @foreach($blogImages as $bI)
                                <?php $check = ($bI->blog_id == $bN->id) ? $bI->image : "" ?>
                                @if($check !="")
                                <img src="public/uploads/images/Blog/{{$check}}" alt="Image" style="width:150px;height:150px">
                                @break
                                @endif
                                @endforeach
                            </div>
                            <div class="recent-post-desc">
                                <h6><a href="{{route('blogDetail',[$bN->id])}}">{{$bN->name}}</a>. </h6>
                                <span class="date">{{$bN->created_at}}</span>
                            </div>
                        </li>
                        @endforeach
                    </div>
                    <div class="widget category-widget">
                        <h4 class="widget-title">Gategory</h4>
                        @foreach($listCateRoom as $lCR)
                        <div class="single-cat bg-img-center" style="background-image: url(public/uploads/images/CategoryRoom/{{$lCR->image}});">
                            <a href="{{route('RoomListMaster',['id'=>$lCR->id])}}">{{$lCR->name}}</a>
                        </div>
                        @endforeach
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