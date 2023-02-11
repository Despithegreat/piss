<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:07
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/_partials/desk-header-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e627ef2358c4_49959651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cae6a6e9f127a31e2558b508c0a0db8de8333dd' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/_partials/desk-header-1.tpl',
      1 => 1674084822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e627ef2358c4_49959651 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="tvcmsdesktop-top-header-wrapper header-1" data-header-layout="1"><div class='container-fluid tvcmsdesktop-top-header'><div class="container tvcmsdesktop-top-wrapper"><div class='tvheader-offer-wrapper col-xl-6 col-lg-6 col-md-6 col-sm-12'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopOfferText'),$_smarty_tpl ) );?>
</div><div class='tvheader-language-currency-wrapper col-xl-6 col-lg-6 col-md-6 col-sm-12'><div class="tvheader-language"><?php if ($_smarty_tpl->tpl_vars['withData']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavLanguageBlock'),$_smarty_tpl ) );
}?></div><div class="tvheader-currency"><?php if ($_smarty_tpl->tpl_vars['withData']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavCurrencyBlock'),$_smarty_tpl ) );
}?></div></div></div></div><div class='container-fluid tvcmsdesktop-top-second hidden-md-down'><div class="container"><div class="row tvcmsdesktop-top-header-box"><div class='col-lg-4 col-md-4 col-xl-4 col-sm-12 tvcms-header-logo-wrapper'><div class="hidden-sm-down tvcms-header-logo" id="tvcmsdesktop-logo"><?php if ($_smarty_tpl->tpl_vars['withData']->value) {?><div class="tv-header-logo"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
"><img class="logo img-responsive" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" height="35" width="201"></a></div><?php }?></div></div><div class="col-lg-4 col-md-4 col-xl-4 col-sm-12 tvcmsheader-search"><div class='tvcmssearch-wrapper' id="_desktop_search"><?php if ($_smarty_tpl->tpl_vars['withData']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavSearchBlock'),$_smarty_tpl ) );
}?></div></div><div class="col-lg-4 col-md-4 col-xl-4 col-sm-12 tvcmsheader-nav-right"><div class="tv-contact-account-cart-wrapper"><div id='tvcmsdesktop-account-button'><?php if ($_smarty_tpl->tpl_vars['withData']->value) {?><div class="tv-header-account tv-account-wrapper tvcms-header-myaccount"><button class="btn-unstyle tv-myaccount-btn tv-myaccount-btn-desktop" name="User Icon" aria-label="User Icon"><svg version="1.1" id="Layer_1" x="0px" y="0px" width="31.377px" height="30.938px" viewBox="0 0 31.377 30.938" xml:space="preserve"><g><path style="fill:none;stroke:#000000;stroke-width:0.6;stroke-miterlimit:10;" d="M15.666,17.321c7.626,0,13.904,5.812,14.837,13.316h0.525c-1.253-8.325-7.642-13.6-15.341-13.6c-7.698,0-14.088,5.274-15.339,13.6h0.48C1.764,23.134,8.041,17.321,15.666,17.321z"></path><path style="fill:#FFD742;" d="M15.688,16.992c-4.494,0-8.15-3.654-8.15-8.148c0-4.497,3.656-8.152,8.15-8.152c4.497,0,8.15,3.655,8.15,8.152C23.839,13.338,20.186,16.992,15.688,16.992"></path><circle style="fill:none;stroke:#000000;stroke-miterlimit:10;" cx="15.689" cy="8.838" r="8.338"></circle></g></svg><?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?><span class="tvcms_customer_name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['gender']['name'][$_smarty_tpl->tpl_vars['customer']->value['gender']['id']], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</span><?php } else { ?><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign In','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span><?php }?></button><ul class="dropdown-menu tv-account-dropdown tv-dropdown"><?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?><li class="tvcms-signin"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" class="tvmyccount"><i class="material-icons">&#xe7fd;</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Account','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a></li><?php }?><li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavCustomerSignInBlock'),$_smarty_tpl ) );?>
</li><li class="ttvcms-wishlist-icon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavWishlistBlock'),$_smarty_tpl ) );?>
</li><li class="tvheader-compare "><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavProductCompareBlock'),$_smarty_tpl ) );?>
</li><li class="tvheader-language hidden-lg-up"></li><li class="tvheader-currency hidden-lg-up"></li></ul></div><?php }?></div><div id="_desktop_cart_manage" class="tvcms-header-cart"><?php if ($_smarty_tpl->tpl_vars['withData']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavShoppingCartBlock'),$_smarty_tpl ) );
}?></div></div></div></div></div></div><div class="tvcms-header-menu-offer-wrapper tvcmsheader-sticky"><div class="position-static tvcms-header-menu"><div class='tvcmsmain-menu-wrapper container'><div id='tvdesktop-megamenu'><?php if ($_smarty_tpl->tpl_vars['withData']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMegamenu'),$_smarty_tpl ) );
}?></div></div><div class="tvcmsdesktop-contact tvforce-hide"><?php if ($_smarty_tpl->tpl_vars['withData']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );
}?></div></div></div></div><?php }
}
