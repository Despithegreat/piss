<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:25:42
  from '/home/u704205129/domains/piasat.com/public_html/modules/tvcmssliderofferbanner/views/templates/front/display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e629b67145d2_12542020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d9adfa3731653f9f0275338f269320035149bd1' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/modules/tvcmssliderofferbanner/views/templates/front/display_home.tpl',
      1 => 1674084821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e629b67145d2_12542020 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['TVCMSSLIDEROFFERBANNER_IMAGE_NAME'], ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
if (!empty($_prefixVariable1)) {?><div class="tvcmssliderofferbanners-one col-md-2 col-lg-2"><div class="col-xl-12 col-lg-12 col-md-6 col-sm-6 tvbanner1 tvcmssliderofferbanners"><a class="tvbanner-hover-wrapper" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['TVCMSSLIDEROFFERBANNER_LINK'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['TVCMSSLIDEROFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['TVCMSSLIDEROFFERBANNER_IMAGE_NAME_WIDTH_1'] && $_smarty_tpl->tpl_vars['data']->value['TVCMSSLIDEROFFERBANNER_IMAGE_NAME_HEIGHT_1']) {?>style="aspect-ratio:<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['data']->value['TVCMSSLIDEROFFERBANNER_IMAGE_NAME_WIDTH_1'])/($_smarty_tpl->tpl_vars['data']->value['TVCMSSLIDEROFFERBANNER_IMAGE_NAME_HEIGHT_1']), ENT_QUOTES, 'UTF-8');?>
;"<?php }?>><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['TVCMSSLIDEROFFERBANNER_IMAGE_NAME'], ENT_QUOTES, 'UTF-8');?>
" class="tvimage-lazy img-responsive" alt="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['TVCMSSLIDEROFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['TVCMSSLIDEROFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Slider Offer Banner','mod'=>'tvcmssliderofferbanner'),$_smarty_tpl ) );
}?>" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['TVCMSSLIDEROFFERBANNER_IMAGE_NAME_WIDTH_1'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['TVCMSSLIDEROFFERBANNER_IMAGE_NAME_HEIGHT_1'], ENT_QUOTES, 'UTF-8');?>
" /></a><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['TVCMSSLIDEROFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value]) && Configuration::get('TVCMSSLIDEROFFERBANNER_CAPTION_SIDE') != 'none') {?><div class="tvofferbanner-text <?php echo htmlspecialchars((string) Configuration::get('TVCMSSLIDEROFFERBANNER_CAPTION_SIDE'), ENT_QUOTES, 'UTF-8');?>
"><h2><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['TVCMSSLIDEROFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value], ENT_QUOTES, 'UTF-8');?>
</h2></div><?php }?></div><?php }
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['TVCMSSLIDEROFFERBANNER_IMAGE_NAME_2'], ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
if (!empty($_prefixVariable2)) {?><div class="col-xl-12 col-lg-12 col-md-6 col-sm-6 tvbanner2 tvcmssliderofferbanners"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['TVCMSSLIDEROFFERBANNER_LINK_2'], ENT_QUOTES, 'UTF-8');?>
" class="tvbanner-hover-wrapper" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['TVCMSSLIDEROFFERBANNER_CAPTION_2'][$_smarty_tpl->tpl_vars['language_id']->value], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['TVCMSSLIDEROFFERBANNER_IMAGE_NAME_2_WIDTH'] && $_smarty_tpl->tpl_vars['data']->value['TVCMSSLIDEROFFERBANNER_IMAGE_NAME_2_HEIGHT']) {?> style="aspect-ratio:<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['data']->value['TVCMSSLIDEROFFERBANNER_IMAGE_NAME_2_WIDTH'])/($_smarty_tpl->tpl_vars['data']->value['TVCMSSLIDEROFFERBANNER_IMAGE_NAME_2_HEIGHT']), ENT_QUOTES, 'UTF-8');?>
;"<?php }?>><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['TVCMSSLIDEROFFERBANNER_IMAGE_NAME_2'], ENT_QUOTES, 'UTF-8');?>
" class="tvimage-lazy img-responsive" alt="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['TVCMSSLIDEROFFERBANNER_CAPTION_2'][$_smarty_tpl->tpl_vars['language_id']->value])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['TVCMSSLIDEROFFERBANNER_CAPTION_2'][$_smarty_tpl->tpl_vars['language_id']->value], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Slider Offer Banner 2','mod'=>'tvcmssliderofferbanner'),$_smarty_tpl ) );
}?>" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['TVCMSSLIDEROFFERBANNER_IMAGE_NAME_2_WIDTH'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['TVCMSSLIDEROFFERBANNER_IMAGE_NAME_2_HEIGHT'], ENT_QUOTES, 'UTF-8');?>
" /></a><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['TVCMSSLIDEROFFERBANNER_CAPTION_2'][$_smarty_tpl->tpl_vars['language_id']->value]) && Configuration::get('TVCMSSLIDEROFFERBANNER_CAPTION_SIDE_2') != 'none') {?><div class="tvofferbanner-text <?php echo htmlspecialchars((string) Configuration::get('TVCMSSLIDEROFFERBANNER_CAPTION_SIDE_2'), ENT_QUOTES, 'UTF-8');?>
"><h2><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['TVCMSSLIDEROFFERBANNER_CAPTION_2'][$_smarty_tpl->tpl_vars['language_id']->value], ENT_QUOTES, 'UTF-8');?>
</h2></div><?php }?></div><?php }?></div><?php }
}
