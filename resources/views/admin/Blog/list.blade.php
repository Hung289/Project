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
                        <h3 class="card-title">Danh Sách blog</h3>

                        <!-- <form class="form-inline ml-3" style="float:right;margin-right:30px" action="{{route('searchBlog')}}">
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
                                    <th>Tên blog</th>
                                    <th>trạng thái</th>
                                    <th>Người đăng blog</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($blogs as $blog)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$blog->name}}</td>                                  
                                    @if($blog->status == 0)
                                    <td>Hiện</td>
                                    @else
                                    <td>Ẩn</td>
                                    @endif                                   
                                    <td>{{$blog->user->name}}</td>
                                    <td>
                                        <button type="button" url="{{route('blog.show',['blog'=>$blog->id])}}" data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-success xemchitiet">
                                            <i class="far fa-eye"></i>
                                        </button>
                                        <a href="{{route('blog.edit',['blog'=>$blog->id])}}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                        <button type="button" url="{{route('blog.destroy',['blog'=>$blog->id])}}" class="btn btn-danger nutxoa"><i class="fas fa-trash"></i></button>
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