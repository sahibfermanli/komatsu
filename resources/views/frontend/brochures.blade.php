@extends('frontend.app')

@section('title', __('menu.brochures'))

@section('content')
    <div class="page-header title-area">
        <div class="header-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h1 class="page-title">@lang('menu.brochures')</h1>
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
                            <span>@lang('menu.brochures')</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service_dtl1 secpadd">
        <div class="container">
            <div class="row">
                <x-frontend.categories></x-frontend.categories>

                <div class="col-md-9">
                    <div class="allservsec">
                        <div class="fh-service  style-bordered">
                            <div class="service-list row">
                                @foreach($brochures as $brochure)
                                    <div class="item-service  col-xs-12 col-sm-6 col-md-3">
                                        <div class="service-content">
                                            <div class="entry-thumbnail">
                                                <a target="_blank" class="link" href="{{$brochure->file}}"></a>
                                                <a target="_blank" href="{{$brochure->file}}"><span class="icon"><i
                                                            class="fa fa-long-arrow-right"
                                                            aria-hidden="true"></i></span></a>
                                                <img src="{{$brochure->image}}" alt="{{$brochure->title}}">
                                            </div>
                                            <div class="summary">
                                                <h2 class="entry-title text-center"><a target="_blank" href="{{$brochure->file}}">{{$brochure->title}}</a></h2>
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
    </div>
@endsection

@section('css')

@endsection

@section('js')

@endsection
