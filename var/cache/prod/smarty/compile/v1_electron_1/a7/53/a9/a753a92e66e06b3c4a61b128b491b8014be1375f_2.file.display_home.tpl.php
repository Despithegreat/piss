<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:25:42
  from '/home/u704205129/domains/piasat.com/public_html/modules/tvcmsslider/views/templates/front/display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e629b67421a4_04370031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a753a92e66e06b3c4a61b128b491b8014be1375f' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/modules/tvcmsslider/views/templates/front/display_home.tpl',
      1 => 1674084821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e629b67421a4_04370031 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_assignInScope('col', '');
if (!empty($_smarty_tpl->tpl_vars['offer_banner']->value)) {
$_smarty_tpl->_assignInScope('col', 'col-md-10 col-lg-10');
}
if (!empty($_smarty_tpl->tpl_vars['data']->value)) {?><div class="tvcms-slider-offerbanner-wrapper container-fluid"><div class="container"><div class="row"><div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['col']->value, ENT_QUOTES, 'UTF-8');?>
 tvcmsmain-slider-wrapper" data-speed='<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['main_slider_js']->value['speed'], ENT_QUOTES, 'UTF-8');?>
' data-pause-hover='<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['main_slider_js']->value['pause'], ENT_QUOTES, 'UTF-8');?>
'><div class='tvcms-main-slider'><div class='tv-main-slider'><div id='tvmain-slider' class="owl-theme owl-carousel tvcms-hide-owl" <?php if (!empty($_smarty_tpl->tpl_vars['data']->value[0]['width']) && !empty($_smarty_tpl->tpl_vars['data']->value[0]['height'])) {?> style="aspect-ratio: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value[0]['width']/$_smarty_tpl->tpl_vars['data']->value[0]['height'], ENT_QUOTES, 'UTF-8');?>
; height:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value[0]['height'], ENT_QUOTES, 'UTF-8');?>
;"<?php }?>><?php $_smarty_tpl->_assignInScope('i', 0);
$_smarty_tpl->_assignInScope('dataBottom', '');
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'slide');
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
if ($_smarty_tpl->tpl_vars['slide']->value["ivr_value"] == "image_upload") {
if (!empty($_smarty_tpl->tpl_vars['slide']->value['url']) && $_smarty_tpl->tpl_vars['slide']->value["ivr_value"] == "image_upload") {?><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="tvimage tvslider-list" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
"><?php }?><picture><source srcset='<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slide']->value["med_image_url"], ENT_QUOTES, 'UTF-8');?>
' media="(max-width: 768px) and (min-width: 576px)" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slide']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slide']->value['med_height'], ENT_QUOTES, 'UTF-8');?>
"><source srcset='<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slide']->value["sml_image_url"], ENT_QUOTES, 'UTF-8');?>
' media="(max-width: 575px)" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slide']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slide']->value['sml_height'], ENT_QUOTES, 'UTF-8');?>
"><img class="tvmain-slider-img" src='<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slide']->value["image_url"], ENT_QUOTES, 'UTF-8');?>
' alt='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Main Slider",'mod'=>"tvcmsslider"),$_smarty_tpl ) );?>
'  data-caption-id='tvmain-slider-img-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
' width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slide']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slide']->value['height'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value != 0) {?>style="display:none" loading="lazy" <?php }?>> </picture> <?php if (!empty($_smarty_tpl->tpl_vars['slide']->value['url']) && $_smarty_tpl->tpl_vars['slide']->value["ivr_value"] == "image_upload") {?> </a> <?php }?> <?php } elseif ($_smarty_tpl->tpl_vars['slide']->value["ivr_value"] == "video_upload") {?> <div class="tv-video tvslider-list"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
"><button class="tvslider-video-link active"><i class="material-icons">&#xe89e;</i></button></a><button class="tvslider-video-play active"><i class="material-icons">play_arrow</i></button><button class="tvslider-video-mute active"><i class="material-icons">volume_up</i></button><video class="tvslider-video<?php ob_start();
echo htmlspecialchars((string) !$_smarty_tpl->tpl_vars['slide']->value['video_width'], ENT_QUOTES, 'UTF-8');
$_prefixVariable3 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) !$_smarty_tpl->tpl_vars['slide']->value['video_height'], ENT_QUOTES, 'UTF-8');
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable3 && $_prefixVariable4) {?> tvcms-test<?php }?>" loop="loop" <?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slide']->value['video_width'], ENT_QUOTES, 'UTF-8');
$_prefixVariable5 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slide']->value['video_height'], ENT_QUOTES, 'UTF-8');
$_prefixVariable6 = ob_get_clean();
if ($_prefixVariable5 && $_prefixVariable6) {?> width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slide']->value['video_width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slide']->value['video_height'], ENT_QUOTES, 'UTF-8');?>
" <?php }?> preload="metadata"><source type="video/mp4" data-src='<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slide']->value["image_url"], ENT_QUOTES, 'UTF-8');?>
'></video></div><?php }
if ($_smarty_tpl->tpl_vars['slide']->value['image_url'] || (!$_smarty_tpl->tpl_vars['slide']->value['class_name'] == 'tvmain-slider-contant-none')) {
if ($_smarty_tpl->tpl_vars['slide']->value['title'] || $_smarty_tpl->tpl_vars['slide']->value['description']) {
ob_start();
if ($_smarty_tpl->tpl_vars['i']->value == 0) {
echo "active";
}
$_prefixVariable7=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['slide']->value['description'];
$_prefixVariable8=ob_get_clean();
$_smarty_tpl->_assignInScope('dataBottom', ((string)$_smarty_tpl->tpl_vars['dataBottom']->value)."<div id=\"tvmain-slider-img-".((string)$_smarty_tpl->tpl_vars['i']->value)."\" class=\"tvmain-slider-content-inner ".$_prefixVariable7."\" data-index=\"".((string)$_smarty_tpl->tpl_vars['i']->value)."\">
                                <div class=\"tvmain-slider-contant ".((string)$_smarty_tpl->tpl_vars['slide']->value['class_name'])."\">
                                    <h2 class=\"tvmain-slider-title animated\">".((string)$_smarty_tpl->tpl_vars['slide']->value['title'])."</h2>
                                    <div class=\"tvmain-slider-info animated\">".$_prefixVariable8."</div>
                                </div>
                            </div>");
}
}
$_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="tvmain-slider-next-pre-btn"><div class="tvcmsmain-prev tvcmsprev-btn"><i class='material-icons'>&#xe5cb;</i></div><div class="tvcmsmain-next tvcmsnext-btn"><i class='material-icons'>&#xe5cc;</i></div></div></div><div class="tvmain-slider-content-wrapper"><?php echo $_smarty_tpl->tpl_vars['dataBottom']->value;?>
</div></div></div><?php echo $_smarty_tpl->tpl_vars['offer_banner']->value;?>
</div></div></div><?php }
}
}
