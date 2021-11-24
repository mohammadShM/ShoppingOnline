<?php

namespace App\Http\Controllers\ClientController;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest\OrderRequest;
use App\Models\Cart;
use App\Models\Order;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;

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
     * @throws Exception
     */
    public function store(OrderRequest $request)
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
        $invoice = (new Invoice)->amount($order->price);
        /** @noinspection PhpUndefinedMethodInspection */
        return Payment::purchase($invoice, function ($driver, $transactionId) use ($order) {
            $order->update([
                "transaction_id" => $transactionId,
            ]);
        })->pay()->render();
        //return back();
    }

    public function callback(Request $request): Redirector|Application|RedirectResponse
    {
        /** @var Order $order */
        $order = Order::query()->where('transaction_id', $request->get('Authority'))->first();
        if (isset($order)) {
            $order->update([
                'payment_status' => $request->get('Status'),
            ]);
        }
        return redirect(route('client.orders.show', $order));
    }

    public function show(Order $order): Factory|View|Application
    {
        return view('client.orders.show',[
            'order' => $order,
        ]);
    }

}
