<?php
/* Smarty version 4.2.1, created on 2023-02-10 16:02:45
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/catalog/_partials/product-images-modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e66aa5272472_36562725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a24bf834051cc58674bbe6dcea335ae9a24fbc9' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/catalog/_partials/product-images-modal.tpl',
      1 => 1675601566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e66aa5272472_36562725 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="modal fade js-product-images-modal" id="product-modal"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="tvmodel-close close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div><div class="modal-body"><?php $_smarty_tpl->_assignInScope('imagesCount', count($_smarty_tpl->tpl_vars['product']->value['images']));?><figure><img class="js-modal-product-cover product-cover-modal" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['large']['width'], ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySeoAltImages'),$_smarty_tpl ) );?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image" loading="lazy"><figcaption class="image-caption"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200138813363e66aa52688f6_24563491', 'product_description_short');
?>
</figcaption></figure><aside id="thumbnails" class="thumbnails js-thumbnails text-sm-center"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182924137463e66aa526ad93_50635092', 'product_images');
if ($_smarty_tpl->tpl_vars['imagesCount']->value > 5) {?><div class="arrows js-modal-arrows"><i class="material-icons arrow-up js-modal-arrow-up">&#xe5ce;</i><i class="material-icons arrow-down js-modal-arrow-down">&#xe5cf;</i></div><?php }?><div><i></i></div></aside></div></div><!-- /.modal-content --></div><!-- /.modal-dialog --></div><!-- /.modal --><?php }
/* {block 'product_description_short'} */
class Block_200138813363e66aa52688f6_24563491 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_200138813363e66aa52688f6_24563491',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="product-description-short" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div><?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_images'} */
class Block_182924137463e66aa526ad93_50635092 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images' => 
  array (
    0 => 'Block_182924137463e66aa526ad93_50635092',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="js-modal-mask mask <?php if ($_smarty_tpl->tpl_vars['imagesCount']->value <= 5) {?> nomargin <?php }?>"><ul class="product-images js-modal-product-images"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?><li class="thumb-container"><img data-image-large-src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['large']['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumb js-modal-thumb" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['medium']['url'], ENT_QUOTES, 'UTF-8');?>
"  alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySeoAltImages'),$_smarty_tpl ) );?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" width="150" itemprop="image" loading="lazy"></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php
}
}
/* {/block 'product_images'} */
}
