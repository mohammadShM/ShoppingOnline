@extends('admin.layouts.app')
@section('css-links')
    <link rel="stylesheet" href="{{asset('admin/css/dropzone.css')}}">
@endsection
@section('content')
    <div class="main-content padding-0">
        <p class="box__title">ایجاد گالری برای <b class="text-warning">{{$product->name}}</b></p>
        <div class="row no-gutters bg-white">
            <div class="col-12">
                <form action="{{route('product.gallery.store',$product->id)}}" method="post" class="padding-30 dropzone">
                    @csrf
                    <div class="fallback">
                        <input name="file" type="file" multiple/>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js-links')
    <script src="{{asset('admin/js/dropzone.js')}}"></script>
@endsection
