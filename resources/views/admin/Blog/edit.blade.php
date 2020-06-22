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
                            <h3 class="card-title">Thêm mới blog</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('blog.update',['blog'=>$blog->id])}}" method="POST" name="pForm" role="form" enctype="multipart/form-data">
                        @csrf @method('PUT')   
                        <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên blog</label>
                                    <input name="name" type="text" class="form-control" value="{{$blog->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Chọn ảnh blog</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="files[]" multiple id="file-input">
                                            <label class="custom-file-label" for="exampleInputFile">Chọn Ảnh</label>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Danh mục</label>
                                    <select name="category_blog_id" class="form-control" id="">
                                        <option value="{{$blog->category_blog_id}}">{{$blog->categoryBlog->name}}</option>
                                        <option value="">--Chọn danh mục--</option>
                                        @foreach($CategoryBlog as $CB)
                                            @if($blog->category_blog_id != $CB->id)
                                            <option value="{{$CB->id}}">{{$CB->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">title</label>
                                    <textarea name="title" id="description" cols="30" rows="10">{{$blog->title}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">content</label>
                                    <textarea name="content" id="description2" cols="30" rows="10">{{$blog->content}}</textarea>
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
                                    <!-- <input type="text" class="form-control" value="{{Auth::User()->id}}" name="user_room_id" placeholder="{{Auth::User()->name}}"> -->

                                </div>
                                <div class="form-group">
                                    <label for="">Trạng thái</label>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="gridRadios1" value="0" @if($blog->status == 0) checked @endif>
                                            <label class="form-check-label" for="gridRadios1">
                                                Hiện
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="gridRadios2" value="1" @if($blog->status == 1) checked @endif>
                                            <label class="form-check-label" for="gridRadios2">
                                                Ẩn
                                            </label>
                                        </div>
                                    </div>
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