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
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-8">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thêm mới blog</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('admin.blog.store')}}" method="POST" name="pForm" role="form" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên blog</label>
                                    <input name="name" type="text" class="form-control" placeholder="Nhập tên blog" value="{{old('name')}}">
                                    @error('name')
                                    <small class="error help-block" style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Chọn ảnh blog</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="files[]" multiple id="file-input">
                                            <label class="custom-file-label" for="exampleInputFile">Chọn Ảnh</label>
                                        </div>
                                    </div>
                                    @if($errors->has('files'))
                                    <span class="help-block text-danger">{{ $errors->first('files') }}</span>
                                    @endif
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputPassword1">Danh mục</label>
                                    <select name="category_blog_id" class="form-control" id="">
                                        <option value="">--Chọn danh mục--</option>
                                        @foreach($CategoryBlog as $CB)
                                        <option value="{{$CB->id}}">{{$CB->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_blog_id')
                                    <small class="error help-block" style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">title</label>
                                    <textarea name="title" id="content" cols="30" rows="10"></textarea>
                                    @error('title')
                                    <small class="error help-block" style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">content</label>
                                    <textarea name="content" id="content" cols="30" rows="10"></textarea>
                                    @error('content')
                                    <small class="error help-block" style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Chọn admin đăng phòng</label>
                                    <select name="user_id" class="form-control" id="">
                                        <option value="{{Auth::User()->id}}">{{Auth::User()->name}}</option>
                                        <option>--Chọn Admin khác--</option>
                                        @foreach($admins as $admin)
                                        @if($admin->level==0 || $admin->level==1)
                                        @if(Auth::User()->id != $admin->id)
                                        <option value="{{$admin->id}}">{{$admin->name}}</option>
                                        @endif
                                        @endif
                                        @endforeach
                                    </select>
                                    @error('user_id')
                                    <small class="error help-block" style="color:red">{{$message}}</small>
                                    @enderror
                                    <!-- <input type="text" class="form-control" value="{{Auth::User()->id}}" name="user_room_id" placeholder="{{Auth::User()->name}}"> -->

                                </div>
                                <div class="form-group">
                                    <label for="">Trạng thái</label>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="gridRadios1" value="0" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                Hiện
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="gridRadios2" value="1">
                                            <label class="form-check-label" for="gridRadios2">
                                                Ẩn
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" id="nuttao">Tạo blog</button>
                            </div>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
                <div class="col-md-4">
                    <!-- general form elements disabled -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Xem Trước hình ảnh</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form role="form">

                                <div class="form-group">
                                    <div>
                                        <div id="preview"></div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
</div>


@stop