@extends('client.layouts.app')
@section('content')
    <div id="container">
        <div class="container">
            <div class="row">
                <!--Middle Part Start-->
                <div id="content" class="col-sm-12">
                    <h1 class="title">لیست علاقه مندی ها</h1>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <td class="text-center">تصویر</td>
                                <td class="text-left">نام محصول</td>
                                <td class="text-left">دسته بندی</td>
                                <td class="text-left">مدل</td>
                                {{--<td class="text-right">موجودی</td>--}}
                                <td class="text-right">قیمت واحد</td>
                                <td class="text-right">عملیات</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($products as $wishlist)
                                <tr>
                                    <td class="text-center"><a href="{{route('client.productDetails.show',
                                            ['product'=>$wishlist->slug])}}">
                                            <img src="{{asset('./'.str_ireplace('public', 'storage', $wishlist->image))}}"
                                                 alt="{{$wishlist->name}}" title="تبلت ایسر" width="80" height="80"/></a></td>
                                    <td class="text-left"><a href="{{route('client.productDetails.show',$wishlist)}}">
                                            {{$wishlist->name}}</a></td>
                                    <td class="text-left">{{$wishlist->category->title_fa}}</td>
                                    <td class="text-left">{{$wishlist->brand->name}}</td>
                                    {{--  <td class="text-right">موجود</td>--}}
                                    <td class="text-right">
                                        <div class="price"> {{number_format($wishlist->price)}} تومان</div>
                                    </td>
                                    <td class="text-right">
                                        <button class="btn btn-primary" title="" data-toggle="tooltip" onclick="cart.add('48');"
                                                type="button"
                                                data-original-title="افزودن به سبد"><i class="fa fa-shopping-cart"></i></button>
                                        <form action="{{route('client.likes.destroy',$wishlist)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm" type="submit">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </form>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--Middle Part End -->
            </div>
        </div>
    </div>
@endsection
