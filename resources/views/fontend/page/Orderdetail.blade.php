@extends('fontend.linkconnec.link')
@section('link')
@include('fontend.layout.header2')
<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Danh sách Đơn Mua</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                    <li><a href="javascript:void(0)">Đơn Mua</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section class="product-grids section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="product-sidebar" >
                    <div class="single-widget search" style="border:none; border-right:1px solid #eee;">
                        @if(Auth::guard('cus')->check())
                        <div style="display:flex; margin-bottom:20px; border-bottom:1px solid #eee ; padding-bottom:10px;">
                            <div>
                                <img src="{!! asset('avatarcus/'.Auth::guard('cus')->user()->avatar  ) !!}"
                                    style="width:50px; height:50px; border-radius:100%;" alt="">
                            </div>
                            <div class="" style="margin-left:10px; color:black;">
                                <span class="mt-3 " >{{Auth::guard('cus')->user()->cus_name}}</span>
                            </div>
                        </div>
                        @endif
                        <form action="#">
                            <input type="text" placeholder="Search Here...">
                            <button type="submit"><i class="lni lni-search-alt"></i></button>
                        </form>
                        <p class="mt-3"> <i style='font-size:16px ' class='fas'>&#xf406;</i> Tài khoản của tôi</p>
                        <p class="mt-1"> <i style='font-size:16px; margin-right:5px;' class='far'>&#xf15c;</i> Đơn mua
                        </p>

                    </div>


                </div>
            </div>
            <div class="col-lg-9 col-12">
                <div class="cart-list-title" style="border-bottom:none; border-bottom-style:dashed;">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <a href="{{route('order')}}" style="float:left;font-size:20px; color:black; "><i class='fas'
                                    style="margin-right:5px;">&#xf053;</i>Trở lại</a>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div style="float:right; ">
                                <span>ID ĐƠN HÀNG {{$order->id}}</span>
                                <span class="_9aTWMs " style="margin:0px 16px;">|</span>
                                <span class="_3HECdl">Đơn hàng đã giao</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-grids-head">
                    <div class="p-4">
                        <span style="font-size:20px; color:rgba(0,0,0,.8); " class="mb-4">Địa chỉ Nhận hàng</span>
                        <p class="mb-2">{{$order->order_name}}</p>

                        <p>{{$order->order_phone}}</p>
                        <p>{{$order->Address}}</p>
                    </div>

                    <div class="cart-list-head" style="border:none;">
                        @foreach($order->ordes as $key => $data)
                        <div class="cart-single-list" style="border-top:1px solid #eee;">
                            <div class="row align-items-center">
                                <div class="col-lg-1 col-md-1 col-12">
                                    <a href="product-details.html"><img style="width:50px;height:50px;"
                                            src="{!!asset('uploads/'.$data->product->images)!!}" alt=""></a>
                                </div>
                                <div class="col-lg-8 col-md-8 col-12">
                                    <h5 class="product-name">
                                        <a href="">{{$data->product->pro_name}}</a>
                                    </h5>
                                    <p class="product-des">
                                        <span><em>Type:</em> Mirrorless</span>
                                        <span><em>Color:</em> </span>
                                    </p>
                                </div>


                                <div class="col-lg-3 col-md-3 col-12" style=" text-align: right;">

                                    <span class="mr-2">đ{{number_format($data->product->price_sale)}}</span>
                                    <s style="margin-left:6px;color:red;">đ{{number_format($data->product->price)}}</s>
                                </div>
                            </div>

                        </div>
                        @endforeach
                    </div>

                </div>
                <div class="_1l8TCL">
                    <div class="_1FDuJg">
                        <div class="_1bq31i"><span>Tổng tiền hàng</span></div>
                        <div class="_2aXD4G">
                            <div>290.000₫</div>
                        </div>
                    </div>
                    <div class="_1FDuJg">
                        <div class="_1bq31i"><span>Phí vận chuyển</span></div>
                        <div class="_2aXD4G">
                            <div>30.000₫</div>
                        </div>
                    </div>
                    <div class="_1FDuJg _3WktZ1">
                        <div class="_1bq31i _3zO_LL" style=" padding-top: 20px;"><span>Tổng số tiền</span></div>
                        <div class="_2aXD4G">
                            <div class="_1gMI9H" style="  color: #ee4d2d; font-size: 24px;">320.000₫</div>
                        </div>
                    </div>

                    <div class="_1FDuJg">
                        <div class="_1bq31i"><span>Phương thức thanh toán</span></div>
                        <div class="_2aXD4G">
                            <div>Thanh toán khi nhận hàng</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@include('fontend.layout.footer')
@stop()
<style>
._1FDuJg {
    display: flex;
    padding: 0 24px;
    border: 1px dotted rgba(0, 0, 0, .09);

    -webkit-justify-content: flex-end;
    text-align: end;
}

._1bq31i {
    padding: 13px 10px;
    color: rgba(0, 0, 0, .54);
    font-size: 12px;
}

._2aXD4G {
    padding: 13px 0 13px 10px;
    width: 240px;
    border-left: 1px dotted rgba(0, 0, 0, .09);
    -webkit-justify-content: flex-end;
    -moz-box-pack: end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    word-wrap: break-word;
    color: rgba(0, 0, 0, .8);
}
</style>