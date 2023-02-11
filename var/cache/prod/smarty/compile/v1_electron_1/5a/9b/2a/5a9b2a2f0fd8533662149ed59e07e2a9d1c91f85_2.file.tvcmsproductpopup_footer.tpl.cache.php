<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:07
  from '/home/u704205129/domains/piasat.com/public_html/modules/tvcmsproductpopup/views/templates/hook/tvcmsproductpopup_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e627ef1007e1_26526975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a9b2a2f0fd8533662149ed59e07e2a9d1c91f85' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/modules/tvcmsproductpopup/views/templates/hook/tvcmsproductpopup_footer.tpl',
      1 => 1674084821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./product.tpl' => 1,
  ),
),false)) {
function content_63e627ef1007e1_26526975 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '77359078363e627ef0f7c13_76021930';
?>

<div class="prod-animation tvcms-snackbar hidden-sm-down">
	<?php if ((isset($_smarty_tpl->tpl_vars['group_prod_fliter']->value['product_list'])) && count($_smarty_tpl->tpl_vars['group_prod_fliter']->value['product_list']) > 0) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group_prod_fliter']->value['product_list'], 'product', false, NULL, 'product_list', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
			<div class="tvcms-prod-popup">
			<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['id_product']))) {?>
				<?php $_smarty_tpl->_subTemplateRender("file:./product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
			<?php }?>
			</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php } else { ?>
		<div class="tvcms-prod-popup">
			<p class="alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No product at this time','mod'=>'tvcmsproductpopup'),$_smarty_tpl ) );?>
</p>
		</div>	
	<?php }?>

</div><?php }
}
