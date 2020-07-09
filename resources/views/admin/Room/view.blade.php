<div class="row" id="viewUser">
    <div class="col-md-6 khunganh">
        <label for="">Ảnh phòng</label>
        @foreach($roomImage as $roomI)
        <?php $check = ($roomI->room_id == $room->id) ? "$roomI->image" : "" ?>
        @if(!$check=="")
        <img src="public/uploads/images/rooms/{{$check}}" alt="Ảnh của phòng">
        @endif
        @endforeach
    </div>
    <div class="col-md-6">
        <h3>Thông tin phòng</h3>
        <div class="form-group row">
            <label for="">ID phòng: </label>
            <p> {{ $room->id}}</p>
        </div>
        <div class="form-group row">
            <label for="">Tên phòng : </label>
            <p> {{ $room->name}}</p>
        </div>
        <div class="form-group row">
            <label for="">Vị trí : </label>
            <p> {{ $room->location}}</p>
        </div>
        <div class="form-group row">
            <label for="">Danh mục phòng : </label>
            <p> {{$room->cateRoom->name}}</p>
        </div>
        <div class="form-group row">
            <label for="">Admin đăng phòng : </label>
            <p> {{$room->user->name}}</p>
        </div>
        <div class="form-group row">
            <label for="">Khách sạn : </label>
            <p> {{$room->brand->name}}</p>
        </div>
        <div class="form-group row">
            <label for="">Trạng thái : </label>
            <p> {{($room->status == 0) ? "Đang Trống" :"Đã bị thuê"}}</p>
        </div>
        <div class="form-group row">
            <label for="">Chú thích : </label>
            <p> {!!$room->description!!}</p>
        </div>
    </div>
    <div class="col-md-6 bordertop khunganh">
        <h3>Các dịch vụ có sẵn</h3>
        <div class="form-group row">
            <label for="">Gym : </label>
            <p> {{($room->gym == 0) ? "Có" :"Không"}}</p>
        </div>
        <div class="form-group row">
            <label for="">Laundry : </label>
            <p> {{($room->Laundry == 0) ? "Có" :"Không"}}</p>
        </div>
        <div class="form-group row">
            <label for="">tvCable : </label>
            <p> {{($room->tvCable == 0) ? "Có" :"Không"}}</p>
        </div>
        <div class="form-group row">
            <label for="">wifi : </label>
            <p> {{($room->wifi == 0) ? "Có" :"Không"}}</p>
        </div>
        <div class="form-group row">
            <label for="">FreeParking : </label>
            <p> {{($room->FreeParking == 0) ? "Có" :"Không"}}</p>
        </div>
        <div class="form-group row">
            <label for="">Security : </label>
            <p> {{($room->Security == 0) ? "Có" :"Không"}}</p>
        </div>

    </div>
    <div class="col-md-6 bordertop">
        <h3>Bảng Giá</h3>

        <div class="form-group row">
            <label for="">Giá một đêm: </label>
            <p> ${{number_format($room->priceNight)}}/Night</p>
        </div>
        <div class="form-group row">
            <label for="">Giá cuối tuần : </label>
            <p> ${{number_format($room->priceWeekends)}}/Night</p>
        </div>
        <div class="form-group row">
            <label for="">Giá một tuần : </label>
            <p> ${{number_format($room->priceWeekly)}}/Week</p>
        </div>
        <div class="form-group row">
            <label for="">Phí dọn dẹp : </label>
            <p> ${{number_format($room->priceClearFee)}}/Turn</p>
        </div>
    </div>

</div>