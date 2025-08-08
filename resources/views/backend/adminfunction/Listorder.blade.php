@extends('backend.linkconec.linkadmin')
@section('linkadmin')
@include('backend.layout.nav')
<div class="container-fluid page-body-wrapper">
    @include('backend.layout.rightmenu')
    <div class="main-panel">
        <div class="content-wrapper">
           
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">danh sách đơn hàng</h4>
                            <p class="card-description">
                              <code></code>
                            </p>
                            <div class=" ZS1kj6 mb-3" style="box-shadow: 0 0 0 2px #f5f5f5;">
                                <a class="_2sowby " href="{{route('admin.list.order')}}">
                                    <span class="_2pSH8O">Tất cả</span>
                                </a>
                                <a class="_2sowby  " href="{{route('admin.stats',1)}}">
                                    <span class="_2pSH8O">Chờ xác nhận</span>
                                </a>
                                <a class="_2sowby" href="{{route('admin.stats',2)}}">
                                    <span class="_2pSH8O">Đã xác nhận/Chờ lấy hàng</span>
                                </a>
                                <a class="_2sowby" href="{{route('admin.stats',3)}}">
                                    <span class="_2pSH8O">Đang giao</span>
                                </a>
                                <a class="_2sowby" href="{{route('admin.stats',4)}}">
                                    <span class="_2pSH8O">đã thanh toán/Đã giao</span>
                                </a>
                                <a class="_2sowby" href="{{route('admin.stats',5)}}">
                                    <span class="_2pSH8O">Đã Hủy</span>
                                </a>
                            </div>
                            <table class="table table-striped mt-4">
                                <thead style=" border-top:1px solid #eee;">
                                    <tr >
                                        <th>ID đơn hàng</th>
                                        <th>Tên người nhận</th>
                                        <th>yều cầu của KH</th>
                                        <th>ngày đăt hàng</th>
                                        <th>Số lượng</th>
                                        <th>Tổng tiền</th>
                                        <th>trạng thái</th>
                                        <th>thao tác</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach( $data as $prod => $order )
                                    <tr>
                                        <td class="py-1">{{$order->id}}</td>
                                        <td>{{$order->order_name}}</td>
                                        
                                        <td>{{$order->order_note}}</td>
                                        <td>{{$order->created_at->format('d-m-Y ')}}</td>
                                        <td>{{$order->quanti()}}</td>
                                        <td>đ.{{number_format($order->total_price)}}</td>
                                        @if($order->status==1)
                                        <td>Chờ xác nhận</td>
                                        @elseif($order->status==2)
                                        <td>đã xác nhận</td>
                                        @elseif($order->status==3)
                                        <td>đang giao hàng</td>
                                        @elseif($order->status==4)
                                        <td>đã thanh toán / nhận hàng</td>
                                        @else
                                        <td>đã hủy</td>
                                        @endif
                                        <td>

                                            <a href="{{ route('admin.order.edit',$order->id) }}" class="text-dark"
                                                style="text-decoration: none; margin-left:5px;">
                                                <i class="mdi mdi-file-find"
                                                    style="font-size:20px; color:#9a55ff;"></i>Chi
                                                tiết</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                        <div class="text-center ml-5">
                            {{$data->appends(request()->all())->links()}}
                        </div>
                    </div>
                </div>

            </div>

        </div>
        @include('backend.layout.footer')
    </div>
</div>
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
    text-decoration: none;
    cursor: pointer;
    user-select: none;
    padding: 16px 0;
    font-size: 16px;
    line-height: 19px;
    text-align: center;
    color: rgba(0, 0, 0, .8);
    background: #fff;
    border-bottom: 2px solid rgba(0, 0, 0, .09);
    display: flex;
    flex: 1;
    overflow: hidden;
    align-items: center;
    justify-content: center;
    transition: color 0.2s;
}

.ZS1kj6 a span:hover {

    color: #ee4d2d;
}

.ZS1kj6 a.active {
    border-bottom: 1px solid #ee4d2d;
}
</style>