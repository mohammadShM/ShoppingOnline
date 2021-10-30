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
                            <th>مشاهده</th>
                            <th>ویرایش</th>
                            <th>حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $item)
                            <tr role="row" class="">
                                <td><a href="">{{$item->id}}</a></td>
                                <td><a href="">{{$item->name}}</a></td>
                                <td>
                                    <a href="#"><img
                                            {{-- src="{{'http://shoppingonline.mytest/'. --}}
                                            {{--  str_ireplace('public', 'storage', $item->image)}}" --}}
                                            src="{{asset('./'.str_ireplace('public', 'storage', $item->image))}}"
                                            title="{{$item->name}}" alt="{{$item->name}}"
                                            width="50" height="50"/>
                                    </a>
                                </td>
                                <td><a href="">{{number_format($item->price)}}</a></td>
                                <td>
                                    <a href="">{{$item->category->title_fa}}</a>
                                </td>
                                <td>
                                    <a href="">{{$item->brand->name}}</a>
                                </td>
                                <td>
                                    <a href="" target="_blank" class="item-eye" title="مشاهده"></a>
                                </td>
                                <td>
                                    <a href="{{route('product.edit',$item->id)}}" class="item-edit" title="ویرایش"></a>
                                </td>
                                <td>
                                    <form action="{{route('product.destroy',$item->id)}}" method="post">
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
