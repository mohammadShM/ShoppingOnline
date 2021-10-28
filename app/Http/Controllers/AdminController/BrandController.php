<?php /** @noinspection ReturnTypeCanBeDeclaredInspection */

/** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest\BrandCreateRequest;
use App\Models\Brand;
use Illuminate\Http\Request;

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
        return back()->with('success','برند با موفقیت افزوده شد');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
