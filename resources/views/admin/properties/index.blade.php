@extends('admin.layouts.app')
@section('content')
    <div class="main-content padding-0 categories">
        <div class="row no-gutters  ">
            <div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">
                <p class="box__title">گروه مشخصات</p>
                <div class="table__box">
                    <table class="table">
                        <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>شناسه</th>
                            <th>عنوان</th>
                            <th>گروه مشخصات</th>
                            <th>مشاهده</th>
                            <th>ویرایش</th>
                            <th>حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($properties as $property)
                            <tr role="row" class="">
                                <td><a href="">{{$property->id}}</a></td>
                                <td><a href="">{{$property->title}}</a></td>
                                <td><a href="">{{$property->propertyGroup->title}}</a></td>
                                <td>
                                    <a href="" target="_blank" class="item-eye" title="مشاهده"></a>
                                </td>
                                <td>
                                    <a href="{{route('properties.edit',$property)}}" class="item-edit" title="ویرایش"></a>
                                </td>
                                <td>
                                    <form action="{{route('properties.destroy',$property)}}" method="post">
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
                {{-- {{$properties->links()}} --}}
            </div>
            @include('admin.properties.create')
        </div>
    </div>
@endsection
