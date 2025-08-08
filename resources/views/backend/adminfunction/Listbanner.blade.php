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
                            <h4 class="card-title">Danh sách sản phẩm</h4>
                            <p class="card-description">
                                Add class <code>.table-striped</code>
                            </p>

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Images</th>
                                        <th>URL</th>
                                        <th>Status</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $data as $banner )
                                    <tr>
                                        <th>{{$banner->id}}</th>
                                        <td>{{$banner->title}}</td>
                                      
                                        <td><img src="{!! asset('banner/'.$banner->image ) !!}"
                                                style="border-radius:5px;  width:100px; height:60px;"></td>

                                        <td>{{$banner->url}} </td>
                                        <td class="py-1">{{ $banner->status== "1" ? 'Còn Hàng' : 'Hết Hàng'}}</td>

                                        <td>
                                            <form action="{{route('admin.delete.baner', $banner->id)}}" method="POST">
                                                 @method('DELETE') @csrf 
                                                <a href="{{route('admin.edit.baner', $banner->id)}}" class="text-dark"
                                                    style="text-decoration: none"><i class="mdi mdi-table-edit"
                                                        style="font-size:20px; color:#9a55ff;"></i> Sửa </a>
                                                <button class="border-0 btn-link text-dark"
                                                    style="text-decoration: none"
                                                    onclick="return confirm('Bạn chắc chắn muốn xóa sản phẩm  này không?');">
                                                    <i class="mdi mdi-delete-forever"
                                                        style="font-size:20px; color:#9a55ff;"></i>xóa</button>
                                                <a href="" class="text-dark"
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
           
        </div>
        @include('backend.layout.footer')
    </div>
</div>
@stop()