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
    <div class="col-md-12 chitietnguoi">
        <label for="">Thông tin người đặt phòng</label>
        <br>
        <div class="form-group row">
            <label for="">Tên người đặt phòng : </label>
            <p> {{$order->customer->name}}</p>
        </div>
        <div class="form-group row">
            <label for="">email : </label>
            <p> {{$order->customer->email}}</p>
        </div>
        <div class="form-group row">
            <label for="">Số điện thoại : </label>
            <p> {{$order->customer->phone}}</p>
        </div>
        <div class="form-group row">
            <label for="">Địa chỉ : </label>
            <p> {{$order->customer->address}}</p>
        </div>
        <div class="form-group row">
            <label for="">Giới tính : </label>
            <p> {{($order->customer->gender == 0)? "Nam" : "Nữ"}}</p>
        </div>
    </div>
</div>
@endif
@endforeach
<p>Tổng tiền cho phòng này: <span style="color:red;font-size:25px"> ${{number_format($order->total_price)}}</span></p>