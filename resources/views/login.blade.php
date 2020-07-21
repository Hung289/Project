<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Room Detail</title>
    <!-- <link
          rel="stylesheet"
          href="bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css"
        /> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="public/web/css/style.css" />
    <link rel="stylesheet" href="public/web/css/hung.css" />
    <link rel="stylesheet" href="public/web/css/hung-res.css" />
    <link rel="stylesheet" href="public/web/fonts/fontawesome/fontawesome-free-5.13.0-web/css/all.min.css" />
    <link rel="stylesheet" href="public/web/fonts/fontawesome/fontawesome-free-5.13.0-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="public/web/plugin/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="public/web/plugin/dist/assets/owl.theme.default.css">
</head>

<body id="body">



    <section>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <form class="login100-form validate-form" method="POST" action="{{route('postLoginWeb')}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <span class="login100-form-title p-b-43">
                            Login to continue
                        </span>
                        @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                            {{$error}}<br>
                            @endforeach
                        </div>
                        @endif
                        @if(session('error'))
                        <div class="alert alert-danger">
                            {{session('error')}}
                        </div>
                        @endif
                        @if(Session::has('error_login'))
                        <div class="alert alert-danger ">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            {{Session::get('error_login')}}</small>
                        </div>
                        @endif
                        @if(Session::has('error_login'))
                        <div class="alert alert-danger ">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            {{Session::get('error_login')}}</small>
                        </div>
                        @endif

                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="email" placeholder="email" value="{{old('email')}}">
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="password" name="password" placeholder="password">
                        </div>


                        <div class="hcheckout w-full p-t-3 p-b-32">
                            <div>
                                <input type="checkbox">
                                <label for="">Remember me</label>
                            </div>
                            <div>
                                <a href="{{route('getForgot')}}" class="txt1">
                                    Forgot Password?
                                </a>
                            </div>
                        </div>


                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>

                        <div class="text-center p-t-46 p-b-20">
                            <span class="txt2">
                                or sign up using
                            </span>
                        </div>

                        <div class="login100-form-social flex-c-m">
                            <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                                <i class="fab fa-facebook-f"></i></i>
                            </a>

                            <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
                                <i class="fab fa-twitter"></i></i>
                            </a>
                        </div>
                    </form>

                    <div class="login100-more" style="background-image: url('public/web/images/img/bg/hero-bg-4.jpg');">
                    </div>
                </div>
            </div>
        </div>
    </section>








    <script src="public/web/js/jquery-3.5.1.min.js"></script>
    <!-- <script src="bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="public/web/plugin/dist/owl.carousel.min.js"></script>
    <script src="public/web/js/hung.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 2
                }
            }
        })
    </script>
</body>

</html>