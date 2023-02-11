<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:06
  from 'module:psfacetedsearchviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e627eee084e6_42506575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd41d65d76b9471b5d365fe06cf1737c89a53af9f' => 
    array (
      0 => 'module:psfacetedsearchviewstempl',
      1 => 1674084822,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e627eee084e6_42506575 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['displayedFacets']->value)) {?><div id="search_filters" ><div class="tvleft-right-penal-all-block"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61388811763e627eedc8bc8_67019533', 'facets_title');
?>
<div class="tvserach-filter-wrapper"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128229389063e627eedcb191_87684013', 'facets_clearall_button');
?>
<div class="tvsearch-filter-content-wrapper"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayedFacets']->value, 'facet');
$_smarty_tpl->tpl_vars['facet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['facet']->value) {
$_smarty_tpl->tpl_vars['facet']->do_else = false;
?><section class="facet <?php if (Configuration::get('TVCMSCUSTOMSETTING_FILTER_LEFT_PANEL') != '1') {?> col-xl-3 col-lg-4 col-md-4 col-sm-12 col-xs-12 <?php }?>"><div class="tvfilter-dropdown-wrapper"><p class="h6 facet-title hidden-md-down"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
</p><?php $_smarty_tpl->_assignInScope('_expand_id', mt_rand(10,100000));
$_smarty_tpl->_assignInScope('_collapse', true);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
if ($_smarty_tpl->tpl_vars['filter']->value['active']) {
$_smarty_tpl->_assignInScope('_collapse', false);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><div class="title hidden-lg-up tvfilter-search-types-title clearfix" data-target="#facet_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-toggle="" <?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> aria-expanded="true" <?php }?>> <p class="h6 facet-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
</p><span class="float-xs-right tvdropdown-btn"><i class="material-icons">&#xE313;</i></span></div><?php if (in_array($_smarty_tpl->tpl_vars['facet']->value['widgetType'],array('radio','checkbox'))) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60475648563e627eedd9482_59795044', 'facet_item_other');
} elseif ($_smarty_tpl->tpl_vars['facet']->value['widgetType'] == 'dropdown') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44512324463e627eedefff0_28296907', 'facet_item_dropdown');
} elseif ($_smarty_tpl->tpl_vars['facet']->value['widgetType'] == 'slider') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156502257763e627eedfdf13_57419709', 'facet_item_slider');
}?></div></section><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div></div><?php }
}
/* {block 'facets_title'} */
class Block_61388811763e627eedc8bc8_67019533 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facets_title' => 
  array (
    0 => 'Block_61388811763e627eedc8bc8_67019533',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tvleft-right-title-wrapper"><div class="tvleft-right-title facet-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</div><div class="tvleft-right-title-toggle"><i class="material-icons"></i></div></div><?php
}
}
/* {/block 'facets_title'} */
/* {block 'facets_clearall_button'} */
class Block_128229389063e627eedcb191_87684013 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facets_clearall_button' => 
  array (
    0 => 'Block_128229389063e627eedcb191_87684013',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?><div id="_desktop_search_filters_clear_all" class="clear-all-wrapper"><button data-search-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['clear_all_link']->value, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-tertiary js-search-filters-clear-all"><i class="material-icons">&#xE14C;</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear all','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button></div><?php }
}
}
/* {/block 'facets_clearall_button'} */
/* {block 'facet_item_other'} */
class Block_60475648563e627eedd9482_59795044 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_other' => 
  array (
    0 => 'Block_60475648563e627eedd9482_59795044',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<ul id="facet_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="tvfilter-search-types-dropdown<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> in<?php }?> "><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter', false, 'filter_key');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter_key']->value => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
if (!$_smarty_tpl->tpl_vars['filter']->value['displayed']) {
continue 1;
}?><li <?php if ((isset($_smarty_tpl->tpl_vars['filter']->value['properties']['color']))) {?>class="tvcolor-box" <?php }?>> <label class="facet-label<?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> active <?php }?>" for="facet_input_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['facet']->value['multipleSelectionAllowed']) {?><span class="custom-checkbox"><input id="facet_input_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
" data-search-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>checked<?php }?>> <?php if ((isset($_smarty_tpl->tpl_vars['filter']->value['properties']['color']))) {?><span class="color" style="background-color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['properties']['color'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span><?php } elseif ((isset($_smarty_tpl->tpl_vars['filter']->value['properties']['texture']))) {?><span class="color texture" style="background-image:url(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['properties']['texture'], ENT_QUOTES, 'UTF-8');?>
)"></span><?php } else { ?><span <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?> class="ps-shown-by-js" <?php }?>> <i class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span><?php }?></span><?php } else { ?><span class="custom-radio"><input id="facet_input_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
" data-search-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
" type="radio" name="filter <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>checked<?php }?>> <span <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?> class="ps-shown-by-js" <?php }?>> </span> </span><?php }?><a for="facet_input_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
" class="_gray-darker search-link js-search-link" rel="nofollow"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?><span class="magnitude">(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)</span><?php }?></a></label></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php
}
}
/* {/block 'facet_item_other'} */
/* {block 'facet_item_dropdown'} */
class Block_44512324463e627eedefff0_28296907 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_dropdown' => 
  array (
    0 => 'Block_44512324463e627eedefff0_28296907',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<ul id="facet_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="collapse<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> in<?php }?>"><li><div class="col-sm-12 col-xs-12 col-md-12 facet-dropdown dropdown"><a class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php $_smarty_tpl->_assignInScope('active_found', false);?><span><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
if ($_smarty_tpl->tpl_vars['filter']->value['active']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?>(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)<?php }
$_smarty_tpl->_assignInScope('active_found', true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (!$_smarty_tpl->tpl_vars['active_found']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(no filter)','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
}?></span><i class="material-icons float-xs-right">&#xE5C5;</i></a><div class="dropdown-menu"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
if (!$_smarty_tpl->tpl_vars['filter']->value['active']) {?><a rel="nofollow" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
" class="select-list"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?>(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)<?php }?></a><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></li></ul><?php
}
}
/* {/block 'facet_item_dropdown'} */
/* {block 'facet_item_slider'} */
class Block_156502257763e627eedfdf13_57419709 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_slider' => 
  array (
    0 => 'Block_156502257763e627eedfdf13_57419709',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?><ul id="facet_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="faceted-slider tvfilter-search-types-dropdown" data-slider-min="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['facet']->value['properties']['min'], ENT_QUOTES, 'UTF-8');?>
" data-slider-max="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['facet']->value['properties']['max'], ENT_QUOTES, 'UTF-8');?>
" data-slider-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-slider-values="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['value'] )), ENT_QUOTES, 'UTF-8');?>
" data-slider-unit="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['facet']->value['properties']['unit'], ENT_QUOTES, 'UTF-8');?>
" data-slider-label="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
" data-slider-specifications="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['facet']->value['properties']['specifications'] )), ENT_QUOTES, 'UTF-8');?>
" data-slider-encoded-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"><li><p id="facet_label_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>
</p><div id="slider-range_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
"></div></li></ul><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'facet_item_slider'} */
}
