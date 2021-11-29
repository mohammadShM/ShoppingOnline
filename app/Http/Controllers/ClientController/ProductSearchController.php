<?php

namespace App\Http\Controllers\ClientController;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductSearchController extends Controller
{

    public function fetchData(Request $request): JsonResponse
    {
        $value = $request->get('value');
        // for validation by regular lang
        /** @noinspection NotOptimalRegularExpressionsInspection */
        $value = preg_replace('[a-zA-Zالف-ی]', '', $value);
        $value = strtolower($value);
        $result = '';
        /** @noinspection PhpConditionAlreadyCheckedInspection */
        if (!empty($value) && $value !== null) {
            $data = Product::where('name', 'like', '%' . $value . '%')->orderBy('id', 'desc')->paginate(10);
            $total_products = $data->count();
        } else if (empty($value)) {
            $data = [];
            $total_products = 0;
        } else {
            $data = Product::orderBy('id', 'asc')->paginate(10);
            $total_products = $data->count();
        }
        foreach ($data as $getRow) {
            $result .= '
            <tr>
              <td>
                <a href="/productDetails/' . $getRow->slug . '">
                  <img src="' . asset(str_replace('public', '/storage', $getRow->image)) . '"
                   alt="' . $getRow->name . '" width="50" height="50">
                </a>
              </td>
               <td>
                <a style="color:#0f3e68;" href="/productDetails/' . $getRow->slug . '">' . $getRow->name . '</a>
              </td>
            </tr>
            ';
        }
        $data = array(
            'table_data' => $result,
            'total_products' => $total_products,
        );
        return response()->json($data);
    }

}
