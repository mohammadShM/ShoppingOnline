<?php /** @noinspection ReturnTypeCanBeDeclaredInspection */

/** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest\ProductCreateRequest;
use App\Http\Requests\AdminRequest\ProductUpdateRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {

    }

    public function create()
    {
        // $products = Product::withTrashed()->paginate(5);
        $products = Product::withoutTrashed()->paginate(5);
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.products.index', [
            'products' => $products,
            'categories' => $categories,
            'brands' => $brands,
        ]);
    }

    /** @noinspection PhpUnhandledExceptionInspection
     * @noinspection NullPointerExceptionInspection
     */
    public function store(ProductCreateRequest $request)
    {
        $pathName = "Products_" . time() . "_" . random_int(111111, 999999) . "_"
            . $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('public/image-products', $pathName);
        Product::create([
            "name" => $request->get('name'),
            "slug" => $request->get('slug'),
            "price" => $request->get('price'),
            "description" => $request->get('description'),
            "category_id" => $request->get('category_id'),
            "brand_id" => $request->get('brand_id'),
            "image" => $path,
        ]);
        return redirect(route('product.create'));
    }

    public function show(Product $product)
    {

    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.products.edit', [
            'product' => $product,
            'categories' => $categories,
            'brands' => $brands,
        ]);
    }

    /** @noinspection PhpUnhandledExceptionInspection
     * @noinspection NullPointerExceptionInspection
     */
    public function update(ProductUpdateRequest $request, Product $product)
    {
        $path = $product->image;
        if ($request->hasFile('image')) {
            if (Storage::exists($path)) {
                // remove image in storage directory
                Storage::delete($path);
            }
            $pathName = "Products_" . time() . "_" . random_int(111111, 999999) . "_"
                . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/image-products', $pathName);
        }
        $slugunique = Product::query()->where('slug', '=', $request->get('slug'))
            ->where('id', '!=', $product->id)->exists();
        if ($slugunique) {
            return back()->withErrors(['اسلاگ انتخابی تکراری است']);
        }
        $product->update([
            "name" => $request->get('name'),
            "slug" => $request->get('slug'),
            "price" => $request->get('price'),
            "description" => $request->get('description'),
            "category_id" => $request->get('category_id'),
            "brand_id" => $request->get('brand_id'),
            "image" => $path,
        ]);
        return redirect(route('product.create'));
    }

    public function destroy(Product $product)
    {
        // remove image in public directory
        // unlink(str_replace('public', 'storage', $product->image));
        $product->delete();
        return back();
    }

}
