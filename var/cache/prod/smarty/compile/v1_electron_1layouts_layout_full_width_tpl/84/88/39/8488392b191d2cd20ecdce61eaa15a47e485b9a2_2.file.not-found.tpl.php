<?php
/* Smarty version 4.2.1, created on 2023-02-10 15:50:49
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/errors/not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e667d9333e56_27031263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8488392b191d2cd20ecdce61eaa15a47e485b9a2' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/errors/not-found.tpl',
      1 => 1674084822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e667d9333e56_27031263 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128684437763e667d932f8b0_29602678', 'page_content');
?>
</section><?php }
/* {block 'search'} */
class Block_164104218963e667d9331334_01281609 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_203798576363e667d93328f1_20007563 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
class Block_128684437763e667d932f8b0_29602678 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_128684437763e667d932f8b0_29602678',
  ),
  'search' => 
  array (
    0 => 'Block_164104218963e667d9331334_01281609',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_203798576363e667d93328f1_20007563',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4><p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again what you are looking for','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164104218963e667d9331334_01281609', 'search', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203798576363e667d93328f1_20007563', 'hook_not_found', $this->tplIndex);
}
}
/* {/block 'page_content'} */
}
