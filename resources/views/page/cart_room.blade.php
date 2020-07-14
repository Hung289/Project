@extends('layoutweb.index')
@section('content')

<section id="headernhochung" class="align-items-center">
    <div class="container">
        <div class="khoichu ">
            <h1>Cart Room</h1>
            <ul>
                <li><a href="">Home</a></li>
                <li><i class="fas fa-angle-double-right"></i></li>
                <li>Cart Room</li>
            </ul>
        </div>
    </div>
</section>


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

                                <div class="tenphong">
                                    <a href="">{{$item['name']}}</a>
                                    <span> -- Id : {{$item['id']}}</span>
                                </div>
                                <ul>
                                    <li><i class="fas fa-bed"></i>{{$item['bed']}} Bed</li>
                                    <li><i class="fas fa-bath"></i>{{$item['bath']}} Baths</li>
                                    <li>{{$item['area']}}m</li>
                                    <li>{{$item['arriveDate']}} - {{$item['departDate']}}</li>
                                    <br>
                                    <li>Số ngày: {{$item['songay']}}</li>
                                </ul>
                                <div class="gia">
                                    <p>${{$item['price']}}</p>
                                </div>
                                <div class="xoaphong">
                                    <a href="{{route('cart.remove',['id'=>$item['id']])}}"><i class="fas fa-backspace"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
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
                                @foreach($cart->services as $itemSer)
                                <tr>
                                    <td>{{$itemSer['name']}}</td>
                                    <td><img src="public/uploads/images/servicess/{{$itemSer['imageService']}}" alt="" style="width:100px;height:100px"></td>
                                    <td>
                                        <form id="soluongser" action="{{route('cart.updateService',['id'=>$itemSer['id']])}}" method="GET">
                                            <input type="number" id="nutsoluong" name="qty" value="{{$itemSer['quantity']}}">
                                            <button class="btn btn-primary">Cập nhật</button>
                                        </form>
                                    </td>
                                    <td>{{$itemSer['room_id']}}</td>
                                    <td>
                                        <div id="priceService" >
                                            {{number_format($itemSer['price']*$itemSer['quantity'])}}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="xoaphong">
                                            <a href="{{route('cart.removeService',['id'=>$itemSer['id']])}}"><i class="fas fa-backspace"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


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
                            </tr>
                            <tr class="foodmoney">
                                <th>Other Services</th>
                                <td><span>$</span>{{number_format($cart->total_price_service)}}</td>
                            </tr>
                            <tr class="total">
                                <th>Total</th>
                                <td><span>$</span>{{number_format($cart->total_price+$cart->total_price_service)}}</td>
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