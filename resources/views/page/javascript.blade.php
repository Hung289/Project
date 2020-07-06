<script type="text/javascript">
    $(document).ready(function() {
        $("#arrive-date").datepicker({
            format: "dd/mm/yyyy",
        });
    });
    $(document).ready(function() {
        $("#depart-date").datepicker({
            format: "dd/mm/yyyy",
        });
    });
</script>
<script>
    $('#hai.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        },
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true
    })
    $('.play').on('click', function() {
        owl.trigger('play.owl.autoplay', [1000])
    })
    $('.stop').on('click', function() {
        owl.trigger('stop.owl.autoplay')
    })
</script>
<script>
    $('#mot.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 4
            },
            1000: {
                items: 6
            }
        },
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true
    })
    $('.play').on('click', function() {
        owl.trigger('play.owl.autoplay', [1000])
    })
    $('.stop').on('click', function() {
        owl.trigger('stop.owl.autoplay')
    })
</script>
<script>
    var star = '.star',
        selected = '.selected';

    $(star).on('click', function() {
        $(selected).each(function() {
            $(this).removeClass('selected');
        });
        $(this).addClass('selected');
        var star = $(this).data("star");
        Swal.fire({
            icon: 'success',
            title: 'Bạn đã đánh giá Acaommodation ' + star + ' sao',
            showConfirmButton: false,
            timer: 1500
        })
        var idRoom = $("[name='roomD']").val();
        var idUser = $("[name='userId']").val();
        // alert(idRoom);
        if (idUser == null) {
            Swal.fire({
                icon: 'error',
                title: 'Lỗi...',
                text: 'Bạn cần đăng nhập để đánh giá phòng!',
            })
        } else {
            var _token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: "{{ route('postStar') }}",
                type: "POST",
                data: {
                    '_token': _token,
                    'idRoom': idRoom,
                    'idUser': idUser,
                    'star': star,
                },
                success: function(response) {
                    $("#c1").load(window.location.href + " #cc");
                },
            });
        }

    });
    var star1 = '.star1'
    $(star1).on('click', function() {
        $(selected).each(function() {
            $(this).removeClass('selected');
        });
        $(this).addClass('selected');
        var star1 = $(this).data("star");
        Swal.fire({
            icon: 'success',
            title: 'Bạn đã đánh giá Destination ' + star1 + ' sao',
            showConfirmButton: false,
            timer: 1500
        })
        var idRoom = $("[name='roomD']").val();
        var idUser = $("[name='userId']").val();
        // alert(idRoom);
        // alert(idUser);
        if (idUser == null) {
            Swal.fire({
                icon: 'error',
                title: 'Lỗi...',
                text: 'Bạn cần đăng nhập để đánh giá phòng!',
            })
        } else {
            var _token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: "{{ route('postStar') }}",
                type: "POST",
                data: {
                    '_token': _token,
                    'idRoom': idRoom,
                    'idUser': idUser,
                    'star1': star1,
                },
                success: function(response) {
                    $("#c1").load(window.location.href + " #cc");
                },
            });
        }
    });

    var star2 = '.star2'
    $(star2).on('click', function() {
        $(selected).each(function() {
            $(this).removeClass('selected');
        });
        $(this).addClass('selected');
        var star2 = $(this).data("star");
        Swal.fire({
            icon: 'success',
            title: 'Bạn đã đánh giá Transport ' + star2 + ' sao',
            showConfirmButton: false,
            timer: 1500
        })
        var idRoom = $("[name='roomD']").val();
        var idUser = $("[name='userId']").val();
        // alert(idRoom);
        // alert(idUser);
        if (idUser == null) {
            Swal.fire({
                icon: 'error',
                title: 'Lỗi...',
                text: 'Bạn cần đăng nhập để đánh giá phòng!',
            })
        } else {
            var _token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: "{{ route('postStar') }}",
                type: "POST",
                data: {
                    '_token': _token,
                    'idRoom': idRoom,
                    'idUser': idUser,
                    'star2': star2,
                },
                success: function(response) {
                    $("#c1").load(window.location.href + " #cc");
                },
            });
        }
    });

    var star3 = '.star3'
    $(star3).on('click', function() {
        $(selected).each(function() {
            $(this).removeClass('selected');
        });
        $(this).addClass('selected');
        var star3 = $(this).data("star");
        Swal.fire({
            icon: 'success',
            title: 'Bạn đã đánh giá Overall ' + star3 + ' sao',
            showConfirmButton: false,
            timer: 1500
        })
        var idRoom = $("[name='roomD']").val();
        var idUser = $("[name='userId']").val();
        // alert(idRoom);
        // alert(idUser);
        if (idUser == null) {
            Swal.fire({
                icon: 'error',
                title: 'Lỗi...',
                text: 'Bạn cần đăng nhập để đánh giá phòng!',
            })
        } else {
            var _token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: "{{ route('postStar') }}",
                type: "POST",
                data: {
                    '_token': _token,
                    'idRoom': idRoom,
                    'idUser': idUser,
                    'star3': star3,
                },
                success: function(response) {
                    $("#c1").load(window.location.href + " #cc");
                },
            });
        }
    });
