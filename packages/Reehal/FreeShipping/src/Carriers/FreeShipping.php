<?php

namespace Reehal\FreeShipping\Carriers;

use Webkul\Checkout\Facades\Cart;
use Webkul\Shipping\Carriers\AbstractShipping;
use Webkul\Checkout\Models\CartShippingRate;

class FreeShipping extends AbstractShipping
{
    /**
     * Shipping method code
     *
     * @var string
     */
    protected $code  = 'freeshipping';

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

        $totalPrice = 0;

        foreach ($cart->items as $item) {
            $totalPrice += $item->total;
        }

        $object = new CartShippingRate;

        $object->carrier = 'freeshipping';
        $object->carrier_title = $this->getConfigData('title');
        $object->method = 'freeshipping_freeshipping';
        $object->price = 0;

        if ($totalPrice > 50){
            $object->base_price = 0;
            $object->method_title = $this->getConfigData('title');
            $object->method_description = $this->getConfigData('description');
        }
        else{
            $object->base_price = $this->getConfigData('rate');
            $object->method_title = $this->getConfigData('below_title');
            $object->method_description = $this->getConfigData('below_description');
        }

        return $object;
    }
}