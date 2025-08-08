@extends('backend.linkconec.linkadmin')
@section('linkadmin')
@include('backend.layout.nav')
<div class="container-fluid page-body-wrapper">
    @include('backend.layout.rightmenu')
    <div class="main-panel">

        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    Forms
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Forms</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Basic elements</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-md-4 grid-margin stretch-card ">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Thêm loại sản phẩm</h4>
                            <p class="card-description">
                                Basic form layout
                            </p>
                            <form class="forms-sample" method="post" action="{{ route('admin.save.type')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Loại sản phảm</label>
                                    <input type="text" class="form-control" id="type" name="type">
                                    @error('type')
                                    <small class="help-block text-danger">{{$message}}</small>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="cat_id">Danh mục</label>
                                    <select class="form-control" id="cat_id" name="cat_id"
                                        style="border:1px solid  black">
                                        <option value="">Choose Category</option>

                                        <?php Category($data); ?>
                                    </select>
                                    @error('cat_id')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group ">
                                    <label for="" class="mb-3">Trạng thái :</label>
                                    <div class="radio">
                                        <label class="mr-3">
                                            <input type="radio" name="status" id="status" value="1">
                                            Hiển thị
                                        </label>
                                        <label>
                                            <input type="radio" name="status" id="status" value="0">
                                            Ẩn
                                        </label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-gradient-primary mr-2">Thêm</button>
                                <button class="btn btn-light">hủy</button>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Danh sách Loại (kiểu) sp</h4>
                            <p class="card-description">
                                Add class <code>.table-bordered</code>
                            </p>
                            <table class="table table-bordered">
                                <thead>

                                    <tr>
                                        <th> id</th>
                                        <th> Tên kiểu </th>
                                        <th> Status</th>
                                        <th> danh mục </th>
                                        <th> ngày tạo </th>
                                        <th>Hoạt Động</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach($types as $typ)
                                    <tr>
                                        <td>{{$typ->id}}</td>
                                        <td> {{$typ->type}}</td>
                                        <td> {{ $typ->status== "1" ? 'Hiển Thị' : 'Ân'}} </td>
                                        <td>{{$typ->catty? $typ->catty->cat_name :""}}</td>
                                        <td> {{$typ->created_at->format('d-m-Y')}} </td>
                                        <td>
                                            <form action="{{ route('admin.delete.type', $typ->id )}}" method="POST">
                                                @method('DELETE') @csrf
                                                <a href="{{ route('admin.edit.type', $typ->id  )}}" class="text-dark"
                                                    style="text-decoration: none"><i class="mdi mdi-table-edit"
                                                        style="font-size:20px; color:#9a55ff;"></i> Sửa </a>
                                                <button class="border-0 btn-link text-dark"
                                                    style="text-decoration: none"
                                                    onclick="return confirm('Bạn chắc chắn muốn xóa màu này không? ');">
                                                    <i class="mdi mdi-delete-forever"
                                                        style="font-size:20px; color:#9a55ff;"></i>Xóa </button>
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
        <!-- content-wrapper ends -->
        <!-- partial -->
        @include('backend.layout.footer')
    </div>
</div>
@stop()
<?php 
function Category($categories, $par = 0, $char = ''){
  foreach($categories  as $key => $data){
  
    if($data->parden_id == $par){
      echo   '<option value="'.$data->id.'">'.$char.$data->cat_name.'</option>';
      
    //  unset($categories[$key]);

    Category($categories, $data->id, $char.' -- ');
  

    }
  }
}
?>