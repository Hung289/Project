@extends('layoutadmin.index')
@section('content')

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
            <h3 class="card-title">Danh sách danh mục dịch vụ</h3>
            <form class="form-inline ml-3" style="float:right;margin-right:30px" action="{{route('searchCateService')}}">
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
            <table id="example2" class="table table-bordered table-hover" style="text-align: center;margin-bottom:20px">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Tên danh mục dịch vụ</th>
                  <th>Hình Ảnh</th>
                  <th>Status</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach($cateService as $CS)
                <tr>
                  <td>{{$CS->id}}</td>
                  <td>{{$CS->name}}</td>
                  <td>
                    <img src="public/uploads/images/CategoryService/{{$CS->image}}" alt="" style="width:120px;height:80px">
                  </td>
                  @if($CS->status == 0)
                  <td>Ẩn</td>
                  @else
                  <td>Hiện</td>
                  @endif
                  <form action="{{route('categoryService.destroy',['categoryService'=>$CS->id])}}" method="POST">
                    @csrf @method('DELETE')
                    <td>
                      <a href="{{route('categoryService.edit',['categoryService'=>$CS->id])}}" class="btn btn-primary">sửa</a>
                    </td>
                    <td>
                      <button class="btn btn-danger">Xóa</button>
                    </td>
                  </form>

                </tr>
                @endforeach
              </tbody>

            </table>
            <div style="float:right">
              {!! $cateService->links() !!}
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

@stop