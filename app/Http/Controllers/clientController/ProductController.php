<?php

namespace App\Http\Controllers\clientController;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{

    public function show(Product $product)
    {
        return view('client.products.show', [
            'product' => $product,
        ]);
    }

}
