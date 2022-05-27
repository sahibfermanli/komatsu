<div id="topbar" class="topbar">
    <div class="container">
        <div class="topbar-left topbar-widgets text-left">
            <div id="cargo-office-location-widget-2" class="widget cargo-office-location-widget">
                <div class="office-location clearfix">
                    <div class="office-switcher"><i class="flaticon-globe "></i>
                        <a class="current-office" href="#">EN</a>
                        <ul>
                            <li>EN</li>
                            <li>AZ</li>
                            <li>RU</li>
                        </ul>
                    </div>
                    <ul class="topbar-office active">
                        <li><i class="flaticon-telephone" aria-hidden="true"></i>Phone +994 12 562 43 37</li>
                        <li><i class="flaticon-web" aria-hidden="true"></i> office@komatsu.az</li>
                        <li><i class="flaticon-pin" aria-hidden="true"></i>Aliyar Aliyev str., 26A, Baku, Azerbaijan
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="topbar-right topbar-widgets text-right">
            <div class="widget cargohub-social-links-widget">
                <div class="list-social style-1">
                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-skype"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
            <div class="widget cargo-search-widget">
                <div class="topbar-search topbar-search-1">
                    <a href="#" class="toggle-search" id="toggle-search"><i class="fa fa-search"
                                                                            aria-hidden="true"></i></a>
                    <form class="search-form" action="#">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <input type="search" class="search-field" placeholder="Search..." value="">
                        <input type="submit" class="search-submit" value="Search">
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<header id="masthead" class="site-header clearfix">
    <div class="header-main clearfix">
        <div class="container mobile_relative">
            <div class="row">
                <div class="site-logo col-md-3 col-sm-6 col-xs-6">
                    <a href="index.html" class="logo">
                        <img src="{{asset('frontend/image/logo.png')}}" alt="CargoHub" class="logo-light show-logo">
                        <img src="{{asset('frontend/image/logo.png')}}" alt="CargoHub" class="logo-dark hide-logo">
                    </a>
                    <h1 class="site-title"><a href="#">KOMATSU</a></h1>
                    <h2 class="site-description">Just another Steel Themes Sites site</h2>
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
