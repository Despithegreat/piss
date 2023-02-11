<?php
/* Smarty version 4.2.1, created on 2023-02-10 17:06:10
  from 'module:tvcmsproductcompareviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e679828a4778_72326668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41e3a52cc174dc32f45be536eb3fd16f6d16919f' => 
    array (
      0 => 'module:tvcmsproductcompareviewst',
      1 => 1674084821,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e679828a4778_72326668 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147560301163e6798281bf53_49165671', 'page_title');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65952586863e6798281e6e9_90013804', 'page_content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_147560301163e6798281bf53_49165671 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_147560301163e6798281bf53_49165671',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Compare','mod'=>'tvcmsproductcompare'),$_smarty_tpl ) );
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_65952586863e6798281e6e9_90013804 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_65952586863e6798281e6e9_90013804',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="products_block table-responsive"><table id="product_comparison" class="table table-bordered <?php if (!empty($_smarty_tpl->tpl_vars['prod_1']->value) || !empty($_smarty_tpl->tpl_vars['prod_2']->value) || !empty($_smarty_tpl->tpl_vars['prod_3']->value) || !empty($_smarty_tpl->tpl_vars['prod_4']->value)) {?>active<?php }?>"><tbody><tr><td class="tvcompare_extra_information"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Features','mod'=>'tvcmsproductcompare'),$_smarty_tpl ) );?>
</span></td><?php if (!empty($_smarty_tpl->tpl_vars['prod_1']->value)) {?><td class="tvcmscomparison tvcms-compare-product-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_1']->value['prod']->id, ENT_QUOTES, 'UTF-8');?>
"><div class="remove"><button class="tvcmsproduct-compare-list" data-product-id='<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_1']->value['prod']->id, ENT_QUOTES, 'UTF-8');?>
' data-comp-val='remove' title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','mod'=>'tvcmsproductcompare'),$_smarty_tpl ) );?>
"><i class='material-icons'>&#xe15d;</i></button></div><div class="thumbnail-container"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['prod_1']->value['prod']->id), ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['prod_1']->value['prod']->link_rewrite[$_smarty_tpl->tpl_vars['id_lang']->value],$_smarty_tpl->tpl_vars['prod_1']->value['all_img'][0]['id_image'],'home_default'), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_1']->value['prod']->name[$_smarty_tpl->tpl_vars['id_lang']->value], ENT_QUOTES, 'UTF-8');?>
"><?php if (!empty($_smarty_tpl->tpl_vars['prod_1']->value['all_img'][1]['id_image'])) {?><img class="tvcompare-hover-img" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['prod_1']->value['prod']->link_rewrite[$_smarty_tpl->tpl_vars['id_lang']->value],$_smarty_tpl->tpl_vars['prod_1']->value['all_img'][1]['id_image'],'home_default'), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_1']->value['prod']->name[$_smarty_tpl->tpl_vars['id_lang']->value], ENT_QUOTES, 'UTF-8');?>
"><?php }?></a></div><div class="product-description"><div class="tvproduct-name"><div class="product-title" itemprop="name"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['prod_1']->value['prod']->id), ENT_QUOTES, 'UTF-8');?>
"><h6><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_1']->value['prod']->name[$_smarty_tpl->tpl_vars['id_lang']->value], ENT_QUOTES, 'UTF-8');?>
</h6></a></div></div><div class="product-price-and-shipping"><span itemprop="price" class="<?php if ((isset($_smarty_tpl->tpl_vars['prod_1']->value['special_price'])) && !empty($_smarty_tpl->tpl_vars['prod_1']->value['special_price'])) {?>price cancle<?php } else { ?>price cancle<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_1']->value['prod_price'], ENT_QUOTES, 'UTF-8');?>
 </span><?php if ((isset($_smarty_tpl->tpl_vars['prod_1']->value['special_price'])) && !empty($_smarty_tpl->tpl_vars['prod_1']->value['special_price'])) {?><span class="regular-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_1']->value['special_price']['discount_after_price'], ENT_QUOTES, 'UTF-8');?>
</span><span class="discount-percentage discount-product tvproduct-discount-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_1']->value['special_price']['reduction'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></div><div class="product-desc"><?php echo $_smarty_tpl->tpl_vars['prod_1']->value['prod']->description_short[$_smarty_tpl->tpl_vars['id_lang']->value];?>
</div><div class="highlighted-informations no-variants"></div></div></td><?php }
if (!empty($_smarty_tpl->tpl_vars['prod_2']->value)) {?><td class="tvcmscomparison tvcms-compare-product-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_2']->value['prod']->id, ENT_QUOTES, 'UTF-8');?>
"><div class="remove"><button class="tvcmsproduct-compare-list" data-product-id='<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_2']->value['prod']->id, ENT_QUOTES, 'UTF-8');?>
' data-comp-val='remove' title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','mod'=>'tvcmsproductcompare'),$_smarty_tpl ) );?>
"><i class='material-icons'>&#xe15d;</i></button></div><div class="thumbnail-container"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['prod_2']->value['prod']->id), ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['prod_2']->value['prod']->link_rewrite[$_smarty_tpl->tpl_vars['id_lang']->value],$_smarty_tpl->tpl_vars['prod_2']->value['all_img'][0]['id_image'],'home_default'), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_2']->value['prod']->name[$_smarty_tpl->tpl_vars['id_lang']->value], ENT_QUOTES, 'UTF-8');?>
"><?php if (!empty($_smarty_tpl->tpl_vars['prod_2']->value['all_img'][1]['id_image'])) {?><img class="tvcompare-hover-img" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['prod_2']->value['prod']->link_rewrite[$_smarty_tpl->tpl_vars['id_lang']->value],$_smarty_tpl->tpl_vars['prod_2']->value['all_img'][1]['id_image'],'home_default'), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_2']->value['prod']->name[$_smarty_tpl->tpl_vars['id_lang']->value], ENT_QUOTES, 'UTF-8');?>
"><?php }?></a></div><div class="product-description"><div class="tvproduct-name"><div class="product-title" itemprop="name"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['prod_2']->value['prod']->id), ENT_QUOTES, 'UTF-8');?>
"><h6><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_2']->value['prod']->name[$_smarty_tpl->tpl_vars['id_lang']->value], ENT_QUOTES, 'UTF-8');?>
</h6></a></div></div><div class="product-price-and-shipping"><span itemprop="price" class="<?php if ((isset($_smarty_tpl->tpl_vars['prod_2']->value['special_price'])) && !empty($_smarty_tpl->tpl_vars['prod_2']->value['special_price'])) {?>price cancle<?php } else { ?>price cancle<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_2']->value['prod_price'], ENT_QUOTES, 'UTF-8');?>
 </span><?php if ((isset($_smarty_tpl->tpl_vars['prod_2']->value['special_price'])) && !empty($_smarty_tpl->tpl_vars['prod_2']->value['special_price'])) {?><span class="regular-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_2']->value['special_price']['discount_after_price'], ENT_QUOTES, 'UTF-8');?>
</span><span class="discount-percentage discount-product tvproduct-discount-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_2']->value['special_price']['reduction'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></div><div class="product-desc"><?php echo $_smarty_tpl->tpl_vars['prod_2']->value['prod']->description_short[$_smarty_tpl->tpl_vars['id_lang']->value];?>
</div><div class="highlighted-informations no-variants"></div></div></td><?php }
if (!empty($_smarty_tpl->tpl_vars['prod_3']->value)) {?><td class="tvcmscomparison tvcms-compare-product-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_3']->value['prod']->id, ENT_QUOTES, 'UTF-8');?>
"><div class="remove"><button class="tvcmsproduct-compare-list" data-product-id='<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_3']->value['prod']->id, ENT_QUOTES, 'UTF-8');?>
' data-comp-val='remove' title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','mod'=>'tvcmsproductcompare'),$_smarty_tpl ) );?>
"><i class='material-icons'>&#xe15d;</i></button></div><div class="thumbnail-container"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['prod_3']->value['prod']->id), ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['prod_3']->value['prod']->link_rewrite[$_smarty_tpl->tpl_vars['id_lang']->value],$_smarty_tpl->tpl_vars['prod_3']->value['all_img'][0]['id_image'],'home_default'), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_3']->value['prod']->name[$_smarty_tpl->tpl_vars['id_lang']->value], ENT_QUOTES, 'UTF-8');?>
"><?php if (!empty($_smarty_tpl->tpl_vars['prod_3']->value['all_img'][1]['id_image'])) {?><img class="tvcompare-hover-img" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['prod_3']->value['prod']->link_rewrite[$_smarty_tpl->tpl_vars['id_lang']->value],$_smarty_tpl->tpl_vars['prod_3']->value['all_img'][1]['id_image'],'home_default'), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_3']->value['prod']->name[$_smarty_tpl->tpl_vars['id_lang']->value], ENT_QUOTES, 'UTF-8');?>
"><?php }?></a></div><div class="product-description"><div class="tvproduct-name"><div class="product-title" itemprop="name"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['prod_3']->value['prod']->id), ENT_QUOTES, 'UTF-8');?>
"><h6><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_3']->value['prod']->name[$_smarty_tpl->tpl_vars['id_lang']->value], ENT_QUOTES, 'UTF-8');?>
</h6></a></div></div><div class="product-price-and-shipping"><span itemprop="price" class="<?php if ((isset($_smarty_tpl->tpl_vars['prod_3']->value['special_price'])) && !empty($_smarty_tpl->tpl_vars['prod_3']->value['special_price'])) {?>price cancle<?php } else { ?>price cancle<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_3']->value['prod_price'], ENT_QUOTES, 'UTF-8');?>
 </span><?php if ((isset($_smarty_tpl->tpl_vars['prod_3']->value['special_price'])) && !empty($_smarty_tpl->tpl_vars['prod_3']->value['special_price'])) {?><span class="regular-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_3']->value['special_price']['discount_after_price'], ENT_QUOTES, 'UTF-8');?>
</span><span class="discount-percentage discount-product tvproduct-discount-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_3']->value['special_price']['reduction'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></div><div class="product-desc"><?php echo $_smarty_tpl->tpl_vars['prod_3']->value['prod']->description_short[$_smarty_tpl->tpl_vars['id_lang']->value];?>
</div><div class="highlighted-informations no-variants"></div></div></td><?php }
if (!empty($_smarty_tpl->tpl_vars['prod_4']->value)) {?><td class="tvcmscomparison tvcms-compare-product-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_4']->value['prod']->id, ENT_QUOTES, 'UTF-8');?>
"><div class="remove"><button class="tvcmsproduct-compare-list" data-product-id='<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_4']->value['prod']->id, ENT_QUOTES, 'UTF-8');?>
' data-comp-val='remove' title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','mod'=>'tvcmsproductcompare'),$_smarty_tpl ) );?>
"><i class='material-icons'>&#xe15d;</i></button></div><div class="thumbnail-container"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['prod_4']->value['prod']->id), ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['prod_4']->value['prod']->link_rewrite[$_smarty_tpl->tpl_vars['id_lang']->value],$_smarty_tpl->tpl_vars['prod_4']->value['all_img'][0]['id_image'],'home_default'), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_4']->value['prod']->name[$_smarty_tpl->tpl_vars['id_lang']->value], ENT_QUOTES, 'UTF-8');?>
"><?php if (!empty($_smarty_tpl->tpl_vars['prod_4']->value['all_img'][1]['id_image'])) {?><img class="tvcompare-hover-img" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['prod_4']->value['prod']->link_rewrite[$_smarty_tpl->tpl_vars['id_lang']->value],$_smarty_tpl->tpl_vars['prod_4']->value['all_img'][1]['id_image'],'home_default'), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_4']->value['prod']->name[$_smarty_tpl->tpl_vars['id_lang']->value], ENT_QUOTES, 'UTF-8');?>
"><?php }?></a></div><div class="product-description"><div class="tvproduct-name"><div class="product-title" itemprop="name"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['prod_4']->value['prod']->id), ENT_QUOTES, 'UTF-8');?>
"><h6><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_4']->value['prod']->name[$_smarty_tpl->tpl_vars['id_lang']->value], ENT_QUOTES, 'UTF-8');?>
</h6></a></div></div><div class="product-price-and-shipping"><span itemprop="price" class="<?php if ((isset($_smarty_tpl->tpl_vars['prod_4']->value['special_price'])) && !empty($_smarty_tpl->tpl_vars['prod_4']->value['special_price'])) {?>price cancle<?php } else { ?>price cancle<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_4']->value['prod_price'], ENT_QUOTES, 'UTF-8');?>
 </span><?php if ((isset($_smarty_tpl->tpl_vars['prod_4']->value['special_price'])) && !empty($_smarty_tpl->tpl_vars['prod_4']->value['special_price'])) {?><span class="regular-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_4']->value['special_price']['discount_after_price'], ENT_QUOTES, 'UTF-8');?>
</span><span class="discount-percentage discount-product tvproduct-discount-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_4']->value['special_price']['reduction'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></div><div class="product-desc"><?php echo $_smarty_tpl->tpl_vars['prod_4']->value['prod']->description_short[$_smarty_tpl->tpl_vars['id_lang']->value];?>
</div><div class="highlighted-informations no-variants"></div></div></td><?php }?></tr><?php if (!empty($_smarty_tpl->tpl_vars['all_feature']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_feature']->value, 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?><tr><td class="comparison_feature_odd feature-name"><strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value, ENT_QUOTES, 'UTF-8');?>
</strong></td><?php if (!empty($_smarty_tpl->tpl_vars['prod_1']->value['prod_attr'])) {?><td class="comparison_feature_odd comparison_infos tvcms-compare-product-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_1']->value['prod']->id, ENT_QUOTES, 'UTF-8');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prod_1']->value['prod_attr'], 'feature_1');
$_smarty_tpl->tpl_vars['feature_1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature_1']->value) {
$_smarty_tpl->tpl_vars['feature_1']->do_else = false;
if ($_smarty_tpl->tpl_vars['feature_1']->value['name'] == $_smarty_tpl->tpl_vars['feature']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature_1']->value['value'], ENT_QUOTES, 'UTF-8');
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></td><?php }
if (!empty($_smarty_tpl->tpl_vars['prod_2']->value['prod_attr'])) {?><td class="comparison_feature_odd comparison_infos tvcms-compare-product-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_2']->value['prod']->id, ENT_QUOTES, 'UTF-8');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prod_2']->value['prod_attr'], 'feature_2');
$_smarty_tpl->tpl_vars['feature_2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature_2']->value) {
$_smarty_tpl->tpl_vars['feature_2']->do_else = false;
if ($_smarty_tpl->tpl_vars['feature_2']->value['name'] == $_smarty_tpl->tpl_vars['feature']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature_2']->value['value'], ENT_QUOTES, 'UTF-8');
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></td><?php }
if (!empty($_smarty_tpl->tpl_vars['prod_3']->value['prod_attr'])) {?><td class="comparison_feature_odd comparison_infos tvcms-compare-product-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_3']->value['prod']->id, ENT_QUOTES, 'UTF-8');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prod_3']->value['prod_attr'], 'feature_3');
$_smarty_tpl->tpl_vars['feature_3']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature_3']->value) {
$_smarty_tpl->tpl_vars['feature_3']->do_else = false;
if ($_smarty_tpl->tpl_vars['feature_3']->value['name'] == $_smarty_tpl->tpl_vars['feature']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature_3']->value['value'], ENT_QUOTES, 'UTF-8');
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></td><?php }
if (!empty($_smarty_tpl->tpl_vars['prod_4']->value['prod_attr'])) {?><td class="comparison_feature_odd comparison_infos tvcms-compare-product-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_4']->value['prod']->id, ENT_QUOTES, 'UTF-8');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prod_4']->value['prod_attr'], 'feature_4');
$_smarty_tpl->tpl_vars['feature_4']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature_4']->value) {
$_smarty_tpl->tpl_vars['feature_4']->do_else = false;
if ($_smarty_tpl->tpl_vars['feature_4']->value['name'] == $_smarty_tpl->tpl_vars['feature']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature_4']->value['value'], ENT_QUOTES, 'UTF-8');
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></td><?php }?></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></tbody></table><div id="no_product_comparison" class="<?php if (empty($_smarty_tpl->tpl_vars['prod_1']->value) && empty($_smarty_tpl->tpl_vars['prod_2']->value) && empty($_smarty_tpl->tpl_vars['prod_3']->value) && empty($_smarty_tpl->tpl_vars['prod_4']->value)) {?>active<?php }?>"><div class="tvno-compare-product-dec"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are no products selected for comparison.','mod'=>'tvcmsproductcompare'),$_smarty_tpl ) );?>
</div></div></div><?php
}
}
/* {/block 'page_content'} */
}
