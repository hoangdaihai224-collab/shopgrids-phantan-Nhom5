@extends('fontend.linkconnec.link')
@section('link')
@include('fontend.layout.header')
@include('fontend.accessories.banner')


<section class="featured-categories section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Danh mục nổi bật</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">

                <div class="single-category">
                    <h3 class="heading">TV &amp; Audios</h3>
                    <ul>
                        <li><a href="product-grids.html">Smart Television</a></li>
                        <li><a href="product-grids.html">QLED TV</a></li>
                        <li><a href="product-grids.html">Audios</a></li>
                        <li><a href="product-grids.html">Headphones</a></li>
                        <li><a href="product-grids.html">View All</a></li>
                    </ul>
                    <div class="images">
                        <img src="{{ URL::asset('assets/fontend/images/featured-categories/fetured-item-1.png') }}"
                            alt="#">
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12">

                <div class="single-category">
                    <h3 class="heading">Desktop &amp; Laptop</h3>
                    <ul>
                        <li><a href="product-grids.html">Smart Television</a></li>
                        <li><a href="product-grids.html">QLED TV</a></li>
                        <li><a href="product-grids.html">Audios</a></li>
                        <li><a href="product-grids.html">Headphones</a></li>
                        <li><a href="product-grids.html">View All</a></li>
                    </ul>
                    <div class="images">
                        <img src="{{ URL::asset('assets/fontend/images/featured-categories/fetured-item-2.png') }}"
                            alt="#">
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12">

                <div class="single-category">
                    <h3 class="heading">Cctv Camera</h3>
                    <ul>
                        <li><a href="product-grids.html">Smart Television</a></li>
                        <li><a href="product-grids.html">QLED TV</a></li>
                        <li><a href="product-grids.html">Audios</a></li>
                        <li><a href="product-grids.html">Headphones</a></li>
                        <li><a href="product-grids.html">View All</a></li>
                    </ul>
                    <div class="images">
                        <img src="{{ URL::asset('assets/fontend/images/featured-categories/fetured-item-3.png') }}"
                            alt="#">
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12">

                <div class="single-category">
                    <h3 class="heading">Dslr Camera</h3>
                    <ul>
                        <li><a href="product-grids.html">Smart Television</a></li>
                        <li><a href="product-grids.html">QLED TV</a></li>
                        <li><a href="product-grids.html">Audios</a></li>
                        <li><a href="product-grids.html">Headphones</a></li>
                        <li><a href="product-grids.html">View All</a></li>
                    </ul>
                    <div class="images">
                        <img src="{{ URL::asset('assets/fontend/images/featured-categories/fetured-item-4.png') }}"
                            alt="#">
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12">

                <div class="single-category">
                    <h3 class="heading">Smart Phones</h3>
                    <ul>
                        <li><a href="product-grids.html">Smart Television</a></li>
                        <li><a href="product-grids.html">QLED TV</a></li>
                        <li><a href="product-grids.html">Audios</a></li>
                        <li><a href="product-grids.html">Headphones</a></li>
                        <li><a href="product-grids.html">View All</a></li>
                    </ul>
                    <div class="images">
                        <img src="{{ URL::asset('assets/fontend/images/featured-categories/fetured-item-5.png') }}"
                            alt="#">
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12">

                <div class="single-category">
                    <h3 class="heading">Game Console</h3>
                    <ul>
                        <li><a href="product-grids.html">Smart Television</a></li>
                        <li><a href="product-grids.html">QLED TV</a></li>
                        <li><a href="product-grids.html">Audios</a></li>
                        <li><a href="product-grids.html">Headphones</a></li>
                        <li><a href="product-grids.html">View All</a></li>
                    </ul>
                    <div class="images">
                        <img src="{{ URL::asset('assets/fontend/images/featured-categories/fetured-item-6.png') }}"
                            alt="#">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="trending-product section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Sản phẩm thịnh hành</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($data as $homeproduct)
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-product">
                    <div class="product-image">
                        <img src="{!! asset('uploads/'.$homeproduct->images ) !!}" alt="#">
                        @if(!$homeproduct->price_sale)
                        <p></p>
                        @else
                        <span class="sale-tag">Sale
                            -{{floor(( $homeproduct->price - $homeproduct->price_sale ) * (100/$homeproduct->price))}}%</span>
                        @endif
                        <form class="forms-sample" method="post" action="{{ route('Cart.add',$homeproduct->id)}}">
                            @csrf
                            <div class="button">
                                <button type="submit" class="btn btn-gradient-primary mr-2">Add Product</button>
                            </div>
                        </form>

                    </div>
                    <div class="product-info">
                        <span class="category">{{$homeproduct->cat ? $homeproduct->cat->cat_name :""}}</span>
                        <h4 class="title" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; ">
                            <a href="{{route('Productdetail',$homeproduct->id)}}">{{$homeproduct->pro_name}}</a>
                        </h4>
                        <ul class="review">
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star"></i></li>
                            <li style="padding-left:10px;"><span style="color:#9c9c9c;">đã bán {{$homeproduct->sold}}</span></li>
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

            </div>


            @endforeach
        </div>
    </div>
