@extends('layoutadmin.index')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DataTables</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
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
                        <h3 class="card-title">Danh Sách Tài khoản</h3>
                        <form class="form-inline ml-3" style="float:right;margin-right:30px" action="{{route('searchUser')}}">
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
                        <table id="example2" class="table table-bordered table-hover" style="text-align: center;line-height: 100px;">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên Tài khoản</th>
                                    <th>Ảnh đại diện</th>
                                    <th>email</th>
                                    <th>Chức vụ</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($userList as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>
                                        <img src="public/uploads/images/user/{{$user->avatar}}" alt="" style="width:100px;height:100px;border-radius:50%">
                                    </td>
                                    <td>{{$user->email}}</td>

                                    @if($user->level==0)
                                    <td>Super Admin</td>
                                    @endif
                                    @if($user->level==1)
                                    <td>admin</td>
                                    @endif
                                    @if($user->level==2)
                                    <td>Thường dân</td>
                                    @endif

                                    <td>
                                        <a href="{{route('user.edit',['user'=>$user->id])}}" class="btn btn-primary">Sửa</a>
                                    </td>
                                    <td>
                                        <button type="button" url="{{route('user.destroy',['user'=>$user->id])}}" class="btn btn-danger nutxoa">Xóa</button>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>

                        </table>
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