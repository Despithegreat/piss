<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.pdf.credit_slip_pdf_generator' shared service.

return $this->services['prestashop.adapter.pdf.credit_slip_pdf_generator'] = new \PrestaShop\PrestaShop\Adapter\PDF\CreditSlipPdfGenerator('bltk_', ($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()));
