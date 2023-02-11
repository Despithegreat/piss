<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.data_factory.attachment_decorator' shared service.

$this->services['prestashop.core.grid.data_factory.attachment_decorator'] = $instance = new \PrestaShop\PrestaShop\Core\Grid\Data\Factory\AttachmentGridDataFactoryDecorator(($this->services['prestashop.core.grid.data_factory.attachment'] ?? $this->load('getPrestashop_Core_Grid_DataFactory_AttachmentService.php')), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->employee->id_lang, ($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'bltk_', ($this->services['prestashop.core.util.file_size.size_converter'] ?? ($this->services['prestashop.core.util.file_size.size_converter'] = new \PrestaShop\PrestaShop\Core\Util\File\FileSizeConverter())));

$instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));

return $instance;
