@extends('layoutweb.index')
@section('content')

<section id="headernhochung" class="align-items-center">
    <div class="container">
        <div class="khoichu ">
            <h1>Check Out</h1>
            <ul>
                <li><a href="">Home</a></li>
                <li><i class="fas fa-angle-double-right"></i></li>
                <li>Room List</li>
            </ul>
        </div>
    </div>
</section>


<section class="checkout">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 tongoaitrai">
                <div class="payer-infor">
                    <h2>Payer Information</h2>

                    <form action="{{route('post.checkout')}}" method="POST" role="form" enctype="multipart/form-data">
                        <div class="khoidiv content_firstname">
                            <label for="">full Name <span>*</span></label>
                            <input type="text" name="name" placeholder="... fulname" value="{{Auth::user()->name}}">
                            @error('name')
                            <small class="error help-block" style="color:red">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="khoidiv">
                            <label for="">Giới Tính <span>*</span></label>
                            <select name="gender" id="">
                                <option value="0">Nam</option>
                                <option value="1">Nữ</option>
                            </select>
                        </div>
                        <div class="khoidiv content_phone">
                            <label for="">Phone Number <span>*</span></label>
                            <input type="text" name="phone" placeholder="... Phone" value="{{Auth::user()->phone}}">
                            @error('phone')
                            <small class="error help-block" style="color:red">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="khoidiv content_email">
                            <label for="">Email <span>*</span></label>
                            <input type="text" name="email" placeholder="... Email" value="{{Auth::user()->email}}">
                            @error('email')
                            <small class="error help-block" style="color:red">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="khoidiv content_email">
                            <label for="">Address <span>*</span></label>
                            <input type="text" name="address" placeholder="... Address">
                            @error('address')
                            <small class="error help-block" style="color:red">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="khoidiv content_country">
                            <label for="">Phương thức thanh toán <span>*</span></label>
                            <select name="payment" id="">
                                <option value="0">Thanh toán tại quầy</option>
                                <option value="1">Thanh toán trực tuyến</option>
                            </select>
                        </div>

                        <div class="khoidiv content_note">
                            <label for="">Note <span>*</span></label>
                            <textarea name="note" id="" cols="30" rows="10" placeholder="Take note of what you need at check-in"></textarea>
                            @error('note')
                            <small class="error help-block" style="color:red">{{$message}}</small>
                            @enderror
                        </div>
                        <button class="btn btn-primary">Place order</button>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </form>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 tongoaiphai">
                <div class="khoitongoaiphai">
                    <h2>Your Room</h2>
                    <div class="khoithongtinphong">
                        <table>
                            <tbody>

                                <tr class="tr_name">
                                    <th>Name Room</th>
                                    @foreach($cart->items as $item)
                                    <td>{{$item['name']}}</td>
                                    @endforeach
                                </tr>
                                <tr class="tr_location">
                                    <th>Location</th>
                                    @foreach($cart->items as $item)
                                    <td>{{$item['location']}}</td>
                                    @endforeach
                                </tr>
                                <tr class="tr_date">
                                    <th>Date</th>
                                    @foreach($cart->items as $item)
                                    <td>{{$item['arriveDate']}} - {{$item['departDate']}}</td>
                                    @endforeach
                                </tr>
                                <tr class="tr_payment">
                                    <th>payment amount</th>
                                    <td>${{number_format($cart->total_price+$cart->total_price_service)}}</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                    <div class="thanhtoan">
                        <nav>
                            <ul>
                                <li>
                                    <div class="h_content_right_under_DBT">
                                        <h4 class="h_h4_DBT" data-class="thu1 ">Direct bank transfer</h4>
                                        <p id="h_h4_DBT_content" class="chung thu1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum eligendi ducimus eveniet cum animi est, minus amet eos odit, distinctio, laborum similique saepe mollitia ipsa ullam esse facilis optio. Eveniet nulla sequi quidem illum neque!</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="h_content_right_under_COD">
                                        <h4 class="h_h4_COD" data-class="thu2">Cash on delivery</h4>
                                        <p id="h_h4_COD_content " class="chung thu2 h_hidden_checkout">Pay with cash upon delivery</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="h_content_right_under_PP ">
                                        <h4 class="h_h4_PP" data-class="thu3">PayPal <span><a href="">What is paypal?</a></span><img src="images/hungimges/AM_mc_vs_ms_ae_UK.png" alt=""></h4>
                                        <p id="h_h4_PP_content " class="chung thu3 h_hidden_checkout">pay via Paypal, you can </p>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                        <button type="submit">Place order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop