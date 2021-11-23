<?php

namespace App\Http\Controllers\ClientController;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class CartController extends Controller
{

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function index(): Application|View|Factory
    {
        return view('client.cart.index', [
            'items' => Cart::getItms(),
            'total_items' => Cart::totalItems(),
            'total_price' => Cart::totalPrice(),
        ]);
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function store(Request $request, Product $product): Response|Application|ResponseFactory
    {
        // session()->forget(Cart::getSessionCart()); // Removes a specific variable
        Cart::new($product, $request);
        return response([
            'msg' => 'success',
            'cart' => Cart::getSessionCart(),
        ], 200);
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function destroy(Product $product): ResponseFactory|Application|Response
    {
        Cart::remove($product);
        return response([
            'msg' => 'removed',
            'cart' => Cart::getSessionCart(),
        ], 200);
    }

}
