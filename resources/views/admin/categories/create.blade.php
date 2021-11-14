<div class="col-12 bg-white">
    <p class="box__title">ایجاد دسته بندی جدید</p>
    @if (session('success'))
        <div class="text-success text-center margin-top-15">{{session('success')}}</div>
    @endif
    @include('admin.layouts.errors')
    <form action="{{route('category.store')}}" method="post" class="padding-30">
        @csrf
        <input value="{{old('title_fa')}}" name="title_fa"
               type="text" placeholder="نام دسته بندی" class="text">
        <input value="{{old('title_en')}}" name="title_en"
               type="text" placeholder="نام انگلیسی دسته بندی" class="text">
        <p class="box__title margin-bottom-15">انتخاب دسته پدر</p>
        <select name="parent_id">
            <option value selected>دسته پدر ندارد</option>
            @foreach($selectCategories as $parent)
                <option value="{{$parent->id}}">{{$parent->title_fa}}</option>
            @endforeach
        </select>
        <div class="form-grup">
            <label><span style="font-size:20px ;margin-bottom:15px;font-weight:bolder;">
                    انتخاب گروه مشخصات
                </span></label>
            <div class="row padding-0-18">
                @foreach ($propertyGroup as $value=>$group)
                    <div class="col-3" style="margin-right: 5px;">
                        <input class="checked" type="checkbox" name="propertyGroups[]" value="{{$group->id}}">
                        <b style="margin-right: 5px;">{{$group->title}}</b>
                    </div>
                    @if ($value %4 ===3)
                        <hr style="color: #919191;height:2px;width:100%;background-color:#919191;margin: 5px 10px ;">
                    @endif
                @endforeach
            </div>
        </div>
        <button class="btn btn-brand">اضافه کردن</button>
    </form>
</div>
