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
            <h3 class="card-title">Danh sách danh blog</h3>
            <!-- <form class="form-inline ml-3" style="float:right;margin-right:30px" action="{{route('admin.searchCateBlog')}}">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="text" placeholder="Tìm Kiếm" aria-label="Search" name="key">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit" style="background-color: black;">
                    <i class="fas fa-search" style="background-color: black;color: #FFF;"></i>
                  </button>
                </div>
              </div>
            </form> -->
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="myTable" class="table table-striped table-bordered dt-responsive nowrap" style="text-align: center;line-height: 100px;width:100%">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên danh mục blog</th>
                  <th>Hình Ảnh</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($CategoryBlog as $CateB)
                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{$CateB->name}}</td>
                  <td>
                    <img src="public/uploads/images/CategoryBlog/{{$CateB->image}}" alt="" style="width:250px;height:150px">
                  </td>
                  <td>
                    <button type="button" url="{{route('admin.categoryBlog.show',['categoryBlog'=>$CateB->id])}}" data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-success xemchitiet">
                      <i class="far fa-eye"></i>
                    </button>
                    <a href="{{route('admin.categoryBlog.edit',['categoryBlog'=>$CateB->id])}}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                    <form action="{{route('admin.categoryBlog.destroy',['categoryBlog'=>$CateB->id])}}" method="POST">
                      @csrf @method('DELETE')
                      <button type="submit" url="" class="btn btn-danger "><i class="fas fa-trash"></i></button>
                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </form>

                  </td>
                </tr>
                @endforeach()
              </tbody>
              <div style="float:right">

              </div>
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