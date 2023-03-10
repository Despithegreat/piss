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
* @author PrestaShop SA <contact@prestashop.com>
    * @copyright 2007-2022 PrestaShop SA
    * @license http://opensource.org/licenses/afl-3.0.php Academic Free License (AFL 3.0)
    * International Registered Trademark & Property of PrestaShop SA
    *}
    {strip}
    <div class='tvpagination-title-item-main-wrapper tvpagination-title-item-wrapper'>
        <nav class="pagination tvinner-page-pagination-wrapper">
            <div class="col-md-6 col-lg-8 col-xs-12 tvinner-page-showing-item">
                {block name='pagination_summary'}
                {l s='Showing %from%-%to% of %total% item(s)' d='Shop.Theme.Catalog' sprintf=['%from%' => $pagination.items_shown_from ,'%to%' => $pagination.items_shown_to, '%total%' => $pagination.total_items]}
                {/block}
            </div>
            <div class="col-md-6 col-lg-4 col-xs-12 tvinner-page-pagination-content-box">
                {block name='pagination_page_list'}
                {if !empty($pagination.pages)}
                <ul class="page-list clearfix text-sm-center tvinner-page-pagination">
                    {$tmp = false}
                    {foreach from=$pagination.pages item="page"}
                    <li {if $page.current} class="current" {/if}> {if $page.type==='spacer' } <span class="spacer">&hellip;</span>
                        {else}
                        <a rel="{if $page.type === 'previous'}prev{elseif $page.type === 'next'}next{else}nofollow{/if}" href="{$page.url}" class="{if $page.type === 'previous'}previous {elseif $page.type === 'next'}next {/if}{['disabled' => !$page.clickable, 'js-blog-link' => true]|classnames}">
                            {if $page.type === 'previous'}
                            <i class='material-icons'>&#xe314;</i>
                            {* <span>{l s='Previous' d='Shop.Theme.Actions'}</span> *}
                            {elseif $page.type === 'next'}
                            {* <span>{l s='Next' d='Shop.Theme.Actions'}</span> *}
                            <i class='material-icons'>&#xe315;</i>
                            {else}
                            {$page.page}
                            {/if}
                        </a>
                        {/if}
                    </li>
                    {/foreach}
                </ul>
                {/if}
                {/block}
            </div>
        </nav>
    </div>
    {/strip}