{*
* 2007-2018 PrestaShop
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
*  @author    FMM Modules
*  @copyright 2018 FME Modules
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*}
<form class="form-horizontal" enctype="multipart/form-data" method="post" id="configuration_form" action="{$action|escape:'htmlall':'UTF-8'}">
<div class="alert alert-info">
	<p>{l s='Please add this hook in <head> tag you already have in' mod='advanceseo'} {if $ps_version > 0}<strong>themes/YOUR_THEME/templates/_partials/head.tpl</strong>{else}<strong>themes/YOUR_THEME/header.tpl</strong>{/if} {l s='also remove the current name="robots" meta tag in this file.' mod='advanceseo'}</p>
	<p><strong>{l s='{hook h=\'displayIndexFollow\'}' mod='advanceseo'}</strong></p>
</div>
<div class="panel">
	<div class="panel-heading"><i class="icon-cogs"></i> {l s='Enable Index and Follow management' mod='advanceseo'}</div>
	<div class="form-wrapper">
		<div class="form-group">
			<label class="control-label col-lg-6">{l s='Enable Index and Follow management' mod='advanceseo'}</label>
			<div class="col-lg-6">
				<span class="switch prestashop-switch fixed-width-lg">
					<input id="control_index_follow_0" name="control_index_follow" value="0" type="radio"{if ($control_index_follow <= 0)} checked="checked"{/if}><label for="control_index_follow_0">{l s='Yes' mod='advanceseo'}</label>
					<input id="control_index_follow_1" name="control_index_follow" value="1" type="radio"{if ($control_index_follow > 0)} checked="checked"{/if}><label for="control_index_follow_1">{l s='No' mod='advanceseo'}</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		</div>
	</div>
	<div class="panel-footer">
		<button name="submitIndexFollow" class="btn btn-default pull-right" type="submit"><i class="process-icon-save"></i> {l s='Save' mod='advanceseo'}</button>
	</div>
</div>
{if !empty($cms_categories)}
<div class="panel">
	<div class="panel-heading"><i class="icon-cogs"></i> {l s='CMS Category Pages' mod='advanceseo'}</div>
	<div class="form-wrapper">
		{foreach from=$cms_categories item=_item}
		<div class="form-group">
			<label class="control-label col-lg-4">{$_item.name|escape:'htmlall':'UTF-8'}</label>
			<div class="col-lg-4">
				<span class="switch prestashop-switch fixed-width-lg">
					<input id="cms_category_index_{$_item.id_cms_category|escape:'htmlall':'UTF-8'}_1" name="cms_category_index[{$_item.id_cms_category|escape:'htmlall':'UTF-8'}]" value="1" type="radio"{if $_item.indexed > 0} checked="checked"{/if}><label for="cms_category_index_{$_item.id_cms_category|escape:'htmlall':'UTF-8'}_1">{l s='Index' mod='advanceseo'}</label>
					<input id="cms_category_index_{$_item.id_cms_category|escape:'htmlall':'UTF-8'}_0" name="cms_category_index[{$_item.id_cms_category|escape:'htmlall':'UTF-8'}]" value="0" type="radio"{if $_item.indexed <= 0} checked="checked"{/if}><label for="cms_category_index_{$_item.id_cms_category|escape:'htmlall':'UTF-8'}_0">{l s='No Index' mod='advanceseo'}</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
			<div class="col-lg-4">
				<span class="switch prestashop-switch fixed-width-lg">
					<input id="cms_category_follow_{$_item.id_cms_category|escape:'htmlall':'UTF-8'}_1" name="cms_category_follow[{$_item.id_cms_category|escape:'htmlall':'UTF-8'}]" value="1" type="radio"{if $_item.followed > 0} checked="checked"{/if}><label for="cms_category_follow_{$_item.id_cms_category|escape:'htmlall':'UTF-8'}_1">{l s='Follow' mod='advanceseo'}</label>
					<input id="cms_category_follow_{$_item.id_cms_category|escape:'htmlall':'UTF-8'}_0" name="cms_category_follow[{$_item.id_cms_category|escape:'htmlall':'UTF-8'}]" value="0" type="radio"{if $_item.followed <= 0} checked="checked"{/if}><label for="cms_category_follow_{$_item.id_cms_category|escape:'htmlall':'UTF-8'}_0">{l s='No Follow' mod='advanceseo'}</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		</div>
		{/foreach}
	</div>
	<div class="panel-footer">
		<button name="submitIndexFollow" class="btn btn-default pull-right" type="submit"><i class="process-icon-save"></i> {l s='Save' mod='advanceseo'}</button>
	</div>
