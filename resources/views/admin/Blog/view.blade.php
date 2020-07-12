<div class="row" id="viewUser">
    <div class="col-md-6 khunganh">
        <label for="">Ảnh phòng</label>
        @foreach($blogImages as $blogI)
        <?php $check = ($blogI->blog_id == $blog->id) ? "$blogI->image" : "" ?>
        @if(!$check=="")
        <img src="public/uploads/images/Blog/{{$check}}" alt="Ảnh của phòng">
        @endif
        @endforeach

    </div>
    <div class="col-md-6">
        <h3>Thông tin phòng</h3>
        <div class="form-group row">
            <label for="">ID blog: </label>
            <p> {{ $blog->id}}</p>
        </div>
        <div class="form-group row">
            <label for="">Tên blog : </label>
            <p> {{ $blog->name}}</p>
        </div>
        <div class="form-group row">
            <label for="">Danh mục blog : </label>
            <p> {{ $blog->categoryBlog->name}}</p>
        </div>
        <div class="form-group row">
            <label for="">Admin đăng bài : </label>
            <p> {{ $blog->user->name}}</p>
        </div>
        <div class="form-group row">
            <label for="">Trạng thái : </label>
            <p> {{ ($blog->status== 0 ) ? "Hiện" : "Ẩn"}}</p>
        </div>
        <div class="form-group row">
            <label for="">Bài viết mới/cũ : </label>
            <p> {{($blog->new == 0)?'Mới':'Cũ'}}</p>
        </div>
        <div class="form-group row">
            <label for="">Tiêu đề : </label>
            <p> {!! $blog->title !!}</p>
        </div>
        <div class="form-group row">
            <label for="">Nội dung : </label>
            <p> {!! $blog->content !!}</p>
        </div>
    </div>

</div>