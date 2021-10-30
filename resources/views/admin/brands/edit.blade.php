@extends('admin.layouts.app')
@section('content')
    <div class="main-content padding-0 categories">
        <div class="row no-gutters">
            <div class="col-12 bg-white">
                <p class="box__title">ویرایش برند {{$brand->name}}</p>
                @if (session('success'))
                    <div class="text-success text-center margin-top-15">{{session('success')}}</div>
                @endif
                @include('admin.layouts.errors')
                <form action="{{route('brand.update',$brand->id)}}" method="post"
                      class="padding-30" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <input value="{{$brand->name}}" name="name"
                           type="text" placeholder="نام برند" class="text">
                    <label class="label_custom margin-top-5" for="image">افزودن عکس</label>
                    <input type="file" class="form-control label_custom margin-top-5" name="image">
                    <div class="margin-top-15 col-6">
                        <img
                             src="{{'http://shoppingonline.mytest/'.
                              str_ireplace('public', 'storage', $brand->image)}}"
                            title="{{$brand->name}}" alt="{{$brand->name}}"
                            width="150" height="150"/>
                    </div>
                    <button class="btn btn-brand margin-top-15">اضافه کردن</button>
                </form>
            </div>
        </div>
    </div>
@endsection
