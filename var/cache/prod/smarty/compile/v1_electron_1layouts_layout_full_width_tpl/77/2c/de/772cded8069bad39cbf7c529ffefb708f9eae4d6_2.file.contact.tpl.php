<?php
/* Smarty version 4.2.1, created on 2023-02-10 17:06:16
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e679887aeaf6_42017718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '772cded8069bad39cbf7c529ffefb708f9eae4d6' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/contact.tpl',
      1 => 1674084822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e679887aeaf6_42017718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51074807163e679887a87f9_33917977', 'page_header_container');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187916701863e679887a9a81_92726232', 'left_column');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136846376263e679887ad192_12392893', 'page_content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_header_container'} */
class Block_51074807163e679887a87f9_33917977 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_51074807163e679887a87f9_33917977',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block 'left_column'} */
class Block_187916701863e679887a9a81_92726232 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_187916701863e679887a9a81_92726232',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="left-column" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_contactinfo",'hook'=>'displayLeftColumn'),$_smarty_tpl ) );?>
</div><?php
}
}
/* {/block 'left_column'} */
/* {block 'page_content'} */
class Block_136846376263e679887ad192_12392893 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_136846376263e679887ad192_12392893',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"contactform"),$_smarty_tpl ) );
}
}
/* {/block 'page_content'} */
}
