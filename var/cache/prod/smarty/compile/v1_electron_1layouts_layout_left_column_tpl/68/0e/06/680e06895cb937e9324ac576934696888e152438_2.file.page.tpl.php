<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:07
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e627ef111137_18320429',
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
function content_63e627ef111137_18320429 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170725367163e627ef10b7a1_05359359', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_header_container'} */
class Block_180746751663e627ef10bf75_67168654 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_66397899463e627ef10d2e4_32511304 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_190356228163e627ef10dd78_37025254 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Page content --><?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_151386772063e627ef10cbd5_07867932 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="content" class="page-content card card-block"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66397899463e627ef10d2e4_32511304', 'page_content_top', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190356228163e627ef10dd78_37025254', 'page_content', $this->tplIndex);
?>
</div><?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_85348760563e627ef10f945_08582614 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Footer content --><?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_97680692063e627ef10f226_88098996 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<footer class="page-footer"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85348760563e627ef10f945_08582614', 'page_footer', $this->tplIndex);
?>
</footer><?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_170725367163e627ef10b7a1_05359359 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_170725367163e627ef10b7a1_05359359',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_180746751663e627ef10bf75_67168654',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_151386772063e627ef10cbd5_07867932',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_66397899463e627ef10d2e4_32511304',
  ),
  'page_content' => 
  array (
    0 => 'Block_190356228163e627ef10dd78_37025254',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_97680692063e627ef10f226_88098996',
  ),
  'page_footer' => 
  array (
    0 => 'Block_85348760563e627ef10f945_08582614',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="main"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180746751663e627ef10bf75_67168654', 'page_header_container', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151386772063e627ef10cbd5_07867932', 'page_content_container', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97680692063e627ef10f226_88098996', 'page_footer_container', $this->tplIndex);
?>
</div><?php
}
}
/* {/block 'content'} */
}
