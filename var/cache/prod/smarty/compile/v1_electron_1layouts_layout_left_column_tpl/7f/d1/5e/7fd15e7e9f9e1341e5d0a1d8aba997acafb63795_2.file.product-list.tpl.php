<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:06
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/catalog/listing/product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e627eee722b3_58051216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fd15e7e9f9e1341e5d0a1d8aba997acafb63795' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/catalog/listing/product-list.tpl',
      1 => 1674084822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/microdata/product-list-jsonld.tpl' => 1,
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_63e627eee722b3_58051216 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50665052063e627eee570d2_03694697', 'head_microdata_special');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181655370563e627eee58ec6_50704462', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_microdata_special'} */
class Block_50665052063e627eee570d2_03694697 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_microdata_special' => 
  array (
    0 => 'Block_50665052063e627eee570d2_03694697',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/microdata/product-list-jsonld.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
}
}
/* {/block 'head_microdata_special'} */
/* {block 'product_list_header'} */
class Block_73403745663e627eee595d1_98499615 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_list_header'} */
/* {block 'product_list_top'} */
class Block_82426346263e627eee5bc83_92704742 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list_active_filters'} */
class Block_108246049563e627eee5d253_16140205 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div ><?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>
</div><?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list'} */
class Block_28072551463e627eee5ec36_58369993 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
class Block_134394309263e627eee600d5_34939259 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
}
}
/* {/block 'product_list_bottom'} */
/* {block 'content'} */
class Block_181655370563e627eee58ec6_50704462 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_181655370563e627eee58ec6_50704462',
  ),
  'product_list_header' => 
  array (
    0 => 'Block_73403745663e627eee595d1_98499615',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_82426346263e627eee5bc83_92704742',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_108246049563e627eee5d253_16140205',
  ),
  'product_list' => 
  array (
    0 => 'Block_28072551463e627eee5ec36_58369993',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_134394309263e627eee600d5_34939259',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="main"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73403745663e627eee595d1_98499615', 'product_list_header', $this->tplIndex);
?>
<div id="products" class="<?php echo htmlspecialchars((string) Configuration::get('TVCMSCUSTOMSETTING_PRODUCT_LIST_VIEW'), ENT_QUOTES, 'UTF-8');?>
"><?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?><div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82426346263e627eee5bc83_92704742', 'product_list_top', $this->tplIndex);
?>
</div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108246049563e627eee5d253_16140205', 'product_list_active_filters', $this->tplIndex);
?>
<div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28072551463e627eee5ec36_58369993', 'product_list', $this->tplIndex);
?>
</div><div id="js-product-list-bottom"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134394309263e627eee600d5_34939259', 'product_list_bottom', $this->tplIndex);
?>
</div><?php } else {
$_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?></div></div><?php if (Configuration::get('TVCMSCAT_BANNER_STATUS') == 0 && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category' && !empty($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'])) {?><div class="block-category card card-block clearfix tv-category-block-wrapper"><?php if ($_smarty_tpl->tpl_vars['category']->value['image']['large']['url']) {?><div class="tv-category-cover"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['large']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['large']['height'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');
}?>" alt="<?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');
}?>" class="tv-img-responsive" loading="lazy"/></div><?php }
if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'])) {?><div class="tv-all-page-main-title-wrapper"><div class="tv-all-page-main-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</div></div><?php }
if ($_smarty_tpl->tpl_vars['category']->value['description']) {?><div id="category-description" class="text-muted"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div><?php }?></div><?php }
}
}
/* {/block 'content'} */
}
