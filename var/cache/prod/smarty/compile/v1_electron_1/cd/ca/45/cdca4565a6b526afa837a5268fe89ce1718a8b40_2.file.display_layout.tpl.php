<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:26:21
  from '/home/u704205129/domains/piasat.com/public_html/modules/tvcmsthemeoptions/views/templates/front/display_layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e629dd369009_05278686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdca4565a6b526afa837a5268fe89ce1718a8b40' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/modules/tvcmsthemeoptions/views/templates/front/display_layout.tpl',
      1 => 1674084821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e629dd369009_05278686 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php if (Configuration::get('TVCMSFRONTSIDE_THEME_SETTING_SHOW')) {?><div class="tvcmstheme-layout"><div class="tvtheme-layout"><form><div class="tvthemelayout-heading"></div><div class="tvtheme-layout-wrapper"><table><tr class="tvselect-layout tvall-theme-content"><td><div class="accordion" id="accordionExample"><div class="card"><div class="card-header" id="headerWrapper"><h2 class="mb-0"><button class="tvtheme-layout-btn btn btn-block collapsed" type="button" data-toggle="collapse" data-target="#headerLayout" aria-expanded="true" aria-controls="headerLayout"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Header Layouts','mod'=>'tvcmsthemeoptions'),$_smarty_tpl ) );?>
<i class="material-icons tvlayout-dropdown">&#xe5cf;</i></button></h2></div><div id="headerLayout" class="collapse show in" aria-labelledby="headerWrapper" data-parent="#accordionExample"><div class="card-body"><div class="tvtheme-layout-radio"><?php $_smarty_tpl->_assignInScope('arr_desk_name', $_smarty_tpl->tpl_vars['fields_data']->value['header_layout_list']);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_desk_name']->value, 'i', false, NULL, 'index', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index']++;
$_smarty_tpl->_assignInScope('header_name', "desk-header-".((string)$_smarty_tpl->tpl_vars['i']->value));?><div class="col-md-6"><label class="tvlayout-radio-img"><input type="radio" class="header-layout" name="header-layout" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index'] : null)+1 == 1) {?>checked<?php }?> /><img class="tvlayout-image" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['fields_data']->value['layout_img_path'], ENT_QUOTES, 'UTF-8');?>
hlayouts/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['header_name']->value, ENT_QUOTES, 'UTF-8');?>
.jpg" alt="header-layout" data-layout="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['header_name']->value, ENT_QUOTES, 'UTF-8');?>
" /><p class="tvlayout-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Header','mod'=>'tvcmsthemeoptions'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index'] : null)+1, ENT_QUOTES, 'UTF-8');?>
</p></label></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div></div><div class="card"><div class="card-header" id="headermobileWrapper"><h2 class="mb-0"><button class="tvtheme-layout-btn btn btn-block collapsed" type="button" data-toggle="collapse" data-target="#headerMobileLayout" aria-expanded="true" aria-controls="headerMobileLayout"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mobile Header Layouts','mod'=>'tvcmsthemeoptions'),$_smarty_tpl ) );?>
<i class="material-icons tvlayout-dropdown">&#xe5cf;</i></button></h2></div><div id="headerMobileLayout" class="collapse" aria-labelledby="headermobileWrapper" data-parent="#accordionExample"><div class="card-body"><div class="tvtheme-layout-radio"><?php $_smarty_tpl->_assignInScope('arr_desk_name', $_smarty_tpl->tpl_vars['fields_data']->value['mob_header_layout_list']);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_desk_name']->value, 'i', false, NULL, 'index', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index']++;
$_smarty_tpl->_assignInScope('header_mobile_name', "mobile-header-".((string)$_smarty_tpl->tpl_vars['i']->value));?><div class="col-md-6"><label class="tvlayout-radio-img"><input type="radio" class="header-mobile-layout" name="header-mobile-layout" value="<?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index'] : null)+1, ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index'] : null)+1 == 1) {?>checked<?php }?> /><img class="tvlayout-image" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['fields_data']->value['layout_img_path'], ENT_QUOTES, 'UTF-8');?>
hlayouts/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['header_mobile_name']->value, ENT_QUOTES, 'UTF-8');?>
.jpg" alt="header-mobile-layout" data-layout="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['header_mobile_name']->value, ENT_QUOTES, 'UTF-8');?>
"/><p class="tvlayout-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Header','mod'=>'tvcmsthemeoptions'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index'] : null)+1, ENT_QUOTES, 'UTF-8');?>
</p></label></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div></div><div class="card"><div class="card-header" id="footerWrapper"><h2 class="mb-0"><button class="tvtheme-layout-btn btn btn-block collapsed" type="button" data-toggle="collapse" data-target="#footerLayout" aria-expanded="false" aria-controls="footerLayout"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Footer Layouts','mod'=>'tvcmsthemeoptions'),$_smarty_tpl ) );?>
<i class="material-icons tvlayout-dropdown">&#xe5cf;</i></button></h2></div><div id="footerLayout" class="collapse" aria-labelledby="footerWrapper" data-parent="#accordionExample"><div class="card-body"><div class="tvtheme-layout-radio"><?php $_smarty_tpl->_assignInScope('arr_desk_name', $_smarty_tpl->tpl_vars['fields_data']->value['footer_layout_list']);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_desk_name']->value, 'i', false, NULL, 'index', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index']++;
$_smarty_tpl->_assignInScope('footer_name', "footer-".((string)$_smarty_tpl->tpl_vars['i']->value));?><div class="col-md-6"><label class="tvlayout-radio-img"><input type="radio" class="footer-layout" name="footer-layout" value="<?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index'] : null)+1, ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index'] : null)+1 == 1) {?>checked<?php }?> /><img class="tvlayout-image" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['fields_data']->value['layout_img_path'], ENT_QUOTES, 'UTF-8');?>
flayouts/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['footer_name']->value, ENT_QUOTES, 'UTF-8');?>
.jpg" alt="footer-layout" data-layout="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['footer_name']->value, ENT_QUOTES, 'UTF-8');?>
"/><p class="tvlayout-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Footer','mod'=>'tvcmsthemeoptions'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index'] : null)+1, ENT_QUOTES, 'UTF-8');?>
</p></label></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div></div><div class="card"><div class="card-header" id="productWrapper"><h2 class="mb-0"><button class="tvtheme-layout-btn btn btn-block collapsed" type="button" data-toggle="collapse" data-target="#productLayout" aria-expanded="false" aria-controls="productLayout"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Page Layouts','mod'=>'tvcmsthemeoptions'),$_smarty_tpl ) );?>
<i class="material-icons tvlayout-dropdown">&#xe5cf;</i></button></h2></div><div id="productLayout" class="collapse" aria-labelledby="productWrapper" data-parent="#accordionExample"><div class="card-body"><div class="tvtheme-layout-radio"><?php $_smarty_tpl->_assignInScope('arr_desk_name', $_smarty_tpl->tpl_vars['fields_data']->value['product_layout_list']);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_desk_name']->value, 'i', false, NULL, 'index', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index']++;
$_smarty_tpl->_assignInScope('prod_name', "product-".((string)$_smarty_tpl->tpl_vars['i']->value));?><div class="col-md-6"><label class="tvlayout-radio-img"><input type="radio" name="product-layout" name="product-layout" value="<?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index'] : null)+1, ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index'] : null)+1 == 1) {?>checked<?php }?> /><img class="tvlayout-image" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['fields_data']->value['layout_img_path'], ENT_QUOTES, 'UTF-8');?>
pdlayouts/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_name']->value, ENT_QUOTES, 'UTF-8');?>
.png" alt="Product-layout" data-layout="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prod_name']->value, ENT_QUOTES, 'UTF-8');?>
"/><p class="tvlayout-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Layout','mod'=>'tvcmsthemeoptions'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index'] : null)+1, ENT_QUOTES, 'UTF-8');?>
</p></label></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div></div></div></td></tr></table><button class="tvtheme-layout-reset tvall-inner-btn"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span></button></div><div class="tvtheme-layout-icon"><i class='material-icons'>dashboard_customize</i></div></form></div></div><?php }
}
}
