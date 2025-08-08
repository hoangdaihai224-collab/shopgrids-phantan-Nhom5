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
                    <h4 class="card-title">Cập nhật sản phẩm {{$data->pro_name}}</h4>
                    <p class="card-description">
                        Basic form layout
                    </p>
                    <form class="forms-sample" method="post" action="{{route('admin.update.product' , $data->id)}}"
                        enctype="multipart/form-data">
                        @csrf @method('PUT')
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Tên sản phẩm:</label>
                                            <input type="text" class="form-control" id="pro_name" name="pro_name"
                                                 style="border:1px solid  black"
                                                value="{{$data->pro_name}}">
                                            @error('pro_name')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Gía ban đầu</label>
                                            <input type="text" class="form-control" id="price" name="price"
                                                style="border:1px solid  black"
                                                value="{{$data->price}}">
                                            @error('price')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">giá giảm</label>
                                            <input type="text" class="form-control" id="price_sale" name="price_sale"
                                                style="border:1px solid  black"
                                                value="{{$data->price_sale}}">
                                            @error('price_sale')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Số Lượng Kho</label>
                                            <input type="text" class="form-control" id="warehouse" name="warehouse"
                                                 style="border:1px solid  black"
                                                value="{{$data->warehouse}}">
                                            @error('warehouse')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cat_id">Danh mục</label>
                                            <select class="form-control" id="cat_id" name="cat_id"   onchange="get_type(this.value)" 
                                                style="border:1px solid  black">
                                                <option value="">Choose Category</option>
                                                <?php 
                                                 
                                                 Category($data3,$data);  ?>
                                               

                                            </select>
                                            @error('cat_id')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleSelectGender">Thương Hiệu</label>
                                            <select class="form-control" id="id_brands" name="id_brands"
                                                style="border:1px solid  ">
                                                <option value="">Choosethương hiệu</option>
                                                @foreach( $data2 as $bran )

                                                <option value="{{$bran->id}}"
                                                    {{$data->id_brands == $bran->id ? 'selected' :""}}>
                                                    {{$bran->brand_name}}</option>
                                                @endforeach

                                            </select>
                                            @error('id_color')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Chọn kiểu</label>
                                            <div class="form-group" id='type' style="display:flex; ">
                                                @foreach( $type as $key => $types )
                                                <div class="form-check" style="margin-left:20px;">
                                                    <label class="form-check-label" style="margin-left:18px;">
                                                        <input type="checkbox" class="form-check-input" name="type_id[]"
                                                            id="colors_id" value="{{$types->id}}" @foreach($protype as
                                                            $selected)
                                                            {{$types->id == $selected->type_id ? 'checked' : ""}}
                                                            @endforeach>{{$types->type}}
                                                        <i class="input-helper"></i></label>
                                                </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="exampleTextarea1">Chọn màu</label>
                                        <div class="form-group" style="display:flex; ">
                                            @foreach( $colo as $key => $colos )

                                            <div class="form-check" style="margin-left:20px;">
                                                <label class="form-check-label" style="margin-left:18px;">
                                                    <input type="checkbox" class="form-check-input" name="colors_id[]"
                                                        id="colors_id" value="{{$colos->id}}" @foreach($proco as
                                                        $selecked)
                                                        {{$colos->id == $selecked->color_id ? 'checked' : ""}}
                                                        @endforeach>{{$colos->color_name}}
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
                                                    name="description"> {{$data->description}}</textarea>
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
                                    @if($data->images && file_exists(public_path('uploads').'/'.$data->images ))
                                    <img src="{!! asset('uploads/'.$data->images ) !!}" id="show_img"
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
                                <button class="btn btn-light">hủy bỏ</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-7 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Các ảnh liên quan</h4>
                        <p class="card-description">
                            Add class <code>.table</code>
                        </p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Images</th>
                                    <th>Name images</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data->proImages as $img)
                                <tr>
                                    <td>{{$img->id}}</td>
                                    <td><img src="{!! asset('uploads/'.$img->name_img ) !!}" alt=""></td>
                                    <td>{{$img->name_img}}</td>
                                    <td>
                                        <form action="{{ route('admin.productimage.delete', $img->id )}}" method="POST">
                                            @method('DELETE') @csrf
                                            <a href="{{ route('admin.pro_img.edit', $img->id) }}" class="text-dark"
                                                style="text-decoration: none"><i class="mdi mdi-table-edit"
                                                    style="font-size:20px; color:#9a55ff;"></i> Edit </a>
                                            <button class="border-0 btn-link text-dark" style="text-decoration: none"
                                                onclick="alert('Bạn chắc chắn muốn xóa sản phẩm  này không?');"> <i
                                                    class="mdi mdi-delete-forever"
                                                    style="font-size:20px; color:#9a55ff;"></i>Delete </button>
                                    </td>
                                    </form>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Traffic Sources</h4>
                        <canvas id="traffic-chart" width="551" height="275"
                            style="display: block; width: 551px; height: 275px;"
                            class="chartjs-render-monitor"></canvas>
                        <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('backend.layout.footer')
    </div>
</div>
@stop()
<?php 

function Category($categories,$pro, $par = 0, $char = ''){
    
  foreach($categories  as $key => $item){
    $selected="";
    if($pro->cat_id == $item->id ){
        $selected="selected"; 
    }
   
    if($item->parden_id == $par ){
      
    //  unset($categories[$key]);?>

<option value="<?php echo $item["id"] ?> "    
             <?php echo $selected ?>> <?php echo $char.$item["cat_name"] ?></option>
<?php   Category($categories,$pro, $item->id, $char.' -- '); }
  }
}
?>