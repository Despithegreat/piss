<?php
/* Smarty version 4.2.1, created on 2023-02-10 15:50:49
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e667d9175a06_31598394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0c4e5f1f5b36cb88dcd5f3b83d53ec734bbbcfe' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/_partials/header.tpl',
      1 => 1674084822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/desktop-header.tpl' => 2,
    'file:_partials/mobile-header.tpl' => 2,
  ),
),false)) {
function content_63e667d9175a06_31598394 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2165356963e667d916ee66_05362940', 'header_nav');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97964200763e667d916fd25_41443286', 'header_top');
}
/* {block 'header_nav'} */
class Block_2165356963e667d916ee66_05362940 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_2165356963e667d916ee66_05362940',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_97964200763e667d916fd25_41443286 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_97964200763e667d916fd25_41443286',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if (Context::getContext()->getDevice() == 1) {
$_smarty_tpl->_subTemplateRender('file:_partials/desktop-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('withData'=>true), 0, false);
$_smarty_tpl->_subTemplateRender('file:_partials/mobile-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('withData'=>false), 0, false);
} else {
$_smarty_tpl->_subTemplateRender('file:_partials/desktop-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('withData'=>false), 0, true);
$_smarty_tpl->_subTemplateRender('file:_partials/mobile-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('withData'=>true), 0, true);
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );
}
}
/* {/block 'header_top'} */
}
