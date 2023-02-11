<?php
/* Smarty version 4.2.1, created on 2023-02-10 15:50:48
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e667d8e0b258_54762958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '680e06895cb937e9324ac576934696888e152438' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/page.tpl',
      1 => 1674084822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e667d8e0b258_54762958 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195002344963e667d8e04c55_53992310', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_header_container'} */
class Block_193395561363e667d8e05473_08798612 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_131915523163e667d8e068d8_20155461 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_163628175163e667d8e074a7_31816974 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Page content --><?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_200484172063e667d8e06169_84956889 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="content" class="page-content card card-block"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131915523163e667d8e068d8_20155461', 'page_content_top', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163628175163e667d8e074a7_31816974', 'page_content', $this->tplIndex);
?>
</div><?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_98917286863e667d8e097c8_86971419 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Footer content --><?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_302696963e667d8e09017_37594342 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<footer class="page-footer"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98917286863e667d8e097c8_86971419', 'page_footer', $this->tplIndex);
?>
</footer><?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_195002344963e667d8e04c55_53992310 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_195002344963e667d8e04c55_53992310',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_193395561363e667d8e05473_08798612',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_200484172063e667d8e06169_84956889',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_131915523163e667d8e068d8_20155461',
  ),
  'page_content' => 
  array (
    0 => 'Block_163628175163e667d8e074a7_31816974',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_302696963e667d8e09017_37594342',
  ),
  'page_footer' => 
  array (
    0 => 'Block_98917286863e667d8e097c8_86971419',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="main"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193395561363e667d8e05473_08798612', 'page_header_container', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200484172063e667d8e06169_84956889', 'page_content_container', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_302696963e667d8e09017_37594342', 'page_footer_container', $this->tplIndex);
?>
</div><?php
}
}
/* {/block 'content'} */
}
