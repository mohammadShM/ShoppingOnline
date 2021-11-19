@extends('admin.layouts.app')
@section('content')
    <div class="main-content padding-0 categories">
        <div class="row no-gutters">
            <div class="col-12 bg-white">
                <p class="box__title">ویرایش اسلایدر {{$slider->name}}</p>
                @if (session('success'))
                    <div class="text-success text-center margin-top-15">{{session('success')}}</div>
                @endif
                @include('admin.layouts.errors')
                <form action="{{route('slider.update',$slider)}}" method="post"
                      class="padding-30" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <input value="{{$slider->link}}" name="link"
                           type="text" placeholder="لینک" class="text">
                    <label class="label_custom margin-top-5" for="image">افزودن تصویر</label>
                    <input type="file" class="form-control label_custom margin-top-5" name="image">
                    <div class="margin-top-15 col-6">
                        <img
                             src="{{'http://shoppingonline.mytest/'.
                              str_ireplace('public', 'storage', $slider->image)}}"
                            title="{{$slider->name}}" alt="{{$slider->name}}"
                            width="150" height="150"/>
                    </div>
                    <button class="btn btn-brand margin-top-15">ویرایش</button>
                </form>
            </div>
        </div>
    </div>
@endsection
