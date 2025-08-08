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
                        <form class="forms-sample" action="{{route('admin.up.profile',$accoun->id )}}" method="POST"
                            role="from" enctype="multipart/form-data">
                            @csrf @method('PUT')
                            <div class="row">
                                <div class="col-md-7">

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tên</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="user_name" name="user_name"
                                                placeholder="Username" value="{{$accoun->user_name}}">
                                                @error('user_name')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="user_email" name="user_email"
                                                placeholder="Username" value="{{$accoun->user_email}}">
                                                @error('user_email')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                        </div>
                                       
                                    </div>

                                    <div class="form-group row " style="border-bottom:1px solid #ccd0da;">
                                        <label class="col-sm-3 col-form-label">Số điện thoại</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="user_phone" name="user_phone"
                                                placeholder="Username" value="{{$accoun->user_phone}}">
                                                @error('user_phone')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                        </div>
                                    </div>
                                    <div>

                                        <h4 class="card-title"> Đổi mật khẩu </h4>
                                        <p class="card-description">
                                            Để bảo mật tài khoản, vui lòng không chia sẻ mật khẩu cho người khác
                                        </p>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">NHập mật khảu cũ</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="passwordold" name="passwordold"
                                                value="">
                                                @error('passwordold')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                        </div>
                                       
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">NHập mật khảu mới</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="password" name="newpassword">
                                            @error('newpassword')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                        </div>
                                       
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">nhập lại mật khẩu</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="confirm_password"
                                                name="confirm_password">
                                                @error('confirm_password')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                        </div>
                                       
                                    </div>
                                    <button type="submit" class="btn btn-gradient-primary mr-2">Lưu</button>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group text-center">
                                        <label for="image" class="mb-3">Chọn ảnh</label> <br />
                                        <input type="file" name="image" id="select_img" placeholder="Ten danh mục"
                                            style="display: none;">
                                        @if($accoun->avatar && file_exists(public_path('avatars').'/'.$accoun->avatar ))
                                        <img src="{!! asset('avatars/'.$accoun->avatar ) !!}" id="show_img"
                                            style=" width:300px; height:300px;  border-style: dotted; border-width: thick; border-radius:100%;"
                                            alt="">
                                        @else
                                        <img src="https://www.kunimi-media.jp/wordpress/wp-content/themes/keni8-child/images/no-image.jpg"
                                            id="show_img"
                                            style=" width:300px; height:300px;  border-style: dotted;border-width: thick;border-radius:100%;"
                                            alt="">
                                        @endif
                                        @error('images')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>


                                </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>


    </div>
</div>
@stop()