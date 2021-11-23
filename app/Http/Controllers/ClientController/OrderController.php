<?php

namespace App\Http\Controllers\ClientController;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class OrderController extends Controller
{

    /**
     * @throws NotFoundExceptionInterface
     * @throws ContainerExceptionInterface
     */
    public function create(): Factory|View|Application
    {
        return view('client.orders.create', [
            'items' => Cart::getItms(),
            'total_items' => Cart::totalItems(),
            'total_price' => Cart::totalPrice(),
        ]);
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function store(Request $request): RedirectResponse
    {
        /** @var Order $order */
        $order = Order::query()->create([
            'price' => Cart::totalPrice(),
            'address' => $request->get('address'),
        ]);
        foreach (Cart::getItms() as $item) {
            $product = $item['product'];
            $productQty = $item['quantity'];
            $order->details()->create([
                'product_id' => $product->id,
                'count' => $productQty,
                'unit_price' => $product->price_with_discount,
                'total_price' => $productQty * $product->price_with_discount,
            ]);
        }
        Cart::removeAllItems();
        return back();
    }

}
