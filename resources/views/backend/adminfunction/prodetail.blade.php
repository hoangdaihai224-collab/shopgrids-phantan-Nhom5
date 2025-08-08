@extends('backend.linkconec.linkadmin')
@section('linkadmin')

@include('backend.layout.nav')
<div class="container-fluid page-body-wrapper">
    @include('backend.layout.rightmenu')
    <div class="main-panel">
        <div class="row" style="display:flex;">
            <div class="col-md-6" style="padding-left:100px;">

                <p>Tên sản phẩm: {{$product->pro_name}}</p><br>

                <p> Đơn giá : {{number_format($product->price)}}₫</p><br>

                <p> Gía giảm : {{number_format($product->price_sale)}}₫</p><br>

                <p> thương hiệu :{{$product->brand->brand_name}} </p><br>
                <p> đã thích  :{{$count}} </p><br>

                <p>Danh mục: {{$product->cat->cat_name}}</p><br>
                <p>đã bán: {{$product->cat->sold}}</p><br>

                
                <p>Kiểu sp: @foreach($product->types as $item)
                    {{$item->tps->type}} 
                    @endforeach</p><br>
                    
                <p>Màu: @foreach($product->color as $color)
                    {{$color->colors->color_name}} ,
                    @endforeach</p><br>

                <p> Tình hạng : {{$product->status== "1" ? 'Còn Hàng' : 'Hết Hàng'}}</p><br>

                <p>Ngày thêm : {{$product->created_at->format('d-m-Y  ')}}</p><br>

                <p> Cập nhật lần cuối : {{$product->updated_at->format('d-m-Y ')}}</p><br>
            </div>
            <div class="col-md-6">
                <img style="margin-bottom:20px " src="{!! asset('uploads/'.$product->images ) !!}" alt="">
                <div class="row" style="display:flex;">
                </div>
            </div>
        </div>
        <div class="row" style="padding-left:100px; display:flex;">
       
            @foreach($product->proImages as $images)
            <div class="col-md-3">
                <img id="img" src="{!! asset('uploads/'.$images->name_img ) !!}"
                    style=" width:200px;height:200px ;margin-bottom:20px" alt=""><br>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12" style="padding-left:100px;">
                <h6>Mô tả sản phẩm: </h6><br>
                <p>
                    {!! $product->description !!}
                </p>
            </div>
        </div>
        @include('backend.layout.footer')
    </div>
</div>
@stop()