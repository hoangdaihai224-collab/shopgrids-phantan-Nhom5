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
                <div class="col-md-5 grid-margin stretch-card  mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Chỉnh sửa màu</h4>
                            <p class="card-description">
                                Basic form layout
                            </p>
                            <form class="forms-sample" method="post" action="{{ route('admin.update.color', $Coloedit->id)}}">
                            @csrf @method('PUT')
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Tên màu:</label>
                                    <input type="text" class="form-control" id="color_name" name="color_name" value="{{ $Coloedit->color_name}}" >
                                    @error('color_name')
                                    <small class="help-block text-danger">{{$message}}</small>
                                    @enderror

                                </div>
                                <div class="form-group ">
                                    <label for="" class="mb-3">Trạng thái :</label>
                                    <div class="radio">
                                        <label class="mr-3">
                                            <input type="radio" name="status" id="status" value="1"  {{ $Coloedit->status== "1" ? 'checked' : ''}} >
                                            Hiển thị
                                        </label>
                                        <label>
                                            <input type="radio" name="status" id="status" value="0"  {{ $Coloedit->status== "0" ? 'checked' : ''}} >
                                            Ẩn
                                        </label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-gradient-primary mr-2">Cập nhật</button>
                                <button class="btn btn-light">Hủy</button>

                            </form>
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