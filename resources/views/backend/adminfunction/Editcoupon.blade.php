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
                <h4 class="card-title">Sửa mã </h4>
                <p class="card-description">
                    Basic form layout
                </p>
                <form class="forms-sample" method="post" action="{{route('admin.update.coupon',$coupon->id)}}" enctype="multipart/form-data">
                    @csrf @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Tên mã:</label>
                                        <input type="text" class="form-control" id="coupon" name="code"
                                            placeholder="code" style="border:1px solid  black"
                                            value="{{$coupon->code}}" oninput="this.value = this.value.toUpperCase()">
                                            <a onclick="coupon()" class="btn btn-sm btn-info" href="javascript:void(0)">random</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">for order price from:</label>
                                        <input type="number" class="form-control" id="price" name="for"
                                            placeholder="Username" style="border:1px solid  black"
                                            value="{{$coupon->for}}">
                                        @error('price')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">số lượng:</label>
                                        <input type="number" class="form-control" id="price_sale" name="quantity"
                                            placeholder="Username" style="border:1px solid  black"
                                            value="{{$coupon->quantity}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">giá trị của mã:</label>
                                        <input type="number" class="form-control" id="favorite" name="value"
                                            placeholder="Username" style="border:1px solid  black"
                                            value="{{$coupon->value}}">
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="mb-3">Trạng thái :</label>
                                        <div class="radio">
                                            <label class="mr-3">
                                                <input type="radio" name="status" id="status" value="1" {{$coupon->status == 1 ? 'checked' : ''}}>
                                                áp dụng ngay 
                                            </label>
                                            <label>
                                                <input type="radio" name="status" id="status" value="0" {{$coupon->status == 0 ? 'checked' : ''}}>
                                                tạm chưa sử dụng
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-gradient-primary mr-2">Cập nhật</button>
                            <button class="btn btn-light">Hủy</button>
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