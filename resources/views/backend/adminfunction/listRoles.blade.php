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
                        <h4 class="card-title">Danh sách nhóm quyền</h4>
                        <p class="card-description">
                           <code></code>
                        </p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên nhóm quyền</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $role)
                                <tr>
                                    <td>{{$role->id}}</td>
                                    <td>{{$role->name}}</td>
                                   
                                    <td> <form action="" method="POST">
                                            <!-- @method('DELETE') @csrf  -->
                                            <a href="{{route('admin.edit.roles',$role->id)}}" class="text-dark" style="text-decoration: none"><i
                                                    class="mdi mdi-table-edit"
                                                    style="font-size:20px; color:#9a55ff;"></i>sủa</a>
                                            <button class="border-0 btn-link text-dark" style="text-decoration: none; margin:0 20px;" 
                                                onclick="return confirm('Bạn chắc chắn muốn xóa sản phẩm  này không?');">
                                                <i class="mdi mdi-delete-forever"
                                                    style="font-size:20px; color:#9a55ff;"></i>xóa </button>
                                        
                                        </form></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer">
                        {{$data->links()}}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@stop()