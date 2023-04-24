<?php

namespace Codilar\VendorTable\Observer;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Message\ManagerInterface;

class CartRemoveProductObserver implements ObserverInterface
{
/**
  * @var ManagerInterface
  */
protected $messageManager;

/**
  * @var ProductRepositoryInterface
  */
protected $productRepository;

public function __construct(
ManagerInterface $messageManager,
ProductRepositoryInterface $productRepository
) {
$this->messageManager = $messageManager;
$this->productRepository = $productRepository;
}

public function execute(Observer $observer)
 {

    $quoteItem = $observer->getQuoteItem();

    $productId = $quoteItem->getProductId();

    $product = $this->productRepository->getById($productId);

    $productName = $product->getName();

    $this->messageManager->addSuccessMessage("$productName removed from cart: " );
  }
}
