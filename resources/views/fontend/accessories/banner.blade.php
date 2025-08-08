<section class="hero-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12 custom-padding-right">
                <div class="slider-head">

                    <div class="tns-outer" id="tns1-ow">
                        <div class="tns-controls" aria-label="Carousel Navigation" tabindex="0"><button type="button"
                                data-controls="prev" tabindex="-1" aria-controls="tns1"><i
                                    class="lni lni-chevron-left"></i></button><button type="button" data-controls="next"
                                tabindex="-1" aria-controls="tns1"><i class="lni lni-chevron-right"></i></button></div>
                        <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide
                            <span class="current">5</span> of 2
                        </div>
                        <div id="tns1-mw" class="tns-ovh">
                            <div class="tns-inner" id="tns1-iw">
                                <div class="hero-slider  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal"
                                    id="tns1" style="transform: translate3d(-66.6667%, 0px, 0px);">
                                    @foreach($banner as $baner)
                                    
                                    <div class="single-slider tns-item tns-slide-cloned"
                                        style="background-image: url({!! asset('banner/'.$baner->image ) !!});"
                                        aria-hidden="true" >
                                        
                                        <div class="content">
                                            <h2><span>{{$baner->target}}</span>
                                            {{$baner->title}}
                                            </h2>
                                            <p>{!! $baner->description !!}</p>
                                           
                                            <div class="button">
                                                <a href="{{$baner->url}}" class="btn">Shop Now</a>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="row">
                @foreach($banner2 as $banr)
                    <div class="col-lg-12 col-md-6 col-12 md-custom-padding">

                        <div class="hero-small-banner "
                            style="background-image: url({{ URL::asset('banner/'.$banr->image) }});">
                            <div class="content">
                                <h2>
                                    <span>{{$banr->target}}</span>
                                    {{$banr->title}}
                                </h2>
                                <h3>{{$banr->description}}</h3>
                            </div>
                        </div>

                    </div>
                    @endforeach
                    @foreach($banner3 as $banr)
                    <div class="col-lg-12 col-md-6 col-12">

                        <div class="hero-small-banner style2"
                        style="background-image: url({{ URL::asset('banner/'.$banr->image) }});">
                            <div class="content">
                                <h2>{{$banr->title}}</h2>
                                <p>{{$banr->target}}</p>
                                <div class="button">
                                    <a class="btn" href="product-grids.html">Shop Now</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>