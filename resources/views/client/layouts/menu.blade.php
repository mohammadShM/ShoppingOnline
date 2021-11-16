<div class="container">
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li><a class="home_link" title="خانه" href="/">خانه</a></li>
            {{--            @foreach ($categories as $category)--}}
            {{--                @if ($category->children->count() > 0)--}}
            {{--                    <li class="dropdown"><a href="#">{{$category->title_fa}}</a>--}}
            {{--                        <div class="dropdown-menu">--}}
            {{--                            <ul>--}}
            {{--                                @foreach($category->children as $categoryChildren)--}}
            {{--                                    <li><a href="#"> {{$categoryChildren->title_fa}}--}}
            {{--                                            <span> @if ($categoryChildren->children->count() > 0)&rsaquo;@endif</span></a>--}}
            {{--                                        @if ($categoryChildren->children->count() > 0)--}}
            {{--                                            <div class="dropdown-menu">--}}
            {{--                                                <ul>--}}
            {{--                                                    @foreach($categoryChildren->children as $subCategory)--}}
            {{--                                                        <li><a href="#">{{ $subCategory->title_fa }} </a></li>--}}
            {{--                                                    @endforeach--}}
            {{--                                                </ul>--}}
            {{--                                            </div>--}}
            {{--                                        @endif--}}
            {{--                                    </li>--}}
            {{--                                @endforeach--}}
            {{--                            </ul>--}}
            {{--                        </div>--}}
            {{--                    </li>--}}
            {{--                @else--}}
            {{--                    <li><a class="home_link" title="{{$category->title_fa}}" href="#">{{$category->title_fa}}</a></li>--}}
            {{--                @endif--}}
            {{--            @endforeach--}}
            <li class="mega-menu dropdown sub"><a>دسته ها</a>
                <span class="submore"></span>
                <div class="dropdown-menu" style="margin-left: -1047.87px; display: none;">
                    @foreach ($categories as $category)
                        <div class="column col-lg-2 col-md-3"><a href="#">{{$category->title_fa}}</a>
                            @if ($category->children->count() > 0)
                                <span class="submore"></span>
                            @endif
                            <div>
                                <ul>
                                    @foreach ($category->children as $childrenCategory)
                                        <li><a href="#">{{$childrenCategory->title_fa}}
                                                @if ($childrenCategory->children->count() > 0)<span>›</span> @endif</a>
                                            @if ($childrenCategory->children->count() > 0)
                                                <span class="submore"></span>
                                                <div class="dropdown-menu" style="display: none;">
                                                    <ul>
                                                        @foreach ($childrenCategory->children as $subMenu)
                                                            <li><a href="#">{{$subMenu->title_fa}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endforeach
                    <div class="clearfix visible-lg-block visible-md-block"></div>
                </div>
            </li>
            <li class="menu_brands dropdown"><a href="#">برند ها</a>
                <div class="dropdown-menu">
                    @foreach ($brands as $brand)
                        <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                    src="{{asset(str_ireplace('public', 'storage', $brand->image))}}"
                                    title="{{$brand->name}}" alt="{{$brand->name}}"
                                    width="50" height="50"/>
                            </a><a href="#">{{$brand->name}}</a></div>
                    @endforeach
                </div>
            </li>
            <li class="dropdown wrap_custom_block hidden-sm hidden-xs"><a>بلاک سفارشی</a>
                <div class="dropdown-menu custom_block">
                    <ul>
                        <li>
                            <table>
                                <tbody>
                                <tr>
                                    <td><img alt="" src="{{asset('./client/image/banner/cms-block.jpg')}}"></td>
                                    <td><img alt="" src="{{asset('./client/image/banner/responsive.jpg')}}"></td>
                                    <td><img alt="" src="{{asset('./client/image/banner/cms-block.jpg')}}"></td>
                                </tr>
                                <tr>
                                    <td><h4>بلاک های محتوا</h4></td>
                                    <td><h4>قالب واکنش گرا</h4></td>
                                    <td><h4>پشتیبانی ویژه</h4></td>
                                </tr>
                                <tr>
                                    <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری
                                        را در آن قرار دهید.
                                    </td>
                                    <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری
                                        را در آن قرار دهید.
                                    </td>
                                    <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری
                                        را در آن قرار دهید.
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong><a class="btn btn-primary btn-sm" href="#">ادامه مطلب</a></strong>
                                    </td>
                                    <td><strong><a class="btn btn-primary btn-sm" href="#">ادامه مطلب</a></strong>
                                    </td>
                                    <td><strong><a class="btn btn-primary btn-sm" href="#">ادامه مطلب</a></strong>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="dropdown information-link"><a>برگه ها</a>
                <div class="dropdown-menu">
                    <ul>
                        <li><a href="#">ورود</a></li>
                        <li><a href="#">ثبت نام</a></li>
                        <li><a href="#">دسته بندی (شبکه/لیست)</a></li>
                        <li><a href="#">محصولات</a></li>
                        <li><a href="#">سبد خرید</a></li>
                        <li><a href="#">تسویه حساب</a></li>
                        <li><a href="#">مقایسه</a></li>
                        <li><a href="#">لیست آرزو</a></li>
                        <li><a href="#">جستجو</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">درباره ما</a></li>
                        <li><a href="#">404</a></li>
                        <li><a href="#">عناصر</a></li>
                        <li><a href="#">سوالات متداول</a></li>
                        <li><a href="#">نقشه سایت</a></li>
                        <li><a href="#">تماس با ما</a></li>
                    </ul>
                </div>
            </li>
            <li class="custom-link-right"><a href="#" target="_blank"> همین حالا بخرید!</a></li>
        </ul>
    </div>
</div>
