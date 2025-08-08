@extends('fontend.linkconnec.link')
@section('link')
@include('fontend.layout.header')
@include('fontend.accessories.breadcrum')
<section class="checkout-wrapper section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="checkout-steps-form-style-1">
                    <ul id="accordionExample">
                        <li>
                            <h6 class="title" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                aria-expanded="true" aria-controls="collapseThree">
                                Thông tin cá nhân của bạn
                            </h6>
                            <section class="checkout-steps-form-content collapse show" id="collapseThree"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-form form-default">
                                            <label>Họ và tên</label>
                                            <div class="form-input form">
                                                <input type="text" name="cus_name" value="{{$accoun->cus_name}}"
                                                    disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="single-form form-default">
                                            <label>Email</label>
                                            <div class="form-input form">
                                                <input type="text" name="cus_email" value="{{$accoun->cus_email}}"
                                                    disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form form-default">
                                            <label>số điện thoại</label>
                                            <div class="form-input form">
                                                <input type="text" name="cus_phone" value="{{$accoun->cus_phone}}"
                                                    disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-checkbox checkbox-style-3">
                                            <input type="checkbox" id="checkbox-3">
                                            <label for="checkbox-3"><span></span></label>
                                            <p>My delivery and mailing addresses are the same.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form button">
                                            <button class="btn collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour" aria-expanded="false"
                                                aria-controls="collapseFour">next
                                                step</button>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </li>
                        <li>
                            <h6 class="title collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">Điạ chỉ giao hàng</h6>
                            <form action="{{route ('post.checkout')}}" method="post"> @csrf
                            <input type="hidden" name="total_price" value="{{$total2}}">
                            <input type="hidden" name="coupon" value="{{$code}}">
                                <section class="checkout-steps-form-content collapse" id="collapseFour"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample" style="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="single-form form-default">

                                                <div class="form-input form">
                                                    <input type="text" placeholder="Họ và tên" name="order_name"
                                                        id="order_name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form form-default">

                                                <div class="form-input form">
                                                    <input type="text" placeholder="Email" name="order_email"
                                                        id="order_email">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="single-form form-default">

                                                <div class="form-input form">
                                                    <input type="text" placeholder="Số điện thoại" name="order_phone"
                                                        id="order_phone">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form form-default">

                                                <div class="form-input form">
                                                    <input type="text" placeholder="Tỉnh/Thành phố" name="City">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form form-default">

                                                <div class="form-input form">
                                                    <input type="text" placeholder="Quận/Huyện" name="district">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form form-default">

                                                <div class="form-input form">
                                                    <input type="text" placeholder="Phường/Xã" name="commune">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-form form-default">

                                                <div class="form-input form">
                                                    <input type="text" placeholder="Đia Chị cụ thể" name="Address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-form form-default">

                                                <textarea name="order_note" id="order_note" name="order_note" class="form-control"
                                                    placeholder="Ghi chú đơn hàng"></textarea>

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="checkout-payment-option">
                                                <h6 class="heading-6 font-weight-400 payment-title">Select Delivery
                                                    Option</h6>
                                                <div class="payment-option-wrapper">
                                                    <div class="single-payment-option">
                                                        <input type="radio" name="shipping" checked="" id="shipping-1">
                                                        <label for="shipping-1">
                                                            <img src="{{ URL::asset('assets/fontend/images/shipping/shipping-1.png') }}"
                                                                alt="Sipping">
                                                            <p>Standerd Shipping</p>
                                                            <span class="price">30.000₫</span>
                                                        </label>
                                                    </div>
                                                    <div class="single-payment-option">
                                                        <input type="radio" name="shipping" id="shipping-2">
                                                        <label for="shipping-2">
                                                            <img src="{{ URL::asset('assets/fontend/images/shipping/shipping-2.png') }}"
                                                                alt="Sipping">
                                                            <p>Standerd Shipping</p>
                                                            <span class="price">30.000₫</span>
                                                        </label>
                                                    </div>
                                                    <div class="single-payment-option">
                                                        <input type="radio" name="shipping" id="shipping-3">
                                                        <label for="shipping-3">
                                                            <img src="{{ URL::asset('assets/fontend/images/shipping/shipping-3.png') }}"
                                                                alt="Sipping">
                                                            <p>Standerd Shipping</p>
                                                            <span class="price">30.000₫</span>
                                                        </label>
                                                    </div>
                                                    <div class="single-payment-option">
                                                        <input type="radio" name="shipping" id="shipping-4">
                                                        <label for="shipping-4">
                                                            <img src="{{ URL::asset('assets/fontend/images/shipping/shipping-4.png') }}"
                                                                alt="Sipping">
                                                            <p>Standerd Shipping</p>
                                                            <span class="price">30.000₫</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="steps-form-btn button">
                                                <button class="btn collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree">previous</button>
                                                <!-- <a href="javascript:void(0)" class="btn btn-alt">Save &amp; Continue</a> -->
                                                <button class=" btn btn-alt" type="submit"
                                                    >Save &amp; Continue</button>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </form>
                        </li>
                        <li>
                            <h6 class="title collapsed" data-bs-toggle="collapse" data-bs-target="#collapsefive"
                                aria-expanded="false" aria-controls="collapsefive">Payment Info</h6>
                            <section class="checkout-steps-form-content collapse " id="collapsefive"
                                aria-labelledby="headingFive" data-bs-parent="#accordionExample" style="">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="checkout-payment-form">
                                            <div class="single-form form-default">
                                                <label>Cardholder Name</label>
                                                <div class="form-input form">
                                                    <input type="text" placeholder="Cardholder Name">
                                                </div>
                                            </div>
                                            <div class="single-form form-default">
                                                <label>Card Number</label>
                                                <div class="form-input form">
                                                    <input id="credit-input" type="text"
                                                        placeholder="0000 0000 0000 0000">
                                                    <img src="{{ URL::asset('assets/fontend/images/shipping/card.png') }}"
                                                        alt="card">
                                                </div>
                                            </div>
                                            <div class="payment-card-info">
                                                <div class="single-form form-default mm-yy">
                                                    <label>Expiration</label>
                                                    <div class="expiration d-flex">
                                                        <div class="form-input form">
                                                            <input type="text" placeholder="MM">
                                                        </div>
                                                        <div class="form-input form">
                                                            <input type="text" placeholder="YYYY">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-form form-default">
                                                    <label>CVC/CVV <span><i
                                                                class="mdi mdi-alert-circle"></i></span></label>
                                                    <div class="form-input form">
                                                        <input type="text" placeholder="***">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-form form-default button">
                                                <button class="btn">pay now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="checkout-sidebar">
                    <div class="checkout-sidebar-coupon">
                        <p>Appy Coupon to get discount!</p>
                        <form action="{{route('use.coupon')}}" method="post">
                            @csrf
                            <div class="single-form form-default">
                                <div class="form-input form">
                                    <input type="text" placeholder="Coupon Code" name ="coupon" value="{{$cperr}}">
                                    @if($err)
                                        <small class="text-danger">{{$err}}</small>
                                    @endif
                                    <input type="hidden" name="totall" value="{{$totall}}">
                                </div>
                                <div class="button">
                                    <button class="btn">apply</button>
                                </div>
                                @if($code)
                                    <table class="table">
                                        <tr>
                                            <td>đang dùng mã: {{$code}}</td>
                                            <td> giảm : ${{$val}}</td>
                                            <td> <a href="{{route('Checkout')}}"><i class="lni lni-close"></i></a></td>
                                        </tr>
                                    </table>
                                @endif
                            </div>
                        </form>
                    </div>
                    <div class="checkout-sidebar-price-table mt-30">
                        <h5 class="title">Pricing Table</h5>
                        <div class="sub-total-price">
                            <div class="total-price">
                                <p class="value">Subotal Price:</p>
                                <p class="price">đ{{number_format($totall)}}</p>
                            </div>
                          
                            <div class="total-price discount">
                                <p class="value">coupon</p>
                                <p class="price">- đ {{$val}}</p>
                            </div>
                        </div>
                        <div class="total-payable">
                            <div class="payable-price">
                                <p class="value">Tổng cần thanh toán:</p>
                                <p class="price">đ{{number_format($total2)}}</p>
                            </div>
                        </div>
                        <div class="price-table-btn button">
                            <a href="javascript:void(0)" class="btn btn-alt">Checkout</a>
                        </div>
                    </div>
                    <div class="checkout-sidebar-banner mt-30">
                        <a href="product-grids.html">
                            <img src="{{ URL::asset('assets/fontend/images/banner/banner.jpg') }}" alt="#">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('fontend.layout.footer')
@stop()
@section('jschekout')
<script>
$('#checkbox-3').click(function() {
    var ischeck = $(this).is(':checked');
    if (ischeck) {
        var a = $('input[name="cus_name"]').val();
        var b = $('input[name="cus_email"]').val();
        var c = $('input[name="cus_phone"]').val();

        $('input[name="order_name"]').val(a)
        $('input[name="order_email"]').val(b)
        $('input[name="order_phone"]').val(c)
    } else {
        $('input[name="order_name"]').val()
        $('input[name="order_email"]').val()
        $('input[name="order_phone"]').val()
    }
})
</script>
@stop()