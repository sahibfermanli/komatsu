<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@if(View::hasSection('title'))@yield('title')@else{{$settings->title ?? ''}}@endif</title>
    <!-- Stylesheets -->
    <!-- bootstrap v3.3.6 css -->
    <link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet">
    <!-- font-awesome css -->
    <link href="{{asset('frontend/css/font-awesome.css')}}" rel="stylesheet">
    <!-- flaticon css -->
    <link href="{{asset('frontend/css/flaticon.css')}}" rel="stylesheet">

    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
    <!-- owl.carousel css -->
    <link href="{{asset('frontend/css/owl.css')}}" rel="stylesheet">
    <!-- fancybox css -->
    <link href="{{asset('frontend/css/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/hover.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/fronten.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/style.css?ver=1.1')}}" rel="stylesheet">    <!-- switcher css -->
    <link href="{{asset('frontend/css/switcher.css')}}" rel="stylesheet">
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/navigation.css')}}">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{$settings->meta_description ?? ''}}" />
    <meta name="og:description" content="{{$settings->meta_description ?? ''}}" />
    <meta name="keywords" content="{{$settings->meta_keywords ?? ''}}">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    @yield('css')
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]>
    <script src="{{asset('frontend/js/respond.js')}}"></script><![endif]-->
</head>

<body class="home header-transparent  header-sticky header-v1 hide-topbar-mobile">
<div id="page">

    <!-- Preloader-->
    <div class="preloader"></div>

    <div id="fh-header-minimized" class="fh-header-minimized fh-header-v1"></div>

    <x-frontend.header></x-frontend.header>

    @yield('content')

    <x-frontend.footer></x-frontend.footer>
</div>

<x-frontend.menu-bar-mobile></x-frontend.menu-bar-mobile>

<a id="scroll-top" class="backtotop" href="#page-top"><i class="fa fa-angle-up"></i></a>


<script src="{{asset('frontend/js/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('frontend/js/owl.js')}}"></script>
<script src="{{asset('frontend/js/validate.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/slideanims.min.js')}}"></script>
<script src="{{asset('frontend/js/scripts.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="{{asset('frontend/js/script.js?ver=1.1')}}"></script>
@yield('js')
</body>
</html>
