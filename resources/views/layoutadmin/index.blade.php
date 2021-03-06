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
  <link rel="stylesheet" href="public/sweetalert2.min.css">
  <!-- Css thêm vào -->
  <link rel="stylesheet" href="public/dist/css/hungadmin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css">
  <!-- fontsomeone -->
  <link rel="stylesheet" href="public/web/fonts/fontawesome/fontawesome-free-5.13.0-web/css/all.min.css" />
  <link rel="stylesheet" href="public/web/fonts/fontawesome/fontawesome-free-5.13.0-web/css/fontawesome.min.css" />

  <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
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
  <!-- Bootstrap Switch -->
  <script src="public/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
  <!-- datatable -->
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


  <script src="public/hung.js"></script>
  <!-- Toastr -->
  <script src="public/toastr/toastr.min.js"></script>
  <script src="public/sweetalert2.min.js"></script>
  <script src="sweetalert2.all.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
  <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
  <script type="text/javascript">
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
  </script>
  <script>
    $(function() {
      $(document).on('change', '.nutstatus', function() {
        var isChecked = $(this).is(":checked") ? 0 : 1;
        var _token = $('meta[name="csrf-token"]').attr('content');
        var url = $(this).attr('url');
        $.ajax({
          url: url,
          type: "POST",
          data: {
            'status': isChecked,
            '_token': _token,
          },
          success: function(response) {

          },
        })
      })
    })
  </script>
  <script>
    $(function(){
      $(document).on('change', '.nutstatusRoom', function() {
        var isChecked = $(this).is(":checked") ? 0 : 1;
        var _token = $('meta[name="csrf-token"]').attr('content');
        var url = $(this).attr('url');
        $.ajax({
          url: url,
          type: "POST",
          data: {
            'status': isChecked,
            '_token': _token,
          },
          success: function(response) {

          },
        })
      });
    });
  </script>

  @include('admin.js')
  @include('page.ms')
  @yield('js')
</body>

</html>