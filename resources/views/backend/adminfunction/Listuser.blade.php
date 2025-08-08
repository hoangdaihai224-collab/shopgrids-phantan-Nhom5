@extends('backend.linkconec.linkadmin')
@section('linkadmin')
@include('backend.layout.nav')
<div class="container-fluid page-body-wrapper">
    @include('backend.layout.rightmenu')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh sách tài khoản quản trị</h4>
                        <p class="card-description">
                            Add class <code>.table-bordered</code>
                        </p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Tên quản trị viên </th>
                                    <th> ảnh đại diện </th>
                                    <th> Email </th>
                                    <th> Số ĐIỆN thoại </th>
                                    <th>thao tác </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $role)
                                <tr>
                                    <td>{{$role->id}}</td>
                                    <td>{{$role->user_name}}</td>
                                    <td><img src="{!! asset('avatars/'.$role->avatar ) !!}"
                                            style="border-radius:5px;  width:60px; height:60px;"></td>
                                    <td>{{$role->user_email}}</td>
                                    <td>{{$role->user_phone}}</td>
                                    <td>
                                        <form action="" method="POST">
                                            <!-- @method('DELETE') @csrf  -->
                                            <a href="{{route('admin.edit.user',$role->id)}}" class="text-dark" style="text-decoration: none"><i
                                                    class="mdi mdi-table-edit"
                                                    style="font-size:20px; color:#9a55ff;"></i>sửa</a>
                                            <button class="border-0 btn-link text-dark" style="text-decoration: none; margin:0 20px;" 
                                                onclick="return confirm('Bạn chắc chắn muốn xóa sản phẩm  này không?');">
                                                <i class="mdi mdi-delete-forever"
                                                    style="font-size:20px; color:#9a55ff;"></i>xóa </button>
                                            <a href="{{route('admin.roles.user',$role->id)}}" class="text-dark" style="text-decoration: none">
                                            <i class="mdi mdi-book-open-page-variant"    style="font-size:20px; color:#9a55ff;"></i>phân quyền</a>
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
</div>
@stop()