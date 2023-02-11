<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:07
  from '/home/u704205129/domains/piasat.com/public_html/modules/tvcmsproductcompare/views/templates/front/display_nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e627ef2cd1e6_14389012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f2452117a5b4f41d4c7ed18b894538e4e07a898' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/modules/tvcmsproductcompare/views/templates/front/display_nav.tpl',
      1 => 1674084821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e627ef2cd1e6_14389012 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tvcmsdesktop-view-compare"><a class="link_wishlist tvdesktop-view-compare tvcmscount-compare-product" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tvcmsproductcompare','productcomparelist'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Compare','mod'=>'tvcmsproductcompare'),$_smarty_tpl ) );?>
"><div class="tvdesktop-compare-icon"><i class='material-icons'>&#xe043;</i></div><div class="tvdesktop-view-compare-name"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compare','mod'=>'tvcmsproductcompare'),$_smarty_tpl ) );?>
  <span class="count-product">(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tot_comp_prod']->value, ENT_QUOTES, 'UTF-8');?>
)</span></div></a></div><?php }
}
