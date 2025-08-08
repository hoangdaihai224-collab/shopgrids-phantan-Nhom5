@extends('backend.linkconec.linkadmin')
@section('linkadmin')
@include('backend.layout.nav')
<div class="container-fluid page-body-wrapper">
    @include('backend.layout.rightmenu')
    <div class="main-panel">
    <div class="content-wrapper">
        @if(Auth::check())
        <div class="page-header">
            <h3 class="page-title">
                HI Admin {{ Auth::user()->user_name }}
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Forms</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Basic elements</li>
                </ol>
            </nav>
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Thêm banner</h4>
                <p class="card-description">
                    Basic form layout
                </p>
                <form class="forms-sample" method="post" action="{{route('admin.save.banner')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Tiêu đề:</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            style="border:1px solid  black"
                                            value="{{old('title')}}">
                                        @error('title')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">url</label>
                                        <input type="text" class="form-control" id="url" name="url"
                                           style="border:1px solid  black"
                                            value="{{old('url')}}">
                                        @error('url')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">vị trí banner</label>
                                        <input type="text" class="form-control" id="position" name="position"
                                             style="border:1px solid  black"
                                            value="{{old('price')}}">
                                            
                                         @error('position')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cat_id">mục tiêu</label>
                                        <input type="text" class="form-control" id="target" name="target"
                                             style="border:1px solid  black"
                                            value="{{old('target')}}">
                                         @error('target')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleSelectGender">loại banner</label>
                                        <select class="form-control" id="type" name="type"
                                            style="border:1px solid  black">
                                            <option value=""></option>
                                              
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                             

                                        </select>
                                        @error('type')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group" >
                                        <label for="exampleTextarea1">Mô tả</label>
                                        <div>
                                            <textarea class=" text-body" id="summernote"   
                                                name="description"> {{old('description')}}</textarea>
                                        </div>
                                        @error('description')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="images">ảnh banner</label> <br />
                                <input type="file" name=" images" id="select_img" placeholder="Ten danh mục"
                                    style="display: none;">
                                <img src="https://www.kunimi-media.jp/wordpress/wp-content/themes/keni8-child/images/no-image.jpg"
                                    id="show_img"
                                    style=" width:100%; height:300px;  border-style: dotted;border-width: thick;"
                                    alt="">
                                @error('images')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <label for="" class="mb-3">Trạng thái :</label>
                                <div class="radio">
                                    <label class="mr-3">
                                        <input type="radio" name="status" id="status" value="1">
                                        Hiển Thị
                                    </label>
                                    <label>
                                        <input type="radio" name="status" id="status" value="0">
                                        ẩn
                                    </label>
                                </div>
                                @error('status')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-gradient-primary mr-2">thêm banner</button>
                            <button class="btn btn-light">Hủy</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('backend.layout.footer')
</div>
</div>   
@stop()