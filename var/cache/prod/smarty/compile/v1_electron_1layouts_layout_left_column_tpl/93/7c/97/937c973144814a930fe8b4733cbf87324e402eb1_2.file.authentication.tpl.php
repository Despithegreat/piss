<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:34
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/customer/authentication.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e6280ae53194_34978126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '937c973144814a930fe8b4733cbf87324e402eb1' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/customer/authentication.tpl',
      1 => 1674084822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e6280ae53194_34978126 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173881995463e6280ae4abf0_54876481', 'page_content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_126679618263e6280ae4b489_73111903 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-title"><h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</h1></div><?php
}
}
/* {/block 'page_title'} */
/* {block 'display_after_login_form'} */
class Block_122852596963e6280ae4f3f0_73439836 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomerLoginFormAfter'),$_smarty_tpl ) );
}
}
/* {/block 'display_after_login_form'} */
/* {block 'login_form_container'} */
class Block_164989729963e6280ae4dce7_98148995 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="login-form"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'customer/_partials/login-form.tpl','ui'=>$_smarty_tpl->tpl_vars['login_form']->value),$_smarty_tpl ) );?>
</div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122852596963e6280ae4f3f0_73439836', 'display_after_login_form', $this->tplIndex);
?>
<div class="no-account"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="display-register-form"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No account? Create one here','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</a></div><?php
}
}
/* {/block 'login_form_container'} */
/* {block 'page_content'} */
class Block_173881995463e6280ae4abf0_54876481 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_173881995463e6280ae4abf0_54876481',
  ),
  'page_title' => 
  array (
    0 => 'Block_126679618263e6280ae4b489_73111903',
  ),
  'login_form_container' => 
  array (
    0 => 'Block_164989729963e6280ae4dce7_98148995',
  ),
  'display_after_login_form' => 
  array (
    0 => 'Block_122852596963e6280ae4f3f0_73439836',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126679618263e6280ae4b489_73111903', 'page_title', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164989729963e6280ae4dce7_98148995', 'login_form_container', $this->tplIndex);
}
}
/* {/block 'page_content'} */
}
