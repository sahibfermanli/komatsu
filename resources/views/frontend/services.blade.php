@extends('frontend.app')

@section('title', 'Services')

@section('content')
    <div class="page-header title-area">
        <div class="header-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h1 class="page-title">Services</h1>
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
                            <span>Services</span>
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

                    <hr class="margtb40">
                    <div class="fh-section-title f20 clearfix  text-left version-dark paddbtm40">
                        <h2>Safety Transportation</h2>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="fh-service-box-2   box-style-1  no-thumb">
                                <div class="box-thumb"></div>
                                <div class="box-wrapper">
                                    <div class="box-header clearfix"><span class="fh-icon"><i
                                                class="flaticon-transport-7"></i></span>
                                        <h4 class="box-title">Full Container Load</h4><span
                                            class="sub-title main-color">Cargo Hub Ocean Direct</span></div>
                                    <div class="box-content">
                                        <p>There anyone who loves or pursue desire to obtain pains of itself, because it
                                            is pain, but occasionally circumstances.</p>
                                        <ul>
                                            <li>Consignee direct delivery</li>
                                            <li>Suitable for all kinds of commodities</li>
                                            <li>Tailored alternatives available</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="fh-service-box-2  box-style-1  no-thumb">
                                <div class="box-thumb"></div>
                                <div class="box-wrapper">
                                    <div class="box-header clearfix"><span class="fh-icon"><i
                                                class="flaticon-transport-10"></i></span>
                                        <h4 class="box-title">Less than Container</h4><span
                                            class="sub-title main-color">Cargo Hub Ocean Direct</span></div>
                                    <div class="box-content">
                                        <p>There anyone who loves or pursue desire to obtain pains of itself, because it
                                            is pain, but occasionally circumstances.</p>
                                        <ul>
                                            <li>Consignee direct delivery</li>
                                            <li>Suitable for all kinds of commodities</li>
                                            <li>Tailored alternatives available</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fh-section-title f20 clearfix  text-left version-dark paddbtm40">
                        <h2>Benefits of Service</h2>
                    </div>
                    <div class="servdtlaccord margbtm40">
                        <div class="panel-group" id="accordion">
                            @foreach($services as $service)
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                               href="#servie{{$service->id}}">
                                                {{$service->name}}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="servie{{$service->id}}" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            {{$service->description}}
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
@endsection

@section('css')

@endsection

@section('js')

@endsection
