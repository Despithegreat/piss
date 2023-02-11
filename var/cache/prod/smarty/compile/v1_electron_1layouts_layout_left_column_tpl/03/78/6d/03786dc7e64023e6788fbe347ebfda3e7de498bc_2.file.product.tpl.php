<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:07
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/catalog/_partials/miniatures/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e627ef70b8e3_87995218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03786dc7e64023e6788fbe347ebfda3e7de498bc' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1674084822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product-grid-view.tpl' => 2,
    'file:catalog/_partials/miniatures/product-grid-view2.tpl' => 1,
    'file:catalog/_partials/miniatures/product-list-view.tpl' => 1,
    'file:catalog/_partials/miniatures/product-catelog-view.tpl' => 1,
  ),
),false)) {
function content_63e627ef70b8e3_87995218 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('col', '');
if (empty($_smarty_tpl->tpl_vars['tv_product_type']->value)) {
$_smarty_tpl->_assignInScope('col', 'col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 tv-grid-list-wrapper-info-box');
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45706915863e627ef6ffc91_42556419', 'product_miniature_item');
}
/* {block 'product_miniature_item'} */
class Block_45706915863e627ef6ffc91_42556419 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_45706915863e627ef6ffc91_42556419',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<article class="<?php if (!(isset($_smarty_tpl->tpl_vars['tab_slider']->value))) {?>item<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['double_row']->value) && $_smarty_tpl->tpl_vars['double_row']->value == true) {?>tvtab-first-product<?php }?> product-miniature js-product-miniature <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['col']->value, ENT_QUOTES, 'UTF-8');?>
 tvall-product-wrapper-info-box" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product"><div class="thumbnail-container"><?php if (!empty($_smarty_tpl->tpl_vars['image_size']->value) && $_smarty_tpl->tpl_vars['image_size']->value == 'bought_default') {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-grid-view.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class_name'=>'grid','product'=>$_smarty_tpl->tpl_vars['product']->value,'image_size'=>'bought_default'), 0, false);
} else {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-grid-view.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class_name'=>'grid','product'=>$_smarty_tpl->tpl_vars['product']->value,'image_size'=>'home_default'), 0, true);
}
if (empty($_smarty_tpl->tpl_vars['tv_product_type']->value)) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-grid-view2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class_name'=>'grid-2','product'=>$_smarty_tpl->tpl_vars['product']->value,'image_size'=>'medium_default'), 0, false);
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-list-view.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'image_size'=>'home_default'), 0, false);
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-catelog-view.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'image_size'=>'home_default'), 0, false);
}?></div></article><?php
}
}
/* {/block 'product_miniature_item'} */
}
