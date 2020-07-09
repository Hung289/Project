@extends('layoutadmin.index')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>
    <!-- Main content -->
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
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Danh Sách Danh Mục</h3>
                        <!-- <form class="form-inline ml-3" style="float:right;margin-right:30px" action="{{route('searchService')}}">
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
                                    <th>Tên dịch vụ</th>
                                    <th>Hình Ảnh</th>
                                    <th>Danh mục</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($services as $service)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$service->name}}</td>
                                    <td>
                                        <img src="public/uploads/images/servicess/{{$service->image}}" alt="" style="width:250px;height:150px">
                                    </td>
                                    <td>{{$service->categoryService->name}}</td>
                                    <td>
                                        <button type="button" url="{{route('service.show',['service'=>$service->id])}}" data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-success xemchitiet">
                                            <i class="far fa-eye"></i>
                                        </button>
                                        <a href="{{route('service.edit',['service'=>$service->id])}}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                        <button type="button" url="{{route('service.destroy',['service'=>$service->id])}}" class="btn btn-danger nutxoa"><i class="fas fa-trash"></i></button>
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
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Chi tiết dịch vụ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="body-modal">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

@stop