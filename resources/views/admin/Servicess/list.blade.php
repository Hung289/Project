@extends('layoutadmin.index')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DataTables</h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
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
                        <form class="form-inline ml-3" style="float:right;margin-right:30px" action="{{route('searchService')}}">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="text" placeholder="Tìm Kiếm" aria-label="Search" name="key">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit" style="background-color: black;">
                                        <i class="fas fa-search" style="background-color: black;color: #FFF;"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover" style="text-align: center;height: 100px;
  line-height: 100px;
  white-space: nowrap;margin-bottom:30px">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên dịch vụ</th>
                                    <th>Giá dịch vụ</th>
                                    <th>Hình Ảnh</th>
                                    <th>Status</th>
                                    <th>Danh mục</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($services as $service)
                                <tr>
                                    <td>{{$service->id}}</td>
                                    <td>{{$service->name}}</td>
                                    <td>{{number_format($service->price)}} $</td>
                                    <td>
                                        <img src="public/uploads/images/servicess/{{$service->image}}" alt="" style="width:250px;height:150px">
                                    </td>
                                    @if($service->status == 0)
                                    <td>Hiện</td>
                                    @else
                                    <td>Ẩn</td>
                                    @endif
                                    <td>{{$service->categoryService->name}}</td>
                                    <td>
                                        <a href="{{route('service.edit',['service'=>$service->id])}}" class="btn btn-primary">Sửa</a>
                                    </td>
                                    <td>
                                        <button type="button" url="{{route('service.destroy',['service'=>$service->id])}}" class="btn btn-danger nutxoa">Xóa</button>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                        <div style="float:right">
                            {!! $services->links() !!}
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
</div>

@stop