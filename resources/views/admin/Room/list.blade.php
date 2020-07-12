@extends('layoutadmin.index')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>
    <!-- Main content -->
    <!-- @if(count($errors) > 0)
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
    @endif -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Danh Sách Danh Mục</h3>
                        <!-- <form class="form-inline ml-3" style="float:right;margin-right:30px" action="{{route('admin.searchRoom')}}">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="text" placeholder="Tìm Kiếm" aria-label="Search" name="key">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit" style="background-color: black;">
                                        <i class="fas fa-search" style="background-color: black;color: #FFF;"></i>
                                    </button>
                                </div>
                            </div>
                        </form> -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="myTable" class="table table-striped table-bordered dt-responsive nowrap" style="text-align: center;line-height: 100px;width:100%">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên phòng</th>
                                    <th>Hình Ảnh</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($rooms as $room)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$room->name}}</td>
                                    <!-- <td>{{$room->cateRoom->name}}</td> -->
                                    <td>
                                        @foreach($roomImage as $roomI)
                                        <?php $check = ($roomI->room_id == $room->id) ? "$roomI->image" : "" ?>
                                        @if(!$check=="")
                                        <img src="public/uploads/images/rooms/{{$check}}" width="105px" height="50px" style="object-fit: cover;">
                                        @break;
                                        @endif
                                        @endforeach
                                    </td>
                                    @if($room->status == 0)
                                    <td>Đang trống</td>
                                    @else
                                    <td>Đã bị thuê</td>
                                    @endif
                                    <!-- <td>{{$room->user->name}}</td> -->
                                    <td>
                                        <button type="button" url="{{route('admin.room.show',['room'=>$room->id])}}" data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-success xemchitiet">
                                            <i class="far fa-eye"></i>
                                        </button>
                                        <a href="{{route('admin.room.edit',['room'=>$room->id])}}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                        <button type="buton" url="{{route('admin.room.destroy',['room'=>$room->id])}}" class="btn btn-danger nutxoa"><i class="fas fa-trash"></i></button>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div style="float:right">

                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
    
    @include('admin.modal')
</div>

@stop