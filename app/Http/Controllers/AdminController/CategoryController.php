<?php /** @noinspection ReturnTypeCanBeDeclaredInspection */

/** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest\CategoryCreateRequest;
use App\Http\Requests\AdminRequest\CategoryUpdateRequest;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index()
    {

    }

    public function create()
    {
        // for aquals !allows and denies in Gate =====================================
//        if (Gate::denies('create-category')) {
//            abort(403);
//        }
//        if (!Gate::allows('create-category')) {
//            abort(403);
//        }
        // for category list
        $categories = Category::paginate(10);
        // for select category
        $selectCategories = Category::all();
        return view('admin.categories.index', compact('categories', 'selectCategories'));
    }

    public function store(CategoryCreateRequest $request)
    {
        Category::query()->create([
            "parent_id" => $request->get('parent_id'),
            "title_fa" => $request->get('title_fa'),
            "title_en" => $request->get('title_en'),
        ]);
        return back()->with('success', 'دسته با موفقیت افزوده شد');
    }

    public function show($id)
    {

    }

    public function edit(Category $category)
    {
        $categories = Category::all();
        return view('admin.categories.edit', compact('category', 'categories'));
    }

    public function update(CategoryUpdateRequest $request, Category $category)
    {
        $categoryUnique = Category::query()->where('title_fa', '=', $request->get('title_fa'))
            ->where('id', '!=', $category->id)->exists();
        if ($categoryUnique) {
            return back()->withErrors(['عنوان فارسی دسته بندی تکراری است']);
        }
        $category->update([
            "parent_id" => $request->get('parent_id'),
            "title_fa" => $request->get('title_fa'),
            "title_en" => $request->get('title_en'),
        ]);
        return redirect(route('category.create'));
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return back();
    }
}
