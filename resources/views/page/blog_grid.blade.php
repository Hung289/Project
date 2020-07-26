@extends('layoutweb.index')
@section('content')

<section id="headernhochung" class="align-items-center">
    <div class="container">
        <div class="khoichu ">
            <h1 class="wow flipInX">Blog Grid</h1>
            <ul class="wow zoomIn">
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
                <div class="col-lg-4 col-md-6 ">
                    <div class="single-blog-wrap">
                        <div class="post-thumbnail" style="height:250px">
                            @foreach($blogImages as $bI)
                            <?php $check = ($bI->blog_id == $blog->id) ? "$bI->image" : "" ?>
                            @if(!$check == "")
                            <a href="{{route('blogDetail',[$blog->id])}}">
                                <img src="public/uploads/images/Blog/{{$check}}" alt="Image">
                            </a>
                            @break
                            @endif
                            @endforeach
                        </div>
                        <div class="post-desc" style="height:360px">
                            <ul class="blog-meta list-inline">
                                <li><a href="{{route('blogDetail',[$blog->id])}}"><i class="fas fa-calendar-alt"></i>{{$blog->updated_at}}</a></li>
                            </ul>
                            <h3><a href="{{route('blogDetail',[$blog->id])}}">{{$blog->name}}</a></h3>
                            <p>{!!$blog->title!!}</p>
                            <a href="{{route('blogDetail',[$blog->id])}}" class="read-more">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="paginateChung">
                    {{$blogs->links()}}
                </div>

            </div>
        </div>
        <!-- Pagination Wrap -->
    </div>
</section>


@stop