<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.update.related_products_updater' shared service.

return $this->services['prestashop.adapter.product.update.related_products_updater'] = new \PrestaShop\PrestaShop\Adapter\Product\Update\RelatedProductsUpdater(($this->services['prestashop.adapter.product.repository.product_repository'] ?? $this->load('getPrestashop_Adapter_Product_Repository_ProductRepositoryService.php')));
