@extends('layoutadmin.index')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>General Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">General Form</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  @if(count($errors) > 0)
  <div class="alert alert-danger">
    @foreach($errors->all() as $err)
    {{$err}}<br>
    @endforeach
  </div>
  @endif
  @if(session('success'))
  <div class="alert alert-success">
    {{session('success')}}
  </div>
  @endif
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thêm Người Dùng Mới</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('user.update',$user->id)}}" method="POST" name="pForm" role="form" enctype="multipart/form-data">
               @csrf @method('PUT')   
            <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tên Người Dùng</label>
                  <input name="name" type="text" class="form-control" value="{{$user->name}}" >
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Chọn Ảnh Đại Diện</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="avatar" id="file-input">
                      <label class="custom-file-label" for="exampleInputFile">Chọn Ảnh</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">phone</label>
                  <input type="text" name="phone" class="form-control" value="{{$user->phone}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">email</label>
                  <input type="email" name="email" class="form-control" value="{{$user->email}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Mật Khẩu</label>
                  <input type="password" name="password" class="form-control" value="{{$user->password}}">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Chức Vụ</label>
                  <select name="level" class="form-control" id="">
                   <option value="0" @if($user->level == 0) selected @endif>Super Admin</option>
                   <option value="1" @if($user->level == 1) selected @endif>Admin</option>
                   <option value="2" @if($user->level == 2) selected @endif>Dân thường</option>
                 </select>
               </div>
             </div>
             <!-- /.card-body -->

             <div class="card-footer">
              <button type="submit" class="btn btn-primary" id="nuttao">Cập nhật</button>
            </div>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
          </form>
        </div>
        <!-- /.card -->

      </div>
      <div class="col-md-4">

        <!-- /.card -->
        <!-- Profile Image -->

        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center"  >
              <div id="preview">

              </div>
            </div>

            <h3 class="profile-username text-center"></h3>

            <p class="text-muted text-center">Software Engineer</p>

            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b>Followers</b> <a class="float-right">1,322</a>
              </li>
              <li class="list-group-item">
                <b>Following</b> <a class="float-right">543</a>
              </li>
              <li class="list-group-item">
                <b>Friends</b> <a class="float-right">13,287</a>
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
</section>  

@stop