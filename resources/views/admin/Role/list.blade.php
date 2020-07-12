@extends('layoutadmin.index')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Danh Sách Nhóm quyền</h3>
                        
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="myTable" class="table table-striped table-bordered dt-responsive nowrap" style="text-align: center;line-height: 100px;width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $model)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$model->name}}</td>
                                    <td>                                
                                        <a href="" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                        <a href="" class="btn btn-danger"><i class="far fa-trash"></i></a>                                      
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