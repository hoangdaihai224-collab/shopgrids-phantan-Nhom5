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
                            <div class="search-field d-none d-md-block">
                                <form class="d-flex align-items-center h-100" action="">
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <button type="submit" style="border:none; background:white"><i
                                                    class="input-group-text border-0 mdi mdi-magnify"
                                                    style="padding:0;"></i></button>
                                        </div>
                                        <input class="form-control  border-0 "
                                            style="background:#efe8e8; border-radius:10px 0px 0px 10px;" name="key"
                                            placeholder="Tìm kiếm tên sản phẩm" value="{{request('key')}}">
                                        <select class="form-control ml-2 mr-2" name="category"
                                            style="border:none; background:#efe8e8;">
                                            <option value="">Tìm danh mục</option>
                                            @foreach( $cats as $cat )
                                            <?php $selected = $cat->id == request('category') ? 'selected' : '';?>
                                            <option value="{{$cat->id}}" {{$selected}}>{{$cat->cat_name}}</option>
                                            @endforeach
                                        </select>
                                        <select class="form-control ml-2 mr-2" name="colors"
                                            style="border:none; background:#efe8e8;">
                                            <option value="">Tìm màu</option>
                                            @foreach( $colr as $colo )
                                            <?php $selected = $colo->id == request('colors') ? 'selected' : '';?>
                                            <option value="{{$colo->id}}" {{$selected}}>{{$colo->color_name}}</option>
                                            @endforeach
                                        </select>
                                       
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Danh sách sản phẩm</h4>
                            <p class="card-description">
                            <code></code>
                            </p>

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Tên danh mục</th>
                                        <th>ảnh</th>
                                        <th>đơn giá</th>
                                        <th>giá giảm</th>
                                        <!-- <th>Color</th> -->
                                        <th>tính trạng</th>
                                        <th>thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $data as $pro )
                                    <tr>
                                        <th>{{$pro->id}}</th>
                                        <td>{{$pro->pro_name}}</td>
                                        <td>{{$pro->cat ? $pro->cat->cat_name :""}}</td>
                                        <td><img src="{!! asset('uploads/'.$pro->images ) !!}"
                                                style="border-radius:5px;  width:60px; height:60px;"></td>

                                        <td>{{number_format($pro->price)}}₫</td>
                                        <td>{{number_format($pro->price_sale)}}₫ </td>
                                        <!-- <td>@foreach($pro->color as $colo)
                                            {{$colo->color_id ? $colo->colors->color_name:""}}</br>
                                            @endforeach</td> -->
                                        <td class="py-1">{{ $pro->status== "1" ? 'Còn Hàng' : 'Hết Hàng'}}</td>

                                        <td>
                                            <form action="{{route('admin.delete.product',$pro->id)}}" method="POST">
                                                @method('DELETE') @csrf
                                                <a href="{{route('admin.edit.product',$pro->id)}}" class="text-dark"
                                                    style="text-decoration: none"><i class="mdi mdi-table-edit"
                                                        style="font-size:20px; color:#9a55ff;"></i> Sửa </a>
                                                <button class="border-0 btn-link text-dark"
                                                    style="text-decoration: none"
                                                    onclick="return confirm('Bạn chắc chắn muốn xóa sản phẩm  này không?');">
                                                    <i class="mdi mdi-delete-forever"
                                                        style="font-size:20px; color:#9a55ff;"></i>xóa</button>
                                                <a href="{{route('admin.Protdetail',$pro->id)}}" class="text-dark"
                                                    style="text-decoration: none; margin-left:5px;"><i
                                                        class="mdi mdi-file-find"
                                                        style="font-size:20px; color:#9a55ff;"></i>Chi tiết</a>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                {{$data->appends(request()->all())->links()}}
            </div>
        </div>
        @include('backend.layout.footer')
    </div>
</div>
@stop()