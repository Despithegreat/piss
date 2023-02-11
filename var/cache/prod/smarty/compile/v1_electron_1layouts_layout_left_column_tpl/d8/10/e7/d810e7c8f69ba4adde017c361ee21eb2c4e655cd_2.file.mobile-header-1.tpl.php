<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:07
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/_partials/mobile-header-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e627ef3c1a05_52283798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd810e7c8f69ba4adde017c361ee21eb2c4e655cd' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/_partials/mobile-header-1.tpl',
      1 => 1674084822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e627ef3c1a05_52283798 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div id='tvcms-mobile-view-header' class="hidden-lg-up tvheader-mobile-layout mh1 mobile-header-1" data-header-mobile-layout="1"><div class="tvcmsmobile-top-wrapper"><div class='tvmobileheader-offer-wrapper col-sm-12'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopOfferText'),$_smarty_tpl ) );?>
</div></div><div class='tvcmsmobile-header-menu-offer-text tvcmsheader-sticky'><div class="tvcmsmobile-header-menu col-md-1 col-sm-12 col-xs-2"><div class="tvmobile-sliderbar-btn"><a href="Javascript:void(0);" title=""><i class='material-icons'>&#xe5d2;</i></a></div><div class="tvmobile-slidebar"><div class="tvmobile-dropdown-close"><a href="Javascript:void(0);"><i class='material-icons'>&#xe14c;</i></a></div><div id='tvmobile-megamenu'><?php if ($_smarty_tpl->tpl_vars['withData']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMegamenu'),$_smarty_tpl ) );
}?></div><div class="tvcmsmobile-contact"><?php if ($_smarty_tpl->tpl_vars['withData']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );
}?></div><div id='tvmobile-lang'><?php if ($_smarty_tpl->tpl_vars['withData']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavLanguageBlock'),$_smarty_tpl ) );
}?></div><div id='tvmobile-curr'><?php if ($_smarty_tpl->tpl_vars['withData']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavCurrencyBlock'),$_smarty_tpl ) );
}?></div></div></div><div class="tvcmsmobile-header-logo-right-wrapper col-md-8 col-sm-12 col-xs-2"><div id='tvcmsmobile-header-logo'><?php if ($_smarty_tpl->tpl_vars['withData']->value) {?><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
" class="tv-header-logo"><img class="logo img-responsive" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" height="34" width="200"></a><?php }?></div></div><div class="col-md-3 col-sm-12 col-xs-8 tvcmsmobile-cart-acount-text"><div id="tvcmsmobile-account-button"><?php if ($_smarty_tpl->tpl_vars['withData']->value) {?><div class="tvcms-header-myaccount"><div class="tv-header-account"><div class="tv-account-wrapper"><button class="btn-unstyle tv-myaccount-btn tv-myaccount-btn-desktop" name="User Icon" aria-label="User Icon"><svg version="1.1" id="Layer_1" x="0px" y="0px" width="30.932px" height="31.088px" viewBox="0 0 30.932 31.088" xml:space="preserve"><g><path style="fill:none;stroke:#000000;stroke-width:0.55;stroke-miterlimit:10;" d="M15.444,17.898c7.457,0,13.596,5.579,14.509,12.789h0.513c-1.226-7.997-7.473-13.061-15.001-13.061c-7.528,0-13.776,5.063-14.999,13.061h0.47C1.848,23.479,7.987,17.898,15.444,17.898z"></path><path style="fill:#FFD742;" d="M15.466,17.151c-4.23,0-7.67-3.438-7.67-7.668c0-4.231,3.44-7.671,7.67-7.671c4.232,0,7.67,3.439,7.67,7.671C23.136,13.714,19.698,17.151,15.466,17.151"></path><circle style="fill:none;stroke:#000000;stroke-miterlimit:10;" cx="15.466" cy="9.49" r="8.152"></circle></g></svg></button><ul class="dropdown-menu tv-account-dropdown tv-dropdown"><?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?><li><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" class="tvmyccount"><i class="material-icons">person</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Account','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a></li><?php }?><li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavCustomerSignInBlock'),$_smarty_tpl ) );?>
</li><li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavWishlistBlock'),$_smarty_tpl ) );?>
</li><li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavProductCompareBlock'),$_smarty_tpl ) );?>
</li></ul></div></div></div><?php }?></div><div id="tvmobile-cart"><?php if ($_smarty_tpl->tpl_vars['withData']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavShoppingCartBlock'),$_smarty_tpl ) );
}?></div></div></div><div class='tvcmsmobile-header-search-logo-wrapper'><div class="tvcmsmobile-header-search col-md-12 col-sm-12"><div id="tvcmsmobile-search"><?php if ($_smarty_tpl->tpl_vars['withData']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavSearchBlock'),$_smarty_tpl ) );
}?></div></div></div></div><?php }
}
