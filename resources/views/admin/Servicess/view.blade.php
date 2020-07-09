<div class="row" id="viewUser">
    <div class="col-md-6 khunganh">
        <label for="">Ảnh đại diện</label>
        <img src="public/uploads/images/servicess/{{$service->image}}" alt="Ảnh của dịch vụ">
    </div>
    <div class="col-md-6">
        <div class="form-group row">
            <label for="">ID dịch vụ: </label>
            <p> {{ $service->id}}</p>
        </div>
        <div class="form-group row">
            <label for="">Tên dịch vụ : </label>
            <p> {{ $service->name}}</p>
        </div>
        <div class="form-group row">
            <label for="">Giá dịch vụ : </label>
            <p> {{number_format($service->price)}}$</p>
        </div>
        <div class="form-group row">
            <label for="">Danh mục: </label>
            <p> {{ $service->categoryService->name}}</p>
        </div>
        <div class="form-group row">
            <label for="">Trạng thái : </label>
            <p>{{ ($service->status == 0) ? "Hiện" : "Ẩn"}}</p>
        </div>
        <div class="form-group row">
            <label for="">Description : </label>
            <p>{!! $service->description !!}</p>
        </div>
    </div>
</div>