<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\FeaturedCategory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FeaturedCategoryController extends Controller
{

    public function index(): void
    {

    }

    public function create(): Application|View|Factory
    {
        return view('admin.featuredCategory.create', [
            'categories' => Category::query()->where('parent_id', null)->get(),
            'featuredCategory' => FeaturedCategory::query()->first(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'parent_id' => 'required|exists:categories,id',
        ]);
        // for one data save in table then remove all data in table before save new data
        FeaturedCategory::query()->delete();
        FeaturedCategory::query()->create([
            'category_id' => $request->get('parent_id'),
        ]);
        return back();
    }

    public function show(FeaturedCategory $featuredCategory): void
    {

    }

    public function edit(FeaturedCategory $featuredCategory): void
    {

    }

    public function update(Request $request, FeaturedCategory $featuredCategory): void
    {

    }

    public function destroy(FeaturedCategory $featuredCategory): void
    {

    }
}
