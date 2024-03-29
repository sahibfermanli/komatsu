@extends('frontend.app')

@section('title', __('menu.sub_categories'))

@section('content')
    <div class="page-header title-area">
        <div class="header-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h1 class="page-title">@lang('menu.sub_categories')</h1>
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
                            <a class="home" href="{{route('categories.index')}}"><span>@lang('menu.categories')</span></a>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span>@lang('menu.sub_categories')</span>
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
                                @foreach($sub_categories as $sub_category)
                                    <div class="item-service  col-xs-12 col-sm-6 col-md-6">
                                        <div class="service-content">
                                            <div class="entry-thumbnail">
                                                <a class="link" href="{{route('categories.products.index', $sub_category->slug)}}"></a>
                                                <a href="{{route('categories.products.index', $sub_category->slug)}}"><span class="icon"><i
                                                            class="fa fa-long-arrow-right"
                                                            aria-hidden="true"></i></span></a>
                                                <img src="{{$sub_category->image}}" alt="{{$sub_category->name}}">
                                            </div>
                                            <div class="summary">
                                                <h2 class="entry-title text-center"><a href="{{route('categories.products.index', $sub_category->slug)}}">{{$sub_category->name}}</a></h2>
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
