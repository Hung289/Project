@extends('layoutweb.index')
@section('content')

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
                            @if($order->user_id == (Auth::user()->id))
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
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Chi tiết hóa đơn</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="body-modal">
                                    <h3>Có {{$order->orderDetail->count()}} phòng trong hóa đơn này</h3>
                                    @foreach($orderDetils as $oD)
                                    @if($order->id == $oD->order_id)
                                    <div class="row motdong" id="viewUser">
                                        <div class="col-md-6 chitietdon">
                                            <label for="">{{$oD->room->name}}</label>
                                            @foreach($roomImages as $rI)
                                            <?php $check = ($oD->room->id == $rI->room_id) ? "$rI->image" : "" ?>
                                            @if($check != '')
                                            <img src="public/uploads/images/rooms/{{$check}}" alt="Ảnh của phòng">
                                            @break
                                            @endif
                                            @endforeach
                                            <label for="">Ngày Đến/ngày đi</label>
                                            <p>{{$oD->from_date}} -> {{$oD->to_date}}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Dịch vụ kèm theo phòng</label>
                                            @foreach($services as $ser)
                                            @foreach($oD->orderDetailService as $oDS)
                                            <div class="form-group row dongdichvu">
                                                <div class="col-md-4">
                                                    <?php $check1 = ($oDS->service_id == $ser->id) ? "$ser->image" : "" ?>
                                                    @if($check1 !='')
                                                    <img src="public/uploads/images/servicess/{{$check1}}" alt="Ảnh của phòng">
                                                    @endif
                                                </div>
                                                <div class="col-md-8">
                                                    <?php $check2 = ($oDS->service_id == $ser->id) ? "$ser->name" : "" ?>
                                                    @if($check2 !='')
                                                    <p>{{$check2}}</p>
                                                    @endif
                                                    <?php $check3 = ($oDS->service_id == $ser->id) ? "$ser->price" : "" ?>
                                                    @if($check3 !='')
                                                    <p>Giá: ${{$check3}}</p>
                                                    <p>Số lượng: {{$oDS->quantity_service}}</p>
                                                    @endif

                                                </div>
                                            </div>
                                            @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                    <p>Tổng tiền cho phòng này: ${{number_format($order->total_price)}}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
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
@stop