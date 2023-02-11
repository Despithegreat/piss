<?php
/* Smarty version 4.2.1, created on 2023-02-10 16:02:44
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/catalog/tv-product-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e66aa4a1d285_24674296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '657a3bb5fc3aeef904b145b4dcb08d656040be88' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/catalog/tv-product-1.tpl',
      1 => 1674084822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/miniatures/product-timer.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
  ),
),false)) {
function content_63e66aa4a1d285_24674296 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="tvprduct-image-info-wrapper clearfix row product-1" data-product-layout="1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductTabVideo'),$_smarty_tpl ) );?>
<div class="col-md-6 tv-product-page-image"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100165261763e66aa49ee461_63667826', 'product_cover_thumbnails');
?>
</div><div class="col-md-6 tv-product-page-content"><div class="tvproduct-title-brandimage" itemprop="itemReviewed" itemscope itemtype="http://schema.org/Thing"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116559293363e66aa49f0083_51131343', 'page_header_container');
?>
<div class="tvcms-product-brand-logo"><?php if ((isset($_smarty_tpl->tpl_vars['manufacturer_image_url']->value))) {?><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="tvproduct-brand"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturer_image_url']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
" height="75px" width="170px" loading="lazy"></a><?php }?></div></div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReviewProductList','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162745619363e66aa49f77c6_54535818', 'product_prices');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24838787963e66aa49f91c1_69607254', 'product_availability');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192803390763e66aa49ff154_14321624', 'product_description_short');
if (!empty($_smarty_tpl->tpl_vars['product']->value['specific_prices']['from']) && !empty($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to']) && $_smarty_tpl->tpl_vars['product']->value['specific_prices']['from'] != '0000-00-00 00:00:00' && $_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'] != '0000-00-00 00:00:00') {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-timer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('timer'=>$_smarty_tpl->tpl_vars['product']->value['specific_prices']['to']), 0, false);
}?><div class="product-information tvproduct-special-desc"><?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21235109663e66aa4a09654_83285682', 'product_customization');
}?><div class="product-actions"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137730153263e66aa4a0c0c7_76535190', 'product_buy');
?>
</div></div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85915935163e66aa4a1a968_87764640', 'hook_display_reassurance');
?>
</div></div><?php }
/* {block 'product_cover_thumbnails'} */
class Block_100165261763e66aa49ee461_63667826 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_100165261763e66aa49ee461_63667826',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_title'} */
class Block_9812634563e66aa49f1182_23061974 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_197044554863e66aa49f08e5_65941747 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<h1 class="h1" itemprop="name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9812634563e66aa49f1182_23061974', 'page_title', $this->tplIndex);
?>
</h1><?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_116559293363e66aa49f0083_51131343 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_116559293363e66aa49f0083_51131343',
  ),
  'page_header' => 
  array (
    0 => 'Block_197044554863e66aa49f08e5_65941747',
  ),
  'page_title' => 
  array (
    0 => 'Block_9812634563e66aa49f1182_23061974',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197044554863e66aa49f08e5_65941747', 'page_header', $this->tplIndex);
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
class Block_162745619363e66aa49f77c6_54535818 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_prices' => 
  array (
    0 => 'Block_162745619363e66aa49f77c6_54535818',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_prices'} */
/* {block 'product_availability'} */
class Block_24838787963e66aa49f91c1_69607254 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_availability' => 
  array (
    0 => 'Block_24838787963e66aa49f91c1_69607254',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value['show_availability'] && $_smarty_tpl->tpl_vars['product']->value['availability_message']) {?><span id="product-availability"><?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?><i class="material-icons rtl-no-flip product-available">&#xE5CA;</i><?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?><i class="material-icons product-last-items">&#xE002;</i><?php } else { ?><i class="material-icons product-unavailable">&#xE14B;</i><?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
}
}
/* {/block 'product_availability'} */
/* {block 'product_description_short'} */
class Block_192803390763e66aa49ff154_14321624 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_192803390763e66aa49ff154_14321624',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value['description_short']) {?><div id="product-description-short-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemprop="description" class="tvproduct-page-decs"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div><?php }
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_21235109663e66aa4a09654_83285682 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_customization' => 
  array (
    0 => 'Block_21235109663e66aa4a09654_83285682',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_125196281963e66aa4a0ebf0_28966698 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_41158596763e66aa4a12ac3_60900350 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value), 0, true);
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_87912939063e66aa4a10196_23462362 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['packItems']->value) {?><div class="product-pack"><p class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
$_smarty_tpl->tpl_vars['product_pack']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
$_smarty_tpl->tpl_vars['product_pack']->do_else = false;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41158596763e66aa4a12ac3_60900350', 'product_miniature', $this->tplIndex);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
class Block_82531354563e66aa4a15572_58410183 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_discounts'} */
/* {block 'product_add_to_cart'} */
class Block_93484881863e66aa4a169c8_74273483 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_refresh'} */
class Block_25265205163e66aa4a18e52_29668909 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_137730153263e66aa4a0c0c7_76535190 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_buy' => 
  array (
    0 => 'Block_137730153263e66aa4a0c0c7_76535190',
  ),
  'product_variants' => 
  array (
    0 => 'Block_125196281963e66aa4a0ebf0_28966698',
  ),
  'product_pack' => 
  array (
    0 => 'Block_87912939063e66aa4a10196_23462362',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_41158596763e66aa4a12ac3_60900350',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_82531354563e66aa4a15572_58410183',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_93484881863e66aa4a169c8_74273483',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_25265205163e66aa4a18e52_29668909',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh"><input type="hidden" name="token" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="id_product" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id"><input type="hidden" name="id_customization" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125196281963e66aa4a0ebf0_28966698', 'product_variants', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87912939063e66aa4a10196_23462362', 'product_pack', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82531354563e66aa4a15572_58410183', 'product_discounts', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93484881863e66aa4a169c8_74273483', 'product_add_to_cart', $this->tplIndex);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomtab'),$_smarty_tpl ) );
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25265205163e66aa4a18e52_29668909', 'product_refresh', $this->tplIndex);
?>
</form><?php
}
}
/* {/block 'product_buy'} */
/* {block 'hook_display_reassurance'} */
class Block_85915935163e66aa4a1a968_87764640 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_display_reassurance' => 
  array (
    0 => 'Block_85915935163e66aa4a1a968_87764640',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );
}
}
/* {/block 'hook_display_reassurance'} */
}
