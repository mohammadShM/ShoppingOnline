@extends('admin.layouts.app')
@section('content')
    <div class="main-content padding-0 categories">
        <div class="row no-gutters  ">
            <div class="col-12 margin-left-10 margin-bottom-15 border-radius-3">
                <p class="box__title">نقش ها</p>
                <div class="table__box">
                    <table class="table">
                        <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>شناسه</th>
                            <th>عنوان</th>
                            <th>مشاهده</th>
                            <th>ویرایش</th>
                            <th>حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($roles as $role)
                            <tr role="row" class="">
                                <td><a href="">{{$role->id}}</a></td>
                                <td><a href="">{{$role->title}}</a></td>
                                <td>
                                    <a href="" target="_blank" class="item-eye" title="مشاهده"></a>
                                </td>
                                <td>
                                    <a href="{{route('role.edit',$role->id)}}" class="item-edit" title="ویرایش"></a>
                                </td>
                                <td>
                                    <form action="{{route('role.destroy',$role->id)}}" method="post">
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
                {{$roles->links()}}
            </div>
            @include('admin.roles.create')
        </div>
    </div>
@endsection
