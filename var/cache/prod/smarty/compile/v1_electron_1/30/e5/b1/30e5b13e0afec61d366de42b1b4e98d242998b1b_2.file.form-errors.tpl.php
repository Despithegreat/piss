<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:35
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/_partials/form-errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e6280b359fb0_93752223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30e5b13e0afec61d366de42b1b4e98d242998b1b' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/_partials/form-errors.tpl',
      1 => 1674084822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e6280b359fb0_93752223 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['errors']->value)) {?><div class="help-block"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77715152463e6280b356527_89727528', 'form_errors');
?>
</div><?php }
}
/* {block 'form_errors'} */
class Block_77715152463e6280b356527_89727528 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_errors' => 
  array (
    0 => 'Block_77715152463e6280b356527_89727528',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?><li class="alert alert-danger"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php
}
}
/* {/block 'form_errors'} */
}
