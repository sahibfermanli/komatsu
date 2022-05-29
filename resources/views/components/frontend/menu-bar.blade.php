<div class="site-menu col-md-9 col-sm-6 col-xs-6">
    <nav id="site-navigation" class="main-nav primary-nav nav">
        <ul class="menu">
            <li><a href="{{route("home")}}">Home</a></li>
            <li class=""><a href="{{route("about")}}">About us</a></li>
            <li class="has-children"><a href="#" class="dropdown-toggle">PRODUCTS</a>
                <ul class="sub-menu">
                    <li><a href="{{route("categories.index")}}">All categories</a></li>
                    @foreach($categories as $category)
                        @if(count($category->sub_categories) > 0)
                            <li><a href="{{route('categories.sub_categories', $category->slug)}}">{{$category->name}}</a></li>
                        @else
                            <li><a href="{{route('categories.products.index', $category->slug)}}">{{$category->name}}</a></li>
                        @endif
                    @endforeach
                </ul>
            </li>
            <li class=""><a href="#">Services</a></li>

            <li><a href="{{route('contact')}}">Contact</a></li>
{{--            <li class="extra-menu-item menu-item-button-link">--}}
{{--                <a href="" class="fh-btn btn">Send Email</a>--}}
{{--            </li>--}}
        </ul>
    </nav>
</div>
