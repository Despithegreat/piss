<?php
/**
 * 2007-2019 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

class ProductController extends ProductControllerCore
{
    public function init()
    {
        parent::init();
        if (Module::isEnabled('advanceseo') == true) {
            $flag = false;
            $page_name = 'product';
            $module = Module::getInstanceByName('advanceseo');
            $id_product = (int) Tools::getValue('id_product');
            $product = new Product($id_product, false, $this->context->language->id);
            $io_desc = $product->description;
            $io_desc_short = $product->description_short;
            if (!empty($io_desc)) {
                $io_desc = $module->getFilterContent($page_name, $io_desc);
                $product->description = $io_desc;
                $flag = true;
            }
            if (!empty($io_desc_short)) {
                $io_desc_short = $module->getFilterContent($page_name, $io_desc_short);
                $product->description_short = $io_desc_short;
                $flag = true;
            }
            if ($flag === true) {
                $product->update();
            }
        }
    }
}
