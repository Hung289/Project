@extends('layoutadmin.index')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
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
            
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="myTable" class="table table-striped table-bordered dt-responsive nowrap" style="text-align: center;line-height: 100px;width:100%">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên danh mục phòng</th>
                  <th>Hình Ảnh</th>
                  <th>Action</th>
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
                  <td>
                    <button type="button" url="{{route('categoryRoom.show',['categoryRoom'=>$cR->id])}}" data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-success xemchitiet">
                      <i class="far fa-eye"></i>
                    </button>
                    <a href="{{route('categoryRoom.edit',['categoryRoom'=>$cR->id])}}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                    <button type="button" url="{{route('categoryRoom.destroy',['categoryRoom'=>$cR->id])}}" class="btn btn-danger nutxoa"><i class="fas fa-trash"></i></button>
                  </td>
                </tr>
                @endforeach
              </tbody>

            </table>
            <div style="float:right">
              
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
  @include('admin.modal')
</div>
<script>
  function myFunction() {
    confirm("Bạn có chắc muốn xóa chứ!");
  }
</script>

@stop