<?php /** @noinspection ReturnTypeCanBeDeclaredInspection */

/** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest\CategoryCreateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {

    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function store(CategoryCreateRequest $request)
    {
        Category::query()->create([
            "parent_id" => $request->get('parent_id'),
            "title_fa" => $request->get('title_fa'),
            "title_en" => $request->get('title_en'),
        ]);
        return back();
    }

    public function show($id)
    {

    }

    public function edit(Category $category)
    {
        $categories = Category::all();
        return view('admin.categories.edit', compact('category', 'categories'));
    }

    public function update(Request $request, Category $category)
    {
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
