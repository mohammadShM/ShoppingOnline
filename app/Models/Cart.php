<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class Cart
{

    public static string $CART_SESSON = 'cart';
    public static string $TOTAL_ITEMS = 'total_items';
    private static string $TOTAL_PRICE = 'total_price';

    /**
     * @throws NotFoundExceptionInterface
     * @throws ContainerExceptionInterface
     */
    public static function new(Product $product, Request $request): void
    {
        if (session()->has(self::$CART_SESSON)) {
            $cart = self::getSessionCart();
        }
        $cart[$product->id] = [
            'product' => $product,
            'quantity' => $request->get('quantity'),
        ];
        $cart[self::$TOTAL_ITEMS] = self::totalItems();
        $cart[self::$TOTAL_PRICE] = self::totalPrice();
        session()->put([
            self::$CART_SESSON => $cart,
        ]);
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public static function getItms(): Collection
    {
        // for count items (products)
        return collect(self::getSessionCart())->filter(function ($item) {
            return is_array($item);
        });
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public static function totalItems(): int
    {
        $items = self::getItms();
        return count($items);
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public static function totalPrice(): float|int|string
    {
        $totalPrice = 0;
        if (self::getSessionCart()) {
            // quantity = total product add to cart = example 5 tv samsung model 890 24 inch
            // price_with_discount = for set discount for product
            foreach (self::getSessionCart() as $cartItem) {
                if (is_array($cartItem)
                    && array_key_exists('product', $cartItem)
                    && array_key_exists('quantity', $cartItem)) {
                    $totalPrice += $cartItem['product']->price_with_discount * $cartItem['quantity'];
                }
            }
        }
        return number_format($totalPrice);
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public static function getSessionCart()
    {
        if (!session()->has(self::$CART_SESSON)) {
            return null;
        }
        return session()->get(self::$CART_SESSON);
    }

}
