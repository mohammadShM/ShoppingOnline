<div class="container">
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li><a class="home_link" title="خانه" href="/">خانه</a></li>
            @foreach ($categories as $category)
                @if ($category->children->count() > 0)
                    <li class="dropdown"><a href="#">{{$category->title_fa}}</a>
                        <div class="dropdown-menu">
                            <ul>
                                @foreach($category->children as $categoryChildren)
                                    <li><a href="#"> {{$categoryChildren->title_fa}}
                                            <span> @if ($categoryChildren->children->count() > 0)&rsaquo;@endif</span></a>
                                        @if ($categoryChildren->children->count() > 0)
                                            <div class="dropdown-menu">
                                                <ul>
                                                    @foreach($categoryChildren->children as $subCategory)
                                                        <li><a href="#">{{ $subCategory->title_fa }} </a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                @else
                    <li><a class="home_link" title="{{$category->title_fa}}" href="#">{{$category->title_fa}}</a></li>
                @endif
            @endforeach
            <li class="menu_brands dropdown"><a href="#">برند ها</a>
                <div class="dropdown-menu">
                    <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                src="{{asset('./client/image/product/apple_logo-60x60.jpg')}}" title="اپل" alt="اپل"/></a><a
                            href="#">اپل</a></div>
                    <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                src="{{asset('./client/image/product/canon_logo-60x60.jpg')}}" title="کنون"
                                alt="کنون"/></a><a
                            href="#">کنون</a></div>
                    <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                src="{{asset('./client/image/product/hp_logo-60x60.jpg')}}" title="اچ پی"
                                alt="اچ پی"/></a><a
                            href="#">اچ
                            پی</a></div>
                    <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                src="{{asset('./client/image/product/htc_logo-60x60.jpg')}}" title="اچ تی سی"
                                alt="اچ تی سی"/></a><a
                            href="#">اچ تی سی</a></div>
                    <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                src="{{asset('./client/image/product/palm_logo-60x60.jpg')}}" title="پالم"
                                alt="پالم"/></a><a
                            href="#">پالم</a></div>
                    <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                src="{{asset('./client/image/product/sony_logo-60x60.jpg')}}" title="سونی"
                                alt="سونی"/></a><a
                            href="#">سونی</a></div>
                    <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                src="{{asset('./client/image/product/canon_logo-60x60.jpg')}}" title="test"
                                alt="test"/></a><a
                            href="#">تست</a></div>
                    <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                src="{{asset('./client/image/product/apple_logo-60x60.jpg')}}" title="test 3"
                                alt="test 3"/></a><a
                            href="#">تست
                            3</a></div>
                    <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                src="{{asset('./client/image/product/canon_logo-60x60.jpg')}}" title="test 5"
                                alt="test 5"/></a><a
                            href="#">تست
                            5</a></div>
                    <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                src="{{asset('./client/image/product/canon_logo-60x60.jpg')}}" title="test 6"
                                alt="test 6"/></a><a
                            href="#">تست
                            6</a></div>
                    <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                src="{{asset('./client/image/product/apple_logo-60x60.jpg')}}" title="test 7"
                                alt="test 7"/></a><a
                            href="#">تست
                            7</a></div>
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
