@extends('admin.layouts.app')
@section('content')
    <div class="main-content padding-0 categories">
        <div class="row no-gutters  ">
            <div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">
                <p class="box__title">دسته بندی ها</p>
                <div class="table__box">
                    <table class="table">
                        <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>شناسه</th>
                            <th>نام دسته بندی</th>
                            <th>نام انگلیسی دسته بندی</th>
                            <th>دسته پدر</th>
                            <th>مشاهده</th>
                            <th>ویرایش</th>
                            <th>حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($categories as $item)
                            <tr role="row" class="">
                                <td><a href="">{{$item->id}}</a></td>
                                <td><a href="">{{$item->title_fa}}</a></td>
                                @if ($item->title_en === null)
                                    <td><b class="text-danger">نام انگلیسی ندارد</b></td>
                                @else
                                    <td>{{$item->title_en}}</td>
                                @endif
                                @if (!optional($item->parent)->title_fa)
                                    <td><b class="text-danger">والد ندارد</b></td>
                                @else
                                    <td>{{optional($item->parent)->title_fa}}</td>
                                @endif
                                <td>
                                    <a href="" target="_blank" class="item-eye" title="مشاهده"></a>
                                </td>
                                <td>
                                    <a href="{{route('category.edit',$item->id)}}" class="item-edit" title="ویرایش"></a>
                                </td>
                                <td>
                                    <form action="{{route('category.destroy',$item->id)}}" method="post">
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
                {{$categories->links()}}
            </div>
            @include('admin.categories.create')
        </div>
    </div>
@endsection
