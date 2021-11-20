@extends('admin.layouts.app')
@section('css-links')
    <link type="text/css" rel="stylesheet" href="{{asset('admin/css/jalalidatepicker.min.css')}}"/>
    <script type="text/javascript" src="{{asset('admin/js/jalalidatepicker.min.js')}}"></script>
@endsection
@section('content')
    <div class="main-content padding-0 categories">
        <div class="row no-gutters  ">
            <div class="col-12 bg-white">
                <p class="box__title">ایجاد کد تخفیف جدید</p>
                @if (session('success'))
                    <div class="text-success text-center margin-top-15">{{session('success')}}</div>
                @endif
                @include('admin.layouts.errors')
                <form action="{{route('offer.update',$offer)}}" method="post" class="padding-30">
                    @csrf
                    @method('patch')
                    <label>
                        <input value="{{$offer->code}}" name="code"
                               type="text" placeholder="کد تخفیف" class="text">
                    </label>
                    <label>
                        <input data-jdp value="{{verta()->instance($offer->start_at)->format('Y/n/j')}}"
                               name="start_at" autocomplete="false"
                               type="text" placeholder="تاریخ شروع" class="text">
                    </label>
                    <label>
                        <input data-jdp value="{{verta()->instance($offer->end_at)->format('Y/n/j')}}"
                               name="end_at" autocomplete="false"
                               type="text" placeholder="تاریخ پایان" class="text">
                    </label>
                    <button class="btn btn-brand margin-top-15">ویرایش</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js-links')
    <!--suppress JSUnresolvedVariable, JSUnresolvedFunction -->
    <script>
        jalaliDatepicker.startWatch({
            separatorChar: "/",
            minDate: "attr",
            maxDate: "attr",
            changeMonthRotateYear: true,
            showTodayBtn: true,
            showEmptyBtn: true,
        });
        document.getElementById("aaa").addEventListener("jdp:change", function (e) {
            console.log(e)
        })
    </script>
@endsection
