<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:06
  from '/home/u704205129/domains/piasat.com/public_html/modules/tvcmsinfinitescroll/views/templates/front/tvcmsinfinitescroll_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e627ee98c3c5_42446544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d5ec0f7204ed00dc33593ee051cc63a48a0f8ea' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/modules/tvcmsinfinitescroll/views/templates/front/tvcmsinfinitescroll_header.tpl',
      1 => 1674084821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e627ee98c3c5_42446544 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['prev_page_value']->value)) && $_smarty_tpl->tpl_vars['prev_page_value']->value) {?><link rel="prev" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prev_page_value']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php }
if ((isset($_smarty_tpl->tpl_vars['next_page_value']->value)) && $_smarty_tpl->tpl_vars['next_page_value']->value) {?><link rel="next" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['next_page_value']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php }?><!-- Module TvcmsInfiniteScroll for PRODUCTS --><?php if ((isset($_smarty_tpl->tpl_vars['tv_options']->value))) {
echo '<script'; ?>
>var tv_params = {product_wrapper : "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tv_options']->value['product_wrapper'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",product_elem : "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tv_options']->value['product_elem'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",pagination_wrapper : "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tv_options']->value['pagination_wrapper'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",next_button : "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tv_options']->value['next_button'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",views_buttons : "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tv_options']->value['views_buttons'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",selected_view : "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tv_options']->value['selected_view'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",method : "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tv_options']->value['method'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",button_start_page : "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tv_options']->value['button_start_page'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",button_n_pages : "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tv_options']->value['button_n_pages'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",active_with_layered : "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tv_options']->value['active_with_layered'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",loader : "<div id=\"tv-loader\"><p><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tv_texts']->value['loading_text'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</p></div>",loader_prev : "<div id=\"tv-loader\"><p><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tv_texts']->value['loading_prev_text'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</p></div>",button : "<button id=\"tv-button-load-products\"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tv_texts']->value['button_text'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</button>",back_top_button : "<div id=\"tv-back-top-wrapper\"><p><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tv_texts']->value['end_text'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <a href=\"#\" class=\"tv-back-top-link\"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tv_texts']->value['go_top_text'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a></p></div>",tvcmsinfinitescrollqv_enabled : "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tv_options']->value['tvcmsinfinitescrollqv_enabled'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",has_facetedSearch : "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tv_options']->value['has_facetedSearch'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",ps_16 : "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tv_options']->value['ps_16'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"}// -----------------------------------------------------------// HOOK CUSTOM// - After next products displayed// function tv_hook_after_display_products() {// ---------------// CUSTOMIZE HERE// ---------------// }<?php echo '</script'; ?>
><?php }
}
}
