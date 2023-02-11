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
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2021 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<script type="text/javascript">
var tab_module = "{$tab_module|escape:'htmlall':'UTF-8'}";
</script>
<div class="bootstrap">
    <div class="page-head custom-tab-fmm-advseo {$_ps_ver|escape:'htmlall':'UTF-8'}">
        <div class="page-head-tabs" id="head_tabs">
            <ul class="nav">
                <li class="active">
                    <a href="#general" class="general" data-toggle="tab">{l s='General' mod='advanceseo'}</a>
                </li>
                <li>
                    <a href="#keywords" class="keywords" data-toggle="tab">{l s='Keywords Generator' mod='advanceseo'}</a>
                </li>
                <li>
                    <a href="#google" class="google" data-toggle="tab">{l s='Google Profile' mod='advanceseo'}</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="bootstrap" id="advanceseo_configuration">
    <!-- Module content -->
    <div id="modulecontent" class="clearfix">
        {$__html nofilter}{*HTML Content*}
        {$__errors nofilter}{*HTML Content*}
        <!-- Tab panes -->
        <div class="tab-content row">
            <div class="tab-pane active" id="general">
                <div class="tab_cap_listing">
                    {include file="./tabs/general.tpl"}
                </div>
            </div>
            <div class="tab-pane" id="keywords">
                <div class="tab_cap_listing">
                    {include file="./tabs/keywords.tpl"}
                </div>
            </div>
            <div class="tab-pane" id="google">
                <div class="tab_cap_listing">
                    {include file="./tabs/google.tpl"}
                </div>
            </div>
        </div>
    </div>
</div>
{include file="../hook/info.tpl"}
