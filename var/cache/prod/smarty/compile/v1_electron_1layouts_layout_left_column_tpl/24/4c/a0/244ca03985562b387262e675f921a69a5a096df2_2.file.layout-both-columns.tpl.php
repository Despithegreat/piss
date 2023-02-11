<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:06
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/layouts/layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e627eeec0be0_77657176',
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
function content_63e627eeec0be0_77657176 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:_partials/helpers.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?><!doctype html><html lang="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
"><head><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190329933963e627eee87cc3_94551410', 'head');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147786004563e627eee91959_25310742', 'hook_after_body_opening_tag');
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayThemeOptions'),$_smarty_tpl ) );?>
<main><?php $_smarty_tpl->_subTemplateRender('file:_partials/tvcms-page-loader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?><div class="tv-main-div <?php if (Configuration::get('TVCMSCUSTOMSETTING_ADD_CONTAINER')) {?>tv-box-layout container<?php }?>" <?php if (Configuration::get('TVCMSCUSTOMSETTING_BODY_BACKGROUND_COLOR_STATUS') == '1') {?>style='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBodyBackgroundBody"),$_smarty_tpl ) );?>
;background-repeat:<?php echo htmlspecialchars((string) Configuration::get("TVCMSCUSTOMSETTING_BACKGROUND_IMAGE_REPEAT"), ENT_QUOTES, 'UTF-8');?>
;background-attachment:<?php echo htmlspecialchars((string) Configuration::get("TVCMSCUSTOMSETTING_BACKGROUND_IMAGE_ATTACHMENT"), ENT_QUOTES, 'UTF-8');?>
;'<?php }?>><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196824579963e627eee97ce1_17870911', 'product_activation');
?>
<header id="header"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145954188563e627eee98ff6_34431147', 'header');
?>
</header><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162806109663e627eee9a260_96835901', 'notifications');
?>
<div id="wrapper"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>
<div class="container <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index' || (isset($_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-left-column']))) {?> tv-left-layout<?php } else { ?>tv-full-layout <?php if ((isset($_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-full-width']))) {?>tvcms-full-layout<?php } elseif ((isset($_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-both-columns']))) {?>tvcms-left-right-layout<?php } elseif ((isset($_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-left-column']))) {?>tvcms-left-layout<?php } elseif ((isset($_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-right-column']))) {?>tvcms-right-layout<?php }
}?>"><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177279735663e627eeea2a36_44403879', 'breadcrumb');
}?><div class="row"><?php if (!Context::getContext()->isMobile() && !Context::getContext()->isTablet()) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209202992563e627eeea6149_20314800', "left_column");
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159833687763e627eeeab466_09117978', "content_wrapper");
if (Context::getContext()->isMobile() || Context::getContext()->isTablet()) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44003252863e627eeeb05a2_75136064', "left_column");
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140039979463e627eeeb5484_85754711', "right_column");
?>
</div></div><div class="half-wrapper-backdrop"></div></div><footer id="footer"><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayNewsLetterPopup"),$_smarty_tpl ) );
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_618388363e627eeeba000_08536799', "footer");
?>
</footer></div></main><div class="full-wrapper-backdrop"></div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141874057463e627eeebb750_49873487', 'javascript_bottom');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203260667363e627eeebde11_18636459', 'hook_before_body_closing_tag');
?>
</body></html><?php }
/* {block 'head'} */
class Block_190329933963e627eee87cc3_94551410 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_190329933963e627eee87cc3_94551410',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_147786004563e627eee91959_25310742 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_147786004563e627eee91959_25310742',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_196824579963e627eee97ce1_17870911 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_196824579963e627eee97ce1_17870911',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_145954188563e627eee98ff6_34431147 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_145954188563e627eee98ff6_34431147',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
class Block_162806109663e627eee9a260_96835901 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_162806109663e627eee9a260_96835901',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'notifications'} */
/* {block 'breadcrumb'} */
class Block_177279735663e627eeea2a36_44403879 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_177279735663e627eeea2a36_44403879',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'breadcrumb'} */
/* {block "left_column"} */
class Block_209202992563e627eeea6149_20314800 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_209202992563e627eeea6149_20314800',
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
class Block_208034551463e627eeeac864_78106088 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p>Hello world! This is HTML5 Boilerplate.</p><?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_159833687763e627eeeab466_09117978 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_159833687763e627eeeab466_09117978',
  ),
  'content' => 
  array (
    0 => 'Block_208034551463e627eeeac864_78106088',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="content-wrapper" class="left-column right-column col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-12"><div class="theiaStickySidebar"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208034551463e627eeeac864_78106088', "content", $this->tplIndex);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>
</div></div><?php
}
}
/* {/block "content_wrapper"} */
/* {block "left_column"} */
class Block_44003252863e627eeeb05a2_75136064 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_44003252863e627eeeb05a2_75136064',
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
class Block_140039979463e627eeeb5484_85754711 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_140039979463e627eeeb5484_85754711',
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
class Block_618388363e627eeeba000_08536799 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_618388363e627eeeba000_08536799',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_141874057463e627eeebb750_49873487 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_141874057463e627eeebb750_49873487',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/password-policy-template.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_203260667363e627eeebde11_18636459 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_203260667363e627eeebde11_18636459',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
