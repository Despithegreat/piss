<?php
/* Smarty version 4.2.1, created on 2023-02-10 15:50:48
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/layouts/layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e667d8e88fc8_50298534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '244ca03985562b387262e675f921a69a5a096df2' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/layouts/layout-both-columns.tpl',
      1 => 1674084822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/helpers.tpl' => 1,
    'file:_partials/head.tpl' => 1,
    'file:_partials/tvcms-javascript-files.tpl' => 1,
    'file:_partials/tvcms-page-loader.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/password-policy-template.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_63e667d8e88fc8_50298534 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:_partials/helpers.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?><!doctype html><html lang="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
"><head><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169706915963e667d8e38dd8_77219132', 'head');
$_smarty_tpl->_subTemplateRender("file:_partials/tvcms-javascript-files.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></head><body id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['res_1']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['res_1']->value, ENT_QUOTES, 'UTF-8');
}?>  <?php if ($_smarty_tpl->tpl_vars['res_2']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['res_2']->value, ENT_QUOTES, 'UTF-8');
}?>" <?php if (Configuration::get('TVCMSCUSTOMSETTING_ADD_CONTAINER')) {?> style='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBackgroundBody"),$_smarty_tpl ) );?>
;background-repeat:<?php echo htmlspecialchars((string) Configuration::get("TVCMSCUSTOMSETTING_BACKGROUND_IMAGE_REPEAT"), ENT_QUOTES, 'UTF-8');?>
;background-attachment:<?php echo htmlspecialchars((string) Configuration::get("TVCMSCUSTOMSETTING_BACKGROUND_IMAGE_ATTACHMENT"), ENT_QUOTES, 'UTF-8');?>
;' <?php }?> data-mouse-hover-img='<?php echo htmlspecialchars((string) Configuration::get("TVCMSCUSTOMSETTING_HOVER_IMG"), ENT_QUOTES, 'UTF-8');?>
' data-menu-sticky='<?php echo htmlspecialchars((string) Configuration::get("TVCMSCUSTOMSETTING_MAIN_MENU_STICKY"), ENT_QUOTES, 'UTF-8');?>
'><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212932309363e667d8e51197_98178266', 'hook_after_body_opening_tag');
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayThemeOptions'),$_smarty_tpl ) );?>
<main><?php $_smarty_tpl->_subTemplateRender('file:_partials/tvcms-page-loader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?><div class="tv-main-div <?php if (Configuration::get('TVCMSCUSTOMSETTING_ADD_CONTAINER')) {?>tv-box-layout container<?php }?>" <?php if (Configuration::get('TVCMSCUSTOMSETTING_BODY_BACKGROUND_COLOR_STATUS') == '1') {?>style='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBodyBackgroundBody"),$_smarty_tpl ) );?>
;background-repeat:<?php echo htmlspecialchars((string) Configuration::get("TVCMSCUSTOMSETTING_BACKGROUND_IMAGE_REPEAT"), ENT_QUOTES, 'UTF-8');?>
;background-attachment:<?php echo htmlspecialchars((string) Configuration::get("TVCMSCUSTOMSETTING_BACKGROUND_IMAGE_ATTACHMENT"), ENT_QUOTES, 'UTF-8');?>
;'<?php }?>><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91068924763e667d8e58314_47061273', 'product_activation');
?>
<header id="header"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196105235263e667d8e59a96_93143150', 'header');
?>
</header><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212426656563e667d8e5b0a2_14162064', 'notifications');
?>
<div id="wrapper"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>
<div class="container <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index' || (isset($_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-left-column']))) {?> tv-left-layout<?php } else { ?>tv-full-layout <?php if ((isset($_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-full-width']))) {?>tvcms-full-layout<?php } elseif ((isset($_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-both-columns']))) {?>tvcms-left-right-layout<?php } elseif ((isset($_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-left-column']))) {?>tvcms-left-layout<?php } elseif ((isset($_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-right-column']))) {?>tvcms-right-layout<?php }
}?>"><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70843749363e667d8e64b69_86369687', 'breadcrumb');
}?><div class="row"><?php if (!Context::getContext()->isMobile() && !Context::getContext()->isTablet()) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134143794763e667d8e689c4_10559668', "left_column");
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76296813363e667d8e6e4d2_26938651', "content_wrapper");
if (Context::getContext()->isMobile() || Context::getContext()->isTablet()) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170805559763e667d8e768f5_07285694', "left_column");
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185937653063e667d8e7c467_72221958', "right_column");
?>
</div></div><div class="half-wrapper-backdrop"></div></div><footer id="footer"><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayNewsLetterPopup"),$_smarty_tpl ) );
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100825579763e667d8e81aa0_47330975', "footer");
?>
</footer></div></main><div class="full-wrapper-backdrop"></div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52781304263e667d8e83372_60845096', 'javascript_bottom');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178291561663e667d8e85df6_00982300', 'hook_before_body_closing_tag');
?>
</body></html><?php }
/* {block 'head'} */
class Block_169706915963e667d8e38dd8_77219132 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_169706915963e667d8e38dd8_77219132',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_212932309363e667d8e51197_98178266 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_212932309363e667d8e51197_98178266',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_91068924763e667d8e58314_47061273 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_91068924763e667d8e58314_47061273',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_196105235263e667d8e59a96_93143150 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_196105235263e667d8e59a96_93143150',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
class Block_212426656563e667d8e5b0a2_14162064 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_212426656563e667d8e5b0a2_14162064',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'notifications'} */
/* {block 'breadcrumb'} */
class Block_70843749363e667d8e64b69_86369687 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_70843749363e667d8e64b69_86369687',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'breadcrumb'} */
/* {block "left_column"} */
class Block_134143794763e667d8e689c4_10559668 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_134143794763e667d8e689c4_10559668',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="left-column" class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="theiaStickySidebar"><?php if (Configuration::get('TVCMSCUSTOMSETTING_FILTER_LEFT_PANEL') == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFacetedSearchBlock'),$_smarty_tpl ) );
}?><div class='tvleft-column-remove'><div class="tvleft-column-close-btn"></div></div><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );
}?></div></div><?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
class Block_109693562063e667d8e6fa34_53811129 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p>Hello world! This is HTML5 Boilerplate.</p><?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_76296813363e667d8e6e4d2_26938651 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_76296813363e667d8e6e4d2_26938651',
  ),
  'content' => 
  array (
    0 => 'Block_109693562063e667d8e6fa34_53811129',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="content-wrapper" class="left-column right-column col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-12"><div class="theiaStickySidebar"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109693562063e667d8e6fa34_53811129', "content", $this->tplIndex);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>
</div></div><?php
}
}
/* {/block "content_wrapper"} */
/* {block "left_column"} */
class Block_170805559763e667d8e768f5_07285694 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_170805559763e667d8e768f5_07285694',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="left-column" class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="theiaStickySidebar"><?php if (Configuration::get('TVCMSCUSTOMSETTING_FILTER_LEFT_PANEL') == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFacetedSearchBlock'),$_smarty_tpl ) );
}?><div class='tvleft-column-remove'><div class="tvleft-column-close-btn"></div></div><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );
}?></div></div><?php
}
}
/* {/block "left_column"} */
/* {block "right_column"} */
class Block_185937653063e667d8e7c467_72221958 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_185937653063e667d8e7c467_72221958',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="right-column" class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="theiaStickySidebar"><div class='tvright-column-remove'><div class="tvright-column-close-btn"></div></div><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );
}?></div></div><?php
}
}
/* {/block "right_column"} */
/* {block "footer"} */
class Block_100825579763e667d8e81aa0_47330975 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_100825579763e667d8e81aa0_47330975',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_52781304263e667d8e83372_60845096 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_52781304263e667d8e83372_60845096',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/password-policy-template.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_178291561663e667d8e85df6_00982300 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_178291561663e667d8e85df6_00982300',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
