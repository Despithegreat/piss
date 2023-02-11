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
	<p>{l s='Please add this hook in <head> tag you already have in' mod='advanceseo'} {if $ps_version > 0}<strong>themes/YOUR_THEME/templates/_partials/head.tpl</strong>{else}<strong>themes/YOUR_THEME/header.tpl</strong>{/if} {l s=' in this file.' mod='advanceseo'}</p>
	<p><strong>{l s='{hook h=\'displayIndexFollow\'}' mod='advanceseo'}</strong></p>
</div>
<div class="panel">
	<div class="panel-heading"><i class="icon-cogs"></i> {l s='Settings' mod='advanceseo'}</div>
	<div class="form-wrapper">
		<div class="form-group">
			<label class="control-label col-lg-4">{l s='Enable Twitter Card Tags' mod='advanceseo'}</label>
			<div class="col-lg-8">
				<span class="switch prestashop-switch fixed-width-lg">
					<input id="control_st_twittwer_0" name="control_st_twittwer" value="0" type="radio"{if ($control_st_twittwer <= 0)} checked="checked"{/if}><label for="control_st_twittwer_0">{l s='Yes' mod='advanceseo'}</label>
					<input id="control_st_twittwer_1" name="control_st_twittwer" value="1" type="radio"{if ($control_st_twittwer > 0)} checked="checked"{/if}><label for="control_st_twittwer_1">{l s='No' mod='advanceseo'}</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-lg-4">{l s='Twitter Username' mod='advanceseo'}</label>
			<div class="col-lg-8">
				<input type="text" name="twitter_username" placeholder="@FMEModules" value="{$twitter_username|escape:'htmlall':'UTF-8'}" />
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-lg-4">{l s='Title' mod='advanceseo'}</label>
			<div class="col-lg-8">
				<input type="text" name="twitter_title" placeholder="productname-productdesc" value="{$twitter_title|escape:'htmlall':'UTF-8'}" />
				<p style="clear:both"><a class="fmm_dropme" onclick="appendThisTag(this);" title="productname">{l s='Product Name' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productcategory">{l s='Product Category' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productdesc">{l s='Product Description' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productshortdesc">{l s='Product Short Description' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productreference">{l s='Product reference' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productmanufacturer">{l s='Product Manufacturer' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productfeature">{l s='Product Features' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productretailpricewithtax">{l s='Product retail price with tax' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productretailpricewithouttax">{l s='Product retail price withOut tax' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productspecificpricewithtax">{l s='Product specific price with tax' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productspecificpricewithouttax">{l s='Product specific price withOut tax' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productreduction">{l s='Product reduction' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="shoptitle">{l s='Shop Title' mod='advanceseo'}</a>
				</p>
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-lg-4">{l s='Description' mod='advanceseo'}</label>
			<div class="col-lg-8">
				<input type="text" name="twitter_description" placeholder="productname-productdesc" value="{$twitter_description|escape:'htmlall':'UTF-8'}" />
				<p style="clear:both"><a class="fmm_dropme" onclick="appendThisTag(this);" title="productname">{l s='Product Name' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productcategory">{l s='Product Category' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productdesc">{l s='Product Description' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productshortdesc">{l s='Product Short Description' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productreference">{l s='Product reference' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productmanufacturer">{l s='Product Manufacturer' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productfeature">{l s='Product Features' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productretailpricewithtax">{l s='Product retail price with tax' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productretailpricewithouttax">{l s='Product retail price withOut tax' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productspecificpricewithtax">{l s='Product specific price with tax' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productspecificpricewithouttax">{l s='Product specific price withOut tax' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productreduction">{l s='Product reduction' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="shoptitle">{l s='Shop Title' mod='advanceseo'}</a>
				</p>
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-lg-4">{l s='Enable Facebook Tags' mod='advanceseo'}</label>
			<div class="col-lg-8">
				<span class="switch prestashop-switch fixed-width-lg">
					<input id="control_st_fb_0" name="control_st_fb" value="0" type="radio"{if ($control_st_fb <= 0)} checked="checked"{/if}><label for="control_st_fb_0">{l s='Yes' mod='advanceseo'}</label>
					<input id="control_st_fb_1" name="control_st_fb" value="1" type="radio"{if ($control_st_fb > 0)} checked="checked"{/if}><label for="control_st_fb_1">{l s='No' mod='advanceseo'}</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-lg-4">{l s='Facebook Admin ID' mod='advanceseo'}</label>
			<div class="col-lg-8">
				<input type="text" name="fb_admin_id" placeholder="123456789000" value="{$fb_admin_id|escape:'htmlall':'UTF-8'}" />
				<small class="form-text fmm_exp_tags">{l s='Please use numeric Facebook Admin ID' mod='advanceseo'}</small>
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-lg-4">{l s='Title' mod='advanceseo'}</label>
			<div class="col-lg-8">
				<input type="text" name="facebook_title" placeholder="productname-productdesc" value="{$facebook_title|escape:'htmlall':'UTF-8'}" />
				<p style="clear:both"><a class="fmm_dropme" onclick="appendThisTag(this);" title="productname">{l s='Product Name' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productcategory">{l s='Product Category' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productdesc">{l s='Product Description' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productshortdesc">{l s='Product Short Description' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productreference">{l s='Product reference' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productmanufacturer">{l s='Product Manufacturer' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productfeature">{l s='Product Features' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productretailpricewithtax">{l s='Product retail price with tax' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productretailpricewithouttax">{l s='Product retail price withOut tax' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productspecificpricewithtax">{l s='Product specific price with tax' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productspecificpricewithouttax">{l s='Product specific price withOut tax' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productreduction">{l s='Product reduction' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="shoptitle">{l s='Shop Title' mod='advanceseo'}</a>
				</p>
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-lg-4">{l s='Description' mod='advanceseo'}</label>
			<div class="col-lg-8">
				<input type="text" name="facebook_description" placeholder="productname-productdesc" value="{$facebook_description|escape:'htmlall':'UTF-8'}" />
				<p style="clear:both"><a class="fmm_dropme" onclick="appendThisTag(this);" title="productname">{l s='Product Name' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productcategory">{l s='Product Category' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productdesc">{l s='Product Description' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productshortdesc">{l s='Product Short Description' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productreference">{l s='Product reference' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productmanufacturer">{l s='Product Manufacturer' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productfeature">{l s='Product Features' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productretailpricewithtax">{l s='Product retail price with tax' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productretailpricewithouttax">{l s='Product retail price withOut tax' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productspecificpricewithtax">{l s='Product specific price with tax' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productspecificpricewithouttax">{l s='Product specific price withOut tax' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="productreduction">{l s='Product reduction' mod='advanceseo'}</a><br/>
					<a class="fmm_dropme" onclick="appendThisTag(this);" title="shoptitle">{l s='Shop Title' mod='advanceseo'}</a>
				</p>
			</div>
		</div>
	</div>
	<div class="panel-footer">
		<button name="submitSocialTags" class="btn btn-default pull-right" type="submit"><i class="process-icon-save"></i> {l s='Save' mod='advanceseo'}</button>
	</div>
</div>
</form>
<script type="text/javascript">{literal}
	function appendThisTag(el) {
		var tag_product = $(el).attr("title");
		var input_current_value = $(el).parent().parent().find("input").val();
		$(el).parent().parent().find("input").val(input_current_value+tag_product);
	}
</script>
<style type="text/css">
.fmm_dropme { cursor: pointer;}
.fmm_exp_tags { clear: both;}
</style>
{/literal}