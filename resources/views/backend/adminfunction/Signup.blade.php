@extends('backend.linkconec.linkadmin')
@section('linkadmin')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row w-100">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo">
                            <img src=" {{ URL::asset('assets/backend/images/logo.svg') }}">
                        </div>
                        <h4>New here?</h4>
                         @if(Session::has('flas_ok'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  {{Session::get('flas_ok')}}
                  </div>
                  @endif 
                        <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                        <form class="pt-3" method="POST" action="{{ route('post.Signup') }}"  enctype="multipart/form-data" >
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="user_name" name="user_name"
                                    placeholder="Username">
                                 @error('user_name')
                    <small class="text-danger">{{$message}}</small>
                  @enderror 
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" id="user_email"
                                    name="user_email" placeholder="Email">
                                 @error('user_email')
                    <small class="text-danger">{{$message}}</small>
                  @enderror 
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="user_phone"
                                    name="user_phone" placeholder="NumberPhone">
                                 @error('user_phone')
                    <small class="text-danger">{{$message}}</small>
                  @enderror 
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="password"
                                    name="password" placeholder="Password">
                                 @error('password')
                    <small class="text-danger">{{$message}}</small>
                  @enderror 
                            </div>
                            <div class="form-group">
                                <label for="avatar" style="font-size:18px;">Chọn ảnh đại diện </label> <br />
                                <div>
                                    <input type="file" style="" name="avatar" id="avatar">
                                </div>
                                @error('avatar')
                    <small class="text-danger">{{$message}}</small>
                      @enderror 
                            </div>

                            <div class="mb-4">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" class="form-check-input" name="Conditions">
                                        I agree to all Terms & Conditions
                                    </label>
                                </div>
                            </div>
                            <div class="mt-3">
                                <button type="submit"
                                    class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">
                                    SIGN UP
                                </button>
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                                Already have an account? <a href="{{ route('backend.Signin') }}"
                                    class="text-primary">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
@stop()