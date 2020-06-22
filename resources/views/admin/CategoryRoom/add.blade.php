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
    <!-- @if(count($errors) > 0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $err)
        {{$err}}<br>
        @endforeach
    </div>
    @endif -->
    @if(Session::has('errors'))
        <div class="alert alert-danger">
            {{Session::get('errors')}}
        </div>
    @endif
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12" style="margin:0 auto">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thêm mới danh mục</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('categoryRoom.store')}}" method="POST" role="form" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group @error('name') has-error @enderror">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input name="name" id="name" type="text" class="form-control  " placeholder="Nhập tên danh mục" onkeydown="ChangeToSlug()" value="{{old('name')}}">
                                    @error('name')
                                        <small class="error help-block" style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
                                
                                
                                
                                <div class="form-group">
                                    <label for="exampleInputFile">Hình Ảnh</label>
                                    <div class="input-group">
                                            <input type="file" class="custom-file-input" name="image" placeholder="Chọn ảnh" required multiple/>
                                            <label class="custom-file-label" for="exampleInputFile">Chọn Ảnh</label>        
                                    </div>
                                    @error('image')
                                        <small style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea name="description" id="" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Trạng Thái</label>
                                    <select name="status" class="form-control" id="">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiện</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Thêm Danh Mục</button>
                            </div>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@stop