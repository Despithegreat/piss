{**
* 2007-2022 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License 3.0 (AFL-3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* https://opensource.org/licenses/AFL-3.0
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
* @author PrestaShop SA <contact@prestashop.com>
* @copyright 2007-2022 PrestaShop SA
* @license https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
* International Registered Trademark & Property of PrestaShop SA
*}
{strip}
    <div class="tvcms-header-currency tvheader-currency-wrapper" id="tvcmsdesktop-currency-selector">
        {* <span class="tv-currency-lable">{l s='Currency:' d='Shop.Theme.Global'}</span> *}
        <button class="btn-unstyle tv-currency-btn">
            <span class="tv-currency-span">{$current_currency.iso_code} {$current_currency.sign}</span>
            <i class="material-icons expand-more">&#xe313;</i>
        </button>
        <ul class="tv-currency-dropdown tv-dropdown">
            {foreach from=$currencies item=currency}
            <li {if $currency.current} class="current" {/if}> <a title="{$currency.name}" rel="nofollow" href="{$currency.url}">{$currency.iso_code} {$currency.sign}</a>
            </li>
            {/foreach}
        </ul>
    </div>
    {/strip}