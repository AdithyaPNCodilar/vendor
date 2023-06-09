<?php
namespace Codilar\VendorTable\Api;

use Codilar\VendorTable\Api\Data\VendorInterface;


interface VendorRepositoryInterface
{
    public function save(VendorInterface $item);

    public function getById($id);

    public function delete(VendorInterface $item);
   
    public function getAllVendors();

    public function getNew();
}
