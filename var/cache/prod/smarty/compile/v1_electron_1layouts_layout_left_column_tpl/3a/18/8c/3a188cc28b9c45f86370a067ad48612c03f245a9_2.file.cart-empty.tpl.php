<?php
/* Smarty version 4.2.1, created on 2023-02-10 17:05:37
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/checkout/cart-empty.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e6796120fad1_04815484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a188cc28b9c45f86370a067ad48612c03f245a9' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/checkout/cart-empty.tpl',
      1 => 1674084822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e6796120fad1_04815484 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11872839963e67961205917_96856521', 'content');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111148946063e679612088d6_98532755', 'continue_shopping');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133861491763e6796120bf12_14281162', 'cart_actions');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32935347763e6796120d8b2_63279250', 'continue_shopping');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164984281463e6796120e364_26654449', 'cart_voucher');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196698304063e6796120ee16_92338695', 'display_reassurance');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'checkout/cart.tpl');
}
/* {block 'content'} */
class Block_11872839963e67961205917_96856521 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11872839963e67961205917_96856521',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCrossSellingShoppingCart'),$_smarty_tpl ) );
}
}
/* {/block 'content'} */
/* {block 'continue_shopping'} */
class Block_111148946063e679612088d6_98532755 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'continue_shopping' => 
  array (
    0 => 'Block_111148946063e679612088d6_98532755',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="label tvall-inner-btn" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons">chevron_left</i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></a><?php
}
}
/* {/block 'continue_shopping'} */
/* {block 'cart_actions'} */
class Block_133861491763e6796120bf12_14281162 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_actions' => 
  array (
    0 => 'Block_133861491763e6796120bf12_14281162',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="checkout text-sm-center card-block"><button type="button" class="tvall-inner-btn-cancel disabled" disabled><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></button></div><?php
}
}
/* {/block 'cart_actions'} */
/* {block 'continue_shopping'} */
class Block_32935347763e6796120d8b2_63279250 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'continue_shopping' => 
  array (
    0 => 'Block_32935347763e6796120d8b2_63279250',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'continue_shopping'} */
/* {block 'cart_voucher'} */
class Block_164984281463e6796120e364_26654449 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_voucher' => 
  array (
    0 => 'Block_164984281463e6796120e364_26654449',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'cart_voucher'} */
/* {block 'display_reassurance'} */
class Block_196698304063e6796120ee16_92338695 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'display_reassurance' => 
  array (
    0 => 'Block_196698304063e6796120ee16_92338695',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'display_reassurance'} */
}
