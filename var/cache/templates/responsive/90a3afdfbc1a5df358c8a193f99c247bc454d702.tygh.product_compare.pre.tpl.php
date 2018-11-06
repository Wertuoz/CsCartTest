<?php /* Smarty version Smarty-3.1.21, created on 2018-11-04 22:19:01
         compiled from "/opt/lampp/htdocs/cscartRep/design/themes/responsive/templates/addons/product_variations/hooks/product_features/product_compare.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3806082635bdf4625c91753-09915342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90a3afdfbc1a5df358c8a193f99c247bc454d702' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/themes/responsive/templates/addons/product_variations/hooks/product_features/product_compare.pre.tpl',
      1 => 1539840993,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3806082635bdf4625c91753-09915342',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bdf4625cc4022_67525921',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bdf4625cc4022_67525921')) {function content_5bdf4625cc4022_67525921($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/opt/lampp/htdocs/cscartRep/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['variation_product_id']) {?>
    <?php $_smarty_tpl->tpl_vars['compare_product_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['variation_product_id'], null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['compare_product_id'] = clone $_smarty_tpl->tpl_vars['compare_product_id'];?>
<?php }?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/product_features/product_compare.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/hooks/product_features/product_compare.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['variation_product_id']) {?>
    <?php $_smarty_tpl->tpl_vars['compare_product_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['variation_product_id'], null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['compare_product_id'] = clone $_smarty_tpl->tpl_vars['compare_product_id'];?>
<?php }?>

<?php }?><?php }} ?>
