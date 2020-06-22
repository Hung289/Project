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
    
    
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
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
                            <h3 class="card-title">Thêm mới phòng</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('room.store')}}" method="POST" role="form" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên phòng</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Nhập tên phòng">
                                    @error('name')
                                    <small class="error help-block" style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Số giường</label>
                                    <input type="number" name="bed" min="1" max="3" class="form-control" placeholder="Nhập số giường ngủ">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Số bồn tắm</label>
                                    <input type="number" name="bath" min="1" max="3" class="form-control" placeholder="Nhập số bồn tắm của phòng">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Diện tích phòng</label>
                                    <input type="number" name="area" min="1" max="100" class="form-control" placeholder="Nhập diện tích phòng">
                                </div>
                                <div class="form-group">
                                    <label for="">Vị trí phòng</label>
                                    <input type="text" name="location" class="form-control" placeholder="Nhập vị trị phòng">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Giá phòng 1 đêm</label>
                                    <input type="text" name="priceNight" class="form-control" placeholder="Nhập vào giá phòng 1 đêm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Giá phòng Cuối tuần(T6-T7)</label>
                                    <input type="text" name="priceWeekends" class="form-control" placeholder="Nhập vào giá phòng cuối tuần">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Giá phòng hàng tuần</label>
                                    <input type="text" name="priceWeekly" class="form-control" placeholder="Nhập vào giá phòng hàng tuần">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Phí dọn dẹp phòng</label>
                                    <input type="text" name="priceClearFee" class="form-control" placeholder="Nhập vào phí dọn dẹp phòng">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Hình Ảnh</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="files[]" id="file-input" multiple />
                                            <label class="custom-file-label" for="exampleInputFile">Chọn Ảnh</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Trạng Thái</label>
                                    <select name="status" class="form-control" id="">
                                        <option value="0">Đang trống</option>
                                        <option value="1">Đã bị thuê</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Chọn Danh Mục phòng</label>
                                    <select name="category_room_id" class="form-control" id="">
                                        <option value="0">--Chọn Danh Mục--</option>
                                        @foreach($CateRoom as $CateR)
                                        <option value="{{$CateR->id}}">{{$CateR->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Chọn admin đăng phòng</label>
                                    <select name="user_room_id" class="form-control" id="">
                                        <option value="{{Auth::User()->id}}">{{Auth::User()->name}}</option>

                                    </select>
                                    <!-- <input type="text" class="form-control" value="{{Auth::User()->id}}" name="user_room_id" placeholder="{{Auth::User()->name}}"> -->

                                </div>
                              
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Miêu tả</label>
                                    <textarea placeholder="Nhập miêu ta tại đây" name="description" id="description" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Gym</label>
                                    <div class="col-sm-10">
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="gym" value="1" checked>có 
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="gym" value="0">không
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Laundry</label>
                                    <div class="col-sm-10">
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="Laundry" value="1" checked>có 
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="Laundry" value="0">không
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">TV Cable</label>
                                    <div class="col-sm-10">
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="tvCable" value="1" checked>có 
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="tvCable" value="0">không
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Wi-Fi</label>
                                    <div class="col-sm-10">
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="wifi" value="1" checked>có 
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="wifi" value="0">không
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Bãi đậu xe miễn phí</label>
                                    <div class="col-sm-10">
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="FreeParking" value="1" checked>có 
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="FreeParking" value="0">không
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Bảo vệ</label>
                                    <div class="col-sm-10">
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="Security" value="1" checked>có 
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="Security" value="0">không
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Thêm </button>
                            </div>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </div>
                    </form>
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
                <!-- /.card -->
            </div>
        </div>
    </section>
</div>

@stop