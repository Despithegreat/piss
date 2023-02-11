<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.supplier.command_handler.bulk_delete_supplier_handler' shared service.

return $this->services['prestashop.adapter.supplier.command_handler.bulk_delete_supplier_handler'] = new \PrestaShop\PrestaShop\Adapter\Supplier\CommandHandler\BulkDeleteSupplierHandler(($this->services['prestashop.adapter.supplier.supplier_order_validator'] ?? ($this->services['prestashop.adapter.supplier.supplier_order_validator'] = new \PrestaShop\PrestaShop\Adapter\Supplier\SupplierOrderValidator())), ($this->services['prestashop.adapter.supplier.provider.supplier_address'] ?? ($this->services['prestashop.adapter.supplier.provider.supplier_address'] = new \PrestaShop\PrestaShop\Adapter\Supplier\SupplierAddressProvider())), ($this->services['prestashop.adapter.product.update.product_supplier_updater'] ?? $this->load('getPrestashop_Adapter_Product_Update_ProductSupplierUpdaterService.php')), 'bltk_');
