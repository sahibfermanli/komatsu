<div class="primary-mobile-nav header-v1" id="primary-mobile-nav" role="navigation">
    <a href="#" class="close-canvas-mobile-panel">×</a>
    <ul class="menu">
        <li class="current-menu-item"><a href="{{route("home")}}">@lang('menu.home')</a></li>
        <li><a href="{{route("about")}}">@lang('menu.about')</a></li>
        <li class="menu-item-has-children"><a href="projects.html" class="dropdown-toggle">@lang('menu.products')</a>
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
        <li><a href="{{route('brochures')}}">@lang('menu.brochures')</a></li>
        <li><a href="{{route('contact.index')}}">@lang('menu.contact')</a></li>
    </ul>
</div>
