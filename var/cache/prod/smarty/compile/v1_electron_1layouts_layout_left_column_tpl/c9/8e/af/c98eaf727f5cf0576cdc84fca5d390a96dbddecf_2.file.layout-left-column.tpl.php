<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:06
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/layouts/layout-left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e627eee80337_67301792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c98eaf727f5cf0576cdc84fca5d390a96dbddecf' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/layouts/layout-left-column.tpl',
      1 => 1674084822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e627eee80337_67301792 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106934084363e627eee7b037_38162530', 'right_column');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116727163963e627eee7bc07_56915728', 'content_wrapper');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'right_column'} */
class Block_106934084363e627eee7b037_38162530 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_106934084363e627eee7b037_38162530',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_122744654263e627eee7e4a7_22645094 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p>Hello world! This is HTML5 Boilerplate.</p><?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_116727163963e627eee7bc07_56915728 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_116727163963e627eee7bc07_56915728',
  ),
  'content' => 
  array (
    0 => 'Block_122744654263e627eee7e4a7_22645094',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="content-wrapper" class="left-column <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'contact') {?> col-xl-10 col-lg-12 col-md-12 col-sm-12 col-xs-12 <?php } else { ?> col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 <?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122744654263e627eee7e4a7_22645094', 'content', $this->tplIndex);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>
</div><?php
}
}
/* {/block 'content_wrapper'} */
}
