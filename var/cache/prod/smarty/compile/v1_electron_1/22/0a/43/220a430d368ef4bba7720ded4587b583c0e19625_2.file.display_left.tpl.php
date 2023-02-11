<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:07
  from '/home/u704205129/domains/piasat.com/public_html/modules/tvcmsbestsellerproducts/views/templates/front/display_left.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e627ef6907b3_52960822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '220a430d368ef4bba7720ded4587b583c0e19625' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/modules/tvcmsbestsellerproducts/views/templates/front/display_left.tpl',
      1 => 1674084821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:tvcmsbestsellerproducts/views/templates/front/display_side_product.tpl' => 2,
  ),
),false)) {
function content_63e627ef6907b3_52960822 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status'] && $_smarty_tpl->tpl_vars['dis_arr_result']->value['left_status'] && count($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['product_list']) > 0 && $_smarty_tpl->tpl_vars['AllStatusbest']->value == 1) {
$_smarty_tpl->_subTemplateRender("module:tvcmsbestsellerproducts/views/templates/front/display_side_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('main_title_status'=>$_smarty_tpl->tpl_vars['main_heading']->value['main_left_title'],'main_title'=>$_smarty_tpl->tpl_vars['main_heading']->value['data']['left_title'],'products'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['product_list'],'tv_product_type'=>'best_seller_product_left','link'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['link']), 0, false);
} elseif ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status'] && $_smarty_tpl->tpl_vars['dis_arr_result']->value['left_status'] && count($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['product_list']) > 0 && $_smarty_tpl->tpl_vars['AllStatusbest']->value == 0 && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {
$_smarty_tpl->_subTemplateRender("module:tvcmsbestsellerproducts/views/templates/front/display_side_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('main_title_status'=>$_smarty_tpl->tpl_vars['main_heading']->value['main_left_title'],'main_title'=>$_smarty_tpl->tpl_vars['main_heading']->value['data']['left_title'],'products'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['product_list'],'tv_product_type'=>'best_seller_product_left','link'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['link']), 0, true);
}
}
}
