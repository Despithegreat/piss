{**
* 2015 Skrill
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
*
*  @author Skrill <contact@skrill.com>
*  @copyright  2015 Skrill
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*}


<div class="card mt-2 d-print-none" id="skrill_payment_info">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3 class="card-header-title">
                    <i class="icon-credit-card"></i>
                    {if {l s='BACKEND_GENERAL_INFORMATION' mod='skrill'} == "BACKEND_GENERAL_INFORMATION"}PAYMENT INFORMATION{else}{l s='BACKEND_GENERAL_INFORMATION' mod='skrill'}{/if}
                    <span class="badge" style="padding: 0;">{if {l s='BACKEND_TT_BY_SKRILL' mod='skrill'} == "BACKEND_TT_BY_SKRILL"}by Skrill{else}{l s='BACKEND_TT_BY_SKRILL' mod='skrill'}{/if}</span>
                </h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mt-3">
            <div id="skrill_info_tab1" class="col-xxl-6">
                <p class="mb-1">
                    <strong>{if {l s='SKRILL_BACKEND_ORDER_PM' mod='skrill'} == "SKRILL_BACKEND_ORDER_PM"}Used payment method{else}{l s='SKRILL_BACKEND_ORDER_PM' mod='skrill'}{/if}:</strong>
                </p>
                <p>
                    {$paymentInfo.method|escape:'htmlall':'UTF-8'}
                </p>
                <p class="mb-1">
                    <strong>{if {l s='SKRILL_BACKEND_ORDER_STATUS' mod='skrill'} == "SKRILL_BACKEND_ORDER_STATUS"}Payment status{else}{l s='SKRILL_BACKEND_ORDER_STATUS' mod='skrill'}{/if}:</strong>
                </p>
                <p>{$paymentInfo.status|escape:'htmlall':'UTF-8'}</p>

                {if isset($paymentInfo.fraudPayment)}
                <p class="mb-1">
                    <strong>Fraud Status:</strong>
                </p>
                <p>{if {l s='BACKEND_TT_FRAUD' mod='skrill'} == "BACKEND_TT_FRAUD"}was considered fraudulent{else}{l s='BACKEND_TT_FRAUD' mod='skrill'}{/if}</p>
                {/if} {if isset($paymentInfo.order_origin)}
                <p class="mb-1"><strong>{if {l s='SKRILL_BACKEND_ORDER_ORIGIN' mod='skrill'} == "SKRILL_BACKEND_ORDER_ORIGIN"}Order originated from{else}{l s='SKRILL_BACKEND_ORDER_ORIGIN' mod='skrill'}{/if}</strong></p>
                <p>{$paymentInfo.order_origin|escape:'htmlall':'UTF-8'}</p>
                {/if}
            </div>

            <div id="skrill_info_tab2" class="col-xxl-6">
                {if isset($paymentInfo.order_country)}
                <p class="mb-1"><strong>{if {l s='SKRILL_BACKEND_ORDER_COUNTRY' mod='skrill'} == "SKRILL_BACKEND_ORDER_COUNTRY"}Country (of the card-issuer){else}{l s='SKRILL_BACKEND_ORDER_COUNTRY' mod='skrill'}{/if}</strong></p>
                <p>{$paymentInfo.order_country|escape:'htmlall':'UTF-8'}</p>
                {/if}
                <p class="mb-1"><strong>{if {l s='SKRILL_BACKEND_ORDER_CURRENCY' mod='skrill'} == "SKRILL_BACKEND_ORDER_CURRENCY"}Currency{else}{l s='SKRILL_BACKEND_ORDER_CURRENCY' mod='skrill'}{/if}</strong></p>
                <p>{$paymentInfo.currency|escape:'htmlall':'UTF-8'}</p>

                <p class="mb-1"><strong>{if {l s='BACKEND_TT_TRANSACTION_ID' mod='skrill'} == "BACKEND_TT_TRANSACTION_ID"}Transaction ID{else}{l s='BACKEND_TT_TRANSACTION_ID' mod='skrill'}{/if}</strong></p>
                <p>{$paymentInfo.transaction_id|escape:'htmlall':'UTF-8'}</p>

                {if isset($paymentInfo.skrill_account)}
                <p class="mb-1"><strong>{if {l s='SKRILL_BACKEND_EMAIL_ACCOUNT' mod='skrill'} == "SKRILL_BACKEND_EMAIL_ACCOUNT"}Email address of skrill account{else}{l s='SKRILL_BACKEND_EMAIL_ACCOUNT' mod='skrill'}{/if}</strong></p>
                <p>{$paymentInfo.skrill_account|escape:'htmlall':'UTF-8'}</p>
                {/if}
            </div>
        </div>
        <form method='POST' action="{$smarty.server.REQUEST_URI|escape:'htmlall':'UTF-8'}">
        
        {if $buttonUpdateOrder}
        <input type="hidden" name="id_order" value="{$orderId|escape:'htmlall':'UTF-8'}" />
        <input type="hidden" name='detailOrderUrl' value="{$smarty.server.REQUEST_URI|escape:'htmlall':'UTF-8'}">
        <button type="submit" class="btn btn-primary pull-right" name="skrillUpdateOrder">
            {if {l s='BACKEND_BT_UPDATE_ORDER' mod='skrill'} == "BACKEND_BT_UPDATE_ORDER"}Update Order{else}{l s='BACKEND_BT_UPDATE_ORDER' mod='skrill'}{/if}
        </button>
        {/if} 
        
        {if $buttonRefundOrder}
        <input type="hidden" name="id_order" value="{$orderId|escape:'htmlall':'UTF-8'}" />
        <input type="hidden" name='detailOrderUrl' value="{$smarty.server.REQUEST_URI|escape:'htmlall':'UTF-8'}">
        <button type="submit" class="btn btn-primary pull-right" name="skrillRefundOrder" id="skrillRefundOrder">Refund</button>
        {/if}
        </form>
    </div>
</div>





<script type='text/javascript'>

$(document).ready(function () {
$("#skrill_payment_info").insertAfter('#customerCard');

{if $buttonUpdateOrder}
    $('form[name="update_order_status"]').find("button").attr('disabled','disabled');
{/if}
});
</script>


