<div class="row" id="viewUser">
    <div class="col-md-6 khunganh">
        <label for="">Ảnh phòng</label>
        <img src="public/uploads/images/CategoryBlog/{{$categoryBlog->image}}" alt="Ảnh của phòng">
    </div>
    <div class="col-md-6">
        <h3>Thông tin phòng</h3>
        <div class="form-group row">
            <label for="">ID danh mục blog: </label>
            <p> {{ $categoryBlog->id}}</p>
        </div>
        <div class="form-group row">
            <label for="">Tên danh mục blog : </label>
            <p> {{ $categoryBlog->name}}</p>
        </div>
        <div class="form-group row">
            <label for="">Trạng thái : </label>
            <p> {{ ($categoryBlog->status == 0 ) ? "Ẩn" : "Hiện"}}</p>
        </div>
        <div class="form-group row">
            <label for="">Chú thích : </label>
            <p> {!! $categoryBlog->description !!}</p>
        </div>
    </div>
    
</div>