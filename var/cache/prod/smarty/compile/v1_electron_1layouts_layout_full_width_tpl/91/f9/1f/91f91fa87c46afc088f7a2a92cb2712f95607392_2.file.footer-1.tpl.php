<?php
/* Smarty version 4.2.1, created on 2023-02-10 15:50:49
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/_partials/footer-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e667d935dd64_31004756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91f91fa87c46afc088f7a2a92cb2712f95607392' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/_partials/footer-1.tpl',
      1 => 1674084822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e667d935dd64_31004756 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShowMap'),$_smarty_tpl ) );?>
<div class="footer-container tvcmsfooter-background-image footer-1" data-footer-layout="1" <?php if ($_smarty_tpl->tpl_vars['FooterImageStatus']->value) {?>style="background-image: url('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['paths']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['FooterBackgroundImage']->value, ENT_QUOTES, 'UTF-8');?>
');" <?php }?>> <div class="container tvfooter-logo-link-wrapper"><div class="tvfooter-storelogo-weapper"><div class="tvfooter-storelogo-inner clearfix"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206655035763e667d93537a0_68372475', 'hook_footer_part_2');
?>
</div></div><div class='tvfooter-storelogo-imformation row'><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196282383463e667d93550d3_09483687', 'hook_footer_part_1');
?>
</div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51177353963e667d9358476_04538752', 'hook_footer');
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomsocialblock'),$_smarty_tpl ) );?>
<div class='tvbottom-to-top'><a href="javascript:" class="tvbottom-to-top-icon"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go Top','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span><i class='material-icons'>&#xe316;</i></a></div></div><div class="tvfooter-copy-payment-icon-wrapper"><div class="container tvfooter-copy-payment-icon-content"><div class="row tvfooter-copy-payment-icon-inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayPaymentIcon'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCopyRightText'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySocialMediaBlock'),$_smarty_tpl ) );?>
</div></div></div></div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomJs'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTvcmsFooter'),$_smarty_tpl ) );
}
/* {block 'hook_footer_part_2'} */
class Block_206655035763e667d93537a0_68372475 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_part_2' => 
  array (
    0 => 'Block_206655035763e667d93537a0_68372475',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterPart2'),$_smarty_tpl ) );
}
}
/* {/block 'hook_footer_part_2'} */
/* {block 'hook_footer_part_1'} */
class Block_196282383463e667d93550d3_09483687 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_part_1' => 
  array (
    0 => 'Block_196282383463e667d93550d3_09483687',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContactCinfo'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterCategory'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterPart1'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMyaccountcblock'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNewslettersubscription'),$_smarty_tpl ) );
}
}
/* {/block 'hook_footer_part_1'} */
/* {block 'hook_footer'} */
class Block_51177353963e667d9358476_04538752 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_51177353963e667d9358476_04538752',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );
}
}
/* {/block 'hook_footer'} */
}
