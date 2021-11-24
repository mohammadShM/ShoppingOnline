@extends('client.layouts.app')
@section('content')
    <div id="container">
        <div class="container">
            <div class="row">
                <!--Middle Part Start-->
                <div id="content" class="col-sm-8 col-lg-offset-2">
                    @if ($order->payment_status==="OK")
                        <h2 class="text-center alert alert-success">
                            پرداخت با موفقیت انجام شد
                        </h2>
                    @else
                        <h2 class="text-center alert alert-danger">
                            متاسفانه پرداخت نا موفق بود لطفا مجددا تلاش کنید
                        </h2>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
