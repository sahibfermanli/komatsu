<div class="site-menu col-md-9 col-sm-6 col-xs-6">
    <nav id="site-navigation" class="main-nav primary-nav nav">
        <ul class="menu">
            <li><a href="{{route("home")}}">Home</a></li>
            <li class=""><a href="#">About us</a></li>
            <li class="has-children"><a href="" class="dropdown-toggle">PRODUCTS</a>
                <ul class="sub-menu">
                    @foreach($categories as $category)
                        <li><a href="">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </li>
            <li class=""><a href="#">Services</a></li>

            <li><a href="">Contact</a></li>
{{--            <li class="extra-menu-item menu-item-button-link">--}}
{{--                <a href="" class="fh-btn btn">Send Email</a>--}}
{{--            </li>--}}
        </ul>
    </nav>
</div>
