<div class="row" id="viewUser">
    <div class="col-md-6 khunganh ">
        <img src="public/uploads/images/CategoryService/{{$categoryService->image}}" alt="Ảnh của phòng" style="width:100px">
    </div>
    <div class="col-md-6">
        <h3>Thông tin phòng</h3>
        <div class="form-group row">
            <label for="">ID danh mục dịch vụ: </label>
            <p> {{ $categoryService->id}}</p>
        </div>
        <div class="form-group row">
            <label for="">Tên danh mục dịch vụ: </label>
            <p> {{ $categoryService->name}}</p>
        </div>
        <div class="form-group row">
            <label for="">Trạng thái: </label>
            <p> {{ ($categoryService->status == 0) ? "Ẩn" : "Hiện" }}</p>
        </div>
        <div class="form-group row">
            <label for="">Chú thích: </label>
            <p> {!! $categoryService->description !!}</p>
        </div>
    </div>
</div>