<?php
/* Smarty version 4.2.1, created on 2023-02-10 16:02:44
  from '/home/u704205129/domains/piasat.com/public_html/modules/tvcmsvideotab/views/templates/admin/popupvideo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e66aa4a37559_12426773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28e802930cf2913b05c404c7cb780923a01a37e7' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/modules/tvcmsvideotab/views/templates/admin/popupvideo.tpl',
      1 => 1674084821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e66aa4a37559_12426773 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['position_popup']->value == 1) {?>
    <?php if (!empty($_smarty_tpl->tpl_vars['url']->value)) {?>
        <div class="tvproduct-play-icon">
                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
" class="fancybox fancybox.iframe">
                                        <img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url1']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
modules/tvcmsvideotab/views/img/iconvideo.png" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'LIVE VIDEO','mod'=>'tvcmsvideotab'),$_smarty_tpl ) );?>
" style="margin-top:-4px;" height="16px" width="19px" loading="lazy">
                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'LIVE VIDEO','mod'=>'tvcmsvideotab'),$_smarty_tpl ) );?>
</span>
                </a>
            </div>
        <?php }
}
}
}
