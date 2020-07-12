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
                        <h3 class="card-title">Danh Sách Danh Mục</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="myTable" class="table table-striped table-bordered dt-responsive nowrap" style="text-align: center;line-height: 100px;width:100%">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã hóa đơn</th>
                                    <th>Tổng tiền</th>
                                    <th>Phương thức thanh toán</th>
                                    <th>Ngày booking</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$order->id}}</td>
                                    <td>${{number_format($order->total_price)}}</td>
                                    <td>{{($order->payment == 0)? "Thanh toán tại quầy" : "Thanh toán online"}}</td>
                                    <td>{{$order->created_at}}</td>
                                    <td>
                                        <button type="button" url="{{route('admin.order.show',['order'=>$order->id])}}" data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-success xemchitiet">
                                            <i class="far fa-eye"></i>
                                        </button>
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

    @include('admin.modal')
</div>

@stop