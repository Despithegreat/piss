<?php
/* Smarty version 4.2.1, created on 2023-02-10 11:18:06
  from '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e627eeed0402_88584329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e3d0b3629b4bb814a6c41c08eeabccce3147c01' => 
    array (
      0 => '/home/u704205129/domains/piasat.com/public_html/themes/v1_electron_1/templates/_partials/helpers.tpl',
      1 => 1674084822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e627eeed0402_88584329 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/u704205129/domains/piasat.com/public_html/var/cache/prod/smarty/compile/v1_electron_1layouts_layout_left_column_tpl/0e/3d/0b/0e3d0b3629b4bb814a6c41c08eeabccce3147c01_2.file.helpers.tpl.php',
    'uid' => '0e3d0b3629b4bb814a6c41c08eeabccce3147c01',
    'call_name' => 'smarty_template_function_renderLogo_164374647463e627eeeca967_13506057',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_164374647463e627eeeca967_13506057 */
if (!function_exists('smarty_template_function_renderLogo_164374647463e627eeeca967_13506057')) {
function smarty_template_function_renderLogo_164374647463e627eeeca967_13506057(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_164374647463e627eeeca967_13506057 */
}
