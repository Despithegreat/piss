<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:07
  from '/home/u704205129/domains/piasat.com/public_html/modules/tvcmsproductcomments/views/templates/front/tvcmsproductcomments_reviews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e627ef180be4_46314686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '231ced9d12ec8c1fc697b7caf296a1ec1cf2a0d3' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/modules/tvcmsproductcomments/views/templates/front/tvcmsproductcomments_reviews.tpl',
      1 => 1674084821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e627ef180be4_46314686 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '128406105963e627ef162618_33166739';
if ((isset($_smarty_tpl->tpl_vars['productType']->value)) && $_smarty_tpl->tpl_vars['productType']->value == 'grid') {?><div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating"><div class="tvall-product-star-icon" itemprop="reviewCount" content='<?php if ($_smarty_tpl->tpl_vars['total_comments']->value > 0) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['total_comments']->value, ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>'><div class="star_content" itemprop="ratingValue" content='<?php if ($_smarty_tpl->tpl_vars['averageTotal']->value > 0) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['averageTotal']->value, ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>'><?php $_smarty_tpl->_assignInScope('count_review', 0);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= 5; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
if ($_smarty_tpl->tpl_vars['averageTotal']->value <= (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?><div class="star"><i class='material-icons'>&#xe838;</i> </div><?php } else { ?><div class="star star_on"><i class='material-icons'>&#xe838;</i> </div><?php $_smarty_tpl->_assignInScope('count_review', $_smarty_tpl->tpl_vars['count_review']->value+1);
}
}
}
?></div><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?><div class='tvall-product-review'><?php if ($_smarty_tpl->tpl_vars['total_comments']->value == 0 || $_smarty_tpl->tpl_vars['total_comments']->value < 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Review','mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );?>
&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>sprintf('(%s)',$_smarty_tpl->tpl_vars['total_comments']->value),'mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );?>
&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>sprintf('(%s)',$_smarty_tpl->tpl_vars['total_comments']->value),'mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );
}?></div><?php }?></div></div><?php } else { ?><div class="tvall-product-star-icon"><div class="star_content"><?php $_smarty_tpl->_assignInScope('count_review', 0);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= 5; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
if ($_smarty_tpl->tpl_vars['averageTotal']->value <= (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?><div class="star"><i class='material-icons'>&#xe838;</i> </div><?php } else { ?><div class="star star_on"><i class='material-icons'>&#xe838;</i> </div><?php $_smarty_tpl->_assignInScope('count_review', $_smarty_tpl->tpl_vars['count_review']->value+1);
}
}
}
?></div><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?><div class='tvall-product-review'><?php if ($_smarty_tpl->tpl_vars['total_comments']->value == 0 || $_smarty_tpl->tpl_vars['total_comments']->value < 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Review','mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );?>
&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>sprintf('(%s)',$_smarty_tpl->tpl_vars['total_comments']->value),'mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );?>
&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>sprintf('(%s)',$_smarty_tpl->tpl_vars['total_comments']->value),'mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );
}?></div><?php }?></div><?php }
}
}
