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
{if $google_sp > 0 && !empty($google_sp_array)}
<script type="application/ld+json">
{ "@context" : "http://schema.org",
  "@type" : "Organization",
  "name" : "{$shop_name|escape:'htmlall':'UTF-8'}",
  "url" : "{$web_url|escape:'htmlall':'UTF-8'}",
  {if !empty($sp_logo)}"logo": "{$sp_logo|escape:'htmlall':'UTF-8'}",{/if}
  {if !empty($sp_phone)}"contactPoint" : [
    { "@type" : "ContactPoint",
      "telephone" : "{$sp_phone|escape:'htmlall':'UTF-8'}",
      "contactType" : "customer service"
    }],{/if}
  "sameAs" : [{foreach $google_sp_array as $_item name=g_sp}"{$_item|escape:'htmlall':'UTF-8'}"{if !$smarty.foreach.g_sp.last}, {/if}{/foreach}]
}
</script>
{/if}
{if $_page_name == 'index' && ($GOOGLE_SB > 0 || $GOOGLE_SN > 0)}
{if $ps_version > 0}
<script type="application/ld+json">
{
   "@context": "http://schema.org",
   "@type": "WebSite",
   "url": "{$web_url|escape:'htmlall':'UTF-8'}"
   {if $GOOGLE_SN > 0}, "name" : "{$GOOGLE_SN_NAME|escape:'htmlall':'UTF-8'}",
   "alternateName" : "{$GOOGLE_SN_ALT|escape:'htmlall':'UTF-8'}"{/if}
   {if $GOOGLE_SB > 0},
   "potentialAction": {
     "@type": "SearchAction",
     "target": "{$link->getPageLink('search', true)|escape:'htmlall':'UTF-8'}?s={literal}{search_query}{/literal}",
     "query-input": "required name=search_query"
   }
   {/if}
}
</script>
{else}
<script type="application/ld+json">
{
   "@context": "http://schema.org",
   "@type": "WebSite",
   "url": "{$web_url|escape:'htmlall':'UTF-8'}"
   {if $GOOGLE_SN > 0}, "name" : "{$GOOGLE_SN_NAME|escape:'htmlall':'UTF-8'}",
   "alternateName" : "{$GOOGLE_SN_ALT|escape:'htmlall':'UTF-8'}"{/if}
   {if $GOOGLE_SB > 0},
   "potentialAction": {
     "@type": "SearchAction",
     "target": "{$link->getPageLink('search', true)|escape:'htmlall':'UTF-8'}?controller=search&search_query={literal}{search_query}{/literal}",
     "query-input": "required name=search_query"
   }
   {/if}
}
</script>
{/if}
{/if}

