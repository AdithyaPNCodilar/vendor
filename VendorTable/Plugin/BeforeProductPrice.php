<?php

namespace Codilar\VendorTable\Plugin;

use Magento\Catalog\Model\Product;

class BeforeProductPrice
{
    public function beforeGetPrice(Product $subject)
    {
        $discount = 10;
        $result = $subject->getData('price');
        $subject->setData('price',$result-$discount);
        return $subject;
    }
}
