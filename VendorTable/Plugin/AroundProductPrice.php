<?php

namespace Codilar\VendorTable\Plugin;

use Magento\Catalog\Model\Product;
use Closure;

class AroundProductPrice
{
    public function aroundGetPrice(Product $product, Closure $proceed)
    {
        $price = $proceed();

        $discount = 0.1;

        $discountedPrice = $price * (1 - $discount);

        return $discountedPrice;
    }
}
