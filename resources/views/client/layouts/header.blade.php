<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
    <meta charset="UTF-8"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="{{asset('./client/image/favicon.png')}}" rel="icon"/>
    <title>مارکت شاپ - قالب HTML فروشگاهی</title>
    <meta name="description" content="Responsive and clean html template design for any kind of ecommerce webshop">
    <!-- CSS Part Start-->
    <link rel="stylesheet" type="text/css" href="{{asset('./client/js/bootstrap/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('./client/js/bootstrap/css/bootstrap-rtl.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('./client/css/font-awesome/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('./client/css/stylesheet.css')}}"/>
    <link rel="canonical" href="https://www.onescript.ir"/>
    <link rel="stylesheet" type="text/css" href="{{asset('./client/css/owl.carousel.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('./client/css/owl.transitions.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('./client/css/responsive.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('./client/css/stylesheet-rtl.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('./client/css/responsive-rtl.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('./client/css/stylesheet-skin2.css')}}"/>

    <!-- CSS Part End-->
</head>
<body>
<div class="wrapper-wide">
    <div id="header">
        <!-- Top Bar Start-->
        <nav id="top" class="htop">
            <div class="container">
                <div class="row"><span class="drop-icon visible-sm visible-xs"><i class="fa fa-align-justify"></i></span>
                    <div class="pull-left flip left-top">
                        <div class="links">
                            <ul>
                                <li class="mobile"><i class="fa fa-phone"></i>+21 9898777656</li>
                                <li class="email"><a href="mailto:info@marketshop.com"><i class="fa fa-envelope"></i>info@marketshop.com</a>
                                </li>
                                <li class="wrap_custom_block hidden-sm hidden-xs"><a>بلاک سفارشی<b></b></a>
                                    <div class="dropdown-menu custom_block">
                                        <ul>
                                            <li>
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td><img alt="" src="{{asset('./client/image/banner/cms-block.jpg')}}">
                                                        </td>
                                                        <td><img alt="" src="{{asset('./client/image/banner/responsive.jpg')}}">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h4>بلاک های محتوا</h4></td>
                                                        <td><h4>قالب واکنش گرا</h4></td>
                                                    </tr>
                                                    <tr>
                                                        <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا
                                                            تصویری را در آن قرار دهید.
                                                        </td>
                                                        <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا
                                                            تصویری را در آن قرار دهید.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong><a class="btn btn-default btn-sm" href="#">ادامه
                                                                    مطلب</a></strong></td>
                                                        <td><strong><a class="btn btn-default btn-sm" href="#">ادامه
                                                                    مطلب</a></strong></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="language" class="btn-group">
                            <button class="btn-link dropdown-toggle" data-toggle="dropdown"><span> <img
                                        src="{{asset('./client/image/flags/gb.png')}}"
                                        alt="انگلیسی"
                                        title="انگلیسی">انگلیسی <i
                                        class="fa fa-caret-down"></i></span></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <button class="btn btn-link btn-block language-select" type="button" name="GB"><img
                                            src="{{asset('./client/image/flags/gb.png')}}" alt="انگلیسی" title="انگلیسی"/> انگلیسی
                                    </button>
                                </li>
                                <li>
                                    <button class="btn btn-link btn-block language-select" type="button" name="GB"><img
                                            src="{{asset('./client/image/flags/ar.png')}}" alt="عربی" title="عربی"/> عربی
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div id="currency" class="btn-group">
                            <button class="btn-link dropdown-toggle" data-toggle="dropdown"><span> تومان <i
                                        class="fa fa-caret-down"></i></span></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <button class="currency-select btn btn-link btn-block" type="button" name="EUR">€ Euro
                                    </button>
                                </li>
                                <li>
                                    <button class="currency-select btn btn-link btn-block" type="button" name="GBP">£ Pound
                                        Sterling
                                    </button>
                                </li>
                                <li>
                                    <button class="currency-select btn btn-link btn-block" type="button" name="USD">$ USD</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="top-links" class="nav pull-right flip">
                        <ul>
                            <li><a href="#">ورود</a></li>
                            <li><a href="#">ثبت نام</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Top Bar End-->
        <!-- Header Start-->
        <header class="header-row">
            <div class="container">
                <div class="table-container">
                    <!-- Logo Start -->
                    <div class="col-table-cell col-lg-6 col-md-6 col-sm-12 col-xs-12 inner">
                        <div id="logo"><a href="#"><img class="img-responsive" src="{{asset('./client/image/logo.png')}}"
                                                        title="MarketShop"
                                                        alt="MarketShop"/></a></div>
                    </div>
                    <!-- Logo End -->
                    <!-- Mini Cart Start-->
                    <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div id="cart">
                            <button type="button" data-toggle="dropdown" data-loading-text="بارگذاری ..."
                                    class="heading dropdown-toggle">
                                <span class="cart-icon pull-left flip"></span>
                                <span id="cart-total">2 آیتم - 132000 تومان</span></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td class="text-center"><a href="#"><img class="img-thumbnail"
                                                                                     title="کفش راحتی مردانه"
                                                                                     alt="کفش راحتی مردانه"
                                                                                     src="{{asset('./client/image/product/sony_vaio_1-50x75.jpg')}}"></a>
                                            </td>
                                            <td class="text-left"><a href="#">کفش راحتی مردانه</a></td>
                                            <td class="text-right">x 1</td>
                                            <td class="text-right">32000 تومان</td>
                                            <td class="text-center">
                                                <button class="btn btn-danger btn-xs remove" title="حذف" onClick="" type="button">
                                                    <i class="fa fa-times"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><a href="#"><img class="img-thumbnail"
                                                                                     title="تبلت ایسر" alt="تبلت ایسر"
                                                                                     src="{{asset('./client/image/product/samsung_tab_1-50x75.jpg')}}"></a>
                                            </td>
                                            <td class="text-left"><a href="#">تبلت ایسر</a></td>
                                            <td class="text-right">x 1</td>
                                            <td class="text-right">98000 تومان</td>
                                            <td class="text-center">
                                                <button class="btn btn-danger btn-xs remove" title="حذف" onClick="" type="button">
                                                    <i class="fa fa-times"></i></button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </li>
                                <li>
                                    <div>
                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                <td class="text-right"><strong>جمع کل</strong></td>
                                                <td class="text-right">132000 تومان</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>کسر هدیه</strong></td>
                                                <td class="text-right">4000 تومان</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>مالیات</strong></td>
                                                <td class="text-right">11880 تومان</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>قابل پرداخت</strong></td>
                                                <td class="text-right">139880 تومان</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <p class="checkout"><a href="#" class="btn btn-primary"><i
                                                    class="fa fa-shopping-cart"></i> مشاهده سبد</a>&nbsp;&nbsp;&nbsp;<a
                                                href="#" class="btn btn-primary"><i class="fa fa-share"></i> تسویه
                                                حساب</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mini Cart End-->
                    <!-- جستجو Start-->
                    <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12 inner">
                        <div id="search" class="input-group">
                            <!--suppress HtmlFormInputWithoutLabel -->
                            <input id="filter_name" type="text" name="search" value="" placeholder="جستجو"
                                   class="form-control input-lg"/>
                            <button type="button" class="button-search"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <!-- جستجو End-->
                </div>
            </div>
        </header>
        <!-- Header End-->
        <!-- Main آقایانu Start-->
        <nav id="menu" class="navbar">
            <div class="navbar-header"><span class="visible-xs visible-sm"> منو <b></b></span></div>
            <div class="container">
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a class="home_link" title="خانه" href="#">خانه</a></li>
                        <li class="dropdown"><a href="#">مد و زیبایی</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="#">آقایان <span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="#">زیردسته ها </a></li>
                                                <li><a href="#">زیردسته ها </a></li>
                                                <li><a href="#">زیردسته ها </a></li>
                                                <li><a href="#">زیردسته ها </a></li>
                                                <li><a href="#">زیردسته جدید </a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="#">بانوان</a></li>
                                    <li><a href="#">دخترانه<span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="#">زیردسته ها </a></li>
                                                <li><a href="#">زیردسته جدید</a></li>
                                                <li><a href="#">زیردسته جدید</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="#">پسرانه</a></li>
                                    <li><a href="#">نوزاد</a></li>
                                    <li><a href="#">لوازم <span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="#">زیردسته های جدید</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown"><a href="#">الکترونیکی</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="#">لپ تاپ <span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="#">زیردسته های جدید </a></li>
                                                <li><a href="#">زیردسته های جدید </a></li>
                                                <li><a href="#">زیردسته جدید </a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="#">رومیزی <span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="#">زیردسته های جدید </a></li>
                                                <li><a href="#">زیردسته جدید </a></li>
                                                <li><a href="#">زیردسته جدید </a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="#">دوربین <span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="#">زیردسته های جدید</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="#">موبایل و تبلت <span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="#">زیردسته های جدید</a></li>
                                                <li><a href="#">زیردسته های جدید</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="#">صوتی و تصویری <span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="#">زیردسته های جدید </a></li>
                                                <li><a href="#">زیردسته جدید </a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="#">لوازم خانگی</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown"><a href="#">کفش</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="#">آقایان</a></li>
                                    <li><a href="#">بانوان <span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="#">زیردسته های جدید </a></li>
                                                <li><a href="#">زیردسته ها </a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="#">دخترانه</a></li>
                                    <li><a href="#">پسرانه</a></li>
                                    <li><a href="#">نوزاد</a></li>
                                    <li><a href="#">لوازم <span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="#">زیردسته های جدید</a></li>
                                                <li><a href="#">زیردسته های جدید</a></li>
                                                <li><a href="#">زیردسته ها</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown"><a href="#">ساعت</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="#">ساعت مردانه</a></li>
                                    <li><a href="#">ساعت زنانه</a></li>
                                    <li><a href="#">ساعت بچگانه</a></li>
                                    <li><a href="#">لوازم</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown"><a href="#">زیبایی و سلامت</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="#">عطر و ادکلن</a></li>
                                    <li><a href="#">آرایشی</a></li>
                                    <li><a href="#">ضد آفتاب</a></li>
                                    <li><a href="#">مراقبت از پوست</a></li>
                                    <li><a href="#">مراقبت از چشم</a></li>
                                    <li><a href="#">مراقبت از مو</a></li>
                                </ul>
                            </div>
                        </li>
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
        </nav>
        <!-- Main آقایانu End-->
    </div>
