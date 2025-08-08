@extends('backend.linkconec.linkadmin')
@section('linkadmin')
@include('backend.layout.nav')
<div class="container-fluid page-body-wrapper">
    @include('backend.layout.rightmenu')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Sửa banner</h4>
                    <p class="card-description">
                        Basic form layout
                    </p>
                    <form class="forms-sample" method="post" action="{{route('admin.update.baner', $data->id)}}"
                        enctype="multipart/form-data">
                        @csrf @method('PUT')
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">title:</label>
                                            <input type="text" class="form-control" id="title" name="title"
                                               style="border:1px solid  black"
                                                value="{{ $data->title }}">
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
                                                value="{{$data->url}}">
                                            @error('price')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">vị trí</label>
                                            <input type="text" class="form-control" id="position" name="position"
                                                style="border:1px solid  black"
                                                value="{{$data->position}}">
                                            <!-- @error('price')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror -->
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cat_id">mục tiêu</label>
                                        <input type="text" class="form-control" id="target" name="target"
                                             style="border:1px solid  black"
                                            value="{{$data->target}}">
                                        <!-- @error('cat_id')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror -->
                                    </div>
                                </div>
                                   
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleSelectGender">loại banner</label>
                                            <select class="form-control" id="type" name="type"
                                                style="border:1px solid  black"  value="">
                                                <option value="{{$data->type}}"> {{$data->type}}</option>

                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>


                                            </select>
                                            @error('id_color')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleTextarea1">description</label>
                                            <div>
                                                <textarea class=" text-body" id="summernote"
                                                    name="description">{{$data->description}}</textarea>
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


                                    <input type="file" name=" images" id="select_img" 
                                        style="display: none;">
                                    @if($data->image && file_exists(public_path('banner').'/'.$data->image ))
                                    <img src="{!! asset('banner/'.$data->image ) !!}" id="show_img"
                                        style=" width:100%; height:300px;  border-style: dotted; border-width: thick;"
                                        alt="">
                                    @else
                                    <img src="https://www.kunimi-media.jp/wordpress/wp-content/themes/keni8-child/images/no-image.jpg"
                                        id="show_img"
                                        style=" width:100%; height:300px;  border-style: dotted;border-width: thick;"
                                        alt="">
                                    @endif
                                    @error('images')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group ">
                                    <label for="" class="mb-3">Trạng thái :</label>
                                    <div class="radio">
                                        <label class="mr-3">
                                            <input type="radio" name="status" id="status" value="1"
                                                {{ $data->status== "1" ? 'checked' : ''}}>
                                            Còn Hàng
                                        </label>
                                        <label>
                                            <input type="radio" name="status" id="status" value="0"
                                                {{ $data->status== "0" ? 'checked' : ''}}>
                                            Hết Hàng
                                        </label>
                                    </div>
                                    @error('status')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-gradient-primary mr-2">Cập nhật</button>
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