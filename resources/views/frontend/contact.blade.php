@extends('frontend.app')

@section('title', 'Contact')

@section('content')
    <div class="page-header title-area">
        <div class="header-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h1 class="page-title">Contact</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12 site-breadcrumb">
                        <nav class="breadcrumb">
                            <a class="home" href="{{route('home')}}"><span>Home</span></a>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span>Contact</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="contactpagesec secpadd">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="fh-section-title clearfix f25 text-left version-dark paddbtm40">
                        <h2>Contact Details</h2>
                    </div>
                    <p class="margbtm30">If you have any questions about what we offer for consumers or for business,
                        you can always email us or call us via the below details. We’ll reply within 24 hours.</p>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="fh-contact-box type-address "><i class="flaticon-pin"></i>
                                <h4 class="box-title">Visit our office</h4>
                                <div class="desc">
                                    <p>{{$settings->address}}</p>
                                </div>
                            </div>
                            <div class="fh-contact-box type-email "><i class="flaticon-business"></i>
                                <h4 class="box-title">Mail Us at</h4>
                                <div class="desc">
                                    <p>{{$settings->email}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="fh-contact-box type-phone "><i class="flaticon-phone-call "></i>
                                <h4 class="box-title">Call us on</h4>
                                <div class="desc">
                                    <p>Office: {{$settings->phone}}</p>
                                </div>
                            </div>
                            <div class="fh-contact-box type-social "><i class="flaticon-share"></i>
                                <h4 class="box-title">We are social</h4>
                                <ul class="clearfix">
                                    @foreach($socials as $social)
                                        <li class="{{$social->name}}">
                                            <a href="{{$social->url}}" target="_blank">
                                                <i class="{{$social->icon}}"></i>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="opening-hours vc_opening-hours">
                        <h3>WORKING HOURS</h3>
                        <p>We look forward to seeing you</p>
                        <ul>
                            <li>Monday <span class="hour">9:00 am – 17.00 pm</span></li>
                            <li>Tuesday<span class="hour">9:00 am – 18.00 pm</span></li>
                            <li>Wednesday <span class="hour">9:00 am – 18.00 pm</span></li>
                            <li>Thurs &amp; Friday<span class="hour">10:00 am – 16.00 pm</span></li>
                            <li>Sat &amp; Sunday <span class="hour main-color">Closed</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contactpagform graybg secpadd">
        <div class="container">
            <div class="fh-section-title clearfix f25 text-center version-dark paddbtm40">
                <h2>Leave Your Message</h2>
            </div>
            <p class="paddbtm40 text-center">If you have any questions about the services we provide simply use the form
                below. We try and respond to all
                <br>queries and comments within 24 hours.</p>
            <form method="post" action="" id="contact-form" novalidate="novalidate">
                <div class="fh-form fh-form-3">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p class="field">
                                <input name="name" placeholder="Your Name*" type="text">
                            </p>
                            <p class="field">
                                <input name="email" placeholder="Email Address*" type="email">
                            </p>
                            <p class="field">
                                <input name="phone" placeholder="Phone" type="text">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p class="field single-field">
                                <textarea name="message" cols="40" rows="10" placeholder="Your Message..."></textarea>
                            </p>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p class="field submit">
                                <button class="fh-btn" type="submit">Submit</button>
                            </p>
                        </div>
                        <div id="loading" style="display:none"><img src="{{asset('frontend/images/ajax-loader.png')}}" alt="loading"></div>
                        <div class="contact-form-message"></div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <div class="google-map-area">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3033.135347609186!2d49.6954218!3d40.5164994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x403086697c88e45d%3A0x135bcc180479d1bc!2sAzequip%20%26%20Deposist%20LLC!5e0!3m2!1str!2s!4v1652360950919!5m2!1str!2s"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection

@section('css')

@endsection

@section('js')

@endsection
