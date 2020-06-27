<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <base href="{{asset('')}}">
  <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="public/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="public/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="public/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Toast -->
  
  <link rel="stylesheet" href="public/toastr/toastr.min.css">
  <link rel="stylesheet" href="public/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

  <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.css" id="theme-styles"> -->
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- header -->
    @include('layoutadmin.header')

    <!-- menu left -->
    @include('layoutadmin.menu')

    <!-- chỗ nội dung trang index khi mới vào trang admin -->
    @yield('content')
    <!-- /.content-wrapper -->


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="public/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="public/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <script src="public/tinymce/tinymce/tinymce.min.js"></script>
  <script src="public/tinymce/tinymce/config.js"></script>
  <!-- <script src="public/ckeditor/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('description');
    CKEDITOR.replace('description2');
    

  </script> -->
  <!-- Bootstrap 4 -->
  <script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="public/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="public/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="public/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="public/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="public/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="public/plugins/moment/moment.min.js"></script>
  <script src="public/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="public/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="public/dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="public/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="public/dist/js/demo.js"></script>
  
  <script>
    $(function() {
      //     $('.content .custom-file-input').change(function (e) { 

      //       var fileName = e.target.files[0].name;
      //         console.log(fileName);
      //         $('.profile-user-img').attr('src','public/uploads/images/user/'+fileName);
      //      });
      // });

      $('.content .nameuser').change(function() {

        var cardN = $('input[data-id="CardName"]').val();
        console.log(cardN);
        $("#DivNameEdit").html(cardN);
      });

      function previewImages() {

        var preview = document.querySelector('#preview');

        if (this.files) {
          [].forEach.call(this.files, readAndPreview);
        }

        function readAndPreview(file) {

          // Make sure `file.name` matches our extensions criteria
          if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
            return alert(file.name + " is not an image");
          } // else...

          var reader = new FileReader();

          reader.addEventListener("load", function() {
            var image = new Image();
            image.width = 400;

            image.title = file.name;
            image.src = this.result;
            preview.appendChild(image);
          });

          reader.readAsDataURL(file);

        }

      }

      document.querySelector('#file-input').addEventListener("change", previewImages);
    })
  </script>

  <!-- <script>
    function previewImage(event) {
      var reader = new FileReader();
      var imageField = document.getElementById("image-field");

      reader.onload = function() {
        if (reader.readyState == 2) {
          imageField.src = reader.result;
        }
      }
      reader.readAsDataURL(event.target.files[0]);
    }
  </script> -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="public/hung.js"></script>
  <!-- Toastr -->
  <script src="public/toastr/toastr.min.js"></script>
  <script src="public/sweetalert/sweetalert2.all.min.js"></script>
  <script type="text/javascript">

        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000
        });
        
    </script>
</body>

</html>