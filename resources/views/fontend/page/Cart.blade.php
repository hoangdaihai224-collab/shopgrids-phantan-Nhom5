@extends('fontend.linkconnec.link')
@section('link')
@include('fontend.layout.header')
@include('fontend.accessories.breadcrum')
<div class="shopping-cart section">
    <div class="container">
       
         @if($total > 0 )
        <div class="cart-list-head">

            <div class="cart-list-title">
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-12">
                    </div>
                    <div class="col-lg-2 col-md-3 col-12">
                        <p>Sản Phẩm</p>
                    </div>
                    <div class="col-lg-2 col-md-3 col-12">
                        <p></p>
                    </div>
                  
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>Số Lượng</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>Đơn Giá</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>Số Tiền</p>
                    </div>
                    <div class="col-lg-1 col-md-2 col-12">
                        <p>Thao tác</p>
                    </div>
                </div>
            </div>

            @foreach($data as $cart)
            <div class="cart-single-list">
                <div class="row align-items-center">
                    <div class="col-lg-1 col-md-1 col-12">
                        <a href="product-details.html"><img
                                src="{!! asset('uploads/'.$cart->product->images ) !!}" alt="#"></a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-12">
                        <h5 class="product-name"><a href="product-details.html">
                                {{$cart->product->pro_name}}</a></h5>
                    </div>
                    <div class="col-lg-4 col-md-2 col-12">
                        <form id="abc{{$cart->id}}" action="{{ route('quantity.update',$cart->id)}}">
                            <div class="row">
                                <div class="col-lg-6">
                                <p>Phân loại hàng</p>
                                    @if( $cart->classify != null )
                                    <div class="from group " style="display:flex;">
                                        <div>
                                          
                                            <select name="classify" id="classify" style="border:none;" onchange="updatecart({{$cart->id}})">
                                                @foreach($cart->cols as $color)
                                                <option value="{{$color->color_id}}"
                                                    {{$color->color_id == $cart->classify ? 'selected':""}}>
                                                    {{$color->colors->color_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div> 
                                    @else
                                    <div></div>
                                    @endif
                                    
                                    @if($cart->type_id != null)
                                     <div class="from group ">
                                        <div>  
                                            <select name="type" id="type" style="border:none;"  onchange="updatecart({{$cart->id}})">
                                            @foreach($cart->typecar as $item)
                                                <option value="{{$item->type_id}}" 
                                                    {{$item->type_id == $cart->type_id ? 'selected':""}}>
                                                    {{$item->tps->type}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                     @else
                                    <div></div>
                                    @endif
                                </div>
                                <div class="col-lg-6">
                                    <div class="from group " style="display:flex;">
                                        <div>
                                            <input class="form-control" type="number" name="Quantity"  id="Quantity" min="1" max="99" onchange="updatecart({{$cart->id}})"
                                                value="{{$cart->Quantity}}"
                                                style="width:70px;height:38px;text-align:center;" />

                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12 price">
                        @if($cart->price_sale > 0)
                        <span class="mr-2">{{number_format($cart->price_sale)}}₫</span>
                        <s style="margin-left:6px;">{{number_format($cart->price)}}₫</s>
                        @else
                        <span class="mr-2">{{number_format($cart->price)}}₫</span>
                        @endif
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <span
                            id="abc">đ {{number_format(($cart->price_sale ? $cart->price_sale : $cart->price)*$cart->Quantity)}}</span>
                    </div>
                    <div class="col-lg-1 col-md-2 col-12">
                        <form action="{{route('remove.cart',$cart->pro_id)}}" method="POST">
                            @method('DELETE') @csrf
                            <button type="submit" class="remove-item" style="border:none;"><i
                                    class="lni lni-close"></i></button>
                        </form>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
        <form action="{{route('clearall.cart')}}" method="POST">
            @method('DELETE') @csrf
            <div class="row">
                <div class="col-11 mx-auto">
                    <div style="margin-top:30px; float:right;">
                        <button type="submit" class="btn btn-danger">Xóa tất cả</button>

                    </div>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-12">

                <div class="total-amount">
                    <div class="row">
                        <div class="col-lg-8 col-md-6 col-12">
                            <div class="left">
                                <div class="coupon">
                                    <form action="#" target="_blank">
                                        <input name="Coupon" placeholder="nhập phiếu giảm giá của bạn">
                                        <div class="button">
                                            <button class="btn">áp dụng mã giảm giá</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="right" style="margin-top:20px;">
                                <ul>
                                    <li>Tổng thanh toán<span>đ{{number_format($toll)}}</span></li>
                             
                                    <li>Tiết kiệm<span>đ{{number_format($saveyou)}} </span></li>
                                
                                </ul>
                                <div class="button">
                                    <a href="{{ route('Checkout')}}" class="btn">Mua ngay</a>
                                    <a href="{{ route('Home')}}" class="btn btn-alt">Tiếp Tục mua sắm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="section-title" style=" margin-bottom: 0px;">
                    <h2 style="font-weight: 200;      font-size: 20px; color:#9e9c9b;   margin-bottom: 0px;">Sản phẩm tương tự</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 mx-auto ">
                <div class="owl-carousel  list">
                    @foreach($data1 as $homeproduct)
                    <!-- <div class="col-lg-3 col-md-6 col-12"> -->
                        <div class="single-product">
                            <div class="product-image">
                                <img src="{!! asset('uploads/'.$homeproduct->images ) !!}" alt="#">
                                @if(!$homeproduct->price_sale)
                                <p></p>
                                @else
                                <span class="sale-tag">Sale
                                    -{{floor(( $homeproduct->price - $homeproduct->price_sale ) * (100/$homeproduct->price))}}%</span>
                                @endif

                                <div class="button">
                                    <button type="submit" class="btn btn-gradient-primary mr-2">Add Product</button>
                                </div>


                            </div>
                            <div class="product-info">
                                <span class="category">Watches</span>
                                <h4 class="title">
                                    <a href="product-grids.html">{{$homeproduct->pro_name}}</a>
                                </h4>
                                <ul class="review">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star"></i></li>
                                    <li><span>4.0 Review(s)</span></li>
                                </ul>
                                <div class="price">
                                    @if($homeproduct->price_sale > 0)

                                    <span>{{number_format($homeproduct->price_sale)}}₫</span>
                                    <span class="discount-price">{{number_format($homeproduct->price)}}</span>
                                    @else
                                    <span>{{number_format($homeproduct->price)}}₫</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                    <!-- </div> -->
                    @endforeach

                </div>
            </div>
        </div>
         @else
         <div class="_1fP0AH _2tKeYb text-center" styl="">
             <div class="_1g-4gk mx-auto" style="  width: 6.75rem;  height: 6.125rem;">
             <img src="{{ URL::asset('assets/fontend/images/blog/car.png') }}" alt="">
            </div>
             <div class="h9wsC4 text-center mt-3" style="">Giỏ hàng của bạn còn trống</div>
         <a href="{{route('Home')}}">
             <button type="button" class="btn  mt-3" style="margin-bottom:150px; width:150px; background-color:#ee4d2d; color:white;" >Mua ngay</button>
             </a>
        </div>
         @endif
       
        <div class="row">
            <div class="col-12">
                <div class="section-title" style=" margin-bottom: 0px;">
                    <h2 style="font-weight: 200;      font-size: 20px; color:#9e9c9b;   margin-bottom: 0px;">Có thể bạn cúng thích</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 mx-auto ">
                <div class="owl-carousel  list">
                    @foreach($data1 as $homeproduct)
                    <!-- <div class="col-lg-3 col-md-6 col-12"> -->
                        <div class="single-product">
                            <div class="product-image">
                                <img src="{!! asset('uploads/'.$homeproduct->images ) !!}" alt="#">
                                @if(!$homeproduct->price_sale)
                                <p></p>
                                @else
                                <span class="sale-tag">Sale
                                    -{{floor(( $homeproduct->price - $homeproduct->price_sale ) * (100/$homeproduct->price))}}%</span>
                                @endif

                                <div class="button">
                                    <button type="submit" class="btn btn-gradient-primary mr-2">Add Product</button>
                                </div>


                            </div>
                            <div class="product-info">
                                <span class="category">Watches</span>
                                <h4 class="title">
                                    <a href="product-grids.html">{{$homeproduct->pro_name}}</a>
                                </h4>
                                <ul class="review">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star"></i></li>
                                    <li><span>4.0 Review(s)</span></li>
                                </ul>
                                <div class="price">
                                    @if($homeproduct->price_sale > 0)

                                    <span>{{number_format($homeproduct->price_sale)}}₫</span>
                                    <span class="discount-price">{{number_format($homeproduct->price)}}</span>
                                    @else
                                    <span>{{number_format($homeproduct->price)}}₫</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                    <!-- </div> -->
                    @endforeach







                </div>
            </div>
        </div>

    </div>
</div>

@include('fontend.layout.footer')
@stop()
@section('jscart')
<script>
$('.list').owlCarousel({
    margin: 20,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        600: {
            items: 3,
            nav: false
        },
        1000: {
            items: 4,
            nav: true,
        }
    }
});
function updatecart(a){
v ="abc"+a;
document.getElementById(v).submit();
};
</script>
@stop()