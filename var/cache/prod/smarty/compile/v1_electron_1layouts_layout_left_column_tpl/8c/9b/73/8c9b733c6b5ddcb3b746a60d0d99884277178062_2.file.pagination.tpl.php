<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:07
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/_partials/pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e627efbd38b0_90294930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c9b733c6b5ddcb3b746a60d0d99884277178062' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/_partials/pagination.tpl',
      1 => 1674084822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e627efbd38b0_90294930 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<nav class="pagination tvcms-all-pagination"><div class="col-md-6 tv-pagination-result pl-0" <?php if ((isset($_smarty_tpl->tpl_vars['tvcmsinfinitescroll_status']->value))) {?>style='display:none'<?php }?>><div class="tv-pagination-content"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156708972263e627efbc9088_08435222', 'pagination_summary');
?>
</div></div><div class="col-md-6 tv-pagination-number pr-0"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94886020663e627efbcb2b2_19607694', 'pagination_page_list');
?>
</div></nav><?php }
/* {block 'pagination_summary'} */
class Block_156708972263e627efbc9088_08435222 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_summary' => 
  array (
    0 => 'Block_156708972263e627efbc9088_08435222',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Showing %from%-%to% of %total% item(s)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_from'],'%to%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['pagination']->value['total_items'])),$_smarty_tpl ) );
}
}
/* {/block 'pagination_summary'} */
/* {block 'pagination_page_list'} */
class Block_94886020663e627efbcb2b2_19607694 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_page_list' => 
  array (
    0 => 'Block_94886020663e627efbcb2b2_19607694',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['pagination']->value['should_be_displayed']) {?><ul class="page-list clearfix text-sm-center tv-pagination-wrapper"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value['pages'], 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?><li <?php if ($_smarty_tpl->tpl_vars['page']->value['current']) {?> class="current tv-pagination-li" <?php }?>><?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'spacer') {?><span class="spacer">&hellip;</span><?php } else { ?><a rel="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>prev<?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next<?php } else { ?>nofollow<?php }?>" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>previous <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next <?php }
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('disabled'=>!$_smarty_tpl->tpl_vars['page']->value['clickable'],'js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
" ><?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?><i class="material-icons">&#xE314;</i><?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?><i class="material-icons">&#xE315;</i><?php } else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');
}?></a><?php }?></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }
}
}
/* {/block 'pagination_page_list'} */
}
