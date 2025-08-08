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
                        <span style="color:black; font-size:25px;">Đặt lại mật khẩu mới</span>
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
    @if(Session::has('success'))
           <div class="alert alert-success mx-auto" style="width:400px">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{Session::get('success')}}
            </div>
          @endif
          @if(Session::has('erro'))
           <div class="alert alert-success mx-auto" style="width:400px">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{Session::get('erro')}}
            </div>
          @endif
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12"  >
                <form class="card login-form" method="post" action="" style=" box-shadow: 1px 0px 5px 2px ;">
                    @csrf
                    <div class="card-body text-center" >
                        <div class="title">
                            <h3>Đặt lại mật khẩu</h3>
                          
                        </div>
                       
                       
                        <div class="form-group input-group">
                          
                            <input class="form-control" type="password" name="newpassword" id="reg-email"   placeholder="nhập mật khẩu mới"required="">
                        
                        </div>
                        <div class="form-group input-group">
                          
                          <input class="form-control" type="password" name="confirm_password" id="reg-email" placeholder="nhập lại mật khẩu mới" required="">
                     
                      </div>
                      <div class="title text-center">
                            <span>Quay lại đăng nhập</span>
                          
                        </div>
                    
                      
                      
                        <div class="button">
                            <button class="btn" type="submit">Tiếp Theo</button>
                        </div>
                     
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('fontend.layout.footer')
@stop()