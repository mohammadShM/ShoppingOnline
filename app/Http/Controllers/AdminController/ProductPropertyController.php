<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductPropertyController extends Controller
{

    public function index(Product $product): Factory|View|Application
    {
        return view('admin.productProperty.index', [
            'product' => $product,
        ]);
    }

    // for create and edit ==========================
    public function create(Product $product): Factory|View|Application
    {
        return view('admin.productProperty.create', [
            'product' => $product,
            'propertyGroups' => $product->category->propertyGroups,
        ]);
    }

    // for store and update ==========================

    /** @noinspection PhpInconsistentReturnPointsInspection */
    public function store(Request $request, Product $product): RedirectResponse
    {
        // FOR value empty for property in product then not save in table create_product_property_table and rmove row
        $properties = collect($request->get('properties'))->filter(function ($item) {
            if (!empty($item['value'])) {
                return $item;
            }
        });
        // for create and update together
        $product->properties()->sync($properties);
        return back();
    }

}
