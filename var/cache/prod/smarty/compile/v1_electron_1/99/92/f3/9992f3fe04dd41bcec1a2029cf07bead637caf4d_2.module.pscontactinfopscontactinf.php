<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:07
  from 'module:pscontactinfopscontactinf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e627ef6cddd8_70398453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
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
function content_63e627ef6cddd8_70398453 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tvfooter-contact-link-wrapper links col-xl-3 col-lg-3 col-md-12"><div class="tvfooter-address"><div class="tvfooter-title-wrapper" data-target="#footer_sub_menu_store_info" data-toggle="collapse"><span class="tvfooter-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span><span class="float-xs-right tvfooter-toggle-icon-wrapper navbar-toggler collapse-icons tvfooter-toggle-icon"><i class="material-icons add">&#xE313;</i><i class="material-icons remove">&#xE316;</i></span></div><div id="footer_sub_menu_store_info" class="collapse"><div class="tvfooter-addresses"><i class="material-icons">location_on</i><?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted'];?>
</div><?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?><div class="tvfooter-store-link"><i class="material-icons">email</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]%email%[/1]','sprintf'=>array('[1]'=>(('<a href="mailto:').($_smarty_tpl->tpl_vars['contact_infos']->value['email'])).('" class="dropdown">'),'[/1]'=>'</a>','%email%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['email']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div><?php }
if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?><div class="tvfooter-store-link-content"><i class="material-icons">call</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]%phone%[/1]','sprintf'=>array('[1]'=>(('<a href="tel:').($_smarty_tpl->tpl_vars['contact_infos']->value['email'])).('" class="dropdown">'),'[/1]'=>'</a>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div><?php }
if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?><div class="tvfooter-store-link-fax"><i class="material-icons">print</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]%fax%[/1]','sprintf'=>array('[1]'=>(('<a href="fax:').($_smarty_tpl->tpl_vars['contact_infos']->value['email'])).('" class="dropdown">'),'[/1]'=>'</a>','%fax%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['fax']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div><?php }?></div></div></div><?php }
}
