            @extends('backend.linkconec.linkadmin')
            @section('linkadmin')
            @include('backend.layout.nav')
            <div class="container-fluid page-body-wrapper">
                @include('backend.layout.rightmenu')
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="page-header">
                            <h3 class="page-title">
                                Chi tiết đơn hàng và xác nhận đơn hàng
                            </h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active text-center" aria-current="page">
                                        <span>
                                            <i class="mdi mdi-chevron-double-left"
                                                style="font-size:20px; color:#b66dff; margin-top:20px;"></i>
                                            <a href="{{route('admin.list.order')}}"
                                                style="text-decoration: none; color:black;font-size:20px;  "> Quay
                                                lại</a>
                                        </span>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Xác nhận đơn hàng</h4>
                                        <p class="card-description" style="font-size:14px;">
                                            ID ĐƠN HÀNG: {{$order->id}}
                                        </p>
                                        <div>
                                            @if($order->status==5)
                                            <span>đã hủy</span>
                                            @elseif($order->status==4)
                                            <span>đã thanh toán / nhận hàng</span>
                                            @elseif($order->status==3)
                                            <span>
                                                <form action="{{ route('admin.order.update',$order->id) }}"
                                                    method="post">
                                                    @csrf @method('PUT')
                                                    <div class="form-group" style="width:25%;">

                                                        <select class="form-control form-control-sm" id="status"
                                                            style="height:40px; color:black;" name="status">
                                                            <option value="3" {{$order->status==3?'selected':''}}>
                                                                đang giao hàng</option>
                                                            <option value="4" {{$order->status==4?'selected':''}}>đã
                                                                thanh toán / nhận hàng</option>
                                                            <option value="5" {{$order->status==5?'selected':''}}>đã
                                                                hủy</option>
                                                        </select>
                                                        <button type="submit"
                                                            class="btn btn-gradient-warning btn-rounded btn-fw mt-4">xác
                                                            nhận</button>
                                                    </div>

                                                </form>
                                            </span>
                                            @elseif($order->status==2)
                                            <span>
                                                <form action="{{ route('admin.order.update',$order->id) }}"
                                                    method="post">
                                                    @csrf @method('PUT')
                                                    <div class="form-group" style="width:25%;">
                                                        <select name="status" id="status"
                                                            class="form-control form-control-sm"
                                                            style="height:40px; color:black;">
                                                            <option value="2" {{$order->status==2?'selected':''}}>đã
                                                                xác nhận</option>
                                                            <option value="3" {{$order->status==3?'selected':''}}>
                                                                đang giao hàng</option>
                                                            <option value="4" {{$order->status==4?'selected':''}}>đã
                                                                thanh toán / nhận hàng</option>
                                                            <option value="5" {{$order->status==5?'selected':''}}>đã
                                                                hủy</option>
                                                        </select>
                                                        <button type="submit"
                                                            class="btn btn-gradient-warning btn-rounded btn-fw mt-4">xác
                                                            nhận</button>
                                                    </div>
                                                </form>
                                            </span>
                                            @else
                                            <span>
                                                <form action="{{ route('admin.order.update',$order->id) }}"
                                                    method="post">
                                                    @csrf @method('PUT')
                                                    <div class="form-group" style="width:25%;">
                                                        <select name="status" id="status"
                                                            class="form-control form-control-sm"
                                                            style="height:40px; color:black;">
                                                            <option value="1" {{$order->status==1?'selected':''}}>
                                                                Chờ xác nhận</option>
                                                            <option value="2" {{$order->status==2?'selected':''}}>đã
                                                                xác nhận</option>
                                                            <option value="3" {{$order->status==3?'selected':''}}>
                                                                đang giao hàng</option>
                                                            <option value="4" {{$order->status==4?'selected':''}}>đã
                                                                thanh toán / nhận hàng</option>
                                                            <option value="5" {{$order->status==5?'selected':''}}>đã
                                                                hủy</option>
                                                        </select>
                                                        <button type="submit"
                                                            class="btn btn-gradient-warning btn-rounded btn-fw mt-4">xác
                                                            nhận</button>
                                                    </div>
                                                </form>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Địa chỉ nhận hàng</h4>
                                        <p class="card-description" style="font-size:14px;">
                                            Tên: {{$order->order_name}}
                                        </p>
                                        <p class="card-description" style="font-size:14px;">
                                            Số điện thoại:{{$order->order_phone}}
                                        </p>
                                        <p class="card-description" style="font-size:14px;">
                                            Địa chỉ:{{$order->Address}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Chi tiết đơn hàng</h4>
                                        <p class="card-description">
                                            Add class <code>.table-bordered</code>
                                        </p>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>ảnh sản phẩm</th>
                                                    <th>tên sản phẩm</th>
                                                    <th>Đơn giá</th>
                                                    <th>Số lượng</th>
                                                    <th>loại hàng</th>
                                                    <th>Tỏng tiền</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($status as $hey => $detail)
                                                <tr>
                                                    <td>{{$hey}}</td>
                                                    <td><img style="width:50px;height:50px;"
                                                            src="{!!asset('uploads/'.$detail->product->images)!!}"
                                                            alt=""></td>
                                                    <td>{{$detail->product->pro_name}}</td>
                                                    <td>đ.{{number_format($detail->price)}}</td>
                                                    <td>{{$detail->Quantity}}</td>
                                                    <td>@if($detail->colors != null){{$detail->colors->color_name}}@else
                                                        <p></p>@endif</br>@if($detail->typs !=
                                                        null){{$detail->tps->type}}@else <p></p>@endif
                                                    </td>

                                                </tr>
                                                @endforeach
                                                <tr>
                                                   
                                                    <td colspan="5" style="text-align: right;">
                                                     <p>Phương thức thanh toán:</p>
                                                     <p>Phương thức giáo hàng:</p>
                                                    <p>Tổng thanh toán:</p></td>
                                                    <td colspan="2"> <p>Phương thức thanh toán:</p>
                                                     <p>Phương thức giáo hàng:</p>
                                                    <p>Tổng thanh toán:</p></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                        </div>
                    </div>
                    @include('backend.layout.footer')
                </div>
            </div>
            @stop()