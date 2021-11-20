<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Category;
use App\Observers\CategoryObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {

    }

    public function boot(): void
    {
        // set gloabal data for header menu in client pages in index home and single product page
//        view()->composer(['client.index', 'client.products.show', 'client.register.create',
//            'client.register.verifyOtp']
        view()->composer(['client.*']
            , function ($view) {
                $categories = Category::query()->where('parent_id', null)->get();
                $brands = Brand::all();
                $view->with([
                    'categories' => $categories,
                    'brands' => $brands,
                ]);
            });
        // for set observer CategoryObserver for Category Model for manage notification sessions
        Category::observe(CategoryObserver::class);
    }
}
