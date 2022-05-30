<div class="col-md-3">
    <div class="widget services-menu-widget">
        <h4 class="widget-title">@lang('categories.our_products')</h4>
        <ul class="menu service-menu">
            <li><a href="{{route("categories.index")}}">@lang('categories.see_all_categories')</a></li>
            @foreach($categories as $category)
                @if(count($category->sub_categories) > 0)
                    <li class="menu-item @if(Request::route('category') === $category->slug) current-menu-item @endif">
                        <a class="dropdown-toggle">{{$category->name}}</a>
                    </li>
                    <ul class="sub-menu " style="display: none">
                        @foreach($category->sub_categories as $sub_categories_for_menu)
                            <li class="menu-item"><a href="{{route('categories.products.index', $sub_categories_for_menu->slug)}}">{{$sub_categories_for_menu->name}}</a></li>
                        @endforeach
                    </ul>
                @else
                    <li class="menu-item @if(Request::route('category') === $category->slug) current-menu-item @endif"><a
                            href="{{route('categories.products.index', $category->slug)}}">{{$category->name}}</a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>

    <div class="widget_text widget widget_custom_html">
        <h4 class="widget-title">@lang('categories.our_brochures')</h4>
        <div class="textwidget custom-html-widget">
            <div class="download">
                <div class="item-download">
                    <a href="#" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Service
                        Brochure.Pdf</a>
                </div>
                <div class="item-download">
                    <a href="#" target="_blank"><i class="fa fa-file-word-o" aria-hidden="true"></i>About
                        Company.Doc</a>
                </div>
            </div>
        </div>
    </div>
</div>
