{**
 * 2007-2021 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @copyright 2007-2021 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

{if $enable_indexfollow <= 0}
{if $index_flag > 0}<meta name="robots" content="index" />{else}<meta name="robots" content="noindex" />{/if}
    
{if $follow_flag > 0}<meta name="robots" content="follow" />{else}<meta name="robots" content="nofollow" />{/if}
{/if}
{if $fmm_twitter_cards <= 0 && $fmm_prd_id > 0}
<meta name="twitter:card" content="product">
<meta name="twitter:site" content="{$fmm_twitter_username|escape:'htmlall':'UTF-8'}">
<meta name="twitter:creator" content="{$fmm_twitter_username|escape:'htmlall':'UTF-8'}">
<meta name="twitter:title" content="{$fmm_twitter_title|escape:'htmlall':'UTF-8'}">
<meta name="twitter:description" content="{$twitter_description|escape:'htmlall':'UTF-8'}">
<meta name="twitter:image" content="{$link->getImageLink($fmm_prd_img_link_rew, $fmm_prd_img_id, 'home_default')|escape:'htmlall':'UTF-8'}">
{/if}
{if $fmm_fb_card <= 0 && $fmm_prd_id > 0}
<meta property="og:type" content="product">
<meta property="og:url" content="{$fmm_prd_link|escape:'htmlall':'UTF-8'}">
<meta property="og:title" content="{$fmm_fb_title|escape:'htmlall':'UTF-8'}">
<meta property="og:site_name" content="{$fmm_shoptitle|escape:'htmlall':'UTF-8'}">
<meta property="og:description" content="{$fmm_fb_description|escape:'htmlall':'UTF-8'}">
<meta property="og:image" content="{$link->getImageLink($fmm_prd_img_link_rew, $fmm_prd_img_id, 'home_default')|escape:'htmlall':'UTF-8'}">
<meta property="product:pretax_price:amount" content="{$fmm_price_tax_exc|escape:'htmlall':'UTF-8'}">
<meta property="product:pretax_price:currency" content="{$fmm_currency_iso_code|escape:'htmlall':'UTF-8'}">
<meta property="product:price:amount" content="{$fmm_price_amount|escape:'htmlall':'UTF-8'}">
<meta property="product:price:currency" content="{$fmm_currency_iso_code|escape:'htmlall':'UTF-8'}">
{if $fb_admin_id > 0}<meta property="fb:admins" content="{$fb_admin_id|escape:'htmlall':'UTF-8'}" />{/if}
{/if}