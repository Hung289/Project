@extends('layoutadmin.index')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>General Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">General Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content" ng-app="role" ng-controller="roleController">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-8">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thêm mới dịch vụ</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('admin.role.update',$role->id)}}" method="POST" name="pForm" enctype="multipart/form-data">
                                    @csrf @method("PUT")
                        <div class="card-body">
                                <div class="form-group">
                                    <label for="">Tên Nhóm Quyền</label>
                                    <input type="text" class="form-control" name="name" value="{{$role->name}}">
                                    @error('name')
                                    <small class="error help-block" style="color:red">{{$message}}</small>
                                    @enderror
                                </div>                               
                                <label for="">Routes</label>                                   
                                <input type="text" class="form-control" ng-model="rname">
                                <div class="form-group" style="height:300px;overflow-y:auto" >
                                    <div class="checkbox" ng-repeat="r in roles | filter:rname">
                                        <input type="checkbox" ng-checked="set_checked(r)" ng-model="role" class="role-item" name="route[]" value="@{{r}}">
                                        @{{r}}
                                    </div>
                                </div>
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" id="nuttao">Cập nhật role</button>
                                <label for="check-all"><input type="checkbox" id="check-all">Check All</label>
                            </div>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
                <div class="col-md-4">
                    <!-- general form elements disabled -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Xem Trước hình ảnh</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form role="form">

                                <div class="form-group">
                                    <div>
                                        <div id="preview"></div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
</div>
@stop()
@section('js')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.0/angular.min.js">
</script>
<script type="text/javascript">
    var app = angular.module('role', []);
    app.controller('roleController', function($scope) {
        var roles = '<?php echo json_encode($routes); ?>';
        var permissions = '<?php echo json_encode($permissions); ?>';
        $scope.roles = angular.fromJson(roles);
        $scope.role = angular.fromJson(permissions);

        $scope.set_checked = function(r) {
            for (var i = 0; i < $scope.role.length; i++) {
                if($scope.role[i] == r){
                    return true;
                }
            }
            return false;
        }
    })



    //Jquery check all
    $('#check-all').click(function(){
        var isChecked = $(this).is(':checked');
        if(isChecked){
            $('.role-item').attr('checked',true);
        }else{
            $('.role-item').attr('checked',false);
        }
    })
</script>
@stop