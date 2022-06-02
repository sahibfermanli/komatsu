<div class="footer-widgets widgets-area">
    <div class="contact-widget">
        <div class="container">
            <div class="row">
                <div class="contact col-md-3 col-xs-12 col-sm-12">
                    <a href="{{route('home')}}" class="footer-logo"><img src="{{$settings->logo_footer}}" alt="{{$settings->title}}"></a>
                </div>
                <div class="contact col-md-3 col-xs-12 col-sm-12"><i class="flaticon-signs"></i>
                    <p>@lang('footer.address') :</p>
                    <h4>{{$settings->address}}</h4>
                </div>
                <div class="contact col-md-3 col-xs-12 col-sm-12"><i class="flaticon-phone-call "></i>
                    <p>@lang('footer.phone') :</p>
                    <h4>{{$settings->phone}}</h4>
                </div>
                <div class="contact col-md-3 col-xs-12 col-sm-12"><i class="flaticon-clock-1"></i>
                    <p>@lang('footer.opening_hours') :</p>
                    <h4>@lang('footer.monday_friday'): 8AM – 6PM</h4></div>
            </div>
        </div>
    </div>
    <div class="footer-sidebars">
        <div class="container">
            <div class="row">
                <div class="footer-sidebar footer-1 col-xs-12 col-sm-6 col-md-3">
                    <div class="widget widget_text">
                        <h4 class="widget-title">@lang('footer.about_title')</h4>
                        <div class="textwidget">
                            <p>@lang('footer.about_desc')</p>
                        </div>
                    </div>
                    <div class="widget cargohub-social-links-widget">
                        <div class="list-social style-1">
                            @foreach($socials as $social)
                                <a href="{{$social->url}}" target="_blank"><i class="{{$social->icon}}"></i></a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="footer-sidebar footer-2 col-xs-12 col-sm-6 col-md-3">
                    <div class="widget widget_nav_menu">
                        <h4 class="widget-title">@lang('footer.useful_links')</h4>
                        <div class="menu-service-menu-container">
                            <ul class="menu">
                                <li><a href="{{route("categories.index")}}">@lang('menu.all_categories')</a></li>
                                @foreach($categories as $category)
                                    @if(count($category->sub_categories) > 0)
                                        <li>
                                            <a href="{{route('categories.sub_categories', $category->slug)}}">{{$category->name}}</a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{route('categories.products.index', $category->slug)}}">{{$category->name}}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-sidebar footer-4 col-xs-12 col-sm-6 col-md-6">
                    <div class="widget widget_mc4wp_form_widget">
                        <h4 class="widget-title">  <a class="footer-mail" href="{{route('contact.index')}}">@lang('footer.map')</a></h4>
                        <form>
                            <div class="footform">
                                <div class="fh-form-field">
                                    <div class="subscrib">
                                        <div class="google-map-area">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3033.135347609186!2d49.6954218!3d40.5164994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x403086697c88e45d%3A0x135bcc180479d1bc!2sAzequip%20%26%20Deposist%20LLC!5e0!3m2!1str!2s!4v1652360950919!5m2!1str!2s" width="100%" height="180" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- / MailChimp for WordPress Plugin -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="footer-copyright col-md-6 col-sm-12 col-sx-12">
                <div class="site-info">Copyright @ {{date('Y')}} All Right Reserved | Powered by <a
                        href="https://fermanli.net" target="_blank">www.fermanli.net</a></div>
            </div>
        </div>
    </div>
</footer>
