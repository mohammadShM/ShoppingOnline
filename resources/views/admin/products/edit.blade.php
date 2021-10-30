@extends('admin.layouts.app')
@section('content')
    <div class="main-content padding-0 categories">
        <div class="row no-gutters  ">
            <div class="col-12 bg-white">
                <p class="box__title">ویرایش محصول {{$product->name}}</p>
                @if (session('success'))
                    <div class="text-success text-center margin-top-15">{{session('success')}}</div>
                @endif
                @include('admin.layouts.errors')
                <form action="{{route('product.update',$product->id)}}" method="post"
                      class="padding-30" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <input value="{{$product->name}}" name="name"
                           type="text" placeholder="نام محصول" class="text">
                    <label class="label_custom margin-top-5" for="category_id">ویرایش دسته بندی محصول :</label>
                    <select name="category_id" id="category_id">
                        <option value disabled selected>انتخاب کنید</option>
                        @foreach($categories as $category)
                            <option @if($category->id === $product->category_id) selected @endif
                                    value="{{$category->id}}">{{$category->title_fa}}</option>
                        @endforeach
                    </select>
                    <label class="label_custom margin-top-5" for="brand_id">ویرایش برند محصول :</label>
                    <select name="brand_id" id="brand_id">
                        <option value disabled selected>انتخاب کنید</option>
                        @foreach($brands as $brand)
                            <option @if($brand->id === $product->brand_id) selected @endif
                                value="{{$brand->id}}">{{$brand->name}}</option>
                        @endforeach
                    </select>
                    <input value="{{$product->slug}}" name="slug"
                           type="text" placeholder="اسلاگ محصول" class="text">
                    <input value="{{$product->price}}" name="price"
                           type="text" placeholder="قیمت محصول" class="text">
                    <textarea name="description" placeholder="توضیحات محصول"
                              class="text textarea-me">{{$product->description}}</textarea>
                    <label class="label_custom margin-top-5" for="image">ویرایش تصویر محصول :</label>
                    <input type="file" class="form-control label_custom margin-top-5 text" name="image">
                    <div class="margin-top-15 col-6">
                        <img
                            src="{{'http://shoppingonline.mytest/'.
                              str_ireplace('public', 'storage', $product->image)}}"
                            title="{{$product->name}}" alt="{{$product->name}}"
                            width="150" height="150"/>
                    </div>
                    <button class="btn btn-brand margin-top-15">ویرایش کردن</button>
                </form>
            </div>
        </div>
    </div>
@endsection
