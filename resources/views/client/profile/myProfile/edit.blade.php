@extends('client.layouts.app')
@section('titleWeb')
    پروفایل کاربری
@endsection
@section('content')
    <div class="container">
        <!-- Breadcrumb Start-->
        <ul class="breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i></a></li>
            <li><a href="{{route('client.login.create')}}">حساب کاربری</a></li>
            <li><a href="{{route('client.register.create')}}">ثبت نام</a></li>
        </ul>
        <!-- Breadcrumb End-->
        <div class="row">
            <!--Middle Part Start-->
            <h1 class="title text-center">پروفایل کاربری</h1>
            @if (session('successPassword'))
                <h2 class="alert alert-success text-center">{{session('successPassword')}}</h2>
            @endif
            <p>کاربر گرامی <span style="color:red;font-weight: bolder">{{auth()->user()->name??"UserName"}}
                </span> به پنل کاربری خود خوش آمدین .
            </p>
            <div class="col-sm-9" id="content">
                <form class="form-horizontal" method="post" action="{{route('client.myProfile.update')}}">
                    @csrf
                    @method('patch')
                    <legend>ویرایش اطلاعات کاربری</legend>
                    <fieldset id="account">
                        <div class="form-group required">
                            <label for="input-email" class="col-sm-2">آدرس ایمیل (غیر قابل تغییر)</label>
                            <div class="col-sm-10">
                                <input readonly type="email" class="form-control" id="input-email" placeholder="آدرس ایمیل"
                                       value="{{auth()->user()->email}}" name="email">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label for="input-name" class="col-sm-2">نام کاربر</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input-name" placeholder="نام کاربری"
                                       value="{{auth()->user()->name??"نام مشخص نشده !!!!!"}}" name="name">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset id="address">
                        <div class="buttons">
                            <div class="pull-right">
                                &nbsp; {{-- &nbsp; --}}
                                <input type="submit" class="btn btn-success" value="بروز رسانی">
                                &nbsp;&nbsp;&nbsp; {{-- &nbsp; --}}
                                <a href="{{route('client.myProfile.changePassword.edit')}}"
                                   class="btn btn-primary">تغییر رمز عبور</a>
                            </div>
                        </div>
                    </fieldset>
                    @include('admin.layouts.errors')
                </form>
            </div>
            <!--Middle Part End -->
        </div>
    </div>
@endsection
