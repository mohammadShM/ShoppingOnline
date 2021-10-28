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
        <li class="item-li i-dashboard {{ request()->is('adminPanel') ? 'is-active' : '' }}">
            <a href="{{route('index')}}">پیشخوان</a></li>
        <li class="item-li i-categories {{ request()->is('adminPanel/category/create') ? 'is-active' : '' }}">
            <a href="{{route('category.create')}}">دسته بندی ها</a></li>
        <li class="item-li i-brand {{ request()->is('adminPanel/brand/create') ? 'is-active' : '' }}">
            <a href="{{route('brand.create')}}">برند ها</a></li>
        {{-- <li class="item-li i-courses "><a href="#">دوره ها</a></li> --}}
        {{-- <li class="item-li i-users"><a href="#"> کاربران</a></li> --}}
        {{-- <li class="item-li i-slideshow"><a href="#">اسلایدشو</a></li> --}}
        {{-- <li class="item-li i-banners"><a href="#">بنر ها</a></li> --}}
        {{-- <li class="item-li i-articles"><a href="#">مقالات</a></li> --}}
        {{-- <li class="item-li i-ads"><a href="#">تبلیغات</a></li> --}}
        {{-- <li class="item-li i-comments"><a href="#"> نظرات</a></li> --}}
        {{-- <li class="item-li i-tickets"><a href="#"> تیکت ها</a></li> --}}
        {{-- <li class="item-li i-discounts"><a href="#">تخفیف ها</a></li> --}}
        {{-- <li class="item-li i-transactions"><a href="#">تراکنش ها</a></li> --}}
        {{-- <li class="item-li i-checkouts"><a href="#">تسویه حساب ها</a></li> --}}
        {{-- <li class="item-li i-checkout__request "><a href="#">درخواست تسویه </a></li> --}}
        {{-- <li class="item-li i-my__purchases"><a href="#">خرید های من</a></li> --}}
        {{-- <li class="item-li i-notification__management"><a href="#">مدیریت اطلاع رسانی</a></li> --}}
        {{-- <li class="item-li i-user__inforamtion"><a href="#">اطلاعات کاربری</a></li> --}}
    </ul>
</div>
