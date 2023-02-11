<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:07
  from '/home/u704205129/domains/piasat.com/public_html/modules/tvcmswishlist/views/templates/front/tvcmswishlist-extra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e627ef7872c5_50338490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e13d99461fe72204bf31f3cb7cb1caf9ad7ec7b' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/modules/tvcmswishlist/views/templates/front/tvcmswishlist-extra.tpl',
      1 => 1674084821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e627ef7872c5_50338490 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tvproduct-wishlist"><input type="hidden" class="wishlist_prod_id" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_product']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php if ((isset($_smarty_tpl->tpl_vars['wishlists']->value)) && !empty($_smarty_tpl->tpl_vars['wishlists']->value) && count($_smarty_tpl->tpl_vars['wishlists']->value) > 1) {?><div class="buttons_bottom_block no-print panel-product-line panel-product-actions" data-toggle="tvtooltip" data-placement="top" data-html="true" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add To Wishlist','mod'=>'tvcmswishlist'),$_smarty_tpl ) );?>
"><div id="wishlist_button"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wishlists']->value, 'wishlist');
$_smarty_tpl->tpl_vars['wishlist']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wishlist']->value) {
$_smarty_tpl->tpl_vars['wishlist']->do_else = false;
if ($_smarty_tpl->tpl_vars['wishlist']->value['default'] == '1') {?><a class="wishlist_button_extra" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( intval($_smarty_tpl->tpl_vars['id_product']->value),"htmlall","UTF-8" )), ENT_QUOTES, 'UTF-8');?>
', $('#idCombination').val(), 1, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist'], ENT_QUOTES, 'UTF-8');?>
); return false;"><div class="panel-product-line panel-product-actions tvproduct-wishlist-icon"><i class='material-icons'>&#xe87e;</i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add To Wishlist','mod'=>'tvcmswishlist'),$_smarty_tpl ) );?>
</span></div></a><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php } else { ?><a href="#" class="tvquick-view-popup-wishlist wishlist_button" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( intval($_smarty_tpl->tpl_vars['id_product']->value),"htmlall","UTF-8" )), ENT_QUOTES, 'UTF-8');?>
', $('#idCombination').val(), 1, 1); return false;" rel="nofollow" data-toggle="tvtooltip" data-placement="top" data-html="true" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add To Wishlist','mod'=>'tvcmswishlist'),$_smarty_tpl ) );?>
"><div class="panel-product-line panel-product-actions tvproduct-wishlist-icon"><i class='material-icons'>&#xe87e;</i></div></a><?php }?></div><?php }
}
