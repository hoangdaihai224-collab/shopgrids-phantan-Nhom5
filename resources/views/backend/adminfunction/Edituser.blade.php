@extends('backend.linkconec.linkadmin')
@section('linkadmin')
@include('backend.layout.nav')
<div class="container-fluid page-body-wrapper" ng-app="role" ng-controller="roleController">
    @include('backend.layout.rightmenu')
    <div class="content-wrapper">
        <div class="row">

            <div class="col-md-10 grid-margin stretch-card mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Hồ sơ </h4>
                        <p class="card-description">
                            Quản lý thông tin hồ sơ để bảo mật tài khoản
                        </p>
                        <form class="forms-sample" action="{{route('admin.update.user',$user->id )}}" method="POST"
                            role="from">
                            @csrf @method('PUT')
                            <div class="row">
                                <div class="col-md-7">

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tên</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="user_name" name="user_name"
                                                placeholder="Username" value="{{$user->user_name}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="user_email" name="user_email"
                                                placeholder="Username" value="{{$user->user_email}}">
                                        </div>
                                        @error('user_email')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group row " style="border-bottom:1px solid #ccd0da;">
                                        <label class="col-sm-3 col-form-label">Số điện thoại</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="user_phone" name="user_phone"
                                                placeholder="Username" value="{{$user->user_phone}}">
                                        </div>
                                    </div>
                                    <!-- <div>

                                        <h4 class="card-title"> Đổi mật khẩu </h4>
                                        <p class="card-description">
                                            Để bảo mật tài khoản, vui lòng không chia sẻ mật khẩu cho người khác
                                        </p>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">NHập mật khảu mới</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="password" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">nhập lại mật khẩu</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="confirm_password"
                                                name="confirm_password">
                                        </div>
                                    </div> -->
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group" style="height:200px; overflow-y:auto;">
                                        <lable>Chọn Quyền</lable>
                                        @foreach($roles as $role)
                                        <?php  $checked = in_array($role->name,$role_assimen) ? 'checked' : ''; ?>
                                        <div class="form-check form-check-primary">
                                            <label class="form-check-label">
                                                <input type="checkbox" id="role-item" {{$checked}}
                                                    class=" form-check-input" name="role[]" value="{{$role->id}}">
                                                {{$role->name}}
                                                <i class="input-helper "></i></label>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>

                                <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>


    </div>
</div>
@stop()
<!-- @section('jsrolor')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/
angular.js/1.8.0/angular.min.js"></script>
<script type="text/javascript">
var app = angular.module('role', []);
app.controller('roleController', function($scope) {
    var roles = '';
    $scope.roles = angular.fromJson(roles);
});

// $('#check-allac').click(function(){
//     var isChecked = $(this).is('checked');
//     alert(isChecked);
//     // $('.role-item').not(this).prop('checked', this.checked);
// })
// function myFunction() {
//     var checkBox = document.getElementById("checkll");
//   var text = document.getElementById("role-item ");
//   if (checkBox.checked == true){
//     text = checked;
//   } else {
//      text = '';
//   }
// }
</script>

@top() -->