<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:35
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/_partials/form-fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e6280b3be796_02238415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70178f9977c7baaca56df17838d9069eb86f0f79' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/_partials/form-fields.tpl',
      1 => 1674084822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_63e6280b3be796_02238415 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'hidden') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204293803363e6280b3677c4_64039865', 'form_field_item_hidden');
} else { ?><div class="form-group row <?php if (!empty($_smarty_tpl->tpl_vars['field']->value['errors'])) {?>has-error<?php }?>"><label class="col-md-3 form-control-label<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>" for="field-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['field']->value['type'] !== 'checkbox') {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');
}?></label><div class="col-md-12  js-input-column<?php if (($_smarty_tpl->tpl_vars['field']->value['type'] === 'radio-buttons')) {?> form-control-valign<?php }?>"><?php if ($_smarty_tpl->tpl_vars['field']->value['type'] === 'select') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5264789463e6280b370423_54007173', 'form_field_item_select');
} elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'countrySelect') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157797503063e6280b3782f0_38317978', 'form_field_item_country');
} elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'radio-buttons') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61210355863e6280b37ee19_68215761', 'form_field_item_radio');
} elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'checkbox') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88604025063e6280b385750_30453120', 'form_field_item_checkbox');
} elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'date') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194811833263e6280b38b133_55070159', 'form_field_item_date');
} elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'birthday') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158883142263e6280b392617_46005418', 'form_field_item_birthday');
} elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'password') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169643168463e6280b3a1637_84084069', 'form_field_item_password');
} else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13362823363e6280b3aeb51_91596086', 'form_field_item_other');
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76339990763e6280b3b7e61_92413786', 'form_field_errors');
?>
</div><div class="col-md-3 form-control-comment"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125379948663e6280b3b9894_47052474', 'form_field_comment');
?>
</div></div><?php }
}
/* {block 'form_field_item_hidden'} */
class Block_204293803363e6280b3677c4_64039865 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_hidden' => 
  array (
    0 => 'Block_204293803363e6280b3677c4_64039865',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');?>
"><?php
}
}
/* {/block 'form_field_item_hidden'} */
/* {block 'form_field_item_select'} */
class Block_5264789463e6280b370423_54007173 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_select' => 
  array (
    0 => 'Block_5264789463e6280b370423_54007173',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<select class="form-control form-control-select" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>><option value disabled selected><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- please choose --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['availableValues'], 'label', false, 'value');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?><option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> selected <?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><?php
}
}
/* {/block 'form_field_item_select'} */
/* {block 'form_field_item_country'} */
class Block_157797503063e6280b3782f0_38317978 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_country' => 
  array (
    0 => 'Block_157797503063e6280b3782f0_38317978',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<select class="form-control form-control-select js-country" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>><option value disabled selected><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- please choose --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['availableValues'], 'label', false, 'value');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?><option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> selected <?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><?php
}
}
/* {/block 'form_field_item_country'} */
/* {block 'form_field_item_radio'} */
class Block_61210355863e6280b37ee19_68215761 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_radio' => 
  array (
    0 => 'Block_61210355863e6280b37ee19_68215761',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['availableValues'], 'label', false, 'value');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?><label class="radio-inline"><span class="custom-radio"><input name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');?>
