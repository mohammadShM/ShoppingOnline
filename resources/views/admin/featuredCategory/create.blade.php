@extends('admin.layouts.app')
@section('content')
    <div class="main-content padding-0 categories">
        <div class="row no-gutters  ">
            <div class="col-12 margin-left-10 margin-bottom-15 border-radius-3 bg-white">
                <p class="box__title">ایجاد دسته بندی ویژه</p>
                @if (session('success'))
                    <div class="text-success text-center margin-top-15">{{session('success')}}</div>
                @endif
                @include('admin.layouts.errors')
                <form action="{{route('featuredCategory.store')}}" method="post" class="padding-30">
                    @csrf
                    <p class="box__title margin-bottom-15">
                        <label for="parent_id">انتخاب دسته ویژه</label>
                    </p>
                    <select name="parent_id" id="parent_id">
                        <option value selected>... انتخاب دسته ویژه ...</option>
                        @foreach($categories as $parent)
                            <option @if ($featuredCategory->category_id === $parent->id)selected
                                    @endif value="{{$parent->id}}">{{$parent->title_fa}}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-brand margin-top-15">اضافه کردن</button>
                </form>
            </div>
        </div>
    </div>
@endsection
