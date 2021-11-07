@extends('admin.layouts.app')
@section('content')
    <div class="main-content padding-0 categories">
        <div class="row no-gutters">
            <div class="col-12 bg-white">
                <p class="box__title">ویرایش نقش {{$role->title}}</p>
                @if (session('success'))
                    <div class="text-success text-center margin-top-15">{{session('success')}}</div>
                @endif
                @include('admin.layouts.errors')
                <form action="{{route('role.update',$role)}}" method="post" class="padding-30">
                    @csrf
                    @method('patch')
                    <input value="{{$role->title}}" name="title"
                           type="text" placeholder="نام نقش" class="text">
                    <div class="form-grup">
                        <label><span style="font-size:20px ;margin-bottom:15px;font-weight:bolder;">
                    انتخاب دسترسی ها:
                </span></label>
                        <div class="row padding-0-18">
                            @foreach ($permissions as $value=>$permission)
                                <div class="col-3" style="margin-right: 5px;">
                                    <input type="checkbox" name="permissions[]" value="{{$permission->id}}"
                                    @if ($role->hasPermission($permission)) checked @endif>
                                    <b style="margin-right: 5px;">{{$permission->label}}</b>
                                </div>
                                @if ($value %4 ===3)
                                    <hr style="color: #919191;height:2px;width:100%;background-color:#919191;margin: 5px 10px ;">
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <button class="btn btn-brand margin-top-15">ویرایش نقش</button>
                </form>
            </div>

        </div>
    </div>
@endsection
