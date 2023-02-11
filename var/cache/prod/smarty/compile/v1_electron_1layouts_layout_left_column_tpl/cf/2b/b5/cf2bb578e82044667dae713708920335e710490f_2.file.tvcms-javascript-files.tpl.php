<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:06
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/_partials/tvcms-javascript-files.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e627eef1b2d9_69651648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf2bb578e82044667dae713708920335e710490f' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/_partials/tvcms-javascript-files.tpl',
      1 => 1674084822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e627eef1b2d9_69651648 (Smarty_Internal_Template $_smarty_tpl) {
if (Configuration::get('TVCMSFRONTSIDE_THEME_SETTING_SHOW')) {?><!-- START THEME_CONTROL --><div class="tvcms-custom-theme"></div><!-- END THEME_CONTROL --><?php }
if (Configuration::get('TVCMSCUSTOMSETTING_THEME_OPTION')) {
if (Configuration::get('TVCMSCUSTOMSETTING_ALL_THEME_CSS_PATH')) {?><link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) Configuration::get('TVCMSCUSTOMSETTING_ALL_THEME_CSS_PATH'), ENT_QUOTES, 'UTF-8');?>
"></link><?php }
if (Configuration::get('TVCMSCUSTOMSETTING_THEME_FONT_TYPE_LINK')) {?><link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars((string) Configuration::get('TVCMSCUSTOMSETTING_THEME_FONT_TYPE_LINK'), ENT_QUOTES, 'UTF-8');?>
"></link><?php }
if (Configuration::get('TVCMSCUSTOMSETTING_THEME_FONT_TYPE_LINK_2')) {?><link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars((string) Configuration::get('TVCMSCUSTOMSETTING_THEME_FONT_TYPE_LINK_2'), ENT_QUOTES, 'UTF-8');?>
"></link><?php }?><!-- END THEME_CONTROL CUSTOM COLOR CSS --><?php }
}
}
