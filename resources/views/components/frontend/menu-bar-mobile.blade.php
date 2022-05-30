<div class="primary-mobile-nav header-v1" id="primary-mobile-nav" role="navigation">
    <a href="#" class="close-canvas-mobile-panel">×</a>
    <ul class="menu">
        <li class="current-menu-item"><a href="{{route("home")}}">Home</a></li>
        <li><a href="{{route("about")}}">About us</a></li>
        <li class="menu-item-has-children"><a href="projects.html" class="dropdown-toggle">PRODUCTS</a>
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
        <li><a href="{{route('services')}}">Services</a></li>
        <li><a href="{{route('contact.index')}}">Contact</a></li>
    </ul>
</div>
