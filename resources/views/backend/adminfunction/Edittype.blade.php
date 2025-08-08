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
                            <h4 class="card-title">Chỉnh sủa màu</h4>
                            <p class="card-description">
                                Basic form layout
                            </p>
                            <form class="forms-sample" method="post" action="{{ route('admin.update.type', $typedit->id)}}">
                            @csrf @method('PUT')
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Color name:</label>
                                    <input type="text" class="form-control" id="type" name="type" value="{{ $typedit->type}}">
                                    @error('type')
                                    <small class="help-block text-danger">{{$message}}</small>
                                    @enderror

                                </div>
                                <div class="form-group">
                                            <label for="cat_id">Danh mục</label>
                                            <select class="form-control" id="cat_id" name="cat_id"
                                                style="border:1px solid  black">
                                                <option value="">Choose Category</option>
                                                <?php  Category($data,$typedit);  ?>
                                               

                                            </select>
                                            @error('cat_id')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                <div class="form-group ">
                                    <label for="" class="mb-3">Trạng thái :</label>
                                    <div class="radio">
                                        <label class="mr-3">
                                            <input type="radio" name="status" id="status" value="1"  {{ $typedit->status== "1" ? 'checked' : ''}} >
                                            Hiển thị
                                        </label>
                                        <label>
                                            <input type="radio" name="status" id="status" value="0"  {{ $typedit->status== "0" ? 'checked' : ''}} >
                                            Ẩn
                                        </label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-gradient-primary mr-2">Sửa</button>
                                <button class="btn btn-light">Cancel</button>

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