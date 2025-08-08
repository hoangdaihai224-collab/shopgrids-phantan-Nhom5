@extends('fontend.linkconnec.link')
@section('link')
@include('fontend.layout.header2')
<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Tài khoản của Tôi</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                    <li><a href="javascript:void(0)">Tài khoản</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="product-grids section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="product-sidebar">
                    <div class="single-widget search" style="border:none; border-right:1px solid #eee;">
                        @if(Auth::guard('cus')->check())
                        <div
                            style="display:flex; margin-bottom:20px; border-bottom:1px solid #eee ; padding-bottom:10px;">
                            <div>
                                <img src="{!! asset('avatarcus/'.Auth::guard('cus')->user()->avatar  ) !!}"
                                    style="width:50px; height:50px; border-radius:100%;" alt="">
                            </div>
                            <div class="" style="margin-left:10px; color:black;">
                                <span class="mt-3 ">{{Auth::guard('cus')->user()->cus_name}}</span>
                            </div>
                        </div>
                        @endif

                        <p class="mt-3"> <i style='font-size:16px ' class='fas'>&#xf406;</i> <a
                                href="{{route('account')}}" style="color:black;"> Tài khoản của tôi</a></p>
                        <p class="mt-1"> <i style='font-size:16px; margin-right:5px;' class='far'>&#xf15c;</i> <a
                                href="{{route('order')}}" style="color:black;"> Đơn mua</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-12">
                <div class="card" style="  box-shadow: 1px 0px 5px 2px ;">
                    <div class="card-body">
                        <h4 class="card-title">Hồ sơ </h4>
                        <p class="card-description mb-4">
                            Quản lý thông tin hồ sơ để bảo mật tài khoản
                        </p>
                        <form class="forms-sample"  action="{{route('up.accoun',$accoun->id )}}" 
                            method="POST" role="from" enctype="multipart/form-data">    @csrf @method('PUT')
                          
                            <div class="row">
                                <div class="col-md-7">

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tên đăng nhập</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="cus_name" name="cus_name"
                                                value="{{$accoun->cus_name}}">
                                            @error('cus_name')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="cus_email" name="cus_email"
                                                value="{{$accoun->cus_email}}">
                                            @error('cus_email')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row "
                                        style="border-bottom:1px solid #ccd0da; padding-bottom:20px;">
                                        <label class="col-sm-3 col-form-label">Số điện thoại</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="cus_phone" name="cus_phone"
                                                value="{{$accoun->cus_phone}}">
                                            @error('cus_phone')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="card-title"> Đổi mật khẩu </h4>
                                        <p class="card-description mb-2">
                                            Để bảo mật tài khoản, vui lòng không chia sẻ mật khẩu cho người khác
                                        </p>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">NHập mật khảu cũ</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="passwordold" name="passwordold">
                                            @error('passwordold')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">NHập mật khảu mới</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="newpassword"
                                                name="newpassword">
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
                                    <button type="submit" class="btn btn-gradient-primary mr-2"
                                        style=" background: #ee4d2d; color:white;">Lưu</button>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group text-center">
                                        <label for="image" class="mb-3">Chọn ảnh</label> <br>
                                        <input type="file" name="image" id="select_img" placeholder="Ten danh mục"
                                            style="display: none;">
                                        <img src="{!! asset('avatarcus/'.$accoun->avatar ) !!}" id="show_img"
                                            style=" width:300px; height:300px;  border-style: dotted; border-width: thick; border-radius:100%;"
                                            alt="">
                                    </div>


                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('fontend.layout.footer')
@stop()
<style>
.form-group {
    margin-bottom: 1.5rem;

}

label {
    text-align: end;
}
</style>