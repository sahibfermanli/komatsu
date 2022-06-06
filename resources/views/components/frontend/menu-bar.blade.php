<div class="site-menu col-md-9 col-sm-6 col-xs-6">
    <nav id="site-navigation" class="main-nav primary-nav nav">
        <ul class="menu">
            <li><a href="{{route("home")}}">@lang('menu.home')</a></li>
            <li class=""><a href="{{route("about")}}">@lang('menu.about')</a></li>
            <li class="has-children"><a href="#" class="dropdown-toggle">@lang('menu.products')</a>
                <ul class="sub-menu">
                    <li><a href="{{route("categories.index")}}">@lang('menu.all_categories')</a></li>
                    @foreach($categories as $category)
                        @if(count($category->sub_categories) > 0)
                            <li><a href="{{route('categories.sub_categories', $category->slug)}}">{{$category->name}}</a></li>
                        @else
                            <li><a href="{{route('categories.products.index', $category->slug)}}">{{$category->name}}</a></li>
                        @endif
                    @endforeach
                </ul>
            </li>
            <li><a href="{{route('services')}}">@lang('menu.services')</a></li>
{{--            <li><a href="{{route('brochures')}}">@lang('menu.brochures')</a></li>--}}
            <li><a href="{{route('contact.index')}}">@lang('menu.contact')</a></li>
            <li class="extra-menu-item menu-item-button-link">
                <a href="{{route('contact.index')}}" class="fh-btn btn">@lang('menu.send_email')</a>
            </li>
        </ul>
    </nav>
</div>
