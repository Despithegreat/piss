<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:06
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/catalog/listing/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e627eee4e6a4_36679010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd97905ab2cfc8a2be1c5e576ee4f79bd1732d3a9' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/catalog/listing/category.tpl',
      1 => 1674084822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e627eee4e6a4_36679010 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142977690463e627eee2d652_61267876', 'product_list_header');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_142977690463e627eee2d652_61267876 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_142977690463e627eee2d652_61267876',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if (Configuration::get('TVCMSCAT_BANNER_STATUS')) {?><div class="block-category card card-block clearfix tv-category-block-wrapper"><?php if ($_smarty_tpl->tpl_vars['category']->value['image']['large']['url']) {?><div class="tv-category-cover"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['large']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['large']['height'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');
}?>" class="tv-img-responsive" loading="lazy" /></div><?php }
if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'])) {?><div class="tv-all-page-main-title-wrapper"><div class="tv-all-page-main-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</div></div><?php }
if (!empty($_smarty_tpl->tpl_vars['category']->value['description'])) {?><div id="category-description" class="text-muted"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div><?php }?></div><?php }
if ((isset($_smarty_tpl->tpl_vars['subcategories']->value)) && count($_smarty_tpl->tpl_vars['subcategories']->value) > 0) {
if (((isset($_smarty_tpl->tpl_vars['display_subcategories']->value)) && $_smarty_tpl->tpl_vars['display_subcategories']->value == 1) || !(isset($_smarty_tpl->tpl_vars['display_subcategories']->value))) {?><div class='tv-category-main-div clearfix'><div class="tv-sub-category-title-wrapper"><div class="tv-sub-category-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subcategory','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</div></div><div class="tvcategory-name-image"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subcategories']->value, 'subcategory');
$_smarty_tpl->tpl_vars['subcategory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->do_else = false;
?><div class="tv-sub-category-wrapper"><div class="tv-sub-category-inner"><div class="tv-category-image"><a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subcategory']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="img"><?php if ($_smarty_tpl->tpl_vars['subcategory']->value['image']) {?><img class="replace-2x tv-img-responsive" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subcategory']->value['image']['bySize']['small_default']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subcategory']->value['image']['bySize']['small_default']['height'], ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
c/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subcategory']->value['id_category'], ENT_QUOTES, 'UTF-8');?>
_thumb.jpg" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subcategory']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" loading="lazy" /><?php } else { ?><img class="replace-2x tv-img-responsive" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_cat_url'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
-default-sub_cat_def.jpg" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subcategory']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" loading="lazy" /><?php }?></a></div><div class="tvcategory-name"><a class="category-name" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subcategory']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a></div></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php }
}
}
}
/* {/block 'product_list_header'} */
}
