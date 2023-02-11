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
<script type="text/javascript">
var __ps_ver = parseInt("{$ps_version|escape:'htmlall':'UTF-8'}");
var _prev_heading = "{l s='Advance SEO Preview' mod='advanceseo'}";
var _prev_lbl_title = "{l s='Meta Title:' mod='advanceseo'}";
var _prev_lbl_title_val = "{$fmm_seo_meta_title|escape:'htmlall':'UTF-8'}";
var _prev_lbl_title_desc = "{l s='Meta Description:' mod='advanceseo'}";
var _prev_lbl_desc_val = "{$fmm_seo_meta_desc|escape:'htmlall':'UTF-8'}";
var _prev_lbl_title_keys = "{l s='Meta Keywords:' mod='advanceseo'}";
var _prev_lbl_keys_val = "{$fmm_seo_meta_keys|escape:'htmlall':'UTF-8'}";
var _prev_lbl_title_rate = "{l s='SEO Rating:' mod='advanceseo'}";
var _prev_lbl_rate_val = "{$fmm_seo_rating|escape:'htmlall':'UTF-8'}";
var _prev_lbl_rate_comment = "{$fmm_seo_rating_comment|escape:'htmlall':'UTF-8'}";{literal}
var _prev_html = '<div class="fmm_seo_preview">';
_prev_html += '<h2>'+_prev_heading+'</h2>';
_prev_html += '<p><label>'+_prev_lbl_title+'</label> '+_prev_lbl_title_val+'</p>';
_prev_html += '<p><label>'+_prev_lbl_title_desc+'</label> '+_prev_lbl_desc_val+'</p>';
_prev_html += '<p><label>'+_prev_lbl_title_keys+'</label> '+_prev_lbl_keys_val+'</p>';
_prev_html += '<p><label>'+_prev_lbl_title_rate+'</label> <span>'+_prev_lbl_rate_val+'/3</span> <i class="'+_prev_lbl_rate_comment+'">'+_prev_lbl_rate_comment+'</i></p>';
_prev_html += '</div>';
$(document).ready(function()
{
	if (__ps_ver > 0) {
		setTimeout(function() {$('div#serp .serp-preview').append(_prev_html);}, 3000);
	}
	else {
		setTimeout(function() {$('div#product-seo .panel-footer').before(_prev_html);}, 3000);
	}
});
{/literal}
</script>