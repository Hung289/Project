@extends('layoutadmin.index')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Danh Sách Danh Mục</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="myTable" class="table table-striped table-bordered dt-responsive nowrap" style="text-align: center;line-height: 100px;width:100%">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Key</th>
                                    <th>Data</th>
                                    <th>Label</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($systems as $s)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$s->key}}</td>
                                        <td>{{$s->data}}</td>
                                        <td>{{$s->label}}</td>
                                        <td>
                                        <a href="{{route('admin.system.edit',['system'=>$s->id])}}" class="btn btn-primary"><i class="far fa-edit"></i></a>
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