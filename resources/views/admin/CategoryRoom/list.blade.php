@extends('layoutadmin.index')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>DataTables</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">DataTables</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->

  @if(Session::has('errors'))
  <div class="alert alert-danger">
    {{Session::get('errors')}}
  </div>
  @endif
  @if(Session::has('success'))
  <div class="alert alert-success">
    {{Session::get('success')}}
  </div>
  @endif
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Danh sách danh mục phòng</h3>
            <form class="form-inline ml-3" style="float:right;margin-right:30px" action="{{route('searchCateRoom')}}">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="text" placeholder="Tìm Kiếm" aria-label="Search" name="key">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit" style="background-color: black;">
                    <i class="fas fa-search" style="background-color: black;color: #FFF;"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover" style="text-align: center;">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên danh mục phòng</th>
                  <th>Hình Ảnh</th>
                  <th>Status</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach($cateRoom as $cR)
                <tr>
                  <td>{{$cR->id}}</td>
                  <td>{{$cR->name}}</td>
                  <td>
                    <img src="public/uploads/images/CategoryRoom/{{$cR->image}}" alt="" style="width:250px;height:150px">
                  </td>
                  @if($cR->status == 1)
                  <td>Hiện</td>
                  @else
                  <td>Ẩn</td>
                  @endif
                  <td>
                    <a href="{{route('categoryRoom.edit',['categoryRoom'=>$cR->id])}}" class="btn btn-primary">Sửa</a>
                  </td>
                  <td>
                    <button type="button" url="{{route('categoryRoom.destroy',['categoryRoom'=>$cR->id])}}" class="btn btn-danger nutxoa">Xóa</button>
                  </td>
                </tr>
                @endforeach
              </tbody>

            </table>
            <div style="float:right">
              {!! $cateRoom->links() !!}
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<script>
  function myFunction() {
    confirm("Bạn có chắc muốn xóa chứ!");
  }
</script>

@stop