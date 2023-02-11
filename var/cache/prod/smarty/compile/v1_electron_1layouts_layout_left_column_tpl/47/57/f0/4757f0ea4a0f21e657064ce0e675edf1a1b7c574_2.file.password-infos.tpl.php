<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:51
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/customer/password-infos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e6281b0be9a2_53224608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4757f0ea4a0f21e657064ce0e675edf1a1b7c574' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/customer/password-infos.tpl',
      1 => 1674084822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e6281b0be9a2_53224608 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204777058163e6281b0b7038_36162697', 'page_title');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190469139163e6281b0b8fe7_37583381', 'page_content');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182083051363e6281b0bc2e7_52481230', 'page_footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_204777058163e6281b0b7038_36162697 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_204777058163e6281b0b7038_36162697',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_190469139163e6281b0b8fe7_37583381 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_190469139163e6281b0b8fe7_37583381',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="ps-alert-success"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['successes']->value, 'success');
$_smarty_tpl->tpl_vars['success']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['success']->value) {
$_smarty_tpl->tpl_vars['success']->do_else = false;
?><li class="item"><i><svg viewBox="0 0 24 24"><path fill="#fff" d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" /></svg></i><p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['success']->value, ENT_QUOTES, 'UTF-8');?>
</p></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php
}
}
/* {/block 'page_content'} */
/* {block 'page_footer'} */
class Block_182083051363e6281b0bc2e7_52481230 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_182083051363e6281b0bc2e7_52481230',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<ul><li><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['authentication'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to Login','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a></li></ul><?php
}
}
/* {/block 'page_footer'} */
}
