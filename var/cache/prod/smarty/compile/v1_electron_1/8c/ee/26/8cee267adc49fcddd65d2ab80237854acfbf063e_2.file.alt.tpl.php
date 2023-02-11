<?php
/* Smarty version 4.2.1, created on 2023-02-10 16:02:45
  from '/home/u704205129/domains/piasat.com/public_html/modules/seoaltimages/views/templates/hook/alt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e66aa53eb9f6_58265895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cee267adc49fcddd65d2ab80237854acfbf063e' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/modules/seoaltimages/views/templates/hook/alt.tpl',
      1 => 1545223566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e66aa53eb9f6_58265895 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['fmm_rule_value']->value)) && !empty($_smarty_tpl->tpl_vars['fmm_rule_value']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fmm_rule_value']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}
}
}
