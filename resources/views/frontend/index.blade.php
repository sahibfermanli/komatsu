@extends('frontend.app')

@section('title', 'Home page')

@section('content')
    <x-frontend.slider></x-frontend.slider>

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
                <div class="col-lg-5 col-md-6  secpaddlf">
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
                <div class="col-lg-5 col-lg-offset-2 col-md-6 quofrm1  secpaddlf">
                    <div class="fh-section-title clearfix  text-left version-dark paddbtm40">
                        <h2>Send you request</h2>
                    </div>
                    <form>
                        <div class="fh-form-1 fh-form">
                            <div class="row fh-form-row">
                                <div class="col-md-6 col-xs-12 col-sm-12">
                                    <p class="field">
                                        <select>
                                            <option value="Services">Services</option>
                                            <option value="Services 1">Services 1</option>
                                            <option value="Services 2">Services 2</option>
                                        </select>
                                    </p>
                                </div>
                                <div class="col-md-6 col-xs-12 col-sm-12">
                                    <p class="field">
                                        <input name="delivery-city" value="" placeholder="Delivery City*" type="text">
                                    </p>
                                </div>
                                <div class="col-md-6 col-xs-12 col-sm-12">
                                    <p class="field">
                                        <input name="distance" value="" placeholder="Distance*" type="text">
                                    </p>
                                </div>
                                <div class="col-md-6 col-xs-12 col-sm-12">
                                    <p class="field">
                                        <input name="weight" value="" placeholder="Weight*" type="text">
                                    </p>
                                </div>
                                <div class="col-md-6 col-xs-12 col-sm-12">
                                    <p class="field">
                                        <input name="your-name" value="" placeholder="Name*" type="text">
                                    </p>
                                </div>
                                <div class="col-md-6 col-xs-12 col-sm-12">
                                    <p class="field">
                                        <input name="your-email" value="" placeholder="Email*" type="email">
                                    </p>
                                </div>
                                <div class="col-md-12 col-xs-12 col-sm-12">
                                    <p class="field single-field">
                                        <textarea cols="40" placeholder="Message*"></textarea>
                                    </p>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <p class="field submit">
                                        <input value="Submit" class="fh-btn" type="submit">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="partener-1 bluebg">
        <div class="container">
            <div class="fh-partner clearfix">
                <div class="list-item slide-partener">
                    <div class="partner-item">
                        <div class="partner-content">
                            <a href="#" target="_self"><img alt="1764" src="{{asset('frontend/image/partner-4.png')}}"></a>
                        </div>
                    </div>
                    <div class="partner-item">
                        <div class="partner-content">
                            <a href="#" target="_self"><img alt="1763" src="{{asset('frontend/image/partner-4.png')}}"></a>
                        </div>
                    </div>
                    <div class="partner-item">
                        <div class="partner-content">
                            <a href="#" target="_self"><img alt="1762" src="{{asset('frontend/image/partner-4.png')}}"></a>
                        </div>
                    </div>
                    <div class="partner-item">
                        <div class="partner-content">
                            <a href="#" target="_self"><img alt="1761" src="{{asset('frontend/image/partner-4.png')}}"></a>
                        </div>
                    </div>
                    <div class="partner-item">
                        <div class="partner-content">
                            <a href="#" target="_self"><img alt="1765" src="{{asset('frontend/image/partner-4.png')}}"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')

@endsection

@section('js')

@endsection
