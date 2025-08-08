@extends('backend.linkconec.linkadmin')
@section('linkadmin')
@include('backend.layout.nav')
<div class="container-fluid page-body-wrapper" ng-app="role" ng-controller="roleController">
    @include('backend.layout.rightmenu')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Chỉnh sửa quyền</h4>
                        <p class="card-description">
                           
                        </p>
                        <form class="forms-sample" action="{{route('admin.update.roles',$data->id)}}"  method="post"  role="from">
                            @csrf  @method('PUT')
                            <div class="form-group">
                                <label for="exampleInputUsername1">Tên Role</label>
                                <input type="text" class="form-control"  name="name"  value="{{$data->name}}">
                            </div>
                            <div class="form-group" style="height:200px; overflow-y:auto;">
                                <lable>Chọn permission</lable>
                                <input type="text" class="form-control" ng-model="rname" style="border-radius:100px;"
                                    placeholder="Tìm kiếm nhanh">

                                <div class="form-check form-check-primary" ng-repeat="r in roles | filter:rname">
                                    <label class="form-check-label">
                                        <input type="checkbox" ng-checked="set_cheked(r)" ng-model="role" class=" form-check-input role-item" name="route[]"
                                            value="@{{r}}">
                                        @{{r }}
                                        <i class="input-helper "></i></label>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>

                            <label class="">
                                <input type="checkbox" id="checkll" >
                                Chọn tất cả
                            </label>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop()
@section('jsrolor')
<script src="https://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/
angular.js/1.8.0/angular.min.js"></script>
<script type="text/javascript">
var app = angular.module('role', []);
app.controller('roleController', function($scope) {
    var roles = '<?php echo json_encode($routes) ;?>';
    var permissions = '<?php echo json_encode($permissions) ;?>';
    $scope.roles = angular.fromJson(roles);
    $scope.role = angular.fromJson(permissions);

    $scope.set_cheked = function(r){
        for (var i= 0 ; i <  $scope.role.length; i++ ){
            if($scope.role[i] == r){
            return true;
            }
        }
        return false;
    }
});

$('#checkll').click(function(){
  
     var isChecked = $(this).is(':checked');
   
    $('.role-item').not(this).prop('checked', this.checked);
})

</script>

@stop()