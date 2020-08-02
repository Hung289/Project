@extends('layoutweb.index')
@section('content')


<section id="headernhochung" class="align-items-center">
    <div class="container">
        <div class="khoichu ">
            <h1 class="wow flipInX">Our Staffs</h1>
            <ul class="wow zoomIn">
                <li><a href="">Home</a></li>
                <li><i class="fas fa-angle-double-right"></i></li>
                <li>Our Staffs</li>
            </ul>
        </div>
    </div>
</section>

<section class="staffs-section section-padding">
    <div class="container">
        <div class="row">
            <!-- Single Staff -->
            @foreach($admins as $admin)
            @if($admin->level == 0 || $admin->level == 1)
            <div class="col-lg-3 col-md-4">
                <div class="staff-fact text-center">
                    <div class="staf-img" >
                        <img src="public/uploads/images/user/{{$admin->avatar}}" style="height:100%" alt="Staff">
                    </div>
                    <h4>{{$admin->name}}</h4>
                    <p class="staff-post">{{($admin->level == 0)? "Super Admin" : "Admin Đối tác"}}</p>
                </div>
            </div>
            @endif
            @endforeach
            <div class="paginateChung">
                {{$admins->links()}}
            </div>
        </div>
    </div>
</section>

@stop