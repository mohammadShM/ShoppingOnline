<?php

namespace App\Http\Controllers\clientController;

use App\Http\Controllers\Controller;
use App\Models\Category;

class indexController extends Controller
{

    public function index()
    {
        $categories = Category::where('parent_id', '=', null)->get();
        return view('client.index', compact('categories'));
    }

}
