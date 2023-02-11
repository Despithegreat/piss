<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:07
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e627ef323466_63881111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
      1 => 1674084822,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e627ef323466_63881111 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="_desktop_cart"><div class="blockcart cart-preview <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>active<?php } else { ?>inactive<?php }?> tv-header-cart" data-refresh-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
"><div class="tvheader-cart-wrapper <?php if (Configuration::get('TVCMSCUSTOMSETTING_CART_VIEW') == 'pop-up') {?>tvheader-cart-wrapper-popup<?php }?>"><div class='tvheader-cart-btn-wrapper'><a rel="nofollow" href="JavaScript:void(0);" data-url='<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
' title='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Cart",'d'=>"Shop.Theme.Checkout"),$_smarty_tpl ) );?>
'><div class="tvcart-icon-text-wrapper"><div class="tv-cart-icon tvheader-right-icon tv-cart-icon-main"><svg version="1.1" id="Layer_1" x="0px" y="0px" width="36px" height="36.289px" viewBox="0 0 36 36.289" xml:space="preserve"><g><path style="fill:#FFD741;" d="M6.266,11.058h28.609l-6.657,11.975H8.019C8.019,23.033,5.582,12.35,6.266,11.058"></path><path d="M9.174,29.448c-0.29,0-0.525-0.235-0.525-0.523c0-0.291,0.236-0.528,0.525-0.528h22.059c1.223,0,2.217-0.995,2.217-2.218c0-1.224-0.994-2.22-2.217-2.22H8.193c-0.257,0-0.475-0.183-0.517-0.435L4.537,5.223L0.25,0.992c-0.101-0.098-0.157-0.229-0.16-0.37C0.088,0.483,0.142,0.351,0.241,0.248C0.339,0.146,0.473,0.09,0.615,0.09c0.14,0,0.268,0.052,0.37,0.149l4.396,4.286c0.081,0.078,0.133,0.177,0.151,0.287l0.914,5.322h28.938c0.188,0,0.361,0.101,0.454,0.264c0.095,0.163,0.094,0.364-0.001,0.526L28.88,22.907h2.354c1.803,0,3.27,1.468,3.27,3.271c0,1.803-1.467,3.27-3.27,3.27H9.174z M8.637,22.907h18.912l6.922-11.721H6.626L8.637,22.907z"></path><ellipse style="fill:none;stroke:#000000;stroke-linejoin:round;stroke-miterlimit:10;" cx="15.269" cy="33.8" rx="1.934" ry="1.963"></ellipse><ellipse style="fill:none;stroke:#000000;stroke-linejoin:round;stroke-miterlimit:10;" cx="25.147" cy="33.8" rx="1.934" ry="1.963"></ellipse></g></svg></div><div class="tv-cart-cart-inner"><span class="cart-products-count"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span></div></div></a></div><?php if (Configuration::get('TVCMSCUSTOMSETTING_CART_VIEW') == 'classic') {?><div class="ttvcmscart-show-dropdown-right"><?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?><div class="ttvcart-scroll-container"><div class="ttvcart-close-title-count"><button class="ttvclose-cart"></button><div class="ttvcart-top-title"><h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h4></div><div class="ttvcart-counter"><span class="ttvcart-products-count"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span></div></div><div class="ttvcart-product-content-box ttvscroll-container"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?><div class="ttvcart-product-wrapper items"><div class="tvcart-product-list-img"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="tvshoping-cart-dropdown-img-block"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['height'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy"></a></div><div class="tvcart-product-content"><div class="tvshoping-cart-dropdown-title"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class=""><span class="product-name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></a></div><div class="tvcart-product-list-box"><span class="tvshopping-cart-qty"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'QTY :','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span><span class="product-qty"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span></div><span class="product-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?><span class="regular-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?><div class="tvcart-product-remove"><?php $_smarty_tpl->_assignInScope('url', ('controller=cart&delete=').($_smarty_tpl->tpl_vars['product']->value['id_product']));?><a class="remove-from-cart tvcmsremove-from-cart" rel="nofollow" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="delete-from-cart" data-id-product="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
" data-id-customization="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_customization'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'remove from cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"><i class='material-icons'>&#xe872;</i></a></div><?php if (count($_smarty_tpl->tpl_vars['product']->value['customizations'])) {?><div class="customizations"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['customizations'], 'customization');
$_smarty_tpl->tpl_vars['customization']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->do_else = false;
?><li><span class="product-quantity"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customization']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customization']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'remove from cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" class="remove-from-cart" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customization']->value['fields'], 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?><li><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'text') {?><span><?php echo $_smarty_tpl->tpl_vars['field']->value['text'];?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'image') {?><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy"><?php }?></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php }?></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><div class="ttvcart-price-shipping-text"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['subtotals'], 'subtotal');
$_smarty_tpl->tpl_vars['subtotal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subtotal']->value) {
$_smarty_tpl->tpl_vars['subtotal']->do_else = false;
if ($_smarty_tpl->tpl_vars['subtotal']->value['value'] && $_smarty_tpl->tpl_vars['subtotal']->value['type'] !== 'tax') {?><div class="ttvcart-product-label-value" id="tvcart-subtotal-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><span class="ttvshoping-cart-label label<?php if ('products' === $_smarty_tpl->tpl_vars['subtotal']->value['type']) {?> js-subtotal<?php }?>"><?php if ('products' == $_smarty_tpl->tpl_vars['subtotal']->value['type']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sub Total','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subtotal']->value['label'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['subtotal']->value['type'] === 'shipping') {?><small class="value"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCheckoutSubtotalDetails','subtotal'=>$_smarty_tpl->tpl_vars['subtotal']->value),$_smarty_tpl ) );?>
</small><?php }?></span><span class="ttvcart-product-value"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subtotal']->value['value'], ENT_QUOTES, 'UTF-8');?>
</span></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><div class="ttvcart-product-label-value total"><span class="ttvshoping-cart-label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');?>
</span><span class="ttvcart-product-value"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span></div><div class="ttvcart-product-label-value tax"><span class="ttvshoping-cart-label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['label'], ENT_QUOTES, 'UTF-8');?>
</span><span class="ttvcart-product-value"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['value'], ENT_QUOTES, 'UTF-8');?>
</span></div></div><div class="ttvcart-product-list-btn-wrapper"><button class="ttvcart-product-list-viewcart"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View Cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a></button><button class="ttvcart-product-list-checkout"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',null,$_smarty_tpl->tpl_vars['language']->value['id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CheckOut','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a></button></div><?php } else { ?><div class="ttvcart-no-product"><div class="ttvcart-close-title-count tdclose-btn-wrap"><button class="ttvclose-cart"></button><div class="ttvcart-top-title"><h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h4></div><div class="ttvcart-counter"><span class="ttvcart-products-count"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span></div></div></div><?php }?></div><!-- Start DropDown header cart --><?php } elseif (Configuration::get('TVCMSCUSTOMSETTING_CART_VIEW') == 'pop-up') {?><div class="tvcmscart-show-dropdown"><?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?><div class="tvcart-product-list"><div class="tvcart-product-totle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your Cart: ','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars((string) count($_smarty_tpl->tpl_vars['cart']->value['products']), ENT_QUOTES, 'UTF-8');?>
 <?php if (count($_smarty_tpl->tpl_vars['cart']->value['products']) == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Item','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Items','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );
}?></div><div class="tvcart-product-content-box tvscroll-container"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?><div class="tvcart-product-wrapper items"><div class="tvcart-product-list-img"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="tvshoping-cart-dropdown-img-block"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['height'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy"></a></div><div class="tvcart-product-content"><div class="tvcart-product-list-quentity"><div class="tvshoping-cart-dropdown-title"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class=""><span class="product-name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></a></div></div><div class="tvcart-product-list-price"><span class="product-quentity"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span><span class="tvshopping-cart-quentity">X</span><span class="product-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span></div><div class="tvcart-product-list-attribute"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attributes'], 'prod_val', false, 'prod_attb');
$_smarty_tpl->tpl_vars['prod_val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['prod_attb']->value => $_smarty_tpl->tpl_vars['prod_val']->value) {
$_smarty_tpl->tpl_vars['prod_val']->do_else = false;
?><div class="tvcart-product-attr"><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_attb']->value, ENT_QUOTES, 'UTF-8');?>
:</span> <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_val']->value, ENT_QUOTES, 'UTF-8');?>
</span></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="tvcart-product-remove"><?php $_smarty_tpl->_assignInScope('url', ('controller=cart&delete=').($_smarty_tpl->tpl_vars['product']->value['id_product']));?><a class="remove-from-cart tvcmsremove-from-cart" rel="nofollow" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="delete-from-cart" data-id-product="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
" data-id-customization="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_customization'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'remove from cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"><i class='material-icons'>&#xe872;</i></a></div><?php if (count($_smarty_tpl->tpl_vars['product']->value['customizations'])) {?><div class="customizations"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['customizations'], 'customization');
$_smarty_tpl->tpl_vars['customization']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->do_else = false;
?><li><span class="product-quantity"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customization']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customization']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'remove from cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" class="remove-from-cart" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customization']->value['fields'], 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?><li><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'text') {?><span><?php echo $_smarty_tpl->tpl_vars['field']->value['text'];?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'image') {?><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy"><?php }?></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php }?></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="tvcart-product-list-total-info"><div class="tvcart-product-list-subtotal-prod"><span class="tvshoping-cart-subtotal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sub Total','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span><span class="tvcart-product-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['value'], ENT_QUOTES, 'UTF-8');?>
</span></div></div></div><div class="tvcart-product-list-btn-wrapper"><div class="tvcart-product-list-viewcart"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</a></div><div class="tvcart-product-list-checkout"><a href="javascript:void(0);" class="tvcart-product-list-checkout-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</a></div></div><?php } else { ?><div class="tvcart-no-product"><div class='tvcart-no-product-label'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No product add in cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</div></div><?php }?></div><?php }?></div></div></div><?php }
}
