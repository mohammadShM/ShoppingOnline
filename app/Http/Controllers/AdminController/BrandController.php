<?php /** @noinspection ReturnTypeCanBeDeclaredInspection */

/** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest\BrandCreateRequest;
use App\Http\Requests\AdminRequest\BrandUpdateRequest;
use App\Models\Brand;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{

    public function index()
    {

    }

    public function create()
    {
        $brands = Brand::paginate(5);
        return view('admin.brands.index', compact('brands'));
    }

    /** @noinspection PhpUnhandledExceptionInspection
     * @noinspection NullPointerExceptionInspection
     */
    public function store(BrandCreateRequest $request)
    {
        $pathName = "BRAND_" . time() . "_" . random_int(111111, 999999) . "_"
            . $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('public/image-brands', $pathName);
        Brand::query()->create([
            "name" => $request->get('name'),
            "image" => $path,
        ]);
        return back()->with('success', 'برند با موفقیت افزوده شد');
    }

    public function show($id)
    {

    }

    public function edit(Brand $brand)
    {
        return view('admin.brands.edit', compact('brand'));
    }

    /** @noinspection PhpUnhandledExceptionInspection
     * @noinspection NullPointerExceptionInspection
     */
    public function update(BrandUpdateRequest $request, Brand $brand)
    {
        $path = $brand->image;
        if ($request->hasFile('image')) {
            if (Storage::exists($path)) {
                // remove image in storage directory
                Storage::delete($path);
            }
            $pathName = "BRAND_" . time() . "_" . random_int(111111, 999999) . "_"
                . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/image-brands', $pathName);
        }
        $brand->update([
            "name" => $request->get('name'),
            "image" => $path,
        ]);
        return redirect(route('brand.create'));
    }

    public function destroy(Brand $brand)
    {
        // remove image in public directory
        unlink(str_replace('public', 'storage', $brand->image));
        $brand->delete();
        return back();
    }
}
