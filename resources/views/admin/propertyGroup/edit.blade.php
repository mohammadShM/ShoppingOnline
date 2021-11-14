@extends('admin.layouts.app')
@section('content')
    <div class="main-content padding-0 categories">
        <div class="row no-gutters  ">
            <div class="col-12 bg-white">
                <p class="box__title">ویرایش گروه مشخصات <b>{{$propertyGroup->title}}</b></p>
                @if ($errors->any())
                    <div class="text-warning text-center margin-top-15">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('propertyGroup.update',$propertyGroup)}}" method="post" class="padding-30">
                    @csrf
                    @method('patch')
                    <input value="{{$propertyGroup->title}}"
                           name="title" type="text" placeholder="عنوان" class="text">
                    <button class="btn btn-brand">ویرایش</button>
                </form>
            </div>
        </div>
    </div>
@endsection
