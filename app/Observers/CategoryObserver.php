<?php

namespace App\Observers;

use App\Models\Category;

class CategoryObserver
{

    public function created(Category $category): void
    {
        session()->flash('success', "دسته  {$category->title_fa} با موفقیت افزوده شد");
    }

    public function updated(Category $category): void
    {

    }

    public function deleted(Category $category): void
    {
        session()->flash('delete', "دسته  {$category->title_fa} با موفقیت حذف شد");
    }

    public function restored(Category $category): void
    {

    }

    public function forceDeleted(Category $category): void
    {

    }
}
