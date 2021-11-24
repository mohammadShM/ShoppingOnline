@extends('client.layouts.app')
@section('content')
    <div id="container">
        <div class="container">
            <!-- Breadcrumb Start-->
            <ul class="breadcrumb">
                <li><a href="{{route('client.index')}}"><i class="fa fa-home"></i></a></li>
                <li><a href="{{route('client.category.index',$category)}}">{{$category->title_fa}}</a></li>
            </ul>
            <!-- Breadcrumb End-->
            <div class="row">
                <!--Left Part Start -->
                <aside id="column-left" class="col-sm-3 hidden-xs">
                    <h3 class="subtitle">دسته ها</h3>
                    <div class="box-category">
                        <ul id="cat_accordion">
                            <li><a href="#">مد و زیبایی</a> <span class="down"></span>
                                <ul>
                                    <li><a href="#">آقایان</a> <span class="down"></span>
                                        <ul>
                                            <li><a href="#">زیردسته ها</a></li>
                                            <li><a href="#">زیردسته ها</a></li>
                                            <li><a href="#">زیردسته ها</a></li>
                                            <li><a href="#">زیردسته ها</a></li>
                                            <li><a href="#">زیردسته جدید</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">بانوان</a></li>
                                    <li><a href="#">دخترانه</a> <span class="down"></span>
                                        <ul>
                                            <li><a href="#">زیردسته ها</a></li>
                                            <li><a href="#">زیردسته جدید</a></li>
                                            <li><a href="#">زیردسته جدید</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">پسرانه</a></li>
                                    <li><a href="#">نوزاد</a></li>
                                    <li><a href="#">لوازم</a> <span class="down"></span>
                                        <ul>
                                            <li><a href="#">زیردسته های جدید</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="active" href="#">الکترونیکی</a> <span class="down"></span>
                                <ul style="display:block;">
                                    <li><a href="#">لپ تاپ</a> <span class="down"></span>
                                        <ul>
                                            <li><a href="#">زیردسته های جدید</a></li>
                                            <li><a href="#">زیردسته های جدید</a></li>
                                            <li><a href="#">زیردسته جدید</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">رومیزی</a> <span class="down"></span>
                                        <ul>
                                            <li><a href="#">زیردسته های جدید</a></li>
                                            <li><a href="#">زیردسته جدید</a></li>
                                            <li><a href="#">زیردسته جدید</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">دوربین</a> <span class="down"></span>
                                        <ul>
                                            <li><a href="#">زیردسته های جدید</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">موبایل و تبلت</a> <span class="down"></span>
                                        <ul>
                                            <li><a href="#">زیردسته های جدید</a></li>
                                            <li><a href="#">زیردسته های جدید</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">صوتی و تصویری</a> <span class="down"></span>
                                        <ul>
                                            <li><a href="#">زیردسته های جدید</a></li>
                                            <li><a href="#">زیردسته جدید</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">لوازم خانگی</a></li>
                                </ul>
                            </li>
                            <li><a href="#">کفش</a> <span class="down"></span>
                                <ul>
                                    <li><a href="#">آقایان</a></li>
                                    <li><a href="#">بانوان</a> <span class="down"></span>
                                        <ul>
                                            <li><a href="#">زیردسته های جدید</a></li>
                                            <li><a href="#">زیردسته ها</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">دخترانه</a></li>
                                    <li><a href="#">پسرانه</a></li>
                                    <li><a href="#">نوزاد</a></li>
                                    <li><a href="#">لوازم</a><span class="down"></span>
                                        <ul>
                                            <li><a href="#">زیردسته های جدید</a></li>
                                            <li><a href="#">زیردسته های جدید</a></li>
                                            <li><a href="#">زیردسته ها</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">ساعت</a> <span class="down"></span>
                                <ul>
                                    <li><a href="#">ساعت مردانه</a></li>
                                    <li><a href="#">ساعت زنانه</a></li>
                                    <li><a href="#">ساعت بچگانه</a></li>
                                    <li><a href="#">لوازم</a></li>
                                </ul>
                            </li>
                            <li><a href="#">زیبایی و سلامت</a> <span class="down"></span>
                                <ul>
                                    <li><a href="#">عطر و ادکلن</a></li>
                                    <li><a href="#">آرایشی</a></li>
                                    <li><a href="#">ضد آفتاب</a></li>
                                    <li><a href="#">مراقبت از پوست</a></li>
                                    <li><a href="#">مراقبت از چشم</a></li>
                                    <li><a href="#">مراقبت از مو</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <h3 class="subtitle">پرفروش ها</h3>
                    <div class="side-item">
                        <div class="product-thumb clearfix">
                            <div class="image"><a href="product.html"><img src="image/product/apple_cinema_30-50x75.jpg"
                                                                           alt="تی شرت کتان مردانه" title="تی شرت کتان مردانه"
                                                                           class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">تی شرت کتان مردانه</a></h4>
                                <p class="price"><span class="price-new">110000 تومان</span> <span
                                        class="price-old">122000 تومان</span> <span class="saving">-10%</span></p>
                            </div>
                        </div>
                        <div class="product-thumb clearfix">
                            <div class="image"><a href="product.html"><img src="image/product/iphone_1-50x75.jpg" alt="آیفون 7"
                                                                           title="آیفون 7" class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">آیفون 7</a></h4>
                                <p class="price"> 2200000 تومان </p>
                                <div class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                            </div>
                        </div>
                        <div class="product-thumb clearfix">
                            <div class="image"><a href="product.html"><img src="image/product/macbook_1-50x75.jpg"
                                                                           alt="آیدیا پد یوگا" title="آیدیا پد یوگا"
                                                                           class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">آیدیا پد یوگا</a></h4>
                                <p class="price"> 900000 تومان </p>
                                <div class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                            </div>
                        </div>
                        <div class="product-thumb clearfix">
                            <div class="image"><a href="product.html"><img src="image/product/sony_vaio_1-50x75.jpg"
                                                                           alt="کفش راحتی مردانه" title="کفش راحتی مردانه"
                                                                           class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">کفش راحتی مردانه</a></h4>
                                <p class="price"><span class="price-new">32000 تومان</span> <span class="price-old">12 میلیون تومان</span>
                                    <span class="saving">-25%</span></p>
                                <div class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                            </div>
                        </div>
                        <div class="product-thumb clearfix">
                            <div class="image"><a href="product.html"><img src="image/product/FinePix-Long-Zoom-Camera-50x75.jpg"
                                                                           alt="دوربین فاین پیکس" title="دوربین فاین پیکس"
                                                                           class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">دوربین فاین پیکس</a></h4>
                                <p class="price">122000 تومان</p>
                            </div>
                        </div>
                    </div>
                    <h3 class="subtitle">ویژه</h3>
                    <div class="side-item">
                        <div class="product-thumb clearfix">
                            <div class="image"><a href="product.html"><img src="image/product/macbook_pro_1-50x75.jpg"
                                                                           alt=" کتاب آموزش باغبانی " title=" کتاب آموزش باغبانی "
                                                                           class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">کتاب آموزش باغبانی</a></h4>
                                <p class="price"><span class="price-new">98000 تومان</span> <span
                                        class="price-old">120000 تومان</span> <span class="saving">-26%</span></p>
                            </div>
                        </div>
                        <div class="product-thumb clearfix">
                            <div class="image"><a href="product.html"><img src="image/product/samsung_tab_1-50x75.jpg"
                                                                           alt="تبلت ایسر" title="تبلت ایسر"
                                                                           class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">تبلت ایسر</a></h4>
                                <p class="price"><span class="price-new">98000 تومان</span> <span
                                        class="price-old">240000 تومان</span> <span class="saving">-5%</span></p>
                                <div class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                            </div>
                        </div>
                        <div class="product-thumb clearfix">
                            <div class="image"><a href="product.html"><img src="image/product/apple_cinema_30-50x75.jpg"
                                                                           alt="تی شرت کتان مردانه" title="تی شرت کتان مردانه"
                                                                           class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4>
                                    <a href="http://demo.harnishdesign.net/opencart/marketshop/v1/index.php?route=product/product&amp;product_id=42">تی
                                        شرت کتان مردانه</a></h4>
                                <p class="price"><span class="price-new">110000 تومان</span> <span
                                        class="price-old">122000 تومان</span> <span class="saving">-10%</span></p>
                            </div>
                        </div>
                        <div class="product-thumb clearfix">
                            <div class="image"><a href="product.html"><img src="image/product/nikon_d300_1-50x75.jpg"
                                                                           alt="دوربین دیجیتال حرفه ای"
                                                                           title="دوربین دیجیتال حرفه ای" class="img-responsive"/></a>
                            </div>
                            <div class="caption">
                                <h4><a href="product.html">دوربین دیجیتال حرفه ای</a></h4>
                                <p class="price"><span class="price-new">92000 تومان</span> <span
                                        class="price-old">98000 تومان</span> <span class="saving">-6%</span></p>
                            </div>
                        </div>
                        <div class="product-thumb clearfix">
                            <div class="image"><a href="product.html"><img src="image/product/nikon_d300_5-50x75.jpg"
                                                                           alt="محصولات مراقبت از مو" title="محصولات مراقبت از مو"
                                                                           class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">محصولات مراقبت از مو</a></h4>
                                <p class="price"><span class="price-new">66000 تومان</span> <span
                                        class="price-old">90000 تومان</span> <span class="saving">-27%</span></p>
                                <div class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i></span></div>
                            </div>
                        </div>
                        <div class="product-thumb clearfix">
                            <div class="image"><a href="product.html"><img src="image/product/macbook_air_1-50x75.jpg"
                                                                           alt="لپ تاپ ایلین ور" title="لپ تاپ ایلین ور"
                                                                           class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">لپ تاپ ایلین ور</a></h4>
                                <p class="price"><span class="price-new">10 میلیون تومان</span> <span class="price-old">12 میلیون تومان</span>
                                    <span class="saving">-5%</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="banner owl-carousel">
                        <div class="item"><a href="#"><img src="image/banner/small-banner1-265x350.jpg" alt="small banner"
                                                           class="img-responsive"/></a></div>
                        <div class="item"><a href="#"><img src="image/banner/small-banner-265x350.jpg" alt="small banner1"
                                                           class="img-responsive"/></a></div>
                    </div>
                </aside>
                <!--Left Part End -->
                <!--Middle Part Start-->
                <div id="content" class="col-sm-9">
                    <h1 class="title">{{$category->title_fa}}</h1>

                    <h3 class="subtitle">بهبود جستجو</h3>
                    <div class="category-list row">
                        <div class="col-sm-3">
                            <ul class="list-item">
                                <li><a href="#">صوتی و تصویری (3)</a></li>
                                <li><a href="#">لوازم خانگی (2)</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <ul class="list-item">
                                <li><a href="#">موبایل و تبلت (2)</a></li>
                                <li><a href="#">لپ تاپ (3)</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <ul class="list-item">
                                <li><a href="#">رومیزی (0)</a></li>
                                <li><a href="#">دوربین (0)</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="product-filter">
                        <div class="row">
                            <div class="col-md-4 col-sm-5">
                                <div class="btn-group">
                                    <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip"
                                            title="List"><i class="fa fa-th-list"></i></button>
                                    <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip"
                                            title="Grid"><i class="fa fa-th"></i></button>
                                </div>
                                <a href="compare.html" id="compare-total">محصولات مقایسه (0)</a></div>
                            <div class="col-sm-2 text-right">
                                <label class="control-label" for="input-sort">مرتب سازی :</label>
                            </div>
                            <div class="col-md-3 col-sm-2 text-right">
                                <select id="input-sort" class="form-control col-sm-3">
                                    <option value="" selected="selected">پیشفرض</option>
                                    <option value="">نام (الف - ی)</option>
                                    <option value="">نام (ی - الف)</option>
                                    <option value="">قیمت (کم به زیاد)</option>
                                    </option>
                                    <option value="">قیمت (زیاد به کم)</option>
                                    <option value="">امتیاز (بیشترین)</option>
                                    <option value="">امتیاز (کمترین)</option>
                                    <option value="">مدل (A - Z)</option>
                                    <option value="">مدل (Z - A)</option>
                                </select>
                            </div>
                            <div class="col-sm-1 text-right">
                                <label class="control-label" for="input-limit">نمایش :</label>
                            </div>
                            <div class="col-sm-2 text-right">
                                <select id="input-limit" class="form-control">
                                    <option value="" selected="selected">20</option>
                                    <option value="">25</option>
                                    <option value="">50</option>
                                    <option value="">75</option>
                                    <option value="">100</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="row products-category">
                        @forelse ( $category->getAllSubCategoryProducts() as $getProduct )
                            <div class="product-layout product-list col-xs-12">
                                <div class="product-thumb">
                                    <div class="image"><a href="{{route('client.productDetails.show',$getProduct)}}"><img
                                                src="{{asset(str_replace('public','storage',$getProduct->image))}}"
                                                alt="{{$getProduct->name}}" title="{{$getProduct->name}}"
                                                class="img-responsive"/></a></div>
                                    <div class="caption">
                                        <h4><a href="{{route('client.productDetails.show',$getProduct)}}">
                                                {{$getProduct->name}}</a></h4>
                                        <p class="price">
                                            {{-- <span class="price-new">{{number_format($getProduct->priceWithDiscount())}} --}}
                                            <span class="price-new">{{number_format($getProduct->price_with_discount)}}
                                                تومان </span>
                                            {{-- @if ($getProduct->discount()->exists()) --}}
                                            @if ($getProduct->has_discount)
                                                <span class="price-old">{{number_format($getProduct->price)}} تومان </span>
                                                {{-- <span class="saving">{{$getProduct->discount->value}}%</span> --}}
                                                <span class="saving">{{$getProduct->discount_value }}%</span>
                                            @endif
                                        </p>
                                        <div class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x">
                                                </i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i>
                                                <i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack">
                                                <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
                                            </span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x"></i></span></div>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button"
                                                onClick="addToCart({{$getProduct->id}})"><span>افزودن به سبد</span></button>
                                        <div class="add-to-links">
                                            <button id="like-for-show-blade-{{$getProduct->id}}" type="button"
                                                    data-toggle="tooltip" title="افزودن به علاقه مندی"
                                                    onClick="likeProduct({{$getProduct->id}})">
                                                <i class="fa fa-heart @if ($getProduct->is_liked)
                                                    like-for-show-blade @endif"></i></button>
                                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick="">
                                                <i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div
                                style="padding-top:30px;padding-bottom:30px;box-shadow: 1px 1px 2px rgba(0,0,0,0.3);margin: 15px;">
                                <h1 style="text-align: center;font-size:20px;color: red;">
                                    متاسفانه در حال حاضر برای دسته بندی مورد نظر هیچ محصولی وجود ندارد
                                </h1>
                            </div>
                        @endforelse
                    </div>
                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <ul class="pagination">
                                {{$category->getAllSubCategoryProducts()->links()}}
                            </ul>
                        </div>
                        {{--<div class="col-sm-6 text-right">نمایش 1 تا 12 از 15 (مجموع 2 صفحه)</div>--}}
                    </div>
                </div>
                <!--Middle Part End -->
            </div>
        </div>
    </div>
@endsection
