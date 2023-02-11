<?php
/* Smarty version 4.2.1, created on 2023-02-10 16:02:45
  from '/home/u704205129/domains/piasat.com/public_html/modules/tvcmsproductcomments/views/templates/front/tvcmsproductcomments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e66aa51a2ef9_10648787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46b2736860ed9c34aa871b30c93ad0ad5a32e317' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/modules/tvcmsproductcomments/views/templates/front/tvcmsproductcomments.tpl',
      1 => 1674084821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e66aa51a2ef9_10648787 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php echo '<script'; ?>
>var tvcmsproductcomments_controller_url = '<?php echo $_smarty_tpl->tpl_vars['tvcmsproductcomments_controller_url']->value;?>
';var confirm_report_message = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure that you want to report this comment?','mod'=>'tvcmsproductcomments','js'=>1),$_smarty_tpl ) );?>
';var secure_key = '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['secure_key']->value, ENT_QUOTES, 'UTF-8');?>
';var tvcmsproductcomments_url_rewrite = '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tvcmsproductcomments_url_rewriting_activated']->value, ENT_QUOTES, 'UTF-8');?>
';var tvcmsproductcomment_added = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your comment has been added!','mod'=>'tvcmsproductcomments','js'=>1),$_smarty_tpl ) );?>
';var tvcmsproductcomment_added_moderation = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your comment has been submitted and will be available once approved by a moderator.','mod'=>'tvcmsproductcomments','js'=>1),$_smarty_tpl ) );?>
';var tvcmsproductcomment_title = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New comment','mod'=>'tvcmsproductcomments','js'=>1),$_smarty_tpl ) );?>
';var tvcmsproductcomment_ok = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK','mod'=>'tvcmsproductcomments','js'=>1),$_smarty_tpl ) );?>
';var moderation_active = <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['moderation_active']->value, ENT_QUOTES, 'UTF-8');?>
;<?php echo '</script'; ?>
><div class="tab-pane fade in" id="tvcmsproductCommentsBlock"><div class="tabs"><div class="clearfix pull-right tvReviews"><?php if (($_smarty_tpl->tpl_vars['too_early']->value == false && ($_smarty_tpl->tpl_vars['logged']->value || $_smarty_tpl->tpl_vars['allow_guests']->value))) {?><a class="open-comment-form tvall-inner-btn" href="#new_comment_form"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write your review','mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );?>
</span></a><?php }?></div><div id="new_comment_form_ok" class="alert alert-success" style="display:none;padding:15px 25px"></div><div id="tvcmsproduct_comments_block_tab" class="row"><?php if ($_smarty_tpl->tpl_vars['comments']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
$_smarty_tpl->tpl_vars['comment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->do_else = false;
if ($_smarty_tpl->tpl_vars['comment']->value['content']) {?><div class="col-md-6"><div class="comment clearfix"><div class="comment_author"><div class="comment_author_infos"><strong><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['customer_name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</strong><em><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['date_add'],'html','UTF-8' )),'full'=>0),$_smarty_tpl ) );?>
</em></div><div class="star_content clearfix"><?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= 5; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
if ($_smarty_tpl->tpl_vars['comment']->value['grade'] <= (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?><div class="star"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');?>
star-no.png" loading="lazy"></div><?php } else { ?><div class="star star_on"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');?>
star.png" loading="lazy"></div><?php }
}
}
?></div></div><div class="comment_details"><h6 class="title_block"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comment']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h6><p><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['content'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</p><ul><?php if ($_smarty_tpl->tpl_vars['comment']->value['total_advice'] > 0) {?><li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%1$d out of %2$d people found this review useful.','sprintf'=>array($_smarty_tpl->tpl_vars['comment']->value['total_useful'],$_smarty_tpl->tpl_vars['comment']->value['total_advice']),'mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );?>
</li><?php }
if ($_smarty_tpl->tpl_vars['logged']->value) {
if (!$_smarty_tpl->tpl_vars['comment']->value['customer_advice']) {?><li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Was this comment useful to you?','mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );?>
&nbsp;&nbsp;&nbsp;<button class="usefulness_btn btn btn-unstyle" data-is-usefull="1" data-id-product-comment="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comment']->value['id_tvcmsproduct_comment'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );?>
</button>&nbsp;&nbsp;<button class="usefulness_btn btn btn-unstyle" data-is-usefull="0" data-id-product-comment="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comment']->value['id_tvcmsproduct_comment'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );?>
</button></li><?php }
if (!$_smarty_tpl->tpl_vars['comment']->value['customer_report']) {?><li><span class="report_btn btn" data-id-product-comment="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comment']->value['id_tvcmsproduct_comment'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Report abuse','mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );?>
</span></li><?php }
}?></ul><?php echo hook::exec('displayProductComment',$_smarty_tpl->tpl_vars['comment']->value);?>
</div></div></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?><p class="align_center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No customer reviews for the moment.','mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );?>
</p><?php }?></div></div><?php if ((isset($_smarty_tpl->tpl_vars['product']->value)) && $_smarty_tpl->tpl_vars['product']->value) {?><!-- Fancybox --><div style="display:none"><div id="new_comment_form"><form id="id_new_comment_form" action="#"><div class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write your review','mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );?>
</div><div class="tvcmsproduct-image-comment col-xs-12 col-sm-6 text-center"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8');?>
" width="300" loading="lazy"></div><div class="tvproduct-review-box new_comment_form_content col-xs-12 col-sm-6"><?php if ((isset($_smarty_tpl->tpl_vars['product']->value)) && $_smarty_tpl->tpl_vars['product']->value) {?><div class="tvproduct-name"><div class="product-title"><a href="#"><h6><?php if ((isset($_smarty_tpl->tpl_vars['product']->value->name))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8');
} elseif ((isset($_smarty_tpl->tpl_vars['product']->value['name']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?></h6></a></div></div><?php }
if (count($_smarty_tpl->tpl_vars['criterions']->value) > 0) {?><ul id="criterions_list"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['criterions']->value, 'criterion');
$_smarty_tpl->tpl_vars['criterion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['criterion']->value) {
$_smarty_tpl->tpl_vars['criterion']->do_else = false;
?><li><label><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['criterion']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</label><div class="star_content"><input class="star" type="radio" name="criterion[<?php echo htmlspecialchars((string) round($_smarty_tpl->tpl_vars['criterion']->value['id_tvcmsproduct_comment_criterion']), ENT_QUOTES, 'UTF-8');?>
]" value="1" /><input class="star" type="radio" name="criterion[<?php echo htmlspecialchars((string) round($_smarty_tpl->tpl_vars['criterion']->value['id_tvcmsproduct_comment_criterion']), ENT_QUOTES, 'UTF-8');?>
]" value="2" /><input class="star" type="radio" name="criterion[<?php echo htmlspecialchars((string) round($_smarty_tpl->tpl_vars['criterion']->value['id_tvcmsproduct_comment_criterion']), ENT_QUOTES, 'UTF-8');?>
]" value="3" /><input class="star" type="radio" name="criterion[<?php echo htmlspecialchars((string) round($_smarty_tpl->tpl_vars['criterion']->value['id_tvcmsproduct_comment_criterion']), ENT_QUOTES, 'UTF-8');?>
]" value="4" /><input class="star" type="radio" name="criterion[<?php echo htmlspecialchars((string) round($_smarty_tpl->tpl_vars['criterion']->value['id_tvcmsproduct_comment_criterion']), ENT_QUOTES, 'UTF-8');?>
]" value="5" checked="checked" /></div><div class="clearfix"></div></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }?><div class="tvcustom-review-box"><label for="comment_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title for your review','mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );?>
<sup class="required">*</sup></label><input id="comment_title" name="title" type="text" value="" /></div><div class="tvcustom-review-box"><label for="review_content"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your review','mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );?>
<sup class="required">*</sup></label><textarea id="review_content" name="content"></textarea></div><div class="tvcustom-review-box"><?php if ($_smarty_tpl->tpl_vars['allow_guests']->value == true && !$_smarty_tpl->tpl_vars['logged']->value) {?><label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your name','mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );?>
<sup class="required">*</sup></label><input id="commentCustomerName" name="customer_name" type="text" value="" /><?php }?></div><div id="new_comment_form_footer"><div id="new_comment_form_error" class="error"><ul></ul></div><input id="id_tvcmsproduct_comment_send" name="id_product" type="hidden" value='<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_tvcmsproduct_comment_form']->value, ENT_QUOTES, 'UTF-8');?>
' /><p class="fl required"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Required fields','mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );?>
<sup>*</sup> </p><div class="fr tvreviews-popup-send-btn"><button class="tvall-inner-btn" id="submitNewMessage" name="submitMessage" type="submit"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send','mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );?>
</span></button>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'or','mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );?>
&nbsp;<a href="#" onclick="$.fancybox.close();" class="tvall-inner-btn"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );?>
</span></a></div><div class="clearfix"></div></div></div></form><!-- /end new_comment_form_content --></div></div><!-- End fancybox --><?php }?></div><?php }
}
