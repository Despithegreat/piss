<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:07
  from '/home/u704205129/domains/piasat.com/public_html/modules/tvcmsverticalmenu/views/templates/hook/tvcmsverticalmenu-data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e627ef505e59_89575017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b759079b184a946a353a9df060063fce815e7ca8' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/modules/tvcmsverticalmenu/views/templates/hook/tvcmsverticalmenu-data.tpl',
      1 => 1674084821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e627ef505e59_89575017 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['menus']->value)) {?><div class="tvcmsvertical-menu-wrapper-data"><div class="tvcmsvertical-menu-wrapper"><div id='tvcmsdesktop-vertical-menu'><div class='tvcmsverticalmenu'><div id="tvverticalmenu" class="tvcmsvertical-menu"><div class="tvallcategories"><div class="tvallcategories-wrapper"><div class="tvcategory-title-wrapper"><div class="tvleft-right-title facet-label"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Top Category','mod'=>'tvcmsverticalmenu'),$_smarty_tpl ) );?>
</span></div><div class="tvleft-right-title-toggle"><i class='material-icons'>&#xe5d2;</i></div></div></div></div><ul class="menu-content tvverticalmenu-dropdown tv-dropdown tvleft-right-penal-all-block"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menus']->value, 'menu', false, NULL, 'menus', array (
));
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
if ((isset($_smarty_tpl->tpl_vars['menu']->value['type'])) && $_smarty_tpl->tpl_vars['menu']->value['type'] == 'CAT' && $_smarty_tpl->tpl_vars['menu']->value['dropdown'] == 1) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['sub_menu'],'htmlall','UTF-8' ));
} else { ?><li class="level-1 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['class'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php if (count($_smarty_tpl->tpl_vars['menu']->value['sub_menu']) > 0) {?> parent<?php }?>"><div class='tv-vertical-menu-text-wrapper'><?php $_smarty_tpl->_assignInScope('class', 'tvvertical-menu-all-text-block');
if ($_smarty_tpl->tpl_vars['menu']->value['type_icon'] == 0 && $_smarty_tpl->tpl_vars['menu']->value['icon'] != '') {?><div class="tvvertical-menu-img-block"><img class="img-icon" src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['icon_path']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['icon'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="" loading="lazy"/><?php $_smarty_tpl->_assignInScope('class', '');?></div><?php } elseif ($_smarty_tpl->tpl_vars['menu']->value['type_icon'] == 1 && $_smarty_tpl->tpl_vars['menu']->value['icon'] != '') {?><i class="icon-font <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['icon'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></i><?php $_smarty_tpl->_assignInScope('class', '');
}?><a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['link'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class='<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
'><div class="tvvertical-menu-dropdown-icon1"></div><div class="tvvertical-menu-category"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div><?php if ($_smarty_tpl->tpl_vars['menu']->value['subtitle'] != '') {?><div class="tvmenu-subtitle"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['subtitle'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div><?php }?></a><span class="tv-vertical-menu-icon-wrapper"><?php if (count($_smarty_tpl->tpl_vars['menu']->value['sub_menu']) > 0) {?><i class="material-icons tvvertical-menu-dropdown-icon right">&#xe315;</i><i class='material-icons tvvertical-menu-dropdown-icon down'>&#xe5c5;</i><?php }?></span></div><?php if ((isset($_smarty_tpl->tpl_vars['menu']->value['sub_menu'])) && count($_smarty_tpl->tpl_vars['menu']->value['sub_menu']) > 0) {?><div class="tvcmsvertical-sub-menu menu-dropdown <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['width_sub'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value['sub_menu'], 'menu_row', false, NULL, 'menu_row', array (
));
$_smarty_tpl->tpl_vars['menu_row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu_row']->value) {
$_smarty_tpl->tpl_vars['menu_row']->do_else = false;
?><div class="tvcmsvertical-menu-row row <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu_row']->value['class'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php if ((isset($_smarty_tpl->tpl_vars['menu_row']->value['list_col'])) && count($_smarty_tpl->tpl_vars['menu_row']->value['list_col']) > 0) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu_row']->value['list_col'], 'menu_col', false, NULL, 'menu_col', array (
));
$_smarty_tpl->tpl_vars['menu_col']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu_col']->value) {
$_smarty_tpl->tpl_vars['menu_col']->do_else = false;
?><div class="tvcmsvertical-menu-col col-xs-12 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu_col']->value['width'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu_col']->value['class'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php if (count($_smarty_tpl->tpl_vars['menu_col']->value['list_menu_item']) > 0) {?><ul class="ul-column tv-verticalmenu-slider-wrapper <?php if ($_smarty_tpl->tpl_vars['menu_col']->value['class'] == 'tv-vertical-menu-slider') {?> owl-carousel<?php }?>"><?php $_smarty_tpl->_assignInScope('is_product', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu_col']->value['list_menu_item'], 'sub_menu_item', false, NULL, 'sub_menu_item', array (
));
$_smarty_tpl->tpl_vars['sub_menu_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sub_menu_item']->value) {
$_smarty_tpl->tpl_vars['sub_menu_item']->do_else = false;
?><li class="item menu-item tv-verticalmenu-slider"><?php if ($_smarty_tpl->tpl_vars['sub_menu_item']->value['type_link'] == 4) {
$_smarty_tpl->_assignInScope('id_lang', Context::getContext()->language->id);
$_smarty_tpl->_assignInScope('id_lang', Context::getContext()->language->id);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub_menu_item']->value['product'], 'product', false, NULL, 'product', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?><div class="product-container clearfix"><div class="product-image-container"><a class="product_img_link" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['link'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><img class="img-responsive" src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['legend'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" title="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['legend'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['height']->value, ENT_QUOTES, 'UTF-8');?>
" loading="lazy"/></a><?php if ((isset($_smarty_tpl->tpl_vars['product']->value['on_sale'])) && $_smarty_tpl->tpl_vars['product']->value['on_sale'] && (isset($_smarty_tpl->tpl_vars['product']->value['show_price'])) && $_smarty_tpl->tpl_vars['product']->value['show_price'] && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {
}?></div><div class="product-description"><?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],25,'' )),'htmlall','UTF-8' ))) {?><div class="tvproduct-name"><div class="product-title"><a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['link'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" ><h6><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],25,'' )),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h6></a></div></div><?php }
if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && (((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])) && $_smarty_tpl->tpl_vars['product']->value['show_price']) || ((isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])) && $_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?><div class="product-price-and-shipping"><?php if ((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])) && $_smarty_tpl->tpl_vars['product']->value['show_price'] && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value))) {?><span class="price product-price"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Tools::displayPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span><?php if ((isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])) && $_smarty_tpl->tpl_vars['product']->value['specific_prices'] && (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])) && $_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'] > 0) {?><span class="regular-price product-price"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Tools::displayPrice($_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span><?php }
if ((isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])) && $_smarty_tpl->tpl_vars['product']->value['specific_prices'] && (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])) && $_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'] > 0) {
if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type'] == 'percentage') {?><span class="price-percent-reduction discount-percentage discount-product tvproduct-discount-price">-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'],'htmlall','UTF-8' ))*100, ENT_QUOTES, 'UTF-8');?>
%</span><?php }
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'id_product'=>$_smarty_tpl->tpl_vars['product']->value['id_product'],'type'=>"old_price"),$_smarty_tpl ) );
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl ) );
}?></div><?php }?></div></div><?php $_smarty_tpl->_assignInScope('is_product', 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} elseif ($_smarty_tpl->tpl_vars['sub_menu_item']->value['type_link'] == 3) {
if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub_menu_item']->value['title'],'htmlall','UTF-8' ))) {?><a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub_menu_item']->value['link'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub_menu_item']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a><?php }
if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub_menu_item']->value['text'],'quotes','UTF-8' ))) {?><div class="htmlall-block"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub_menu_item']->value['text'],'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div><?php }
} else {
if ($_smarty_tpl->tpl_vars['sub_menu_item']->value['type_item'] == 1) {?><h2><?php }
if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub_menu_item']->value['title'],'htmlall','UTF-8' ))) {?><a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub_menu_item']->value['link'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub_menu_item']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a><?php }
if ($_smarty_tpl->tpl_vars['sub_menu_item']->value['type_item'] == 1) {?></h2><?php }
}?></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php if ($_smarty_tpl->tpl_vars['menu_col']->value['class'] == 'tv-vertical-menu-slider') {?><div class='tvcms-vertical-menu-pagination-wrapper'><div class="tvcms-vertical-menu-pagination"><div class="tvcms-vertical-menu-next-pre-btn"><div class="tvvertical-menu-slider-prev tvcmsprev-btn"><i class='material-icons'>&#xe314;</i></div><div class="tvvertical-menu-slider-next tvcmsnext-btn"><i class='material-icons'>&#xe315;</i></div></div></div></div><?php }
}?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }?></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><span class="more_title" style="display:none;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More Category','mod'=>'tvcmsverticalmenu'),$_smarty_tpl ) );?>
</span><span class="less_title" style="display:none;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Less Category','mod'=>'tvcmsverticalmenu'),$_smarty_tpl ) );?>
</span><span class="vertical-one"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More Category','mod'=>'tvcmsverticalmenu'),$_smarty_tpl ) );?>
</span><span class="vertical-one"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Less Category','mod'=>'tvcmsverticalmenu'),$_smarty_tpl ) );?>
</span></ul></div></div></div></div></div><?php }
}
}
