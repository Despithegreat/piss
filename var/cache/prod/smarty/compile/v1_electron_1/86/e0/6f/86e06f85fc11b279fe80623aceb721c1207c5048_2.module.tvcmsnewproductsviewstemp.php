<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:07
  from 'module:tvcmsnewproductsviewstemp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e627ef55ac79_06707137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86e06f85fc11b279fe80623aceb721c1207c5048' => 
    array (
      0 => 'module:tvcmsnewproductsviewstemp',
      1 => 1674084821,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/tvcms-left-column-title.tpl' => 1,
    'file:catalog/_partials/miniatures/side-product.tpl' => 1,
  ),
),false)) {
function content_63e627ef55ac79_06707137 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tvcmsleft-new-product  tvleft-right-penal-all-block tvall-block-box-shadows"><div class="tvleft-new-product"><?php $_smarty_tpl->_subTemplateRender('file:_partials/tvcms-left-column-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('status'=>$_smarty_tpl->tpl_vars['main_title_status']->value,'title'=>$_smarty_tpl->tpl_vars['main_title']->value), 0, false);
?><div class="tvleft-product-wrapper-info"><div class="products tvleft-product-wrapper wow zoomIn"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/side-product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'tv_product_type'=>$_smarty_tpl->tpl_vars['tv_product_type']->value), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="tvall-product-bottom-link-block"><a class="all-product-link" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All New Products','mod'=>'tvcmsnewproducts'),$_smarty_tpl ) );?>
<i class='material-icons'>&#xe315;</i></a></div></div></div></div><?php }
}
