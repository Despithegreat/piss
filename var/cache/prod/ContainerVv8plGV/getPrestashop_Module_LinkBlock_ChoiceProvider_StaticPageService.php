<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.module.link_block.choice_provider.static_page' shared service.

return $this->services['prestashop.module.link_block.choice_provider.static_page'] = new \PrestaShop\Module\LinkList\Form\ChoiceProvider\PageChoiceProvider(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'bltk_', ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getLanguage()->id, ($this->services['prestashop.adapter.shop.context'] ?? ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context()))->getContextListShopID(), [0 => 'contact', 1 => 'sitemap', 2 => 'stores', 3 => 'authentication', 4 => 'my-account']);
