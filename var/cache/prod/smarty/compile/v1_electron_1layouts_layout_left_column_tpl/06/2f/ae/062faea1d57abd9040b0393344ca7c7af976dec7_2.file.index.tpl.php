<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:25:42
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e629b688d4b6_83360838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '062faea1d57abd9040b0393344ca7c7af976dec7' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/index.tpl',
      1 => 1674084822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e629b688d4b6_83360838 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80795261363e629b68896a5_27958303', 'page_content_container');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_106054008363e629b688a129_81314652 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_57268654663e629b688b4b6_10326040 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_116463521263e629b688ae28_78829371 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57268654663e629b688b4b6_10326040', 'hook_home', $this->tplIndex);
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_80795261363e629b68896a5_27958303 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_80795261363e629b68896a5_27958303',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_106054008363e629b688a129_81314652',
  ),
  'page_content' => 
  array (
    0 => 'Block_116463521263e629b688ae28_78829371',
  ),
  'hook_home' => 
  array (
    0 => 'Block_57268654663e629b688b4b6_10326040',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="content" class="page-home"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106054008363e629b688a129_81314652', 'page_content_top', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116463521263e629b688ae28_78829371', 'page_content', $this->tplIndex);
?>
</section><?php
}
}
/* {/block 'page_content_container'} */
}
