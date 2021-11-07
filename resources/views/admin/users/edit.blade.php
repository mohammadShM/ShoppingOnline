@extends('admin.layouts.app')
@section('content')
    <div class="main-content padding-0 categories">
        <div class="row no-gutters">
            <div class="col-12 bg-white">
                <p class="box__title">ویرایش کاربر {{$user->name}}</p>
                @if (session('success'))
                    <div class="text-success text-center margin-top-15">{{session('success')}}</div>
                @endif
                @include('admin.layouts.errors')
                <form action="{{route('user.update',$user)}}" method="post" class="padding-30">
                    @csrf
                    @method('patch')
                    <input value="{{$user->name}}" name="name" type="text" placeholder="ویرایش نام کاربر" class="text">
                    <input value="{{$user->email}}" name="email" type="email" placeholder="ویرایش ایمیل کاربر" class="text">
                    <select name="role_id">
                        <option value disabled>انتخاب نقش کاربر</option>
                        @foreach ($roles as $role)
                            <option @if ($role->id === $user->role_id) selected @endif
                                value="{{$role->id}}">{{$role->title}}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-brand margin-top-15">ویرایش کاربر</button>
                </form>
            </div>

        </div>
    </div>
@endsection
