<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.domain.customer_service.command_handler.update_customer_thread_status_handler' shared service.

return $this->services['prestashop.core.domain.customer_service.command_handler.update_customer_thread_status_handler'] = new \PrestaShop\PrestaShop\Core\Domain\CustomerService\CommandHandler\UpdateCustomerThreadStatusHandler(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'bltk_');
