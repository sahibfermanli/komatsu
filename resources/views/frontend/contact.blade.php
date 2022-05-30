@extends('frontend.app')

@section('title', __('menu.contact'))

@section('content')
    <div class="page-header title-area">
        <div class="header-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h1 class="page-title">@lang('menu.contact')</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12 site-breadcrumb">
                        <nav class="breadcrumb">
                            <a class="home" href="{{route('home')}}"><span>@lang('menu.home')</span></a>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span>@lang('menu.contact')</span>
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
                        <h2>@lang('contact.title')</h2>
                    </div>
                    <p class="margbtm30">@lang('contact.description')</p>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="fh-contact-box type-address "><i class="flaticon-pin"></i>
                                <h4 class="box-title">@lang('contact.visit_our_office')</h4>
                                <div class="desc">
                                    <p>{{$settings->address}}</p>
                                </div>
                            </div>
                            <div class="fh-contact-box type-email "><i class="flaticon-business"></i>
                                <h4 class="box-title">@lang('contact.mail')</h4>
                                <div class="desc">
                                    <p>{{$settings->email}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="fh-contact-box type-phone "><i class="flaticon-phone-call "></i>
                                <h4 class="box-title">@lang('contact.phone')</h4>
                                <div class="desc">
                                    <p>{{$settings->phone}}</p>
                                </div>
                            </div>
                            <div class="fh-contact-box type-social "><i class="flaticon-share"></i>
                                <h4 class="box-title">@lang('contact.social')</h4>
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
                        <h3>@lang('contact.working_hours')</h3>
                        <p>@lang('contact.working_hours_desc')</p>
                        <ul>
                            <li>@lang('contact.monday') <span class="hour">9:00 am – 17.00 pm</span></li>
                            <li>@lang('contact.tuesday')<span class="hour">9:00 am – 18.00 pm</span></li>
                            <li>@lang('contact.wednesday') <span class="hour">9:00 am – 18.00 pm</span></li>
                            <li>@lang('contact.thursday') &amp; @lang('contact.friday')<span class="hour">10:00 am – 16.00 pm</span></li>
                            <li>@lang('contact.saturday') &amp; @lang('contact.sunday') <span class="hour main-color">@lang('contact.closed')</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contactpagform graybg secpadd">
        <div class="container">
            <div class="fh-section-title clearfix f25 text-center version-dark paddbtm40">
                <h2>@lang('message.title')</h2>
            </div>
            <p class="paddbtm40 text-center">@lang('message.description')</p>
            <div id="contact-form">
                <div class="fh-form fh-form-3">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p class="field">
                                <input id="full_name" placeholder="@lang('message.full_name')*" type="text" required maxlength="100">
                            </p>
                            <p class="field">
                                <input id="email" placeholder="@lang('message.email')*" type="email" required maxlength="100">
                            </p>
                            <p class="field">
                                <input id="phone" placeholder="@lang('message.phone')" type="text" required maxlength="20">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p class="field single-field">
                                <textarea id="message" cols="40" rows="10" required maxlength="1000" placeholder="@lang('message.message')..."></textarea>
                            </p>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p class="field submit">
                                <button class="fh-btn" type="button" onclick="send_data('{{route('contact.send_message')}}');">@lang('message.submit')</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
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
    <link rel="stylesheet" href="{{asset("css/sweetalert2.min.css")}}">
@endsection

@section('js')
    <script src="{{asset('js/axios.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/ajax.js')}}"></script>
    <script src="{{asset("js/sweetalert2.min.js")}}"></script>
    <script src="{{asset("frontend/js/ajax/message.js")}}"></script>
@endsection
