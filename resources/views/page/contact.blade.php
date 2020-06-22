@extends('layoutweb.index')
@section('content')

<section id="headernhochung" class="align-items-center">
        <div class="container">
            <div class="khoichu ">
                <h1>Contact</h1>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>

    
    <section class="contact-info-section">
        <div class="container">
            <!-- Section Title Start -->
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title">
                        <span class="title-top">Have A Coffee</span>
                        <h1>Don't Hesitate To <br> Contact Us</h1>
                    </div>
                </div>
                <div class="col-lg-7">
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                        architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                        aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                        voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                    </p>
                </div>
            </div>
            <!-- Section Title End -->
            <div class="contact-info-boxes">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info-box">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h4>Address</h4>
                            <p>GymVast, 18 East 50th Street,</p>
                            <p> 4th Floor, New York, NY 22</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info-box">
                            <div class="contact-icon">
                                <i class="fas fa-envelope-open"></i>
                            </div>
                            <h4>Address</h4>
                            <p><a href="">support@gmail.com</a></p>
                            <p><a href="">www.avason.net </a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mx-auto">
                        <div class="contact-info-box">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <h4>Phone Us</h4>
                            <p>+0123 (456) 7899</p>
                            <p>+1234567899</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section>
        <div class="container-fluid">
            <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 500px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.2028126423584!2d105.7839097225188!3d21.04657966784879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab32dd484c53%3A0x4201b89c8bdfd968!2zMjM4IEhvw6BuZyBRdeG7kWMgVmnhu4d0LCBD4buVIE5odeG6vywgQ-G6p3UgR2nhuqV5LCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1589343014159!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> 
            </div>
        </div>
    </section>

    <section class="contact-form">
        <div class="container ">
            <div class="contact-form-wrap section-bg">
                <h2 class="form-title">Send A Message</h2>
                <form>
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <div class="input-wrap">
                                <input type="text" placeholder="Your Full Name" id="name">
                                <i class="fas fa-user-alt"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="input-wrap">
                                <input type="text" placeholder="Your Email" id="email">
                                <i class="fas fa-envelope"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="input-wrap">
                                <input type="text" placeholder="Your Full Name" id="website">
                                <i class="fab fa-wordpress"></i>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrap text-area">
                                <textarea placeholder="Write Message"></textarea>
                                <i class="fas fa-pencil"></i>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn filled-btn">Send Message <i class="fas fa-long-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@stop