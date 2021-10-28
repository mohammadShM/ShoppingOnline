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
                            <th>نام برند</th>
                            <th>عکس</th>
                            <th>مشاهده</th>
                            <th>ویرایش</th>
                            <th>حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($brands as $item)
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
                                <td>
                                    <a href="" target="_blank" class="item-eye" title="مشاهده"></a>
                                </td>
                                <td>
                                    <a href="{{route('brand.edit',$item->id)}}" class="item-edit" title="ویرایش"></a>
                                </td>
                                <td>
                                    <form action="{{route('brand.destroy',$item->id)}}" method="post">
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
                {{$brands->links()}}
            </div>
            @include('admin.brands.create')
        </div>
    </div>
@endsection
