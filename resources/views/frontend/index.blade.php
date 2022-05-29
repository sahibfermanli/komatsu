@extends('frontend.app')

@section('title', 'Home page')

@section('content')
    <section class="rev_slider_wrapper">
        <div id="slider1" class="rev_slider" data-version="5.0">
            <ul>
                @foreach($sliders as $slider)
                    <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                        data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                        data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                        data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{$slider->image}}" alt="" title="{{$slider->title}}"
                             data-bgposition="center center"
                             data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="0" class="rev-slidebg"
                             data-no-retina>
                        <!-- LAYERS -->

                        <div class="tp-caption   tp-resizeme" id="slide-2-layer-9" data-x="['left','left','left','left']"
                             data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                             data-voffset="['285','185','255','185']" data-width="none" data-height="none"
                             data-whitespace="nowrap" data-visibility="['on','on','off','off']" data-type="image"
                             data-responsive_offset="on"
                             data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                             style="z-index: 5;"><img src="{{asset('frontend/image/slide-bg.png')}}" alt=""                                                  data-ww="['755px','755px','755px','755px']"
                                                      data-hh="['446px','446px','446px','446px']" width="674" height="398"
                                                      data-no-retina></div>

                        <div class="tp-caption ch_title   tp-resizeme" id="slide-2-layer-1"
                             data-x="['left','left','left','left']" data-hoffset="['40','40','40','40']"
                             data-y="['top','top','top','top']" data-voffset="['340','250','320','220']"
                             data-fontsize="['55','50','45','25']" data-lineheight="['55','50','45','25']" data-width="none"
                             data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                             data-frames='[{"delay":200,"speed":500,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                             style="z-index: 6; white-space: nowrap; letter-spacing: 0;">{{$slider->title}}
                        </div>

                        <div class="tp-caption ch_content   tp-resizeme" id="slide-2-layer-3"
                             data-x="['left','left','left','left']" data-hoffset="['40','40','40','40']"
                             data-y="['top','top','top','top']" data-voffset="['505','415','480','355']"
                             data-fontsize="['24','24','24','18']" data-width="none" data-height="none"
                             data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                             data-frames='[{"delay":600,"speed":700,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                             style="z-index: 8; white-space: nowrap; letter-spacing: 0px;">{{$slider->description}}
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <div class="welcomesec secpadd">
        <div class="container">
            <div class="fh-section-title clearfix  text-center version-dark paddbtm20">
                <h2>Welcome to <span class="main-color">KOMATSU</span></h2>
            </div>
            <p class="haeadingpara text-center paddbtm40">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Architecto aspernatur beatae blanditiis dignissimos ex expedita fugiat id in, inventore nesciunt
                pariatur possimus quod rem repudiandae similique soluta tempore ullam ut.</p>

            <div class="welservices row">
                <div class="col-md-4 col-sm-6">
                    <div class="fh-icon-box icon-type-theme_icon style-1 version-dark hide-button icon-left">
                        <span class="fh-icon"><i class="flaticon-transport-3"></i></span>
                        <h4 class="box-title"><a href="#">Air Freight Forwarding</a></h4>
                        <div class="desc">
                            <p>As a leader in global air freight forwarding, OIA Global excels in providing tailored
                                transportation</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="fh-icon-box icon-type-theme_icon style-1 version-dark hide-button icon-left">
                        <span class="fh-icon"><i class="flaticon-transport-4"></i></span>
                        <h4 class="box-title"><a href="#">Ocean Freight Forwarding</a></h4>
                        <div class="desc">
                            <p>Ocean Freight plays perhaps the most vital role in most transportation and supply chain
                                solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="fh-icon-box icon-type-theme_icon style-1 version-dark hide-button icon-left">
                        <span class="fh-icon"><i class="flaticon-transport-5"></i></span>
                        <h4 class="box-title"><a href="#">Road Freight Forwarding</a></h4>
                        <div class="desc">
                            <p>KOMATSU are transported at some stage of their journey along the world’s roads where we
                                give you a reassuring presence.</p>
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
                        <h2>Our Special SERVICES</h2>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div class="hdrgtpara lftredbrdr">
                        <p>Our warehousing services are known nationwide to be one of the most reliable, safe and
                            affordable, because we take pride in delivering the best of warehousing services, at the
                            most reasonable prices.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="fh-service-box icon-type-theme_icon style-1">
                        <span class="fh-icon"><i class="flaticon-open-cardboard-box"></i></span>
                        <h4 class="service-title"><a href="#" class="link" target="_blank">Packaging And Storage</a>
                        </h4>
                        <div class="desc">
                            <p>Package and store your things effectively and securely to make sure them in storage.</p>
                        </div>
                    </div>
                    <div class="fh-service-box icon-type-theme_icon style-1">
                        <span class="fh-icon"><i class="flaticon-buildings"></i></span>
                        <h4 class="service-title"><a href="#" class="link" target="_blank">Warehousing</a></h4>
                        <div class="desc">
                            <p>Package and store your things effectively and securely to make sure them in storage.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="fh-service-box icon-type-theme_icon style-1">
                        <span class="fh-icon"><i class="flaticon-transport-9"></i></span>
                        <h4 class="service-title"><a href="#" class="link" target="_blank">LOREM</a></h4>
                        <div class="desc">
                            <p>Delivery of any freight from a place to another place quickly to save your cost and your
                                time.</p>
                        </div>
                    </div>
                    <div class="fh-service-box icon-type-theme_icon style-1">
                        <span class="fh-icon"><i class="flaticon-transport-2"></i></span>
                        <h4 class="service-title"><a href="#" class="link" target="_blank">Door to Door Delivery</a>
                        </h4>
                        <div class="desc">
                            <p>Our expertise in transport management and planning allows us to design a solution.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="fh-service-box icon-type-theme_icon style-1">
                        <span class="fh-icon"><i class="flaticon-international-delivery"></i></span>
                        <h4 class="service-title"><a href="#" class="link" target="_blank">Worldwide Transport</a></h4>
                        <div class="desc">
                            <p>Specialises in international freight forwarding of merchandise and associated general
                                logistic services.</p>
                        </div>
                    </div>
                    <div class="fh-service-box icon-type-theme_icon style-1">
                        <span class="fh-icon"><i class="flaticon-transport-1"></i></span>
                        <h4 class="service-title"><a href="#" class="link" target="_blank">Ground Transport</a></h4>
                        <div class="desc">
                            <p>Ground transportation options for all visitors, no matter your needs, schedule or
                                destination.</p>
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
                        <h2>Why Choosing us?</h2>
                    </div>
                    <div class="fh-icon-box  style-2 icon-left has-line">
                        <span class="fh-icon"><i class="flaticon-international-delivery"></i></span>
                        <h4 class="box-title"><span>Global supply Chain Solutions</span></h4>
                        <div class="desc">
                            <p>Efficiently unleash cross-media information without cross-media value.</p>
                        </div>
                    </div>
                    <div class="fh-icon-box  style-2 icon-left has-line">
                        <span class="fh-icon"><i class="flaticon-people"></i></span>
                        <h4 class="box-title"><span>24 Hours - Technical Support</span></h4>
                        <div class="desc">
                            <p>Specialises in international freight forwarding of merchandise and associated logistic
                                services</p>
                        </div>
                    </div>
                    <div class="fh-icon-box  style-2 icon-left has-line">
                        <span class="fh-icon"><i class="flaticon-route"></i></span>
                        <h4 class="box-title"><span>Mobile Shipment Tracking</span></h4>
                        <div class="desc">
                            <p>We Offers intellgent concepts for road and tail and well as complex special transport
                                services</p>
                        </div>
                    </div>
                    <div class="fh-icon-box  style-2 icon-left">
                        <span class="fh-icon"><i class="flaticon-open-cardboard-box"></i></span>
                        <h4 class="box-title"><span>Careful Handling of Valuable Goods</span></h4>
                        <div class="desc">
                            <p>Komatsu are transported at some stage of their journey along the world’s roads</p>
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
