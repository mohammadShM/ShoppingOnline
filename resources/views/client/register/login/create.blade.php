@extends('client.layouts.app')
@section('titleWeb')
    ورود کاربری
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
                <h1 class="title">ورود کاربری</h1>
                <form class="form-horizontal" method="post" action="{{route('client.login.store')}}">
                    @csrf
                    <fieldset id="account">
                        <legend>برای ورود اطلاعات خودرا وارد نمایید</legend>
                        <div class="form-group required">
                            <label for="input-email" class="col-sm-2 control-label">آدرس ایمیل</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="input-email" placeholder="آدرس ایمیل" value=""
                                       name="email">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label for="input-email" class="col-sm-2 control-label">رمز عبور</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="input-email" placeholder="رمز عبور" value=""
                                       name="password">
                            </div>
                        </div>

                    </fieldset>
                    <fieldset id="address">
                        <div class="buttons">
                            <div class="pull-right">&nbsp;
                                <input type="submit" class="btn btn-primary" value="ورود">
                                <a href="{{route('client.login.google')}}" class="btn btn-danger fa fa-google">
                                    <span style="padding-left: 5px;">ورود با حساب گوگل</span></a>
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
