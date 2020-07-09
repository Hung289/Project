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
                        <h3 class="card-title">Danh Sách thương hiệu</h3>

                        <!-- <form class="form-inline ml-3" style="float:right;margin-right:30px" action="{{route('searchBrand')}}">
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
                                    <th>Tên thương hiệu</th>
                                    <th>logo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($brands as $brand)
                                <tr>
                                    <td>{{$brand->id}}</td>
                                    <td>{{$brand->name}}</td>
                                    <td>
                                        <img src="public/uploads/images/Brand/{{$brand->logo}}" style="width:250px;height:150px" alt="">
                                    </td>
                                    <td>
                                        <a href="{{route('brand.edit',['brand'=>$brand->id])}}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                        <button type="button" url="{{route('brand.destroy',['brand'=>$brand->id])}}" class="btn btn-danger nutxoa"><i class="fas fa-trash"></i></button>
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
</div>

@stop