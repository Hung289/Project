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
                    <div class="card card-primary addroom">

                        <div class="card-header">
                            <h3 class="card-title">Thêm mới phòng</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('admin.room.update',['room'=>$room->id])}}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên phòng</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Nhập tên phòng" value="{{$room->name}}">
                                    @error('name')
                                    <small class="error help-block" style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-6 left">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Số giường</label>
                                            <input type="number" name="bed" min="1" max="3" class="form-control" placeholder="Nhập số giường ngủ" value="{{$room->bed}}">
                                            @error('bed')
                                            <small class="error help-block" style="color:red">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 right">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Số bồn tắm</label>
                                            <input type="number" name="bath" min="1" max="3" class="form-control" placeholder="Nhập số bồn tắm của phòng" value="{{$room->bath}}">
                                            @error('bath')
                                            <small class="error help-block" style="color:red">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 left">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Số người lớn</label>
                                            <input type="number" name="guest" min="1" max="4" class="form-control" placeholder="Nhập số người lớn" value="{{$room->guest}}">
                                            @error('guest')
                                            <small class="error help-block" style="color:red">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 right">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Số trẻ em</label>
                                            <input type="number" name="adult" min="1" max="3" class="form-control" placeholder="Nhập số trẻ em" value="{{$room->adult}}">
                                            @error('adult')
                                            <small class="error help-block" style="color:red">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 left">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Giá phòng 1 đêm</label>
                                            <input type="text" name="priceNight" class="form-control" placeholder="Nhập vào giá phòng 1 đêm" value="{{$room->priceNight}}">
                                            @error('priceNight')
                                            <small class="error help-block" style="color:red">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 right">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Giá phòng Cuối tuần(T6-T7)</label>
                                            <input type="text" name="priceWeekends" class="form-control" placeholder="Nhập vào giá phòng cuối tuần" value="{{$room->priceWeekends}}">
                                            @error('priceWeekends')
                                            <small class="error help-block" style="color:red">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 left">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Giá phòng hàng tuần</label>
                                            <input type="text" name="priceWeekly" class="form-control" placeholder="Nhập vào giá phòng hàng tuần" value="{{$room->priceWeekly}}">
                                            @error('priceWeekly')
                                            <small class="error help-block" style="color:red">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 right">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Phí dọn dẹp phòng</label>
                                            <input type="text" name="priceClearFee" class="form-control" placeholder="Nhập vào phí dọn dẹp phòng" value="{{$room->priceClearFee}}">
                                            @error('priceClearFee')
                                            <small class="error help-block" style="color:red">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Diện tích phòng</label>
                                    <input type="number" name="area" min="30" max="150" class="form-control" placeholder="Nhập diện tích phòng" value="{{$room->area}}">
                                    @error('area')
                                    <small class="error help-block" style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Vị trí phòng</label>
                                    <input type="text" name="location" class="form-control" placeholder="Nhập vị trị phòng" value="{{$room->location}}">
                                    @error('location')
                                    <small class="error help-block" style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">link_map</label>
                                    <input type="text" name="link_map" class="form-control"  placeholder="Nhập link map lấy trên google map" value="{{$room->link_map}}">
                                    @error('link_map')
                                    <small class="error help-block" style="color:red">{{$message}}</small>
                                    @enderror
                                </div>



                                <div class="form-group">
                                    <label for="exampleInputFile">Hình Ảnh</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="files[]" id="file-input" multiple />
                                            <label class="custom-file-label" for="exampleInputFile">Chọn Ảnh</label>
                                        </div>
                                    </div>
                                    @if($errors->has('files'))
                                    <span class="help-block text-danger">{{ $errors->first('files') }}</span>
                                    @endif


                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Trạng Thái</label>
                                    <select name="status" class="form-control" id="">
                                        <option value="0" @if($room->status == 0) selected @endif>Hiện</option>
                                        <option value="1" @if($room->status == 1) selected @endif>Ẩn</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 left">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Brand(Thương hiệu)</label>
                                            <select name="brand_id" class="form-control" id="">
                                                <option value="{{$room->brand_id}}">-- Danh mục hiện tại -- <b>{{$room->brand->name}}</b></option>
                                                <option>-- Chọn một danh mục mới--</option>
                                                @foreach($BrandRoom as $BrandR)
                                                @if( $room->brand_id!=$BrandR->id )
                                                <option value="{{$BrandR->id}}">{{$BrandR->name}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                            @error('brand_id')
                                            <small class="error help-block" style="color:red">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 right">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Chọn Danh Mục phòng</label>
                                            <select name="category_room_id" class="form-control" id="">
                                                <option value="{{$room->category_room_id}}">-- Danh mục hiện tại -- <b>{{$room->cateRoom->name}}</b></option>
                                                <option>-- Chọn một danh mục mới--</option>
                                                @foreach($CateRoom as $CateR)
                                                @if( $room->category_room_id!=$CateR->id )
                                                <option value="{{$CateR->id}}">{{$CateR->name}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                            @error('category_room_id')
                                            <small class="error help-block" style="color:red">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="">Chọn admin đăng phòng</label>
                                    <select name="user_room_id" class="form-control" id="">
                                        <option value="{{Auth::User()->id}}">{{Auth::User()->name}}</option>
                                        <option>--Chọn admin khác đăng bài--</option>
                                        @foreach($Users as $user)
                                        @if($user->id != Auth::User()->id)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    <!-- <input type="text" class="form-control" value="{{Auth::User()->id}}" name="user_room_id" placeholder="{{Auth::User()->name}}"> -->
                                </div>

                                <div class="row">
                                    <div class="col-md-6 left">
                                        <div class="form-group">
                                            <label for="">Gym</label>
                                            <div class="col-sm-10">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="gym" value="1" @if($room->gym == 1) checked @endif>có
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="gym" value="0" @if($room->gym == 0) checked @endif>không
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Laundry</label>
                                            <div class="col-sm-10">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="Laundry" value="1" @if($room->Laundry == 1) checked @endif>có
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="Laundry" value="0" @if($room->Laundry == 0) checked @endif>không
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">TV Cable</label>
                                            <div class="col-sm-10">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="tvCable" value="1" @if($room->tvCable == 1) checked @endif>có
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="tvCable" value="0" @if($room->tvCable == 0) checked @endif>không
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 right">
                                        <div class="form-group">
                                            <label for="">Wi-Fi</label>
                                            <div class="col-sm-10">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="wifi" value="1" @if($room->wifi == 1) checked @endif>có
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="wifi" value="0" @if($room->wifi == 0) checked @endif>không
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Bãi đậu xe miễn phí</label>
                                            <div class="col-sm-10">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="FreeParking" value="1" @if($room->FreeParking == 1) checked @endif>có
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="FreeParking" value="0" @if($room->FreeParking == 0) checked @endif>không
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Bảo vệ</label>
                                            <div class="col-sm-10">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="Security" value="1" @if($room->Security == 1) checked @endif>có
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="Security" value="0" @if($room->Security == 0) checked @endif>không
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Miêu tả</label>
                                    <textarea placeholder="Nhập miêu ta tại đây" name="description" id="content" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$room->description}}</textarea>
                                    @error('description')
                                    <small class="error help-block" style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Nội dung phòng</label>
                                    <textarea placeholder="Nhập nội " name="content" id="content" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$room->content}}</textarea>
                                    @error('content')
                                    <small class="error help-block" style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                            </div>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        </form>
                    </div>
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
            </div>

            <!-- /.card -->
        </div>
    </section>
</div>


@stop