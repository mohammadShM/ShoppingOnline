@extends('admin.layouts.app')
@section('content')
    <div class="main-content padding-0 categories">
        <div class="row no-gutters  ">
            <div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">
                <p class="box__title">اسلاید ها</p>
                <div class="table__box">
                    <table class="table">
                        <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>شناسه</th>
                            <th>لینک</th>
                            <th>تصویر</th>
                            <th>ویرایش</th>
                            <th>حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($sliders as $slider)
                            <tr role="row" class="">
                                <td><a href="">{{$slider->id}}</a></td>
                                <td><a href="">{{$slider->link}}</a></td>
                                <td>
                                    <a href="#"><img
                                            src="{{asset('./'.str_ireplace('public', 'storage', $slider->image))}}"
                                            title="{{$slider->link}}" alt="{{$slider->link}}"
                                            width="50" height="50"/>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('slider.edit',$slider)}}" class="item-edit" title="ویرایش"></a>
                                </td>
                                <td>
                                    <form action="{{route('slider.destroy',$slider)}}" method="post">
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
            </div>
            @include('admin.sliders.create')
        </div>
    </div>
@endsection
