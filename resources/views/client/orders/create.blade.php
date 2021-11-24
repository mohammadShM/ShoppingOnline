@extends('client.layouts.app')
@section('content')
    <div id="container">
        <div class="container">
            <!-- Breadcrumb Start-->
            <ul class="breadcrumb">
                <li><a href="{{route('client.index')}}"><i class="fa fa-home"></i></a></li>
                <li><a href="{{route('client.cart.index')}}">سبد خرید</a></li>
                <li><a href="#">ثبت سفارش</a></li>
            </ul>
            <!-- Breadcrumb End-->
            <div class="row">
                <!--Middle Part Start-->
                <div id="content" class="col-sm-12">
                    <h1 class="title">ثبت سفارش</h1>
                    @if ($total_items > 0)
                        <form action="{{route('client.orders.store')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><i class="fa fa-ticket"></i> استفاده از کوپن تخفیف</h4>
                                        </div>
                                        <div class="panel-body">
                                            <label for="input-coupon" class="col-sm-3 control-label">کد تخفیف خود را وارد
                                                کنید</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="input-coupon" name="offer_code"
                                                       placeholder="کد تخفیف خود را در اینجا وارد کنید" value="">
                                                <span class="input-group-btn">
                          <input type="button" class="btn btn-primary" data-loading-text="بارگذاری ..." id="button-coupon"
                                 value="اعمال کوپن">
                          </span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><i class="fa fa-shopping-cart"></i> سبد خرید</h4>
                                        </div>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <td class="text-center">تصویر</td>
                                                        <td class="text-left">نام محصول</td>
                                                        <td class="text-left">برند محصول</td>
                                                        <td class="text-left">تعداد</td>
                                                        <td class="text-right">قیمت واحد</td>
                                                        <td class="text-right">کل</td>
                                                    </tr>
                                                    </thead>
                                                    @foreach ( $items as $item)
                                                        @php
                                                            $product = $item['product'];
                                                            $productQty = $item['quantity'];
                                                        @endphp
                                                        <tbody id="cart-index{{$product->id}}">
                                                        <tr>
                                                            <td class="text-center">
                                                                <a href="{{route('client.productDetails.show',$product)}}">
                                                                    <img src="{{asset(str_replace('public','/storage',
                                                                    $product->image))}}"
                                                                         alt="{{$product->name}}" title="{{$product->name}}"
                                                                         class="img-thumbnail" width="100" height="100"/></a></td>
                                                            <td class="text-left">
                                                                <a href="{{route('client.productDetails.show',$product)}}">
                                                                    {{$product->name}}</a><br/>
                                                            </td>
                                                            <td class="text-left">{{$product->brand->name}}</td>
                                                            <td class="text-left">
                                                                <div class="input-group btn-block quantity">
                                                                    <label for="input-quantity{{$product->id}}"></label>
                                                                    <input type="number" name="quantity" value="{{$productQty}}"
                                                                           size="1"
                                                                           class="form-control"
                                                                           id="input-quantity{{$product->id}}"/>
                                                                    <span class="input-group-btn">
                                            <button type="button" data-toggle="tooltip" title="بروزرسانی" class="btn btn-primary"
                                                    onClick="updateCart('{{$product->id}}')">
                                                <i class="fa fa-refresh"></i>
                                            </button>
                                            <button type="button" data-toggle="tooltip" title="حذف" class="btn btn-danger"
                                                    onClick="removeFromCart({{$product->id}})">
                                                <i class="fa fa-times-circle"></i>
                                            </button>
                                            </span>
                                                                </div>
                                                            </td>
                                                            <td class="text-right">{{number_format($product->price_with_discount)}}
                                                                تومان
                                                            </td>
                                                            <td class="text-right" id="totals-price-{{$product->id}}">
                                                                {{number_format($product->price_with_discount*$productQty)}} تومان
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    @endforeach
                                                    <tfoot>
                                                    <tr>
                                                        <td class="text-right" colspan="4"><strong>جمع کل:</strong></td>
                                                        <td class="text-center cart-totalPrice" colspan="2">
                                                            <b>{{number_format($total_price)}} تومان</b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right" colspan="4"><strong>کل :</strong></td>
                                                        <td class="text-center cart-totalPrice" colspan="2">
                                                            <b>{{number_format($total_price)}} تومان</b>
                                                        </td>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><i class="fa fa-pencil"></i>افزودن آدرس</h4>
                                        </div>
                                        <div class="panel-body">
                                            @if ($errors->any())
                                                <div style="background-color:#6db19b;padding: 10px;box-sizing: border-box;
                                                        box-shadow: 1px 1px 1px rgba(0,0,0,0.3);">
                                                    @include('admin.layouts.errors')
                                                </div>
                                            @endif
                                            <label for="address"></label>
                                            <textarea rows="4" class="form-control" id="address" style="resize: none;"
                                                      name="address"></textarea>
                                            <br>
                                            <label class="control-label" for="confirm_agree">
                                                <input type="checkbox" checked="checked" value="1" required=""
                                                       class="validate required" id="confirm_agree" name="confirm agree">
                                                <span><a class="agree" href="#"><b>
                                                        شرایط و قوانین</b></a> را خوانده ام و با آنها موافق هستم.</span>
                                            </label>
                                            <div class="buttons">
                                                <div class="pull-right">
                                                    <input type="submit" class="btn btn-primary" id="button-confirm"
                                                           value="تایید سفارش">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    @else
                        <div class="row" style="margin: 50px 10px ;">
                            <h1 class="text-center">سبد خرید خالی است !</h1>
                        </div>
                    @endif
                </div>
                <!--Middle Part End -->
            </div>
        </div>
    </div>
@endsection
