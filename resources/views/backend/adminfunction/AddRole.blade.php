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
                        <h4 class="card-title">Thêm quyền</h4>
                        <p class="card-description">
                            
                        </p>
                        <form class="forms-sample" action="{{route('admin.save.roles')}}" method="POST" role="from">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputUsername1">Tên Role</label>
                                <input type="text" class="form-control" id="name" name="name" >
                            </div>
                            <div class="form-group" style="height:200px; overflow-y:auto;">
                                <lable>Chọn permission</lable>
                                <input type="text" class="form-control" ng-model="rname" style="border-radius:100px;"
                                    placeholder="Tìm kiếm nhanh">

                                <div class="form-check form-check-primary" ng-repeat="r in roles | filter:rname">
                                    <label class="form-check-label">
                                        <input type="checkbox"  class=" form-check-input role-items" name="route[]"
                                            value="@{{r}}">
                                        @{{r }}
                                        <i class="input-helper "></i></label>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                            <label class="">
                                <input type="checkbox" id="checkall" >
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/
angular.js/1.8.0/angular.min.js"></script>
<script type="text/javascript">
var app = angular.module('role', []);
app.controller('roleController', function($scope) {
    var roles = '<?php echo json_encode($routes) ;?>';
    $scope.roles = angular.fromJson(roles);
});

$('#checkall').click(function(){
  
  var isChecked = $(this).is(':checked');

 $('.role-items').not(this).prop('checked', this.checked);
});

</script>

@stop()