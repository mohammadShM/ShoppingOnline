<div class="col-4 bg-white">
    <p class="box__title">ایجاد برند جدید</p>
    @if (session('success'))
        <div class="text-success text-center margin-top-15">{{session('success')}}</div>
    @endif
    @include('admin.layouts.errors')
    <form action="{{route('brand.store')}}" method="post" class="padding-30" enctype="multipart/form-data">
        @csrf
        <input value="{{old('name')}}" name="name"
               type="text" placeholder="نام برند" class="text">
        <label class="label_custom margin-top-5" for="image">افزودن عکس</label>
        <input type="file" class="form-control label_custom margin-top-5" name="image">
        <button class="btn btn-brand margin-top-15">اضافه کردن</button>
    </form>
</div>
