<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
    @include('client.layouts.head_for_me_google_recaptcha')
    <meta charset="UTF-8"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="{{asset('./client/image/favicon.png')}}" rel="icon"/>
    <title> فروشگاه @yield('titleWeb','نمونه')</title>
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
@yield('css-links')
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
                                <li class="email"><a href="mailto:info@marketshop.com">
                                        <i class="fa fa-envelope"></i>info@marketshop.com</a>
                                </li>
                                @auth
                                    <li><a href="{{route('client.likes.wishlist.index')}}">
                                            لیست علاقه مندی ها <b><span id="likes_count">
                                                    {{auth()->user()->likes()->count()}}
                                                </span></b></a></li>
                                @endauth
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
                        @auth
                            <form action="{{route('client.logout')}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" name="logout" value="خروج" class="btn btn-sm btn-danger">
                            </form>
                        @else
                            <ul>
                                <li><a href="{{route('client.register.create')}}">ورود||ثبت نام</a></li>
                            </ul>
                        @endauth
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
                                <span id="cart-total"><sapn id="total_items">@if (\App\Models\Cart::getItms())
                                            <b>{{\App\Models\Cart::totalItems()}}</b>
                                        @else <b>0</b>
                                        @endif</sapn> محصول - <span id="total_price">@if (\App\Models\Cart::getItms())
                                            <b>{{number_format(\App\Models\Cart::totalPrice())}}</b>
                                        @else <b>0</b>
                                        @endif</span> تومان</span>
                            </button>
                            @include('client.layouts.mini-cart')
                        </div>
                    </div>
                    <!-- Mini Cart End-->
                    <!-- جستجو Start-->
                    <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12 inner">
                        <div id="search" class="input-group">
                            <!--suppress HtmlFormInputWithoutLabel -->
                            <input id="filter_search" type="text" name="search" value="" placeholder="جستجو"
                                   class="form-control input-lg"/>
                            <button type="button" class="button-search"><i class="fa fa-search"></i></button>
                            <table class="list-group-item list-group-item-action" style="display: none;">
                                <tbody class="tbody">
                                <!-- ========================= after search show data ========================= -->
                                </tbody>
                            </table>
                            <div class="table-responsive table-responsive-action" style="display: none;">
                                <h6 class="text-center" style="color:white;">تعداد محصول یافت شده :
                                    <span id="total_products"></span></h6>
                            </div>
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
            @include('client.layouts.menu')
        </nav>
        <!-- Main آقایانu End-->
    </div>
