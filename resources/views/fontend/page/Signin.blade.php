@extends('fontend.linkconnec.link')
@section('link')
<header class="header navbar-area">
    <div class="header-middle">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-7" style="display:flex;">

                    <a class="navbar-brand" href="{{route('Home')}}">
                        <img src="{{ URL::asset('assets/fontend/images/logo/logo.svg') }}" alt="Logo">

                    </a>

                    <div style="padding:7px 0 0 10px;">
                        <span style="color:black; font-size:25px;">Đăng nhập</span>
                    </div>

                </div>
                <div class="col-lg-6 col-md-6 d-xs-none">

                    <div class="main-menu-search" style="float:right;">

                        <a href="#">Cần trợ giúp?</a>

                    </div>

                </div>

            </div>
        </div>
    </div>

</header>
<div class="account-login section" >
    <div class="container">
    @if(Session::has('no'))
           <div class="alert alert-danger mx-auto" style="width:400px">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{Session::get('no')}}
            </div>
          @endif
          @if(Session::has('yes'))
           <div class="alert alert-success mx-auto" style="width:400px">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{Session::get('yes')}}
            </div>
          @endif

        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12"  >
                <form class="card login-form" method="post" action="{{route('postcus.login')}}" style=" box-shadow: 1px 0px 5px 2px ;">
                    @csrf
                    <div class="card-body" >
                        <div class="title">
                            <h3>Đăng nhập</h3>
                            <p>Bạn có thể đăng nhập bằng tài khoản mạng xã hội hoặc địa chỉ email của mình.</p>
                        </div>
                        <div class="form-group input-group">
                            <label for="reg-fn">Tên đăng nhập</label>
                            <input class="form-control" type="text" name="cus_name" id="reg-email" required="">
                        </div>
                        <div class="form-group input-group">
                            <label for="reg-fn">Mật khẩu </label>
                            <input class="form-control" type="password" name="password" id="reg-pass" required="">
                        </div>
                        <div class="d-flex flex-wrap justify-content-between bottom-content">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input width-auto" id="remember" value="1"
                                    name="remember">
                                <label class="form-check-label">Remember me</label>
                            </div>
                            <a class="lost-pass" href="{{route('cus.forgetpassword')}}">Quên mật khẩu?</a>
                        </div>
                        <div class="button">
                            <button class="btn" type="submit">Đăng nhập</button>
                        </div>
                        <p class="outer-link"> Bạn không có tài khoản? <a href="{{route('cus.register')}}">Đăng ký</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('fontend.layout.footer')
@stop()