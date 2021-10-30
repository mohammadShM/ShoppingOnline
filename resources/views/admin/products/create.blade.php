<div class="col-4 bg-white">
    <p class="box__title">ایجاد محصول جدید</p>
    @if (session('success'))
        <div class="text-success text-center margin-top-15">{{session('success')}}</div>
    @endif
    @include('admin.layouts.errors')
    <form action="{{route('product.store')}}" method="post" class="padding-30" enctype="multipart/form-data">
        @csrf
        <input value="{{old('name')}}" name="name"
               type="text" placeholder="نام محصول" class="text">
        <label class="label_custom margin-top-5" for="category_id">افزودن دسته بندی محصول :</label>
        <select name="category_id" id="category_id">
            <option value disabled selected>انتخاب کنید</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->title_fa}}</option>
            @endforeach
        </select>
        <label class="label_custom margin-top-5" for="brand_id">افزودن برند محصول :</label>
        <select name="brand_id" id="brand_id">
            <option value disabled selected>انتخاب کنید</option>
            @foreach($brands as $brand)
                <option value="{{$brand->id}}">{{$brand->name}}</option>
            @endforeach
        </select>
        <input value="{{old('slug')}}" name="slug"
               type="text" placeholder="اسلاگ محصول" class="text">
        <input value="{{old('price')}}" name="price"
               type="text" placeholder="قیمت محصول" class="text">
        <textarea name="description" placeholder="توضیحات محصول" class="text textarea-me">{{old('description')}}</textarea>
        <label class="label_custom margin-top-5" for="image">افزودن تصویر محصول :</label>
        <input type="file" class="form-control label_custom margin-top-5 text" name="image">
        <button class="btn btn-brand margin-top-15">اضافه کردن</button>
    </form>
</div>