</section>
<section class="banner section">
    <div class="container">
        <div class="row">
            @foreach($banner4 as $baner)
            <div class="col-lg-6 col-md-6 col-12">
                <div class="single-banner"
                    style="background-image:url({{ URL::asset('banner/'.$baner->image) }}); height:100%;">
                    <div class="content">
                        <h2>{{$baner->title}}</h2>
                        <p style="color:#888; width:50%;">{!! $baner->description !!} </p>
                        <div class="button">
                            <a href="product-grids.html" class="btn">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<section class="special-offer section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Ưu đãi đặc biệt</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12 col-12">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">

                        <div class="single-product">
                            <div class="product-image">
                                <img src="{{ URL::asset('assets/fontend/images/products/product-3.jpg') }}"
                                    alt="#">
                                <div class="button">
                                    <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <span class="category">Camera</span>
                                <h4 class="title">
                                    <a href="product-grids.html">WiFi Security Camera</a>
                                </h4>
                                <ul class="review">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><span>5.0 Review(s)</span></li>
                                </ul>
                                <div class="price">
                                    <span>399.000₫</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-4 col-12">

                        <div class="single-product">
                            <div class="product-image">
                                <img src="{{ URL::asset('assets/fontend/images/products/product-8.jpg') }}"
                                    alt="#">
                                <div class="button">
                                    <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <span class="category">Laptop</span>
                                <h4 class="title">
                                    <a href="product-grids.html">Apple MacBook Air</a>
                                </h4>
                                <ul class="review">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><span>5.0 Review(s)</span></li>
                                </ul>
                                <div class="price">
                                    <span>8.000.000₫</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-4 col-12">

                        <div class="single-product">
                            <div class="product-image">
                                <img src="{{ URL::asset('assets/fontend/images/products/product-6.jpg') }}"
                                    alt="#">
                                <div class="button">
                                    <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <span class="category">Speaker</span>
                                <h4 class="title">
                                    <a href="product-grids.html">Bluetooth Speaker</a>
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
                                    <span>7.000.000₫</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @foreach($banner5 as $baner)
                <div class="single-banner right"
                    style="background-image:url({{ URL::asset('banner/'.$baner->image) }});margin-top: 30px;">
                    <div class="content">
                        <h2>{{$baner->title}}</h2>
                        <p>{!! $baner->description !!}</p>
                        <div class="price">
                            <span>{{$baner->target}}</span>
                        </div>
                        <div class="button">
                            <a href="product-grids.html" class="btn">Shop Now</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="col-lg-4 col-md-12 col-12">
                <div class="offer-content">
                    <div class="image">
                        <img src="{{ URL::asset('assets/fontend/images/offer/offer-image.jpg')}}" alt="#">
                        <span class="sale-tag">-50%</span>
                    </div>
                    <div class="text">
                        <h2><a href="product-grids.html">Bluetooth Headphone</a></h2>
                        <ul class="review">
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><span>5.0 Review(s)</span></li>
                        </ul>
                        <div class="price">
                            <span>200.000₫</span>
                            <span class="discount-price">₫.400.000</span>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry incididunt ut
                            eiusmod tempor labores.</p>
                    </div>
                    <div class="box-head">
                        <div class="box">
                            <h1 id="days">533</h1>
                            <h2 id="daystxt">Days</h2>
                        </div>
                        <div class="box">
                            <h1 id="hours">01</h1>
                            <h2 id="hourstxt">Hours</h2>
                        </div>
                        <div class="box">
                            <h1 id="minutes">40</h1>
                            <h2 id="minutestxt">Minutes</h2>
                        </div>
                        <div class="box">
                            <h1 id="seconds">28</h1>
                            <h2 id="secondstxt">Secondes</h2>
                        </div>
                    </div>
                    <div style="background: rgb(204, 24, 24);" class="alert">
                        <h1 style="padding: 50px 80px;color: white;">We are sorry, Event ended ! </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home-product-list section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 custom-responsive-margin">
                <h4 class="list-title">Best Sellers</h4>

                <div class="single-list">
                    <div class="list-image">
                        <a href="product-grids.html"><img
                                src="{{ URL::asset('assets/fontend/images/home-product-list/01.jpg') }}"
                                alt="#"></a>
                    </div>
                    <div class="list-info">
                        <h3>
                            <a href="product-grids.html">GoPro Hero4 Silver</a>
                        </h3>
                        <span>2.870.999₫</span>
                    </div>
                </div>


                <div class="single-list">
                    <div class="list-image">
                        <a href="product-grids.html"><img
                                src="{{ URL::asset('assets/fontend/images/home-product-list/02.jpg') }}"
                                alt="#"></a>
                    </div>
                    <div class="list-info">
                        <h3>
                            <a href="product-grids.html">Puro Sound Labs BT2200</a>
                        </h3>
                        <span>950.000₫</span>
                    </div>
                </div>


                <div class="single-list">
                    <div class="list-image">
                        <a href="product-grids.html"><img
                                src="{{ URL::asset('assets/fontend/images/home-product-list/03.jpg') }}"
                                alt="#"></a>
                    </div>
                    <div class="list-info">
                        <h3>
                            <a href="product-grids.html">HP OfficeJet Pro 8710</a>
                        </h3>
                        <span>180.000₫</span>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-12 custom-responsive-margin">
                <h4 class="list-title">New Arrivals</h4>

                <div class="single-list">
                    <div class="list-image">
                        <a href="product-grids.html"><img
                                src="{{ URL::asset('assets/fontend/images/home-product-list/04.jpg') }}"
                                alt="#"></a>
                    </div>
                    <div class="list-info">
                        <h3>
                            <a href="product-grids.html">Canon EOS M50 Mirrorless Camera</a>
                        </h3>
                        <span>29.500.000₫</span>
                    </div>
                </div>


                <div class="single-list">
                    <div class="list-image">
                        <a href="product-grids.html"><img
                                src="{{ URL::asset('assets/fontend/images/home-product-list/05.jpg') }}"
                                alt="#"></a>
                    </div>
                    <div class="list-info">
                        <h3>
                            <a href="product-grids.html">iPhone 16 pro max 256 GB Titan Sa mạc</a>
                        </h3>
                        <span>30.090.000₫</span>
                    </div>
                </div>


                <div class="single-list">
                    <div class="list-image">
                        <a href="product-grids.html"><img
                                src="{{ URL::asset('assets/fontend/images/home-product-list/06.jpg') }}"
                                alt="#"></a>
                    </div>
                    <div class="list-info">
                        <h3>
                            <a href="product-grids.html">Microsoft Xbox One S</a>
                        </h3>
                        <span>23.800.000₫</span>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <h4 class="list-title">Top Rated</h4>

                <div class="single-list">
                    <div class="list-image">
                        <a href="product-grids.html"><img
                                src="{{ URL::asset('assets/fontend/images/home-product-list/07.jpg') }}"
                                alt="#"></a>
                    </div>
                    <div class="list-info">
                        <h3>
                            <a href="product-grids.html">Samsung Gear 360 VR Camera</a>
                        </h3>
                        <span>6.800.000₫</span>
                    </div>
                </div>


                <div class="single-list">
                    <div class="list-image">
                        <a href="product-grids.html"><img
                                src="{{ URL::asset('assets/fontend/images/home-product-list/08.jpg') }}"
                                alt="#"></a>
                    </div>
                    <div class="list-info">
                        <h3>
                            <a href="product-grids.html">Điện thoại Samsung Galaxy Z Fold7 5G 12GB/256GB</a>
                        </h3>
                        <span>44.990.000₫</span>
                    </div>
                </div>


                <div class="single-list">
                    <div class="list-image">
                        <a href="product-grids.html"><img
                                src="{{ URL::asset('assets/fontend/images/home-product-list/09.jpg') }}"
                                alt="#"></a>
                    </div>
                    <div class="list-info">
                        <h3>
                            <a href="product-grids.html">Zeus Bluetooth Headphones</a>
                        </h3>
                        <span>2.800.000₫</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<div class="brands">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                <h2 class="title">Thương hiệu phổ biến</h2>
            </div>
        </div>
        <div class="brands-logo-wrapper">
            <div class="tns-outer" id="tns2-ow">
                <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span
                        class="current">17 to 22</span> of 8</div>
                <div id="tns2-mw" class="tns-ovh">
                    <div class="tns-inner" id="tns2-iw">
                        <div class="brands-logo-carousel d-flex align-items-center justify-content-between  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal"
                            id="tns2" style="transform: translate3d(-53.3333%, 0px, 0px); transition-duration: 0s;">
                            @foreach($brand as $bran)
                            <div class="brand-logo tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                <img src="{!! asset('uploads/'.$bran->img_brand ) !!} " alt="#">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="blog-section section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2 style="font-weight: 200;">Tin tức mới nhất của chúng tôi</h2>
                    <p>There are many variations of passages of Lorem
                        Ipsum available, but the majority have suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">

                <div class="single-blog">
                    <div class="blog-img">
                        <a href="blog-single-sidebar.html">
                            <img src="{{ URL::asset('assets/fontend/images/blog/blog-1.jpg') }}" alt="#">
                        </a>
                    </div>
                    <div class="blog-content">
                        <a class="category" href="javascript:void(0)">eCommerce</a>
                        <h4>
                            <a href="blog-single-sidebar.html">What information is needed for shipping?</a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt.</p>
                        <div class="button">
                            <a href="javascript:void(0)" class="btn">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12">

                <div class="single-blog">
                    <div class="blog-img">
                        <a href="blog-single-sidebar.html">
                            <img src="{{ URL::asset('assets/fontend/images/blog/blog-2.jpg') }}" alt="#">
                        </a>
                    </div>
                    <div class="blog-content">
                        <a class="category" href="javascript:void(0)">Gaming</a>
                        <h4>
                            <a href="blog-single-sidebar.html">Interesting fact about gaming consoles</a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt.</p>
                        <div class="button">
                            <a href="javascript:void(0)" class="btn">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12">

                <div class="single-blog">
                    <div class="blog-img">
                        <a href="blog-single-sidebar.html">
                            <img src="{{ URL::asset('assets/fontend/images/blog/blog-3.jpg') }}" alt="#">
                        </a>
                    </div>
                    <div class="blog-content">
                        <a class="category" href="javascript:void(0)">Electronic</a>
                        <h4>
                            <a href="blog-single-sidebar.html">Electronics, instrumentation &amp; control engineering
                            </a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt.</p>
                        <div class="button">
                            <a href="javascript:void(0)" class="btn">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="shipping-info">
    <div class="container">
        <ul>

            <li>
                <div class="media-icon">
                    <i class="lni lni-delivery"></i>
                </div>
                <div class="media-body">
                    <h5>Free Shipping</h5>
                    <span>On order over 999.000₫</span>
                </div>
            </li>

            <li>
                <div class="media-icon">
                    <i class="lni lni-support"></i>
                </div>
                <div class="media-body">
                    <h5>24/7 Hỗ trợ.</h5>
                    <span>Live Chat Or Call.</span>
                </div>
            </li>

            <li>
                <div class="media-icon">
                    <i class="lni lni-credit-cards"></i>
                </div>
                <div class="media-body">
                    <h5>Online Payment.</h5>
                    <span>Secure Payment Services.</span>
                </div>
            </li>

            <li>
                <div class="media-icon">
                    <i class="lni lni-reload"></i>
                </div>
                <div class="media-body">
                    <h5>Easy Return.</h5>
                    <span>Hassle Free Shopping.</span>
                </div>
            </li>
        </ul>
    </div>
</section>

@include('fontend.layout.footer')
@stop()