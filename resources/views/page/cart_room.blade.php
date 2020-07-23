@extends('layoutweb.index')
@section('content')

<section id="headernhochung" class="align-items-center">
    <div class="container">
        <div class="khoichu ">
            <h1 class="wow flipInX">Cart Room</h1>
            <ul class="wow zoomIn">
                <li><a href="">Home</a></li>
                <li><i class="fas fa-angle-double-right"></i></li>
                <li>Cart Room</li>
            </ul>
        </div>
    </div>
</section>

<meta name="csrf-token" content="{{ csrf_token() }}">
<section class="Bill">
    <div class="container">
        <div class="go-booking">
            <a href="{{route('roomList')}}">Return Booking</a>
        </div>
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 tongoaitrai p-0">
                <div>
                    <h3>Danh sách phòng đã đặt</h3>
                    @foreach($cart->items as $item)

                    <div class="viewroombooked">
                        <div class="row tongoai">
                            <div class="col-lg-6">
                                <div class="khungimage">
                                    <img src="public/uploads/images/rooms/{{$item['image']}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 khoithongtin">
                                <div class="loaiphong">
                                    <p>{{$item['category_room_id']}}</p>
                                </div>
                                <div class="gia">
                                    <p>${{$item['price']}}</p>
                                </div>

                                <div class="tenphong">
                                    <a href="">{{$item['name']}}</a>
                                    <span> -- Id : {{$item['id']}}</span>
                                </div>
                                <ul>
                                    <li><i class="fas fa-bed"></i>{{$item['bed']}} Bed</li>
                                    <li><i class="fas fa-bath"></i>{{$item['bath']}} Baths</li>
                                    <li><i class="fas fa-ruler-combined"></i>{{$item['area']}}m</li>
                                    <li>{{$item['arriveDate']}} - {{$item['departDate']}}</li>
                                    <br>
                                    <li>Số ngày: {{$item['songay']}}</li>
                                    <br>
                                    <li class="cuoi">
                                        <div class="returnAddService">
                                            <a href="{{route('service',['room_id'=>$item['id'],'from_date'=>$item['arriveDate'],'to_date'=>$item['departDate']])}}">Về chọn service</a>
                                        </div>
                                        <div class="ViewService">
                                            <a data-toggle="modal" href='#modal-{{$item['id']}}'>View Service</a>
                                        </div>
                                    </li>
                                </ul>

                                <div class="xoaphong">
                                    <a href="{{route('cart.remove',['id'=>$item['id']])}}"><i class="fas fa-backspace"></i></a>

                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="modal fade " id="modal-{{$item['id']}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                        <div class="modal-dialog modal-lg" style="max-width:1100px">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Chi tiết dịch vụ</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="body-modal">
                                    <div>
                                        <h3>Danh sách các dịch vụ của bạn</h3>

                                        <div class="table-responsive " style="text-align:center">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Tên dịch vụ</th>
                                                        <th>Hình ảnh</th>
                                                        <th>Số lượng</th>
                                                        <th>Thuộc về phòng</th>
                                                        <th>Tiền</th>
                                                        <th>Xóa</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($item['services'] as $key=>$itemSer)
                                                    <tr>
                                                        <td>{{$itemSer['name']}}</td>
                                                        <td><img src="public/uploads/images/servicess/{{$itemSer['imageService']}}" alt="" style="width:100px;height:100px"></td>
                                                        <td>
                                                            <form id="soluongser" class="soluongser-{{$itemSer['id']}} soluong-{{$itemSer['id']}}" action="{{route('cart.updateService',['id'=>$itemSer['id'],'room_id'=>$item['id']])}}" method="GET">

                                                                <input type="number" min="1" max="20" id="soluong-{{$itemSer['id']}}" class="nutsoluong " data-nutsoluong="{{$itemSer['id']}}" name="qty" value="{{$itemSer['quantity']}}">
                                                                <button type="submit" class="btn btn-primary NutUpdateQty" id="{{$itemSer['id']}}">Cập nhật</button>
                                                            </form>
                                                        </td>
                                                        <td>{{$item['id']}}</td>
                                                        <td>
                                                            <input type="hidden" id="layprice-{{$itemSer['id']}}" value="{{number_format($itemSer['price'])}}">
                                                            <div id="priceService-{{$itemSer['id']}}" class="cc321">
                                                                <div id="cc123-{{$itemSer['id']}}">
                                                                    ${{number_format($itemSer['price']*$itemSer['quantity'])}}
                                                                </div>

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="xoaphong">
                                                                <a href="{{route('cart.removeService',['id'=>$itemSer['id'],'room_id'=>$item['id']])}}"><i class="fas fa-backspace"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>


                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    @endforeach
                </div>


            </div>



            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <div class="cart-code-sale">
                    <h2>Code Sale</h2>
                    <form action="">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Coupon code">
                        </div>

                        <button type="submit" class="btn-site">Apply</button>
                    </form>
                </div>

                <div class="cart-total-servide">
                    <h2>Room Total</h2>
                    <table cellspacing="0">
                        <tbody>
                            <tr class="priceroom">
                                <th>Price Room</th>
                                <td><span>$</span>{{number_format($cart->total_price)}}</td>
                                <input id="getPriceRoomTotal" type="hidden" value="{{number_format($cart->total_price)}}">
                            </tr>
                            <tr class="foodmoney">
                                <th>Other Services</th>
                                <td id="priceServiceRT"><span>$</span>{{number_format($cart->total_price_service)}}</td>
                            </tr>
                            <tr class="total">
                                <th>Total</th>
                                <td id="totalOrder"><span>$</span>{{number_format($cart->total_price+$cart->total_price_service)}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="checkout">
                        <a href="{{route('checkout')}}">Check Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@stop