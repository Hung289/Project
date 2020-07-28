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
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thêm mới quyền</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('admin.role.store')}}" method="POST" name="pForm" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Tên Nhóm Quyền</label>
                                    <input type="text" class="form-control" name="name">
                                    @error('name')
                                    <small class="error help-block" style="color:red">{{$message}}</small>
                                    @enderror
                                </div>                               
                                <label for="">Routes</label>                                   
                                <input type="text" class="form-control" ng-model="rname">
                                <div class="form-group" style="height:300px;overflow-y:auto" >
                                    <div class="checkbox" ng-repeat="r in roles | filter:rname">
                                        <input type="checkbox" class="role-item" name="route[]" value="@{{r}}">
                                        @{{r}}
                                    </div>
                                </div>
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" id="nuttao">Tạo role</button>
                                <label for="check-all"><input type="checkbox" id="check-all">Check All</label>
                            </div>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        </form>
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
        $scope.roles = angular.fromJson(roles);
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