<?php
/* Smarty version 4.2.1, created on 2023-02-10 17:06:16
  from 'module:pscontactinfopscontactinf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e67988cb05a8_67157325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '628089b29e2c5fb69de1c5694b088f988b830ba7' => 
    array (
      0 => 'module:pscontactinfopscontactinf',
      1 => 1674084822,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e67988cb05a8_67157325 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="contact-rich"><h4 class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4><div class="row"><?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted']) {?><div class="block tvaddress col-xs-12 col-sm-6 col-md-3"><div class="icon"><i class="material-icons">&#xE55F;</i></div><div class="data"><p><?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted'];?>
</p></div></div><?php }
if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?><div class="block tvphone col-xs-12 col-sm-6 col-md-3"><div class="icon"><i class="material-icons">&#xE0CD;</i></div><div class="data"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Call us:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span><a href="tel:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</a></div></div><?php }
if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?><div class="block tvfax col-xs-12 col-sm-6 col-md-3"><div class="icon"><i class="material-icons">&#xE0DF;</i></div><div class="data"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fax:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span><a href="fax:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['contact_infos']->value['fax'], ENT_QUOTES, 'UTF-8');?>
</a></div></div><?php }
if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?><div class="block tvemail col-xs-12 col-sm-6 col-md-3"><div class="icon"><i class="material-icons">&#xE158;</i></div><div class="data"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email us:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span><a href="mailto:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['contact_infos']->value['email'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['contact_infos']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a></div></div><?php }?></div></div><?php }
}
