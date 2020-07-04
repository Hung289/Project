$(function(){
    $('.header .mobilemenu .meannav').addClass('hide');
    $('.header .mobilemenu .nutmobile').click(function(){
        $('.header .mobilemenu .meannav').addClass('show');
        if($('.fas').hasClass('fa-bars')){
            $('.header .mobilemenu .nutmobile i' ).addClass(' fa-times');
            $('.header .mobilemenu .nutmobile i' ).removeClass(' fa-bars');
        }else{
            $('.header .mobilemenu .meannav').removeClass('show');
            $('.header .mobilemenu .meannav').addClass('hide');
            $('.header .mobilemenu .nutmobile i' ).addClass('fa-bars');
            $('.header .mobilemenu .nutmobile i' ).removeClass('fa-times');
        }
        // $('.header .mobilemenu .nutmobile i' ).removeClass('fas fa-times');
        // $('.header .mobilemenu .nutmobile i' ).addClass('fas fa-bars');
        return false;
    })
    var position = $(window).scrollTop(); 
    $(window).scroll( (e) => {

        var scroll = $(window).scrollTop();

        if(scroll > position ) {
            $('.header').removeClass('scroll-down-js');
            $('.header').addClass('scroll-up-js');
        } else {
            $('.header').removeClass('scroll-up-js');
            $('.header').addClass('scroll-down-js');
        }

        position = scroll;

    });                       
    
    //scroll to top
    // $('.nutlendautrang').hide();
    // var vitri = $(window).scrollTop();
    // console.log('alo');
    // $(window).scroll(()=>{
    //     if(vitri>1000){
    //         $('.nutlendautrang').show();
    //     }else{
    //         $('.nutlendautrang').hide();
    //     }
    // });
    var mybutton = document.getElementById("myBtn");
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
    if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
    }

    
    //click vào nút bottom lên top
    $('.nutlendautrang').on('click',function (event) { 
        event.preventDefault();
        console.log('click');
        $('html,body').animate({scrollTop:0},1000);
     })


    //phần card trang home
    $('.feature-section-two .listcart .car-body ').slideUp();
    $('.feature-section-two .listcart button').click(function(){
        $('.feature-section-two .listcart button').removeClass('active');
        console.log('đã click');
        $(this).addClass('active');
        $(this).next().slideToggle();
    });

    //menu mobile click
    $('.header .mobilemenu .menunho').hide();
    $('.header .mobilemenu .meannav ul li').click(function(){
        var danhmuc = $(this).data('class');
        
        console.log('đã ấn nút');
        // $('.header .mobilemenu .menunho').toggleClass('show');
        $('.header .mobilemenu .menunho').each(function(){
            if($(this).hasClass(danhmuc)){
                $(this).toggleClass('show');
            }
        })
        
        
        return false;
    })
    
    
    


    //wowjs
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:2
            }
        }
    })

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
      $(document).ready(function () {
        $(".counter-number").counterUp({
          delay: 10,
          time: 1000,
          offset: 70,
          beginAt: 100,
          formatter: function (n) {
            return n.replace(/,/g, ".");
          },
        });
      });

    
    $('.thanhtoan  .h_h4_DBT').addClass('selected');
    $('.thanhtoan .h_hidden_checkout').slideUp();
    $('.thanhtoan #h_h4_PP_content').slideUp();
    $('.thanhtoan #h_h4_DBT_content').slideDown();
    $('.thanhtoan h4').click(function(){
        $('.thanhtoan p').slideUp();
        // console.log('đã click');
        $('.thanhtoan h4').removeClass('selected');
        $(this).addClass('selected');
        $(this).next('.thanhtoan p').slideToggle();
    })

    //Viết cho nút chỗ slide
    $('.slide .carousel-control-next').click(function(){
        console.log('đac click');
        $('.slide .chutoslide').addClass('chuyencanhtextslideto');
    });


    //Viết cho nút list grid
    $('.list').show();
    $('.grid').hide();
    
    $('.khoihainut .nutlist').click(function(event){
        event.preventDefault();
        console.log('đã click');
        $('.nutlist a').addClass('active');
        $('.nutgrid a').removeClass('active');
        $('.list').show();
        $('.grid').hide();
    });
    $('.khoihainut .nutgrid').click(function(event){
        event.preventDefault();
        console.log('đã click');
        $('.nutgrid a').addClass('active');
        $('.nutlist a').removeClass('active');
        $('.list').hide();
        $('.grid').show();
    });
})