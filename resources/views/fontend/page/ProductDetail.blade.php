@extends('fontend.linkconnec.link')
@section('link')
@include('fontend.layout.header')
@include('fontend.accessories.breadcrum')
<section class="item-details section">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="product-images">
                        <main id="gallery">
                            <div class="main-img">
                                <img src="{!! asset('uploads/'.$pro->images ) !!}" style="height:450px;"
                                    id="current" alt="#">
                            </div>
                            <div class="images">
                                <img src="{!! asset('uploads/'.$pro->images ) !!}" id="current" class="img"
                                    style="height:80px;" alt="#">
                                @foreach($pro->proImages as $img)

                                <img src="{!!asset('uploads/'.$img->name_img)!!}" class="img"
                                    style="height:80px;" alt="#">
                                @endforeach
                            </div>
                        </main>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-12">
                    <div class="product-info" style="height:550px;">
                        <form action="{{ route('Cart.add',$pro->id)}}" method="post">
                            @csrf
                            <h2 class="title">{{$pro->pro_name}}</h2>
                            <p class="category"><i class="lni lni-tag"></i> {{$pro->sold}}:<a
                                    href="javascript:void(0)">Đã bán</a></p>
                            @if( $pro->price_sale > 0)
                            <h3 class="price">
                                đ {{number_format($pro->price_sale)}}<span>đ {{number_format($pro->price)}}</span>
                            </h3>

                            @else
                            <h3 class="price">
                                đ {{number_format($pro->price)}}
                            </h3>
                            @endif
                            <p class="info-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                            <div class="row checkout-steps-form-style-1">

                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="checkout-payment-option">
                                        <h6 class="heading-6 font-weight-400 payment-title">Phân loại:
                                        </h6>
                                        <div class="payment-option-wrapper">
                                            @foreach($pro->types as $i=>$data)
                                            <div class="single-payment-option" style="width:auto; ">
                                                <input type="radio" name="type" id="type-{{$i}}"
                                                    value="{{$data->type_id}}" required>
                                                <label for="type-{{$i}}" style="padding:5px;">

                                                    <p> {{$data->type_id ? $data->tps->type : ""}}</p>

                                                </label>
                                            </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="checkout-payment-option">
                                        <h6 class="heading-6 font-weight-400 payment-title">Màu sắc:
                                        </h6>
                                        <div class="payment-option-wrapper">
                                            @foreach($pro->color as $key=>$colo)
                                            <div class="single-payment-option" style="width:auto; ">
                                                <input type="radio" name="classify" id="shipping-{{$key}}"
                                                    value="{{$colo->color_id}}" required>
                                                <label for="shipping-{{$key}}" style="padding:5px;">

                                                    <p> {{$colo->color_id ? $colo->colors->color_name : ""}}</p>

                                                </label>
                                            </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">

                                    <div class="form-group quantity" style=" display:flex;">
                                        <div style="	padding-top:13px;">
                                            <h6>Số lượng</h6>
                                        </div>
                                        <input type="number" class="form-control" name="Quantity" id="" value='1'
                                            max="99" min="1"
                                            style="width:110px;height:40px;text-align:center; margin-left:40px;">
                                        <div style="	padding-top:13px; padding-left:23px;">
                                            <span>{{$pro->warehouse}} Sản phẩm có sẵn</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <div class="row align-items-end">
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="button cart-button">
                                            <button class="btn" style="width: 100%;">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="wish-button">
                                            <button class="btn"><i class="lni lni-reload"></i> Compare</button>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="wish-button">
                                            <a href="{{route('favorite',$pro->id)}}" class="btn"
                                                onclick="myfavorite()"><i id='heart' style="color:red;9"
                                                    class="lni lni-heart{{$favorite}}"></i> Đã thích
                                                ({{$count}})</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-details-info">
            <div class="single-block">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="info-body custom-responsive-margin">
                            <h4>Mô tả sản phẩm</h4>
                            <p>{!! $pro->description !!}</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="single-block give-review">
                        <h4>4.5 (Overall)</h4>
                        <ul>
                            <li>
                                <span>5 stars - 38</span>
                                <i class="lni lni-star-filled"></i>
                                <i class="lni lni-star-filled"></i>
                                <i class="lni lni-star-filled"></i>
                                <i class="lni lni-star-filled"></i>
                                <i class="lni lni-star-filled"></i>
                            </li>
                            <li>
                                <span>4 stars - 10</span>
                                <i class="lni lni-star-filled"></i>
                                <i class="lni lni-star-filled"></i>
                                <i class="lni lni-star-filled"></i>
                                <i class="lni lni-star-filled"></i>
                                <i class="lni lni-star"></i>
                            </li>
                            <li>
                                <span>3 stars - 3</span>
                                <i class="lni lni-star-filled"></i>
                                <i class="lni lni-star-filled"></i>
                                <i class="lni lni-star-filled"></i>
                                <i class="lni lni-star"></i>
                                <i class="lni lni-star"></i>
                            </li>
                            <li>
                                <span>2 stars - 1</span>
                                <i class="lni lni-star-filled"></i>
                                <i class="lni lni-star-filled"></i>
                                <i class="lni lni-star"></i>
                                <i class="lni lni-star"></i>
                                <i class="lni lni-star"></i>
                            </li>
                            <li>
                                <span>1 star - 0</span>
                                <i class="lni lni-star-filled"></i>
                                <i class="lni lni-star"></i>
                                <i class="lni lni-star"></i>
                                <i class="lni lni-star"></i>
                                <i class="lni lni-star"></i>
                            </li>
                        </ul>

                        <button type="button" class="btn review-btn" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Leave a Review
                        </button>
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="single-block">
                        <div class="reviews">
                            <h4 class="title">Latest Reviews</h4>

                            <div class="single-review">
                                <img src="{{ URL::asset('assets/fontend/images/blog/face21.jpg') }}" alt="#">
                                <div class="review-info">
                                    <h4>Awesome quality for the price
                                        <span>Jacob Hammond
                                        </span>
                                    </h4>
                                    <ul class="stars">
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor...</p>
                                </div>
                            </div>


                            <div class="single-review">
                                <img src="{{ URL::asset('assets/fontend/images/blog/face22.jpg') }}" alt="#">
                                <div class="review-info">
                                    <h4>My husband love his new...
                                        <span>Alex Jaza
                                        </span>
                                    </h4>
                                    <ul class="stars">
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor...</p>
                                </div>
                            </div>


                            <div class="single-review">
                                <img src="{{ URL::asset('assets/fontend/images/blog/face23.jpg') }}" alt="#">
                                <div class="review-info">
                                    <h4>I love the built quality...
                                        <span>Jacob Hammond
                                        </span>
                                    </h4>
                                    <ul class="stars">
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor...</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-4">
                <div class="" style=" margin-bottom: 0px; padding:0px; text-align: left;">
                    <h2 style="font-weight: 200;      font-size: 20px; color:#9e9c9b;   margin-bottom: 0px;">Có thể bạn
                        cúng thích <a href="" style="float:right; color:#E2482B;">xem tất cả <i style='font-size:17px;'
                                class='fas'>&#xf054;</i></a></h2>
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
</section>
<div class="modal fade review-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Leave a Review</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="review-name">Your Name</label>
                            <input class="form-control" type="text" id="review-name" required="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="review-email">Your Email</label>
                            <input class="form-control" type="email" id="review-email" required="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="review-subject">Subject</label>
                            <input class="form-control" type="text" id="review-subject" required="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="review-rating">Rating</label>
                            <select class="form-control" id="review-rating">
                                <option>5 Stars</option>
                                <option>4 Stars</option>
                                <option>3 Stars</option>
                                <option>2 Stars</option>
                                <option>1 Star</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="review-message">Review</label>
                    <textarea class="form-control" id="review-message" rows="8" required=""></textarea>
                </div>
            </div>
            <div class="modal-footer button">
                <button type="button" class="btn">Submit Review</button>
            </div>
        </div>
    </div>
</div>


@include('fontend.layout.footer')
@stop()
@section('jscart')
<script>
function myfavorite() {
    let a = document.getElementById('heart');
    if (a.getAttribute('class') == 'lni lni-heart-filled') {
        a.setAttribute("class", "lni lni-heart");
    } else {
        a.setAttribute("class", "lni lni-heart-filled");
    }
}
</script>
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
$('#html').click(function() {
    $('#abc').click().css({
        "border": "1px solid yellow"
    });

});
</script>

@stop()