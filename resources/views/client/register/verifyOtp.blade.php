@extends('client.layouts.app')
@section('content')
    <div id="container">
        <div class="container">
            <!-- Breadcrumb Start-->
            <ul class="breadcrumb">
                <li><a href="/"><i class="fa fa-home"></i></a></li>
                <li><a href="">حساب کاربری</a></li>
                <li><a href="">تایید حساب کاربری</a></li>
            </ul>
            <!-- Breadcrumb End-->
            <div class="row">
                <!--Middle Part Start-->
                <div class="col-sm-12" id="content">
                    <h1 class="title">ثبت نام حساب کاربری</h1>
                    <p>اگر قبلا حساب کاربریتان را ایجاد کرد اید جهت ورود به <a href="">صفحه لاگین</a> مراجعه کنید.</p>
                    <form class="form-horizontal" method="post" action="{{route('register.verifyOtp',$user)}}">
                        @csrf
                        <fieldset id="account">
                            <legend>کد ارسال شده به ایمیل خود را وارد نمایید</legend>
                            <div class="form-group required">
                                <label for="input-email" class="col-sm-2 control-label">کد تایید</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input-email" placeholder="کد تایید" value=""
                                           maxlength="5" minlength="5" max="99999" min="11111" name="otp">
                                </div>
                            </div>
                            <div class="buttons">
                                <div class="pull-right">
                                    <input type="submit" class="btn btn-primary" value="تایید حساب کاربری">
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
