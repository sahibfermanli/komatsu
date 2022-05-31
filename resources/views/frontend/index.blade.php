@extends('frontend.app')

@section('title', 'Home page')

@section('content')
    <section class="rev_slider_wrapper">
        <div id="slider1" class="rev_slider" data-version="5.0">
            <ul>
                @php($odd = true)
                @php($slider_count = 0)
                @foreach($sliders as $slider)
                    @php($slider_count++)
                    @if($odd)
                        @php($odd = false)
                        <li data-index="rs-{{$slider_count}}" data-transition="fade" data-slotamount="default"
                            data-hideafterloop="0"
                            data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                            data-masterspeed="300"
                            data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                            data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                            data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{$slider->image}}" alt="" title="{{$slider->title}}"
                                 data-bgposition="center center"
                                 data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="0" class="rev-slidebg"
                                 data-no-retina>
                            <!-- LAYERS -->

                            <div class="tp-caption   tp-resizeme" id="slide-2-layer-9"
                                 data-x="['left','left','left','left']"
                                 data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                 data-voffset="['285','185','255','185']" data-width="none" data-height="none"
                                 data-whitespace="nowrap" data-visibility="['on','on','off','off']" data-type="image"
                                 data-responsive_offset="on"
                                 data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                 data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 5;"><img src="{{asset('frontend/image/slide-bg.png')}}" alt=""
                                                          data-ww="['755px','755px','755px','755px']"
                                                          data-hh="['446px','446px','446px','446px']" width="674"
                                                          height="398"
                                                          data-no-retina></div>

                            <div class="tp-caption ch_title   tp-resizeme" id="slide-2-layer-1"
                                 data-x="['left','left','left','left']" data-hoffset="['40','40','40','40']"
                                 data-y="['top','top','top','top']" data-voffset="['340','250','320','220']"
                                 data-fontsize="['55','50','45','25']" data-lineheight="['55','50','45','25']"
                                 data-width="none"
                                 data-height="none" data-whitespace="nowrap" data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"delay":200,"speed":500,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                 data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 6; white-space: nowrap; letter-spacing: 0;">{{$slider->title}}
                            </div>

                            <div class="tp-caption ch_content   tp-resizeme" id="slide-2-layer-3"
                                 data-x="['left','left','left','left']" data-hoffset="['40','40','40','40']"
                                 data-y="['top','top','top','top']" data-voffset="['505','415','480','355']"
                                 data-fontsize="['24','24','24','18']" data-width="none" data-height="none"
                                 data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                                 data-frames='[{"delay":600,"speed":700,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                 data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 8; white-space: nowrap; letter-spacing: 0px;">{{$slider->description}}

                            </div>
                            <a class="tp-caption ch_button rev-btn " href="#" target="_blank" id="slide-2-layer-5"
                               data-x="['left','left','left','left']" data-hoffset="['40','40','40','40']"
                               data-y="['top','top','top','top']" data-voffset="['615','520','590','450']"
                               data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                               data-actions='' data-responsive_offset="on" data-responsive="off"
                               data-frames='[{"delay":800,"speed":1000,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(255,0,0);bc:rgb(255,0,0);bw:1 1 1 1;"}]'
                               data-textAlign="['inherit','inherit','inherit','inherit']"
                               data-paddingtop="[12,12,12,12]" data-paddingright="[35,35,35,35]"
                               data-paddingbottom="[12,12,12,12]" data-paddingleft="[35,35,35,35]"
                               style="z-index: 10; white-space: nowrap; letter-spacing: px;background-color:rgba(0, 0, 0, 0);border-color:rgb(255,255,255);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">About
                                us </a>
                        </li>
                    @else
                        @php($odd = true)
                        <li data-index="rs-{{$slider_count}}" data-transition="fade" data-slotamount="default"
                            data-hideafterloop="0"
                            data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                            data-masterspeed="300"
                            data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                            data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                            data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{$slider->image}}" alt="" title="{{$slider->title}}"
                                 data-bgposition="center center"
                                 data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="0" class="rev-slidebg"
                                 data-no-retina>
                            <!-- LAYERS -->

                            <div class="tp-caption   tp-resizeme" id="slide-3-layer-9"
                                 data-x="['left','left','left','left']" data-hoffset="['495','0','0','0']"
                                 data-y="['top','top','top','top']" data-voffset="['310','210','210','154']"
                                 data-width="none" data-height="none" data-whitespace="nowrap"
                                 data-visibility="['on','on','off','off']" data-type="image" data-responsive_offset="on"
                                 data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                 data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]" style="z-index: 5;">
                                <img src="{{asset('frontend/image/slide-bg.png')}}" alt=""
                                     data-ww="['755px','755px','755px','755px']"
                                     data-hh="['446px','446px','446px','446px']" width="674" height="398"
                                     data-no-retina></div>

                            <div class="tp-caption ch_title   tp-resizeme" id="slide-3-layer-2"
                                 data-x="['left','left','left','left']" data-hoffset="['540','40','40','40']"
                                 data-y="['top','top','top','top']" data-voffset="['420','330','330','250']"
                                 data-fontsize="['55','50','45','25']" data-lineheight="['55','50','45','25']"
                                 data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"delay":200,"speed":500,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                 data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 7; white-space: nowrap; letter-spacing: 0px;">{{$slider->title}}
                            </div>

                            <div class="tp-caption ch_content   tp-resizeme" id="slide-3-layer-3"
                                 data-x="['left','left','left','left']" data-hoffset="['540','40','40','40']"
                                 data-y="['top','top','top','top']" data-voffset="['505','415','415','315']"
                                 data-fontsize="['24','24','24','18']" data-lineheight="['24','24','24','18']"
                                 data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"delay":600,"speed":700,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                 data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 8; white-space: nowrap; letter-spacing: 0px;">{{$slider->description}}
                            </div>
                            <a class="tp-caption ch_button rev-btn " href="#" target="_blank" id="slide-3-layer-5"
                               data-x="['left','left','left','left']" data-hoffset="['540','40','40','40']"
                               data-y="['top','top','top','top']" data-voffset="['610','520','520','400']"
                               data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                               data-actions='' data-responsive_offset="on" data-responsive="off"
                               data-frames='[{"delay":800,"speed":1000,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(255,0,0);bc:rgb(255,0,0);bw:1 1 1 1;"}]'
                               data-textAlign="['inherit','inherit','inherit','inherit']"
                               data-paddingtop="[12,12,12,12]" data-paddingright="[35,35,35,35]"
                               data-paddingbottom="[12,12,12,12]" data-paddingleft="[35,35,35,35]"
                               style="z-index: 10; white-space: nowrap; letter-spacing: px;background-color:rgba(0, 0, 0, 0);border-color:rgb(255,255,255);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">About
                                us </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </section>

    <div class="welcomesec secpadd">
        <div class="container">
            <div class="fh-section-title clearfix  text-center version-dark paddbtm20">
                <h2>@lang('home.welcome')</h2>
            </div>
            <p class="haeadingpara text-center paddbtm40">@lang('home.welcome_desc')</p>

            <div class="welservices row">
                <div class="col-md-4 col-sm-6">
                    <div class="fh-icon-box icon-type-theme_icon style-1 version-dark hide-button icon-left">
                        <span class="fh-icon"><i class="flaticon-transport-3"></i></span>
                        <h4 class="box-title"><a href="#">@lang('home.service1')</a></h4>
                        <div class="desc">
                            <p>@lang('home.service1_desc')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="fh-icon-box icon-type-theme_icon style-1 version-dark hide-button icon-left">
                        <span class="fh-icon"><i class="flaticon-transport-4"></i></span>
                        <h4 class="box-title"><a href="#">@lang('home.service2')</a></h4>
                        <div class="desc">
                            <p>@lang('home.service2_desc')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="fh-icon-box icon-type-theme_icon style-1 version-dark hide-button icon-left">
                        <span class="fh-icon"><i class="flaticon-transport-5"></i></span>
                        <h4 class="box-title"><a href="#">@lang('home.service3')</a></h4>
                        <div class="desc">
                            <p>@lang('home.service3_desc')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="special_services bluebg secpadd">
        <div class="container">
            <div class="row paddbtm40">
                <div class="col-md-4 col-sm-12">
                    <div class="fh-section-title clearfix  text-left version-light">
                        <h2>@lang('home.special_services')</h2>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div class="hdrgtpara lftredbrdr">
                        <p>@lang('home.special_services_desc')</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="fh-service-box icon-type-theme_icon style-1">
                        <span class="fh-icon"><i class="flaticon-open-cardboard-box"></i></span>
                        <h4 class="service-title"><a href="#" class="link"
                                                     target="_blank">@lang('home.special_service1')</a>
                        </h4>
                        <div class="desc">
                            <p>@lang('home.special_service1_desc')</p>
                        </div>
                    </div>
                    <div class="fh-service-box icon-type-theme_icon style-1">
                        <span class="fh-icon"><i class="flaticon-buildings"></i></span>
                        <h4 class="service-title"><a href="#" class="link"
                                                     target="_blank">@lang('home.special_service2')</a></h4>
                        <div class="desc">
                            <p>@lang('home.special_service2_desc')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="fh-service-box icon-type-theme_icon style-1">
                        <span class="fh-icon"><i class="flaticon-transport-9"></i></span>
                        <h4 class="service-title"><a href="#" class="link"
                                                     target="_blank">@lang('home.special_service3')</a></h4>
                        <div class="desc">
                            <p>@lang('home.special_service3_desc')</p>
                        </div>
                    </div>
                    <div class="fh-service-box icon-type-theme_icon style-1">
                        <span class="fh-icon"><i class="flaticon-transport-2"></i></span>
                        <h4 class="service-title"><a href="#" class="link"
                                                     target="_blank">@lang('home.special_service4')</a>
                        </h4>
                        <div class="desc">
                            <p>@lang('home.special_service4_desc')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="fh-service-box icon-type-theme_icon style-1">
                        <span class="fh-icon"><i class="flaticon-international-delivery"></i></span>
                        <h4 class="service-title"><a href="#" class="link"
                                                     target="_blank">@lang('home.special_service5')</a></h4>
                        <div class="desc">
                            <p>@lang('home.special_service5_desc')</p>
                        </div>
                    </div>
                    <div class="fh-service-box icon-type-theme_icon style-1">
                        <span class="fh-icon"><i class="flaticon-transport-1"></i></span>
                        <h4 class="service-title"><a href="#" class="link"
                                                     target="_blank">@lang('home.special_service6')</a></h4>
                        <div class="desc">
                            <p>@lang('home.special_service6_desc')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="whychoose-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12  secpaddlf">
                    <div class="fh-section-title clearfix  text-left version-dark paddbtm40">
                        <h2>@lang('home.why_choosing_us')</h2>
                    </div>
                    <div class="fh-icon-box  style-2 icon-left has-line">
                        <span class="fh-icon"><i class="flaticon-international-delivery"></i></span>
                        <h4 class="box-title"><span>@lang('home.why_choosing_us1')</span></h4>
                        <div class="desc">
                            <p>@lang('home.why_choosing_us1_desc')</p>
                        </div>
                    </div>
                    <div class="fh-icon-box  style-2 icon-left has-line">
                        <span class="fh-icon"><i class="flaticon-people"></i></span>
                        <h4 class="box-title"><span>@lang('home.why_choosing_us2')</span></h4>
                        <div class="desc">
                            <p>@lang('home.why_choosing_us2_desc')</p>
                        </div>
                    </div>
                    <div class="fh-icon-box  style-2 icon-left has-line">
                        <span class="fh-icon"><i class="flaticon-route"></i></span>
                        <h4 class="box-title"><span>@lang('home.why_choosing_us3')</span></h4>
                        <div class="desc">
                            <p>@lang('home.why_choosing_us3_desc')</p>
                        </div>
                    </div>
                    <div class="fh-icon-box  style-2 icon-left">
                        <span class="fh-icon"><i class="flaticon-open-cardboard-box"></i></span>
                        <h4 class="box-title"><span>@lang('home.why_choosing_us4')</span></h4>
                        <div class="desc">
                            <p>@lang('home.why_choosing_us4_desc')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--    <section class="partener-1 bluebg">--}}
    {{--        <div class="container">--}}
    {{--            <div class="fh-partner clearfix">--}}
    {{--                <div class="list-item slide-partener">--}}
    {{--                    <div class="partner-item">--}}
    {{--                        <div class="partner-content">--}}
    {{--                            <a href="#" target="_self"><img alt="1764" src="{{asset('frontend/image/partner-4.png')}}"></a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="partner-item">--}}
    {{--                        <div class="partner-content">--}}
    {{--                            <a href="#" target="_self"><img alt="1763" src="{{asset('frontend/image/partner-4.png')}}"></a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="partner-item">--}}
    {{--                        <div class="partner-content">--}}
    {{--                            <a href="#" target="_self"><img alt="1762" src="{{asset('frontend/image/partner-4.png')}}"></a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="partner-item">--}}
    {{--                        <div class="partner-content">--}}
    {{--                            <a href="#" target="_self"><img alt="1761" src="{{asset('frontend/image/partner-4.png')}}"></a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="partner-item">--}}
    {{--                        <div class="partner-content">--}}
    {{--                            <a href="#" target="_self"><img alt="1765" src="{{asset('frontend/image/partner-4.png')}}"></a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
@endsection

@section('css')

@endsection

@section('js')

@endsection
