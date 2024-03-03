<?php

namespace Reehal\FlatRate2\Carriers;

use Webkul\Checkout\Facades\Cart;
use Webkul\Shipping\Carriers\AbstractShipping;
use Webkul\Checkout\Models\CartShippingRate;

class FlatRate2 extends AbstractShipping
{
    /**
     * Shipping method code
     *
     * @var string
     */
    protected $code  = 'flatrate2';

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

        $cart = Cart::getCart();

        $object = new CartShippingRate;

        $object->carrier = 'flatrate2';
        $object->carrier_title = $this->getConfigData('title');
        $object->method = 'flatrate2_flatrate2';
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