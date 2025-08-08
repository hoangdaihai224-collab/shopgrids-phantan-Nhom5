@extends('backend.linkconec.linkadmin')
@section('linkadmin')
@include('backend.layout.nav')
<div class="container-fluid page-body-wrapper">
    @include('backend.layout.rightmenu')
    <div class="content-wrapper">

        @if(Session::has('success'))
        <div class="alert alert-success mx-auto" style="width:400px; text:center;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{Session::get('success')}}
        </div>
        @endif

        <div class="row">
            <div class="col-md-8 grid-margin stretch-card mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thêm Danh mục </h4>
                        <p class="card-description">
                            nơi thêm danh mục lớn
                        </p>
                        <form class="forms-sample" method="post" action="{{route ('admin.save.category') }}">
                            @csrf
                            <div class="form-group ">
                                <label for="exampleInputUsername1"> <h6>Tên danh mục:</h6></label>
                                <input type="text" class="form-control" id="cat_name" name="cat_name"
                                    value="{{old('cat_name')}}" placeholder="nhập tên danh mục">

                                @error('cat_name')
                                <small class="help-block text-danger">{{$message}}</small>
                                @enderror

                            </div>
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="form-group ">
                                        <label for="" class="mb-3"><h6>Trạng thái :</h6></label>
                                        <div class="radio">
                                            <label class="mr-3">
                                                <input type="radio" name="status" id="status" value="1">
                                                Còn Hàng
                                            </label>
                                            <label>
                                                <input type="radio" name="status" id="status" value="0">
                                                Hết Hàng
                                            </label>
                                        </div>
                                        @error('status')
                                        <small class="help-block text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 ">
                                    <div class="form-group ">
                                        <label for="" class="mb-3"><h6>loại danh mục :</h6></label>
                                        <div class="radio">
                                            <label class="mr-3">
                                                <input type="radio" name="typecat" id="typecat" value="2">
                                                sản phẩm
                                            </label>
                                            <label>
                                                <input type="radio" name="typecat" id="typecat" value="3">
                                                bLOG
                                            </label>
                                        </div>
                                        @error('typecat')
                                        <small class="help-block text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-gradient-primary mr-2">Thêm Danh mục</button>
                            <button class="btn btn-light" style="background-color:#fe7c96;"><a href="{{route ('admin.add.category') }}"
                                    style="text-decoration: none ; color:white;">Hủy bỏ</a></button>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@stop()