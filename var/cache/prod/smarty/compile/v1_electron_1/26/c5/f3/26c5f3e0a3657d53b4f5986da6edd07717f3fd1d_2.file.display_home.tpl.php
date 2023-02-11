<?php
/* Smarty version 4.2.1, created on 2023-02-10 16:02:44
  from '/home/u704205129/domains/piasat.com/public_html/modules/tvcmssizechart/views/templates/front/display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e66aa4cd7972_30222669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26c5f3e0a3657d53b4f5986da6edd07717f3fd1d' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/modules/tvcmssizechart/views/templates/front/display_home.tpl',
      1 => 1674084821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e66aa4cd7972_30222669 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tvproduct-size-custom"><?php if ($_smarty_tpl->tpl_vars['TVCMSSIZECHART_TEXT_STATUS_1']->value) {?><button type="button" class="btn btn-unstyle tvcustomize-btn fancybox fancybox.iframe"><i class="tvcustom-icons"></i><span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Size Guide','mod'=>'tvcmssizechart'),$_smarty_tpl ) );?>
</span></button><?php }?><a class="open-comment-form btn btn-unstyle" href="#new_comment_form"><i class="tvcustom-icons"></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write your review','mod'=>'tvcmssizechart'),$_smarty_tpl ) );?>
</span></a><div id="tvcmssizechart-popup" class="cms-description"><?php echo $_smarty_tpl->tpl_vars['TVCMSSIZECHART_TEXT_1']->value;?>
</div></div><?php }
}
