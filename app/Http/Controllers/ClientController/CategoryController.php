<?php

namespace App\Http\Controllers\ClientController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(Category $category): Factory|View|Application
    {
        return view('client/categories/index',[
            'category' => $category,
        ]);
    }

    public function getChildren(Category $childrenCategory): Factory|View|Application
    {
        return view('client/categories/childCategory',[
            'childCategory' => $childrenCategory,
        ]);
    }

}
