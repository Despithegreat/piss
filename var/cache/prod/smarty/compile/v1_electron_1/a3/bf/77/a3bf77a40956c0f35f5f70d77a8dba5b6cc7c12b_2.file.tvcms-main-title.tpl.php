<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:07
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/_partials/tvcms-main-title.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e627ef7bd357_07156085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3bf77a40956c0f35f5f70d77a8dba5b6cc7c12b' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/_partials/tvcms-main-title.tpl',
      1 => 1674084822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e627ef7bd357_07156085 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['main_heading']->value['main_status']) {?><div class='tvcmsmain-title-wrapper clearfix'><div class="tvcms-main-title"><?php if ($_smarty_tpl->tpl_vars['main_heading']->value['main_sub_title']) {?><div class='tvmain-sub-title'><h4><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['main_heading']->value['data']['short_desc'], ENT_QUOTES, 'UTF-8');?>
</h4></div><?php }
if ($_smarty_tpl->tpl_vars['main_heading']->value['main_title']) {?><div class='tvmain-title'><h2><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['main_heading']->value['data']['title'], ENT_QUOTES, 'UTF-8');?>
</h2></div><?php }
if ($_smarty_tpl->tpl_vars['main_heading']->value['main_description']) {?><div class='tvmain-desc'><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['main_heading']->value['data']['desc'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?></div></div><?php }
}
}
