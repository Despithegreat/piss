<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:35
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/customer/_partials/login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e6280b349a09_45055569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '381394ae87f2d862b7e0b03731af1b0700e99be7' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/customer/_partials/login-form.tpl',
      1 => 1674084822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_63e6280b349a09_45055569 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141459383963e6280b33cb22_69449757', 'login_form');
}
/* {block 'login_form_errors'} */
class Block_133059482463e6280b33d590_49727476 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
}
}
/* {/block 'login_form_errors'} */
/* {block 'login_form_actionurl'} */
class Block_130426983563e6280b33fa86_92755549 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'login_form_actionurl'} */
/* {block 'form_field'} */
class Block_82814613563e6280b3432a7_42214204 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );
}
}
/* {/block 'form_field'} */
/* {block 'login_form_fields'} */
class Block_184421909363e6280b340be9_23341787 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82814613563e6280b3432a7_42214204', 'form_field', $this->tplIndex);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'login_form_fields'} */
/* {block 'form_buttons'} */
class Block_81200188263e6280b347110_13640549 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button id="submit-login" class="tvall-inner-btn form-control-submit" data-link-action="sign-in" type="submit"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></button><?php
}
}
/* {/block 'form_buttons'} */
/* {block 'login_form_footer'} */
class Block_177128302063e6280b3469f6_86368855 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<footer class="form-footer text-center clearfix"><input type="hidden" name="submitLogin" value="1"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81200188263e6280b347110_13640549', 'form_buttons', $this->tplIndex);
?>
</footer><?php
}
}
/* {/block 'login_form_footer'} */
/* {block 'login_form'} */
class Block_141459383963e6280b33cb22_69449757 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login_form' => 
  array (
    0 => 'Block_141459383963e6280b33cb22_69449757',
  ),
  'login_form_errors' => 
  array (
    0 => 'Block_133059482463e6280b33d590_49727476',
  ),
  'login_form_actionurl' => 
  array (
    0 => 'Block_130426983563e6280b33fa86_92755549',
  ),
  'login_form_fields' => 
  array (
    0 => 'Block_184421909363e6280b340be9_23341787',
  ),
  'form_field' => 
  array (
    0 => 'Block_82814613563e6280b3432a7_42214204',
  ),
  'login_form_footer' => 
  array (
    0 => 'Block_177128302063e6280b3469f6_86368855',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_81200188263e6280b347110_13640549',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133059482463e6280b33d590_49727476', 'login_form_errors', $this->tplIndex);
?>
<form id="login-form" action="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130426983563e6280b33fa86_92755549', 'login_form_actionurl', $this->tplIndex);
?>
" method="post"><div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184421909363e6280b340be9_23341787', 'login_form_fields', $this->tplIndex);
?>
<div class="forgot-password"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</a></div></div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177128302063e6280b3469f6_86368855', 'login_form_footer', $this->tplIndex);
?>
</form><?php
}
}
/* {/block 'login_form'} */
}
