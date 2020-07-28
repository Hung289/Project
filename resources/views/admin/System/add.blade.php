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
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thêm mới IconSocial</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('admin.system.store2')}}" method="POST" name="pForm" role="form" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Thêm key</label>
                                    <input name="key" type="test" class="form-control" placeholder="Nhập key">
                                    @error('key')
                                    <small class="error help-block" style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Hình Ảnh</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image[]" id="file-input" multiple />
                                            <label class="custom-file-label" for="exampleInputFile">Chọn Ảnh</label>
                                        </div>
                                    </div>
                                    @if($errors->has('image'))
                                    <span class="help-block text-danger">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">label</label>
                                    <input name="label" type="text" class="form-control" placeholder="Nhập hotline">
                                    @error('label')
                                    <small class="error help-block" style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" id="nuttao">Thêm mới hostline</button>
                            </div>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thêm mới logo</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('admin.system.store3')}}" method="POST" name="pForm" role="form" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Thêm key</label>
                                    <input name="key" type="test" class="form-control" placeholder="Nhập key">
                                    @error('key')
                                    <small class="error help-block" style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Hình Ảnh</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image" id="file-input"  />
                                            <label class="custom-file-label" for="exampleInputFile">Chọn Ảnh</label>
                                        </div>
                                    </div>
                                    @if($errors->has('image'))
                                    <span class="help-block text-danger">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">label</label>
                                    <input name="label" type="text" class="form-control" placeholder="Nhập hotline">
                                    @error('label')
                                    <small class="error help-block" style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" id="nuttao">Thêm mới logo</button>
                            </div>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thêm mới sđt</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('admin.system.store')}}" method="POST" name="pForm" role="form" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Thêm key</label>
                                    <input name="key" type="test" class="form-control" placeholder="Nhập key">
                                    @error('key')
                                    <small class="error help-block" style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Dữ liệu text</label>
                                    <input name="data" type="test" class="form-control" placeholder="Nhập key">
                                    @error('data')
                                    <small class="error help-block" style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">label</label>
                                    <input name="label" type="text" class="form-control" placeholder="Nhập hotline">
                                    @error('label')
                                    <small class="error help-block" style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" id="nuttao">Thêm mới hostline</button>
                            </div>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
                <div class="col-md-6">
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