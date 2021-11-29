@extends('client.layouts.app')
@section('titleWeb')
    ایجاد رمز جدید
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
            <div class="col-sm-9" id="content">
                <h1 class="title">ایجاد رمز جدید کاربری</h1>
                <p>اگر قبلا حساب کاربریتان را ایجاد کرد اید جهت ورود به <a href="{{route('client.login.create')}}">صفحه لاگین</a>
                    مراجعه کنید.</p>
                <form class="form-horizontal" method="post" action="{{route('client.changeUserPassword.update')}}">
                    @csrf
                    @method('patch')
                    <fieldset id="account">
                        <legend>لطفا رمز جدید خود را تعیین کنید</legend>
                        <div class="form-group required">
                            <label for="input-email" class="col-sm-2 control-label">رمز عبور:</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="input-email" placeholder="رمز عبور:" value=""
                                       name="password">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label for="input-email" class="col-sm-2 control-label">تکرار رمز عبور:</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="input-email" placeholder="تکرار رمز عبور:"
                                       value="" name="password_confirmation">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset id="address">
                        <div class="buttons">
                            <div class="pull-right">&nbsp;
                                <input type="submit" class="btn btn-primary" value="ارسال">
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
