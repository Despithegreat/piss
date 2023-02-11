<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:25:42
  from '/home/u704205129/domains/piasat.com/public_html/modules/tvcmsnewsletterpopup/views/templates/front/tvcmsnewsletterpopup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e629b6b64a10_75030757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f65aa445c5b99a2ced18062dce22e55d4e64a423' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/modules/tvcmsnewsletterpopup/views/templates/front/tvcmsnewsletterpopup.tpl',
      1 => 1674084821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e629b6b64a10_75030757 (Smarty_Internal_Template $_smarty_tpl) {
if (Configuration::get('TVCMSNEWSLETTERPOPUP_POPUP_STATUS')) {?><div id='tvcmsNewsLetterPopup' class='modal fade' tabindex='-1' role='dialog'><div class='tvcmsNewsLetterPopup-i modal-dialog' role='document'><button type='button' class='close tvnewsletterpopup-button-icon' data-dismiss='modal' aria-label='Close'><i class='material-icons'>&#xe5cd;</i></button><div class='tvcmsnewsletterpopup' style='<?php if ($_smarty_tpl->tpl_vars['show_fields']->value["bg_image"] && Configuration::get("TVCMSNEWSLETTERPOPUP_BG_IMG_STATUS") && Configuration::get("TVCMSNEWSLETTERPOPUP_BG_IMG",$_smarty_tpl->tpl_vars['id_lang']->value)) {?>background-image: url(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) (Configuration::get("TVCMSNEWSLETTERPOPUP_BG_IMG",$_smarty_tpl->tpl_vars['id_lang']->value)), ENT_QUOTES, 'UTF-8');?>
);<?php } else {
}?>'><div class='tvnewslatter-popup-img-wrapper'><?php if ($_smarty_tpl->tpl_vars['show_fields']->value['image'] && Configuration::get('TVCMSNEWSLETTERPOPUP_IMG_STATUS') && Configuration::get('TVCMSNEWSLETTERPOPUP_IMG',$_smarty_tpl->tpl_vars['id_lang']->value)) {?><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) Configuration::get('TVCMSNEWSLETTERPOPUP_IMG',$_smarty_tpl->tpl_vars['id_lang']->value), ENT_QUOTES, 'UTF-8');?>
" alt="" class="tv-img-responsive" loading="lazy"><?php }?></div><div id='newsletter_block_popup' class='block d-flex'><div class='block_content'><?php if ((isset($_smarty_tpl->tpl_vars['msg']->value)) && $_smarty_tpl->tpl_vars['msg']->value) {?><p class='<?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>warning_inline<?php } else { ?>success_inline<?php }?>'><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>
</p><?php }?><form method='post'><?php if ($_smarty_tpl->tpl_vars['show_fields']->value['title'] && Configuration::get('TVCMSNEWSLETTERPOPUP_TITLE',$_smarty_tpl->tpl_vars['id_lang']->value)) {?><div class='newsletter_title'><h3 class='h3'><?php echo htmlspecialchars((string) Configuration::get('TVCMSNEWSLETTERPOPUP_TITLE',$_smarty_tpl->tpl_vars['id_lang']->value), ENT_QUOTES, 'UTF-8');?>
</h3></div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['sub_title'] && Configuration::get('TVCMSNEWSLETTERPOPUP_SUB_DESCRIPTION',$_smarty_tpl->tpl_vars['id_lang']->value)) {?><div class='tvcmsnewsletterpopupContent'><?php echo htmlspecialchars((string) Configuration::get('TVCMSNEWSLETTERPOPUP_SUB_DESCRIPTION',$_smarty_tpl->tpl_vars['id_lang']->value), ENT_QUOTES, 'UTF-8');?>
</div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['description'] && Configuration::get('TVCMSNEWSLETTERPOPUP_DESCRIPTION',$_smarty_tpl->tpl_vars['id_lang']->value)) {?><div class='tvcmsnewsletterpopupContent'><?php echo htmlspecialchars((string) Configuration::get('TVCMSNEWSLETTERPOPUP_DESCRIPTION',$_smarty_tpl->tpl_vars['id_lang']->value), ENT_QUOTES, 'UTF-8');?>
</div><?php }?><div class='tvcmsnewsletterpopupAlert'></div><div class="tvnewsletterpopup-input"><input class='inputNew' id='tvcmsnewsletterpopupnewsletter-input' type='text' name='email' placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your mail...','mod'=>'tvcmsnewsletterpopup'),$_smarty_tpl ) );?>
" /></div><button id='tvnewsletter-email-subscribe' class='send-reqest button_unique tvall-inner-btn'><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','mod'=>'tvcmsnewsletterpopup'),$_smarty_tpl ) );?>
</span></button></form><div class='newsletter_block_popup-bottom d-flex justify-content-center'><label class='tvcmsnewsletterpopup_newsletter_dont_show_again' for='tvcmsnewsletterpopup_newsletter_dont_show_again'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not show this popup again','mod'=>'tvcmsnewsletterpopup'),$_smarty_tpl ) );?>
</label></div></div></div></div></div></div><?php }
}
}
