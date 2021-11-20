@section('css-links')
    <link type="text/css" rel="stylesheet" href="{{asset('admin/css/jalalidatepicker.min.css')}}"/>
    <script type="text/javascript" src="{{asset('admin/js/jalalidatepicker.min.js')}}"></script>
@endsection
<div class="col-4 bg-white">
    <p class="box__title">ایجاد کد تخفیف جدید</p>
    @if (session('success'))
        <div class="text-success text-center margin-top-15">{{session('success')}}</div>
    @endif
    @include('admin.layouts.errors')
    <form action="{{route('offer.store')}}" method="post" class="padding-30">
        @csrf
        <label>
            <input value="{{old('code')}}" name="code"
                   type="text" placeholder="کد تخفیف" class="text">
        </label>
        <label>
            <input data-jdp value="{{old('start_at')}}" name="start_at" autocomplete="false"
                   type="text" placeholder="تاریخ شروع" class="text">
        </label>
        <label>
            <input data-jdp value="{{old('end_at')}}" name="end_at" autocomplete="false"
                   type="text" placeholder="تاریخ پایان" class="text">
        </label>
        <button class="btn btn-brand margin-top-15">اضافه کردن</button>
    </form>
</div>
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
