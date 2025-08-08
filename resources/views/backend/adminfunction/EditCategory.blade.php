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
            <div class="col-md-6 grid-margin stretch-card mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sửa danh mục</h4>
                        <p class="card-description">
                            Basic form layout
                        </p>
                        <form class="forms-sample" method="post"
                            action="{{route ('admin.update.category',$Catedit->id) }}">
                            @csrf @method('PUT')
                            <div class="form-group ">
                                <label for="exampleInputUsername1">Tên danh mục:</label>
                                <input type="text" class="form-control" id="cat_name" name="cat_name"
                                    placeholder="Username" value="{{$Catedit->cat_name}}">
                                @error('cat_namedit')
                                <small class="help-block text-danger">{{$message}}</small>
                                @enderror

                            </div>
                            @if($Catedit->parden_id == 0)
                            <div></div>
                            @else
                            <div class="form-group">
                                <label for="cat_id">Danh mục</label>
                                <select class="form-control" id="parden_id" name="parden_id"
                                    style="border:1px solid  black">
                                    <option value="">Choose Category</option>
                                    @foreach($Catsub as $subcat)
                                    <option value="{{$subcat->id}}">{{$subcat->cat_name}}</option>

                                    @endforeach
                                </select>
                                @error('cat_id')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>


                            @endif
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="form-group ">
                                        <label for="" class="mb-3">Trạng thái :</label>
                                        <div class="radio">
                                            <label class="mr-3">
                                                <input type="radio" name="status" id="status" value="1"
                                                    {{ $Catedit->status== "1" ? 'checked' : ''}}>
                                                Còn hàng
                                            </label>
                                            <label>
                                                <input type="radio" name="status" id="status" value="0"
                                                    {{ $Catedit->status=="0" ? 'checked': ''}}>
                                                Hết hàng
                                            </label>
                                        </div>
                                        @error('status')
                                        <small class="help-block text-danger">{{$message}}</small>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group ">
                                        <label for="" class="mb-3">
                                            <h6>loại danh mục :</h6>
                                        </label>
                                        <div class="radio">
                                            <label class="mr-3">
                                                <input type="radio" name="typecat" id="typecat" value="2"{{ $Catedit->typecat== "2" ? 'checked' : ''}}>
                                                sản phẩm
                                            </label>
                                            <label>
                                                <input type="radio" name="typecat" id="typecat" value="3" {{ $Catedit->typecat== "3" ? 'checked' : ''}}>
                                                bLOG
                                            </label>
                                        </div>
                                        @error('typecat')
                                        <small class="help-block text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-gradient-primary mr-2">cập nhật</button>
                            <button class="btn btn-light"> <a href="{{route ('admin.list.category') }}"
                                    style="text-decoration: none"> Huy</a></button>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@stop()