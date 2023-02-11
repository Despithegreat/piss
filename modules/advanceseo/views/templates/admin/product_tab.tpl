{*
* 2007-2019 PrestaShop
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
*  @copyright 2019 FME Modules
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*}
<div class="panel">
	<h3 class="panel-heading">{l s='Robots management' mod='advanceseo'}</h3>
	<div class="alert alert-info">
		<p class="alert-text">{l s='Manage Follow and Nofollow tags for this product.' mod='advanceseo'}</p>
	</div>
	<div class="alert alert-info">
		<p>{l s='Please add this hook in <head> tag you already have in' mod='advanceseo'} {if $ps_version > 0}<strong>themes/YOUR_THEME/templates/_partials/head.tpl</strong>{else}<strong>themes/YOUR_THEME/header.tpl</strong>{/if} {l s='also remove the current name="robots" meta tag in this file.' mod='advanceseo'}</p>
		<p><strong>{l s='{hook h=\'displayIndexFollow\'}' mod='advanceseo'}</strong></p>
	</div>
	<div class="form-wrapper">
		<div class="form-group">
			<label class="control-label col-lg-6">{l s='Enable robots management' mod='advanceseo'}</label>
			<div class="col-lg-6">
				<span class="switch prestashop-switch fixed-width-lg ps-switch">
					<input id="control_index_follow_0" name="control_index_follow" value="0" type="radio"{if ($existance <= 0)} checked="checked"{/if}><label for="control_index_follow_0">{l s='No' mod='advanceseo'}</label>
					<input id="control_index_follow_1" name="control_index_follow" value="1" type="radio"{if ($existance > 0)} checked="checked"{/if}><label for="control_index_follow_1">{l s='Yes' mod='advanceseo'}</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-lg-12" style="text-align: left">{l s='Index/Follow?' mod='advanceseo'}</label>
			<div class="col-lg-12">
				<span class="switch prestashop-switch fixed-width-lg ps-switch ps-switch-md">
					<input id="prd_index_0" name="prd_index" value="0" type="radio"{if $existance_value.index <= 0} checked="checked"{/if}><label for="prd_index_0">{l s='No Index' mod='advanceseo'}</label>
					<input id="prd_index_1" name="prd_index" value="1" type="radio"{if $existance_value.index > 0} checked="checked"{/if}><label for="prd_index_1">{l s='Index' mod='advanceseo'}</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
			<div class="col-lg-12">
				<span class="switch prestashop-switch fixed-width-lg ps-switch ps-switch-md">
					<input id="prd_follow_0" name="prd_follow" value="0" type="radio"{if $existance_value.follow <= 0} checked="checked"{/if}><label for="prd_follow_0">{l s='No Follow' mod='advanceseo'}</label>
					<input id="prd_follow_1" name="prd_follow" value="1" type="radio"{if $existance_value.follow > 0} checked="checked"{/if}><label for="prd_follow_1">{l s='Follow' mod='advanceseo'}</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		</div>
	</div>
	
	{if $ps_version < 1}
	    <div class="panel-footer">
			<a href="{$link->getAdminLink('AdminProducts')|escape:'html':'UTF-8'}" class="btn btn-default"><i class="process-icon-cancel"></i> {l s='Cancel' mod='advanceseo'}</a>
			<button type="submit" name="submitAddproduct" class="btn btn-default pull-right"><i class="process-icon-save"></i> {l s='Save' mod='advanceseo'}</button>
			<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right"><i class="process-icon-save"></i> {l s='Save and stay' mod='advanceseo'}</button>
		</div>
	{/if}
</div>
{include file="./preview.tpl"}