</script>
<script>
    $(function() {
        $('.gallery-filter li').on('click', function() {

            $('.gallery-filter li').removeClass('active');
            $(this).addClass('active');

            var selector = $(this).attr('data-filter');
            console.log(selector);
            $('.gallery-filter-items').isotope({
                filter: selector
            });
        });
        $(window).load(function() {
            $('.gallery-filter-items').isotope();
        });
    })
</script>


<script>
    $(function() {
        $('.cmtChild').hide();
        $('.comment-area .reply-comment').on('click', function(event) {
            event.preventDefault();
            console.log('đã click');
            $("#cmt-child-" + $(this).attr("id")).toggle();
        })
    })
</script>

<script>
    //slide ranger
    $('#slider-range').slider({
        range: true,
        min: 0,
        max: 1500,
        values: [200, 1070],
        slide: function(event, ui) {
            $('#amount').val('$' + ui.values[0] + ' - $' + ui.values[1]);
            var value1 = ui.values[0];
            var value2 = ui.values[1];

            $.ajax({
                type: "GET",
                url: "",
                data: "min=" + value1 + "&max=" + value2,
                cache: false,
                success: function(html) {
                    $('public.products.list');
                }
            })
        }
    });
    $('#amount').val(
        '$' +
        $('#slider-range').slider('values', 0) +
        ' - $' +
        $('#slider-range').slider('values', 1)
    );
</script>

<!-- post comment to phòng  -->
<script>
    $(function() {
        // phải lên chứ 
        // nhưng nó là DOM ảo =)), muốn tác động vào DOM tạo ra sau khi trang đã được load thì phải dùng on on j
        // biết thế là được  =))
        // ko đc viết là click(à)
        // ừ //vl mấy cái click chỉ tác động vào DOM đã có sẵn trên web
        // còn sau khi web chạy xong mà lại có thêm DOM Mới thì phải dùng on//đù
        // ăn cứt nhiều ms biết được =))
        //chơi game đê
        // vl code đi 
        // code cái search 
        // đả bảo cái này nhỏ vl rồi =))
        //search thì bỏ hết foem đi à
        // hả.ajax search thì bỏ form đi à
        // ko có form thì lấy data chỉ cần 1 dòng thôi =))
        $(document).on('click', '.nutguiblto', function() {
            var content = $("[name='content']").val();
            var idRoom = $("[name='roomD']").val();
            var idUser = $("[name='userId']").val();
            var url = $(this).attr('url');
            var _token = $('meta[name="csrf-token"]').attr('content');
            if (idUser == null) {
                Swal.fire({
                    icon: 'error',
                    title: 'Lỗi...',
                    text: 'Bạn cần đăng nhập bình luận về phòng!',
                })
            } else {
                if (content == '') {
                    
                    Swal.fire({
                        icon: 'error',
                        title: 'Lỗi...',
                        text: 'Bạn chưa nhập nội dung!',
                    })
                } else {
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {
                            '_token': _token,
                            'content': content,
                            'idUser': idUser,
                            'idRoom': idRoom,
                        },
                        success: function(response) {
                            $("#khoicmt").load(window.location.href + " #cckhoicmt");
                        },
                    })
                }
            }
        });
    });
</script>

<script>
    $(function() {
        $(document).on('click', '.nutche', function() {
            var contentChild = $("#form-cmt-" + $(this).attr("id")).val();
            var idRoom = $("[name='roomD']").val();
            var idUser = $("[name='userId']").val();
            var parentcmtchild = $("[name='parentcmtchild']").val();
            var url = $(this).attr('url');
            var _token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "POST",
                url: url,
                data: {
                    '_token': _token,
                    'contentChild': contentChild,
                    'idUser': idUser,
                    'idRoom': idRoom,
                    'parentcmtchild': parentcmtchild,
                },
                success: function(response) {
                    $("#khoicmt").load(window.location.href + " #cckhoicmt");
                }
            })
        });
    })
</script>

<script>

</script>