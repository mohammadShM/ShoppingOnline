@extends('admin.layouts.app')
@section('content')
    <div class="main-content padding-0 categories">
        <div class="row no-gutters">
            <div class="col-12 bg-white">
                <p class="box__title">ویرایش کامنت مربوط به محصول {{$comment->product->name}}</p>
                @if (session('success'))
                    <div class="text-success text-center margin-top-15">{{session('success')}}</div>
                @endif
                @include('admin.layouts.errors')
                <form action="{{route('product.comments.update',$comment)}}" method="post" class="padding-30">
                    @csrf
                    @method('patch')
                    <label for="comments">کامنت مربوط به کاربر {{$comment->user->name??'User'}}</label>
                    <textarea name="comments" id="comments" cols="30" rows="10"
                              style="text-align:justify">{{$comment->comments}}</textarea>
                    <fieldset id="groupRadio">
                        <div style="display: block;margin-top: 10px;">
                            <input type="radio" name="status_1" id="status_1" style="margin-left: 10px;">
                            <label for="status_1">تایید کامنت</label>
                        </div>
                        <div style="display: block;margin-top: 10px;">
                            <input type="radio" name="status_0" id="status_0" style="margin-left: 10px;">
                            <label for="status_0">رد کامنت</label>
                        </div>
                    </fieldset>
                    <button class="btn btn-brand margin-top-15">اضافه کردن</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js-links')
    <script>
        $("input[name='status_1']").change(function () {
            $("#status_0").prop("checked", false);
        });
        $("input[name='status_0']").change(function () {
            $("#status_1").prop("checked", false);
        });
    </script>
@endsection
