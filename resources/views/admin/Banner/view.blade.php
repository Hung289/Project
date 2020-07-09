<div class="row" id="viewUser">
    <div class="col-md-6 khunganh">
        <img src="public/uploads/images/Banner/{{$banner->banner}}" alt="Ảnh của phòng">
    </div>
    <div class="col-md-6">
        <h3>Thông tin phòng</h3>
        <div class="form-group row">
            <label for="">ID banner: </label>
            <p> {{ $banner->id}}</p>
        </div>
        <div class="form-group row">
            <label for="">Tên banner: </label>
            <p> {{ $banner->name}}</p>
        </div>
        <div class="form-group row">
            <label for="">Trạng thái: </label>
            <p> {{($banner->status==0) ? "Hiện" :" Ẩn"}}</p>
        </div>
        <div class="form-group row">
            <label for="">description: </label>
            <p> {{$banner->content}}</p>
        </div>
    </div>

</div>