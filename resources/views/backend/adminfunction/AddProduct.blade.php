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
            @if(Session::has('success'))
        <div class="alert alert-success mx-auto" style="width:400px; text:center;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{Session::get('success')}}
        </div>
        @endif
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Thêm sản phẩm</h4>
                    <p class="card-description">
                        Basic form layout
                    </p>
                    <form class="forms-sample" method="post" action="{{route('admin.save.product')}}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Tên sản phẩm:</label>
                                            <input type="text" class="form-control" id="pro_name" name="pro_name"
                                              style="border:1px solid  black"
                                                value="{{old('pro_name')}}">
                                            @error('pro_name')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Đơn giá:</label>
                                            <input type="text" class="form-control" id="price" name="price"
                                               style="border:1px solid  black"
                                                value="{{old('price')}}">
                                            @error('price')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Gía giảm:</label>
                                            <input type="text" class="form-control" id="price_sale" name="price_sale"
                                                style="border:1px solid  black"
                                                value="{{old('price_sale')}}">
                                            @error('price_sale')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cat_id">Danh mục</label>
                                            <select class="form-control" id="cat_id" name="cat_id"  onchange="get_type(this.value)"
                                                style="border:1px solid  black">
                                                <option value="">chọn danh mục</option>

                                                <?php Category($data); ?>
                                            </select>
                                            @error('cat_id')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Số Lượng Kho</label>
                                            <input type="text" class="form-control" id="warehouse" name="warehouse"
                                                style="border:1px solid  black"
                                                value="{{old('warehouse')}}">
                                            @error('warehouse')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                   
                                    <div class="col-md-6">
                                        <!-- <a href="{{route('ajaxcategory',8)}}">sfdfd</a> -->
                                        <div class="form-group">
                                            <label for="exampleSelectGender">Thương Hiệu</label>
                                            <select class="form-control" id="id_brands" name="id_brands"
                                                style="border:1px solid  black">
                                                <option value="">Chọn thương hiệu</option>
                                                @foreach( $data2 as $bran )
                                                <?php $selected = $bran->id == old('id_brands') ? 'selected' : '';?>
                                                <option value="{{$bran->id}}">{{$bran->brand_name}}</option>
                                                @endforeach

                                            </select>
                                            @error('id_brands')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                        <div class="col-md-12"  id="type">
                                            

                                           
                                        </div>
                                    <div class="col-md-12">
                                        <label for="exampleTextarea1">Chọn màu</label>
                                        <div class="form-group" style="display:flex; ">
                                            @foreach( $colo as $key => $colos )
                                            <div class="form-check" style="margin-left:20px;">
                                                <label class="form-check-label" style="margin-left:18px;">
                                                    <input type="checkbox" class="form-check-input" name="colors_id[]"
                                                        id="colors_id" value="{{$colos->id}}">{{$colos->color_name}}
                                                    <i class="input-helper"></i></label>
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Mô tả sản phẩm</label>
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
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Các ảnh liên quan</label><br />
                                            <input type="file" name="other_img[]" id="other_img" multiple>
                                            <div class="row" id="show_other_img">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="images">Chọn ảnh</label> <br />
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

                                <button type="submit" class="btn btn-gradient-primary mr-2">Thêm sản phẩm</button>
                                <button class="btn btn-light">Hủy bỏ</button>
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