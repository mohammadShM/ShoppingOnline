@extends('admin.layouts.app')
@section('css-links')
    <link rel="stylesheet" href="{{asset('admin/css/dropzone.css')}}">
@endsection
@section('content')
    <div class="main-content padding-0 categories">
        <div class="row no-gutters">
            <div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">
                <p class="box__title">ایجاد گالری برای <b class="text-warning">{{$product->name}}</b></p>
                <div class="table__box">
                    <div class="row no-gutters bg-white padding-20">
                        <div class="col-12">
                            <form action="{{route('product.gallery.store',$product)}}" method="post"
                                  class="padding-30 dropzone">
                                @csrf
                                <div class="fallback">
                                    <input name="file" type="file" multiple/>
                                </div>
                            </form>
                        </div>
                        <div class="text-info margin-top-15">
                            <p>
                                تعداد کل عکس های گالری این محصول برابر است با
                                <b class="text-success">{{$product->galleries->count()}} عکس</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 bg-white">
                <br>
                <h1 style="text-align: center;font-size:20px;">
                    مدیریت عکس های گالری</h1>
                <br>
                <hr style="height:2px;color:gray;background-color:gray;margin:0 20px 20px;">
                @foreach ($product->galleries as $gallery)
                    <div class="card" style="text-align: center;">
                        <img width="100" height="100" src="{{str_replace('public','/storage',$gallery->path)}}"
                             alt="{{$gallery->product->name}}">
                    </div>
                    <div class="card-body" style="text-align: center;">
                        <form action="{{route('product.gallery.destroy',['product'=>$product,'gallery'=>$gallery])}}"
                              method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="item-destroy btn-delete-me">حذف تصویر</button>
                        </form>
                    </div>
                    <hr style="height:2px;color:gray;background-color:gray;margin:10px 20px 20px;">
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('js-links')
    <script src="{{asset('admin/js/dropzone.js')}}"></script>
@endsection
