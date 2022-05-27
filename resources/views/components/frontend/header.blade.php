<div id="topbar" class="topbar">
    <div class="container">
        <div class="topbar-left topbar-widgets text-left">
            <div id="cargo-office-location-widget-2" class="widget cargo-office-location-widget">
                <div class="office-location clearfix">
                    <select class="selectpicker" data-width="fit" onchange="change_local_language(this, '{{route('set_locale_language', '')}}')">
                        @foreach(Config::get('languages') as $local_language)
                            <option value="{{$local_language}}" @if(App::getLocale() === Str::lower($local_language)) selected @endif data-content='<i class="flaticon-globe "></i> {{$local_language}}'>{{$local_language}}</option>
                        @endforeach
                    </select>
                    <ul class="topbar-office active">
                        <li><i class="flaticon-telephone" aria-hidden="true"></i>{{$settings->phone}}</li>
                        <li><i class="flaticon-web" aria-hidden="true"></i>{{$settings->email}}</li>
                        <li><i class="flaticon-pin" aria-hidden="true"></i>{{$settings->address}}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="topbar-right topbar-widgets text-right">
            <div class="widget cargohub-social-links-widget">
                <div class="list-social style-1">
                    @foreach($socials as $social)
                        <a href="{{$social->url}}" target="_blank"><i class="{{$social->icon}}"></i></a>
                    @endforeach
                </div>
            </div>
{{--            <div class="widget cargo-search-widget">--}}
{{--                <div class="topbar-search topbar-search-1">--}}
{{--                    <a href="#" class="toggle-search" id="toggle-search"><i class="fa fa-search"--}}
{{--                                                                            aria-hidden="true"></i></a>--}}
{{--                    <form class="search-form" action="#">--}}
{{--                        <i class="fa fa-search" aria-hidden="true"></i>--}}
{{--                        <input type="search" class="search-field" placeholder="Search..." value="">--}}
{{--                        <input type="submit" class="search-submit" value="Search">--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</div>

<header id="masthead" class="site-header clearfix">
    <div class="header-main clearfix">
        <div class="container mobile_relative">
            <div class="row">
                <div class="site-logo col-md-3 col-sm-6 col-xs-6">
                    <a href="{{route('home')}}" class="logo">
                        <img src="{{$settings->logo}}" alt="{{$settings->title}}" class="logo-light show-logo">
                        <img src="{{$settings->logo}}" alt="{{$settings->title}}" class="logo-dark hide-logo">
                    </a>
                    <h1 class="site-title"><a href="{{route('home')}}">{{$settings->title}}</a></h1>
                    <h2 class="site-description">{{$settings->title}}</h2>
                </div>
                <x-frontend.menu-bar></x-frontend.menu-bar>
            </div>
            <a href="#" class="navbar-toggle">
                <span class="navbar-icon">
                    <span class="navbars-line"></span>
                </span>
            </a>
        </div>
    </div>
</header>