</div>
{/if}
{if !empty($cms_pages)}
<div class="panel">
	<div class="panel-heading"><i class="icon-cogs"></i> {l s='CMS Pages' mod='advanceseo'}</div>
	<div class="form-wrapper">
		{foreach from=$cms_pages item=_item}
		<div class="form-group">
			<label class="control-label col-lg-4">{$_item.meta_title|escape:'htmlall':'UTF-8'}</label>
			<div class="col-lg-4">
				<span class="switch prestashop-switch fixed-width-lg">
					<input id="cms_pages_index_{$_item.id_cms|escape:'htmlall':'UTF-8'}_1" name="cms_pages_index[{$_item.id_cms|escape:'htmlall':'UTF-8'}]" value="1" type="radio"{if $_item.indexed > 0} checked="checked"{/if}><label for="cms_pages_index_{$_item.id_cms|escape:'htmlall':'UTF-8'}_1">{l s='Index' mod='advanceseo'}</label>
					<input id="cms_pages_index_{$_item.id_cms|escape:'htmlall':'UTF-8'}_0" name="cms_pages_index[{$_item.id_cms|escape:'htmlall':'UTF-8'}]" value="0" type="radio"{if $_item.indexed <= 0} checked="checked"{/if}><label for="cms_pages_index_{$_item.id_cms|escape:'htmlall':'UTF-8'}_0">{l s='No Index' mod='advanceseo'}</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
			<div class="col-lg-4">
				<span class="switch prestashop-switch fixed-width-lg">
					<input id="cms_pages_follow_{$_item.id_cms|escape:'htmlall':'UTF-8'}_1" name="cms_pages_follow[{$_item.id_cms|escape:'htmlall':'UTF-8'}]" value="1" type="radio"{if $_item.followed > 0} checked="checked"{/if}><label for="cms_pages_follow_{$_item.id_cms|escape:'htmlall':'UTF-8'}_1">{l s='Follow' mod='advanceseo'}</label>
					<input id="cms_pages_follow_{$_item.id_cms|escape:'htmlall':'UTF-8'}_0" name="cms_pages_follow[{$_item.id_cms|escape:'htmlall':'UTF-8'}]" value="0" type="radio"{if $_item.followed <= 0} checked="checked"{/if}><label for="cms_pages_follow_{$_item.id_cms|escape:'htmlall':'UTF-8'}_0">{l s='No Follow' mod='advanceseo'}</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		</div>
		{/foreach}
	</div>
	<div class="panel-footer">
		<button name="submitIndexFollow" class="btn btn-default pull-right" type="submit"><i class="process-icon-save"></i> {l s='Save' mod='advanceseo'}</button>
	</div>
</div>
{/if}

{if !empty($categories)}
<div class="panel">
	<div class="panel-heading"><i class="icon-cogs"></i> {l s='Catalog Category Pages' mod='advanceseo'}</div>
	<div class="form-wrapper">
		{foreach from=$categories item=_item}
		<div class="form-group">
			<label class="control-label col-lg-4">{$_item.name|escape:'htmlall':'UTF-8'}</label>
			<div class="col-lg-4">
				<span class="switch prestashop-switch fixed-width-lg">
					<input id="category_index_{$_item.id_category|escape:'htmlall':'UTF-8'}_1" name="category_index[{$_item.id_category|escape:'htmlall':'UTF-8'}]" value="1" type="radio"{if $_item.indexed > 0} checked="checked"{/if}><label for="category_index_{$_item.id_category|escape:'htmlall':'UTF-8'}_1">{l s='Index' mod='advanceseo'}</label>
					<input id="category_index_{$_item.id_category|escape:'htmlall':'UTF-8'}_0" name="category_index[{$_item.id_category|escape:'htmlall':'UTF-8'}]" value="0" type="radio"{if $_item.indexed <= 0} checked="checked"{/if}><label for="category_index_{$_item.id_category|escape:'htmlall':'UTF-8'}_0">{l s='No Index' mod='advanceseo'}</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
			<div class="col-lg-4">
				<span class="switch prestashop-switch fixed-width-lg">
					<input id="category_follow_{$_item.id_category|escape:'htmlall':'UTF-8'}_1" name="category_follow[{$_item.id_category|escape:'htmlall':'UTF-8'}]" value="1" type="radio"{if $_item.followed > 0} checked="checked"{/if}><label for="category_follow_{$_item.id_category|escape:'htmlall':'UTF-8'}_1">{l s='Follow' mod='advanceseo'}</label>
					<input id="category_follow_{$_item.id_category|escape:'htmlall':'UTF-8'}_0" name="category_follow[{$_item.id_category|escape:'htmlall':'UTF-8'}]" value="0" type="radio"{if $_item.followed <= 0} checked="checked"{/if}><label for="category_follow_{$_item.id_category|escape:'htmlall':'UTF-8'}_0">{l s='No Follow' mod='advanceseo'}</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		</div>
		{/foreach}
	</div>
	<div class="panel-footer">
		<button name="submitIndexFollow" class="btn btn-default pull-right" type="submit"><i class="process-icon-save"></i> {l s='Save' mod='advanceseo'}</button>
	</div>
</div>
{/if}
</form>