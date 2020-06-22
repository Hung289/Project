<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang home web</title>
    <base href="{{asset('')}}">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="public/web/css/style.css" />
    <link rel="stylesheet" href="public/web/css/hung.css" />
    <link rel="stylesheet" href="public/web/css/hung-res.css" />
    <link
      rel="stylesheet"
      href="public/web/fonts/fontawesome/fontawesome-free-5.13.0-web/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="public/web/fonts/fontawesome/fontawesome-free-5.13.0-web/css/fontawesome.min.css"
    />
    <link
      rel="stylesheet"
      href="bootstrap-datepicker-master/bootstrap-datepicker-master/dist/css/bootstrap-datepicker.min.css"
    />
    <link rel="stylesheet" href="public/web/css/jquery-ui.min.css" />
    <link rel="stylesheet" href="public/web/css/animate.css" />
    <link rel="stylesheet" href="public/web/plugin/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="public/web/plugin/dist/assets/owl.theme.default.css">
  </head>
  <body>
    <!-- Khối trên menu -->
    @include('layoutweb.header-top')
    <!-- Chỗ header top -->

    @include('layoutweb.header')
    <!-- Chỗ header -->

    @yield('content')
    

    @include('layoutweb.brand-section')
    <!-- incontren footer -->

    @include('layoutweb.footer')
    <!-- Chỗ footer -->

    <section class="nutlendautrang" id="myBtn">
      <a href=""><i class="fas fa-angle-up"></i></a>
    </section>


    <script src="public/web/js/jquery-3.5.1.min.js"></script>
    <!-- <script src="bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> -->
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>
    <script src="public/web/bootstrap-datepicker-master/bootstrap-datepicker-master/js/bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
    <script src="public/web/jquery.counterup-master/jquery.counterup-master/jquery.counterup.min.js"></script>
    <script src="public/web/plugin/dist/owl.carousel.min.js"></script>
    <script src="public/web/js/jquery-ui.min.js"></script>
    <script src="public/web/js/wow.min.js"></script>
    <script src="public/web/js/hung.js"></script>
    <script>
      new WOW().init();
    </script>
    <script type="text/javascript">
      $(document).ready(function () {
        $("#arrive-date").datepicker({
          format: "dd/mm/yyyy",
        });
      });
      $(document).ready(function () {
        $("#depart-date").datepicker({
          format: "dd/mm/yyyy",
        });
      });
      
    </script>
    <script>
      $('#hai.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        },
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true
      })
      $('.play').on('click',function(){
        owl.trigger('play.owl.autoplay',[1000])
      })
      $('.stop').on('click',function(){
          owl.trigger('stop.owl.autoplay')
      })
    </script>
    <script>
      $('#mot.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:4
            },
            1000:{
                items:6
            }
        },autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true
      })
      $('.play').on('click',function(){
        owl.trigger('play.owl.autoplay',[1000])
      })
      $('.stop').on('click',function(){
          owl.trigger('stop.owl.autoplay')
      })
    </script>
  </body>
</html>
