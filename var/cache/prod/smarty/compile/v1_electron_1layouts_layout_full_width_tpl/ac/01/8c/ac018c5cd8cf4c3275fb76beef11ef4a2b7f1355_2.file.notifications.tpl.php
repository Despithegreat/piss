<?php
/* Smarty version 4.2.1, created on 2023-02-10 15:50:49
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/_partials/notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e667d9253543_95294028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac018c5cd8cf4c3275fb76beef11ef4a2b7f1355' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/_partials/notifications.tpl',
      1 => 1674084822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e667d9253543_95294028 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ((isset($_smarty_tpl->tpl_vars['notifications']->value))) {?><aside id="notifications"><div class="container"><?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59256994363e667d9245872_93573659', 'notifications_error');
}
if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126199171063e667d9249831_36521897', 'notifications_warning');
}
if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159985090563e667d924d307_48136085', 'notifications_success');
}
if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155275735363e667d9250698_22051911', 'notifications_info');
}?></div></aside><?php }
}
/* {block 'notifications_error'} */
class Block_59256994363e667d9245872_93573659 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_error' => 
  array (
    0 => 'Block_59256994363e667d9245872_93573659',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<article class="alert alert-danger" role="alert" data-alert="danger"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['error'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?><li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></article><?php
}
}
/* {/block 'notifications_error'} */
/* {block 'notifications_warning'} */
class Block_126199171063e667d9249831_36521897 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_warning' => 
  array (
    0 => 'Block_126199171063e667d9249831_36521897',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<article class="alert alert-warning" role="alert" data-alert="warning"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['warning'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?><li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></article><?php
}
}
/* {/block 'notifications_warning'} */
/* {block 'notifications_success'} */
class Block_159985090563e667d924d307_48136085 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_success' => 
  array (
    0 => 'Block_159985090563e667d924d307_48136085',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<article class="alert alert-success" role="alert" data-alert="success"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['success'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?><li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></article><?php
}
}
/* {/block 'notifications_success'} */
/* {block 'notifications_info'} */
class Block_155275735363e667d9250698_22051911 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_info' => 
  array (
    0 => 'Block_155275735363e667d9250698_22051911',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<article class="alert alert-info" role="alert" data-alert="info"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['info'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?><li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></article><?php
}
}
/* {/block 'notifications_info'} */
}
