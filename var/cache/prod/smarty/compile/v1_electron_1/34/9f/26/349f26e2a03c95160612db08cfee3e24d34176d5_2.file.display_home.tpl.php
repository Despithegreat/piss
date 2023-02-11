<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:06
  from '/home/u704205129/domains/piasat.com/public_html/modules/tvcmscookiesnotice/views/templates/front/display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e627eef27f41_41900087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '349f26e2a03c95160612db08cfee3e24d34176d5' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/modules/tvcmscookiesnotice/views/templates/front/display_home.tpl',
      1 => 1674084821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e627eef27f41_41900087 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='tvcmscookies-notice'><div class='tvcookies-notice-img-wrapper'><div class="tvcookies-notice-img-inner"><div class="tvcookie-content-box"><div class="tvcookies-notice-title"><?php echo $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['title'];?>
</div></div><div class="tvcookie-btn-wrapper"><button class='close-cookie tvclose-btn'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'tvcmscookiesnotice'),$_smarty_tpl ) );?>
</button><button class='close-cookie tvok-btn'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ok','mod'=>'tvcmscookiesnotice'),$_smarty_tpl ) );?>
</button></div></div><div class="tvcookies-notice-icon"><button class='close-cookie tvclose-icon'><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accept All','mod'=>'tvcmscookiesnotice'),$_smarty_tpl ) );?>
</span></button></div></div></div><?php }
}
