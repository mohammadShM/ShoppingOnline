<?php

namespace App\Http\Controllers\clientController;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ProductController extends Controller
{

    public function show(Product $product): Factory|View|Application
    {
        return view('client.products.show', [
            'product' => $product,
        ]);
    }

}
