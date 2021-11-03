<?php /** @noinspection ReturnTypeCanBeDeclaredInspection */

/** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest\ProductDiscountCreateRequest;
use App\Models\Discount;
use App\Models\Product;

class DiscountController extends Controller
{
    public function index()
    {

    }

    public function create(Product $product)
    {
        return view('admin.discount.create', [
            'product' => $product,
        ]);
    }

    public function store(Product $product, ProductDiscountCreateRequest $request)
    {
        $product->addDiscount($request);
        return redirect(route('product.create'));
    }

    public function show(Discount $discount)
    {

    }

    public function edit(Product $product, Discount $discount)
    {
        return view('admin.discount.edit', [
            'product' => $product,
            'discount' => $discount,
        ]);
    }

    public function update(Product $product, ProductDiscountCreateRequest $request)
    {
        $product->updateDiscount($request);
        return redirect(route('product.create'));
    }

    public function destroy(Product $product, Discount $discount)
    {
        $product->deleteDiscount($discount);
        return redirect(route('product.create'));
    }
}
