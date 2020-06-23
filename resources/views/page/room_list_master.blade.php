@extends('layoutweb.index')
@section('content')

<section id="headernhochung" class="align-items-center">
    <div class="container">
        <div class="khoichu ">
            <h1>List</h1> Room</h1>
            <ul>
                <li><a href="">Home</a></li>
                <li><i class="fas fa-angle-double-right"></i></li>
                <li>Room List</li>
            </ul>
        </div>
    </div>
</section>



<section class="rooms-warp list-view section-bg section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="filter-view">
                    <ul>
                        <li class="active-f-view">Default Sorting</li>
                        <li>Low To High</li>
                        <li>High To Low</li>
                        <li>View A to Z</li>
                        <li>View Z to A</li>
                        <li>Popular</li>
                    </ul>
                </div>
            </div>
            <div class="col-12">
                <div class="khoihainut">
                    <div class="nut nutlist ">
                        <a href="" class="active"><i class="fas fa-th-list"></i> list</a>
                    </div>
                    <div class="nut nutgrid">
                        <a href=""><i class="fas fa-th-large"></i> Grid</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">

                <div class="list">
                    @foreach($rooms as $room)
                    <div class="single-room list-style">
                        <div class="row align-items-center no-gutters">
                            <div class="col-lg-6">
                                <div class="room-thumb">
                                    @foreach($roomImages as $rI)
                                    <?php $check = ($rI->room_id == $room->id) ? "$rI->image" : "" ?>
                                    @if(!$check=="")
                                    <img src="public/uploads/images/rooms/{{$check}}" alt="Room">
                                    @break
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="room-desc">
                                    <div class="room-cat">
                                        <p>{{$room->cateRoom->name}}</p>
                                    </div>
                                    <h4><a href="{{route('roomDetail',['id'=>$room->id])}}">{{$room->name}}</a></h4>
                                    <ul class="room-info list-inline">
                                        <li><i class="fas fa-bed"></i>{{$room->bed}} Bed</li>
                                        <li><i class="fas fa-bath"></i>{{$room->bath}} Baths</li>
                                        <li><i class="fas fa-ruler-triangle"></i>{{$room->area}} m</li>
                                    </ul>
                                    <div class="room-price">
                                        <p>{{number_format($room->priceNight)}} $</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>


                <div class="row grid">
                    @foreach($rooms as $room)
                    <div class="col-md-6">
                        <!-- Single Room -->
                        <div class="single-room">

                            <div class="room-thumb">
                                @foreach($roomImages as $rI)
                                <?php $check = ($rI->room_id == $room->id) ? "$rI->image" : "" ?>
                                @if(!$check=="")
                                <img src="public/uploads/images/rooms/{{$check}}" alt="Room">
                                @break
                                @endif
                                @endforeach
                            </div>
                            <div class="room-desc">
                                <div class="room-cat">
                                    <p>{{$room->cateRoom->name}}</p>
                                </div>
                                <h4><a href="{{route('roomDetail',['id'=>$room->id])}}">{{$room->name}}</a></h4>
                                <p>
                                {!!$room->description!!}
                                </p>
                                <ul class="room-info list-inline">
                                    <li><i class="fas fa-bed"></i>{{$room->bed}} Bed</li>
                                    <li><i class="fas fa-bath"></i>{{$room->bath}} Baths</li>
                                    <li><i class="fas fa-ruler-triangle"></i>{{$room->area}} m</li>
                                </ul>
                                <div class="room-price">
                                    <p>{{number_format($room->priceNight)}} $</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-wrap">
                    <div class="widget fillter-widget">
                        <h4 class="widget-title">Your Reservation</h4>
                        <form>
                            <div class="input-wrap">
                                <input type="text" placeholder="Location" id="location">
                                <i class="fas fa-search"></i>
                            </div>
                            <div class="input-wrap">
                                <input type="text" placeholder="Arrive Date" id="arrive-date">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div class="input-wrap">
                                <input type="text" placeholder="Depart Date" id="depart-date">
                                <i class=""></i>
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div class="input-wrap">
                                <select name="rooms" id="rooms">
                                    <option value="" disabled="" selected="">Rooms</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="input-wrap">
                                <select name="adults" id="adults">
                                    <option value="" disabled="" selected="">Adults</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="input-wrap">
                                <select name="child" id="child">
                                    <option value="" disabled="" selected="">Children</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="input-wrap">
                                <div class="price-range-wrap">
                                    <div class="slider-range">
                                        <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 3.57143%; width: 91.0714%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 3.57143%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 94.6429%;"></span>
                                        </div>
                                    </div>
                                    <div class="price-ammount">
                                        <input type="text" id="amount" name="price" placeholder="Add Your Price">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <p>
                                        <input type="checkbox" value="guest-room" id="guest-room">
                                        <label for="guest-room">Guest Room</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" value="meeting-room" id="meeting-room">
                                        <label for="meeting-room">Meeting Room </label>
                                    </p>
                                    <p>
                                        <input type="checkbox" value="wifi" id="wifi">
                                        <label for="wifi">Free Wifi</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" value="pet" id="pet">
                                        <label for="pet">Pet Friendly</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" value="parking" id="parking">
                                        <label for="parking">Parking</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" value="pureair" id="pureair">
                                        <label for="pureair">Pure Air</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" value="airc" id="airc">
                                        <label for="airc">Air Conditioner</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" value="nosmoke" id="nosmoke">
                                        <label for="nosmoke">No Smoking</label>
                                    </p>
                                </div>
                            </div>
                            <div class="input-wrap">
                                <button type="submit" class="btn filled-btn btn-block">
                                    Filter Results <i class="fas fa-long-arrow-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
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
        </div>
    </div>
</section>


@stop