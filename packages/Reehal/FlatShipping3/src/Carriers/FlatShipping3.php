<?php

namespace Reehal\FlatShipping3\Carriers;

use Webkul\Checkout\Facades\Cart;
use Webkul\Shipping\Carriers\AbstractShipping;
use Webkul\Checkout\Models\CartShippingRate;

class FlatShipping3 extends AbstractShipping
{
    /**
     * Shipping method code
     *
     * @var string
     */
    protected $code  = 'flatshipping3';

    /**
     * Returns rate for shipping method
     *
     * @return CartShippingRate|false
     */
    public function calculate()
    {
        if (! $this->isAvailable()) {
            return false;
        }

        $object = new CartShippingRate;

        $cart = Cart::getCart();

        $object->carrier = 'flatshipping3';
        $object->carrier_title = $this->getConfigData('title');
        $object->method = 'flatshipping3_flatshipping3';
        $object->method_title = $this->getConfigData('title');
        $object->method_description = $this->getConfigData('description');
        $object->price = 0;
        $object->base_price = 0;

        foreach ($cart->items as $item) {
            if ($item->getTypeInstance()->isStockable()) {
                $object->price += core()->convertPrice($this->getConfigData('rate')) * $item->quantity;
                $object->base_price += $this->getConfigData('rate') * $item->quantity;
            }
        }

        return $object;
    }
}