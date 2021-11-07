<div class="col-12 bg-white">
    <p class="box__title">ایجاد نقش جدید</p>
    @if (session('success'))
        <div class="text-success text-center margin-top-15">{{session('success')}}</div>
    @endif
    @include('admin.layouts.errors')
    <form action="{{route('role.store')}}" method="post" class="padding-30">
        @csrf
        <input value="{{old('title')}}" name="title"
               type="text" placeholder="نام نقش" class="text">
        <div class="form-grup">
            <label><span style="font-size:20px ;margin-bottom:15px;font-weight:bolder;">
                    انتخاب دسترسی ها:
                </span></label>
           <div style="margin: 10px 10px 15px;">
               <input type="radio" id="selectAll"><span style="margin: 0 5px 0 15px;"><b>انتخاب همه</b></span>
               <input type="radio" checked id="disableAll"><span style="margin: 0 5px 0 15px;"><b>غیر فعال همه</b></span>
           </div>
            <div class="row padding-0-18">
                @foreach ($permissions as $value=>$permission)
                    <div class="col-3" style="margin-right: 5px;">
                        <input class="checked" type="checkbox" name="permissions[]" value="{{$permission->id}}">
                        <b style="margin-right: 5px;">{{$permission->label}}</b>
                    </div>
                    @if ($value %4 ===3)
                        <hr style="color: #919191;height:2px;width:100%;background-color:#919191;margin: 5px 10px ;">
                    @endif
                @endforeach
            </div>
        </div>
        <button class="btn btn-brand margin-top-15">افزودن نقش</button>
    </form>
</div>

@section('js-links')
    @include('admin.layouts.checkbox')
@endsection
