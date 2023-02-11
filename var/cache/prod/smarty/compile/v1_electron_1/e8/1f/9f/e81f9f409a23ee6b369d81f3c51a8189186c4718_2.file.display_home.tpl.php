<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:07
  from '/home/u704205129/domains/piasat.com/public_html/modules/tvcmsfooterlogo/views/templates/front/display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e627ef6bdba6_96663020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e81f9f409a23ee6b369d81f3c51a8189186c4718' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/modules/tvcmsfooterlogo/views/templates/front/display_home.tpl',
      1 => 1674084821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e627ef6bdba6_96663020 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php if (Configuration::get('TVCMSFOOTERLOGO_IMG')) {?><div class='tvfooter-about-logo-wrapper tvfooter-logo-block'><?php if ($_smarty_tpl->tpl_vars['show_fields']->value['main_image']) {?><div class='tvfooter-img-block'><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) Configuration::get('TVCMSFOOTERLOGO_IMG'), ENT_QUOTES, 'UTF-8');?>
" alt="" height="34" width="200" class="tv-img-responsive" loading="lazy"/></div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['main_title']) {?><div class='tvfooter-logo-title'><?php echo htmlspecialchars((string) Configuration::get('TVCMSFOOTERLOGO_TITLE',$_smarty_tpl->tpl_vars['id_lang']->value), ENT_QUOTES, 'UTF-8');?>
</div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['main_short_description']) {?><div class='tvfooter-logo-short-title'><?php echo htmlspecialchars((string) Configuration::get('TVCMSFOOTERLOGO_SUB_DESCRIPTION',$_smarty_tpl->tpl_vars['id_lang']->value), ENT_QUOTES, 'UTF-8');?>
</div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['main_description']) {?><div class='tvfooter-logo-desc'><?php echo htmlspecialchars((string) Configuration::get('TVCMSFOOTERLOGO_DESCRIPTION',$_smarty_tpl->tpl_vars['id_lang']->value), ENT_QUOTES, 'UTF-8');?>
</div><?php }?></div><?php }
}
}
