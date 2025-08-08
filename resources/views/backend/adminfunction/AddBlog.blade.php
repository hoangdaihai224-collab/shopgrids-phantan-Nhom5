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
                    <h4 class="card-title">Thêm Blog</h4>
                    <p class="card-description">
                        Basic form layout
                    </p>
                    <form class="forms-sample" method="post" action="{{route('admin.save.blog')}}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Tiêu Đề</label>
                                            <input type="text" class="form-control" id="blog_title" name="blog_title"
                                              style="border:1px solid  black"
                                                value="{{old('blog_title')}}">
                                            @error('blog_title')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Top tắt nội dung</label>
                                            <div>
                                                <textarea class=" text-body" id="summernote"
                                                    name="blog_summary"> {{old('blog_summary')}}</textarea>
                                            </div>
                                            @error('blog_summary')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Nội dung</label>
                                            <div>
                                                <textarea class=" text-body" id="summernote2"
                                                    name="blog_conten"> {{old('blog_conten')}}</textarea>
                                            </div>
                                            @error('blog_conten')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Danh mục</label>
                                   
                                        <select class="form-control" id="category" name="category"
                                                style="border:1px solid  black">
                                                <option value="">Choose Category</option>
                                                @foreach( $data as $cat )
                                                <?php $selected = $cat->id == old('category') ? 'selected' : '';?>
                                                <option value="{{$cat->id}}">{{$cat->cat_name}}</option>
                                                @endforeach

                                            </select>
                                    @error('category')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="images">ảnh blog</label> <br />
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
                                            Còn Hàng
                                        </label>
                                        <label>
                                            <input type="radio" name="status" id="status" value="0">
                                            Hết Hàng
                                        </label>
                                    </div>
                                    @error('status')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-gradient-primary mr-2">thêm Blog</button>
                                <button class="btn btn-light">hủy</button>
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