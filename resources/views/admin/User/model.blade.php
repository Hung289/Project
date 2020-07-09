<div class="row" id="viewUser">
    <div class="col-md-6 khunganh">
        <label for="">Ảnh đại diện</label>
        <img src="public/uploads/images/user/{{$user->avatar}}" alt="">
    </div>
    <div class="col-md-6">
        <div class="form-group row">
            <label for="">ID người dùng: </label>
            <p> {{ $user->id}}</p>
        </div>
        <div class="form-group row">
            <label for="">Tên : </label>
            <p> {{ $user->name}}</p>
        </div>
        <div class="form-group row">
            <label for="">Email : </label>
            <p> {{ $user->email}}</p>
        </div>
        <div class="form-group row">
            <label for="">Phone : </label>
            <p> {{ $user->phone}}</p>
        </div>
        <div class="form-group row">
            <label for="">Chức vụ : </label>
            <p>{{ ($user->level == 0) ? "Super Admin" : (($user->level == 1) ? 'Admin' : 'Thường đân')}}</p>
        </div>
    </div>
</div>