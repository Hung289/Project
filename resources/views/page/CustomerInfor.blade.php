@extends('layoutweb.index')
@section('content')

<div class="wrapper">

  @include('page.ms')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left:0">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <span>Thông tin của</span>
            <h1>{{Auth::user()->name}} </h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row">

          <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-warning">
                  <div class="card-header">
                    <h3 class="card-title">Cập nhật lại thông tin của bạn</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form id="form_update_cus" action="{{route('PostCustomerInfor',['id'=>$users->id])}}" method="POST"  enctype="multipart/form-data" >
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tên Người Dùng</label>
                        <input name="name" type="text" class="form-control" placeholder="Nhập tên người dùng" value="{{$users->name}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Chọn Ảnh Đại Diện</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" name="avatar" id="img" onchange="previewImage(event)">
                            <label class="custom-file-label" for="exampleInputFile" value="">Chọn Ảnh</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">phone</label>
                        <input type="text" name="phone" class="form-control" placeholder="Nhập Số Điện Thoại" value="{{$users->phone}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1" id="nutmo">Đổi mật khẩu <i class="fas fa-chevron-down"></i></label>
                        <div class="resetPass">
                          <p>Mật khẩu cũ</p>
                          <input type="password" name="OldPass" class="form-control" placeholder="Mật khẩu cũ" value="">
                          @error('OldPass')
                          <small class="error help-block" style="color:red">{{$message}}</small>
                          @enderror
                          <p>Mật khẩu mới</p>
                          <input type="password" name="NewPass" class="form-control" placeholder="Mật khẩu mới" value="">
                          <p>Nhập lại mật khẩu</p>
                          <input type="password" name="ResNewPass" class="form-control" placeholder="Nhập lại mật khẩu mới" value="">
                          @error('ResNewPass')
                          <small class="error help-block" style="color:red">{{$message}}</small>
                          @enderror
                        </div>
                      </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                      <button type="submit" id="post_up_cus" class="btn btn-warning">Cập Nhật Lại Thông Tin</button>
                    </div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                  </form>
                </div>
                <!-- /.card -->

              </div>
              <div class="col-md-6">

                <!-- /.card -->
                <!-- Profile Image -->

                <div class="card card-warning card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                      <img style="width:200px;height:200px" class="profile-user-img img-fluid img-circle" alt="Avatar" src="public/uploads/images/user/{{$users->avatar}}" id="image-field">
                    </div>

                    <h3 class="profile-username text-center"></h3>

                    <p class="text-muted text-center"></p>

                    <ul class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">
                        <b>Name</b> <a class="float-right">{{$users->name}}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Email</b> <a class="float-right">{{$users->email}}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Phone</b> <a class="float-right">{{$users->phone}}</a>
                      </li>
                    </ul>

                    <p>Demo Thông Tin Người Dùng Sẽ Được Tạo</p>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- /.card -->
              </div>
              <!--/.col (right) -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->


        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
  </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

<!-- <script src="public/dist/js/adminlte.min.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="public/dist/js/demo.js"></script> -->
<script>
  function previewImage(event) {
    var reader = new FileReader();
    var imageField = document.getElementById("image-field")

    reader.onload = function() {
      if (reader.readyState == 2) {
        imageField.src = reader.result;
      }
    }
    reader.readAsDataURL(event.target.files[0]);
  }
</script>





@stop