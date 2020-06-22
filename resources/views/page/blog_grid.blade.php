@extends('layoutweb.index')
@section('content')

<section id="headernhochung" class="align-items-center">
        <div class="container">
            <div class="khoichu ">
                <h1>Blog Grid</h1>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i></li>
                    <li>Blogs Grid</li>
                </ul>
            </div>
        </div>
    </section>

    
    <section class="blog-wrapper blog-gird-view section-padding section-bg">
        <div class="container">
            <div class="post-loop">
                <div class="row">
                    @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-wrap">
                            <div class="post-thumbnail">
                                @foreach($blogImages as $bI)
                                    <?php $check = ($bI->blog_id == $blog->id)?"$bI->image":""?>
                                    @if(!$check == "")
                                    <img src="public/uploads/images/Blog/{{$check}}" alt="Image">
                                    @break
                                    @endif
                                @endforeach
                            </div>
                            <div class="post-desc">
                                <ul class="blog-meta list-inline">
                                    <li><a href="{{route('blogDetail',[$blog->id])}}"><i class="fas fa-calendar-alt"></i>{{$blog->updated_at}}</a></li>
                                </ul>
                                <h3><a href="{{route('blogDetail',[$blog->id])}}">{{$blog->name}}</a></h3>
                                <a href="{{route('blogDetail',[$blog->id])}}" class="read-more">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>      
                    @endforeach            
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
    </section>
    

@stop