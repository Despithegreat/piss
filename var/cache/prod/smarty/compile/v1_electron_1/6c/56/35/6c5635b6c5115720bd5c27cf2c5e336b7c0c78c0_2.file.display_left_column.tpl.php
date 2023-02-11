<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:07
  from '/home/u704205129/domains/piasat.com/public_html/modules/tvcmscustomerservices/views/templates/front/display_left_column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e627ef664913_68075210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c5635b6c5115720bd5c27cf2c5e336b7c0c78c0' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/modules/tvcmscustomerservices/views/templates/front/display_left_column.tpl',
      1 => 1674084821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e627ef664913_68075210 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status'] && $_smarty_tpl->tpl_vars['getSTATUS']->value == 1) {
if (!empty($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_1']['status']) || !empty($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_2']['status']) || !empty($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_3']['status']) || !empty($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_4']['status'])) {?><div class="tvcmscustomer-services container-fluid"><div class="tvcustomer-services container"><div class="tvservice-inner"><div class="tvservice-all-block-wrapper"><div class="tvservices-all-block"><div class="tvleft-right-title-wrapper"><div class="tvleft-right-title facet-label"> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['getLefttitle']->value, ENT_QUOTES, 'UTF-8');?>
</div><div class="tvleft-right-title-toggle"><i class="material-icons"></i></div></div><div class='tvleft-customer-services-wrapper-info'><div class="tv-all-service wrapper card-deck"><?php if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_1']['status']) {?><div class="tvservices-center card odd tvservice-payment"><div class="tvall-block-box-shadows"><div class="tvservices-1 tvall-services-block"><div class="tvservices-wrapper"><div class="tvservices-img-conut"><div class='tvservices-img'><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_1']['image'], ENT_QUOTES, 'UTF-8');?>
" class="tv-img-responsive" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_1']['title'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" /></div></div><div class='tvservices-content-box tvservices-info'><div class="tvservices-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_1']['title'], ENT_QUOTES, 'UTF-8');?>
</div><div class="tvservice-dec"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_1']['desc'], ENT_QUOTES, 'UTF-8');?>
</div></div></div></div></div></div><?php }
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_2']['status']) {?><div class="tvservices-center card even tvservice-cash-trustpay"><div class="tvall-block-box-shadows"><div class="tvservices-2 tvall-services-block"><div class="tvservices-wrapper"><div class="tvservices-img-conut"><div class='tvservices-img'><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_2']['image'], ENT_QUOTES, 'UTF-8');?>
" class="tv-img-responsive" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_2']['title'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" /> </div></div><div class='tvservices-content-box tvservices-info'><div class="tvservices-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_2']['title'], ENT_QUOTES, 'UTF-8');?>
</div><div class="tvservice-dec"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_2']['desc'], ENT_QUOTES, 'UTF-8');?>
</div></div></div></div></div></div><?php }
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_3']['status']) {?><div class="tvservices-center card odd tvservice-supprt"><div class="tvall-block-box-shadows"><div class="tvservices-3 tvall-services-block"><div class="tvservices-wrapper"><div class="tvservices-img-conut"><div class='tvservices-img'><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_3']['image'], ENT_QUOTES, 'UTF-8');?>
" class="tv-img-responsive" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_3']['title'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" /></div></div><div class='tvservices-content-box tvservices-info'><div class="tvservices-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_3']['title'], ENT_QUOTES, 'UTF-8');?>
</div><div class="tvservice-dec"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_3']['desc'], ENT_QUOTES, 'UTF-8');?>
</div></div></div></div></div></div><?php }
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_4']['status']) {?><div class="tvservices-center card even tvservice-shopon"><div class="tvall-block-box-shadows"><div class="tvservices-4 tvall-services-block"><div class="tvservices-wrapper"><div class="tvservices-img-conut"><div class='tvservices-img'><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_4']['image'], ENT_QUOTES, 'UTF-8');?>
" class="tv-img-responsive" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_4']['title'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" /></div></div><div class='tvservices-content-box tvservices-info'><div class="tvservices-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_4']['title'], ENT_QUOTES, 'UTF-8');?>
</div><div class="tvservice-dec"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_4']['desc'], ENT_QUOTES, 'UTF-8');?>
</div></div></div></div></div></div><?php }?></div></div></div></div></div></div></div><?php }
} elseif ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status'] && $_smarty_tpl->tpl_vars['getSTATUS']->value == 0 && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {
if (!empty($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_1']['status']) || !empty($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_2']['status']) || !empty($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_3']['status']) || !empty($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_4']['status'])) {?><div class="tvcmscustomer-services container-fluid"><div class="tvcustomer-services container"><div class="tvservice-inner"><div class="tvservice-all-block-wrapper"><div class="tvservices-all-block"><div class="tvleft-right-title-wrapper"><div class="tvleft-right-title facet-label"> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['getLefttitle']->value, ENT_QUOTES, 'UTF-8');?>
</div><div class="tvleft-right-title-toggle"><i class="material-icons"></i></div></div><div class='tvleft-customer-services-wrapper-info'><div class="tv-all-service wrapper card-deck"><?php if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_1']['status']) {?><div class="tvservices-center card odd tvservice-payment"><div class="tvall-block-box-shadows"><div class="tvservices-1 tvall-services-block"><div class="tvservices-wrapper"><div class="tvservices-img-conut"><div class='tvservices-img'><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_1']['image'], ENT_QUOTES, 'UTF-8');?>
" class="tv-img-responsive" width="50" height="50" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_1']['title'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" /></div></div><div class='tvservices-content-box tvservices-info'><div class="tvservices-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_1']['title'], ENT_QUOTES, 'UTF-8');?>
</div><div class="tvservice-dec"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_1']['desc'], ENT_QUOTES, 'UTF-8');?>
</div></div></div></div></div></div><?php }
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_2']['status']) {?><div class="tvservices-center card even tvservice-cash-trustpay"><div class="tvall-block-box-shadows"><div class="tvservices-2 tvall-services-block"><div class="tvservices-wrapper"><div class="tvservices-img-conut"><div class='tvservices-img'><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_2']['image'], ENT_QUOTES, 'UTF-8');?>
" class="tv-img-responsive" width="50" height="50" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_2']['title'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" /> </div></div><div class='tvservices-content-box tvservices-info'><div class="tvservices-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_2']['title'], ENT_QUOTES, 'UTF-8');?>
</div><div class="tvservice-dec"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_2']['desc'], ENT_QUOTES, 'UTF-8');?>
</div></div></div></div></div></div><?php }
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_3']['status']) {?><div class="tvservices-center card odd tvservice-supprt"><div class="tvall-block-box-shadows"><div class="tvservices-3 tvall-services-block"><div class="tvservices-wrapper"><div class="tvservices-img-conut"><div class='tvservices-img'><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_3']['image'], ENT_QUOTES, 'UTF-8');?>
" class="tv-img-responsive" width="50" height="50" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_3']['title'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" /></div></div><div class='tvservices-content-box tvservices-info'><div class="tvservices-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_3']['title'], ENT_QUOTES, 'UTF-8');?>
</div><div class="tvservice-dec"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_3']['desc'], ENT_QUOTES, 'UTF-8');?>
</div></div></div></div></div></div><?php }
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_4']['status']) {?><div class="tvservices-center card even tvservice-shopon"><div class="tvall-block-box-shadows"><div class="tvservices-4 tvall-services-block"><div class="tvservices-wrapper"><div class="tvservices-img-conut"><div class='tvservices-img'><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_4']['image'], ENT_QUOTES, 'UTF-8');?>
" class="tv-img-responsive" width="50" height="50" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_4']['title'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" /></div></div><div class='tvservices-content-box tvservices-info'><div class="tvservices-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_4']['title'], ENT_QUOTES, 'UTF-8');?>
</div><div class="tvservice-dec"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_4']['desc'], ENT_QUOTES, 'UTF-8');?>
</div></div></div></div></div></div><?php }?></div></div></div></div></div></div></div><?php }
}
}
}
