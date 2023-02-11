<?php
/* Smarty version 4.2.1, created on 2023-02-10 16:02:44
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/catalog/_partials/product-1-cover-thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e66aa4a6ce52_13894072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c59826db29e161f1d9c56af390dc4f29d7c93044' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/catalog/_partials/product-1-cover-thumbnails.tpl',
      1 => 1674084822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e66aa4a6ce52_13894072 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62569540463e66aa4a55070_43004039', 'page_content_container');
}
/* {block 'product_flags'} */
class Block_90367894663e66aa4a573a5_92768992 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="tvproduct-flags tvproduct-online-new-wrapper"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
if ($_smarty_tpl->tpl_vars['flag']->value['type'] == 'online-only' || $_smarty_tpl->tpl_vars['flag']->value['type'] == 'new') {?><li class="product-flag <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><ul class="tvproduct-flags tvproduct-sale-pack-wrapper"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
if ($_smarty_tpl->tpl_vars['flag']->value['type'] == 'on-sale' || $_smarty_tpl->tpl_vars['flag']->value['type'] == 'pack') {?><li class="product-flag <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_cover'} */
class Block_90190618863e66aa4a56ba4_57167257 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="product-cover col-xl-10 col-sm-9"><div class="tvproduct-image-slider"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90367894663e66aa4a573a5_92768992', 'product_flags', $this->tplIndex);
if ($_smarty_tpl->tpl_vars['product']->value['default_image']) {?><img class="js-qv-product-cover" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['height'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['width'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image" loading="lazy"><div class="layer" data-toggle="modal" data-target="#product-modal"><i class='material-icons'>&#xe3c2;</i></div><?php } else { ?><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy"><?php }?></div></div><?php
}
}
/* {/block 'product_cover'} */
/* {block 'product_cover_thumbnails'} */
class Block_22718327863e66aa4a563d5_96978329 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90190618863e66aa4a56ba4_57167257', 'product_cover', $this->tplIndex);
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'product_images'} */
class Block_123961127063e66aa4a64583_34979480 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tvvertical-slider col-xl-2 col-sm-3"><div class="product-images"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?><div class="tvcmsVerticalSlider item"><picture><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
" media="(max-width: 768px)"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['side_product_default']['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumb js-thumb <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?> selected <?php }?>" data-image-medium-src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
" data-image-large-src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['side_product_default']['height'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['side_product_default']['width'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy"></picture></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="arrows js-arrowsxx"><i class="tvvertical-slider-next material-icons arrow-up js-arrow-up">&#xE316;</i><i class="tvvertical-slider-pre material-icons arrow-down js-arrow-down">&#xE313;</i></div></div><?php
}
}
/* {/block 'product_images'} */
/* {block 'page_content'} */
class Block_210339077863e66aa4a55c13_52141586 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="images-container"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22718327863e66aa4a563d5_96978329', 'product_cover_thumbnails', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123961127063e66aa4a64583_34979480', 'product_images', $this->tplIndex);
?>
</div><?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_62569540463e66aa4a55070_43004039 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_62569540463e66aa4a55070_43004039',
  ),
  'page_content' => 
  array (
    0 => 'Block_210339077863e66aa4a55c13_52141586',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_22718327863e66aa4a563d5_96978329',
  ),
  'product_cover' => 
  array (
    0 => 'Block_90190618863e66aa4a56ba4_57167257',
  ),
  'product_flags' => 
  array (
    0 => 'Block_90367894663e66aa4a573a5_92768992',
  ),
  'product_images' => 
  array (
    0 => 'Block_123961127063e66aa4a64583_34979480',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="page-contents product-1" id="content"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210339077863e66aa4a55c13_52141586', 'page_content', $this->tplIndex);
?>
</div><?php
}
}
/* {/block 'page_content_container'} */
}
