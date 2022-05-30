@extends('frontend.app')

@section('title', __('menu.about'))

@section('content')
    <div class="page-header title-area">
        <div class="header-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h1 class="page-title">@lang('menu.about')</h1>
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
                            <span>@lang('menu.about')</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="aboutsec-2 secpaddbig">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <div class="abotimglft">
                        <img src="{{asset('frontend/image/about.jpg')}}" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-7 col-sm-6">
                    <div class="abotinforgt">
                        <div class="fh-section-title clearfix  text-left version-dark paddbtm30">
                            <h2>@lang('about.title')</h2>
                        </div>
                        @lang('about.description')
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
