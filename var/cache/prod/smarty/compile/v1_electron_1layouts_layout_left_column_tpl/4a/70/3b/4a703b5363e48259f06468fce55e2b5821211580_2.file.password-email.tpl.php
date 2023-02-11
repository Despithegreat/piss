<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:44
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/customer/password-email.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e62814bad662_50426608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a703b5363e48259f06468fce55e2b5821211580' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/customer/password-email.tpl',
      1 => 1674084822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e62814bad662_50426608 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112292313063e62814ba23a5_36468160', 'page_content');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206978159863e62814babe31_69717766', 'page_footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_107374190863e62814ba2a00_75248949 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_112292313063e62814ba23a5_36468160 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_112292313063e62814ba23a5_36468160',
  ),
  'page_title' => 
  array (
    0 => 'Block_107374190863e62814ba2a00_75248949',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107374190863e62814ba2a00_75248949', 'page_title', $this->tplIndex);
?>
<form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" class="forgotten-password" method="post"><ul class="ps-alert-error"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?><li class="item"><i><svg viewBox="0 0 24 24"><path fill="#fff" d="M11,15H13V17H11V15M11,7H13V13H11V7M12,2C6.47,2 2,6.5 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20Z"></path></svg></i><p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</p></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><header><p class="send-renew-password-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please enter the email address you used to register. You will receive a temporary link to reset your password.','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</p></header><section class="form-fields"><div class="form-group center-email-fields"><label class="col-md-2 form-control-label required"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label><div class="col-md-5 email"><input type="email" name="email" id="email" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
" value="<?php if ((isset($_POST['email']))) {
echo htmlspecialchars((string) stripslashes($_POST['email']), ENT_QUOTES, 'UTF-8');
}?>" class="form-control" required></div><button class="form-control-submit tvall-inner-btn hidden-xs-down" name="submit" type="submit"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send reset link','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></button><button class="form-control-submit tvall-inner-btn hidden-sm-up" name="submit" type="submit"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></button></div></section></form><?php
}
}
/* {/block 'page_content'} */
/* {block 'page_footer'} */
class Block_206978159863e62814babe31_69717766 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_206978159863e62814babe31_69717766',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" class="account-link tvall-inner-btn"><i class="material-icons">&#xE5CB;</i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to login','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></a><?php
}
}
/* {/block 'page_footer'} */
}
