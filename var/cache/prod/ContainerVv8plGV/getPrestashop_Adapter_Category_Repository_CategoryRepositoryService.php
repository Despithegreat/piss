<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.category.repository.category_repository' shared service.

return $this->services['prestashop.adapter.category.repository.category_repository'] = new \PrestaShop\PrestaShop\Adapter\Category\Repository\CategoryRepository(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'bltk_');
