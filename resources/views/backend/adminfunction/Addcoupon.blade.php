@extends('backend.linkconec.linkadmin')
@section('linkadmin')
@include('backend.layout.nav')
<div class="container-fluid page-body-wrapper">
    @include('backend.layout.rightmenu')
    <div class="main-panel">
    <div class="content-wrapper">
        @if(Auth::check())
        <div class="page-header">
            <h3 class="page-title">
                HI Admin {{ Auth::user()->user_name }}
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Forms</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Basic elements</li>
                </ol>
            </nav>
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Thêm mã giảm giá</h4>
                <p class="card-description">
                    Basic form layout
                </p>
                <form class="forms-sample" method="post" action="{{route('admin.save.coupon')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">mã:</label>
                                        <input type="text" class="form-control" id="coupon" name="code"
                                             style="border:1px solid  black"
                                            value="{{old('pro_name')}}" oninput="this.value = this.value.toUpperCase()">
                                            <a onclick="coupon()" class="btn btn-sm btn-info" href="javascript:void(0)">random</a>
                                        @error('pro_name')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">for order price from:</label>
                                        <input type="number" class="form-control" id="for" name="for"
                                            style="border:1px solid  black"
                                            value="{{old('for')}}">
                                        @error('for')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Số lượng mã:</label>
                                        <input type="number" class="form-control" id="price_sale" name="quantity"
                                             style="border:1px solid  black"
                                            value="{{old('price_sale')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Gía trị của mã :</label>
                                        <input type="number" class="form-control" id="value" name="value"
                                             style="border:1px solid  black"
                                            value="{{old('value')}}">
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="mb-3">Trạng thái :</label>
                                        <div class="radio">
                                            <label class="mr-3">
                                                <input type="radio" name="status" id="status" value="1">
                                                áp dụng ngay 
                                            </label>
                                            <label>
                                                <input type="radio" name="status" id="status" value="0">
                                                tạm chưa sử dụng
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-gradient-primary mr-2">thêm mã</button>
                            <button class="btn btn-light">hủy</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('backend.layout.footer')
</div>
</div>   
<script>
    function coupon() {
        let r = (Math.random() + 1).toString(36).substring(2);
        let ran = r.toUpperCase();
        document.getElementById('coupon').value = ran;
        
    }
</script>
@stop()