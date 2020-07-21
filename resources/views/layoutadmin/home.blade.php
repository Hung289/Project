@extends('layoutadmin.index')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">

          @if(Auth::check())
          <p>Chào mừng admin <b>{{Auth::User()->name}}</b> đến với trang quản trị</p>
          @endif
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{$totalOrder}}</h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{route('admin.order.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{$totalRoom}}<sup style="font-size: 20px"></sup></h3>
              <p>Tổng số phòng</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{route('admin.room.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-md-6">
          <!-- USERS LIST -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Latest Members</h3>

              <div class="card-tools">
                <span class="badge badge-danger">8 New Members</span>
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <ul class="users-list clearfix">
                @foreach($users as $us)
                <li>
                  <img src="public/uploads/images/user/{{$us->avatar}}" style="height: 100px;width:100px" alt="User Image">
                  <a class="users-list-name" href="#">{{$us->name}}</a>
                  <span class="users-list-date">{{$us->created_at}}</span>
                </li>
                @endforeach
              </ul>
              <!-- /.users-list -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-center">
              <a href="{{route('admin.user.index')}}">View All Users</a>
            </div>
            <!-- /.card-footer -->
          </div>
          <!--/.card -->
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Recently Added Products</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <ul class="products-list product-list-in-card pl-2 pr-2">
                @foreach($rooms as $room)
                <li class="item">
                  <div class="product-img">
                    @foreach($roomImage as $rI)
                    <?php $check = ($rI->room_id == $room->id) ? $rI->image : ""?>
                    @if($check != "")
                    <img src="public/uploads/images/rooms/{{$check}}" alt="Product Image" class="img-size-50">
                    @break
                    @endif
                    @endforeach
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">{{$room->name}}
                      <span class="badge badge-primary float-right">${{number_format($room->priceNight)}}</span></a>
                    <span class="product-description">
                      {{$room->description}}
                    </span>
                  </div>
                </li>
                @endforeach
              </ul>
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-center">
              <a href="{{route('admin.room.index')}}" class="uppercase">View All Products</a>
            </div>
            <!-- /.card-footer -->
          </div>
        </div>

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->

  </section>
  <!-- /.content -->
</div>
@stop