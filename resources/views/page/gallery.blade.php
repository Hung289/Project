@extends('layoutweb.index')
@section('content')

<section id="headernhochung" class="align-items-center">
    <div class="container">
        <div class="khoichu ">
            <h1 class="wow flipInX">Our Gallery</h1>
            <ul class="wow zoomIn">
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
                @foreach($CategoryRoom as $CateR)
                <li data-filter=".{{$CateR->id}}">{{$CateR->name}}</li>
                @endforeach
                <!-- <li data-filter=".luxury">luxury</li>
                <li data-filter=".twieen">Twieen</li>
                <li data-filter=".couple">Couple</li>
                <li data-filter=".family">Family</li>
                <li data-filter=".conference">Conference</li> -->
            </ul>
        </div>
        <div class="gallery-items">
            <div class="row gallery-filter-items">
                @foreach($RoomImages as $rI)
                <div class="col-lg-4 col-md-6 col-sm-6 {{$rI->room->category_room_id}} conference">
                    <div class="gallery-item" style="background-image: url(public/uploads/images/rooms/{{$rI->image}});">
                        <div class="gallery-content">
                            <h3><a href="">{{$rI->room->cateRoom->name}}</a></h3>
                            <a href="" class="view-gallery"><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
    </div>
</section>


@stop