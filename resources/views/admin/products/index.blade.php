@extends('admin.layouts.app')
@section('content')
    <div class="main-content padding-0 categories">
        <div class="row no-gutters  ">
            <div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">
                <p class="box__title">برند ها</p>
                <div class="table__box">
                    <table class="table">
                        <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>شناسه</th>
                            <th>نام محصول</th>
                            <th>تصویر محصول</th>
                            <th>قیمت محصول</th>
                            <th>دسته بندی محصول</th>
                            <th>برند محصول</th>
                            <th>تاریخ ایجاد</th>
                            <th>گالری</th>
                            <th>مشاهده</th>
                            <th>ویرایش</th>
                            <th>حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $product)
                            <tr role="row" class="">
                                <td><a href="">{{$product->id}}</a></td>
                                <td><a href="">{{$product->name}}</a></td>
                                <td>
                                    <a href="#"><img
                                            {{-- src="{{'http://shoppingonline.mytest/'. --}}
                                            {{--  str_ireplace('public', 'storage', $product->image)}}" --}}
                                            src="{{asset('./'.str_ireplace('public', 'storage', $product->image))}}"
                                            title="{{$product->name}}" alt="{{$product->name}}"
                                            width="50" height="50"/>
                                    </a>
                                </td>
                                <td><a href="">{{number_format($product->price)}}</a></td>
                                <td>
                                    <a href="">{{$product->category->title_fa}}</a>
                                </td>
                                <td>
                                    <a href="">{{$product->brand->name}}</a>
                                </td>
                                <td>
                                    <a href="">{{\Hekmatinasser\Verta\Verta::instance($product->created_at)
                                            ->formatDate()}}</a>
                                </td>
                                <td>
                                    <a href="{{route('product.gallery.index',$product->id)}}"
                                       class="text-success">مشاهده</a>
                                </td>
                                <td>
                                    <a href="" target="_blank" class="item-eye" title="مشاهده"></a>
                                </td>
                                <td>
                                    <a href="{{route('product.edit',$product->id)}}" class="item-edit" title="ویرایش"></a>
                                </td>
                                <td>
                                    <form action="{{route('product.destroy',$product->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="item-delete bg-white button-cursor" title="حذف"></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{$products->links()}}
            </div>
            @include('admin.products.create')
        </div>
    </div>
@endsection
