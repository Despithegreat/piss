<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:07
  from 'module:tvcmsmegamenuviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e627ef37fa60_38773822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '763ffb04ae775570a33972d7beb305aa467fe8b2' => 
    array (
      0 => 'module:tvcmsmegamenuviewstemplat',
      1 => 1674084821,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e627ef37fa60_38773822 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '96095158763e627ef35fed4_86719997';
if (is_array($_smarty_tpl->tpl_vars['menus']->value) && count($_smarty_tpl->tpl_vars['menus']->value) > 0) {?><div class="container_tv_megamenu"><div id="tv-menu-horizontal" class="tv-menu-horizontal clearfix"><?php $_smarty_tpl->_assignInScope('id_lang', Context::getContext()->language->id);?><ul class="menu-content"><li class="tvmega-menu-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mega Menu','mod'=>'tvcmsmegamenu'),$_smarty_tpl ) );?>
</li><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menus']->value, 'menu', false, NULL, 'menus', array (
));
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
if ((isset($_smarty_tpl->tpl_vars['menu']->value['type'])) && $_smarty_tpl->tpl_vars['menu']->value['type'] == 'CAT' && $_smarty_tpl->tpl_vars['menu']->value['dropdown'] == 1) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['sub_menu'],'quotes','UTF-8' ));
} else { ?><li class="level-1 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
if (count($_smarty_tpl->tpl_vars['menu']->value['sub_menu']) > 0) {?> parent<?php }?>"><a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['menu']->value['type_icon'] == 0 && $_smarty_tpl->tpl_vars['menu']->value['icon'] != '') {?><img class="img-icon" src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['icon_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['icon'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['menu']->value['width_icon'] && $_smarty_tpl->tpl_vars['menu']->value['height_icon']) {?>width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu']->value['width_icon'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu']->value['height_icon'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>/><?php } elseif ($_smarty_tpl->tpl_vars['menu']->value['type_icon'] == 1 && $_smarty_tpl->tpl_vars['menu']->value['icon'] != '') {?><i class="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['icon'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></i><?php }
if ($_smarty_tpl->tpl_vars['menu']->value['active_title'] == 1) {?><span><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span><?php }
if ($_smarty_tpl->tpl_vars['menu']->value['subtitle'] != '') {?><span class="menu-subtitle" <?php if ($_smarty_tpl->tpl_vars['menu']->value['sub_title_stylesheet'] != '') {?>style="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu']->value['sub_title_stylesheet'], ENT_QUOTES, 'UTF-8');?>
" <?php }?>> <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['subtitle'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a><span class="icon-drop-mobile"></span></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div></div><?php }
}
}
