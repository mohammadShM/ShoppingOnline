@extends('admin.layouts.app')
@section('content')
    <div class="main-content padding-0 categories">
        <div class="row no-gutters  ">
            <div class="col-12 margin-left-10 margin-bottom-15 border-radius-3">
                <p class="box__title">کامنت های مربوط به محصول <b>{{$product->name}}</b></p>
                <div class="table__box">
                    <table class="table">
                        <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>ردیف</th>
                            <th>شناسه</th>
                            <th>نام کاربر</th>
                            <th>متن نظر</th>
                            <th>وضعیت</th>
                            <th>ویرایش</th>
                            <th>تایید کامنت</th>
                            <th>حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($product->comments as $value=>$comment)
                            <tr role="row" class="">
                                <td><a href="">{{$value+1}}</a></td>
                                <td><a href="">{{$comment->id}}</a></td>
                                <td><a href="">{{$comment->user->name??'User'}}</a></td>
                                <td style="white-space:pre-wrap; word-wrap:break-word;text-align:justify;">
                                    <a href="">{{$comment->comments}}</a></td>
                                <td>
                                    @if ($comment->status === "1")
                                        <span style="color: green">تایید</span>
                                    @else
                                        <span style="color: red">رد</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('product.comments.edit',$comment)}}" class="item-edit" title="ویرایش"></a>
                                </td>
                                <td>
                                    @if ($comment->status === "0")
                                        <form action="{{route('product.comments.updateStatus',$comment)}}" method="post">
                                            @csrf
                                            @method('patch')
                                            <input type="submit" value="تایید" class="btn btn-brand">
                                        </form>
                                    @else
                                        <p class="text-success">تایید شده</p>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{route('product.comments.destroy',$comment)}}" method="post">
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
        </div>
    </div>
@endsection
