<?php /** @noinspection ReturnTypeCanBeDeclaredInspection */

/** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function index(Product $product)
    {
        return view('admin.galleries.index', [
            'product' => $product,
        ]);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show(Product $product)
    {

    }

    public function edit(Product $product)
    {

    }

    public function update(Request $request, Product $product)
    {

    }

    public function destroy(Product $product)
    {

    }
}
