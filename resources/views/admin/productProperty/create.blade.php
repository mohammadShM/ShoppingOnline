@extends('admin.layouts.app')
@section('content')
    <div class="col-12 bg-white">
        <p class="box__title">ویژگی های محصول <b>{{$product->name}}</b></p>
        @if (session('success'))
            <div class="text-success text-center margin-top-15">{{session('success')}}</div>
        @endif
        @include('admin.layouts.errors')
        <form action="{{route('product.properties.store',$product)}}" method="post" class="padding-30">
            @csrf
            @foreach ($propertyGroups as $group)
                <h3>{{$group->title}}</h3>
                <div class="row">
                    @foreach ($group->properties as $property)
                        <div class="form-group col-sm-6">
                            <div class="col-sm-2">
                                <label for="properties[{{$property->id}}][value]">{{$property->title}}</label>
                            </div>
                            <div class="col-sm-10 padding-0-18">
                                <input type="text" name="properties[{{$property->id}}][value]" class="text"
                                       id="properties[{{$property->id}}][value]"
                                       value="{{$property->getValueForProduct($product)}}">
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
            <button class="btn btn-brand margin-top-15">اضافه کردن</button>
        </form>
    </div>
@endsection
