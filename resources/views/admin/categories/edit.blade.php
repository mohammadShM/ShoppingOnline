@extends('admin.layouts.app')
@section('content')
    <div class="main-content padding-0 categories">
        <div class="row no-gutters  ">
            <div class="col-12 bg-white">
                <p class="box__title">ویرایش دسته بندی <b>{{$category->title_fa}}</b></p>
                @if ($errors->any())
                    <div class="text-warning text-center margin-top-15">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('category.update',$category->id)}}" method="post" class="padding-30">
                    @csrf
                    @method('patch')
                    <input value="{{$category->title_fa}}"
                           name="title_fa" type="text" placeholder="نام دسته بندی" class="text">
                    <input value="{{$category->title_en}}"
                           name="title_en" type="text" placeholder="نام انگلیسی دسته بندی" class="text">
                    <p class="box__title margin-bottom-15">انتخاب دسته پدر</p>
                    <select name="parent_id">
                        @if (!optional($category->parent)->title_fa)
                            <option value selected>فعلا والدی ندارد</option>
                        @else
                            <option value selected>{{optional($category->parent)->title_fa}}</option>
                        @endif
                        <option value>بدون والد</option>
                        @foreach($categories as $parent)
                            <option value="{{$parent->id}}">{{$parent->title_fa}}</option>
                        @endforeach
                    </select>
                    <div class="form-grup">
                        <label><span style="font-size:20px ;margin-bottom:15px;font-weight:bolder;">
                    انتخاب گروه مشخصات
                            </span></label>
                        <div class="row padding-0-18">
                            @foreach ($propertyGroup as $value=>$group)
                                <div class="col-3" style="margin-right: 5px;">
                                    <input @if($category->hasPropertyGroup($group)) checked @endif
                                        class="checked" type="checkbox" name="propertyGroups[]" value="{{$group->id}}">
                                    <b style="margin-right: 5px;">{{$group->title}}</b>
                                </div>
                                @if ($value %4 ===3)
                                    <hr style="color: #919191;height:2px;width:100%;background-color:#919191;margin: 5px 10px ;">
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <button class="btn btn-brand">ویرایش</button>
                </form>
            </div>
        </div>
    </div>
@endsection
