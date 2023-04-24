<?php
namespace Codilar\VendorTable\Block\Product;

class View extends \Magento\Catalog\Block\Product\View
{
    /**
     * Get the custom product string.
     *
     * @return string
     */
    public function getCustomProductString()
    {
        return 'Samsung S-22';
    }

    /**
     * Get the current product.
     *
     * @return \Magento\Catalog\Api\Data\ProductInterface|null
     */
    public function getProduct()
    {
        $product = parent::getProduct();
        $product->setCustomString($this->getCustomProductString());
        return $product;
    }
}