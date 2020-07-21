@extends('layoutadmin.index')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Danh sách bình luận</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="myTable" class="table table-striped table-bordered dt-responsive nowrap" style="text-align: center;line-height: 100px;width:100%">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên</th>
                                    <th>Avatar</th>
                                    <th>Comment</th>
                                    <th>Thời gian comment</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reviewRoom as $rR)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$rR->user->name}}</td>
                                    <td>
                                        <img src="public/uploads/images/user/{{$rR->user->avatar}}" alt="" style="width:100px;height:100px;border-radius:50%">
                                    </td>
                                    <td>{{$rR->content}}</td>
                                    <td>{{$rR->created_at}}</td>
                                    <td>
                                    <input type="checkbox"  data-toggle="toggle" data-onstyle="primary" url="{{route('admin.reviewRoom2.update',['id'=>$rR->id])}}" class="nutstatus" data-nutstatus="{{$rR->id}}" @if($rR->status == 0) checked @endif>
                                        
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div style="float:right">
                        </div>
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