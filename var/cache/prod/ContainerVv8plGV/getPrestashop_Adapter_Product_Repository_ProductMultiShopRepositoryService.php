<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.repository.product_multi_shop_repository' shared service.

return $this->services['prestashop.adapter.product.repository.product_multi_shop_repository'] = new \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductMultiShopRepository(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'bltk_', ($this->services['prestashop.adapter.product.validate.product_validator'] ?? $this->load('getPrestashop_Adapter_Product_Validate_ProductValidatorService.php')), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->shop->id_category, ($this->services['prestashop.adapter.tax_rules_group.repository.tax_rules_group_repository'] ?? $this->load('getPrestashop_Adapter_TaxRulesGroup_Repository_TaxRulesGroupRepositoryService.php')), ($this->services['prestashop.adapter.manufacturer.repository.manufacturer_repository'] ?? ($this->services['prestashop.adapter.manufacturer.repository.manufacturer_repository'] = new \PrestaShop\PrestaShop\Adapter\Manufacturer\Repository\ManufacturerRepository())));
