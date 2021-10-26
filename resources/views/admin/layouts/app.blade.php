<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0;">
    <title>Panel</title>
    <link rel="stylesheet" href="{{asset('./admin/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('./admin/css/responsive_991.css')}}" media="(max-width:991px)">
    <link rel="stylesheet" href="{{asset('./admin/css/responsive_768.css')}}" media="(max-width:768px)">
    <link rel="stylesheet" href="{{asset('./admin/css/font.css')}}">
</head>
<body>
<div class="sidebar__nav border-top border-left  ">
    <span class="bars d-none padding-0-18"></span>
    <a class="header__logo  d-none" href=""></a>
    <div class="profile__info border cursor-pointer text-center">
        <div class="avatar__img"><img src="{{asset('admin/img/pro.jpg')}}" class="avatar___img" alt="">
            <input type="file" accept="image/*" class="hidden avatar-img__input">
            <div class="v-dialog__container" style="display: block;"></div>
            <div class="box__camera default__avatar"></div>
        </div>
        <span class="profile__name">کاربر : احمد محمدی</span></div>


    <ul>
        <li class="item-li i-dashboard is-active"><a href="#">پیشخوان</a></li>
        <li class="item-li i-courses "><a href="#">دوره ها</a></li>
        <li class="item-li i-users"><a href="#"> کاربران</a></li>
        <li class="item-li i-categories"><a href="#">دسته بندی ها</a></li>
        <li class="item-li i-slideshow"><a href="#">اسلایدشو</a></li>
        <li class="item-li i-banners"><a href="#">بنر ها</a></li>
        <li class="item-li i-articles"><a href="#">مقالات</a></li>
        <li class="item-li i-ads"><a href="#">تبلیغات</a></li>
        <li class="item-li i-comments"><a href="#"> نظرات</a></li>
        <li class="item-li i-tickets"><a href="#"> تیکت ها</a></li>
        <li class="item-li i-discounts"><a href="#">تخفیف ها</a></li>
        <li class="item-li i-transactions"><a href="#">تراکنش ها</a></li>
        <li class="item-li i-checkouts"><a href="#">تسویه حساب ها</a></li>
        <li class="item-li i-checkout__request "><a href="#">درخواست تسویه </a></li>
        <li class="item-li i-my__purchases"><a href="#">خرید های من</a></li>
        <li class="item-li i-notification__management"><a href="#">مدیریت اطلاع رسانی</a>
        </li>
        <li class="item-li i-user__inforamtion"><a href="#">اطلاعات کاربری</a></li>
    </ul>

</div>
<div class="content">
    <div class="header d-flex item-center bg-white width-100 border-bottom padding-12-30">
        <div class="header__right d-flex flex-grow-1 item-center">
            <span class="bars"></span>
            <a class="header__logo" href=""></a>
        </div>
        <div class="header__left d-flex flex-end item-center margin-top-2">
            <span class="account-balance font-size-12"></span>
            <div class="notification margin-15">
                <a class="notification__icon"></a>
                <div class="dropdown__notification">
                    <div class="content__notification">
                        <span class="font-size-13">موردی برای نمایش وجود ندارد</span>
                    </div>
                </div>
            </div>
            <a href="" class="logout" title="خروج"></a>
        </div>
    </div>
    <div class="breadcrumb">
        <ul>
            <li><a href="/" title="پیشخوان">پیشخوان</a></li>
        </ul>
    </div>
</div>
</body>
<script src="{{asset('./admin/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('./admin/js/js.js')}}"></script>
</html>
