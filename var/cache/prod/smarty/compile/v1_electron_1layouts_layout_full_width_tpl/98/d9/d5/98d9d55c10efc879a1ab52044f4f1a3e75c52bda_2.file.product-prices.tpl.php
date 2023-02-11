<?php
/* Smarty version 4.2.1, created on 2023-02-10 16:02:44
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/catalog/_partials/product-prices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e66aa4b0c731_96806651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98d9d55c10efc879a1ab52044f4f1a3e75c52bda' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/catalog/_partials/product-prices.tpl',
      1 => 1674084822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e66aa4b0c731_96806651 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?><div class="product-prices"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174920570263e66aa4ade551_78562742', 'product_price');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213427674663e66aa4af0166_65004906', 'product_without_taxes');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7530334263e66aa4af3558_49275171', 'product_pack_price');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148816176963e66aa4af5fd7_99230043', 'product_ecotax');
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"weight",'hook_origin'=>'product_sheet'),$_smarty_tpl ) );?>
<div class="tax-shipping-delivery-label"><?php if ($_smarty_tpl->tpl_vars['configuration']->value['return_enabled']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Return policy:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['configuration']->value['number_of_days_for_return'], ENT_QUOTES, 'UTF-8');
}?><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['delivery_in_stock'], ENT_QUOTES, 'UTF-8');?>
</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"after_price"),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['product']->value['additional_delivery_times'] == 1) {
if ($_smarty_tpl->tpl_vars['product']->value['delivery_information']) {?><span class="delivery-information"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['delivery_information'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
} elseif ($_smarty_tpl->tpl_vars['product']->value['additional_delivery_times'] == 2) {
if ($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0) {?><span class="delivery-information"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['delivery_in_stock'], ENT_QUOTES, 'UTF-8');?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['product']->value['quantity'] == 0 && $_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?><span class="delivery-information"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['delivery_out_stock'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
}?></div></div><?php }
}
/* {block 'product_discount'} */
class Block_183574496463e66aa4ae18c5_84031969 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?><div class="product-discount"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>
<span class="regular-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span></div><?php }
}
}
/* {/block 'product_discount'} */
/* {block 'product_unit_price'} */
class Block_115110035063e66aa4ae8d07_78110234 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['displayUnitPrice']->value) {?><p class="product-unit-price sub"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(%unit_price%)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%unit_price%'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_full'])),$_smarty_tpl ) );?>
</p><?php }
}
}
/* {/block 'product_unit_price'} */
/* {block 'product_price'} */
class Block_174920570263e66aa4ade551_78562742 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price' => 
  array (
    0 => 'Block_174920570263e66aa4ade551_78562742',
  ),
  'product_discount' => 
  array (
    0 => 'Block_183574496463e66aa4ae18c5_84031969',
  ),
  'product_unit_price' => 
  array (
    0 => 'Block_115110035063e66aa4ae8d07_78110234',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="product-price h5 <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>has-discount<?php }?>" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><link itemprop="availability" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['seo_availability'], ENT_QUOTES, 'UTF-8');?>
" /><meta itemprop="priceCurrency" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
"><div class="current-price"><span class="price" itemprop="price" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span></div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183574496463e66aa4ae18c5_84031969', 'product_discount', $this->tplIndex);
if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {
if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?><span class="discount discount-percentage"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save %percentage%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%percentage%'=>$_smarty_tpl->tpl_vars['product']->value['discount_percentage_absolute'])),$_smarty_tpl ) );?>
</span><?php } else { ?><span class="discount discount-amount"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save %amount%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%amount%'=>$_smarty_tpl->tpl_vars['product']->value['discount_to_display'])),$_smarty_tpl ) );?>
</span><?php }
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115110035063e66aa4ae8d07_78110234', 'product_unit_price', $this->tplIndex);
if (Configuration::get('PS_TAX')) {?><div class="tvproduct-tax-label"><?php if ($_smarty_tpl->tpl_vars['configuration']->value['taxes_enabled']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax Included','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax Excluded','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
}?></div><?php }?></div><?php
}
}
/* {/block 'product_price'} */
/* {block 'product_without_taxes'} */
class Block_213427674663e66aa4af0166_65004906 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_without_taxes' => 
  array (
    0 => 'Block_213427674663e66aa4af0166_65004906',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 2) {?><p class="product-without-taxes"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%price% tax excl.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc'])),$_smarty_tpl ) );?>
</p><?php }
}
}
/* {/block 'product_without_taxes'} */
/* {block 'product_pack_price'} */
class Block_7530334263e66aa4af3558_49275171 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_pack_price' => 
  array (
    0 => 'Block_7530334263e66aa4af3558_49275171',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['displayPackPrice']->value) {?><p class="product-pack-price"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instead of %price%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['noPackPrice']->value)),$_smarty_tpl ) );?>
</span></p><?php }
}
}
/* {/block 'product_pack_price'} */
/* {block 'product_ecotax'} */
class Block_148816176963e66aa4af5fd7_99230043 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_ecotax' => 
  array (
    0 => 'Block_148816176963e66aa4af5fd7_99230043',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value['ecotax']['amount'] > 0) {?><p class="price-ecotax"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Including %amount% for ecotax','d'=>'Shop.Theme.Catalog','sprintf'=>array('%amount%'=>$_smarty_tpl->tpl_vars['product']->value['ecotax']['value'])),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(not impacted by the discount)','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
}?></p><?php }
}
}
/* {/block 'product_ecotax'} */
}
