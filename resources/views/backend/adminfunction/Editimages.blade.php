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
          <div class="card">
            <div class="card-body">
                <h4 class="card-title">Sửa  </h4>
                <p class="card-description">
                    
                </p>
                <form class="forms-sample" method="post"  action="{{ route('admin.proimg.update',  $imgs->id) }}"   enctype="multipart/form-data" >
                    @csrf  @method('PUT')
                    <div class="row" style="">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="images">Chọn ảnh</label> <br/>
                                <input type="file" name=" name_img" id="select_img"  style="display: none;">
                                @if($imgs->name_img && file_exists(public_path('uploads').'/'.$imgs->name_img ))
                                <img src="{!! asset('uploads/'.$imgs->name_img ) !!}" id="show_img" style=" width:100%; height:300px;  border-style: dotted;border-width: thick;" alt="">
                                @else
                                <img src="https://www.kunimi-media.jp/wordpress/wp-content/themes/keni8-child/images/no-image.jpg" id="show_img" style=" width:100%; height:300px;  border-style: dotted;border-width: thick;" alt=""> 
                                @endif
                            </div>
                            <button type="submit" class="btn btn-gradient-primary mr-2" >cập nhật</button>
                            <!-- <button class="btn btn-light"> <a  href="">Cancel</a></button> -->
                        </div>  
                    </div>      
                </form>
            </div>
          </div>
        </div> 
    </div>
    @include('backend.layout.footer')
</div>
</div>   
@stop()