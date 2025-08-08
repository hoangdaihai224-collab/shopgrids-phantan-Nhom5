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
                <div class="product-sidebar">
                    <div class="single-widget search" style="border:none; border-right:1px solid #eee;">
                        @if(Auth::guard('cus')->check())
                        <div
                            style="display:flex; margin-bottom:20px; border-bottom:1px solid #eee ; padding-bottom:10px;">
                            <div>
                                <img src="{!! asset('avatarcus/'.Auth::guard('cus')->user()->avatar  ) !!}"
                                    style="width:50px; height:50px; border-radius:100%;" alt="">
                            </div>
                            <div class="" style="margin-left:10px; color:black;">
                                <span class="mt-3 ">{{Auth::guard('cus')->user()->cus_name}}</span>
                            </div>
                        </div>
                        @endif
                        <form action="#">
                            <input type="text" placeholder="Search Here...">
                            <button type="submit"><i class="lni lni-search-alt"></i></button>
                        </form>
                        <p class="mt-3"> <i style='font-size:16px ' class='fas'>&#xf406;</i> <a href="{{route('account')}}"
                                style="color:black;"> Tài khoản của tôi</a></p>
                        <p class="mt-1"> <i style='font-size:16px; margin-right:5px;' class='far'>&#xf15c;</i> <a
                                href="{{route('order')}}" style="color:black;"> Đơn mua</a>
                        </p>

                    </div>


                </div>
            </div>
            <div class="col-lg-9 col-12">
                <div class=" ZS1kj6 mb-3" style="box-shadow: 0 0 0 2px #f5f5f5;">
                    <a class="_2sowby " href="{{route('order')}}">
                        <span class="_2pSH8O">Tất cả</span>
                    </a>
                    <a class="_2sowby  " href="{{route('stats',1)}}">
                        <span class="_2pSH8O">Chờ xác nhận</span>
                    </a>
                    <a class="_2sowby" href="{{route('stats',2)}}">
                        <span class="_2pSH8O">Chờ lấy hàng</span>
                    </a>
                    <a class="_2sowby" href="{{route('stats',3)}}">
                        <span class="_2pSH8O">Đang giao</span>
                    </a>
                    <a class="_2sowby" href="{{route('stats',4)}}">
                        <span class="_2pSH8O">Đã giao</span>
                    </a>
                    <a class="_2sowby" href="{{route('stats',5)}}">
                        <span class="_2pSH8O">Đã Hủy</span>
                    </a>
                </div>
                <div class="product-grids-head">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID Đơn hàng</th>
                                    <th scope="col">Ngày đặt </th>
                                    <th scope="col">tổng Tiền </th>
                                    <th scope="col">số lượng </th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                @foreach($orders as $key => $purchase)
                                <tr>
                                    <th scope="row">{{$purchase->id}}</th>
                                    <td>{{$purchase->created_at->format('d-m-Y')}}</td>
                                    <td>đ.{{number_format($purchase->total())}}</td>
                                    <td>{{$purchase->quanti()}}</td>
                                    <td> @if($purchase->status==1)
                                        <span>Chờ xác nhận</span>
                                        @elseif($purchase->status==2)
                                        <span>đã xác nhận/Chờ lấy hàng</span>
                                        @elseif($purchase->status==3)
                                        <span>đang giao hàng</span>
                                        @elseif($purchase->status==4)
                                        <span>Đã giao / nhận hàng</span>
                                        @else
                                        <span>đã hủy</span>
                                        @endif
                                    </td>
                                    <td><a href="{{route('orderpur',$purchase->id)}}">xem</a></td>
                                </tr>
                                @endforeach
                              
                               


                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>

@include('fontend.layout.footer')
@stop()
<style>
    .ZS1kj6 {
    width: 100%;
    margin-bottom: 12px;
    display: flex;
    overflow: hidden;
    position: sticky;
    top: 0;
    z-index: 10;
    background: #fff;
    border-top-left-radius: 2px;
    border-top-right-radius: 2px;
}

._2sowby {
    cursor: pointer;
    user-select: none;
    padding: 16px 0;
    font-size: 16px;
    line-height: 19px;
    text-align: center;
    color: rgba(0,0,0,.8);
    background: #fff;
    border-bottom: 2px solid rgba(0,0,0,.09);
    display: flex;
    flex: 1;
    overflow: hidden;
    align-items: center;
    justify-content: center;
    transition: color 0.2s;
}
.ZS1kj6 a  span:hover {
    color: #ee4d2d;
}
.ZS1kj6 a span.active{
    border-bottom:1px solid  #ee4d2d;
}
    </style>