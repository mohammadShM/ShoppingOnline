@extends('admin.layouts.app')
@section('content')
    <div class="main-content padding-0 categories">
        <div class="row no-gutters">
            <div class="col-12 bg-white">
                <p class="box__title">ایجاد تخفیف جدید برای محصول {{$product->name}}</p>
                @if (session('success'))
                    <div class="text-success text-center margin-top-15">{{session('success')}}</div>
                @endif
                @include('admin.layouts.errors')
                <form action="{{route('product.discount.store',$product)}}" method="post" class="padding-30">
                    @csrf
                    <label class="label_custom margin-top-15 margin-bottom-15 " for="value">
                        از یک تا صد مقدار تخفیف را وارد نمایید :</label>
                    <input value="{{old('value')}}" name="value" id="value"
                           type="number" min="1" max="100" placeholder="مقدار تخفیف" class="text">
                    <button class="btn btn-brand margin-top-15">اضافه کردن</button>
                </form>
            </div>
        </div>
    </div>
@endsection
