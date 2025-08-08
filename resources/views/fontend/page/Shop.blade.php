@extends('fontend.linkconnec.link')
@section('link')
@include('fontend.layout.header')
<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Shop Grid</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                    <li><a href="javascript:void(0)">Shop</a></li>
                    @if(Route::current()->getName() == 'Shops.catpro')
                    <li>{{$catpro->cat_name}}</li>
                    @else
                    <li></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>

<section class="product-grids section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12">

                <div class="product-sidebar">

                    <div class="single-widget search">
                        <h3>Search Product</h3>
                        <form action="#">
                            <input type="text" placeholder="Search Here...">
                            <button type="submit"><i class="lni lni-search-alt"></i></button>
                        </form>
                    </div>


                    <div class="single-widget">
                        <h3>All Categories</h3>
                        <ul class="list">
                            @foreach($global_category as $cats)
                            <li>
                                <a
                                    href="{{ route('Shops.catpro',['catpro'=>$cats->id, 'slug'=>Str::slug($cats->cat_name)])}}">{{$cats->cat_name}}
                                </a><span>(1138)</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>


                    <div class="single-widget range">
                        <h3>Khoảng giá</h3>
                        <form>
                            <div class="" style="align-items: center;    display: flex;">
                                <input type="text" maxlength="13" class="" placeholder="₫ TỪ" value="{{request('min')}}"
                                    name="min" style="width: 6rem;font-size: .75rem;height: 1.875rem;">
                                <div class=""
                                    style="-webkit-flex: 1; background: #bdbdbd;margin: 0 .625rem;     height: 1px;">
                                </div>
                                <input type="text" maxlength="13" class="" placeholder="₫ ĐẾN"
                                    value="{{request('max')}}" name="max"
                                    style="width: 6rem;font-size: .75rem;height: 1.875rem;">
                            </div>
                            <button type="submit" style="background-color:#0167f3;color: #fff; height: 1.875rem;margin: 1.25rem 0 0; border:0;text-transform: uppercase;font-weight: 400;
    width: 100%;">Áp dụng</button>
                    </div>
                    </form>


                    <div class="single-widget condition">
                        <h3>Lọc theo thương hiệu</h3>
                        <form>
                            @if(Route::current()->getName() == 'Shops.catpro')
                            @foreach($productshop as $key => $brad)
                            <div class="form-check">
                                <?php $checked = $brad->id_brands == request('brandcat') ? 'checked' : '';?>
                                <input class="form-check-input" type="radio" value="{{$brad->id_brands}}"
                                    name="brandcat" id="flexCheckDefault{{$key}}" {{$checked}}>
                                <label class="form-check-label" for="flexCheckDefault{{$key}}">
                                    {{$brad->brand->brand_name}} 
                                </label>
                            </div>
                            @endforeach
                            @endif
                            @if(Route::current()->getName() == 'Shops')
                            @foreach($probrad as $key => $brad)
                            <div class="form-check">
                                <?php $checked = $brad->id_brands == request('brande') ? 'checked' : '';?>
                                <input class="form-check-input" type="radio" value="{{$brad->id_brands}}"
                                    name="brande" id="flexCheckDefault{{$key}}" {{$checked}}>
                                <label class="form-check-label" for="flexCheckDefault{{$key}}">
                                    {{$brad->brand->brand_name}} 
                                </label>
                            </div>
                            @endforeach
                            @endif
                            <div class="button mt-2">
                                <button type="submit" class="btn"> áp dụng</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
            <div class="col-lg-9 col-12">
                <div class="product-grids-head">
                    <div class="product-grid-topbar">
                        <div class="row align-items-center">
                            <div class="col-lg-9 col-md-10 col-12">
                                <div class="product-sorting text-center" style="display:flex; ">
                                    <div style="margin-left:10px;width:30%; padding:5px 10px 0 10px; height:30px;border-radius: 2px;">
                                       <a href="" ></a> Xắp sếp theo :
                                    </div>
                                    
                                    <div style="margin-left:10px;width:20%; padding:5px 6px 0 6px; height:30px;border-radius: 2px;border: 1px solid;">
                                      <a href="{{route('newpro',['new'=>'ctimes'])}}" style="color:black;"> Mới nhất</a>
                                    </div>
                                    <div style="margin-left:10px;width:20%; padding:5px 6px 0 6px; height:30px;border-radius: 2px;border: 1px solid;">
                                      <a href="{{route('beseller',['mien'=>'sales'])}}" style="color:black;"> Bán chạy</a>
                                    </div>
                                    <div style="margin-left:10px; width:40%; padding:5px 6px 0 6px; height:30px; border-radius: 2px;border: 1px solid;">
                                         <a href=""style="color:black;" >Gía: Cao đến Thấp</a>
                                    </div>
                                    <div style="margin-left:10px; width:40%; padding:5px 6px 0 6px; height:30px; border-radius: 2px; border: 1px solid;">
                                       <a href="" style="color:black;"> Gía: Thấp đến cao </a>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-2 col-12">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-grid-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-grid" type="button" role="tab" aria-controls="nav-grid"
                                            aria-selected="true"><i class="lni lni-grid-alt"></i></button>
                                        <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-list"
                                            aria-selected="false"><i class="lni lni-list"></i></button>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-grid" role="tabpanel"
                            aria-labelledby="nav-grid-tab">
                            <div class="row">
                                @foreach($productshop as $proshop)
                                <div class="col-lg-4 col-md-6 col-12">

                                    <div class="single-product">
                                        <div class="product-image">
                                            <img src="{!! asset('uploads/'.$proshop->images ) !!}" alt="#">


                                            @if(!$proshop->price_sale)
                                            <p></p>
                                            @else
                                            <span class="sale-tag">Sale
                                                -{{floor(( $proshop->price - $proshop->price_sale ) * (100/$proshop->price))}}%</span>
                                            @endif
                                            <form class="forms-sample" method="post"
                                                action="{{ route('Cart.add',$proshop->id)}}">
                                                @csrf
                                                <div class="button">
                                                    <button type="submit" class="btn btn-gradient-primary mr-2">Add
                                                        Product</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="product-info">
                                            <span
                                                class="category">{{$proshop->cat ? $proshop->cat->cat_name :""}}</span>
                                            <h4 class="title"
                                                style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; ">
                                                <a
                                                    href="{{route('Productdetail',$proshop->id)}}">{{$proshop->pro_name}}</a>
                                            </h4>
                                            <ul class="review">
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star"></i></li>
                                                <li style="padding-left:10px;"><span style="color:#9c9c9c;">đã bán {{$proshop->sold}}</span></li>
                                            </ul>
                                            <div class="price">
                                                @if($proshop->price_sale > 0)
                                                <span>{{number_format($proshop->price_sale)}}₫</span>
                                                <span class="discount-price">{{number_format($proshop->price)}}</span>
                                                @else
                                                <span>{{number_format($proshop->price)}}₫</span>
                                                @endif
                                              
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                @endforeach
                            </div>
                            <div class="text-center ">
                                {{$productshop->appends(request()->all())->links()}}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12">

                                    <div class="single-product">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="product-image">
                                                    <img src="{{ URL::asset('assets/fontend/images/products/product-1.jpg') }}"
                                                        alt="#">
                                                    <div class="button">
                                                        <a href="product-details.html" class="btn"><i
                                                                class="lni lni-cart"></i> Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-12">
                                                <div class="product-info">
                                                    <span class="category">Watches</span>
                                                    <h4 class="title">
                                                        <a href="product-grids.html">Xiaomi Mi Band 7</a>
                                                    </h4>
                                                    <ul class="review">
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star"></i></li>
                                                        <li><span>4.0 Review(s)</span></li>
                                                    </ul>
                                                    <div class="price">
                                                        <span>1.999.000₫</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="text-center ">
                                {{$productshop->appends(request()->all())->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('fontend.layout.footer')
@stop()
@section('jsshop')
<script>
function search(a) {
    v = "kyl" + a;
    document.getElementById(v).submit();
};
</script>
@stop()