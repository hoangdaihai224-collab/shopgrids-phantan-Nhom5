@extends('fontend.linkconnec.link')
@section('link')
<div class="account-login section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                <div class="register-form">
                    <div class="title">
                        <h3>No Account? Register</h3>
                        <p>Registration takes less than a minute but gives you full control over your orders.</p>
                    </div>
                    <form class="row" method="post" action="{{ route('cuspost.register') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-fn">Name</label>
                                <input class="form-control" name="cus_name"  id="reg-fn" >
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-email">E-mail Address</label>
                                <input class="form-control" name="cus_email" id="cus_email"type="email" id="reg-email">
                            </div>
                        </div>
                       
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-phone">Phone Number</label>
                                <input class="form-control" name="cus_phone"  type="text" id="reg-phone">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-pass">Password</label>
                                <input class="form-control" type="password"   name="password" id="reg-pass" >
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-pass-confirm">Confirm Password</label>
                                <input class="form-control"  name="Confirm_Password" id="reg-pass-confirm" >
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-phone">Chọn ảnh đại diện </label>
                                <input type="file" style="" name="image" id="image">
                            </div>
                        </div>
                       
                        <div class="button">
                            <button class="btn" type="submit">Register</button>
                        </div>
                        <p class="outer-link">Already have an account? <a href="login.html">Login Now</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop()