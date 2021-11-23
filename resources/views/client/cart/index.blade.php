@extends('client.layouts.app')
@section('content')
    <div id="container">
        <div class="container">
            <!-- Breadcrumb Start-->
            <ul class="breadcrumb">
                <li><a href="{{route('client.index')}}"><i class="fa fa-home"></i></a></li>
                <li><a href="#">سبد خرید</a></li>
            </ul>
            <!-- Breadcrumb End-->
            @if ($total_items > 0)
                <div class="row">
                    <!--Middle Part Start-->
                    <div id="content" class="col-sm-12">
                        <h1 class="title">سبد خرید</h1>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <td class="text-center">تصویر</td>
                                    <td class="text-left">نام محصول</td>
                                    <td class="text-left">مدل</td>
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
                                                <img src="{{asset(str_replace('public','/storage',$product->image))}}"
                                                     alt="{{$product->name}}" title="{{$product->name}}"
                                                     class="img-thumbnail" width="100" height="100"/></a></td>
                                        <td class="text-left">
                                            <a href="{{route('client.productDetails.show',$product)}}">{{$product->name}}</a><br/>
                                        </td>
                                        <td class="text-left">{{$product->brand->name}}</td>
                                        <td class="text-left">
                                            <div class="input-group btn-block quantity">
                                                <label for="input-quantity{{$product->id}}"></label>
                                                <input type="number" name="quantity" value="{{$productQty}}" size="1"
                                                       class="form-control" id="input-quantity{{$product->id}}"/>
                                                <span class="input-group-btn">
                                            <button type="submit" data-toggle="tooltip" title="بروزرسانی" class="btn btn-primary"
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
                                        <td class="text-right">{{number_format($product->price_with_discount)}} تومان</td>
                                        <td class="text-right" id="totals-price-{{$product->id}}">
                                            {{number_format($product->price_with_discount*$productQty)}} تومان
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                        <h2 class="subtitle"></h2>
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-8">
                                <table class="table table-bordered">
                                    <tr>
                                        <td class="text-right"><strong>جمع کل:</strong></td>
                                        <td class="text-right cart-total-price">{{number_format($total_price)}} تومان</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>کل :</strong></td>
                                        <td class="text-right cart-total-price">{{number_format($total_price)}} تومان</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="buttons">
                            <div class="pull-left"><a href="{{route('client.orders.create')}}"
                                                      class="btn btn-default">ادامه خرید</a></div>
                        </div>
                    </div>
                    <!--Middle Part End -->
                </div>
            @else
                <div class="row" style="margin: 50px 10px ;">
                    <h1 class="text-center">سبد خرید خالی است !</h1>
                </div>
            @endif
        </div>
    </div>
@endsection
