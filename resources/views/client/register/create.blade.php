@extends('client.layouts.app')
@section('titleWeb')
    ثبت نام کاربری
@endsection
@section('content')
    <div id="container">
        <div class="container">
            <!-- Breadcrumb Start-->
            <ul class="breadcrumb">
                <li><a href="/"><i class="fa fa-home"></i></a></li>
                <li><a href="">حساب کاربری</a></li>
                <li><a href="">ثبت نام</a></li>
            </ul>
            <!-- Breadcrumb End-->
            <div class="row">
                <!--Middle Part Start-->
                <div class="col-sm-12" id="content">
                    <h1 class="title">ثبت نام حساب کاربری</h1>
                    <p>اگر قبلا حساب کاربریتان را ایجاد کرد اید جهت ورود به <a href="">صفحه لاگین</a> مراجعه کنید.</p>
                    <form class="form-horizontal" method="post" action="{{route('client.register.sendmail')}}">
                        @csrf
                        <fieldset id="account">
                            <legend>برای ارسال کد تایید ایمیل خود را وارد نمایید</legend>
                            <div class="form-group required">
                                <label for="input-email" class="col-sm-2 control-label">آدرس ایمیل</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="input-email" placeholder="آدرس ایمیل" value=""
                                           name="email">
                                </div>
                            </div>
                            <div class="buttons">
                                <div class="pull-right">
                                    <input type="submit" class="btn btn-primary" value="ارسال">
                                </div>
                            </div>
                        </fieldset>
                        @if ($errors->any())
                           <div style="background-color:#cfcfcf;padding: 10px;">
                               @include('admin.layouts.errors')
                           </div>
                        @endif
                    </form>
                </div>
                <!--Middle Part End -->
            </div>
        </div>
    </div>
@endsection
