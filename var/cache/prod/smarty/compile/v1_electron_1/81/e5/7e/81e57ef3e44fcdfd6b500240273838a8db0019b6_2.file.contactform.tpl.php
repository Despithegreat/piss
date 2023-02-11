<?php
/* Smarty version 4.2.1, created on 2023-02-10 17:06:16
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/modules/contactform/views/templates/widget/contactform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e67988c6a831_41972321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81e57ef3e44fcdfd6b500240273838a8db0019b6' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/modules/contactform/views/templates/widget/contactform.tpl',
      1 => 1674084822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e67988c6a831_41972321 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="contact-form"><form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
" method="post" <?php if ($_smarty_tpl->tpl_vars['contact']->value['allow_file_upload']) {?>enctype="multipart/form-data" <?php }?>> <?php if ($_smarty_tpl->tpl_vars['notifications']->value) {?> <div class="col-xs-12 alert <?php if ($_smarty_tpl->tpl_vars['notifications']->value['nw_error']) {?>alert-danger<?php } else { ?>alert-success<?php }?>"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['messages'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?><li><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php }
if (!$_smarty_tpl->tpl_vars['notifications']->value || $_smarty_tpl->tpl_vars['notifications']->value['nw_error']) {?><div class="form-fields"><div class="form-group row"><div class="col-md-12 col-xs-12 text-center"><h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact us','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h3></div></div><div class="row"><div class="col-md-1 col-lg-2"></div><div class="col-md-10 col-lg-8 "><div class="row"><div class="col-md-6"><div class="form-group row"><label class="col-xs-12 form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subject','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label><div class="col-xs-12 col-md-12"><select name="id_contact" class="form-control form-control-select"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact']->value['contacts'], 'contact_elt');
$_smarty_tpl->tpl_vars['contact_elt']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact_elt']->value) {
$_smarty_tpl->tpl_vars['contact_elt']->do_else = false;
?><option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['contact_elt']->value['id_contact'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['contact_elt']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-group row"><label class="col-xs-12 form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label><div class="col-xs-12 col-md-12"><input class="form-control" name="from" type="email" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['contact']->value['email'], ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'your@email.com','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
"></div></div><?php if ($_smarty_tpl->tpl_vars['contact']->value['orders']) {?><div class="form-group row"><label class="col-xs-12 form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order reference','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label><div class="col-xs-12 col-md-12"><select name="id_order" class="form-control form-control-select"><option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select reference','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact']->value['orders'], 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?><option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order']->value['id_order'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><span class="col-md-3 form-control-comment"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'optional','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
</span></div><?php }
if ($_smarty_tpl->tpl_vars['contact']->value['allow_file_upload']) {?><div class="form-group row"><label class="col-xs-12 form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachment','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
 &nbsp; ( <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Optional','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
 )</label><div class="col-xs-12 col-md-12"><input type="file" name="fileUpload" class="filestyle" data-buttonText="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose file','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"></div></div><?php }?></div><div class="col-md-6 col-xs-12"><div class="form-group row"><label class="col-xs-12 form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Message','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label><div class="col-xs-12 col-md-12"><textarea class="form-control tvcontact-area-text" name="message" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'How can we help?','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
" rows="3"><?php if ($_smarty_tpl->tpl_vars['contact']->value['message']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['contact']->value['message'], ENT_QUOTES, 'UTF-8');
}?></textarea></div></div><?php if ((isset($_smarty_tpl->tpl_vars['id_module']->value))) {?><div class="form-group row"><div class="offset-md-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>
</div></div><?php }?><footer class="form-footer text-sm-right"><input type="text" name="url" value="" /><input type="hidden" name="token" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8');?>
" /><button class="tvall-inner-btn" type="submit" name="submitMessage" value=""><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></button></footer></div></div></div><div class="col-md-1 col-lg-2"></div></div></div><?php }?></form></div><?php }
}
