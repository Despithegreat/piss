<?php
/**
 * 2007-2022 PrestaShop
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
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2022 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */
require_once dirname(__FILE__) . '/../../config/config.inc.php';
require_once dirname(__FILE__) . '/../../init.php';
require_once dirname(__FILE__) . '/tvcmscategoryproduct.php';
$context = Context::getContext();
class TvcmsCategoryproductAjax extends TvcmsCategoryProduct
{
    public function returnData()
    {
        $category_id = Tools::getValue('category_id');
        $num_of_prod = Tools::getValue('num_of_prod');

        if (!empty($category_id)) {
            $obj = new TvcmsCategoryProduct();
            $tmp = $obj->getProductsUsingCategory($category_id, $num_of_prod);

            return $tmp;
        } else {
            return 'no_data_found';
        }
    }
}
$tv_obj = new TvcmsCategoryproductAjax();
print_r($tv_obj->returnData());
