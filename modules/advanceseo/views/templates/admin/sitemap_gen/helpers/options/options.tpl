{*
* 2007-2021 PrestaShop
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2021 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{extends file="helpers/options/options.tpl"}
{block name="input"}
	{if $field['type'] == 'pages'}
		<div class="col-lg-12" id="advanceseo_chk_blk">
			{if (empty($store_metas))} 
				<p>{l s='No pages found' mod='advanceseo'}</p>
			{else}
			<ul class="advseo_selector">
				<li><a href="javascript:void(0);" onclick="selectAll();">{l s='Select All' mod='advanceseo'}</a></li>
				<li><a href="javascript:void(0);" onclick="UnSelectAll();">{l s='Unselect All' mod='advanceseo'}</a></li>
			</ul>
			<ul id="advseo_pages_excl">
				{foreach  from=$store_metas item=store_meta}
				<li>
					<input type="checkbox" class="gsitemap_metas" name="gsitemap_meta[]" value="{$store_meta['id_meta']|escape:'htmlall':'UTF-8'}" id="exc_{$store_meta['id_meta']|escape:'htmlall':'UTF-8'}" /> <label for="exc_{$store_meta['id_meta']|escape:'htmlall':'UTF-8'}">{$store_meta['title']|escape:'htmlall':'UTF-8'} [ {$store_meta['page']|escape:'htmlall':'UTF-8'} ]</label>
				</li>
				{/foreach}
			</ul>
			<p class="advseo_warning">{l s='Warning: These pages list only applies if you select All URLs from sitemap to generate.' mod='advanceseo'}</p>
			{/if}
		</div>
	{elseif $field['type'] == 'opts'}
	<div class="col-lg-6 col-xs-12">
		<ul class="advseo_extra_opts">
			<li><input type="checkbox" id="images_included" name="images_included" value="1" /> <label for="images_included">{l s='Include images also from Server' mod='advanceseo'}</label></li>
			<li><input type="checkbox" id="images_included_cdn" name="images_included_cdn" value="1"{$cdn_use_html} /> <label for="images_included_cdn">{l s='Using CDN for images?' mod='advanceseo'}</label></li>
			<li><input type="checkbox" id="images_included_ping_se" name="images_included_ping_se" value="1"{$ping_se_use_html} /> <label for="images_included_ping_se">{l s='Ping Search Engines for new sitemap?' mod='advanceseo'}</label></li>
		</ul>
	</div>
	{else}
		{$smarty.block.parent}
	{/if}
{/block}
