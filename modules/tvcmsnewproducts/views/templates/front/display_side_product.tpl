{**
* 2007-2022 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2022 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{strip}
<div class="tvcmsleft-new-product  tvleft-right-penal-all-block tvall-block-box-shadows">
    <div class="tvleft-new-product">

        {include file='_partials/tvcms-left-column-title.tpl' status=$main_title_status title=$main_title}
        
        <div class="tvleft-product-wrapper-info">
            <div class="products tvleft-product-wrapper wow zoomIn">
                {foreach $products as $product}
                    {include file="catalog/_partials/miniatures/side-product.tpl" product=$product tv_product_type=$tv_product_type}
                {/foreach}
            </div>

            <div class="tvall-product-bottom-link-block">
                <a class="all-product-link" href="{$link}">
                    {l s='All New Products' mod='tvcmsnewproducts'}<i class='material-icons'>&#xe315;</i>
                </a>
            </div>
        </div>
    </div>
</div>
{/strip}