@extends('layoutweb.index')
@section('content')

<section id="headernhochung" class="align-items-center">
        <div class="container">
            <div class="khoichu ">
                <h1>Bill</h1>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i></li>
                    <li>Bill</li>
                </ul>
            </div>
        </div>
    </section>

    
    <section class="Bill">
        <div class="container">
        <div class="go-booking">
                        <a href="">Return Booking</a>
                    </div>
            <div class="row">
                    
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 tongoaitrai p-0">  
                    <div class="viewroombooked">
                        <div class="row tongoai">
                            <div class="col-lg-6">
                                <div class="khungimage">
                                    <img src="public/web/images/img/rooms/10.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 khoithongtin">
                                <div class="loaiphong">
                                    
                                    <p>Meeting Room</p>
                                </div>
                                <div class="tenphong">
                                    <a href="">Living room</a>
                                </div>
                                <ul>
                                    <li><i class="fas fa-bed"></i>3 Bed</li>
                                    <li><i class="fas fa-bath"></i>2 Baths</li>
                                    <li>72m</li>
                                </ul>
                                <div class="gia">
                                    <p>$180</p>
                                </div>
                                <div class="xoaphong">
                                    <a href=""><i class="fas fa-backspace"></i></a>
                                </div>
                            </div>
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
                                    <td><span>$</span>180</td>       
                                </tr>
                                <tr class="foodmoney">
                                    <th>food money</th>
                                    <td><span>$</span>180</td>    
                                </tr>
                                <tr class="otherservices">
                                    <th>Other Services</th>
                                    <td><span>$</span>180</td>    
                                </tr>
                                <tr class="total">
                                    <th>Total</th>
                                    <td><span>$</span>560</td> 
                                </tr>
                            </tbody> 
                        </table>
                        <div class="checkout">
                            <a href="">Check Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

@stop