@extends('client.layouts.app')
@section('titleWeb')
    ویرایش رمز عبور
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
            <h1 class="title text-center">ویرایش رمز عبور</h1>
            <p>کاربر گرامی <span style="color:red;font-weight: bolder">{{auth()->user()->name??"UserName"}}
                </span> به پنل کاربری خود خوش آمدین .
            </p>
            <div class="col-sm-9" id="content">
                <form class="form-horizontal" method="post" action="{{route('client.myProfile.changePassword.update')}}">
                    @csrf
                    @method('patch')
                    <legend>تغییر رمز عبور</legend>
                    <fieldset id="account">
                        <div class="form-group required">
                            <label for="input-name" class="col-sm-2 control-label">رمز فعلی</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="input-name" placeholder="رمز فعلی"
                                       value="" name="old_password">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset id="account">
                        <div class="form-group required">
                            <label for="input-name" class="col-sm-2 control-label">رمز جدید</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="input-name" placeholder="رمز جدید"
                                       value="" name="password">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset id="account">
                        <div class="form-group required">
                            <label for="input-name" class="col-sm-2 control-label">تکرار رمز جدید</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="input-name" placeholder="تکرار رمز جدید"
                                       value="" name="password_confirmation">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset id="address">
                        <div class="buttons">
                            <div class="pull-right">
                                &nbsp; {{-- &nbsp; --}}
                                <input type="submit" class="btn btn-primary" value="بروز رسانی">
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
