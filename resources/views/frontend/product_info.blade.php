@extends('frontend.app')

@section('title', $product->name)

@section('content')
    <div class="page-header title-area">
        <div class="header-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h1 class="page-title">{{$product->name}}</h1>
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
                            <a class="home" href="{{route('categories.index')}}"><span>Categories</span></a>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <a class="home"
                               href="{{route('categories.products.index', Request::route('category'))}}"><span>Products</span></a>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span>{{$product->name}}</span>
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
                    <div class="servdtlimg margbtm30">
                        <img src="{{$product->image}}" alt="{{$product->name}}">
                    </div>
                    <div class="row paddsec">
                        <div class="col-md-6">
                            <div class="abotinforgt">
                                <div class="fh-section-title clearfix f25  text-left version-dark paddbtm40">
                                    <h2>@lang('products.description')</h2>
                                </div>
                                <table class="tr_btm">
                                    <tbody>
                                    <tr>
                                        <td class="width_300px">@lang('products.model')</td>
                                        <td class="txt_bold">{{$product->model}}</td>
                                    </tr>
                                    <tr>
                                        <td class="width_300px">@lang('products.capacity')</td>
                                        <td class="txt_bold">{{$product->capacity}}</td>
                                    </tr>
                                    <tr>
                                        <td class="width_300px">@lang('products.front')</td>
                                        <td class="txt_bold">{{$product->front}}</td>
                                    </tr>
                                    <tr>
                                        <td class="width_300px">@lang('products.travel_speed')</td>
                                        <td class="txt_bold">{{$product->travel_speed}}</td>
                                    </tr>
                                    <tr>
                                        <td class="width_300px">@lang('products.lifting_speed')</td>
                                        <td class="txt_bold">{{$product->lifting_speed}}</td>
                                    </tr>
                                    <tr>
                                        <td class="width_300px">@lang('products.outside_turning_radius')</td>
                                        <td class="txt_bold">{{$product->outside_turning_radius}}</td>
                                    </tr>
                                    <tr>
                                        <td class="width_300px">@lang('products.operating_weight')</td>
                                        <td class="txt_bold">{{$product->operating_weight}}</td>
                                    </tr>
                                    <tr>
                                        <td class="width_300px">@lang('products.engine_power')</td>
                                        <td class="txt_bold">{{$product->engine_power}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <hr class="margtb40">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')

@endsection

@section('js')

@endsection
