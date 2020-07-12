@extends('layoutadmin.index')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

  </section>
  <!-- Main content -->

  
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Danh sách danh mục dịch vụ</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="myTable" class="table table-striped table-bordered dt-responsive nowrap" style="text-align: center;line-height: 100px;width:100%">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên danh mục dịch vụ</th>
                  <th>Hình Ảnh</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($cateService as $CS)
                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{$CS->name}}</td>
                  <td>
                    <img src="public/uploads/images/CategoryService/{{$CS->image}}" alt="" style="width:120px;height:80px">
                  </td>
                  <td>
                    <button type="button" url="{{route('admin.categoryService.show',['categoryService'=>$CS->id])}}" data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-success xemchitiet">
                      <i class="far fa-eye"></i>
                    </button>
                  </td>
                </tr>
                @endforeach
              </tbody>

            </table>

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

@stop