" type="radio" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?> <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> checked <?php }?> ><span></span></span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>
</label><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'form_field_item_radio'} */
/* {block 'form_field_item_checkbox'} */
class Block_88604025063e6280b385750_30453120 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_checkbox' => 
  array (
    0 => 'Block_88604025063e6280b385750_30453120',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<span class="custom-checkbox"><input name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['field']->value['value']) {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>><span><i class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span><label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['label'];?>
</label ></span><?php
}
}
/* {/block 'form_field_item_checkbox'} */
/* {block 'form_field_item_date'} */
class Block_194811833263e6280b38b133_55070159 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_date' => 
  array (
    0 => 'Block_194811833263e6280b38b133_55070159',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<input name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="form-control" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder'], ENT_QUOTES, 'UTF-8');
}?>"><?php if ((isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment']))) {?><span class="form-control-comment"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['availableValues']['comment'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
}
}
/* {/block 'form_field_item_date'} */
/* {block 'form_field_item_birthday'} */
class Block_158883142263e6280b392617_46005418 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_birthday' => 
  array (
    0 => 'Block_158883142263e6280b392617_46005418',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/u704205129/domains/piasat.com/public_html/vendor/smarty/smarty/libs/plugins/function.html_select_date.php','function'=>'smarty_function_html_select_date',),));
?>
<div class="js-parent-focus"><?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- day --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );
$_prefixVariable3 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- month --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );
$_prefixVariable4 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- year --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );
$_prefixVariable5 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) date('Y'), ENT_QUOTES, 'UTF-8');
$_prefixVariable6 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) date('Y'), ENT_QUOTES, 'UTF-8');
$_prefixVariable7 = ob_get_clean();
echo smarty_function_html_select_date(array('field_order'=>'DMY','time'=>$_prefixVariable1,'field_array'=>$_prefixVariable2,'prefix'=>false,'reverse_years'=>true,'field_separator'=>'<br>','day_extra'=>'class="form-control form-control-select"','month_extra'=>'class="form-control form-control-select"','year_extra'=>'class="form-control form-control-select"','day_empty'=>$_prefixVariable3,'month_empty'=>$_prefixVariable4,'year_empty'=>$_prefixVariable5,'start_year'=>$_prefixVariable6-100,'end_year'=>$_prefixVariable7),$_smarty_tpl);?>
</div><?php
}
}
/* {/block 'form_field_item_birthday'} */
/* {block 'form_field_item_password'} */
class Block_169643168463e6280b3a1637_84084069 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_password' => 
  array (
    0 => 'Block_169643168463e6280b3a1637_84084069',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="input-group js-parent-focus"><input id="field-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"class="form-control js-child-focus js-visible-password"name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password input','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
"type="password"<?php if ((isset($_smarty_tpl->tpl_vars['configuration']->value['password_policy']['minimum_length']))) {?>data-minlength="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['configuration']->value['password_policy']['minimum_length'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['configuration']->value['password_policy']['maximum_length']))) {?>data-maxlength="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['configuration']->value['password_policy']['maximum_length'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['configuration']->value['password_policy']['minimum_score']))) {?>data-minscore="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['configuration']->value['password_policy']['minimum_score'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['field']->value['autocomplete']) {?>autocomplete="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>value=""pattern=".{5,}"<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>><span class="input-group-btn"><button class="btn" type="button" data-action="show-password" data-text-show="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" data-text-hide="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hide','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button></span></div><?php
}
}
/* {/block 'form_field_item_password'} */
/* {block 'form_field_item_other'} */
class Block_13362823363e6280b3aeb51_91596086 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_other' => 
  array (
    0 => 'Block_13362823363e6280b3aeb51_91596086',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<input class="form-control" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" type="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['type'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder']))) {?>placeholder="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['maxLength']) {?>maxlength="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['maxLength'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?> ><?php if ((isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment']))) {?><span class="form-control-comment"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['availableValues']['comment'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
}
}
/* {/block 'form_field_item_other'} */
/* {block 'form_field_errors'} */
class Block_76339990763e6280b3b7e61_92413786 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_errors' => 
  array (
    0 => 'Block_76339990763e6280b3b7e61_92413786',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['field']->value['errors']), 0, false);
}
}
/* {/block 'form_field_errors'} */
/* {block 'form_field_comment'} */
class Block_125379948663e6280b3b9894_47052474 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_comment' => 
  array (
    0 => 'Block_125379948663e6280b3b9894_47052474',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ((!$_smarty_tpl->tpl_vars['field']->value['required'] && !in_array($_smarty_tpl->tpl_vars['field']->value['type'],array('radio-buttons','checkbox')))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Optional','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );
}
}
}
/* {/block 'form_field_comment'} */
}
