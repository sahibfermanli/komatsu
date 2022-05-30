@extends('frontend.app')

@section('title', __('menu.categories'))

@section('content')
    <div class="page-header title-area">
        <div class="header-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h1 class="page-title">@lang('menu.categories')</h1>
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
                            <span>@lang('menu.categories')</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--services Welcome sec -->
    <div class="servwesec secpadd">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="uthead lftredbrdr">
                        <p>@lang('categories.title')</p>
                    </div>
                    <div class="mdltxtnrow">@lang('categories.title2')</div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <p>@lang('categories.description')</p>
                    <p>@lang('categories.description2')</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Welcome sec   end-->

    <!-- services sec -->
    <div class="allservsec">
        <div class="container">
            <div class="fh-service  style-bordered">
                <div class="service-list row">
                    @foreach($categories as $category)
                        @if(count($category->sub_categories) > 0)
                            @php($route = route('categories.sub_categories', $category->slug))
                        @else
                            @php($route = route('categories.products.index', $category->slug))
                        @endif
                        <div class="item-service  col-xs-12 col-sm-6 col-md-3">
                        <div class="service-content">
                            <div class="entry-thumbnail">
                                <a class="link" href="{{$route}}"></a>
                                <a href="{{$route}}"><span class="icon"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
                                <img src="{{$category->image}}" alt="{{$category->name}}">
                            </div>
                            <div class="summary">
                                <h2 class="entry-title"><a href="{{$route}}">{{$category->name}}</a></h2>
                                <p>{{$category->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- services sec end -->

    <!-- featured sec -->
    <section class="features-1 bluebg">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="frs1box">
                    <div class="fh-icon-box  style-3 version-dark hide-button icon-left">
                        <span class="fh-icon"><i class="flaticon-internet"></i></span>
                        <h4 class="box-title"><span>@lang('categories.fast_worldwide_delivery')</span></h4>
                        <div class="desc">
                            <p>@lang('categories.fast_worldwide_delivery_desc')</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="frs1box">
                    <div class="fh-icon-box  style-3 version-dark hide-button icon-left">
                        <span class="fh-icon"><i class="flaticon-shield"></i></span>
                        <h4 class="box-title"><span>@lang('categories.safe_and_secure_services')</span></h4>
                        <div class="desc">
                            <p>@lang('categories.safe_and_secure_services')</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="frs1box">
                    <div class="fh-icon-box  style-3 version-dark hide-button icon-left">
                        <span class="fh-icon"><i class="flaticon-technology"></i></span>
                        <h4 class="box-title"><span>@lang('categories.customer_support')</span></h4>
                        <div class="desc">
                            <p>@lang('categories.customer_support_desc')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- featured sec end -->

    <!-- about sec-->
    <section class="aboutsec-3 secpadd">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="abotimglft">
                        <img src="{{asset('frontend/image/pro.jpg')}}" alt="Komatsu" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="abotinforgt">
                        <div class="fh-section-title f30 clearfix  text-left version-dark paddbtm30">
                            <h2>@lang('categories.the_complete_solution')</h2>
                        </div>
                        @lang('categories.the_complete_solution_desc')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about end-->

    <!-- Three steps-->
    <section class="three_steps secpadd graybg">
        <div class="container">
            <div class="fh-section-title clearfix f30  text-center version-dark margbtm40">
                <h2>@lang('categories.three_step_processing')</h2>
            </div>
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="fh-icon-box  style-2 version-dark  icon-center  service-process">
                        <span class="fh-icon"><i class="flaticon-box-1"></i></span>
                        <h4 class="box-title"><span>@lang('categories.receive_from_shipper')</span></h4>
                        <div class="desc">
                            <p>@lang('categories.receive_from_shipper_desc')</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="fh-icon-box  style-2 version-dark  icon-center  service-process">
                        <span class="fh-icon"><i class="flaticon-delivery-truck"></i></span>
                        <h4 class="box-title"><span>@lang('categories.safe_secure_shipment')</span></h4>
                        <div class="desc">
                            <p>@lang('categories.safe_secure_shipment_desc')</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="fh-icon-box  style-2 version-dark  icon-center  service-process">
                        <span class="fh-icon"><i class="flaticon-box-2"></i></span>
                        <h4 class="box-title"><span>@lang('categories.handover_to_receiver')</span></h4>
                        <div class="desc">
                            <p>@lang('categories.handover_to_receiver_desc')</p>
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
