<?php
/* Smarty version 4.2.1, created on 2023-02-10 17:05:36
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/cms/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e67960cd12b9_85421787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c299149975ae9ef85e0dab13f13c321ec8cdf326' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/cms/page.tpl',
      1 => 1674084822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e67960cd12b9_85421787 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83683582963e67960cc77d6_71051349', 'page_title');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11376216063e67960cca1e1_14441256', 'page_content_container');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_83683582963e67960cc77d6_71051349 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_83683582963e67960cc77d6_71051349',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cms']->value['meta_title'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'cms_content'} */
class Block_162293641763e67960ccb558_23542776 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['cms']->value['content'];
}
}
/* {/block 'cms_content'} */
/* {block 'hook_cms_dispute_information'} */
class Block_5898020163e67960ccd1a2_29201819 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCMSDisputeInformation'),$_smarty_tpl ) );
}
}
/* {/block 'hook_cms_dispute_information'} */
/* {block 'hook_cms_print_button'} */
class Block_181465617963e67960ccf038_36113480 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCMSPrintButton'),$_smarty_tpl ) );
}
}
/* {/block 'hook_cms_print_button'} */
/* {block 'page_content_container'} */
class Block_11376216063e67960cca1e1_14441256 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_11376216063e67960cca1e1_14441256',
  ),
  'cms_content' => 
  array (
    0 => 'Block_162293641763e67960ccb558_23542776',
  ),
  'hook_cms_dispute_information' => 
  array (
    0 => 'Block_5898020163e67960ccd1a2_29201819',
  ),
  'hook_cms_print_button' => 
  array (
    0 => 'Block_181465617963e67960ccf038_36113480',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="content" class="page-content page-cms cms-description page-cms-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cms']->value['id'], ENT_QUOTES, 'UTF-8');?>
 tv-sub-pages-inner-content"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162293641763e67960ccb558_23542776', 'cms_content', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5898020163e67960ccd1a2_29201819', 'hook_cms_dispute_information', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181465617963e67960ccf038_36113480', 'hook_cms_print_button', $this->tplIndex);
?>
</div><?php
}
}
/* {/block 'page_content_container'} */
}
