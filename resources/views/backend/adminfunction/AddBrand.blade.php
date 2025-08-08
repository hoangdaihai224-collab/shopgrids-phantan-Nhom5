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
                            <h4 class="card-title">Thêm thương Hiệu</h4>
                            <p class="card-description">
                                Basic form layout
                            </p>
                            <form class="forms-sample" method="post" action="{{ route('admin.save.brand')}}"  enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Tên thương Hiệu:</label>
                                    <input type="text" class="form-control" id="brand_name" name="brand_name">
                                    @error('color_name')
                                    <small class="help-block text-danger">{{$message}}</small>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="img_brand" style="font-size:18px;">Chọn ảnh </label> <br />
                                    <div>
                                        <input type="file" style="" name="img_brand" id="img_brand">
                                    </div>
                                    @error('avatar')
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

                                <button type="submit" class="btn btn-gradient-primary mr-2">thêm thương hiệu</button>
                                <button class="btn btn-light">hủy</button>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">danh sách các thương hiệu</h4>
                            <p class="card-description">
                                Add class <code>.table-bordered</code>
                            </p>
                            <table class="table table-bordered">
                                <thead>

                                    <tr>
                                        <th> id </th>
                                        <th> Tên thương Hiệu </th>
                                        <th> ảnh</th>
                                        <th>  Status </th>
                                        <th>  ngày tạo </th>
                                        <th>  Hoạt Động </th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach($data as $bran )
                                    <tr>
                                        <td>  {{$bran->id}}  </td>
                                        <td>  {{$bran ->brand_name}}  </td>
                                        <td><img src="{!! asset('uploads/'.$bran->img_brand ) !!}"
                                                style="border-radius:5px;  width:40px; height:40px;"></td>
                                        <td>  {{ $bran->status== "1" ? 'Hiển Thị' : 'Ân'}} </td>
                                        <td>{{$bran->created_at}} </td>
                                        <td>
                                            <form action="{{ route('admin.delete.brand', $bran->id )}}" method="POST">
                                                @method('DELETE') @csrf
                                                <a href="{{ route('admin.edit.brand', $bran->id )}}" class="text-dark"
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